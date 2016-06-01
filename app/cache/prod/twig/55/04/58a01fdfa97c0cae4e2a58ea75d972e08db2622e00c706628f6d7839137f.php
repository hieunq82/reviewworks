<?php

/* SonataDemoBundle:Block:newsletter_confirmation.html.twig */
class __TwigTemplate_550458a01fdfa97c0cae4e2a58ea75d972e08db2622e00c706628f6d7839137f extends Sonata\CacheBundle\Twig\TwigTemplate14
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
        echo "<div class=\"alert alert-success\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : null), array(), "SonataDemoBundle"), "html", null, true);
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "SonataDemoBundle:Block:newsletter_confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
