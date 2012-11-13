<?php

namespace Vespolina\FulfillmentBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('vespolina_fulfillment');
        $rootNode
            ->children()
            ->scalarNode('db_driver')->cannotBeOverwritten()->isRequired()->cannotBeEmpty()->end()
            ->end();
        $this->addFulfillmentMethodsSection($rootNode);

        return $treeBuilder;
    }

    protected function addFulfillmentMethodsSection(ArrayNodeDefinition $node)
    {
        $node->children()
            ->arrayNode('fulfillment_methods')
            ->children()
                ->arrayNode('shipment')
                    ->prototype('array')
                    ->children()
                        ->scalarNode('class')->end()
                    ->end()
                ->end()
            ->end()
            ->end()
            ->end();

    }
}
