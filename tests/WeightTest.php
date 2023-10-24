<?php

use Vaweto\TestRepo\Weight;

it('can convert kilograms to lbs', function () {
    $lbs = Weight::fromKilograms(10)
        ->toLbs();

    expect(22.04623)->toBe($lbs);
});
