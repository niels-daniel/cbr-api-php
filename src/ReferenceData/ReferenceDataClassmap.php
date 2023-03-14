<?php

namespace MetMax\Cbr\ReferenceData;

use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMap;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection;

class ReferenceDataClassmap
{
    public static function getCollection(): ClassMapCollection
    {
        return new ClassMapCollection(
            new ClassMap('ProductsRequest', Type\ProductsRequest::class),
            new ClassMap('ProductsResponse', Type\ProductsResponse::class),
            new ClassMap('ProductList', Type\ProductList::class),
            new ClassMap('ProductDto', Type\ProductDto::class),
            new ClassMap('InstructorsRequest', Type\InstructorsRequest::class),
            new ClassMap('InstructorsResponse', Type\InstructorsResponse::class),
            new ClassMap('InstructorList', Type\InstructorList::class),
            new ClassMap('InstructorDto', Type\InstructorDto::class),
            new ClassMap('LanguagesRequest', Type\LanguagesRequest::class),
            new ClassMap('LanguagesResponse', Type\LanguagesResponse::class),
            new ClassMap('LanguageList', Type\LanguageList::class),
            new ClassMap('LanguageDto', Type\LanguageDto::class),
            new ClassMap('LocationsRequest', Type\LocationsRequest::class),
            new ClassMap('LocationsResponse', Type\LocationsResponse::class),
            new ClassMap('LocationList', Type\LocationList::class),
            new ClassMap('LocationDto', Type\LocationDto::class),
            new ClassMap('LocationAddressList', Type\LocationAddressList::class),
            new ClassMap('LocationAddressDto', Type\LocationAddressDto::class),
            new ClassMap('EducatorAgreementsRequest', Type\EducatorAgreementsRequest::class),
            new ClassMap('EducatorAgreementsResponse', Type\EducatorAgreementsResponse::class),
            new ClassMap('EducatorAgreementList', Type\EducatorAgreementList::class),
            new ClassMap('EducatorAgreementDto', Type\EducatorAgreementDto::class),
            new ClassMap('ProductsPerLocationRequest', Type\ProductsPerLocationRequest::class),
            new ClassMap('ProductsPerLocationResponse', Type\ProductsPerLocationResponse::class),
            new ClassMap('ProductPerLocationList', Type\ProductPerLocationList::class),
            new ClassMap('ProductPerLocationDto', Type\ProductPerLocationDto::class),
        );
    }
}
