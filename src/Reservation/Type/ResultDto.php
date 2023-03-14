<?php

namespace MetMax\Cbr\Reservation\Type;

class ResultDto
{
    /**
     * @var string
     */
    private $CapacityCode;

    /**
     * @var string
     */
    private $Outcome;

    /**
     * @var int
     */
    private $CapacityVersion;

    /**
     * @var string
     */
    private $RequestCode;

    /**
     * @var \MetMax\Cbr\Reservation\Type\SubResultList
     */
    private $SubResults;

    /**
     * @var bool
     */
    private $IsDeleted;

    /**
     * @return string
     */
    public function getCapacityCode()
    {
        return $this->CapacityCode;
    }

    /**
     * @param  string  $CapacityCode
     * @return ResultDto
     */
    public function withCapacityCode($CapacityCode)
    {
        $new = clone $this;
        $new->CapacityCode = $CapacityCode;

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
     * @return ResultDto
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
    public function getCapacityVersion()
    {
        return $this->CapacityVersion;
    }

    /**
     * @param  int  $CapacityVersion
     * @return ResultDto
     */
    public function withCapacityVersion($CapacityVersion)
    {
        $new = clone $this;
        $new->CapacityVersion = $CapacityVersion;

        return $new;
    }

    /**
     * @return string
     */
    public function getRequestCode()
    {
        return $this->RequestCode;
    }

    /**
     * @param  string  $RequestCode
     * @return ResultDto
     */
    public function withRequestCode($RequestCode)
    {
        $new = clone $this;
        $new->RequestCode = $RequestCode;

        return $new;
    }

    /**
     * @return \MetMax\Cbr\Reservation\Type\SubResultList
     */
    public function getSubResults()
    {
        return $this->SubResults;
    }

    /**
     * @param  \MetMax\Cbr\Reservation\Type\SubResultList  $SubResults
     * @return ResultDto
     */
    public function withSubResults($SubResults)
    {
        $new = clone $this;
        $new->SubResults = $SubResults;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsDeleted()
    {
        return $this->IsDeleted;
    }

    /**
     * @param  bool  $IsDeleted
     * @return ResultDto
     */
    public function withIsDeleted($IsDeleted)
    {
        $new = clone $this;
        $new->IsDeleted = $IsDeleted;

        return $new;
    }
}
