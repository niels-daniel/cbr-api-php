<?php

namespace MetMax\Cbr\Reservation\Type;

class AccountMutationList
{
    /**
     * @var \MetMax\Cbr\Reservation\Type\AccountMutationDto
     */
    private $AccountMutationList;

    /**
     * @return \MetMax\Cbr\Reservation\Type\AccountMutationDto
     */
    public function getAccountMutationList()
    {
        return $this->AccountMutationList;
    }

    /**
     * @param  \MetMax\Cbr\Reservation\Type\AccountMutationDto  $AccountMutationList
     * @return AccountMutationList
     */
    public function withAccountMutationList($AccountMutationList)
    {
        $new = clone $this;
        $new->AccountMutationList = $AccountMutationList;

        return $new;
    }
}
