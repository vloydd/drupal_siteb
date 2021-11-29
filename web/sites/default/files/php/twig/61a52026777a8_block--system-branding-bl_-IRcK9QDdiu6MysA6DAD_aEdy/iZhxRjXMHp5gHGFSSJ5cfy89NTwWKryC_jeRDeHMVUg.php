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

/* themes/custom/exam/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_3eff2beb2da7834a35a96c876589fdefc3377d9daa81072e63ccc5d0437b11f7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "block--bare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("block--bare.html.twig", "themes/custom/exam/templates/block/block--system-branding-block.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "  <div class=\"navbar-logo col-md-3 col-xs-6\">
    ";
        // line 20
        if (($context["site_logo"] ?? null)) {
            // line 21
            echo "      <div class=\"navbar-logo__img\">
        <a class=\"logo navbar-btn pull-left\" href=\"";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>")));
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home")));
            echo "\" rel=\"home\">
          <img src=\"";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null), 23, $this->source), "html", null, true));
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home")));
            echo "\" />
        </a>
      </div>
    ";
        }
        // line 27
        echo "    ";
        if (($context["site_name"] ?? null)) {
            // line 28
            echo "      <div class=\"navbar-logo__name\">
        <a class=\"navbar-logo__name__item name navbar-brand\" href=\"";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>")));
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home")));
            echo "\" rel=\"home\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 29, $this->source), "html", null, true));
            echo "</a>
      </div>
    ";
        }
        // line 32
        echo "    ";
        if (($context["site_slogan"] ?? null)) {
            // line 33
            echo "      <div class=\"navbar-logo__slogan\">
        <p class=\"navbar-logo__slogan__item navbar-text\">";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 34, $this->source), "html", null, true));
            echo "</p>
      </div>
    ";
        }
        // line 37
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/exam/templates/block/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 37,  97 => 34,  94 => 33,  91 => 32,  81 => 29,  78 => 28,  75 => 27,  66 => 23,  60 => 22,  57 => 21,  55 => 20,  52 => 19,  48 => 18,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"block--bare.html.twig\" %}
{#
/**
 * @file
 * Default theme implementation for a branding block.
 *
 * Each branding element variable (logo, name, slogan) is only available if
 * enabled in the block configuration.
 *
 * Available variables:
 * - site_logo: Logo for site as defined in Appearance or theme settings.
 * - site_name: Name for site as defined in Site information settings.
 * - site_slogan: Slogan for site as defined in Site information settings.
 *
 * @ingroup templates
 */
#}
{% block content %}
  <div class=\"navbar-logo col-md-3 col-xs-6\">
    {% if site_logo %}
      <div class=\"navbar-logo__img\">
        <a class=\"logo navbar-btn pull-left\" href=\"{{ path('<front>') }}\" title=\"{{ 'Home'|t }}\" rel=\"home\">
          <img src=\"{{ site_logo }}\" alt=\"{{ 'Home'|t }}\" />
        </a>
      </div>
    {% endif %}
    {% if site_name %}
      <div class=\"navbar-logo__name\">
        <a class=\"navbar-logo__name__item name navbar-brand\" href=\"{{ path('<front>') }}\" title=\"{{ 'Home'|t }}\" rel=\"home\">{{ site_name }}</a>
      </div>
    {% endif %}
    {% if site_slogan %}
      <div class=\"navbar-logo__slogan\">
        <p class=\"navbar-logo__slogan__item navbar-text\">{{ site_slogan }}</p>
      </div>
    {% endif %}
  </div>
{% endblock %}
", "themes/custom/exam/templates/block/block--system-branding-block.html.twig", "/var/www/web/themes/custom/exam/templates/block/block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 20);
        static $filters = array("t" => 22, "escape" => 23);
        static $functions = array("path" => 22);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape'],
                ['path']
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
