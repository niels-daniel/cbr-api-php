<?php

namespace MetMax\Cbr\Tests\ReferenceData;

use MetMax\Cbr\ReferenceData\Type\LocationsRequest;
use MetMax\Cbr\ReferenceData\Type\LocationsResponse;
use MetMax\Cbr\Tests\AbstractTestCase;
use MetMax\Cbr\Tests\Traits\InteractWithReferenceData;

class LocationsTest extends AbstractTestCase
{
    use InteractWithReferenceData;

    /**
     * @test
     */
    public function it_returns_locations(): void
    {
        $response = $this->referenceDataClient()->getLocations(new LocationsRequest());

        $this->assertInstanceOf(LocationsResponse::class, $response);
    }
}
