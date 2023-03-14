<?php

namespace MetMax\Cbr\ReferenceData\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ProductsPerLocationResponse implements ResultInterface
{
    /**
     * @var \MetMax\Cbr\ReferenceData\Type\ProductPerLocationList
     */
    private $ProductsPerLocation;

    /**
     * @return \MetMax\Cbr\ReferenceData\Type\ProductPerLocationList
     */
    public function getProductsPerLocation()
    {
        return $this->ProductsPerLocation;
    }

    /**
     * @param  \MetMax\Cbr\ReferenceData\Type\ProductPerLocationList  $ProductsPerLocation
     * @return ProductsPerLocationResponse
     */
    public function withProductsPerLocation($ProductsPerLocation)
    {
        $new = clone $this;
        $new->ProductsPerLocation = $ProductsPerLocation;

        return $new;
    }
}
