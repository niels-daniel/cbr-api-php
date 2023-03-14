<?php

namespace MetMax\Cbr\Reservation\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FindRequestsResponse implements ResultInterface
{
    /**
     * @var \MetMax\Cbr\Reservation\Type\RequestDtoList
     */
    private $Requests;

    /**
     * @return \MetMax\Cbr\Reservation\Type\RequestDtoList
     */
    public function getRequests()
    {
        return $this->Requests;
    }

    /**
     * @param  \MetMax\Cbr\Reservation\Type\RequestDtoList  $Requests
     * @return FindRequestsResponse
     */
    public function withRequests($Requests)
    {
        $new = clone $this;
        $new->Requests = $Requests;

        return $new;
    }
}
