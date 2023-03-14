<?php

namespace MetMax\Cbr\Reservation;

use Http\Client\Common\PluginClient;
use Http\Discovery\Psr18ClientDiscovery;
use MetMax\Cbr\Cbr;
use Phpro\SoapClient\Caller\EngineCaller;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Soap\Psr18Transport\Psr18Transport;
use Soap\Psr18WsseMiddleware\WSSecurity\Entry;
use Soap\Psr18WsseMiddleware\WsseMiddleware;
use Symfony\Component\EventDispatcher\EventDispatcher;

class ReservationClientFactory
{
    public static function factory(string $username, string $password): ReservationClient
    {
        $engine = DefaultEngineFactory::create(
            ExtSoapOptions::defaults(Cbr::WSDL_RESERVATION, [])
                ->withClassMap(ReservationClassmap::getCollection()),
            Psr18Transport::createForClient(
                new PluginClient(Psr18ClientDiscovery::find(), [
                    new WsseMiddleware(
                        outgoing: [
                            (new Entry\Username($username))
                                ->withPassword($password)
                                ->withDigest(false),
                        ]
                    ),
                ])
            )
        );

        $eventDispatcher = new EventDispatcher();
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        return new ReservationClient($caller);
    }
}
