<?php

/* Users/index.html */
class __TwigTemplate_640f366427be7b233904f7b5dbaa505bee0ca412e9415adbc72392600fef6b45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("__core/index.html", "Users/index.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "__core/index.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<h1>RADI</h1>
    ";
    }

    public function getTemplateName()
    {
        return "Users/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Users/index.html", "C:\\xampp\\htdocs\\schoolProject\\Views\\Users\\index.html");
    }
}
