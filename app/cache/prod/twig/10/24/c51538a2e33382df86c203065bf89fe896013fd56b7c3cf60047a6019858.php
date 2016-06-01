<?php

/* ApplicationSonataProductBundle:Goodie:form_basket_element.html.twig */
class __TwigTemplate_1024c51538a2e33382df86c203065bf89fe896013fd56b7c3cf60047a6019858 extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 19
        try {
            $this->parent = $this->env->loadTemplate("SonataProductBundle:Product:form_basket_element.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(19);

            throw $e;
        }

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataProductBundle:Product:form_basket_element.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "ApplicationSonataProductBundle:Goodie:form_basket_element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 19,);
    }
}
