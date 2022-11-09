<?php

namespace Application\Model;

class Data 
{
        public function dzisiaj() 
        {
                return date('Y-m-d H:i:s');
        }

        public function dniTygodnia() 
        {
                return [
                        'Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota', 'Niedziela'
                ];
        }
}