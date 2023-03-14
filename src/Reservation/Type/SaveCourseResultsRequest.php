<?php

namespace MetMax\Cbr\Reservation\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SaveCourseResultsRequest implements RequestInterface
{
    /**
     * @var string
     */
    private $CourseCode;

    /**
     * @var int
     */
    private $DayNumber;

    /**
     * @var \MetMax\Cbr\Reservation\Type\CourseResultList
     */
    private $Results;

    /**
     * Constructor
     *
     * @var string
     * @var int
     * @var \MetMax\Cbr\Reservation\Type\CourseResultList
     */
    public function __construct($CourseCode, $DayNumber, $Results)
    {
        $this->CourseCode = $CourseCode;
        $this->DayNumber = $DayNumber;
        $this->Results = $Results;
    }

    /**
     * @return string
     */
    public function getCourseCode()
    {
        return $this->CourseCode;
    }

    /**
     * @param  string  $CourseCode
     * @return SaveCourseResultsRequest
     */
    public function withCourseCode($CourseCode)
    {
        $new = clone $this;
        $new->CourseCode = $CourseCode;

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
     * @return SaveCourseResultsRequest
     */
    public function withDayNumber($DayNumber)
    {
        $new = clone $this;
        $new->DayNumber = $DayNumber;

        return $new;
    }

    /**
     * @return \MetMax\Cbr\Reservation\Type\CourseResultList
     */
    public function getResults()
    {
        return $this->Results;
    }

    /**
     * @param  \MetMax\Cbr\Reservation\Type\CourseResultList  $Results
     * @return SaveCourseResultsRequest
     */
    public function withResults($Results)
    {
        $new = clone $this;
        $new->Results = $Results;

        return $new;
    }
}
