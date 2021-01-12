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

/* themes/olivero/templates/content/search-result.html.twig */
class __TwigTemplate_8d7c8adde60386addfd86d0620b5a857f7dd8887dce0e6de9dcdf00c5c9c50f1 extends \Twig\Template
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
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("olivero/search-results"), "html", null, true);
        echo "
";
        // line 59
        if (($context["info_split"] ?? null)) {
            // line 60
            echo "  <div class=\"search-result__meta\">
    ";
            // line 61
            if (twig_get_attribute($this->env, $this->source, ($context["info_split"] ?? null), "user", [], "any", false, false, true, 61)) {
                // line 62
                echo "      <span>
        ";
                // line 63
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("By"));
                echo " ";
                ob_start(function () { return ''; });
                echo "<span class=\"search-result__author\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["info_split"] ?? null), "user", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
                echo "</span>";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 64
                echo "      </span>
    ";
            }
            // line 66
            echo "    ";
            if (($context["info_date"] ?? null)) {
                // line 67
                echo "      <span  class=\"search-result__date\">, ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["info_date"] ?? null), 67, $this->source), "html", null, true);
                echo "</span>
    ";
            }
            // line 69
            echo "  </div>
";
        }
        // line 71
        if (($context["title"] ?? null)) {
            // line 72
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 72, $this->source), "html", null, true);
            echo "
  <h3";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "search-result__title"], "method", false, false, true, 73), 73, $this->source), "html", null, true);
            echo ">
    <a href=\"";
            // line 74
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 74, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 74, $this->source), "html", null, true);
            echo "</a>
  </h3>
  ";
            // line 76
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 76, $this->source), "html", null, true);
            echo "
";
        }
        // line 78
        if (($context["snippet"] ?? null)) {
            // line 79
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "search-result__snippet", 1 => ($context["layout"] ?? null), 2 => "text-content"], "method", false, false, true, 79), 79, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["snippet"] ?? null), 79, $this->source), "html", null, true);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/olivero/templates/content/search-result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 79,  101 => 78,  96 => 76,  89 => 74,  85 => 73,  80 => 72,  78 => 71,  74 => 69,  68 => 67,  65 => 66,  61 => 64,  53 => 63,  50 => 62,  48 => 61,  45 => 60,  43 => 59,  39 => 58,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/olivero/templates/content/search-result.html.twig", "C:\\xampp\\htdocs\\course-project\\miroEstates\\web\\themes\\olivero\\templates\\content\\search-result.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 59, "spaceless" => 63);
        static $filters = array("escape" => 58, "t" => 63);
        static $functions = array("attach_library" => 58);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'spaceless'],
                ['escape', 't'],
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
