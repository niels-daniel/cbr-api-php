<?php

namespace MetMax\Cbr\Reservation\Type;

class SubResultDto
{
    /**
     * @var string
     */
    private $GroupName;

    /**
     * @var string
     */
    private $SegmentName;

    /**
     * @var string
     */
    private $SubjectName;

    /**
     * @var string
     */
    private $Outcome;

    /**
     * @var int
     */
    private $NumberOfWrongAnswers;

    /**
     * @return string
     */
    public function getGroupName()
    {
        return $this->GroupName;
    }

    /**
     * @param  string  $GroupName
     * @return SubResultDto
     */
    public function withGroupName($GroupName)
    {
        $new = clone $this;
        $new->GroupName = $GroupName;

        return $new;
    }

    /**
     * @return string
     */
    public function getSegmentName()
    {
        return $this->SegmentName;
    }

    /**
     * @param  string  $SegmentName
     * @return SubResultDto
     */
    public function withSegmentName($SegmentName)
    {
        $new = clone $this;
        $new->SegmentName = $SegmentName;

        return $new;
    }

    /**
     * @return string
     */
    public function getSubjectName()
    {
        return $this->SubjectName;
    }

    /**
     * @param  string  $SubjectName
     * @return SubResultDto
     */
    public function withSubjectName($SubjectName)
    {
        $new = clone $this;
        $new->SubjectName = $SubjectName;

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
     * @return SubResultDto
     */
    public function withOutcome($Outcome)
    {
        $new = clone $this;
        $new->Outcome = $Outcome;

        return $new;
    }

    /**
     * @return int
     */
    public function getNumberOfWrongAnswers()
    {
        return $this->NumberOfWrongAnswers;
    }

    /**
     * @param  int  $NumberOfWrongAnswers
     * @return SubResultDto
     */
    public function withNumberOfWrongAnswers($NumberOfWrongAnswers)
    {
        $new = clone $this;
        $new->NumberOfWrongAnswers = $NumberOfWrongAnswers;

        return $new;
    }
}
