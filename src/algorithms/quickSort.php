<?php

namespace src\algorithms;

class quickSort
{
    function sort(array &$list, int $low, int $high): void
    {
        if ($low < $high) {
            $pivotIndex = $this->partition($list, $low, $high);

            $this->sort($list, $low, $pivotIndex - 1);
            $this->sort($list, $pivotIndex + 1, $high);
        }
    }

    function partition(array &$list, int $low, int $high): int
    {
        $pivot = $list[$low];
        $i = $low;

        for ($j = $low + 1; $j <= $high; $j++) {
            if ($list[$j] <= $pivot) {
                $i++;
                [$list[$i], $list[$j]] = [$list[$j], $list[$i]];
            }
        }

        [$list[$low], $list[$i]] = [$list[$i], $list[$low]];
        return $i;
    }
}
