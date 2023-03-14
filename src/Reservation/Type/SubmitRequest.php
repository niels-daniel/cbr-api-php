<?php

namespace MetMax\Cbr\Reservation\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SubmitRequest implements RequestInterface
{
    /**
     * @var string
     */
    private $BirthPlace;

    /**
     * @var bool
     */
    private $BringsInterpreter;

    /**
     * @var \MetMax\Cbr\Reservation\Type\PartialDate
     */
    private $CandidateBirthDate;

    /**
     * @var string
     */
    private $CandidateFirstName;

    /**
     * @var string
     */
    private $CandidateLegalName;

    /**
     * @var int
     */
    private $CandidateNumber;

    /**
     * @var string
     */
    private $CandidatePrefixes;

    /**
     * @var bool
     */
    private $ChargeVat;

    /**
     * @var string
     */
    private $ConsumingEducatorCode;

    /**
     * @var string
     */
    private $ExternalCode;

    /**
     * @var string
     */
    private $ForeignLanguageCode;

    /**
     * @var string
     */
    private $InstructorCode;

    /**
     * @var int
     */
    private $InstructorNumber;

    /**
     * @var bool
     */
    private $IsAutomaticTransmissionVehicle;

    /**
     * @var string
     */
    private $LocationCode;

    /**
     * @var string
     */
    private $ProductCode;

    /**
     * @var string
     */
    private $ReasonSpecialApplication;

    /**
     * @var bool
     */
    private $SendRequestInformationToEducator;

    /**
     * @var int
     */
    private $VehicleNumber;

    /**
     * Constructor
     *
     * @var string
     * @var bool
     * @var \MetMax\Cbr\Reservation\Type\PartialDate
     * @var string
     * @var string
     * @var int
     * @var string
     * @var bool
     * @var string
     * @var string
     * @var string
     * @var string
     * @var int
     * @var bool
     * @var string
     * @var string
     * @var string
     * @var bool
     * @var int
     */
    public function __construct($BirthPlace, $BringsInterpreter, $CandidateBirthDate, $CandidateFirstName, $CandidateLegalName, $CandidateNumber, $CandidatePrefixes, $ChargeVat, $ConsumingEducatorCode, $ExternalCode, $ForeignLanguageCode, $InstructorCode, $InstructorNumber, $IsAutomaticTransmissionVehicle, $LocationCode, $ProductCode, $ReasonSpecialApplication, $SendRequestInformationToEducator, $VehicleNumber)
    {
        $this->BirthPlace = $BirthPlace;
        $this->BringsInterpreter = $BringsInterpreter;
        $this->CandidateBirthDate = $CandidateBirthDate;
        $this->CandidateFirstName = $CandidateFirstName;
        $this->CandidateLegalName = $CandidateLegalName;
        $this->CandidateNumber = $CandidateNumber;
        $this->CandidatePrefixes = $CandidatePrefixes;
        $this->ChargeVat = $ChargeVat;
        $this->ConsumingEducatorCode = $ConsumingEducatorCode;
        $this->ExternalCode = $ExternalCode;
        $this->ForeignLanguageCode = $ForeignLanguageCode;
        $this->InstructorCode = $InstructorCode;
        $this->InstructorNumber = $InstructorNumber;
        $this->IsAutomaticTransmissionVehicle = $IsAutomaticTransmissionVehicle;
        $this->LocationCode = $LocationCode;
        $this->ProductCode = $ProductCode;
        $this->ReasonSpecialApplication = $ReasonSpecialApplication;
        $this->SendRequestInformationToEducator = $SendRequestInformationToEducator;
        $this->VehicleNumber = $VehicleNumber;
    }

    /**
     * @return string
     */
    public function getBirthPlace()
    {
        return $this->BirthPlace;
    }

