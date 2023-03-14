<?php

namespace MetMax\Cbr\Reservation\Type;

class CourseEnrollmentUpdates
{
    /**
     * @var \MetMax\Cbr\Reservation\Type\CourseEnrollmentUpdateDto
     */
    private $CourseEnrollmentUpdates;

    /**
     * @return \MetMax\Cbr\Reservation\Type\CourseEnrollmentUpdateDto
     */
    public function getCourseEnrollmentUpdates()
    {
        return $this->CourseEnrollmentUpdates;
    }

    /**
     * @param  \MetMax\Cbr\Reservation\Type\CourseEnrollmentUpdateDto  $CourseEnrollmentUpdates
     * @return CourseEnrollmentUpdates
     */
    public function withCourseEnrollmentUpdates($CourseEnrollmentUpdates)
    {
        $new = clone $this;
        $new->CourseEnrollmentUpdates = $CourseEnrollmentUpdates;

        return $new;
    }
}
