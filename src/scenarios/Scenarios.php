<?php

namespace src\scenarios;

use Src\Utils\DataGenerator;

class Scenarios
{
    public static function getScenarios(): array
    {
        return [
            'Small List' => DataGenerator::generateRandomArray(100),
            'Medium List' => DataGenerator::generateRandomArray(10000),
            'Big List' => DataGenerator::generateRandomArray(100000),
            'Sorted List' => DataGenerator::generateSortedArray(1000),
            'Reversed List' => DataGenerator::generateReversedArray(1000),
            'Duplicated List' => DataGenerator::generateDuplicatedArray(1000),
        ];
    }
}