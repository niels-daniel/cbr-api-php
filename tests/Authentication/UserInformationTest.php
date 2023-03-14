<?php

namespace MetMax\Cbr\Tests\Authentication;

use MetMax\Cbr\Tests\AbstractTestCase;
use MetMax\Cbr\Tests\Traits\InteractWithAuthentication;
use Phpro\SoapClient\Type\MixedResult;

class UserInformationTest extends AbstractTestCase
{
    use InteractWithAuthentication;

    /**
     * @test
     */
    public function it_returns_password_expiry_date(): void
    {
        $response = $this->authenticationClient()->getUserInformation();

        $this->assertInstanceOf(MixedResult::class, $response);
    }
}
