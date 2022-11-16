<?php

namespace Application\Controller;

use Application\Model\Autor;
use Application\Form\AutorForm;
use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;

class AutorzyControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $autor = $container->get(Autor::class);
        $autorForm = $container->get(AutorForm::class);

        return new AutorzyController($autor, $autorForm);
    }
}