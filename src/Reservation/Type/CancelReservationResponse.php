<?php

namespace MetMax\Cbr\Reservation\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CancelReservationResponse implements ResultInterface
{
    /**
     * @var int
     */
    private $CapacityVersion;

    /**
     * @return int
     */
    public function getCapacityVersion()
    {
        return $this->CapacityVersion;
    }

    /**
     * @param  int  $CapacityVersion
     * @return CancelReservationResponse
     */
    public function withCapacityVersion($CapacityVersion)
    {
        $new = clone $this;
        $new->CapacityVersion = $CapacityVersion;

        return $new;
    }
}
