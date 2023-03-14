<?php

namespace MetMax\Cbr\ReferenceData\Type;

class InstructorList
{
    /**
     * @var \MetMax\Cbr\ReferenceData\Type\InstructorDto
     */
    private $InstructorList;

    /**
     * @return \MetMax\Cbr\ReferenceData\Type\InstructorDto
     */
    public function getInstructorList()
    {
        return $this->InstructorList;
    }

    /**
     * @param  \MetMax\Cbr\ReferenceData\Type\InstructorDto  $InstructorList
     * @return InstructorList
     */
    public function withInstructorList($InstructorList)
    {
        $new = clone $this;
        $new->InstructorList = $InstructorList;

        return $new;
    }
}
