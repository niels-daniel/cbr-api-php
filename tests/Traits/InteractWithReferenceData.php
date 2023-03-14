<?php

namespace MetMax\Cbr\Tests\Traits;

use Http\Client\Common\PluginClient;
use Http\Client\Plugin\Vcr\NamingStrategy\PathNamingStrategy;
use Http\Client\Plugin\Vcr\Recorder\FilesystemRecorder;
use Http\Client\Plugin\Vcr\RecordPlugin;
use Http\Client\Plugin\Vcr\ReplayPlugin;
use Http\Discovery\Psr18ClientDiscovery;
use MetMax\Cbr\Cbr;
use MetMax\Cbr\ReferenceData\ReferenceDataClassmap;
use MetMax\Cbr\ReferenceData\ReferenceDataClient;
use Phpro\SoapClient\Caller\EngineCaller;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Soap\Psr18Transport\Psr18Transport;
use Soap\Psr18WsseMiddleware\WSSecurity\Entry;
use Soap\Psr18WsseMiddleware\WsseMiddleware;

trait InteractWithReferenceData
{
    private ?ReferenceDataClient $referenceDataClient = null;

    protected function referenceDataClient(): ReferenceDataClient
    {
        if ($this->referenceDataClient instanceof ReferenceDataClient) {
            return $this->referenceDataClient;
        }

        $recorder = new FilesystemRecorder(VCR_CASSETTE_DIR.'/ReferenceData');
        $namingStrategy = new PathNamingStrategy(['hash_body_methods' => []]);
        $caller = new EngineCaller(
            DefaultEngineFactory::create(
                ExtSoapOptions::defaults(Cbr::WSDL_REFERENCE_DATA, [])
                    ->withClassMap(ReferenceDataClassmap::getCollection()),
                Psr18Transport::createForClient(
                    new PluginClient(Psr18ClientDiscovery::find(), [
                        new WsseMiddleware(
                            outgoing: [
                                (new Entry\Username($_ENV['CBR_USERNAME']))
                                    ->withPassword($_ENV['CBR_PASSWORD'])
                                    ->withDigest(false),
                            ]
                        ),
                        new RecordPlugin($namingStrategy, $recorder),
                        new ReplayPlugin($namingStrategy, $recorder, false),
                    ])
                )
            )
        );

        $this->referenceDataClient = new ReferenceDataClient($caller);

        return $this->referenceDataClient;
    }
}
