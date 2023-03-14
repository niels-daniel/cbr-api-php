<?php

namespace MetMax\Cbr\ReferenceData\Type;

class LanguageList
{
    /**
     * @var \MetMax\Cbr\ReferenceData\Type\LanguageDto
     */
    private $LanguageList;

    /**
     * @return \MetMax\Cbr\ReferenceData\Type\LanguageDto
     */
    public function getLanguageList()
    {
        return $this->LanguageList;
    }

    /**
     * @param  \MetMax\Cbr\ReferenceData\Type\LanguageDto  $LanguageList
     * @return LanguageList
     */
    public function withLanguageList($LanguageList)
    {
        $new = clone $this;
        $new->LanguageList = $LanguageList;

        return $new;
    }
}
