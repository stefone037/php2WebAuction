<?php

/* Admin/categories.html */
class __TwigTemplate_8512c3e617481af596076592d10f7ee935025bc866a6854d0ed4e597eb20e3d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("__core/index.html", "Admin/categories.html", 1);
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
        echo "<h1 class='text-center'>Admin panel</h1>
<hr>

<div class=\"row\">
  <div class=\"col-md-4\">
    <ul class=\"list-group\">
      <li class=\"list-group-item \">   <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "admin\">Category</a> </li>
        <li class=\"list-group-item\"><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "admin/users\">Users</a></li>
        <li class=\"list-group-item\"><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "admin/auctions\">Auctions</a></li>
      </ul>
  </div>

<div class=\"col-md-8\">

  <div id=\"adminarea\">
    <h4 class='text-center'>Category</h4>
    <div id=\"categoryData\">
    <table  class=\"table\">
      <thead class=\"thead-dark\">
        <tr>
          <th scope=\"col\">#</th>
          <th scope=\"col\">Name</th>
          <th scope=\"col\" ></th>
        </tr>
      </thead>
      <tbody id=\"categoryTableBody\">
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 32
            echo "        <tr>
        <th scope=\"row\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
            echo "</th>
        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array()), "html", null, true);
            echo "</td>
        <td>
          <a class=\"btn btn-primary\"  data-id=\"";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array()), "html", null, true);
            echo "\" id=\"categoryBtnUpdate\" href=\"#\">Update</a>
        <a class=\"btn btn-danger\" href=\"#\" data-id=\"";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array()), "html", null, true);
            echo "\" id=\"categoryBtnDelete\" >Delete</a>
        </td>

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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "      </tbody>
    </table>

  </div>
        <div class=\"card\" id=\"addCategoryForm\">
          <div id=\"formCategoryHeader\" class=\"card-header\">
            Add category
          </div>

          <div class=\"card-body\">
            <form id=\"categoryForm\" >
              <div class=\"form-group\">
                <label for=\"name\">Name</label>
                <input type=\"text\" class=\"form-control\" value='' id=\"categoryName\" placeholder=\"Enter category name\">
              
              </div>
              <div class=\"card-footer\">
                <a href=\"#\" id=\"addCategoryBtn\" class=\"btn btn-primary\">Add category</a>
              </div>
            
            </form>
          </div>

        
        </div>
   
  </div>

</div>

</div>
    ";
    }

    public function getTemplateName()
    {
        return "Admin/categories.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 43,  101 => 37,  97 => 36,  92 => 34,  88 => 33,  85 => 32,  68 => 31,  47 => 13,  43 => 12,  39 => 11,  31 => 5,  28 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Admin/categories.html", "C:\\xampp\\htdocs\\schoolProject\\Views\\Admin\\categories.html");
    }
}
