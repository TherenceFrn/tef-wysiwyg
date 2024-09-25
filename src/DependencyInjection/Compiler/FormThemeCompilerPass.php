<?php

namespace TherenceFrn\TefWysiwyg\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class FormThemeCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        if (!$container->hasParameter('twig.form.resources')) {
            return;
        }

        $resources = $container->getParameter('twig.form.resources');
        array_unshift($resources, '@TefWysiwyg/form_theme.html.twig');
        $container->setParameter('twig.form.resources', $resources);
    }
}
