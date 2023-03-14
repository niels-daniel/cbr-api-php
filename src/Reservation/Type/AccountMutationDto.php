<?php

namespace MetMax\Cbr\Reservation\Type;

class AccountMutationDto
{
    /**
     * @var \DateTimeInterface
     */
    private $TransactionDate;

    /**
     * @var string
     */
    private $Type;

    /**
     * @var string
     */
    private $ProductCode;

    /**
     * @var float
     */
    private $AmountInclVat;

    /**
     * @var float
     */
    private $VatPercentage;

    /**
     * @var string
     */
    private $Remarks;

    /**
     * @return \DateTimeInterface
     */
    public function getTransactionDate()
    {
        return $this->TransactionDate;
    }

    /**
     * @param  \DateTimeInterface  $TransactionDate
     * @return AccountMutationDto
     */
    public function withTransactionDate($TransactionDate)
    {
        $new = clone $this;
        $new->TransactionDate = $TransactionDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param  string  $Type
     * @return AccountMutationDto
     */
    public function withType($Type)
    {
        $new = clone $this;
        $new->Type = $Type;

        return $new;
    }

    /**
     * @return string
     */
    public function getProductCode()
    {
        return $this->ProductCode;
    }

    /**
     * @param  string  $ProductCode
     * @return AccountMutationDto
     */
    public function withProductCode($ProductCode)
    {
        $new = clone $this;
        $new->ProductCode = $ProductCode;

        return $new;
    }

    /**
     * @return float
     */
    public function getAmountInclVat()
    {
        return $this->AmountInclVat;
    }

    /**
     * @param  float  $AmountInclVat
     * @return AccountMutationDto
     */
    public function withAmountInclVat($AmountInclVat)
    {
        $new = clone $this;
        $new->AmountInclVat = $AmountInclVat;

        return $new;
    }

    /**
     * @return float
     */
    public function getVatPercentage()
    {
        return $this->VatPercentage;
    }

    /**
     * @param  float  $VatPercentage
     * @return AccountMutationDto
     */
    public function withVatPercentage($VatPercentage)
    {
        $new = clone $this;
        $new->VatPercentage = $VatPercentage;

        return $new;
    }

    /**
     * @return string
     */
    public function getRemarks()
    {
        return $this->Remarks;
    }

    /**
     * @param  string  $Remarks
     * @return AccountMutationDto
     */
    public function withRemarks($Remarks)
    {
        $new = clone $this;
        $new->Remarks = $Remarks;

        return $new;
    }
}
