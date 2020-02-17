<?php

/* Auction/show.html */
class __TwigTemplate_d3da34e4ca8340498f8ac00dfd8f4e731dbb72a63f0fe79fc19b46b2654351c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("__core/index.html", "Auction/show.html", 1);
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
        echo "

<div class=\"row\">




 
    <div class=\"card offset-md-2 col-md-8\">


      <div class=\"card-header\">
        <h3 class=\"text-center \">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["auction"] ?? null), "title", array()), "html", null, true);
        echo "</h3>
      </div>

      <div class=\"card-body\">

      
      <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">


           ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["auction"] ?? null), "images", array()));
        foreach ($context['_seq'] as $context["key"] => $context["image"]) {
            // line 28
            echo "        
        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"";
            // line 29
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"  class= \"";
            echo ((($context["key"] == 0)) ? ("active") : (""));
            echo "\" class=\"active\"></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "

        
        </ol>
        <div class=\"carousel-inner\">
          ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["auction"] ?? null), "images", array()));
        foreach ($context['_seq'] as $context["key"] => $context["image"]) {
            // line 37
            echo "          <div class=\"carousel-item    ";
            echo ((($context["key"] == 0)) ? ("active") : (""));
            echo "\" >
          <img src=\"";
            // line 38
            echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
            echo "assets/img/auction/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "image_path", array()), "html", null, true);
            echo "\" class=\"d-block w-100\" alt=\"...\">
          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "


        
        
        </div>
        <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
          <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
          <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Next</span>
        </a>
      </div>


   
   

      <ul class=\"list-group\">
        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
          User
        <span >";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["userAuction"] ?? null), "firstname", array()), "html", null, true);
        echo "</span>
        </li>
        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
         Town
          <span> ";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["userAuction"] ?? null), "town", array()), "html", null, true);
        echo " </span>
        </li>
      
        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
          Start at:
        <span>";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["auction"] ?? null), "started_date", array()), "html", null, true);
        echo "</span>
      </li>


      <li class=\"list-group-item d-flex justify-content-between align-items-center\">
       End at: 
      <span>";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["auction"] ?? null), "end_date", array()), "html", null, true);
        echo "</span>
    </li>
      <li class=\"list-group-item d-flex justify-content-between align-items-center\">
          Current price: 
    <span id=\"startedPrice\" >";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["auction"] ?? null), "started_price", array()), "html", null, true);
        echo " \$</span>
    </li>
      </ul>



<p class=\"card-text p-2\">
  ";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["auction"] ?? null), "description", array()), "html", null, true);
        echo "
</p>
    </div>

      <div class=\"card-footer\">


        ";
        // line 97
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["auction"] ?? null), "user_id", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "id", array()))) {
            // line 98
            echo "      
            <h4>You cannot give offer for your auction! Thank you :)</h4>

     

        ";
        } else {
            // line 104
            echo "        <form class=\"form-inline\" method=\"POST\" action=\"";
            echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
            echo "auction/addOffer\">
          <div class=\"form-group\">
            <div class=\"input-group mr-2\">
              <input type=\"number\" required name=\"auctionOffer\" placeholder=\"Typing your offer!\" id=\"auctionOffer\">
            <input type=\"hidden\" id=\"auctionId\" value=\"";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["auction"] ?? null), "id", array()), "html", null, true);
            echo "\" />
              <div class=\"input-group-append\">
                <button type=\"button\" id=\"submitOfferBtn\" class=\"btn btn-primary btn-sm\">Give offer</button>
              </div>
            </div>
            <small id=\"passwordHelpInline\" class=\"text-muted\">
             The offer must be at least 5\$ more than current price!
            </small>
          </div>
        </form>
       
        ";
        }
        // line 120
        echo "      </div>
    </div>



</div>


    ";
    }

    public function getTemplateName()
    {
        return "Auction/show.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 120,  196 => 108,  188 => 104,  180 => 98,  178 => 97,  168 => 90,  158 => 83,  151 => 79,  142 => 73,  134 => 68,  127 => 64,  102 => 41,  91 => 38,  86 => 37,  82 => 36,  75 => 31,  65 => 29,  62 => 28,  58 => 27,  45 => 17,  31 => 5,  28 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Auction/show.html", "C:\\xampp\\htdocs\\schoolProject\\Views\\Auction\\show.html");
    }
}
