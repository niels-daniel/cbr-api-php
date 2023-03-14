<?php

namespace MetMax\Cbr\ReferenceData;

use Phpro\SoapClient\Caller\Caller;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class ReferenceDataClient
{
    /**
     * @var Caller
     */
    private $caller;

    public function __construct(Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param  RequestInterface|Type\ProductsRequest  $parameters
     * @return ResultInterface|Type\ProductsResponse
     *
     * @throws SoapException
     */
    public function getProducts(Type\ProductsRequest $parameters): Type\ProductsResponse
    {
        return ($this->caller)('GetProducts', $parameters);
    }

    /**
     * @param  RequestInterface|Type\InstructorsRequest  $parameters
     * @return ResultInterface|Type\InstructorsResponse
     *
     * @throws SoapException
     */
    public function getInstructors(Type\InstructorsRequest $parameters): Type\InstructorsResponse
    {
        return ($this->caller)('GetInstructors', $parameters);
    }

    /**
     * @param  RequestInterface|Type\LanguagesRequest  $parameters
     * @return ResultInterface|Type\LanguagesResponse
     *
     * @throws SoapException
     */
    public function getLanguages(Type\LanguagesRequest $parameters): Type\LanguagesResponse
    {
        return ($this->caller)('GetLanguages', $parameters);
    }

    /**
     * @param  RequestInterface|Type\LocationsRequest  $parameters
     * @return ResultInterface|Type\LocationsResponse
     *
     * @throws SoapException
     */
    public function getLocations(Type\LocationsRequest $parameters): Type\LocationsResponse
    {
        return ($this->caller)('GetLocations', $parameters);
    }

    /**
     * @param  RequestInterface|Type\EducatorAgreementsRequest  $parameters
     * @return ResultInterface|Type\EducatorAgreementsResponse
     *
     * @throws SoapException
     */
    public function getEducatorAgreements(Type\EducatorAgreementsRequest $parameters): Type\EducatorAgreementsResponse
    {
        return ($this->caller)('GetEducatorAgreements', $parameters);
    }

    /**
     * @param  RequestInterface|Type\ProductsPerLocationRequest  $parameters
     * @return ResultInterface|Type\ProductsPerLocationResponse
     *
     * @throws SoapException
     */
    public function getProductsPerLocation(Type\ProductsPerLocationRequest $parameters): Type\ProductsPerLocationResponse
    {
        return ($this->caller)('GetProductsPerLocation', $parameters);
    }
}
