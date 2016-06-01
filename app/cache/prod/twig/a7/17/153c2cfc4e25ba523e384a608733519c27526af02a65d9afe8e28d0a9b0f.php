<?php

/* SonataProductBundle:Product:view_thumbnail.html.twig */
class __TwigTemplate_a717153c2cfc4e25ba523e384a608733519c27526af02a65d9afe8e28d0a9b0f extends Sonata\CacheBundle\Twig\TwigTemplate14
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
        echo "
    ";
        // line 14
        $context["link"] = $this->env->getExtension('routing')->getUrl("sonata_product_view", array("productId" => $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id", array()), "slug" => $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "slug", array())));
        // line 15
        echo "
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h5 itemprop=\"name\" class=\"panel-title truncate\"><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array()), "html", null, true);
        echo "</a></h5>
        </div>
        <div class=\"panel-body\">
            ";
        // line 21
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image", array())) {
            // line 22
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('sonata_media')->media($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image", array()), "small", array("itemprop" => "image", "class" => "img-responsive", "width" => null, "height" => null));
            echo "</a>
            ";
        } else {
            // line 24
            echo "                ";
            // line 25
            echo "            ";
        }
        // line 26
        echo "        </div>
        <div class=\"panel-footer\">
            <span class=\"text-left\">
                ";
        // line 29
        $this->env->loadTemplate("SonataBasketBundle:Basket:add_product_form_button.html.twig")->display($context);
        // line 30
        echo "            </span>
            <span itemprop=\"price\" class=\"text-right\">
                ";
        // line 32
        if ( !$this->env->getExtension('sonata_product')->hasVariations((isset($context["product"]) ? $context["product"] : null))) {
            // line 33
            echo "                    ";
            echo $this->env->getExtension('sonata_intl_number')->formatCurrency($this->env->getExtension('sonata_product')->getProductPrice((isset($context["product"]) ? $context["product"] : null), (isset($context["currency"]) ? $context["currency"] : null), true), (isset($context["currency"]) ? $context["currency"] : null));
            echo "
                ";
        } else {
            // line 35
            echo "                    ";
            echo $this->env->getExtension('translator')->getTranslator()->trans("product_variation_min_price", array(), "SonataProductBundle");
            // line 36
            echo "
                    ";
            // line 37
            $context["cheapest_variation"] = $this->env->getExtension('sonata_product')->getCheapestEnabledVariation((isset($context["product"]) ? $context["product"] : null));
            // line 38
            echo "                    ";
            echo $this->env->getExtension('sonata_intl_number')->formatCurrency($this->env->getExtension('sonata_product')->getProductPrice((isset($context["cheapest_variation"]) ? $context["cheapest_variation"] : null), (isset($context["currency"]) ? $context["currency"] : null), true), (isset($context["currency"]) ? $context["currency"] : null));
            echo "
                ";
        }
        // line 40
        echo "            </span>
        </div>
    </div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataProductBundle:Product:view_thumbnail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 40,  84 => 38,  82 => 37,  79 => 36,  76 => 35,  70 => 33,  68 => 32,  64 => 30,  62 => 29,  57 => 26,  54 => 25,  52 => 24,  44 => 22,  42 => 21,  34 => 18,  29 => 15,  27 => 14,  24 => 13,  22 => 12,  19 => 11,);
    }
}
