<?php

namespace MetMax\Cbr\Tests\Traits;

use Http\Client\Common\PluginClient;
use Http\Client\Plugin\Vcr\NamingStrategy\PathNamingStrategy;
use Http\Client\Plugin\Vcr\Recorder\FilesystemRecorder;
use Http\Client\Plugin\Vcr\RecordPlugin;
use Http\Client\Plugin\Vcr\ReplayPlugin;
use Http\Discovery\Psr18ClientDiscovery;
use MetMax\Cbr\Authentication\AuthenticationClassmap;
use MetMax\Cbr\Authentication\AuthenticationClient;
use MetMax\Cbr\Cbr;
use Phpro\SoapClient\Caller\EngineCaller;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Soap\Psr18Transport\Psr18Transport;
use Soap\Psr18WsseMiddleware\WSSecurity\Entry;
use Soap\Psr18WsseMiddleware\WsseMiddleware;

trait InteractWithAuthentication
{
    private ?AuthenticationClient $authenticationClient = null;

    protected function authenticationClient(): AuthenticationClient
    {
        if ($this->authenticationClient instanceof AuthenticationClient) {
            return $this->authenticationClient;
        }

        $recorder = new FilesystemRecorder(VCR_CASSETTE_DIR.'/Authentication');
        $namingStrategy = new PathNamingStrategy(['hash_body_methods' => []]);
        $caller = new EngineCaller(
            DefaultEngineFactory::create(
                ExtSoapOptions::defaults(Cbr::WSDL_AUTHENTICATION, [])
                    ->withClassMap(AuthenticationClassmap::getCollection()),
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

        $this->authenticationClient = new AuthenticationClient($caller);

        return $this->authenticationClient;
    }
}
