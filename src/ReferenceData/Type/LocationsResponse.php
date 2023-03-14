<?php

namespace MetMax\Cbr\ReferenceData\Type;

use Phpro\SoapClient\Type\ResultInterface;

class LocationsResponse implements ResultInterface
{
    /**
     * @var \MetMax\Cbr\ReferenceData\Type\LocationList
     */
    private $Locations;

    /**
     * @return \MetMax\Cbr\ReferenceData\Type\LocationList
     */
    public function getLocations()
    {
        return $this->Locations;
    }

    /**
     * @param  \MetMax\Cbr\ReferenceData\Type\LocationList  $Locations
     * @return LocationsResponse
     */
    public function withLocations($Locations)
    {
        $new = clone $this;
        $new->Locations = $Locations;

        return $new;
    }
}
