<?php

namespace MetMax\Cbr\ReferenceData\Type;

class InstructorDto
{
    /**
     * @var string
     */
    private $Code;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var string
     */
    private $EducatorCode;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param  string  $Code
     * @return InstructorDto
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
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param  string  $Name
     * @return InstructorDto
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

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
     * @return InstructorDto
     */
    public function withEducatorCode($EducatorCode)
    {
        $new = clone $this;
        $new->EducatorCode = $EducatorCode;

        return $new;
    }
}
