<?php

/* Main/getRegister.html */
class __TwigTemplate_9d44c48c8dc5909516b7000b088b736d7259151858c6050de7f3d2525c2418b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("__core/index.html", "Main/getRegister.html", 1);
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
        echo "<div class=\"row\">

<div class=\"offset-md-2 col-md-8\">

  <div class=\"card\">
    <div class=\"card-header\">
      Register
    </div>

    <div class=\"card-body\">
      <form method=\"POST\" action=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "users/register\">
        <div class=\"form-group\">
          <label for=\"email\">Email address</label>
          <input type=\"email\" name=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"email\">
          <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
        </div>
        <div class=\"form-group\">
          <label for=\"exampleInputEmail1\">Password</label>
          <input type=\"password\" placeholder=\"Typing your password\"  name=\"password\" class=\"form-control\" id=\"password\" >
      
        </div>
        <div class=\"form-group\">
          <label for=\"confirmPassword\">Confirm password</label>
          <input type=\"password\" placeholder=\"Confirm your password!\"  name=\"confirmPassword\" class=\"form-control\" id=\"confirmPassword\" />
        
        </div>
        <div class=\"form-group\">
          <label for=\"firstname\">First name</label>
          <input type=\"text\" name=\"firstName\" placeholder=\"Typing your first name\" class=\"form-control\" id=\"firstname\" >
        </div>
        <div class=\"form-group\">
          <label for=\"lastname\">LastName</label>
          <input type=\"text\" name=\"lastName\" placeholder=\"Typing you last name\" class=\"form-control\" id=\"lastname\">
        </div>

        <div class=\"form-group\">
          <label for=\"phonenumber\">Phone number</label>
          <input type=\"text\" name=\"phonenumber\" name=\"phonenumber\" class=\"form-control\" id=\"phonenumber\" placeholder=\"Format 064-yournumber\">
        </div>

        <div class=\"form-group\">
          <label for=\"town\">Town</label>
          <input type=\"text\" name=\"town\" class=\"form-control\" id=\"town\" placeholder=\"Typing your live town\">
        </div>
        
        <button type=\"submit\" class=\"btn btn-primary\">Register</button>



        ";
        // line 52
        if (($context["errorMessage"] ?? null)) {
            // line 53
            echo "        <div  class=\"alert alert-danger mt-3\">
          ";
            // line 54
            echo twig_escape_filter($this->env, ($context["errorMessage"] ?? null), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 57
        echo "      </form>
    </div>
  </div>
   
  </div>
</div>
    ";
    }

    public function getTemplateName()
    {
        return "Main/getRegister.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 57,  90 => 54,  87 => 53,  85 => 52,  43 => 13,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Main/getRegister.html", "C:\\xampp\\htdocs\\schoolProject\\Views\\Main\\getRegister.html");
    }
}
