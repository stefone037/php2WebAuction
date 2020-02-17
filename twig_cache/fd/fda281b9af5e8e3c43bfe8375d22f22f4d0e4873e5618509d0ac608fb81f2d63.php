<?php

/* Main/index.html */
class __TwigTemplate_f39b11dbec508eb60a883278d9d61cd26ea7b0a02bce5031d551b4959a5762d6 extends Twig_Template
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
        return "Main/index.html";
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
        return new Twig_Source("", "Main/index.html", "C:\\xampp\\htdocs\\schoolProject\\Views\\Main\\index.html");
    }
}
