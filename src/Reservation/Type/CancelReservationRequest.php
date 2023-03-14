<?php

namespace MetMax\Cbr\Reservation\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CancelReservationRequest implements RequestInterface
{
    /**
     * @var string
     */
    private $CapacityCode;

    /**
     * @var int
     */
    private $CapacityVersion;

    /**
     * Constructor
     *
     * @var string
     * @var int
     */
    public function __construct($CapacityCode, $CapacityVersion)
    {
        $this->CapacityCode = $CapacityCode;
        $this->CapacityVersion = $CapacityVersion;
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
     * @return CancelReservationRequest
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
     * @return CancelReservationRequest
     */
    public function withCapacityVersion($CapacityVersion)
    {
        $new = clone $this;
        $new->CapacityVersion = $CapacityVersion;

        return $new;
    }
}
