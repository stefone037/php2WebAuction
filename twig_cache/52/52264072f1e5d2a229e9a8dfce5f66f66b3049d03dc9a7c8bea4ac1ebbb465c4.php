<?php

/* Main/getLogin.html */
class __TwigTemplate_4418adfa53368ed675388c5374e9cb2afe0964fc1e70f94830d635c01119dfac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("__core/index.html", "Main/getLogin.html", 1);
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
        echo "<div class=\"row\">

<div class=\"offset-md-2 col-md-8\">

  <div class=\"card\">
    <div class=\"card-header\">
      Login
    </div>

    <div class=\"card-body\">
      <form method=\"POST\" action=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "users/login\">
        <div class=\"form-group\">
          <label for=\"exampleInputEmail1\">Email address</label>
          <input type=\"email\" name=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
          <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
        </div>
        <div class=\"form-group\">
          <label for=\"exampleInputEmail1\">Password</label>
          <input type=\"password\"  name=\"password\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
          <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
        </div>
        
        
        <button type=\"submit\" class=\"btn btn-primary\">Login</button>


        ";
        // line 31
        if (($context["errorMessage"] ?? null)) {
            // line 32
            echo "        <div  class=\"alert alert-danger mt-3\">
          ";
            // line 33
            echo twig_escape_filter($this->env, ($context["errorMessage"] ?? null), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 36
        echo "      </form>
    </div>
  </div>
   
  </div>
</div>
    ";
    }

    public function getTemplateName()
    {
        return "Main/getLogin.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 36,  67 => 33,  64 => 32,  62 => 31,  43 => 15,  31 => 5,  28 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Main/getLogin.html", "C:\\xampp\\htdocs\\schoolProject\\Views\\Main\\getLogin.html");
    }
}
