<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\ReportBundle\Form\Type\Renderer;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Renderer choice type.
 *
 * @author Mateusz Zalewski <mateusz.zalewski@lakion.com>
 */
class RendererChoiceType extends AbstractType
{
    /**
     * Renderers
     *
     * @var array
     */
    protected $renderers;

    /**
     * Constructor
     *
     * @param array $renderers
     */
    public function __construct($renderers)
    {
        $this->renderers = $renderers;
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver
            ->setDefaults(array(
                'choices' => $this->renderers,
            ))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'choice';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'sylius_renderer_choice';
    }
}
