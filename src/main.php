<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Src\Algorithms\BubbleSort;
use Src\Algorithms\MergeSort;
use Src\Algorithms\QuickSort;
use Src\Utils\PerformanceMetrics;
use Src\Scenarios\Scenarios;

$scenarios = Scenarios::getScenarios();
$consolidatedResults = [];

echo "Testes sendo executado ...\n";

foreach ($scenarios as $scenarioName => $test) {
    $timeQuickSort = PerformanceMetrics::measureTime([new QuickSort(), 'sort'], $test, 0, count($test) - 1);
    $timeMergeSort = PerformanceMetrics::measureTime([new MergeSort(), 'sort'], $test, 0, count($test) - 1);
    $timeBubbleSort = PerformanceMetrics::measureTime([new BubbleSort(), 'sort'], $test);

    $quickSortResults[] = [$scenarioName, count($test),  $timeQuickSort];
    $mergeSortResults[] = [$scenarioName, count($test),  $timeMergeSort];
    $bubbleSortResults[] = [$scenarioName, count($test), $timeBubbleSort];

    $consolidatedResults[] = [
        'Cenário' => $scenarioName,
        'QuickSort' => $timeQuickSort,
        'MergeSort' => $timeMergeSort,
        'BubbleSort' => $timeBubbleSort,
    ];
}

PerformanceMetrics::saveResultsToCSV($bubbleSortResults, 'results/bubble_sort_results.csv');
PerformanceMetrics::saveResultsToCSV($mergeSortResults, 'results/merge_sort_results.csv');
PerformanceMetrics::saveResultsToCSV($quickSortResults, 'results/quick_sort_results.csv');

PerformanceMetrics::saveConsolidatedResultsToCSV($consolidatedResults, 'results/consolidated_results.csv');

echo "Testes concluídos. Resultados consolidados salvos em 'results/consolidated_results.csv'.\n";
