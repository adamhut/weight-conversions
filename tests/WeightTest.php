<?php

it('it can covert kilogram to pounds', function () {
    $pounds = \Adamhut\WeightConversions\Weight::kilograms(100)->toPounds();

    expect($pounds)->toEqual(220.46);
});
