<?php

namespace MetMax\Cbr\Authentication;

use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMap;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection;

class AuthenticationClassmap
{
    public static function getCollection(): ClassMapCollection
    {
        return new ClassMapCollection(
            new ClassMap('ChangePasswordRequest', Type\ChangePasswordRequest::class),
            new ClassMap('ChangePasswordResponse', Type\ChangePasswordResponse::class),
        );
    }
}
