<?php

/* SonataProductBundle:Block:recent_products.html.twig */
class __TwigTemplate_9837c5ada1df3d2a8c761fddd08f5edf373efe54fb0056e694bbd7e57bee68b7 extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        try {
            $this->parent = $this->env->loadTemplate("SonataProductBundle:Block:_base_products_block.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(11);

            throw $e;
        }

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataProductBundle:Block:_base_products_block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "SonataProductBundle:Block:recent_products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 11,);
    }
}
