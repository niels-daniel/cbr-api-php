<?php

namespace MetMax\Cbr\Reservation\Type;

class CapacityDto
{
    /**
     * @var string
     */
    private $Code;

    /**
     * @var \DateTimeInterface
     */
    private $ExamDate;

    /**
     * @var string
     */
    private $StartTime;

    /**
     * @var \MetMax\Cbr\Reservation\Type\ArrayOfstring
     */
    private $ProductCodes;

    /**
     * @var string
     */
    private $LocationCode;

    /**
     * @var string
     */
    private $TableCode;

    /**
     * @var \DateTimeInterface
     */
    private $PurchaseDate;

    /**
     * @var \DateTimeInterface
     */
    private $AdvertisementDate;

    /**
     * @var string
     */
    private $Annotation;

    /**
     * @var \DateTimeInterface
     */
    private $ReservationDate;

    /**
     * @var int
     */
    private $Version;

    /**
     * @var string
     */
    private $RequestCode;

    /**
     * @var int
     */
    private $RegistrationCode;

    /**
     * @var string
     */
    private $AdditionalChargeType;

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
     * @return CapacityDto
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getExamDate()
    {
        return $this->ExamDate;
    }

    /**
     * @param  \DateTimeInterface  $ExamDate
     * @return CapacityDto
     */
    public function withExamDate($ExamDate)
    {
        $new = clone $this;
        $new->ExamDate = $ExamDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }

    /**
     * @param  string  $StartTime
     * @return CapacityDto
     */
    public function withStartTime($StartTime)
    {
        $new = clone $this;
        $new->StartTime = $StartTime;

        return $new;
    }

    /**
     * @return \MetMax\Cbr\Reservation\Type\ArrayOfstring
     */
    public function getProductCodes()
    {
        return $this->ProductCodes;
    }

    /**
     * @param  \MetMax\Cbr\Reservation\Type\ArrayOfstring  $ProductCodes
     * @return CapacityDto
     */
    public function withProductCodes($ProductCodes)
    {
        $new = clone $this;
        $new->ProductCodes = $ProductCodes;

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
     * @return CapacityDto
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
    public function getTableCode()
    {
        return $this->TableCode;
    }

    /**
     * @param  string  $TableCode
     * @return CapacityDto
     */
    public function withTableCode($TableCode)
    {
        $new = clone $this;
        $new->TableCode = $TableCode;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPurchaseDate()
    {
        return $this->PurchaseDate;
    }

    /**
     * @param  \DateTimeInterface  $PurchaseDate
     * @return CapacityDto
     */
    public function withPurchaseDate($PurchaseDate)
    {
        $new = clone $this;
        $new->PurchaseDate = $PurchaseDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getAdvertisementDate()
    {
        return $this->AdvertisementDate;
    }

    /**
     * @param  \DateTimeInterface  $AdvertisementDate
     * @return CapacityDto
     */
    public function withAdvertisementDate($AdvertisementDate)
    {
        $new = clone $this;
        $new->AdvertisementDate = $AdvertisementDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getAnnotation()
    {
        return $this->Annotation;
    }

    /**
     * @param  string  $Annotation
     * @return CapacityDto
     */
    public function withAnnotation($Annotation)
    {
        $new = clone $this;
        $new->Annotation = $Annotation;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getReservationDate()
    {
        return $this->ReservationDate;
    }

    /**
     * @param  \DateTimeInterface  $ReservationDate
     * @return CapacityDto
     */
    public function withReservationDate($ReservationDate)
    {
        $new = clone $this;
        $new->ReservationDate = $ReservationDate;

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
     * @return CapacityDto
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
    public function getRequestCode()
    {
        return $this->RequestCode;
    }

    /**
     * @param  string  $RequestCode
     * @return CapacityDto
     */
    public function withRequestCode($RequestCode)
    {
        $new = clone $this;
        $new->RequestCode = $RequestCode;

        return $new;
    }

    /**
     * @return int
     */
    public function getRegistrationCode()
    {
        return $this->RegistrationCode;
    }

    /**
     * @param  int  $RegistrationCode
     * @return CapacityDto
     */
    public function withRegistrationCode($RegistrationCode)
    {
        $new = clone $this;
        $new->RegistrationCode = $RegistrationCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getAdditionalChargeType()
    {
        return $this->AdditionalChargeType;
    }

    /**
     * @param  string  $AdditionalChargeType
     * @return CapacityDto
     */
    public function withAdditionalChargeType($AdditionalChargeType)
    {
        $new = clone $this;
        $new->AdditionalChargeType = $AdditionalChargeType;

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
     * @return CapacityDto
     */
    public function withIsDeleted($IsDeleted)
    {
        $new = clone $this;
        $new->IsDeleted = $IsDeleted;

        return $new;
    }
}
