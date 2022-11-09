<?php

namespace Application\Model;

class Liczby
{
    public function generuj()
    {
        $parzyste = [];
        $nieparzyste = [];

        for($i = 0; $i <= 100; $i++){
            $liczba = rand(0,1000);
            if($liczba % 2 == 0)
                array_push($parzyste,$liczba);
            else
                array_push($nieparzyste,$liczba);
        }
        sort($parzyste);
        sort($nieparzyste);
        return [$parzyste,$nieparzyste];
    }
}