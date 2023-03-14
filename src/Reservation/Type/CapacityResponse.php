<?php

namespace MetMax\Cbr\Reservation\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CapacityResponse implements ResultInterface
{
    /**
     * @var \MetMax\Cbr\Reservation\Type\CapacityList
     */
    private $Capacity;

    /**
     * @return \MetMax\Cbr\Reservation\Type\CapacityList
     */
    public function getCapacity()
    {
        return $this->Capacity;
    }

    /**
     * @param  \MetMax\Cbr\Reservation\Type\CapacityList  $Capacity
     * @return CapacityResponse
     */
    public function withCapacity($Capacity)
    {
        $new = clone $this;
        $new->Capacity = $Capacity;

        return $new;
    }
}
