<?php

it('it can covert kilogram to pounds correctly', function () {
    $pounds = \Adamhut\WeightConversions\Weight::kilograms(100)->toPounds();

    expect($pounds)->toEqual(220.46);
});


it('it can covert pounds to kilo correctly', function () {
    $kilo = \Adamhut\WeightConversions\Weight::poundToKilograms(100);

    expect($kilo)->toEqual(45.36);
});
