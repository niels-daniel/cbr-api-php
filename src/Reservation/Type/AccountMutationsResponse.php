<?php

namespace MetMax\Cbr\Reservation\Type;

use Phpro\SoapClient\Type\ResultInterface;

class AccountMutationsResponse implements ResultInterface
{
    /**
     * @var float
     */
    private $CurrentBalance;

    /**
     * @var \MetMax\Cbr\Reservation\Type\AccountMutationList
     */
    private $Mutations;

    /**
     * @var float
     */
    private $SpendingLimit;

    /**
     * @return float
     */
    public function getCurrentBalance()
    {
        return $this->CurrentBalance;
    }

    /**
     * @param  float  $CurrentBalance
     * @return AccountMutationsResponse
     */
    public function withCurrentBalance($CurrentBalance)
    {
        $new = clone $this;
        $new->CurrentBalance = $CurrentBalance;

        return $new;
    }

    /**
     * @return \MetMax\Cbr\Reservation\Type\AccountMutationList
     */
    public function getMutations()
    {
        return $this->Mutations;
    }

    /**
     * @param  \MetMax\Cbr\Reservation\Type\AccountMutationList  $Mutations
     * @return AccountMutationsResponse
     */
    public function withMutations($Mutations)
    {
        $new = clone $this;
        $new->Mutations = $Mutations;

        return $new;
    }

    /**
     * @return float
     */
    public function getSpendingLimit()
    {
        return $this->SpendingLimit;
    }

    /**
     * @param  float  $SpendingLimit
     * @return AccountMutationsResponse
     */
    public function withSpendingLimit($SpendingLimit)
    {
        $new = clone $this;
        $new->SpendingLimit = $SpendingLimit;

        return $new;
    }
}
