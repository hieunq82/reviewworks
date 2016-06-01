<?php

/* SonataOrderBundle:OrderAdmin:list_payment_status.html.twig */
class __TwigTemplate_0c25a311dda3433c034da2bd18d3ba92b0a05af07670bfd4aafbe6122e6a8c5f extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        try {
            $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(12);

            throw $e;
        }

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    <span class=\"label";
        echo twig_escape_filter($this->env, (($this->env->getExtension('sonata_core_status')->statusClass((isset($context["object"]) ? $context["object"] : null), "payment", "danger")) ? ((" label-" . $this->env->getExtension('sonata_core_status')->statusClass((isset($context["object"]) ? $context["object"] : null), "payment", "danger"))) : ("")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "paymentStatusName", array()), array(), "SonataPaymentBundle"), "html", null, true);
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "SonataOrderBundle:OrderAdmin:list_payment_status.html.twig";
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
