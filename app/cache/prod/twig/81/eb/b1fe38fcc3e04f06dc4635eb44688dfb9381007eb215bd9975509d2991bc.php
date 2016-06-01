<?php

/* FOSCommentBundle:Thread:comment.html.twig */
class __TwigTemplate_81ebb1fe38fcc3e04f06dc4635eb44688dfb9381007eb215bd9975509d2991bc extends Sonata\CacheBundle\Twig\TwigTemplate14
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
        $context["view"] = ((array_key_exists("view", $context)) ? (_twig_default_filter((isset($context["view"]) ? $context["view"] : null), "tree")) : ("tree"));
        // line 13
        $context["depth"] = ((array_key_exists("depth", $context)) ? (_twig_default_filter((isset($context["depth"]) ? $context["depth"] : null), 0)) : (0));
        // line 14
        echo "
";
        // line 15
        $this->env->loadTemplate("FOSCommentBundle:Thread:comment_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 15,  26 => 14,  24 => 13,  22 => 12,  19 => 11,);
    }
}
