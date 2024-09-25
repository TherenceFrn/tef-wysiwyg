<?php

namespace TherenceFrn\TefWysiwyg\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WysiwygType extends AbstractType
{
    private $defaultOptions;

    public function __construct(array $defaultOptions = [])
    {
        $this->defaultOptions = $defaultOptions;
    }

    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $wysiwygOptions = array_merge($this->defaultOptions, $options['wysiwyg_options']);
        $view->vars['wysiwyg_options'] = $wysiwygOptions;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'wysiwyg_options' => [],
        ]);

        $resolver->setAllowedTypes('wysiwyg_options', 'array');
    }

    public function getParent()
    {
        return TextareaType::class;
    }

    public function getBlockPrefix()
    {
        return 'tef_wysiwyg';
    }
}
