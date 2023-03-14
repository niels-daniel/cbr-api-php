<?php

namespace MetMax\Cbr\Reservation\Type;

class ResultList
{
    /**
     * @var \MetMax\Cbr\Reservation\Type\ResultDto
     */
    private $ResultList;

    /**
     * @return \MetMax\Cbr\Reservation\Type\ResultDto
     */
    public function getResultList()
    {
        return $this->ResultList;
    }

    /**
     * @param  \MetMax\Cbr\Reservation\Type\ResultDto  $ResultList
     * @return ResultList
     */
    public function withResultList($ResultList)
    {
        $new = clone $this;
        $new->ResultList = $ResultList;

        return $new;
    }
}
