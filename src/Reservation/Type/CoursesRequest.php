<?php

namespace MetMax\Cbr\Reservation\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CoursesRequest implements RequestInterface
{
    /**
     * @var \DateTimeInterface
     */
    private $ChangedSince;

    /**
     * @var string
     */
    private $CourseType;

    /**
     * @var \DateTimeInterface
     */
    private $DateFrom;

    /**
     * @var \DateTimeInterface
     */
    private $DateUpTo;

    /**
     * @var string
     */
    private $ProductGroupCode;

    /**
     * Constructor
     *
     * @var \DateTimeInterface
     * @var string
     * @var \DateTimeInterface
     * @var \DateTimeInterface
     * @var string
     */
    public function __construct($ChangedSince, $CourseType, $DateFrom, $DateUpTo, $ProductGroupCode)
    {
        $this->ChangedSince = $ChangedSince;
        $this->CourseType = $CourseType;
        $this->DateFrom = $DateFrom;
        $this->DateUpTo = $DateUpTo;
        $this->ProductGroupCode = $ProductGroupCode;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getChangedSince()
    {
        return $this->ChangedSince;
    }

    /**
     * @param  \DateTimeInterface  $ChangedSince
     * @return CoursesRequest
     */
    public function withChangedSince($ChangedSince)
    {
        $new = clone $this;
        $new->ChangedSince = $ChangedSince;

        return $new;
    }

    /**
     * @return string
     */
    public function getCourseType()
    {
        return $this->CourseType;
    }

    /**
     * @param  string  $CourseType
     * @return CoursesRequest
     */
    public function withCourseType($CourseType)
    {
        $new = clone $this;
        $new->CourseType = $CourseType;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateFrom()
    {
        return $this->DateFrom;
    }

    /**
     * @param  \DateTimeInterface  $DateFrom
     * @return CoursesRequest
     */
    public function withDateFrom($DateFrom)
    {
        $new = clone $this;
        $new->DateFrom = $DateFrom;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateUpTo()
    {
        return $this->DateUpTo;
    }

    /**
     * @param  \DateTimeInterface  $DateUpTo
     * @return CoursesRequest
     */
    public function withDateUpTo($DateUpTo)
    {
        $new = clone $this;
        $new->DateUpTo = $DateUpTo;

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
     * @return CoursesRequest
     */
    public function withProductGroupCode($ProductGroupCode)
    {
        $new = clone $this;
        $new->ProductGroupCode = $ProductGroupCode;

        return $new;
    }
}
