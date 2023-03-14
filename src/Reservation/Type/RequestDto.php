<?php

namespace MetMax\Cbr\Reservation\Type;

class RequestDto
{
    /**
     * @var string
     */
    private $Code;

    /**
     * @var string
     */
    private $ExternalCode;

    /**
     * @var string
     */
    private $ProductCode;

    /**
     * @var int
     */
    private $CandidateNumber;

    /**
     * @var \DateTimeInterface
     */
    private $CandidateBirthdate;

    /**
     * @var string
     */
    private $CandidateFullName;

    /**
     * @var string
     */
    private $LocationCode;

    /**
     * @var bool
     */
    private $HasOwnInterpreter;

    /**
     * @var bool
     */
    private $SendToEducator;

    /**
     * @var string
     */
    private $InstructorCode;

    /**
     * @var int
     */
    private $InstructorNumber;

    /**
     * @var int
     */
    private $VehicleNumber;

    /**
     * @var string
     */
    private $LanguageCode;

    /**
     * @var string
     */
    private $ReasonSpecialApplication;

    /**
     * @var int
     */
    private $Version;

    /**
     * @var string
     */
    private $Status;

    /**
     * @var bool
     */
    private $ChargeVat;

    /**
     * @var bool
     */
    private $IsAutomaticTransmissionVehicle;

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
     * @return RequestDto
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
    public function getExternalCode()
    {
        return $this->ExternalCode;
    }

    /**
     * @param  string  $ExternalCode
     * @return RequestDto
     */
    public function withExternalCode($ExternalCode)
    {
        $new = clone $this;
        $new->ExternalCode = $ExternalCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getProductCode()
    {
        return $this->ProductCode;
    }

    /**
     * @param  string  $ProductCode
     * @return RequestDto
     */
    public function withProductCode($ProductCode)
    {
        $new = clone $this;
        $new->ProductCode = $ProductCode;

        return $new;
    }

    /**
     * @return int
     */
    public function getCandidateNumber()
    {
        return $this->CandidateNumber;
    }

    /**
     * @param  int  $CandidateNumber
     * @return RequestDto
     */
    public function withCandidateNumber($CandidateNumber)
    {
        $new = clone $this;
        $new->CandidateNumber = $CandidateNumber;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCandidateBirthdate()
    {
        return $this->CandidateBirthdate;
    }

    /**
     * @param  \DateTimeInterface  $CandidateBirthdate
     * @return RequestDto
     */
    public function withCandidateBirthdate($CandidateBirthdate)
    {
        $new = clone $this;
        $new->CandidateBirthdate = $CandidateBirthdate;

        return $new;
    }

    /**
     * @return string
     */
    public function getCandidateFullName()
    {
        return $this->CandidateFullName;
    }

    /**
     * @param  string  $CandidateFullName
     * @return RequestDto
     */
    public function withCandidateFullName($CandidateFullName)
    {
        $new = clone $this;
        $new->CandidateFullName = $CandidateFullName;

        return $new;
    }

    /**
     * @return string
     */
    public function getLocationCode()
    {
        return $this->LocationCode;
    }

    /**
     * @param  string  $LocationCode
     * @return RequestDto
     */
    public function withLocationCode($LocationCode)
    {
        $new = clone $this;
        $new->LocationCode = $LocationCode;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHasOwnInterpreter()
    {
        return $this->HasOwnInterpreter;
    }

    /**
     * @param  bool  $HasOwnInterpreter
     * @return RequestDto
     */
    public function withHasOwnInterpreter($HasOwnInterpreter)
    {
        $new = clone $this;
        $new->HasOwnInterpreter = $HasOwnInterpreter;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendToEducator()
    {
        return $this->SendToEducator;
    }

    /**
     * @param  bool  $SendToEducator
     * @return RequestDto
     */
    public function withSendToEducator($SendToEducator)
    {
        $new = clone $this;
        $new->SendToEducator = $SendToEducator;

        return $new;
    }

    /**
     * @return string
     */
    public function getInstructorCode()
    {
        return $this->InstructorCode;
    }

    /**
     * @param  string  $InstructorCode
     * @return RequestDto
     */
    public function withInstructorCode($InstructorCode)
    {
        $new = clone $this;
        $new->InstructorCode = $InstructorCode;

        return $new;
    }

    /**
     * @return int
     */
    public function getInstructorNumber()
    {
        return $this->InstructorNumber;
    }

    /**
     * @param  int  $InstructorNumber
     * @return RequestDto
     */
    public function withInstructorNumber($InstructorNumber)
    {
        $new = clone $this;
        $new->InstructorNumber = $InstructorNumber;

        return $new;
    }

    /**
     * @return int
     */
    public function getVehicleNumber()
    {
        return $this->VehicleNumber;
    }

    /**
     * @param  int  $VehicleNumber
     * @return RequestDto
     */
    public function withVehicleNumber($VehicleNumber)
    {
        $new = clone $this;
        $new->VehicleNumber = $VehicleNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->LanguageCode;
    }

    /**
     * @param  string  $LanguageCode
     * @return RequestDto
     */
    public function withLanguageCode($LanguageCode)
    {
        $new = clone $this;
        $new->LanguageCode = $LanguageCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getReasonSpecialApplication()
    {
        return $this->ReasonSpecialApplication;
    }

    /**
     * @param  string  $ReasonSpecialApplication
     * @return RequestDto
     */
    public function withReasonSpecialApplication($ReasonSpecialApplication)
    {
        $new = clone $this;
        $new->ReasonSpecialApplication = $ReasonSpecialApplication;

        return $new;
    }

    /**
     * @return int
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * @param  int  $Version
     * @return RequestDto
     */
    public function withVersion($Version)
    {
        $new = clone $this;
        $new->Version = $Version;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param  string  $Status
     * @return RequestDto
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return bool
     */
    public function getChargeVat()
    {
        return $this->ChargeVat;
    }

    /**
     * @param  bool  $ChargeVat
     * @return RequestDto
     */
    public function withChargeVat($ChargeVat)
    {
        $new = clone $this;
        $new->ChargeVat = $ChargeVat;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsAutomaticTransmissionVehicle()
    {
        return $this->IsAutomaticTransmissionVehicle;
    }

    /**
     * @param  bool  $IsAutomaticTransmissionVehicle
     * @return RequestDto
     */
    public function withIsAutomaticTransmissionVehicle($IsAutomaticTransmissionVehicle)
    {
        $new = clone $this;
        $new->IsAutomaticTransmissionVehicle = $IsAutomaticTransmissionVehicle;

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
     * @return RequestDto
     */
    public function withIsDeleted($IsDeleted)
    {
        $new = clone $this;
        $new->IsDeleted = $IsDeleted;

        return $new;
    }
}
