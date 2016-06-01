<?php

/* SonataPageBundle:Block:block_container.html.twig */
class __TwigTemplate_8de74148fbc98f25a0f8c4918d83da29487452fc7c4b2ebf223d1e1b18dbf0c1 extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        try {
            $this->parent = $this->env->loadTemplate("SonataBlockBundle:Block:block_container.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(12);

            throw $e;
        }

        $this->blocks = array(
            'block_child_render' => array($this, 'block_block_child_render'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_container.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block_child_render($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        echo $this->env->getExtension('sonata_page')->renderBlock((isset($context["child"]) ? $context["child"] : null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataPageBundle:Block:block_container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  36 => 14,  11 => 12,);
    }
}
