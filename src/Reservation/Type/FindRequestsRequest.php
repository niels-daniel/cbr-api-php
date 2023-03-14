<?php

namespace MetMax\Cbr\Reservation\Type;

use Phpro\SoapClient\Type\RequestInterface;

class FindRequestsRequest implements RequestInterface
{
    /**
     * @var int
     */
    private $CandidateNumber;

    /**
     * @var \DateTimeInterface
     */
    private $ChangedSince;

    /**
     * @var \DateTimeInterface
     */
    private $ReceivedSince;

    /**
     * @var string
     */
    private $RequestStatus;

    /**
     * Constructor
     *
     * @var int
     * @var \DateTimeInterface
     * @var \DateTimeInterface
     * @var string
     */
    public function __construct($CandidateNumber, $ChangedSince, $ReceivedSince, $RequestStatus)
    {
        $this->CandidateNumber = $CandidateNumber;
        $this->ChangedSince = $ChangedSince;
        $this->ReceivedSince = $ReceivedSince;
        $this->RequestStatus = $RequestStatus;
    }

    /**
     * @return int
     */
    public function getCandidateNumber()
    {
        return $this->CandidateNumber;
    }

    /**
     * @param  int  $CandidateNumber
     * @return FindRequestsRequest
     */
    public function withCandidateNumber($CandidateNumber)
    {
        $new = clone $this;
        $new->CandidateNumber = $CandidateNumber;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getChangedSince()
    {
        return $this->ChangedSince;
    }

    /**
     * @param  \DateTimeInterface  $ChangedSince
     * @return FindRequestsRequest
     */
    public function withChangedSince($ChangedSince)
    {
        $new = clone $this;
        $new->ChangedSince = $ChangedSince;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getReceivedSince()
    {
        return $this->ReceivedSince;
    }

    /**
     * @param  \DateTimeInterface  $ReceivedSince
     * @return FindRequestsRequest
     */
    public function withReceivedSince($ReceivedSince)
    {
        $new = clone $this;
        $new->ReceivedSince = $ReceivedSince;

        return $new;
    }

    /**
     * @return string
     */
    public function getRequestStatus()
    {
        return $this->RequestStatus;
    }

    /**
     * @param  string  $RequestStatus
     * @return FindRequestsRequest
     */
    public function withRequestStatus($RequestStatus)
    {
        $new = clone $this;
        $new->RequestStatus = $RequestStatus;

        return $new;
    }
}
