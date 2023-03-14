<?php

namespace MetMax\Cbr\ReferenceData\Type;

use Phpro\SoapClient\Type\ResultInterface;

class InstructorsResponse implements ResultInterface
{
    /**
     * @var \MetMax\Cbr\ReferenceData\Type\InstructorList
     */
    private $Instructors;

    /**
     * @return \MetMax\Cbr\ReferenceData\Type\InstructorList
     */
    public function getInstructors()
    {
        return $this->Instructors;
    }

    /**
     * @param  \MetMax\Cbr\ReferenceData\Type\InstructorList  $Instructors
     * @return InstructorsResponse
     */
    public function withInstructors($Instructors)
    {
        $new = clone $this;
        $new->Instructors = $Instructors;

        return $new;
    }
}
