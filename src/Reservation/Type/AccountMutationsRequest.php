<?php

namespace MetMax\Cbr\Reservation\Type;

use Phpro\SoapClient\Type\RequestInterface;

class AccountMutationsRequest implements RequestInterface
{
    /**
     * @var \DateTimeInterface
     */
    private $MutationDateFrom;

    /**
     * @var \DateTimeInterface
     */
    private $MutationDateUpTo;

    /**
     * Constructor
     *
     * @var \DateTimeInterface
     * @var \DateTimeInterface
     */
    public function __construct($MutationDateFrom, $MutationDateUpTo)
    {
        $this->MutationDateFrom = $MutationDateFrom;
        $this->MutationDateUpTo = $MutationDateUpTo;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getMutationDateFrom()
    {
        return $this->MutationDateFrom;
    }

    /**
     * @param  \DateTimeInterface  $MutationDateFrom
     * @return AccountMutationsRequest
     */
    public function withMutationDateFrom($MutationDateFrom)
    {
        $new = clone $this;
        $new->MutationDateFrom = $MutationDateFrom;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getMutationDateUpTo()
    {
        return $this->MutationDateUpTo;
    }

    /**
     * @param  \DateTimeInterface  $MutationDateUpTo
     * @return AccountMutationsRequest
     */
    public function withMutationDateUpTo($MutationDateUpTo)
    {
        $new = clone $this;
        $new->MutationDateUpTo = $MutationDateUpTo;

        return $new;
    }
}
