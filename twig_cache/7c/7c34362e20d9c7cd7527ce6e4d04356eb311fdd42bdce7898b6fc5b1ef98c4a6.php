<?php

/* Main/postRegister.html */
class __TwigTemplate_7ab497b56ccc656476ac5a49ad3d632bdbd45598735977a6ed5363e6db470617 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("__core/index.html", "Main/postRegister.html", 1);
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<h1 class=\"text-center text-success\">Confirmation email sent</h1>
<div class=\"alert alert-success\" role=\"alert\">
 Please check your email and confirm your email address.
</div>
";
    }

    public function getTemplateName()
    {
        return "Main/postRegister.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Main/postRegister.html", "C:\\xampp\\htdocs\\schoolProject\\Views\\Main\\postRegister.html");
    }
}
