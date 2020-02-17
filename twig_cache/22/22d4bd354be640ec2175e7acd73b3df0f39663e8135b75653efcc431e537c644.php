<?php

/* Auction/create.html */
class __TwigTemplate_4e5e9206c273b6808f88f39207f9dee239dcd33cfaaeb8f019eac75ae01e9112 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("__core/index.html", "Auction/create.html", 1);
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
          <h5 class=\"text-primary text-center\">Add new auction</h5>
      </div>
      <div class=\"card-body\">
          <form method=\"POST\" action=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "auction/store/\" enctype=\"multipart/form-data\">
<div class=\"form-group\">
<label for=\"title\">Title</label>
<input type=\"text\" name=\"title\" class=\"form-control\" id=\"title\" placeholder=\"Enter title of auction\">
</div>

<div class=\"form-group\">
  <label for=\"description\">Description</label>
  <textarea id=\"description\" name=\"description\" class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\"></textarea>
  </div>

<div class=\"form-group\">
<label for=\"category\">Select category</label>
<select class=\"form-control\" name=\"category\" id=\"category\">


";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 37
            echo "
<option value='";
            // line 38
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


<div class=\"form-group\">
  <label for=\"started_price\">Started price</label>
  <input type=\"number\" name=\"started_price\" class=\"form-control\" id=\"started_price\" placeholder=\"Enter started_price\">
  </div>


  <div class=\"custom-file\">
    <input type=\"file\" name=\"imageFiles[]\" multiple class=\"custom-file-input\" id=\"validatedCustomFile\" required>
    <label class=\"custom-file-label\" for=\"validatedCustomFile\">Choose a image...</label>
  </div>


  <div class=\"form-group\">
    <label for=\"example-datetime-local-input\" class=\"col-form-label\">End date of auction</label>
      <input class=\"form-control\" id=\"end_date\" type=\"datetime-local\" name=\"end_date\">
  </div>
</div>
  <div class=\"card-footer\">
    <button type=\"submit\" class=\"btn btn-lg btn-primary\">Add auction</button>
  </div>




  ";
        // line 69
        if (($context["errorMsg"] ?? null)) {
            // line 70
            echo "  <div class=\"invalid-feedback\">
   ";
            // line 71
            echo twig_escape_filter($this->env, ($context["errorMsg"] ?? null), "html", null, true);
            echo "
  </div>

  ";
        }
        // line 75
        echo "</form>
    



     
  </div>
</div>
    ";
    }

    public function getTemplateName()
    {
        return "Auction/create.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 75,  128 => 71,  125 => 70,  123 => 69,  93 => 41,  82 => 38,  79 => 37,  75 => 36,  56 => 20,  48 => 14,  41 => 10,  38 => 9,  36 => 8,  31 => 5,  28 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Auction/create.html", "C:\\xampp\\htdocs\\schoolProject\\Views\\Auction\\create.html");
    }
}
