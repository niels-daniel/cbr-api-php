<?php

namespace MetMax\Cbr\Reservation\Type;

class CourseEnrollmentUpdateDto
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
    private $Action;

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
     * @return CourseEnrollmentUpdateDto
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
     * @return CourseEnrollmentUpdateDto
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
     * @return CourseEnrollmentUpdateDto
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
     * @return CourseEnrollmentUpdateDto
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
     * @return CourseEnrollmentUpdateDto
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
     * @return CourseEnrollmentUpdateDto
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
     * @return CourseEnrollmentUpdateDto
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
    public function getAction()
    {
        return $this->Action;
    }

    /**
     * @param  string  $Action
     * @return CourseEnrollmentUpdateDto
     */
    public function withAction($Action)
    {
        $new = clone $this;
        $new->Action = $Action;

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
     * @return CourseEnrollmentUpdateDto
     */
    public function withBirthPlace($BirthPlace)
    {
        $new = clone $this;
        $new->BirthPlace = $BirthPlace;

        return $new;
    }
}
