<?php

/*
 * This file is part of the Front Foundation package.
 *
 * Copyright (c) 2017-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Bundle\TwigBundle\TwigBundle;
use Symfony\Bundle\WebServerBundle\WebServerBundle;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollectionBuilder;


/**
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class Symfony extends Kernel
{
    use MicroKernelTrait;

    public function registerBundles()
    {
        $bundles = [
            new FrameworkBundle(),
            new TwigBundle(),
        ];

        if ('dev' === $this->getEnvironment()) {
            $bundles[] = new WebServerBundle();
        }

        return $bundles;
    }

    public function getCacheDir()
    {
        return __DIR__ . '/var/cache/' . $this->getEnvironment();
    }

    public function getLogDir()
    {
        return __DIR__ . '/var/logs';
    }

    protected function configureRoutes(RouteCollectionBuilder $routes)
    {
        $mainRoute = new Route('/', [
            '_controller' => 'FrameworkBundle:Template:template',
            'template'    => 'src/templates/index.html.twig',
        ]);
        $routes->addRoute($mainRoute, 'main_route');
    }

    protected function configureContainer(ContainerBuilder $container, LoaderInterface $loader)
    {
        $container->loadFromExtension('framework', [
            'secret'     => 'sd87cb6cb49c248cn3cnn439cn498ds0210sad2',
            'templating' => [
                'engines' => ['twig'],
            ],
        ]);
        $container->loadFromExtension('twig', [
            'paths'            => [
                '%kernel.project_dir%'                                                  => '',
                '%kernel.project_dir%/vendor/lin3s/front-foundation/src/templates/twig' => 'lin3s_front_foundation',
            ],
            'strict_variables' => true,
        ]);
    }
}
