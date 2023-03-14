<?php

namespace MetMax\Cbr\Reservation\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ResultsResponse implements ResultInterface
{
    /**
     * @var \MetMax\Cbr\Reservation\Type\ResultList
     */
    private $Results;

    /**
     * @return \MetMax\Cbr\Reservation\Type\ResultList
     */
    public function getResults()
    {
        return $this->Results;
    }

    /**
     * @param  \MetMax\Cbr\Reservation\Type\ResultList  $Results
     * @return ResultsResponse
     */
    public function withResults($Results)
    {
        $new = clone $this;
        $new->Results = $Results;

        return $new;
    }
}
