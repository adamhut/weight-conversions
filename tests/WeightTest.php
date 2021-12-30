<?php

it('it can covert kilogram to pounds correctly', function () {
    $pounds = \Adamhut\WeightConversions\Weight::kilograms(100)->toPounds();

    expect($pounds)->toEqual(220.46);
});

it('it can covert kilogram to stones correctly', function () {
    $stones = \Adamhut\WeightConversions\Weight::kilograms(100)->toStones();

    expect($stones)->toEqual(15.747);
});


it('it can covert pounds to kilo correctly', function () {
    $kilo = \Adamhut\WeightConversions\Weight::poundToKilograms(100);

    expect($kilo)->toEqual(45.36);
});
