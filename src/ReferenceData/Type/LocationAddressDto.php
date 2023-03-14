<?php

namespace MetMax\Cbr\ReferenceData\Type;

class LocationAddressDto
{
    /**
     * @var string
     */
    private $AdditionalInformation;

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
    private $ZipCode;

    /**
     * @var string
     */
    private $City;

    /**
     * @var string
     */
    private $TelephoneNumber;

    /**
     * @var \DateTimeInterface
     */
    private $ValidFrom;

    /**
     * @var \DateTimeInterface
     */
    private $ValidUpTo;

    /**
     * @return string
     */
    public function getAdditionalInformation()
    {
        return $this->AdditionalInformation;
    }

    /**
     * @param  string  $AdditionalInformation
     * @return LocationAddressDto
     */
    public function withAdditionalInformation($AdditionalInformation)
    {
        $new = clone $this;
        $new->AdditionalInformation = $AdditionalInformation;

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
     * @return LocationAddressDto
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
     * @return LocationAddressDto
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
     * @return LocationAddressDto
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
    public function getZipCode()
    {
        return $this->ZipCode;
    }

    /**
     * @param  string  $ZipCode
     * @return LocationAddressDto
     */
    public function withZipCode($ZipCode)
    {
        $new = clone $this;
        $new->ZipCode = $ZipCode;

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
     * @return LocationAddressDto
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
     * @return LocationAddressDto
     */
    public function withTelephoneNumber($TelephoneNumber)
    {
        $new = clone $this;
        $new->TelephoneNumber = $TelephoneNumber;

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
     * @return LocationAddressDto
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
     * @return LocationAddressDto
     */
    public function withValidUpTo($ValidUpTo)
    {
        $new = clone $this;
        $new->ValidUpTo = $ValidUpTo;

        return $new;
    }
}
