<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* sanengineering/template/information/contact.twig */
class __TwigTemplate_11457427c33d7a3a7abec7272391da862e0ea7017af0f68192bbe66ce94a60d9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "
<div id=\"information-contact\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
 \t<div class=\"row\">
\t  <div class=\"col-sm-4\"><img src=\"http://localhost/dashboard/sanopencart/image/catalog/location/office.jpg\" width=\"200\" height=\"250\"   alt=\"SAN\" title=\"SAN\" style=\"border: 2px solid #ccc;\"></div>
\t  <div class=\"col-sm-4\"><img src=\"http://localhost/dashboard/sanopencart/image/catalog/location/office.jpg\" width=\"200\" height=\"250\"   alt=\"SAN\" title=\"SAN\" style=\"border: 2px solid #ccc;\"></div>
\t  <div class=\"col-sm-4\"><div style=\"border: 2px solid #ccc;\"><iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3878.6940596154327!2d100.71513086482831!3d13.554349990475451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d5b55661f1099%3A0xbe92c7d5b21c674b!2sSAN%20Engineering%20%26%20Supply%20Co.%2C%20Ltd.!5e0!3m2!1sth!2sth!4v1647321033677!5m2!1sth!2sth\" width=\"350\" height=\"250\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe></div></div>
\t</div>
  <div class=\"row\">";
        // line 13
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 14
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 16
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 20
            echo "    ";
        }
        // line 21
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 22
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <h3>";
        // line 23
        echo ($context["text_location"] ?? null);
        echo "</h3>
      <div class=\"panel panel-default\">
        <div class=\"panel-body\">
          <div class=\"row\">
            ";
        // line 27
        if (($context["image"] ?? null)) {
            // line 28
            echo "            <div class=\"col-sm-3\"><img src=\"";
            echo ($context["image"] ?? null);
            echo "\" alt=\"";
            echo ($context["store"] ?? null);
            echo "\" title=\"";
            echo ($context["store"] ?? null);
            echo "\" class=\"img-thumbnail\" /></div>
            ";
        }
        // line 30
        echo "            <div class=\"col-sm-3\"><strong>";
        echo ($context["store"] ?? null);
        echo "</strong><br />
              <address>
              ";
        // line 32
        echo ($context["address"] ?? null);
        echo "
              </address>
              ";
        // line 34
        if (($context["geocode"] ?? null)) {
            // line 35
            echo "              <a href=\"https://maps.google.com/maps?q=";
            echo twig_urlencode_filter(($context["geocode"] ?? null));
            echo "&hl=";
            echo ($context["geocode_hl"] ?? null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
            echo ($context["button_map"] ?? null);
            echo "</a>
              ";
        }
        // line 37
        echo "            </div>
            <div class=\"col-sm-3\"><strong>";
        // line 38
        echo ($context["text_telephone"] ?? null);
        echo "</strong><br>
              ";
        // line 39
        echo ($context["telephone"] ?? null);
        echo "<br />
              <br />
              ";
        // line 41
        if (($context["fax"] ?? null)) {
            // line 42
            echo "              <strong>";
            echo ($context["text_fax"] ?? null);
            echo "</strong><br>
              ";
            // line 43
            echo ($context["fax"] ?? null);
            echo "
              ";
        }
        // line 45
        echo "            </div>
            <div class=\"col-sm-3\">
              ";
        // line 47
        if (($context["open"] ?? null)) {
            // line 48
            echo "              <strong>";
            echo ($context["text_open"] ?? null);
            echo "</strong><br />
              ";
            // line 49
            echo ($context["open"] ?? null);
            echo "<br />
              <br />
              ";
        }
        // line 52
        echo "              ";
        if (($context["comment"] ?? null)) {
            // line 53
            echo "              <strong>";
            echo ($context["text_comment"] ?? null);
            echo "</strong><br />
              ";
            // line 54
            echo ($context["comment"] ?? null);
            echo "
              ";
        }
        // line 56
        echo "            </div>
          </div>
        </div>
      </div>
      ";
        // line 60
        if (($context["locations"] ?? null)) {
            // line 61
            echo "      <h3>";
            echo ($context["text_store"] ?? null);
            echo "</h3>
      <div class=\"panel-group\" id=\"accordion\">
        ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 64
                echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\"><a href=\"#collapse-location";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 66);
                echo "\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 66);
                echo " <i class=\"fa fa-caret-down\"></i></a></h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-location";
                // line 68
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 68);
                echo "\">
            <div class=\"panel-body\">
              <div class=\"row\">
                ";
                // line 71
                if (twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 71)) {
                    // line 72
                    echo "                <div class=\"col-sm-3\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 72);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 72);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 72);
                    echo "\" class=\"img-thumbnail\" /></div>
                ";
                }
                // line 74
                echo "                <div class=\"col-sm-3\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 74);
                echo "</strong><br/>
                  <address>
                  ";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 76);
                echo "
                  </address>
                  ";
                // line 78
                if (twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 78)) {
                    // line 79
                    echo "                  <a href=\"https://maps.google.com/maps?q=";
                    echo twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 79));
                    echo "&hl=";
                    echo ($context["geocode_hl"] ?? null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
                    echo ($context["button_map"] ?? null);
                    echo "</a>
                  ";
                }
                // line 81
                echo "                </div>
                <div class=\"col-sm-3\"> <strong>";
                // line 82
                echo ($context["text_telephone"] ?? null);
                echo "</strong><br/>
                  ";
                // line 83
                echo twig_get_attribute($this->env, $this->source, $context["location"], "telephone", [], "any", false, false, false, 83);
                echo "<br/>
                  <br/>
                  ";
                // line 85
                if (twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 85)) {
                    // line 86
                    echo "                  <strong>";
                    echo ($context["text_fax"] ?? null);
                    echo "</strong><br/>
                  ";
                    // line 87
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 87);
                    echo "
                  ";
                }
                // line 89
                echo "                </div>
                <div class=\"col-sm-3\">
                  ";
                // line 91
                if (twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 91)) {
                    // line 92
                    echo "                  <strong>";
                    echo ($context["text_open"] ?? null);
                    echo "</strong><br/>
                  ";
                    // line 93
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 93);
                    echo "<br/>
                  <br/>
                  ";
                }
                // line 96
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 96)) {
                    // line 97
                    echo "                  <strong>";
                    echo ($context["text_comment"] ?? null);
                    echo "</strong><br/>
                  ";
                    // line 98
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 98);
                    echo "
                  ";
                }
                // line 100
                echo "                </div>
              </div>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "      </div>
      ";
        }
        // line 108
        echo "      <form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>";
        // line 110
        echo ($context["text_contact"] ?? null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 112
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 114
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 115
        if (($context["error_name"] ?? null)) {
            // line 116
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 118
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 121
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 123
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 124
        if (($context["error_email"] ?? null)) {
            // line 125
            echo "              <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
              ";
        }
        // line 127
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-enquiry\">";
        // line 130
        echo ($context["entry_enquiry"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">";
        // line 132
        echo ($context["enquiry"] ?? null);
        echo "</textarea>
              ";
        // line 133
        if (($context["error_enquiry"] ?? null)) {
            // line 134
            echo "              <div class=\"text-danger\">";
            echo ($context["error_enquiry"] ?? null);
            echo "</div>
              ";
        }
        // line 136
        echo "            </div>
          </div>
          ";
        // line 138
        echo ($context["captcha"] ?? null);
        echo "
        </fieldset>
        <div class=\"buttons\">
          <div class=\"pull-right\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 142
        echo ($context["button_submit"] ?? null);
        echo "\" />
          </div>
        </div>
      </form>
      ";
        // line 146
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 147
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 149
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "sanengineering/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  435 => 149,  430 => 147,  426 => 146,  419 => 142,  412 => 138,  408 => 136,  402 => 134,  400 => 133,  396 => 132,  391 => 130,  386 => 127,  380 => 125,  378 => 124,  374 => 123,  369 => 121,  364 => 118,  358 => 116,  356 => 115,  352 => 114,  347 => 112,  342 => 110,  336 => 108,  332 => 106,  321 => 100,  316 => 98,  311 => 97,  308 => 96,  302 => 93,  297 => 92,  295 => 91,  291 => 89,  286 => 87,  281 => 86,  279 => 85,  274 => 83,  270 => 82,  267 => 81,  257 => 79,  255 => 78,  250 => 76,  244 => 74,  234 => 72,  232 => 71,  226 => 68,  219 => 66,  215 => 64,  211 => 63,  205 => 61,  203 => 60,  197 => 56,  192 => 54,  187 => 53,  184 => 52,  178 => 49,  173 => 48,  171 => 47,  167 => 45,  162 => 43,  157 => 42,  155 => 41,  150 => 39,  146 => 38,  143 => 37,  133 => 35,  131 => 34,  126 => 32,  120 => 30,  110 => 28,  108 => 27,  101 => 23,  97 => 22,  90 => 21,  87 => 20,  84 => 19,  81 => 18,  78 => 17,  75 => 16,  72 => 15,  70 => 14,  66 => 13,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sanengineering/template/information/contact.twig", "");
    }
}
