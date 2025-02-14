<?php

namespace src\algorithms;

class bubbleSort
{
    public function sort(array $list): array
    {
        $length = count($list);

        for ($i = 0; $i < $length; $i++) {
            for ($j = $i + 1; $j < $length; $j++) {
                if ($list[$i] > $list[$j]) {
                    $aux = $list[$i];
                    $list[$i] = $list[$j];
                    $list[$j] = $aux;
                }
            }
        }

        return $list;
    }
}
