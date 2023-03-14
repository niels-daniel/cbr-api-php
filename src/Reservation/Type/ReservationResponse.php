<?php

namespace MetMax\Cbr\Reservation\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ReservationResponse implements ResultInterface
{
    /**
     * @var int
     */
    private $CapacityVersion;

    /**
     * @var int
     */
    private $RequestVersion;

    /**
     * @return int
     */
    public function getCapacityVersion()
    {
        return $this->CapacityVersion;
    }

    /**
     * @param  int  $CapacityVersion
     * @return ReservationResponse
     */
    public function withCapacityVersion($CapacityVersion)
    {
        $new = clone $this;
        $new->CapacityVersion = $CapacityVersion;

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
     * @return ReservationResponse
     */
    public function withRequestVersion($RequestVersion)
    {
        $new = clone $this;
        $new->RequestVersion = $RequestVersion;

        return $new;
    }
}
