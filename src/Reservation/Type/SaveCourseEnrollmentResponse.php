<?php

namespace MetMax\Cbr\Reservation\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SaveCourseEnrollmentResponse implements ResultInterface
{
    /**
     * @var \MetMax\Cbr\Reservation\Type\FaultMessageEnrollmentUpdates
     */
    private $FaultMessages;

    /**
     * @return \MetMax\Cbr\Reservation\Type\FaultMessageEnrollmentUpdates
     */
    public function getFaultMessages()
    {
        return $this->FaultMessages;
    }

    /**
     * @param  \MetMax\Cbr\Reservation\Type\FaultMessageEnrollmentUpdates  $FaultMessages
     * @return SaveCourseEnrollmentResponse
     */
    public function withFaultMessages($FaultMessages)
    {
        $new = clone $this;
        $new->FaultMessages = $FaultMessages;

        return $new;
    }
}
