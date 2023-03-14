<?php

namespace MetMax\Cbr\Reservation\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ModificationResponse implements ResultInterface
{
    /**
     * @var int
     */
    private $CandidateNumber;

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
    private $RequestVersion;

    /**
     * @return int
     */
    public function getCandidateNumber()
    {
        return $this->CandidateNumber;
    }

    /**
     * @param  int  $CandidateNumber
     * @return ModificationResponse
     */
    public function withCandidateNumber($CandidateNumber)
    {
        $new = clone $this;
        $new->CandidateNumber = $CandidateNumber;

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
     * @return ModificationResponse
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
     * @return ModificationResponse
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
    public function getRequestVersion()
    {
        return $this->RequestVersion;
    }

    /**
     * @param  int  $RequestVersion
     * @return ModificationResponse
     */
    public function withRequestVersion($RequestVersion)
    {
        $new = clone $this;
        $new->RequestVersion = $RequestVersion;

        return $new;
    }
}
