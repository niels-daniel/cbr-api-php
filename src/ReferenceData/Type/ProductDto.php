<?php

namespace MetMax\Cbr\ReferenceData\Type;

class ProductDto
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
     * @var int
     */
    private $DurationInSeconds;

    /**
     * @var \DateTimeInterface
     */
    private $ValidFrom;

    /**
     * @var \DateTimeInterface
     */
    private $ValidUpTo;

    /**
     * @var bool
     */
    private $CanHaveForeignLanguage;

    /**
     * @var bool
     */
    private $RequiresReasonSpecialApplication;

    /**
     * @var bool
     */
    private $CanBeSendToEducator;

    /**
     * @var bool
     */
    private $IsVehicleNumberAllowed;

    /**
     * @var string
     */
    private $InstructorRequirement;

    /**
     * @var string
     */
    private $Target;

    /**
     * @var bool
     */
    private $RequiresVatPayment;

    /**
     * @var bool
     */
    private $IsAutomaticTransmissionAllowed;

    /**
     * @var string
     */
    private $CategoryCode;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param  string  $Code
     * @return ProductDto
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
     * @return ProductDto
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return int
     */
    public function getDurationInSeconds()
    {
        return $this->DurationInSeconds;
    }

    /**
     * @param  int  $DurationInSeconds
     * @return ProductDto
     */
    public function withDurationInSeconds($DurationInSeconds)
    {
        $new = clone $this;
        $new->DurationInSeconds = $DurationInSeconds;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getValidFrom()
    {
        return $this->ValidFrom;
    }

    /**
     * @param  \DateTimeInterface  $ValidFrom
     * @return ProductDto
     */
    public function withValidFrom($ValidFrom)
    {
        $new = clone $this;
        $new->ValidFrom = $ValidFrom;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getValidUpTo()
    {
        return $this->ValidUpTo;
    }

    /**
     * @param  \DateTimeInterface  $ValidUpTo
     * @return ProductDto
     */
    public function withValidUpTo($ValidUpTo)
    {
        $new = clone $this;
        $new->ValidUpTo = $ValidUpTo;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanHaveForeignLanguage()
    {
        return $this->CanHaveForeignLanguage;
    }

    /**
     * @param  bool  $CanHaveForeignLanguage
     * @return ProductDto
     */
    public function withCanHaveForeignLanguage($CanHaveForeignLanguage)
    {
        $new = clone $this;
        $new->CanHaveForeignLanguage = $CanHaveForeignLanguage;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRequiresReasonSpecialApplication()
    {
        return $this->RequiresReasonSpecialApplication;
    }

    /**
     * @param  bool  $RequiresReasonSpecialApplication
     * @return ProductDto
     */
    public function withRequiresReasonSpecialApplication($RequiresReasonSpecialApplication)
    {
        $new = clone $this;
        $new->RequiresReasonSpecialApplication = $RequiresReasonSpecialApplication;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanBeSendToEducator()
    {
        return $this->CanBeSendToEducator;
    }

    /**
     * @param  bool  $CanBeSendToEducator
     * @return ProductDto
     */
    public function withCanBeSendToEducator($CanBeSendToEducator)
    {
        $new = clone $this;
        $new->CanBeSendToEducator = $CanBeSendToEducator;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsVehicleNumberAllowed()
    {
        return $this->IsVehicleNumberAllowed;
    }

    /**
     * @param  bool  $IsVehicleNumberAllowed
     * @return ProductDto
     */
    public function withIsVehicleNumberAllowed($IsVehicleNumberAllowed)
    {
        $new = clone $this;
        $new->IsVehicleNumberAllowed = $IsVehicleNumberAllowed;

        return $new;
    }

    /**
     * @return string
     */
    public function getInstructorRequirement()
    {
        return $this->InstructorRequirement;
    }

    /**
     * @param  string  $InstructorRequirement
     * @return ProductDto
     */
    public function withInstructorRequirement($InstructorRequirement)
    {
        $new = clone $this;
        $new->InstructorRequirement = $InstructorRequirement;

        return $new;
    }

    /**
     * @return string
     */
    public function getTarget()
    {
        return $this->Target;
    }

    /**
     * @param  string  $Target
     * @return ProductDto
     */
    public function withTarget($Target)
    {
        $new = clone $this;
        $new->Target = $Target;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRequiresVatPayment()
    {
        return $this->RequiresVatPayment;
    }

    /**
     * @param  bool  $RequiresVatPayment
     * @return ProductDto
     */
    public function withRequiresVatPayment($RequiresVatPayment)
    {
        $new = clone $this;
        $new->RequiresVatPayment = $RequiresVatPayment;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsAutomaticTransmissionAllowed()
    {
        return $this->IsAutomaticTransmissionAllowed;
    }

    /**
     * @param  bool  $IsAutomaticTransmissionAllowed
     * @return ProductDto
     */
    public function withIsAutomaticTransmissionAllowed($IsAutomaticTransmissionAllowed)
    {
        $new = clone $this;
        $new->IsAutomaticTransmissionAllowed = $IsAutomaticTransmissionAllowed;

        return $new;
    }

    /**
     * @return string
     */
    public function getCategoryCode()
    {
        return $this->CategoryCode;
    }

    /**
     * @param  string  $CategoryCode
     * @return ProductDto
     */
    public function withCategoryCode($CategoryCode)
    {
        $new = clone $this;
        $new->CategoryCode = $CategoryCode;

        return $new;
    }
}
