<?php

namespace MetMax\Cbr\ReferenceData\Type;

use Phpro\SoapClient\Type\ResultInterface;

class EducatorAgreementsResponse implements ResultInterface
{
    /**
     * @var \MetMax\Cbr\ReferenceData\Type\EducatorAgreementList
     */
    private $EducatorAgreements;

    /**
     * @return \MetMax\Cbr\ReferenceData\Type\EducatorAgreementList
     */
    public function getEducatorAgreements()
    {
        return $this->EducatorAgreements;
    }

    /**
     * @param  \MetMax\Cbr\ReferenceData\Type\EducatorAgreementList  $EducatorAgreements
     * @return EducatorAgreementsResponse
     */
    public function withEducatorAgreements($EducatorAgreements)
    {
        $new = clone $this;
        $new->EducatorAgreements = $EducatorAgreements;

        return $new;
    }
}
