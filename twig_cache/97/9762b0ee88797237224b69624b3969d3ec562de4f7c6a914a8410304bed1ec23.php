<?php

/* Users/home.html */
class __TwigTemplate_d3a354c05886333aa4ba701fc261e78518504683779f7beb65365c395051dd29 extends Twig_Template
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
  <title>Document</title>
</head>
<body>
  
  <ul>
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 12
            echo "    <li>
        ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "FirstName", array()), "html", null, true);
            echo "  <a data-id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
            echo " href=\"#\" id=\"addbtn\" >Add</a>

    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "  </ul>



  <div id=\"bookmarks\">
    Loading....
  </div>


  <script src=\"/schoolproject/assets/js/bookmarks.js\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "Users/home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 17,  38 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Users/home.html", "C:\\xampp\\htdocs\\schoolProject\\Views\\Users\\home.html");
    }
}
