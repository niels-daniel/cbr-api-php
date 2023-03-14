<?php

namespace MetMax\Cbr\Reservation\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CourseEnrollmentResponse implements ResultInterface
{
    /**
     * @var \MetMax\Cbr\Reservation\Type\CourseEnrollmentsList
     */
    private $Enrollments;

    /**
     * @return \MetMax\Cbr\Reservation\Type\CourseEnrollmentsList
     */
    public function getEnrollments()
    {
        return $this->Enrollments;
    }

    /**
     * @param  \MetMax\Cbr\Reservation\Type\CourseEnrollmentsList  $Enrollments
     * @return CourseEnrollmentResponse
     */
    public function withEnrollments($Enrollments)
    {
        $new = clone $this;
        $new->Enrollments = $Enrollments;

        return $new;
    }
}
