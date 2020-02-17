<?php

/* Auction/getFinished.html */
class __TwigTemplate_4361841a1c3d76abaab6acfcd1737adf3bd14782113df265b80954be6dfc195f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("__core/index.html", "Auction/getFinished.html", 1);
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
        echo "<h1>Finished</h1>
    ";
    }

    public function getTemplateName()
    {
        return "Auction/getFinished.html";
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
        return new Twig_Source("", "Auction/getFinished.html", "C:\\xampp\\htdocs\\schoolProject\\Views\\Auction\\getFinished.html");
    }
}
