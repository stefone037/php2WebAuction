<?php

/* Auction/getWinAuctionByLoggUser.html */
class __TwigTemplate_efd325b089df31ec6614e001367e43763e1f881ad98a702d494b31a38a775faf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("__core/index.html", "Auction/getWinAuctionByLoggUser.html", 1);
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
        echo "<div class=\"card\">
    <div class=\"card-header\">
        <h3 class=\"text-center\">My won auctions</h3>
    </div>

    <div class=\"card-body\">

        ";
        // line 12
        if (($context["wonAuctions"] ?? null)) {
            // line 13
            echo "        <table class=\"table table-image\">
            <thead>
              <tr>
                <th scope=\"col\">Id</th>
                <th scope=\"col\">Image</th>
                <th scope=\"col\">Auction Title</th>
                <th scope=\"col\">Author name </th>
                <th scope=\"col\">Author town </th>
                <th scope=\"col\">Author phone number </th>
                <th scope=\"col\">Author email </th>
                <th scope=\"col\">Price</th>
              </tr>
            </thead>
            <tbody>



                ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["wonAuctions"] ?? null));
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
                // line 31
                echo "              
              <tr>
              <th scope=\"row\">";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                echo "</th>
                <td class=\"w-25\">
                <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
                echo "auction/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["auction"], "id", array()), "html", null, true);
                echo "\">
                <img  class=\"img-fluid\"  src=\"";
                // line 36
                echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
                echo "assets/img/auction/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["auction"], "image_path", array()), "html", null, true);
                echo "\" alt=\"auction image\">
              </a>
                </td>
            <td>
                ";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["auction"], "title", array()), "html", null, true);
                echo "
                </td>
            <td><a href=\"";
                // line 42
                echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
                echo "users/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["auction"], "user_id", array()), "html", null, true);
                echo "\">
                ";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["auction"], "owner", array()), "firstname", array()), "html", null, true);
                echo "</a> </td>
                <td>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["auction"], "owner", array()), "town", array()), "html", null, true);
                echo " </td>
            <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["auction"], "owner", array()), "phonenumber", array()), "html", null, true);
                echo "</td>
            
            <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["auction"], "owner", array()), "email", array()), "html", null, true);
                echo "</td>

            <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["auction"], "price", array()), "html", null, true);
                echo " \$</td>
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
            // line 53
            echo "            </tbody>
          </table>   

          ";
        } else {
            // line 57
            echo "          <h1 class=\"text-center\">You current don't have won auctions!</h1> 
          ";
        }
        // line 59
        echo "    </div>
</div>
    ";
    }

    public function getTemplateName()
    {
        return "Auction/getWinAuctionByLoggUser.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 59,  155 => 57,  149 => 53,  131 => 49,  126 => 47,  121 => 45,  117 => 44,  113 => 43,  107 => 42,  102 => 40,  93 => 36,  87 => 35,  82 => 33,  78 => 31,  61 => 30,  42 => 13,  40 => 12,  31 => 5,  28 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Auction/getWinAuctionByLoggUser.html", "C:\\xampp\\htdocs\\schoolProject\\Views\\Auction\\getWinAuctionByLoggUser.html");
    }
}
