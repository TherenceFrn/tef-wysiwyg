<?php

namespace TherenceFrn\TefWysiwyg;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use TherenceFrn\TefWysiwyg\DependencyInjection\Compiler\FormThemeCompilerPass;

class TefWysiwygBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new FormThemeCompilerPass());
    }
}
