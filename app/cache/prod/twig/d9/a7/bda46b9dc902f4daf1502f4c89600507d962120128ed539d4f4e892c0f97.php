<?php

/* SonataSeoBundle:Block:block_email_share_button.html.twig */
class __TwigTemplate_d9a7bda46b9dc902f4daf1502f4c89600507d962120128ed539d4f4e892c0f97 extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : null), "templates", array()), "block_base", array()));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        ob_start();
        // line 15
        echo "
        <a href=\"mailto:?subject=";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "subject", array()), "html", null, true);
        echo "&body=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "body", array()), "html", null, true);
        echo "\">
            ";
        // line 17
        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata_seo_share_by_email", array(), "SonataSeoBundle");
        // line 18
        echo "        </a>

    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataSeoBundle:Block:block_email_share_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  42 => 17,  36 => 16,  33 => 15,  30 => 14,  27 => 13,  18 => 11,);
    }
}
