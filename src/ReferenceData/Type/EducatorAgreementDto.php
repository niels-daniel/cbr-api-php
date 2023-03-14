<?php

namespace MetMax\Cbr\ReferenceData\Type;

class EducatorAgreementDto
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
     * @var \DateTimeInterface
     */
    private $AgreementValidUpTo;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param  string  $Code
     * @return EducatorAgreementDto
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
     * @return EducatorAgreementDto
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getAgreementValidUpTo()
    {
        return $this->AgreementValidUpTo;
    }

    /**
     * @param  \DateTimeInterface  $AgreementValidUpTo
     * @return EducatorAgreementDto
     */
    public function withAgreementValidUpTo($AgreementValidUpTo)
    {
        $new = clone $this;
        $new->AgreementValidUpTo = $AgreementValidUpTo;

        return $new;
    }
}
