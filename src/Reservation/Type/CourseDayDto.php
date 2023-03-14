<?php

namespace MetMax\Cbr\Reservation\Type;

class CourseDayDto
{
    /**
     * @var string
     */
    private $Code;

    /**
     * @var string
     */
    private $LocationName;

    /**
     * @var string
     */
    private $Instructor;

    /**
     * @var \DateTimeInterface
     */
    private $Date;

    /**
     * @var string
     */
    private $StartTime;

    /**
     * @var string
     */
    private $EndTime;

    /**
     * @var int
     */
    private $DayNumber;

    /**
     * @var string
     */
    private $ProductCode;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param  string  $Code
     * @return CourseDayDto
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return string
     */
    public function getLocationName()
    {
        return $this->LocationName;
    }

    /**
     * @param  string  $LocationName
     * @return CourseDayDto
     */
    public function withLocationName($LocationName)
    {
        $new = clone $this;
        $new->LocationName = $LocationName;

        return $new;
    }

    /**
     * @return string
     */
    public function getInstructor()
    {
        return $this->Instructor;
    }

    /**
     * @param  string  $Instructor
     * @return CourseDayDto
     */
    public function withInstructor($Instructor)
    {
        $new = clone $this;
        $new->Instructor = $Instructor;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param  \DateTimeInterface  $Date
     * @return CourseDayDto
     */
    public function withDate($Date)
    {
        $new = clone $this;
        $new->Date = $Date;

        return $new;
    }

    /**
     * @return string
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }

    /**
     * @param  string  $StartTime
     * @return CourseDayDto
     */
    public function withStartTime($StartTime)
    {
        $new = clone $this;
        $new->StartTime = $StartTime;

        return $new;
    }

    /**
     * @return string
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }

    /**
     * @param  string  $EndTime
     * @return CourseDayDto
     */
    public function withEndTime($EndTime)
    {
        $new = clone $this;
        $new->EndTime = $EndTime;

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
     * @return CourseDayDto
     */
    public function withDayNumber($DayNumber)
    {
        $new = clone $this;
        $new->DayNumber = $DayNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getProductCode()
    {
        return $this->ProductCode;
    }

    /**
     * @param  string  $ProductCode
     * @return CourseDayDto
     */
    public function withProductCode($ProductCode)
    {
        $new = clone $this;
        $new->ProductCode = $ProductCode;

        return $new;
    }
}
