<?php

namespace MetMax\Cbr\ReferenceData\Type;

class ProductPerLocationDto
{
    /**
     * @var string
     */
    private $ProductCode;

    /**
     * @var string
     */
    private $LocationCode;

    /**
     * @return string
     */
    public function getProductCode()
    {
        return $this->ProductCode;
    }

    /**
     * @param  string  $ProductCode
     * @return ProductPerLocationDto
     */
    public function withProductCode($ProductCode)
    {
        $new = clone $this;
        $new->ProductCode = $ProductCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getLocationCode()
    {
        return $this->LocationCode;
    }

    /**
     * @param  string  $LocationCode
     * @return ProductPerLocationDto
     */
    public function withLocationCode($LocationCode)
    {
        $new = clone $this;
        $new->LocationCode = $LocationCode;

        return $new;
    }
}
