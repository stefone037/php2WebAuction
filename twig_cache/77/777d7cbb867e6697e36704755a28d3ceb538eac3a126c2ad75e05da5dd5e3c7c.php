<?php

/* Category/home.html */
class __TwigTemplate_45d8f79e06f5b3e63015fc6cc67db6e28aa1e760e7443c876560e6e78b67bd3d extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
  <title>Document</title>
</head>
<body>
  
  <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["brojac"] ?? null), "html", null, true);
        echo "</h1>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "Category/home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 11,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Category/home.html", "C:\\xampp\\htdocs\\schoolProject\\Views\\Category\\home.html");
    }
}