    /**
     * @param  string  $BirthPlace
     * @return SubmitRequest
     */
    public function withBirthPlace($BirthPlace)
    {
        $new = clone $this;
        $new->BirthPlace = $BirthPlace;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBringsInterpreter()
    {
        return $this->BringsInterpreter;
    }

    /**
     * @param  bool  $BringsInterpreter
     * @return SubmitRequest
     */
    public function withBringsInterpreter($BringsInterpreter)
    {
        $new = clone $this;
        $new->BringsInterpreter = $BringsInterpreter;

        return $new;
    }

    /**
     * @return \MetMax\Cbr\Reservation\Type\PartialDate
     */
    public function getCandidateBirthDate()
    {
        return $this->CandidateBirthDate;
    }

    /**
     * @param  \MetMax\Cbr\Reservation\Type\PartialDate  $CandidateBirthDate
     * @return SubmitRequest
     */
    public function withCandidateBirthDate($CandidateBirthDate)
    {
        $new = clone $this;
        $new->CandidateBirthDate = $CandidateBirthDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getCandidateFirstName()
    {
        return $this->CandidateFirstName;
    }

    /**
     * @param  string  $CandidateFirstName
     * @return SubmitRequest
     */
    public function withCandidateFirstName($CandidateFirstName)
    {
        $new = clone $this;
        $new->CandidateFirstName = $CandidateFirstName;

        return $new;
    }

    /**
     * @return string
     */
    public function getCandidateLegalName()
    {
        return $this->CandidateLegalName;
    }

    /**
     * @param  string  $CandidateLegalName
     * @return SubmitRequest
     */
    public function withCandidateLegalName($CandidateLegalName)
    {
        $new = clone $this;
        $new->CandidateLegalName = $CandidateLegalName;

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
     * @return SubmitRequest
     */
    public function withCandidateNumber($CandidateNumber)
    {
        $new = clone $this;
        $new->CandidateNumber = $CandidateNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getCandidatePrefixes()
    {
        return $this->CandidatePrefixes;
    }

    /**
     * @param  string  $CandidatePrefixes
     * @return SubmitRequest
     */
    public function withCandidatePrefixes($CandidatePrefixes)
    {
        $new = clone $this;
        $new->CandidatePrefixes = $CandidatePrefixes;

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
     * @return SubmitRequest
     */
    public function withChargeVat($ChargeVat)
    {
        $new = clone $this;
        $new->ChargeVat = $ChargeVat;

        return $new;
    }

    /**
     * @return string
     */
    public function getConsumingEducatorCode()
    {
        return $this->ConsumingEducatorCode;
    }

    /**
     * @param  string  $ConsumingEducatorCode
     * @return SubmitRequest
     */
    public function withConsumingEducatorCode($ConsumingEducatorCode)
    {
        $new = clone $this;
        $new->ConsumingEducatorCode = $ConsumingEducatorCode;

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
     * @return SubmitRequest
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
    public function getForeignLanguageCode()
    {
        return $this->ForeignLanguageCode;
    }

    /**
     * @param  string  $ForeignLanguageCode
     * @return SubmitRequest
     */
    public function withForeignLanguageCode($ForeignLanguageCode)
    {
        $new = clone $this;
        $new->ForeignLanguageCode = $ForeignLanguageCode;

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
     * @return SubmitRequest
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
     * @return SubmitRequest
     */
    public function withInstructorNumber($InstructorNumber)
    {
        $new = clone $this;
        $new->InstructorNumber = $InstructorNumber;

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
     * @return SubmitRequest
     */
    public function withIsAutomaticTransmissionVehicle($IsAutomaticTransmissionVehicle)
    {
        $new = clone $this;
        $new->IsAutomaticTransmissionVehicle = $IsAutomaticTransmissionVehicle;

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
     * @return SubmitRequest
     */
    public function withLocationCode($LocationCode)
    {
        $new = clone $this;
        $new->LocationCode = $LocationCode;

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
     * @return SubmitRequest
     */
    public function withProductCode($ProductCode)
    {
        $new = clone $this;
        $new->ProductCode = $ProductCode;

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
     * @return SubmitRequest
     */
    public function withReasonSpecialApplication($ReasonSpecialApplication)
    {
        $new = clone $this;
        $new->ReasonSpecialApplication = $ReasonSpecialApplication;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendRequestInformationToEducator()
    {
        return $this->SendRequestInformationToEducator;
    }

    /**
     * @param  bool  $SendRequestInformationToEducator
     * @return SubmitRequest
     */
    public function withSendRequestInformationToEducator($SendRequestInformationToEducator)
    {
        $new = clone $this;
        $new->SendRequestInformationToEducator = $SendRequestInformationToEducator;

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
     * @return SubmitRequest
     */
    public function withVehicleNumber($VehicleNumber)
    {
        $new = clone $this;
        $new->VehicleNumber = $VehicleNumber;

        return $new;
    }
}
