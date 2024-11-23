<?php

namespace Fico7489\PersistenceBundle;

use Fico7489\PersistenceBundle\EventListener\DoctrineListener;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class PersistenceBundle extends AbstractBundle
{
    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        $builder->autowire(DoctrineListener::class)
            ->setAutowired(true)
            ->setAutoconfigured(true)
            ->setPublic(true);

        //        $container->import(__DIR__.'/../../config'');
    }
}
