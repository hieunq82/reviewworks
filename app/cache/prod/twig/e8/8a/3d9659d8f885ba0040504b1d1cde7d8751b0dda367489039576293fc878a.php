<?php

/* ::empty.html.twig */
class __TwigTemplate_e88a3d9659d8f885ba0040504b1d1cde7d8751b0dda367489039576293fc878a extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('body', $context, $blocks);
        // line 2
        $this->displayBlock('content', $context, $blocks);
    }

    // line 1
    public function block_body($context, array $blocks = array())
    {
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::empty.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  32 => 2,  27 => 1,  23 => 2,  21 => 1,);
    }
}
