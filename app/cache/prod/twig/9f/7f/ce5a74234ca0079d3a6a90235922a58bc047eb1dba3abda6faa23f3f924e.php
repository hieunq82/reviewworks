<?php

/* SonataProductBundle:Catalog:_pager.html.twig */
class __TwigTemplate_9f7fce5a74234ca0079d3a6a90235922a58bc047eb1dba3abda6faa23f3f924e extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        ob_start();
        // line 13
        echo "    ";
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pager"]) ? $context["pager"] : null), null, array(), array("pagination_class" => "pagination pull-right"));
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataProductBundle:Catalog:_pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 13,  22 => 12,  19 => 11,);
    }
}
