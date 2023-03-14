<?php

namespace MetMax\Cbr\ReferenceData\Type;

use Phpro\SoapClient\Type\ResultInterface;

class LanguagesResponse implements ResultInterface
{
    /**
     * @var \MetMax\Cbr\ReferenceData\Type\LanguageList
     */
    private $Languages;

    /**
     * @return \MetMax\Cbr\ReferenceData\Type\LanguageList
     */
    public function getLanguages()
    {
        return $this->Languages;
    }

    /**
     * @param  \MetMax\Cbr\ReferenceData\Type\LanguageList  $Languages
     * @return LanguagesResponse
     */
    public function withLanguages($Languages)
    {
        $new = clone $this;
        $new->Languages = $Languages;

        return $new;
    }
}
