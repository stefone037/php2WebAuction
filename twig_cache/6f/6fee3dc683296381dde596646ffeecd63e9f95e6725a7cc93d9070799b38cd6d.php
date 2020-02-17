<?php

/* Category/show.html */
class __TwigTemplate_48e9e5c71c6019304f429bb3a401009af2aa4155902a3996b1ee149332da1743 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("__core/index.html", "Category/show.html", 1);
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
        echo "<div class=\"container\">
   
    <div class=\"row\">
      <div class=\"col-12\">

        <div class=\"card\">
            <div class=\"card-header\">
                <h3 class=\"text-center\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["category"] ?? null), "name", array()), "html", null, true);
        echo "</h3>
            </div>

            <div class=\"card-body\">
                <table class=\"table table-image\">
                    <thead>
                      <tr>
                        <th scope=\"col\">Id</th>
                        <th scope=\"col\">Image</th>
                        <th scope=\"col\">Auction Title</th>
                        <th scope=\"col\">Author </th>
                        <th scope=\"col\">Started Price</th>
                        <th class='text-center' scope=\"col\">End at</th>
                      </tr>
                    </thead>
                    <tbody>
        
                        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["auctions"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["auction"]) {
            // line 28
            echo "                      
                      <tr>
                      <th scope=\"row\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
            echo "</th>
                        <td class=\"w-25\">
                        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
            echo "auction/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["auction"], "id", array()), "html", null, true);
            echo "\">
                        <img  style=\"max-height: 120px;\"  class=\"img-fluid\"  src=\"/schoolproject/assets/img/auction/";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["auction"], "image_path", array()), "html", null, true);
            echo "\" alt=\"auction image\">
                      </a>
                        </td>
                    <td>
                        <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
            echo "auction/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["auction"], "id", array()), "html", null, true);
            echo " \">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["auction"], "title", array()), "html", null, true);
            echo "</a>
                        </td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["auction"], "user", array()), "firstname", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["auction"], "started_price", array()), "html", null, true);
            echo " \$</td>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["auction"], "end_date", array()), "html", null, true);
            echo "</td>
                      </tr>
                    
                      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                    </tbody>
                  </table>   
            </div>
        </div>
      </div>
    </div>
  </div>
    ";
    }

    public function getTemplateName()
    {
        return "Category/show.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 45,  116 => 41,  112 => 40,  108 => 39,  99 => 37,  92 => 33,  86 => 32,  81 => 30,  77 => 28,  60 => 27,  40 => 10,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Category/show.html", "C:\\xampp\\htdocs\\schoolProject\\Views\\Category\\show.html");
    }
}
