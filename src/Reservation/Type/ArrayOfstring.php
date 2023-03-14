<?php

namespace MetMax\Cbr\Reservation\Type;

class ArrayOfstring
{
    /**
     * @var string
     */
    private $string;

    /**
     * @return string
     */
    public function getString()
    {
        return $this->string;
    }

    /**
     * @param  string  $string
     * @return ArrayOfstring
     */
    public function withString($string)
    {
        $new = clone $this;
        $new->string = $string;

        return $new;
    }
}
