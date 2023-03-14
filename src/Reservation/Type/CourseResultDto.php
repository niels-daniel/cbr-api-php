<?php

namespace MetMax\Cbr\Reservation\Type;

class CourseResultDto
{
    /**
     * @var int
     */
    private $CandidateNumber;

    /**
     * @var string
     */
    private $Outcome;

    /**
     * @return int
     */
    public function getCandidateNumber()
    {
        return $this->CandidateNumber;
    }

    /**
     * @param  int  $CandidateNumber
     * @return CourseResultDto
     */
    public function withCandidateNumber($CandidateNumber)
    {
        $new = clone $this;
        $new->CandidateNumber = $CandidateNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getOutcome()
    {
        return $this->Outcome;
    }

    /**
     * @param  string  $Outcome
     * @return CourseResultDto
     */
    public function withOutcome($Outcome)
    {
        $new = clone $this;
        $new->Outcome = $Outcome;

        return $new;
    }
}
