<?php

namespace MetMax\Cbr\Reservation\Type;

class CourseEnrollmentsList
{
    /**
     * @var \MetMax\Cbr\Reservation\Type\CourseEnrollmentDto
     */
    private $CourseEnrollmentsList;

    /**
     * @return \MetMax\Cbr\Reservation\Type\CourseEnrollmentDto
     */
    public function getCourseEnrollmentsList()
    {
        return $this->CourseEnrollmentsList;
    }

    /**
     * @param  \MetMax\Cbr\Reservation\Type\CourseEnrollmentDto  $CourseEnrollmentsList
     * @return CourseEnrollmentsList
     */
    public function withCourseEnrollmentsList($CourseEnrollmentsList)
    {
        $new = clone $this;
        $new->CourseEnrollmentsList = $CourseEnrollmentsList;

        return $new;
    }
}
