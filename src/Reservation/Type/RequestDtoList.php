<?php

namespace MetMax\Cbr\Reservation\Type;

class RequestDtoList
{
    /**
     * @var \MetMax\Cbr\Reservation\Type\RequestDto
     */
    private $RequestDto;

    /**
     * @return \MetMax\Cbr\Reservation\Type\RequestDto
     */
    public function getRequestDto()
    {
        return $this->RequestDto;
    }

    /**
     * @param  \MetMax\Cbr\Reservation\Type\RequestDto  $RequestDto
     * @return RequestDtoList
     */
    public function withRequestDto($RequestDto)
    {
        $new = clone $this;
        $new->RequestDto = $RequestDto;

        return $new;
    }
}
