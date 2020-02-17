<?php

/* Admin/users.html */
class __TwigTemplate_b66d848567f7472a2768fca9a31dcbf5b2d66e2251b579ea45750a7136b3f868 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("__core/index.html", "Admin/users.html", 1);
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
        echo "<h1 class='text-center'>Admin panel</h1>
<hr>
<div class=\"row\">
  <div class=\"col-md-3\">
    <ul class=\"list-group\">
      <li class=\"list-group-item \">   <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "admin\">Category</a> </li>
        <li class=\"list-group-item\"><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "admin/users\">Users</a></li>
        <li class=\"list-group-item\"><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "admin/auctions\">Auctions</a></li>
      </ul>
  </div>
<div class=\"col-md-9\">
  <div id=\"adminarea\">
    <h3 class='text-center'>Users</h3>
    <div id=\"usersData\">
    <table  class=\"table\">
      <thead class=\"thead-dark\">
        <tr>
          <th scope=\"col\">#</th>
          <th scope=\"col\">Firstname</th>
          <th scope=\"col\">Lastname</th>
          <th scope=\"col\">Email</th>
          <th scope=\"col\">Town</th>
          <th scope=\"col\">Phone number</th>
          <th scope=\"col\">Created at</th>
          <th scope=\"col\"></th>
        </tr>
      </thead>
      <tbody id=\"categoryTableBody\">
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 32
            echo "        <tr>
        <th scope=\"row\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
            echo "</th>
        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "firstname", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "lastname", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "email", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "town", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "phonenumber", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "created_at", array()), "html", null, true);
            echo "</td>
        <td>
          <a class=\"btn btn-sm btn-primary\"  href=\"";
            // line 41
            echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
            echo "/users/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
            echo "\">Profile</a>
        <a class=\"btn btn-sm btn-danger\" href=\"#\" data-id=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
            echo "\" id=\"userBtnDelete\" >Delete</a>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "      </tbody>
    </table>

  </div>   
  </div>

</div>

</div>
    ";
    }

    public function getTemplateName()
    {
        return "Admin/users.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 48,  125 => 42,  119 => 41,  114 => 39,  110 => 38,  106 => 37,  102 => 36,  98 => 35,  94 => 34,  90 => 33,  87 => 32,  70 => 31,  46 => 10,  42 => 9,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Admin/users.html", "C:\\xampp\\htdocs\\schoolProject\\Views\\Admin\\users.html");
    }
}
