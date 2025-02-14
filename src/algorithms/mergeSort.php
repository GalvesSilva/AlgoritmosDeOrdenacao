<?php

namespace src\algorithms;

class MergeSort
{
    public function sort(array &$list, int $left, int $right): void
    {
        if ($left < $right) {
            $middle = intval(($left + $right) / 2);

            $this->sort($list, $left, $middle);
            $this->sort($list, $middle + 1, $right);

            $this->merge($list, $left, $middle, $right);
        }
    }

    public function merge(array &$list, int $left, int $middle, int $right): void
    {
        $helper = [];

        for ($i = $left; $i <= $right; $i++) {
            $helper[$i] = $list[$i];
        }

        $i = $left;
        $j = $middle + 1;
        $k = $left;

        while ($i <= $middle && $j <= $right) {
            if ($helper[$i] <= $helper[$j]) {
                $list[$k] = $helper[$i];
                $i++;
            } else {
                $list[$k] = $helper[$j];
                $j++;
            }
            $k++;
        }

        while ($i <= $middle) {
            $list[$k] = $helper[$i];
            $i++;
            $k++;
        }
    }
}
