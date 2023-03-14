<?php

use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;

return Config::create()
    ->setEngine($engine = DefaultEngineFactory::create(
        ExtSoapOptions::defaults('https://top.cbr.nl/WSapi/AuthenticationService.svc?wsdl', [])
            ->disableWsdlCache()
    ))
    ->setTypeDestination('src/Authentication/Type')
    ->setTypeNamespace('MetMax\Cbr\Authentication\Type')
    ->setClientDestination('src/Authentication')
    ->setClientName('AuthenticationClient')
    ->setClientNamespace('MetMax\Cbr\Authentication')
    ->setClassMapDestination('src/Authentication')
    ->setClassMapName('AuthenticationClassmap')
    ->setClassMapNamespace('MetMax\Cbr\Authentication')
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
