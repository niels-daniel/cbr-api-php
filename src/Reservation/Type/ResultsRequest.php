<?php

namespace MetMax\Cbr\Reservation\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ResultsRequest implements RequestInterface
{
    /**
     * @var \DateTimeInterface
     */
    private $ChangedSince;

    /**
     * @var string
     */
    private $EducatorCode;

    /**
     * @var \DateTimeInterface
     */
    private $ExamDateFrom;

    /**
     * @var \DateTimeInterface
     */
    private $ExamDateUpTo;

    /**
     * Constructor
     *
     * @var \DateTimeInterface
     * @var string
     * @var \DateTimeInterface
     * @var \DateTimeInterface
     */
    public function __construct($ChangedSince, $EducatorCode, $ExamDateFrom, $ExamDateUpTo)
    {
        $this->ChangedSince = $ChangedSince;
        $this->EducatorCode = $EducatorCode;
        $this->ExamDateFrom = $ExamDateFrom;
        $this->ExamDateUpTo = $ExamDateUpTo;
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
     * @return ResultsRequest
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
    public function getEducatorCode()
    {
        return $this->EducatorCode;
    }

    /**
     * @param  string  $EducatorCode
     * @return ResultsRequest
     */
    public function withEducatorCode($EducatorCode)
    {
        $new = clone $this;
        $new->EducatorCode = $EducatorCode;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getExamDateFrom()
    {
        return $this->ExamDateFrom;
    }

    /**
     * @param  \DateTimeInterface  $ExamDateFrom
     * @return ResultsRequest
     */
    public function withExamDateFrom($ExamDateFrom)
    {
        $new = clone $this;
        $new->ExamDateFrom = $ExamDateFrom;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getExamDateUpTo()
    {
        return $this->ExamDateUpTo;
    }

    /**
     * @param  \DateTimeInterface  $ExamDateUpTo
     * @return ResultsRequest
     */
    public function withExamDateUpTo($ExamDateUpTo)
    {
        $new = clone $this;
        $new->ExamDateUpTo = $ExamDateUpTo;

        return $new;
    }
}
