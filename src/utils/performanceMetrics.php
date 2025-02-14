<?php

namespace src\utils;

class performanceMetrics
{
    public static function measureTime(callable $function, ...$args): float
    {
        $startTime = microtime(true);
        $function(...$args);
        $endTime = microtime(true);

        return $endTime - $startTime;
    }

    public static function saveResultsToCSV(array $results, string $filename): void
    {
        $file = fopen($filename, 'w');
        fputcsv($file, ['Algorithm', 'Size', 'Time']);
        foreach ($results as $result) {
            fputcsv($file, $result);
        }
        fclose($file);
    }

    public static function saveConsolidatedResultsToCSV(array $results, string $filename): void
    {
        $file = fopen($filename, 'w');

        fputcsv($file, ['Cenário', 'QuickSort (s)', 'MergeSort (s)', 'BubbleSort (s)']);

        foreach ($results as $result) {
            fputcsv($file, $result);
        }

        fclose($file);
    }
}
