<?php

namespace MetMax\Cbr\Reservation\Type;

class CandidateDto
{
    /**
     * @var int
     */
    private $CandidateNumber;

    /**
     * @var string
     */
    private $LegalName;

    /**
     * @var string
     */
    private $FirstNames;

    /**
     * @var string
     */
    private $Initials;

    /**
     * @var string
     */
    private $Prefix;

    /**
     * @var string
     */
    private $Street;

    /**
     * @var int
     */
    private $HouseNumber;

    /**
     * @var string
     */
    private $HouseNumberExtension;

    /**
     * @var string
     */
    private $ZipCodeNetherlands;

    /**
     * @var string
     */
    private $City;

    /**
     * @var string
     */
    private $TelephoneNumber;

    /**
     * @var string
     */
    private $EmailAddress;

    /**
     * @var \MetMax\Cbr\Reservation\Type\PartialDate
     */
    private $BirthDate;

    /**
     * @var bool
     */
    private $IsDeleted;

    /**
     * @var string
     */
    private $CategoryCode;

    /**
     * @return int
     */
    public function getCandidateNumber()
    {
        return $this->CandidateNumber;
    }

    /**
     * @param  int  $CandidateNumber
     * @return CandidateDto
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
    public function getLegalName()
    {
        return $this->LegalName;
    }

    /**
     * @param  string  $LegalName
     * @return CandidateDto
     */
    public function withLegalName($LegalName)
    {
        $new = clone $this;
        $new->LegalName = $LegalName;

        return $new;
    }

    /**
     * @return string
     */
    public function getFirstNames()
    {
        return $this->FirstNames;
    }

    /**
     * @param  string  $FirstNames
     * @return CandidateDto
     */
    public function withFirstNames($FirstNames)
    {
        $new = clone $this;
        $new->FirstNames = $FirstNames;

        return $new;
    }

    /**
     * @return string
     */
    public function getInitials()
    {
        return $this->Initials;
    }

    /**
     * @param  string  $Initials
     * @return CandidateDto
     */
    public function withInitials($Initials)
    {
        $new = clone $this;
        $new->Initials = $Initials;

        return $new;
    }

    /**
     * @return string
     */
    public function getPrefix()
    {
        return $this->Prefix;
    }

    /**
     * @param  string  $Prefix
     * @return CandidateDto
     */
    public function withPrefix($Prefix)
    {
        $new = clone $this;
        $new->Prefix = $Prefix;

        return $new;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->Street;
    }

    /**
     * @param  string  $Street
     * @return CandidateDto
     */
    public function withStreet($Street)
    {
        $new = clone $this;
        $new->Street = $Street;

        return $new;
    }

    /**
     * @return int
     */
    public function getHouseNumber()
    {
        return $this->HouseNumber;
    }

    /**
     * @param  int  $HouseNumber
     * @return CandidateDto
     */
    public function withHouseNumber($HouseNumber)
    {
        $new = clone $this;
        $new->HouseNumber = $HouseNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getHouseNumberExtension()
    {
        return $this->HouseNumberExtension;
    }

    /**
     * @param  string  $HouseNumberExtension
     * @return CandidateDto
     */
    public function withHouseNumberExtension($HouseNumberExtension)
    {
        $new = clone $this;
        $new->HouseNumberExtension = $HouseNumberExtension;

        return $new;
    }

    /**
     * @return string
     */
    public function getZipCodeNetherlands()
    {
        return $this->ZipCodeNetherlands;
    }

    /**
     * @param  string  $ZipCodeNetherlands
     * @return CandidateDto
     */
    public function withZipCodeNetherlands($ZipCodeNetherlands)
    {
        $new = clone $this;
        $new->ZipCodeNetherlands = $ZipCodeNetherlands;

        return $new;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param  string  $City
     * @return CandidateDto
     */
    public function withCity($City)
    {
        $new = clone $this;
        $new->City = $City;

        return $new;
    }

    /**
     * @return string
     */
    public function getTelephoneNumber()
    {
        return $this->TelephoneNumber;
    }

    /**
     * @param  string  $TelephoneNumber
     * @return CandidateDto
     */
    public function withTelephoneNumber($TelephoneNumber)
    {
        $new = clone $this;
        $new->TelephoneNumber = $TelephoneNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->EmailAddress;
    }

    /**
     * @param  string  $EmailAddress
     * @return CandidateDto
     */
    public function withEmailAddress($EmailAddress)
    {
        $new = clone $this;
        $new->EmailAddress = $EmailAddress;

        return $new;
    }

    /**
     * @return \MetMax\Cbr\Reservation\Type\PartialDate
     */
    public function getBirthDate()
    {
        return $this->BirthDate;
    }

    /**
     * @param  \MetMax\Cbr\Reservation\Type\PartialDate  $BirthDate
     * @return CandidateDto
     */
    public function withBirthDate($BirthDate)
    {
        $new = clone $this;
        $new->BirthDate = $BirthDate;

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
     * @return CandidateDto
     */
    public function withIsDeleted($IsDeleted)
    {
        $new = clone $this;
        $new->IsDeleted = $IsDeleted;

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
     * @return CandidateDto
     */
    public function withCategoryCode($CategoryCode)
    {
        $new = clone $this;
        $new->CategoryCode = $CategoryCode;

        return $new;
    }
}
