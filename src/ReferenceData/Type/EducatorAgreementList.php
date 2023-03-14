<?php

namespace MetMax\Cbr\ReferenceData\Type;

class EducatorAgreementList
{
    /**
     * @var \MetMax\Cbr\ReferenceData\Type\EducatorAgreementDto
     */
    private $EducatorAgreementList;

    /**
     * @return \MetMax\Cbr\ReferenceData\Type\EducatorAgreementDto
     */
    public function getEducatorAgreementList()
    {
        return $this->EducatorAgreementList;
    }

    /**
     * @param  \MetMax\Cbr\ReferenceData\Type\EducatorAgreementDto  $EducatorAgreementList
     * @return EducatorAgreementList
     */
    public function withEducatorAgreementList($EducatorAgreementList)
    {
        $new = clone $this;
        $new->EducatorAgreementList = $EducatorAgreementList;

        return $new;
    }
}
