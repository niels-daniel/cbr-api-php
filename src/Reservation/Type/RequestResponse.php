<?php

namespace MetMax\Cbr\Reservation\Type;

use Phpro\SoapClient\Type\ResultInterface;

class RequestResponse implements ResultInterface
{
    /**
     * @var int
     */
    private $CandidateNumber;

    /**
     * @var string
     */
    private $Code;

    /**
     * @var bool
     */
    private $IsAccepted;

    /**
     * @var string
     */
    private $ReasonNotAccepted;

    /**
     * @var int
     */
    private $Version;

    /**
     * @return int
     */
    public function getCandidateNumber()
    {
        return $this->CandidateNumber;
    }

    /**
     * @param  int  $CandidateNumber
     * @return RequestResponse
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
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param  string  $Code
     * @return RequestResponse
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsAccepted()
    {
        return $this->IsAccepted;
    }

    /**
     * @param  bool  $IsAccepted
     * @return RequestResponse
     */
    public function withIsAccepted($IsAccepted)
    {
        $new = clone $this;
        $new->IsAccepted = $IsAccepted;

        return $new;
    }

    /**
     * @return string
     */
    public function getReasonNotAccepted()
    {
        return $this->ReasonNotAccepted;
    }

    /**
     * @param  string  $ReasonNotAccepted
     * @return RequestResponse
     */
    public function withReasonNotAccepted($ReasonNotAccepted)
    {
        $new = clone $this;
        $new->ReasonNotAccepted = $ReasonNotAccepted;

        return $new;
    }

    /**
     * @return int
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * @param  int  $Version
     * @return RequestResponse
     */
    public function withVersion($Version)
    {
        $new = clone $this;
        $new->Version = $Version;

        return $new;
    }
}
