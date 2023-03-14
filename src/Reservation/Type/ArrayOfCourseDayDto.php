<?php

namespace MetMax\Cbr\Reservation\Type;

class ArrayOfCourseDayDto
{
    /**
     * @var \MetMax\Cbr\Reservation\Type\CourseDayDto
     */
    private $CourseDayDto;

    /**
     * @return \MetMax\Cbr\Reservation\Type\CourseDayDto
     */
    public function getCourseDayDto()
    {
        return $this->CourseDayDto;
    }

    /**
     * @param  \MetMax\Cbr\Reservation\Type\CourseDayDto  $CourseDayDto
     * @return ArrayOfCourseDayDto
     */
    public function withCourseDayDto($CourseDayDto)
    {
        $new = clone $this;
        $new->CourseDayDto = $CourseDayDto;

        return $new;
    }
}
