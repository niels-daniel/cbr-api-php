<?php

namespace MetMax\Cbr\Reservation\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CourseEnrollmentRequest implements RequestInterface
{
    /**
     * @var \DateTimeInterface
     */
    private $ChangedSince;

    /**
     * @var string
     */
    private $Code;

    /**
     * @var int
     */
    private $DayNumber;

    /**
     * Constructor
     *
     * @var \DateTimeInterface
     * @var string
     * @var int
     */
    public function __construct($ChangedSince, $Code, $DayNumber)
    {
        $this->ChangedSince = $ChangedSince;
        $this->Code = $Code;
        $this->DayNumber = $DayNumber;
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
     * @return CourseEnrollmentRequest
     */
    public function withChangedSince($ChangedSince)
    {
        $new = clone $this;
        $new->ChangedSince = $ChangedSince;

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
     * @return CourseEnrollmentRequest
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return int
     */
    public function getDayNumber()
    {
        return $this->DayNumber;
    }

    /**
     * @param  int  $DayNumber
     * @return CourseEnrollmentRequest
     */
    public function withDayNumber($DayNumber)
    {
        $new = clone $this;
        $new->DayNumber = $DayNumber;

        return $new;
    }
}
