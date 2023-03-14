<?php

namespace MetMax\Cbr\Reservation\Type;

class SubResultList
{
    /**
     * @var \MetMax\Cbr\Reservation\Type\SubResultDto
     */
    private $SubResultList;

    /**
     * @return \MetMax\Cbr\Reservation\Type\SubResultDto
     */
    public function getSubResultList()
    {
        return $this->SubResultList;
    }

    /**
     * @param  \MetMax\Cbr\Reservation\Type\SubResultDto  $SubResultList
     * @return SubResultList
     */
    public function withSubResultList($SubResultList)
    {
        $new = clone $this;
        $new->SubResultList = $SubResultList;

        return $new;
    }
}
