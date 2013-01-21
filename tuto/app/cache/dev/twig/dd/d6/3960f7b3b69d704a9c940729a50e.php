<?php

/* emilyBoutikBundle:products:all.html.twig */
class __TwigTemplate_ddd63960f7b3b69d704a9c940729a50e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("emilyBoutikBundle::layout.html.twig");

        $this->blocks = array(
            'h1' => array($this, 'block_h1'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "emilyBoutikBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_h1($context, array $blocks = array())
    {
        // line 4
        echo "\tProduits
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "    Tous les produits
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "    Tous les produits
";
    }

    public function getTemplateName()
    {
        return "emilyBoutikBundle:products:all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  46 => 11,  41 => 8,  38 => 7,  33 => 4,  30 => 3,);
    }
}
