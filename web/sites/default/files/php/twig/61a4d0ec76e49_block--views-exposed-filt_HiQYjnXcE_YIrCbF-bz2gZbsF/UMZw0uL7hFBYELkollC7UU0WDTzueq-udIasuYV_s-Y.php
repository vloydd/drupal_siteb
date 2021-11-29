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

/* themes/custom/exam/templates/block/block--views-exposed-filter-block.html.twig */
class __TwigTemplate_d1e56433ad5b1519969701ef91c59eb2e6aea04c76595c1c542cd582af0b3d07 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        $context["classes"] = [0 => "head-search", 1 => "block", 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 52
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 52), 52, $this->source))), 3 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 53
($context["plugin_id"] ?? null), 53, $this->source))), 4 => "clearfix", 5 => "col-xs-5", 6 => "col-md-3"];
        // line 59
        echo "<section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 59), 59, $this->source), "html", null, true));
        echo ">
  ";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 60, $this->source), "html", null, true));
        echo "

  ";
        // line 62
        $this->displayBlock('content', $context, $blocks);
        // line 65
        echo "</section>

";
    }

    // line 62
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 63, $this->source), "html", null, true));
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/exam/templates/block/block--views-exposed-filter-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 63,  62 => 62,  56 => 65,  54 => 62,  49 => 60,  44 => 59,  42 => 53,  41 => 52,  40 => 49,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/exam/templates/block/block--views-exposed-filter-block.html.twig", "/var/www/web/themes/custom/exam/templates/block/block--views-exposed-filter-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 49, "block" => 62);
        static $filters = array("clean_class" => 52, "escape" => 59);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
                ['clean_class', 'escape'],
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
