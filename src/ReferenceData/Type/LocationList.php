<?php

namespace MetMax\Cbr\ReferenceData\Type;

class LocationList
{
    /**
     * @var \MetMax\Cbr\ReferenceData\Type\LocationDto
     */
    private $LocationList;

    /**
     * @return \MetMax\Cbr\ReferenceData\Type\LocationDto
     */
    public function getLocationList()
    {
        return $this->LocationList;
    }

    /**
     * @param  \MetMax\Cbr\ReferenceData\Type\LocationDto  $LocationList
     * @return LocationList
     */
    public function withLocationList($LocationList)
    {
        $new = clone $this;
        $new->LocationList = $LocationList;

        return $new;
    }
}
