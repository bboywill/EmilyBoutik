<?php

/* emilyBoutikBundle::layout.html.twig */
class __TwigTemplate_4122b1de4f9b9f57e7f70f1d387f3adf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'footer' => array($this, 'block_footer'),
            'body' => array($this, 'block_body'),
            'h1' => array($this, 'block_h1'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Boutique d'Emilie
";
    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        // line 8
        echo "    <header>
\t\t<a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("emily_home"), "html", null, true);
        echo "\" id=\"logo\">
\t\t\tEmilyBoutik
\t\t</a>
\t\t<nav id=\"menu\">
\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("emily_products_all"), "html", null, true);
        echo "\">Produits</a></li>
\t\t\t\t<li><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("emily_contact"), "html", null, true);
        echo "\">Contact</a></li>
\t\t\t</ul>
\t\t</nav>
\t</header>
";
    }

    // line 21
    public function block_footer($context, array $blocks = array())
    {
        // line 22
        echo "    <footer>
\t</footer>
";
    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        // line 27
        echo "    <div id=\"wrapper\">
\t\t<h1>";
        // line 28
        $this->displayBlock('h1', $context, $blocks);
        echo "</h1>
\t\t";
        // line 29
        $this->displayBlock('content', $context, $blocks);
        // line 30
        echo "\t</div>
";
    }

    // line 28
    public function block_h1($context, array $blocks = array())
    {
    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "emilyBoutikBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 29,  94 => 28,  89 => 30,  87 => 29,  83 => 28,  80 => 27,  77 => 26,  71 => 22,  68 => 21,  59 => 15,  55 => 14,  47 => 9,  44 => 8,  41 => 7,  36 => 4,  33 => 3,);
    }
}
