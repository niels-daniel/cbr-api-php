<?php

use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;

return Config::create()
    ->setEngine($engine = DefaultEngineFactory::create(
        ExtSoapOptions::defaults('https://top.cbr.nl/WSapi/ReservationService.svc?singleWsdl', [])
            ->disableWsdlCache()
    ))
    ->setTypeDestination('src/Reservation/Type')
    ->setTypeNamespace('MetMax\Cbr\Reservation\Type')
    ->setClientDestination('src/Reservation')
    ->setClientName('ReservationClient')
    ->setClientNamespace('MetMax\Cbr\Reservation')
    ->setClassMapDestination('src/Reservation')
    ->setClassMapName('ReservationClassmap')
    ->setClassMapNamespace('MetMax\Cbr\Reservation')
    ->addRule(new Rules\AssembleRule(new Assembler\GetterAssembler(new Assembler\GetterAssemblerOptions())))
    ->addRule(new Rules\AssembleRule(new Assembler\ImmutableSetterAssembler(
        new Assembler\ImmutableSetterAssemblerOptions()
    )))
    ->addRule(
        new Rules\IsRequestRule(
            $engine->getMetadata(),
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\RequestAssembler()),
                new Rules\AssembleRule(new Assembler\ConstructorAssembler(new Assembler\ConstructorAssemblerOptions())),
            ])
        )
    )
    ->addRule(
        new Rules\IsResultRule(
            $engine->getMetadata(),
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\ResultAssembler()),
            ])
        )
    );
