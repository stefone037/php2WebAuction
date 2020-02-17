<?php

/* Main/activateAccount.html */
class __TwigTemplate_c4ed57779c4b335018e964d5e085188b612b4a2c3c1c1ecca61734d5ca3ee331 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("__core/index.html", "Main/activateAccount.html", 1);
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
        echo "
";
        // line 4
        if ((($context["activated"] ?? null) == "success")) {
            // line 5
            echo "<h1 class=\"text-center text-success\">Confirm registration</h1>
<div class=\"alert alert-success\" role=\"alert\">
 You successfully activated your account! Enjoy on our website!
</div>
";
        } else {
            // line 10
            echo "<h1 class=\"text-center text-danger\">Confirm registration</h1>
<div class=\"alert alert-danger\" role=\"alert\">
 Unsuccessfully activation on email, please check your email again!
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "Main/activateAccount.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 10,  36 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Main/activateAccount.html", "C:\\xampp\\htdocs\\schoolProject\\Views\\Main\\activateAccount.html");
    }
}
