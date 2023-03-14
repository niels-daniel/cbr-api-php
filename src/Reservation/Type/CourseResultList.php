<?php

namespace MetMax\Cbr\Reservation\Type;

class CourseResultList
{
    /**
     * @var \MetMax\Cbr\Reservation\Type\CourseResultDto
     */
    private $CourseResultList;

    /**
     * @return \MetMax\Cbr\Reservation\Type\CourseResultDto
     */
    public function getCourseResultList()
    {
        return $this->CourseResultList;
    }

    /**
     * @param  \MetMax\Cbr\Reservation\Type\CourseResultDto  $CourseResultList
     * @return CourseResultList
     */
    public function withCourseResultList($CourseResultList)
    {
        $new = clone $this;
        $new->CourseResultList = $CourseResultList;

        return $new;
    }
}
