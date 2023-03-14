<?php

namespace MetMax\Cbr\Reservation\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ReservationRequest implements RequestInterface
{
    /**
     * @var string
     */
    private $Annotation;

    /**
     * @var string
     */
    private $CapacityCode;

    /**
     * @var int
     */
    private $CapacityVersion;

    /**
     * @var string
     */
    private $RequestCode;

    /**
     * @var int
     */
    private $RequestVersion;

    /**
     * Constructor
     *
     * @var string
     * @var string
     * @var int
     * @var string
     * @var int
     */
    public function __construct($Annotation, $CapacityCode, $CapacityVersion, $RequestCode, $RequestVersion)
    {
        $this->Annotation = $Annotation;
        $this->CapacityCode = $CapacityCode;
        $this->CapacityVersion = $CapacityVersion;
        $this->RequestCode = $RequestCode;
        $this->RequestVersion = $RequestVersion;
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
     * @return ReservationRequest
     */
    public function withAnnotation($Annotation)
    {
        $new = clone $this;
        $new->Annotation = $Annotation;

        return $new;
    }

    /**
     * @return string
     */
    public function getCapacityCode()
    {
        return $this->CapacityCode;
    }

    /**
     * @param  string  $CapacityCode
     * @return ReservationRequest
     */
    public function withCapacityCode($CapacityCode)
    {
        $new = clone $this;
        $new->CapacityCode = $CapacityCode;

        return $new;
    }

    /**
     * @return int
     */
    public function getCapacityVersion()
    {
        return $this->CapacityVersion;
    }

    /**
     * @param  int  $CapacityVersion
     * @return ReservationRequest
     */
    public function withCapacityVersion($CapacityVersion)
    {
        $new = clone $this;
        $new->CapacityVersion = $CapacityVersion;

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
     * @return ReservationRequest
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
    public function getRequestVersion()
    {
        return $this->RequestVersion;
    }

    /**
     * @param  int  $RequestVersion
     * @return ReservationRequest
     */
    public function withRequestVersion($RequestVersion)
    {
        $new = clone $this;
        $new->RequestVersion = $RequestVersion;

        return $new;
    }
}
