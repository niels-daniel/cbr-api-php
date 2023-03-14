<?php

namespace MetMax\Cbr\Authentication;

use Phpro\SoapClient\Caller\Caller;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\MixedResult;
use Phpro\SoapClient\Type\MultiArgumentRequest;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class AuthenticationClient
{
    /**
     * @var Caller
     */
    private $caller;

    public function __construct(Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param  RequestInterface|Type\ChangePasswordRequest  $parameters
     * @return ResultInterface|Type\ChangePasswordResponse
     *
     * @throws SoapException
     */
    public function changePassword(Type\ChangePasswordRequest $parameters): Type\ChangePasswordResponse
    {
        return ($this->caller)('ChangePassword', $parameters);
    }

    /**
     * @return ResultInterface|MixedResult
     *
     * @throws SoapException
     */
    public function getUserInformation(): MixedResult
    {
        return ($this->caller)('GetUserInformation', new MultiArgumentRequest([]));
    }
}
