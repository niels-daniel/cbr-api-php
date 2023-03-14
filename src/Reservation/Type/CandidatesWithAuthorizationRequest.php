<?php

namespace MetMax\Cbr\Reservation\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CandidatesWithAuthorizationRequest implements RequestInterface
{
    /**
     * @var \DateTimeInterface
     */
    private $AuthorizationDateFrom;

    /**
     * @var \DateTimeInterface
     */
    private $AuthorizationDateUpTo;

    /**
     * @var \DateTimeInterface
     */
    private $ChangedSince;

    /**
     * Constructor
     *
     * @var \DateTimeInterface
     * @var \DateTimeInterface
     * @var \DateTimeInterface
     */
    public function __construct($AuthorizationDateFrom, $AuthorizationDateUpTo, $ChangedSince)
    {
        $this->AuthorizationDateFrom = $AuthorizationDateFrom;
        $this->AuthorizationDateUpTo = $AuthorizationDateUpTo;
        $this->ChangedSince = $ChangedSince;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getAuthorizationDateFrom()
    {
        return $this->AuthorizationDateFrom;
    }

    /**
     * @param  \DateTimeInterface  $AuthorizationDateFrom
     * @return CandidatesWithAuthorizationRequest
     */
    public function withAuthorizationDateFrom($AuthorizationDateFrom)
    {
        $new = clone $this;
        $new->AuthorizationDateFrom = $AuthorizationDateFrom;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getAuthorizationDateUpTo()
    {
        return $this->AuthorizationDateUpTo;
    }

    /**
     * @param  \DateTimeInterface  $AuthorizationDateUpTo
     * @return CandidatesWithAuthorizationRequest
     */
    public function withAuthorizationDateUpTo($AuthorizationDateUpTo)
    {
        $new = clone $this;
        $new->AuthorizationDateUpTo = $AuthorizationDateUpTo;

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
     * @return CandidatesWithAuthorizationRequest
     */
    public function withChangedSince($ChangedSince)
    {
        $new = clone $this;
        $new->ChangedSince = $ChangedSince;

        return $new;
    }
}
