<?php

namespace MetMax\Cbr\Reservation\Type;

class PartialDate
{
    /**
     * @var int
     */
    private $Day;

    /**
     * @var int
     */
    private $Month;

    /**
     * @var int
     */
    private $Year;

    /**
     * @return int
     */
    public function getDay()
    {
        return $this->Day;
    }

    /**
     * @param  int  $Day
     * @return PartialDate
     */
    public function withDay($Day)
    {
        $new = clone $this;
        $new->Day = $Day;

        return $new;
    }

    /**
     * @return int
     */
    public function getMonth()
    {
        return $this->Month;
    }

    /**
     * @param  int  $Month
     * @return PartialDate
     */
    public function withMonth($Month)
    {
        $new = clone $this;
        $new->Month = $Month;

        return $new;
    }

    /**
     * @return int
     */
    public function getYear()
    {
        return $this->Year;
    }

    /**
     * @param  int  $Year
     * @return PartialDate
     */
    public function withYear($Year)
    {
        $new = clone $this;
        $new->Year = $Year;

        return $new;
    }
}
