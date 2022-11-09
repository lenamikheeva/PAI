<?php

//declare(strict_types=1);

namespace Application\Controller;

use Application\Model\Data;
use Application\Model\Miesiace;
use Application\Model\Liczby;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function __construct(private Data $data,
                                private Miesiace $miesiace,
                                private Liczby $liczby,
                                ){
    }

    public function indexAction()
    {
        return new ViewModel();
    }

    public function miesiaceAction(){
        $miesiace = new Miesiace();
        return new ViewModel([
            'miesiace' => $miesiace->pobierzWszystkie(),
        ]);
    }

    public function dataAction()
    {
        $data = new \Application\Model\Data();
        return new ViewModel([
            'dzisiaj' => $data->dzisiaj(),
            'dni_tygodnia' => $data->dniTygodnia(),
        ]);
    }

    public function liczbyAction(){
        $generator = new Liczby();
        $losoweLiczby = $generator->generuj();
        return new ViewModel([
            'parzyste' => $losoweLiczby[0],
            'nieparzyste' =>$losoweLiczby[1],
        ]);
    }
}