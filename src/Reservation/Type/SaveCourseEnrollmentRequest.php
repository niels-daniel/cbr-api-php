<?php

namespace MetMax\Cbr\Reservation\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SaveCourseEnrollmentRequest implements RequestInterface
{
    /**
     * @var string
     */
    private $ConsumingEducatorCode;

    /**
     * @var \MetMax\Cbr\Reservation\Type\CourseEnrollmentUpdates
     */
    private $Enrollments;

    /**
     * Constructor
     *
     * @var string
     * @var \MetMax\Cbr\Reservation\Type\CourseEnrollmentUpdates
     */
    public function __construct($ConsumingEducatorCode, $Enrollments)
    {
        $this->ConsumingEducatorCode = $ConsumingEducatorCode;
        $this->Enrollments = $Enrollments;
    }

    /**
     * @return string
     */
    public function getConsumingEducatorCode()
    {
        return $this->ConsumingEducatorCode;
    }

    /**
     * @param  string  $ConsumingEducatorCode
     * @return SaveCourseEnrollmentRequest
     */
    public function withConsumingEducatorCode($ConsumingEducatorCode)
    {
        $new = clone $this;
        $new->ConsumingEducatorCode = $ConsumingEducatorCode;

        return $new;
    }

    /**
     * @return \MetMax\Cbr\Reservation\Type\CourseEnrollmentUpdates
     */
    public function getEnrollments()
    {
        return $this->Enrollments;
    }

    /**
     * @param  \MetMax\Cbr\Reservation\Type\CourseEnrollmentUpdates  $Enrollments
     * @return SaveCourseEnrollmentRequest
     */
    public function withEnrollments($Enrollments)
    {
        $new = clone $this;
        $new->Enrollments = $Enrollments;

        return $new;
    }
}
