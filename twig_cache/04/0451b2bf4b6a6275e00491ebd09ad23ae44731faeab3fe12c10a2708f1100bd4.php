<?php

/* Users/show.html */
class __TwigTemplate_07c74900e540762aaba7d0442687f3089ddfb49aabea9a4f9bfcdbf93e75de4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("__core/index.html", "Users/show.html", 1);
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
  <div class=\"col-md-4\">
<div class=\"card\">
  <div class=\"card-header\">
      <h4 class=\"text-center\">Profile</h4>
  </div>
  <div class=\"card-body\">
    <ul class=\"list-group\">
      <li class=\"list-group-item d-flex justify-content-between\">
        <span><i class=\"fas fa-signature\"></i>  </span>
        <span>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["userprofile"] ?? null), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["userprofile"] ?? null), "lastname", array()), "html", null, true);
        echo "</span>
      </li>
      <li class=\"list-group-item d-flex justify-content-between\">
        <span><i class=\"fas fa-phone\"></i> </span>
        <span>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["userprofile"] ?? null), "phonenumber", array()), "html", null, true);
        echo "</span>
      </li>
      <li class=\"list-group-item d-flex justify-content-between\">
        <span><i class=\"fas fa-envelope-square\"></i> </span>
        <span>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["userprofile"] ?? null), "email", array()), "html", null, true);
        echo "</span>
      </li>

      <li class=\"list-group-item d-flex justify-content-between\">
        <span> <i class=\"far fa-calendar-alt\"></i> </span>
        <span>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["userprofile"] ?? null), "created_at", array()), "html", null, true);
        echo "</span>
      </li>
      <li class=\"list-group-item d-flex justify-content-between\">
        <span> <i class=\"fas fa-city\"></i> </span>
        <span>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["userprofile"] ?? null), "town", array()), "html", null, true);
        echo "</span>
      </li>
    </ul>
  </div>
