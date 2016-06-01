<?php

/* SonataMediaBundle:Provider:view_vimeo.html.twig */
class __TwigTemplate_99b7c2a96ee41e584a89bd3647d5ea41ba8c89eb5f8f12e60f41dd24871f89de extends Sonata\CacheBundle\Twig\TwigTemplate14
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

<iframe
    id=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "id", array()), "html", null, true);
        echo "\"
    src=\"//player.vimeo.com/video/";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : null), "providerreference", array()), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "src", array()), "html", null, true);
        echo "\"
    width=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "width", array()), "html", null, true);
        echo "\"
    height=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "height", array()), "html", null, true);
        echo "\"
    frameborder=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "frameborder", array()), "html", null, true);
        echo "\">
</iframe>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Provider:view_vimeo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 18,  38 => 17,  34 => 16,  28 => 15,  24 => 14,  19 => 11,);
    }
}
