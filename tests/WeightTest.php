<?php

namespace Adamhut\WeightConversions\Tests;

class WeightTest extends TestCase
{
    /** @test */
    public function it_can_test()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function it_can_covert_kilogram_to_pounds()
    {
        $pounds = \Adamhut\WeightConversions\Weight::kilograms(100)->toPounds();
        $this->assertEquals(220.46, $pounds);
    }
}


// it('it can covert kilogram to pounds', function () {
//     $pounds = \Adamhut\WeightConversions\Weight::kilograms(100)->toPounds();

//     expect($pounds)->toEqual(220.46);
// });
