<?php

/* SonataCommentBundle:Block:thread_async.html.twig */
class __TwigTemplate_5164bc8e5fdfd72a9b8d4f237d4f8e78a330a036f0a8f757f765e0f5385aa4a7 extends Sonata\CacheBundle\Twig\TwigTemplate14
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
        $this->env->loadTemplate("SonataCommentBundle:Thread:async.html.twig")->display(array_merge($context, array("id" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "id", array()))));
    }

    public function getTemplateName()
    {
        return "SonataCommentBundle:Block:thread_async.html.twig";
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
