<?php

/* SpyTimelineBundle:Timeline:default.html.twig */
class __TwigTemplate_343d410004ac63f6a547b5e231ce795076ca193e69d56d2ba6eefb466d067c85 extends Sonata\CacheBundle\Twig\TwigTemplate14
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
        // line 1
        echo $this->env->getExtension('timeline_render')->renderActionComponent((isset($context["timeline"]) ? $context["timeline"] : null), "subject");
        echo "
-
";
        // line 3
        echo $this->env->getExtension('timeline_render')->renderActionComponent((isset($context["timeline"]) ? $context["timeline"] : null), "verb");
        echo "
";
    }

    public function getTemplateName()
    {
        return "SpyTimelineBundle:Timeline:default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  19 => 1,);
    }
}
