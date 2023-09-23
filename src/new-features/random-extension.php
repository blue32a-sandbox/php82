<?php

use Random\Engine\Xoshiro256StarStar;
use Random\Randomizer;

$blueprintRng = new Xoshiro256StarStar(
    hash('sha256', 'Example seed that is converted to a 256 Bit string via SHA-256', true)
);

$fibers = [];

for ($i = 0; $i < 8; $i++) {
    $fiberRng = clone $blueprintRng;
    $blueprintRng->jump();

    $fibers[] = new Fiber(function() use ($fiberRng, $i): void {
        $randomizer = new Randomizer($fiberRng);
        echo "{$i}: " . $randomizer->getInt(0, 100), PHP_EOL;
    });
}

$randomizer = new Randomizer();

$fibers = $randomizer->shuffleArray($fibers);
foreach ($fibers as $fiber) {
    $fiber->start();
}
