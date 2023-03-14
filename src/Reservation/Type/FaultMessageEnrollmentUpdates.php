<?php

namespace MetMax\Cbr\Reservation\Type;

class FaultMessageEnrollmentUpdates
{
    /**
     * @var \MetMax\Cbr\Reservation\Type\FaultMessageEnrollmentUpdateDto
     */
    private $FaultMessageEnrollmentUpdates;

    /**
     * @return \MetMax\Cbr\Reservation\Type\FaultMessageEnrollmentUpdateDto
     */
    public function getFaultMessageEnrollmentUpdates()
    {
        return $this->FaultMessageEnrollmentUpdates;
    }

    /**
     * @param  \MetMax\Cbr\Reservation\Type\FaultMessageEnrollmentUpdateDto  $FaultMessageEnrollmentUpdates
     * @return FaultMessageEnrollmentUpdates
     */
    public function withFaultMessageEnrollmentUpdates($FaultMessageEnrollmentUpdates)
    {
        $new = clone $this;
        $new->FaultMessageEnrollmentUpdates = $FaultMessageEnrollmentUpdates;

        return $new;
    }
}
