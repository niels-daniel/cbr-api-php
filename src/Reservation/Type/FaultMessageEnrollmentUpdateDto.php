<?php

namespace MetMax\Cbr\Reservation\Type;

class FaultMessageEnrollmentUpdateDto
{
    /**
     * @var string
     */
    private $CourseCode;

    /**
     * @var int
     */
    private $CourseDayNumber;

    /**
     * @var int
     */
    private $CandidateNumber;

    /**
     * @var string
     */
    private $CandidateLegalName;

    /**
     * @var string
     */
    private $CandidateFirstName;

    /**
     * @var string
     */
    private $CandidatePrefixes;

    /**
     * @var \MetMax\Cbr\Reservation\Type\PartialDate
     */
    private $CandidateBirthDate;

    /**
     * @var string
     */
    private $FaultType;

    /**
     * @var string
     */
    private $FaultMessage;

    /**
     * @var string
     */
    private $BirthPlace;

    /**
     * @return string
     */
    public function getCourseCode()
    {
        return $this->CourseCode;
    }

    /**
     * @param  string  $CourseCode
     * @return FaultMessageEnrollmentUpdateDto
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
    public function getCourseDayNumber()
    {
        return $this->CourseDayNumber;
    }

    /**
     * @param  int  $CourseDayNumber
     * @return FaultMessageEnrollmentUpdateDto
     */
    public function withCourseDayNumber($CourseDayNumber)
    {
        $new = clone $this;
        $new->CourseDayNumber = $CourseDayNumber;

        return $new;
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
     * @return FaultMessageEnrollmentUpdateDto
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
    public function getCandidateLegalName()
    {
        return $this->CandidateLegalName;
    }

    /**
     * @param  string  $CandidateLegalName
     * @return FaultMessageEnrollmentUpdateDto
     */
    public function withCandidateLegalName($CandidateLegalName)
    {
        $new = clone $this;
        $new->CandidateLegalName = $CandidateLegalName;

        return $new;
    }

    /**
     * @return string
     */
    public function getCandidateFirstName()
    {
        return $this->CandidateFirstName;
    }

    /**
     * @param  string  $CandidateFirstName
     * @return FaultMessageEnrollmentUpdateDto
     */
    public function withCandidateFirstName($CandidateFirstName)
    {
        $new = clone $this;
        $new->CandidateFirstName = $CandidateFirstName;

        return $new;
    }

    /**
     * @return string
     */
    public function getCandidatePrefixes()
    {
        return $this->CandidatePrefixes;
    }

    /**
     * @param  string  $CandidatePrefixes
     * @return FaultMessageEnrollmentUpdateDto
     */
    public function withCandidatePrefixes($CandidatePrefixes)
    {
        $new = clone $this;
        $new->CandidatePrefixes = $CandidatePrefixes;

        return $new;
    }

    /**
     * @return \MetMax\Cbr\Reservation\Type\PartialDate
     */
    public function getCandidateBirthDate()
    {
        return $this->CandidateBirthDate;
    }

    /**
     * @param  \MetMax\Cbr\Reservation\Type\PartialDate  $CandidateBirthDate
     * @return FaultMessageEnrollmentUpdateDto
     */
    public function withCandidateBirthDate($CandidateBirthDate)
    {
        $new = clone $this;
        $new->CandidateBirthDate = $CandidateBirthDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getFaultType()
    {
        return $this->FaultType;
    }

    /**
     * @param  string  $FaultType
     * @return FaultMessageEnrollmentUpdateDto
     */
    public function withFaultType($FaultType)
    {
        $new = clone $this;
        $new->FaultType = $FaultType;

        return $new;
    }

    /**
     * @return string
     */
    public function getFaultMessage()
    {
        return $this->FaultMessage;
    }

    /**
     * @param  string  $FaultMessage
     * @return FaultMessageEnrollmentUpdateDto
     */
    public function withFaultMessage($FaultMessage)
    {
        $new = clone $this;
        $new->FaultMessage = $FaultMessage;

        return $new;
    }

    /**
     * @return string
     */
    public function getBirthPlace()
    {
        return $this->BirthPlace;
    }

    /**
     * @param  string  $BirthPlace
     * @return FaultMessageEnrollmentUpdateDto
     */
    public function withBirthPlace($BirthPlace)
    {
        $new = clone $this;
        $new->BirthPlace = $BirthPlace;

        return $new;
    }
}
