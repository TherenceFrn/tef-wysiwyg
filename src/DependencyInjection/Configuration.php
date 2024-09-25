<?php

namespace TherenceFrn\TefWysiwyg\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('tef_wysiwyg');

        $rootNode = $treeBuilder->getRootNode();

        $rootNode
            ->children()
            ->arrayNode('default_options')
            ->variablePrototype()->end()
            ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
