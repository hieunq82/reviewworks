<?php

/* FOSCommentBundle:Thread:comment_votes.html.twig */
class __TwigTemplate_4ef462c6eae9ea132bba5564ded8f47ce3c6f38646fd5c24c21f3a8b3843f841 extends Sonata\CacheBundle\Twig\TwigTemplate14
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
        echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_vote_score", array(), "FOSCommentBundle");
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["commentScore"]) ? $context["commentScore"] : null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:comment_votes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 12,  19 => 11,);
    }
}
