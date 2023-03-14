<?php

namespace MetMax\Cbr\Reservation\Type;

class CourseList
{
    /**
     * @var \MetMax\Cbr\Reservation\Type\CourseDto
     */
    private $CourseList;

    /**
     * @return \MetMax\Cbr\Reservation\Type\CourseDto
     */
    public function getCourseList()
    {
        return $this->CourseList;
    }

    /**
     * @param  \MetMax\Cbr\Reservation\Type\CourseDto  $CourseList
     * @return CourseList
     */
    public function withCourseList($CourseList)
    {
        $new = clone $this;
        $new->CourseList = $CourseList;

        return $new;
    }
}
