<?php

namespace MetMax\Cbr\Reservation\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CandidateList implements ResultInterface
{
    /**
     * @var \MetMax\Cbr\Reservation\Type\CandidateDto
     */
    private $CandidateList;

    /**
     * @return \MetMax\Cbr\Reservation\Type\CandidateDto
     */
    public function getCandidateList()
    {
        return $this->CandidateList;
    }

    /**
     * @param  \MetMax\Cbr\Reservation\Type\CandidateDto  $CandidateList
     * @return CandidateList
     */
    public function withCandidateList($CandidateList)
    {
        $new = clone $this;
        $new->CandidateList = $CandidateList;

        return $new;
    }
}
