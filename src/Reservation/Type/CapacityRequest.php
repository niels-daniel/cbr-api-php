<?php

namespace MetMax\Cbr\Reservation\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CapacityRequest implements RequestInterface
{
    /**
     * @var \DateTimeInterface
     */
    private $ChangedSince;

    /**
     * @var \DateTimeInterface
     */
    private $ExamDateFrom;

    /**
     * @var \DateTimeInterface
     */
    private $ExamDateUpTo;

    /**
     * Constructor
     *
     * @var \DateTimeInterface
     * @var \DateTimeInterface
     * @var \DateTimeInterface
     */
    public function __construct($ChangedSince, $ExamDateFrom, $ExamDateUpTo)
    {
        $this->ChangedSince = $ChangedSince;
        $this->ExamDateFrom = $ExamDateFrom;
        $this->ExamDateUpTo = $ExamDateUpTo;
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
     * @return CapacityRequest
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
    public function getExamDateFrom()
    {
        return $this->ExamDateFrom;
    }

    /**
     * @param  \DateTimeInterface  $ExamDateFrom
     * @return CapacityRequest
     */
    public function withExamDateFrom($ExamDateFrom)
    {
        $new = clone $this;
        $new->ExamDateFrom = $ExamDateFrom;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getExamDateUpTo()
    {
        return $this->ExamDateUpTo;
    }

    /**
     * @param  \DateTimeInterface  $ExamDateUpTo
     * @return CapacityRequest
     */
    public function withExamDateUpTo($ExamDateUpTo)
    {
        $new = clone $this;
        $new->ExamDateUpTo = $ExamDateUpTo;

        return $new;
    }
}
