<?php

/* __core/index.html */
class __TwigTemplate_a83b5e5472d1f05b5167bd6af885a027dc2943578be5107c92f694760a8134e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
  <title>Web Auction</title>
  <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "assets/css/style.css\">
  <script src=\"https://kit.fontawesome.com/0b523cd837.js\" crossorigin=\"anonymous\"></script>
<link rel='shortcut icon' type='image/x-icon' href='";
        // line 10
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "assets/img/logo_vgz_icon.ico' />
</head>
<body>

  <header>
    <div class=\"container\">
    <div class=\"row\">
        <div class=\"offset-md-1 col-md-5\">
         
            <a class=\"navbar-brand\">
              <img id=\"logo\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "assets/img/logo.png\" />
            </a>
            
         
        </div>
        <div class=\"col-md-6\">
            <div class=\"socialIcons\">
              <a href=\"#\"><i class=\"fab fa-twitter fa-lg\"></i> </a>
              <a href=\"#\"><i class=\"fab fa-linkedin-in fa-lg\"></i>   </a>
              <a href=\"#\"><i class=\"fab fa-instagram fa-lg\"></i> </a>
              <a href=\"#\"><i class=\"fab fa-facebook-square fa-lg\"></i></a>
            </div>
        </div>
    </div>

    <div class=\"row\">
      <div class=\"col-md-12\">
      <nav class=\"nav nav-pills nav-fill\">
        <a class=\"nav-item nav-link\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "category/\"> <i class=\"fas fa-home\"></i> Home</a>
        <a class=\"nav-item nav-link\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "users/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "id", array()), "html", null, true);
        echo "\"><i class=\"fas fa-user\"></i>Profile</a>
        <a class=\"nav-item nav-link\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "auction/finished\"><i class=\"fas fa-medal\"></i>My win auctions</a>
      <a class=\"nav-item nav-link\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "auction/create/\"><i class=\"fas fa-plus\"></i>Add auction</a>
        <!-- <a class=\"nav-item nav-link\" href=\"#\"><i class=\"fas fa-bookmark\"></i>Bookmarks</a> -->
          ";
        // line 43
        if ((($context["user"] ?? null) == false)) {
            echo " 
        <a class=\"nav-item nav-link\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
            echo "users/login/\"> <i class=\"fas fa-sign-in-alt\"></i> Login</a>
        ";
        }
        // line 46
        echo "        ";
        if (($context["user"] ?? null)) {
            // line 47
            echo "        <a class=\"nav-item nav-link\" id=\"logout\" href=\"#\"><i class=\"fas fa-sign-out-alt\"></i>Logout</a>
        <form method=\"POST\" action=\"";
            // line 48
            echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
            echo "users/logout\">
          <button type=\"submit\" id='logoutSubmit'>Logout</button>
        </form>
          ";
        }
        // line 52
        echo "      

        ";
        // line 54
        if ((($context["user"] ?? null) == false)) {
            // line 55
            echo "        <a class=\"nav-item nav-link\" href=\"";
            echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
            echo "users/register/\">
          
          <i class=\"fas fa-user-plus\"></i>
          Register</a>
          ";
        }
        // line 60
        echo "


";
        // line 63
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "role", array()) == "admin")) {
            // line 64
            echo "          <a class=\"nav-item nav-link btn btn-danger\" href=\"";
            echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
            echo "admin/\"> <i class=\"fas fa-cogs\"></i> Admin panel</a>

          ";
        }
        // line 67
        echo "      </nav>
    </div>
    </div>
  </div>
  </header>

  <div id=\"content\" class=\"container\">
 


    ";
        // line 77
        $this->displayBlock('content', $context, $blocks);
        // line 78
        echo "

  </div>






  <footer id=\"footer\">
    <div class=\"container\">
      <h5>Copyright 2020  <a href=\"https://www.linkedin.com/in/stefan-aksentijevic-73a579196/\"> <i class=\"fab fa-linkedin\"></i> Stefan Aksentijevic</a></h5>
    </div>
  </footer>


  <script> const PATH = \"";
        // line 94
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "\"; </script>
  <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
  <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>


  <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "assets/js/app.js\" ></script>
  <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "assets/js/admin.js\" ></script>
</body>
</html>";
    }

    // line 77
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "__core/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 77,  183 => 101,  179 => 100,  170 => 94,  152 => 78,  150 => 77,  138 => 67,  131 => 64,  129 => 63,  124 => 60,  115 => 55,  113 => 54,  109 => 52,  102 => 48,  99 => 47,  96 => 46,  91 => 44,  87 => 43,  82 => 41,  78 => 40,  72 => 39,  68 => 38,  47 => 20,  34 => 10,  29 => 8,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__core/index.html", "C:\\xampp\\htdocs\\schoolProject\\Views\\__core\\index.html");
    }
}
