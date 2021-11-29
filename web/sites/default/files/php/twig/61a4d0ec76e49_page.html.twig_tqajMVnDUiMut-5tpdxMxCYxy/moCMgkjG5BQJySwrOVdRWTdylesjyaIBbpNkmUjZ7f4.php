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

/* themes/custom/exam/templates/system/page.html.twig */
class __TwigTemplate_803780aed3bb55c9efb503636bbf4b7b0fcddbde1f540d1d81add34d96d2bb7f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'highlighted' => [$this, 'block_highlighted'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 54), "fluid_container", [], "any", false, false, true, 54)) ? ("container-fluid") : ("container-1250"));
        // line 55
        $context["footer_container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 55), "fluid_container", [], "any", false, false, true, 55)) ? ("container-fluid") : ("container-1300"));
        // line 57
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 57)) {
            // line 58
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 110
        echo "
";
        // line 112
        $this->displayBlock('main', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 164)) {
            // line 165
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
        // line 175
        echo "    </div>
";
    }

    // line 58
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "    ";
        // line 60
        $context["navbar_classes"] = [0 => "navbar", 1 => "bg-white", 2 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 62
($context["theme"] ?? null), "settings", [], "any", false, false, true, 62), "navbar_inverse", [], "any", false, false, true, 62)) ? ("navbar-inverse") : ("navbar-default")), 3 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 63
($context["theme"] ?? null), "settings", [], "any", false, false, true, 63), "navbar_position", [], "any", false, false, true, 63)) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 63), "navbar_position", [], "any", false, false, true, 63), 63, $this->source)))) : (($context["container"] ?? null)))];
        // line 66
        echo "    <div id=\"wrapper\" class=\"d-flex flex-column min-vh-100\">
    <header class=\"header\">
      <div ";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method", false, false, true, 68), 68, $this->source), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
        ";
        // line 69
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method", false, false, true, 69)) {
            // line 70
            echo "        <div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 70, $this->source), "html", null, true));
            echo "\">
          ";
        }
        // line 72
        echo "            ";
        // line 73
        echo "
            <nav class=\"navbar-header navbar-expand-lg row\">
              ";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 75), 75, $this->source), "html", null, true));
        echo "
              ";
        // line 77
        echo "              ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 77)) {
            // line 78
            echo "                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
                  <span class=\"sr-only\">";
            // line 79
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle navigation")));
            echo "</span>
                  <span class=\"icon-bar\"></span>
                  <span class=\"icon-bar\"></span>
                  <span class=\"icon-bar\"></span>
                </button>
              ";
        }
        // line 85
        echo "
              ";
        // line 87
        echo "              ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 87)) {
            // line 88
            echo "                <div class=\"offset-lg-3\"></div>
                <div id=\"navbar-collapse\" class=\"offset-lg-3 navbar-collapse collapse\">
                  ";
            // line 90
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 90), 90, $this->source), "html", null, true));
            echo "
                </div>
              ";
        }
        // line 93
        echo "            </nav>
          ";
        // line 94
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method", false, false, true, 94)) {
            // line 95
            echo "        </div>
        ";
        }
        // line 97
        echo "      </div>
      ";
        // line 98
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "head_block", [], "any", false, false, true, 98)) {
            // line 99
            echo "        <div class=\"head_block\" id=\"head_block\">
          <div class=\"";
            // line 100
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 100, $this->source), "html", null, true));
            echo "\">
            <div id=\"head_block_item\" class=\"col-md-offset-1 head_block_item col-lg-4 col-md-5 col-sm-12 col-xs-12\">
              ";
            // line 102
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "head_block", [], "any", false, false, true, 102), 102, $this->source), "html", null, true));
            echo "
            </div>
          </div>
        </div>
      ";
        }
        // line 107
        echo "    </header>
  ";
    }

    // line 112
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 113
        echo "  <div role=\"main\" class=\"main-container js-quickedit-main-content flex-fill\">
    ";
        // line 114
        if ( !($context["is_front"] ?? null)) {
            // line 115
            echo "      <div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 115, $this->source), "html", null, true));
            echo "\">
      ";
        }
        // line 117
        echo "    <div class=\"row\">

      ";
        // line 120
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 120)) {
            // line 121
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 128
            echo "      ";
        }
        // line 129
        echo "

      ";
        // line 132
        echo "      ";
        // line 133
        $context["content_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,         // line 134
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 134) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 134))) ? ("col-sm-6") : ("")), 1 => (((twig_get_attribute($this->env, $this->source,         // line 135
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 135) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 135)))) ? ("col-sm-9") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 136
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 136) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 136)))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 137
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 137)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 137)))) ? ("col-sm-12") : (""))];
        // line 140
        echo "      <section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 140), 140, $this->source), "html", null, true));
        echo ">

        ";
        // line 143
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 143)) {
            // line 144
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 147
            echo "        ";
        }
        // line 148
        echo "

        ";
        // line 151
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 155
        echo "      </section>

    </div>
        ";
        // line 158
        if ( !($context["is_front"] ?? null)) {
            // line 159
            echo "      </div>
          ";
        }
        // line 161
        echo "  </div>
";
    }

    // line 121
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 122
        echo "      <div class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 122, $this->source), "html", null, true));
        echo "\">
          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 124
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 124), 124, $this->source), "html", null, true));
        echo "
          </div>
      </div>
        ";
    }

    // line 144
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 145
        echo "            <div class=\"highlighted\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 145), 145, $this->source), "html", null, true));
        echo "</div>
          ";
    }

    // line 151
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 152
        echo "          <a id=\"main-content\"></a>
          ";
        // line 153
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 153), 153, $this->source), "html", null, true));
        echo "
        ";
    }

    // line 165
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 166
        echo "    <footer class=\"footer sticky-bottom\" role=\"contentinfo\">
      <div class=\"footer_cont sticky-bottom ";
        // line 167
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_container"] ?? null), 167, $this->source), "html", null, true));
        echo " \">
      <div class=\"footer-wrapper\">
        ";
        // line 169
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 169), 169, $this->source), "html", null, true));
        echo "
      </div>
      </div>
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/exam/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 169,  303 => 167,  300 => 166,  296 => 165,  290 => 153,  287 => 152,  283 => 151,  276 => 145,  272 => 144,  264 => 124,  258 => 122,  254 => 121,  249 => 161,  245 => 159,  243 => 158,  238 => 155,  235 => 151,  231 => 148,  228 => 147,  225 => 144,  222 => 143,  216 => 140,  214 => 137,  213 => 136,  212 => 135,  211 => 134,  210 => 133,  208 => 132,  204 => 129,  201 => 128,  198 => 121,  195 => 120,  191 => 117,  185 => 115,  183 => 114,  180 => 113,  176 => 112,  171 => 107,  163 => 102,  158 => 100,  155 => 99,  153 => 98,  150 => 97,  146 => 95,  144 => 94,  141 => 93,  135 => 90,  131 => 88,  128 => 87,  125 => 85,  116 => 79,  113 => 78,  110 => 77,  106 => 75,  102 => 73,  100 => 72,  94 => 70,  92 => 69,  88 => 68,  84 => 66,  82 => 63,  81 => 62,  80 => 60,  78 => 59,  74 => 58,  69 => 175,  65 => 165,  63 => 164,  60 => 163,  58 => 112,  55 => 110,  51 => 58,  49 => 57,  47 => 55,  45 => 54,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/exam/templates/system/page.html.twig", "/var/www/web/themes/custom/exam/templates/system/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 54, "if" => 57, "block" => 58);
        static $filters = array("clean_class" => 63, "escape" => 68, "t" => 79);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
