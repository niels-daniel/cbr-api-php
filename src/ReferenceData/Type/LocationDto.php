<?php

namespace MetMax\Cbr\ReferenceData\Type;

class LocationDto
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
     * @var \MetMax\Cbr\ReferenceData\Type\LocationAddressList
     */
    private $Addresses;

    /**
     * @var string
     */
    private $Type;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param  string  $Code
     * @return LocationDto
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
     * @return LocationDto
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return \MetMax\Cbr\ReferenceData\Type\LocationAddressList
     */
    public function getAddresses()
    {
        return $this->Addresses;
    }

    /**
     * @param  \MetMax\Cbr\ReferenceData\Type\LocationAddressList  $Addresses
     * @return LocationDto
     */
    public function withAddresses($Addresses)
    {
        $new = clone $this;
        $new->Addresses = $Addresses;

        return $new;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param  string  $Type
     * @return LocationDto
     */
    public function withType($Type)
    {
        $new = clone $this;
        $new->Type = $Type;

        return $new;
    }
}
