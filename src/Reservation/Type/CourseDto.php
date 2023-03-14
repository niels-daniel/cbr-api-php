<?php

namespace MetMax\Cbr\Reservation\Type;

class CourseDto
{
    /**
     * @var string
     */
    private $Code;

    /**
     * @var string
     */
    private $Description;

    /**
     * @var \MetMax\Cbr\Reservation\Type\ArrayOfCourseDayDto
     */
    private $Days;

    /**
     * @var string
     */
    private $ProductGroupCode;

    /**
     * @var bool
     */
    private $IsDeleted;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param  string  $Code
     * @return CourseDto
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param  string  $Description
     * @return CourseDto
     */
    public function withDescription($Description)
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    /**
     * @return \MetMax\Cbr\Reservation\Type\ArrayOfCourseDayDto
     */
    public function getDays()
    {
        return $this->Days;
    }

    /**
     * @param  \MetMax\Cbr\Reservation\Type\ArrayOfCourseDayDto  $Days
     * @return CourseDto
     */
    public function withDays($Days)
    {
        $new = clone $this;
        $new->Days = $Days;

        return $new;
    }

    /**
     * @return string
     */
    public function getProductGroupCode()
    {
        return $this->ProductGroupCode;
    }

    /**
     * @param  string  $ProductGroupCode
     * @return CourseDto
     */
    public function withProductGroupCode($ProductGroupCode)
    {
        $new = clone $this;
        $new->ProductGroupCode = $ProductGroupCode;

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
     * @return CourseDto
     */
    public function withIsDeleted($IsDeleted)
    {
        $new = clone $this;
        $new->IsDeleted = $IsDeleted;

        return $new;
    }
}
