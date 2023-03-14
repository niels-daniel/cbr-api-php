<?php

namespace MetMax\Cbr\Reservation\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CoursesResponse implements ResultInterface
{
    /**
     * @var \MetMax\Cbr\Reservation\Type\CourseList
     */
    private $Courses;

    /**
     * @return \MetMax\Cbr\Reservation\Type\CourseList
     */
    public function getCourses()
    {
        return $this->Courses;
    }

    /**
     * @param  \MetMax\Cbr\Reservation\Type\CourseList  $Courses
     * @return CoursesResponse
     */
    public function withCourses($Courses)
    {
        $new = clone $this;
        $new->Courses = $Courses;

        return $new;
    }
}
