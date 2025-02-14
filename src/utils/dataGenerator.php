<?php

namespace src\utils;

class dataGenerator
{
    public static function generateRandomArray(int $size): array
    {
        $arr = [];
        for ($i = 0; $i < $size; $i++) {
            $arr[] = rand(1, 100000);
        }
        return $arr;
    }

    public static function generateSortedArray(int $size): array
    {
        $arr = self::generateRandomArray($size);
        sort($arr);
        return $arr;
    }

    public static function generateReversedArray(int $size): array
    {
        $arr = self::generateRandomArray($size);
        rsort($arr);
        return $arr;
    }

    public static function generateDuplicatedArray(int $size): array
    {
        $arr = [];
        for ($i = 0; $i < $size; $i++) {
            $arr[] = rand(1, 10); 
        }
        return $arr;
    }
}
