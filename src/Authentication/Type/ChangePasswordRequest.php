<?php

namespace MetMax\Cbr\Authentication\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ChangePasswordRequest implements RequestInterface
{
    /**
     * @var string
     */
    private $NewPassword;

    /**
     * @var string
     */
    private $OldPassword;

    /**
     * Constructor
     *
     * @var string
     * @var string
     */
    public function __construct($NewPassword, $OldPassword)
    {
        $this->NewPassword = $NewPassword;
        $this->OldPassword = $OldPassword;
    }

    /**
     * @return string
     */
    public function getNewPassword()
    {
        return $this->NewPassword;
    }

    /**
     * @param  string  $NewPassword
     * @return ChangePasswordRequest
     */
    public function withNewPassword($NewPassword)
    {
        $new = clone $this;
        $new->NewPassword = $NewPassword;

        return $new;
    }

    /**
     * @return string
     */
    public function getOldPassword()
    {
        return $this->OldPassword;
    }

    /**
     * @param  string  $OldPassword
     * @return ChangePasswordRequest
     */
    public function withOldPassword($OldPassword)
    {
        $new = clone $this;
        $new->OldPassword = $OldPassword;

        return $new;
    }
}
