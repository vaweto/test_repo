<?php

it('can convert kilograms to lbs', function () {
    $lbs = \Vaweto\TestRepo\Weight::fromKilograms(10)
        ->toLbs();

    expect(22.04623)->toBe($lbs);
});
