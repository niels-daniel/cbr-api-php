<?php

namespace MetMax\Cbr\Tests\Reservation;

use DateTime;
use MetMax\Cbr\Reservation\Type\CapacityRequest;
use MetMax\Cbr\Reservation\Type\CapacityResponse;
use MetMax\Cbr\Tests\AbstractTestCase;
use MetMax\Cbr\Tests\Traits\InteractWithReservation;

class CapacityTest extends AbstractTestCase
{
    use InteractWithReservation;

    public function test_it_returns_capacity(): void
    {
        $response = $this->reservationClient()->findCapacity(new CapacityRequest(
            new DateTime('11-03-2023'),
            new DateTime('13-03-2023'),
            new DateTime('02-08-2023'),
        ));

        $this->assertInstanceOf(CapacityResponse::class, $response);
    }
}
