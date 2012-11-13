<?php
/**
 * (c) 2011-2012 Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Vespolina\FulfillmentBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class VespolinaFulfillmentExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('fulfillment.xml');

        if (isset($config['fulfillment_methods'])) {
            $this->configureFulfillmentMethods($config['fulfillment_methods'], $container);
        }

    }

    protected function configureFulfillmentMethods(array $config, ContainerBuilder $container)
    {
        $container->setParameter('vespolina.fulfillment.fulfillment_method_resolver.configuration', $config);
    }
}