</div>
  </div>
  <div class=\"col-md-8\">
    <nav>
      <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
        <a class=\"nav-item nav-link active\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#nav-home\" role=\"tab\" aria-controls=\"nav-home\" aria-selected=\"true\">Feedbacks</a>
        <a class=\"nav-item nav-link\" id=\"nav-profile-tab\" data-toggle=\"tab\" href=\"#nav-profile\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">Active auction</a>

        ";
        // line 42
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "id", array()) == ($context["id"] ?? null))) {
            // line 43
            echo "        <a class=\"nav-item nav-link\" id=\"nav-contact-tab\" data-toggle=\"tab\" href=\"#nav-contact\" role=\"tab\" aria-controls=\"nav-contact\" aria-selected=\"false\">Update profile</a>

        ";
        }
        // line 46
        echo "      </div>
    </nav>
    <div class=\"tab-content\" id=\"nav-tabContent\">
      <div class=\"tab-pane fade show active\" id=\"nav-home\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">

        ";
        // line 51
        if (($context["feedbacks"] ?? null)) {
            // line 52
            echo "        <div id=\"feedbacks\">
        ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["feedbacks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["feedback"]) {
                // line 54
                echo "          <div class=\"card\">
            <div class=\"card-header\">
            <h4 class=\"text-center\">";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["feedback"], "auction", array()), "title", array()), "html", null, true);
                echo "</h4>
            </div>
            <div class=\"card-body\">
            <p class=\"card-text\">
            ";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["feedback"], "feedback_text", array()), "html", null, true);
                echo "
            </p>   
            </div>


            <div class=\"card-footer d-flex justify-content-between \">
            <span class=\"card-text\">";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["feedback"], "created_at", array()), "html", null, true);
                echo "</span>
               <span class=\"card-text\"> ";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["feedback"], "sender", array()), "firstname", array()), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["feedback"], "sender", array()), "lastname", array()), "html", null, true);
                echo "  </span>
            </div>
          </div>
       
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feedback'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "        </div>
          ";
        } else {
            // line 74
            echo "
           <div class=\"alert alert-info\">Currently this profile is without feedback to its auctions</div>
          ";
        }
        // line 77
        echo "          <hr>

          <div class=\"card\">

            <div class=\"card-header\">
              <h3 class='text-center' >Give feedback</h3>
            </div>

          ";
        // line 85
        if (($context["endauctions"] ?? null)) {
            // line 86
            echo "    
                <div id=\"form\">
          <input type=\"hidden\" id=\"senderId\" value=\"";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "id", array()), "html", null, true);
            echo "\" >
          <input type=\"hidden\" id=\"reciverId\" value=\"";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["userprofile"] ?? null), "id", array()), "html", null, true);
            echo "\" >
    
            <div class=\"form-group\">

              <label for=\"exampleFormControlSelect2\">Select auction</label>
              <select  name=\"auctionId\" class=\"form-control\" id=\"auctionId\">
               ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["endauctions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["auction"]) {
                // line 96
                echo "              <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["auction"], "auction_id", array()), "html", null, true);
                echo "\">
              ";
                // line 97
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["auction"], "title", array()), "html", null, true);
                echo "
              </option>
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auction'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "              </select>
            </div>
            <div class=\"form-group\">
              <label for=\"exampleFormControlTextarea1\">Your impression</label>
              <textarea style='resize:none' class=\"form-control\"  id=\"impression\" rows=\"3\"></textarea>
            </div>

            <button id=\"feedbackbtn\" class=\"btn btn-primary\">Give feedback</button>
          </div>

          ";
        } else {
            // line 111
            echo "   
            <p class=\"alert alert-info\">
              There is currently no auction that you won so you can't give feedback</p>
          ";
        }
        // line 115
        echo "        </div>
      </div>
      <div class=\"tab-pane fade\" id=\"nav-profile\" role=\"tabpanel\" aria-labelledby=\"nav-profile-tab\">
        ";
        // line 118
        if ((($context["auctions"] ?? null) == true)) {
            // line 119
            echo "        <table class=\"table table-image\">
          <thead>
            <tr>
              <th scope=\"col\">Id</th>
              <th scope=\"col\">Image</th>
              <th scope=\"col\">Auction Title</th>
              <th class='text-center' scope=\"col\">End at</th>
              <th scope=\"col\">Link</th>
            </tr>
          </thead>
          <tbody>

              ";
            // line 131
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
                // line 132
                echo "            
            <tr>
            <th scope=\"row\">";
                // line 134
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                echo "</th>
              <td class=\"w-25\">
              <a href=\"";
                // line 136
                echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
                echo "auction/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["auction"], "id", array()), "html", null, true);
                echo "\">
              <img  class=\"img-fluid\"  src=\"";
                // line 137
                echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
                echo "assets/img/auction/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["auction"], "image_path", array()), "html", null, true);
                echo "\" alt=\"auction image\">
            </a>
              </td>
          <td>
              ";
                // line 141
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["auction"], "title", array()), "html", null, true);
                echo "
              </td>

          <td>";
                // line 144
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["auction"], "end_date", array()), "html", null, true);
                echo "</td>

          <td>
            <a class=\"btn btn-primary\" href=\"";
                // line 147
                echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
                echo "auction/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["auction"], "id", array()), "html", null, true);
                echo " \">Link</a>
            <a class=\"btn btn-primary\" href=\"";
                // line 148
                echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
                echo "auction/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["auction"], "id", array()), "html", null, true);
                echo "/update \">Update auction</a>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auction'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            echo "          </tbody>
        </table> 
        ";
        } else {
            // line 156
            echo "
        <h4>No active auction</h4>

         ";
        }
        // line 160
        echo "      </div>
      ";
        // line 161
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "id", array()) == ($context["id"] ?? null))) {
            // line 162
            echo "      <div class=\"tab-pane fade\" id=\"nav-contact\" role=\"tabpanel\" aria-labelledby=\"nav-contact-tab\">
        <div class=\"card\">
          <div class=\"card-header\">
            Update profile
          </div>

          <div class=\"card-body\">
            <form method=\"POST\" action=\"";
            // line 169
            echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
            echo "users/update\">
              <div class=\"form-group\">

                <input type=\"hidden\" name=\"id\" value=\"";
            // line 172
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\"/>
                <label for=\"email\">Email address</label>
                <input type=\"email\" value=\"";
            // line 174
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "email", array()), "html", null, true);
            echo "\" name=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"email\">
                <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
              </div>
           
             
              <div class=\"form-group\">
                <label for=\"firstname\">First name</label>
                <input type=\"text\" value=\"";
            // line 181
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "firstname", array()), "html", null, true);
            echo "\" name=\"firstname\" placeholder=\"Typing your first name\" class=\"form-control\" id=\"firstname\" >
              </div>
              <div class=\"form-group\">
                <label for=\"lastname\">LastName</label>
                <input type=\"text\" value=\"";
            // line 185
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "lastname", array()), "html", null, true);
            echo "\" name=\"lastname\" placeholder=\"Typing you last name\" class=\"form-control\" id=\"lastname\">
              </div>
      
              <div class=\"form-group\">
                <label for=\"phonenumber\">Phone number</label>
                <input type=\"text\" value=\"";
            // line 190
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "phonenumber", array()), "html", null, true);
            echo "\" name=\"phonenumber\" name=\"phonenumber\" class=\"form-control\" id=\"phonenumber\" placeholder=\"Format 064-yournumber\">
              </div>
      
              <div class=\"form-group\">
                <label for=\"town\">Town</label>
                <input type=\"text\" value=\"";
            // line 195
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "town", array()), "html", null, true);
            echo "\" name=\"town\" class=\"form-control\" id=\"town\" placeholder=\"Typing your live town\">
              </div>
              
              <button type=\"submit\" class=\"btn btn-primary\">Update profile</button>
      
      
      
              ";
            // line 202
            if (($context["errorMessage"] ?? null)) {
                // line 203
                echo "              <div  class=\"alert alert-danger mt-3\">
                ";
                // line 204
                echo twig_escape_filter($this->env, ($context["errorMessage"] ?? null), "html", null, true);
                echo "
              </div>
          ";
            }
            // line 207
            echo "            </form>
          </div>
        </div>

      </div>
      ";
        }
        // line 213
        echo "    </div>
  </div>
</div>
    ";
    }

    public function getTemplateName()
    {
        return "Users/show.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  423 => 213,  415 => 207,  409 => 204,  406 => 203,  404 => 202,  394 => 195,  386 => 190,  378 => 185,  371 => 181,  361 => 174,  356 => 172,  350 => 169,  341 => 162,  339 => 161,  336 => 160,  330 => 156,  325 => 153,  304 => 148,  298 => 147,  292 => 144,  286 => 141,  277 => 137,  271 => 136,  266 => 134,  262 => 132,  245 => 131,  231 => 119,  229 => 118,  224 => 115,  218 => 111,  205 => 100,  196 => 97,  191 => 96,  187 => 95,  178 => 89,  174 => 88,  170 => 86,  168 => 85,  158 => 77,  153 => 74,  149 => 72,  136 => 67,  132 => 66,  123 => 60,  116 => 56,  112 => 54,  108 => 53,  105 => 52,  103 => 51,  96 => 46,  91 => 43,  89 => 42,  74 => 30,  67 => 26,  59 => 21,  52 => 17,  43 => 13,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Users/show.html", "C:\\xampp\\htdocs\\schoolProject\\Views\\Users\\show.html");
    }
}
