<?php

/* Category/index.html */
class __TwigTemplate_c4ca21d18baee7564758ed5d4a12399e55d4105e970a957651c48e9e29d737fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("__core/index.html", "Category/index.html", 1);
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
<div class=\"form-row\">
  <div class=\"col-md-4 mb-3\">
  
    <select  class=\"form-control\" id=\"categoryId\">

      <option value=\"0\">Select category</option>
      ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 13
            echo "      <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array()), "html", null, true);
            echo "</option>
    
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </select>
 
  </div>
  <div class=\"col-md-3 mb-3\">
    <input type=\"number\" class=\"form-control\" id=\"priceMin\" placeholder=\"Price min\" required>
    
  </div>
  <div class=\"col-md-3 mb-3\">
    <input type=\"number\" class=\"form-control\" id=\"priceMax\" placeholder=\"Price max\" >
  </div>

<div class=\"col-md-2\">
  <select  id=\"order\" class=\"form-control\" >
    <option value=\"ASC\">Expensive</option>
    <option value=\"DESC\">Cheap</option>
  </select>

</div>
</div>

<div class=\"row\">
  <div class=\"input-group mb-3\">
  
    <input type=\"text\" class=\"form-control\" placeholder=\"Typing to search..\" aria-label=\"Recipient's username\" id=\"searchWord\" aria-describedby=\"button-addon2\">
    <div class=\"input-group-append\">
      <button class=\"btn  btn-primary\" type=\"button\" id=\"searchAuctionsBtn\">Search</button>
    </div>
  </div>

</div>
<div id=\"maincontent\">
<div class=\"row d-flex justify-content-between\">
  ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 49
            echo "<div class=\"card col-md-5 mb-4\" >
    <div class=\"card-header\">
    <h3 class=\"text-center\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array()), "html", null, true);
            echo "</h3>
    </div>
    <div class=\"card-body\">
      <ul class=\"list-group\">
        ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "auctions", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["auction"]) {
                // line 56
                echo "      <li class=\"list-group-item\"> <a href=\"";
                echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
                echo "/auction/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["auction"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["auction"], "title", array()), "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auction'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "      </ul>
    </div>
 
</div>

 
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "</div>

</div>
    ";
    }

    public function getTemplateName()
    {
        return "Category/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 65,  122 => 58,  109 => 56,  105 => 55,  98 => 51,  94 => 49,  90 => 48,  56 => 16,  44 => 13,  40 => 12,  31 => 5,  28 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Category/index.html", "C:\\xampp\\htdocs\\schoolProject\\Views\\Category\\index.html");
    }
}
