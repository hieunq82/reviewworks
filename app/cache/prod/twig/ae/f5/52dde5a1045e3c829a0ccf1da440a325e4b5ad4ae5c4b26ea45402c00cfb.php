<?php

/* SonataPageBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_aef552dde5a1045e3c829a0ccf1da440a325e4b5ad4ae5c4b26ea45402c00cfb extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_page_admin_block_settings_sonata_type_immutable_array_row' => array($this, 'block_sonata_page_admin_block_settings_sonata_type_immutable_array_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('sonata_page_admin_block_settings_sonata_type_immutable_array_row', $context, $blocks);
    }

    public function block_sonata_page_admin_block_settings_sonata_type_immutable_array_row($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 14
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "SonataPageBundle:Form:form_admin_fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  34 => 14,  29 => 13,  23 => 12,  20 => 11,);
    }
}
