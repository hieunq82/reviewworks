<?php

/* SonataProductBundle:ProductAdmin:edit.html.twig */
class __TwigTemplate_f43e5580e217b975794c4fbc758341be175323bbf3604cccc537d36f568a8f7e extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        try {
            $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(12);

            throw $e;
        }

        $this->blocks = array(
            'preview' => array($this, 'block_preview'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_preview($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if ((array_key_exists("product", $context) && $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id", array()))) {
            // line 16
            echo "        <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array()), "html", null, true);
            echo "</strong> : ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description", array()), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataProductBundle:ProductAdmin:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  36 => 14,  11 => 12,);
    }
}
