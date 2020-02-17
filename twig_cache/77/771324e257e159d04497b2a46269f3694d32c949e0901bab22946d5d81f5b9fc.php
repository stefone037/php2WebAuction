<?php

/* Auction/update.html */
class __TwigTemplate_9041e3cdb9896c48900983ae128b9284efea2a3c31d4ea1ec05d47436d8a076b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("__core/index.html", "Auction/update.html", 1);
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
        echo "<div class=\"offset-md-2 col-md-8\">


";
        // line 8
        if (($context["successMsg"] ?? null)) {
            // line 9
            echo "<div class=\"alert alert-success\" role=\"alert\">
  ";
            // line 10
            echo twig_escape_filter($this->env, ($context["successMsg"] ?? null), "html", null, true);
            echo "
</div>

";
        }
        // line 14
        echo "
  <div class=\"card\">
      <div class=\"card-header\">
          <h5 class=\"text-primary text-center\">Update auction</h5>
      </div>
      <div class=\"card-body\">
      <form method=\"POST\" action=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "auction/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["auction"] ?? null), "id", array()), "html", null, true);
        echo "/update\" enctype=\"multipart/form-data\">
<div class=\"form-group\">
<label for=\"title\">Title</label>
<input type=\"text\" name=\"title\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["auction"] ?? null), "title", array()), "html", null, true);
        echo "\" required class=\"form-control\" id=\"title\" placeholder=\"Enter title of auction\">
</div>

<div class=\"form-group\">
  <label for=\"description\">Description</label>
  <textarea id=\"description\" required name=\"description\" class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["auction"] ?? null), "description", array()), "html", null, true);
        echo "</textarea>
  </div>

<div class=\"form-group\">
<label for=\"category\">Select category</label>
<select class=\"form-control\"  name=\"category\" id=\"category\">


";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 37
            echo "
<option   ";
            // line 38
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["auction"] ?? null), "category_id", array()))) {
                echo "  selected  ";
            }
            echo "  value='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array()), "html", null, true);
            echo "</option>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</select>
</div>







</div>
  <div class=\"card-footer\">
    <button type=\"submit\" class=\"btn btn-lg btn-primary\">Update auction</button>
  </div>




  ";
        // line 58
        if (($context["errorMsg"] ?? null)) {
            // line 59
            echo "  <div class=\"invalid-feedback\">
   ";
            // line 60
            echo twig_escape_filter($this->env, ($context["errorMsg"] ?? null), "html", null, true);
            echo "
  </div>

  ";
        }
        // line 64
        echo "</form>
    



     
  </div>
</div>
    ";
    }

    public function getTemplateName()
    {
        return "Auction/update.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 64,  129 => 60,  126 => 59,  124 => 58,  105 => 41,  90 => 38,  87 => 37,  83 => 36,  72 => 28,  64 => 23,  56 => 20,  48 => 14,  41 => 10,  38 => 9,  36 => 8,  31 => 5,  28 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Auction/update.html", "C:\\xampp\\htdocs\\schoolProject\\Views\\Auction\\update.html");
    }
}
