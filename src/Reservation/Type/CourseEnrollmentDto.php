<?php

namespace MetMax\Cbr\Reservation\Type;

class CourseEnrollmentDto
{
    /**
     * @var int
     */
    private $CandidateNumber;

    /**
     * @var string
     */
    private $CandidateFullName;

    /**
     * @var string
     */
    private $CourseDayResult;

    /**
     * @var \MetMax\Cbr\Reservation\Type\PartialDate
     */
    private $CandidateBirthDate;

    /**
     * @var int
     */
    private $CourseDayNumber;

    /**
     * @var bool
     */
    private $ChargeVat;

    /**
     * @var bool
     */
    private $IsDeleted;

    /**
     * @return int
     */
    public function getCandidateNumber()
    {
        return $this->CandidateNumber;
    }

    /**
     * @param  int  $CandidateNumber
     * @return CourseEnrollmentDto
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
    public function getCandidateFullName()
    {
        return $this->CandidateFullName;
    }

    /**
     * @param  string  $CandidateFullName
     * @return CourseEnrollmentDto
     */
    public function withCandidateFullName($CandidateFullName)
    {
        $new = clone $this;
        $new->CandidateFullName = $CandidateFullName;

        return $new;
    }

    /**
     * @return string
     */
    public function getCourseDayResult()
    {
        return $this->CourseDayResult;
    }

    /**
     * @param  string  $CourseDayResult
     * @return CourseEnrollmentDto
     */
    public function withCourseDayResult($CourseDayResult)
    {
        $new = clone $this;
        $new->CourseDayResult = $CourseDayResult;

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
     * @return CourseEnrollmentDto
     */
    public function withCandidateBirthDate($CandidateBirthDate)
    {
        $new = clone $this;
        $new->CandidateBirthDate = $CandidateBirthDate;

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
     * @return CourseEnrollmentDto
     */
    public function withCourseDayNumber($CourseDayNumber)
    {
        $new = clone $this;
        $new->CourseDayNumber = $CourseDayNumber;

        return $new;
    }

    /**
     * @return bool
     */
    public function getChargeVat()
    {
        return $this->ChargeVat;
    }

    /**
     * @param  bool  $ChargeVat
     * @return CourseEnrollmentDto
     */
    public function withChargeVat($ChargeVat)
    {
        $new = clone $this;
        $new->ChargeVat = $ChargeVat;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsDeleted()
    {
        return $this->IsDeleted;
    }

    /**
     * @param  bool  $IsDeleted
     * @return CourseEnrollmentDto
     */
    public function withIsDeleted($IsDeleted)
    {
        $new = clone $this;
        $new->IsDeleted = $IsDeleted;

        return $new;
    }
}
