<?php

/* Main/postLogin.html */
class __TwigTemplate_ebd79149a791c5f6f0369cf2074af225309776787ab257724cf536f1e5534944 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("__core/index.html", "Main/postLogin.html", 1);
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
        echo "<div class=\"alert alert-danger\" role=\"alert\">
  ";
        // line 6
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "
</div>
    ";
    }

    public function getTemplateName()
    {
        return "Main/postLogin.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  31 => 5,  28 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Main/postLogin.html", "C:\\xampp\\htdocs\\schoolProject\\Views\\Main\\postLogin.html");
    }
}
