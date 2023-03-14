<?php

namespace MetMax\Cbr\ReferenceData\Type;

class ProductPerLocationList
{
    /**
     * @var \MetMax\Cbr\ReferenceData\Type\ProductPerLocationDto
     */
    private $ProductPerLocationList;

    /**
     * @return \MetMax\Cbr\ReferenceData\Type\ProductPerLocationDto
     */
    public function getProductPerLocationList()
    {
        return $this->ProductPerLocationList;
    }

    /**
     * @param  \MetMax\Cbr\ReferenceData\Type\ProductPerLocationDto  $ProductPerLocationList
     * @return ProductPerLocationList
     */
    public function withProductPerLocationList($ProductPerLocationList)
    {
        $new = clone $this;
        $new->ProductPerLocationList = $ProductPerLocationList;

        return $new;
    }
}
