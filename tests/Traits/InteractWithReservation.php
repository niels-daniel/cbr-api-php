<?php

namespace MetMax\Cbr\Tests\Traits;

use Http\Client\Common\PluginClient;
use Http\Client\Plugin\Vcr\NamingStrategy\PathNamingStrategy;
use Http\Client\Plugin\Vcr\Recorder\FilesystemRecorder;
use Http\Client\Plugin\Vcr\RecordPlugin;
use Http\Client\Plugin\Vcr\ReplayPlugin;
use Http\Discovery\Psr18ClientDiscovery;
use MetMax\Cbr\Cbr;
use MetMax\Cbr\Reservation\ReservationClassmap;
use MetMax\Cbr\Reservation\ReservationClient;
use Phpro\SoapClient\Caller\EngineCaller;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Soap\Psr18Transport\Psr18Transport;
use Soap\Psr18WsseMiddleware\WSSecurity\Entry;
use Soap\Psr18WsseMiddleware\WsseMiddleware;

trait InteractWithReservation
{
    private ?ReservationClient $reservationClient = null;

    protected function reservationClient(): ReservationClient
    {
        if ($this->reservationClient instanceof ReservationClient) {
            return $this->reservationClient;
        }

        $recorder = new FilesystemRecorder(VCR_CASSETTE_DIR . '/Reservation');
        $namingStrategy = new PathNamingStrategy(['hash_body_methods' => []]);
        $caller = new EngineCaller(
            DefaultEngineFactory::create(
                ExtSoapOptions::defaults(Cbr::WSDL_RESERVATION, [])
                    ->withClassMap(ReservationClassmap::getCollection()),
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

        $this->reservationClient = new ReservationClient($caller);

        return $this->reservationClient;
    }
}
