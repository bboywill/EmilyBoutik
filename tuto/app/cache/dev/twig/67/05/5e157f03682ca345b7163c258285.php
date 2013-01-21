<?php

/* emilyBoutikBundle::home.html.twig */
class __TwigTemplate_67055e157f03682ca345b7163c258285 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("emilyBoutikBundle::layout.html.twig");

        $this->blocks = array(
            'h1' => array($this, 'block_h1'),
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
        echo "\tBienvenu
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    Home
";
    }

    public function getTemplateName()
    {
        return "emilyBoutikBundle::home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
