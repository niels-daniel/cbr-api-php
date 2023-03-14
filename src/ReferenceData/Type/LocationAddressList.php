<?php

namespace MetMax\Cbr\ReferenceData\Type;

class LocationAddressList
{
    /**
     * @var \MetMax\Cbr\ReferenceData\Type\LocationAddressDto
     */
    private $LocationAddressList;

    /**
     * @return \MetMax\Cbr\ReferenceData\Type\LocationAddressDto
     */
    public function getLocationAddressList()
    {
        return $this->LocationAddressList;
    }

    /**
     * @param  \MetMax\Cbr\ReferenceData\Type\LocationAddressDto  $LocationAddressList
     * @return LocationAddressList
     */
    public function withLocationAddressList($LocationAddressList)
    {
        $new = clone $this;
        $new->LocationAddressList = $LocationAddressList;

        return $new;
    }
}
