<?php

/* Main/home.html */
class __TwigTemplate_7dbcadfd9f2aef9495abdd85c9eb967b4fd84d05a267858db1301f25dccdc6da extends Twig_Template
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
        // line 10
        echo twig_escape_filter($this->env, ($context["proba"] ?? null), "html", null, true);
        echo "</h1>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "Main/home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 10,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Main/home.html", "C:\\xampp\\htdocs\\schoolProject\\Views\\Main\\home.html");
    }
}
