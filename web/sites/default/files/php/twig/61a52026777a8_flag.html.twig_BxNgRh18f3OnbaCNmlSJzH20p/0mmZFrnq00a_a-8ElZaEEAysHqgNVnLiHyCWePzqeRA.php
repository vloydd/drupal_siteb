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

/* themes/custom/exam/templates/block/flag.html.twig */
class __TwigTemplate_93557d49dcf2775bef59353377fc2567a5f47b18844403b76c53787d8f7fa18b extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        ob_start();
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("flag/flag.link"), "html", null, true));
        echo "

";
        // line 22
        if ((($context["action"] ?? null) == "unflag")) {
            // line 23
            echo "    ";
            $context["action_class"] = "action-unflag fa fa-heart ";
        } else {
            // line 25
            echo "    ";
            $context["action_class"] = "action-flag fa fa-heart-o ";
        }
        // line 27
        echo "
";
        // line 30
        $context["classes"] = [0 => "flag", 1 => "use-ajax", 2 => ("flag-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 33
($context["flag"] ?? null), "id", [], "method", false, false, true, 33), 33, $this->source))), 3 => ((("js-flag-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 34
($context["flag"] ?? null), "id", [], "method", false, false, true, 34), 34, $this->source))) . "-") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["flaggable"] ?? null), "id", [], "method", false, false, true, 34), 34, $this->source)), 4 =>         // line 35
($context["action_class"] ?? null)];
        // line 38
        echo "
";
        // line 40
        $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", [0 => "rel", 1 => "nofollow"], "method", false, false, true, 40);
        // line 41
        echo "
";
        // line 43
        echo "  <a class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 43, $this->source), " "), "html", null, true));
        echo "\" ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 43, $this->source), "html", null, true));
        echo "></a>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "themes/custom/exam/templates/block/flag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 43,  69 => 41,  67 => 40,  64 => 38,  62 => 35,  61 => 34,  60 => 33,  59 => 30,  56 => 27,  52 => 25,  48 => 23,  46 => 22,  41 => 19,  39 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for flag links.
 *
 * Available functions:
 * - flagcount(flag, flaggable) gets the number of flaggings for the given flag and flaggable.
 *
 * Available variables:
 * - attributes: HTML attributes for the link element.
 * - title: The flag link title.
 * - action: 'flag' or 'unflag'
 * - flag: The flag object.
 * - flaggable: The flaggable entity.
 */
#}
{% spaceless %}
{# Attach the flag CSS library.#}
{{ attach_library('flag/flag.link') }}

{# Depending on the flag action, set the appropriate action class. #}
{% if action == 'unflag' %}
    {% set action_class = 'action-unflag fa fa-heart ' %}
{% else %}
    {% set action_class = 'action-flag fa fa-heart-o ' %}
{% endif %}

{# Set the remaining Flag CSS classes. #}
{%
  set classes = [
    'flag',
     'use-ajax',
    'flag-' ~ flag.id()|clean_class,
    'js-flag-' ~ flag.id()|clean_class ~ '-' ~ flaggable.id(),
    action_class
  ]
%}

{# Set nofollow to prevent search bots from crawling anonymous flag links #}
{% set attributes = attributes.setAttribute('rel', 'nofollow') %}

{#<div class=\"{{classes|join(' ')}}\"><a{{ attributes }}>{{ title }}</a></div>#}
  <a class=\"{{classes|join(' ')}}\" {{ attributes }}></a>
{% endspaceless %}
", "themes/custom/exam/templates/block/flag.html.twig", "/var/www/web/themes/custom/exam/templates/block/flag.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("spaceless" => 17, "if" => 22, "set" => 23);
        static $filters = array("escape" => 19, "clean_class" => 33, "join" => 43);
        static $functions = array("attach_library" => 19);

        try {
            $this->sandbox->checkSecurity(
                ['spaceless', 'if', 'set'],
                ['escape', 'clean_class', 'join'],
                ['attach_library']
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
