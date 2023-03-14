<?php

namespace MetMax\Cbr\ReferenceData\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ProductsResponse implements ResultInterface
{
    /**
     * @var \MetMax\Cbr\ReferenceData\Type\ProductList
     */
    private $Products;

    /**
     * @return \MetMax\Cbr\ReferenceData\Type\ProductList
     */
    public function getProducts()
    {
        return $this->Products;
    }

    /**
     * @param  \MetMax\Cbr\ReferenceData\Type\ProductList  $Products
     * @return ProductsResponse
     */
    public function withProducts($Products)
    {
        $new = clone $this;
        $new->Products = $Products;

        return $new;
    }
}
