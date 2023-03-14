<?php

namespace MetMax\Cbr\Reservation\Type;

class CapacityList
{
    /**
     * @var \MetMax\Cbr\Reservation\Type\CapacityDto
     */
    private $CapacityList;

    /**
     * @return \MetMax\Cbr\Reservation\Type\CapacityDto
     */
    public function getCapacityList()
    {
        return $this->CapacityList;
    }

    /**
     * @param  \MetMax\Cbr\Reservation\Type\CapacityDto  $CapacityList
     * @return CapacityList
     */
    public function withCapacityList($CapacityList)
    {
        $new = clone $this;
        $new->CapacityList = $CapacityList;

        return $new;
    }
}
