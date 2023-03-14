<?php

namespace MetMax\Cbr\ReferenceData\Type;

class ProductList
{
    /**
     * @var \MetMax\Cbr\ReferenceData\Type\ProductDto
     */
    private $ProductList;

    /**
     * @return \MetMax\Cbr\ReferenceData\Type\ProductDto
     */
    public function getProductList()
    {
        return $this->ProductList;
    }

    /**
     * @param  \MetMax\Cbr\ReferenceData\Type\ProductDto  $ProductList
     * @return ProductList
     */
    public function withProductList($ProductList)
    {
        $new = clone $this;
        $new->ProductList = $ProductList;

        return $new;
    }
}
