<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/gin/templates/views/views-view-table.html.twig */
class __TwigTemplate_028479cd98bdaaee72ebd8e12a777595 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 35
        $context["classes"] = ["views-table", "views-view-table", ("cols-" . Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(        // line 38
($context["header"] ?? null), 38, $this->source))), ((        // line 39
($context["responsive"] ?? null)) ? ("responsive-enabled") : ("")), ((        // line 40
($context["sticky"] ?? null)) ? ("sticky-enabled position-sticky") : (""))];
        // line 43
        yield "
";
        // line 44
        $macros["macros"] = $this->macros["macros"] = $this;
        // line 45
        yield "
";
        // line 87
        yield "
";
        // line 88
        if ((($context["header"] ?? null) && ($context["sticky"] ?? null))) {
            // line 89
            yield "  <table class=\"gin--sticky-table-header syncscroll\" name=\"gin-sticky-header\" hidden>
    ";
            // line 90
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["macros"], "macro_table_header", [($context["header"] ?? null), ($context["fields"] ?? null), ($context["sticky"] ?? null)], 90, $context, $this->getSourceContext()));
            yield "
  </table>
";
        }
        // line 93
        yield "<div class=\"gin-table-scroll-wrapper gin-horizontal-scroll-shadow syncscroll\" name=\"gin-sticky-header\">
  <table";
        // line 94
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 94), 94, $this->source), "html", null, true);
        yield ">
    ";
        // line 95
        if (($context["caption_needed"] ?? null)) {
            // line 96
            yield "      <caption>
      ";
            // line 97
            if (($context["caption"] ?? null)) {
                // line 98
                yield "        ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["caption"] ?? null), 98, $this->source), "html", null, true);
                yield "
      ";
            } else {
                // line 100
                yield "        ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 100, $this->source), "html", null, true);
                yield "
      ";
            }
            // line 102
            yield "      ";
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["summary_element"] ?? null))) {
                // line 103
                yield "        ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["summary_element"] ?? null), 103, $this->source), "html", null, true);
                yield "
      ";
            }
            // line 105
            yield "      </caption>
    ";
        }
        // line 107
        yield "    ";
        if (($context["header"] ?? null)) {
            // line 108
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["macros"], "macro_table_header", [($context["header"] ?? null), ($context["fields"] ?? null)], 108, $context, $this->getSourceContext()));
            yield "
    ";
        }
        // line 110
        yield "    <tbody>
      ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 112
            yield "        <tr";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
            yield ">
          ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "columns", [], "any", false, false, true, 113));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 114
                yield "            ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["column"], "default_classes", [], "any", false, false, true, 114)) {
                    // line 115
                    yield "              ";
                    // line 116
                    $context["column_classes"] = ["views-field"];
                    // line 120
                    yield "              ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "fields", [], "any", false, false, true, 120));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 121
                        yield "                ";
                        $context["column_classes"] = Twig\Extension\CoreExtension::merge($this->sandbox->ensureToStringAllowed(($context["column_classes"] ?? null), 121, $this->source), [("views-field-" . $this->sandbox->ensureToStringAllowed($context["field"], 121, $this->source))]);
                        // line 122
                        yield "              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 123
                    yield "            ";
                }
                // line 124
                yield "            <td";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 124), "addClass", [($context["column_classes"] ?? null)], "method", false, false, true, 124), 124, $this->source), "html", null, true);
                yield ">";
                // line 125
                if (CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 125)) {
                    // line 126
                    yield "<";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 126), 126, $this->source), "html", null, true);
                    yield ">
                ";
                    // line 127
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 127));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 128
                        yield "                  ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["content"], "separator", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["content"], "field_output", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
                        yield "
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['content'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 130
                    yield "                </";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
                    yield ">";
                } else {
                    // line 132
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 132));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 133
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["content"], "separator", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["content"], "field_output", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['content'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                // line 136
                yield "            </td>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['column'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            yield "        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        yield "    </tbody>
  </table>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["header", "responsive", "sticky", "_self", "fields", "attributes", "caption_needed", "caption", "title", "summary_element", "rows", "gin_is_sticky"]);        yield from [];
    }

    // line 46
    public function macro_table_header($__header__ = null, $__fields__ = null, $__gin_is_sticky__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "header" => $__header__,
            "fields" => $__fields__,
            "gin_is_sticky" => $__gin_is_sticky__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 47
            yield "  <thead>
    <tr>
      ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["header"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 50
                yield "        ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["column"], "default_classes", [], "any", false, false, true, 50)) {
                    // line 51
                    yield "          ";
                    // line 52
                    $context["column_classes"] = ["views-field", ("views-field-" . $this->sandbox->ensureToStringAllowed((($__internal_compile_0 =                     // line 54
($context["fields"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["key"]] ?? null) : null), 54, $this->source)), ((CoreExtension::inFilter("bulk-form", (($__internal_compile_1 =                     // line 55
($context["fields"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["key"]] ?? null) : null))) ? ("gin--sticky-bulk-select") : (""))];
                    // line 58
                    yield "        ";
                }
                // line 59
                yield "        <th";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 59), "addClass", [($context["column_classes"] ?? null)], "method", false, false, true, 59), "setAttribute", ["scope", "col"], "method", false, false, true, 59), 59, $this->source), "html", null, true);
                yield ">
          ";
                // line 60
                if (((($context["gin_is_sticky"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), $context["key"], [], "array", true, true, true, 60)) && CoreExtension::inFilter("bulk-form", (($__internal_compile_2 = ($context["fields"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["key"]] ?? null) : null)))) {
                    // line 61
                    yield "            <input
              type=\"checkbox\"
              class=\"form-checkbox form-boolean form-boolean--type-checkbox\"
              title=\"";
                    // line 64
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Select all rows in this table"));
                    yield "\"
            />
          ";
                }
                // line 67
                if (CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 67)) {
                    // line 68
                    yield "<";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
                    yield ">";
                    // line 69
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 69)) {
                        // line 70
                        yield "<a href=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
                        yield "\" title=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "title", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
                        yield "\" rel=\"nofollow\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
                        yield "</a>";
                    } else {
                        // line 72
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
                    }
                    // line 74
                    yield "</";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
                    yield ">";
                } else {
                    // line 76
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 76)) {
                        // line 77
                        yield "<a href=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
                        yield "\" title=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "title", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
                        yield "\" rel=\"nofollow\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
                        yield "</a>";
                    } else {
                        // line 79
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
                    }
                }
                // line 82
                yield "</th>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['column'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            yield "    </tr>
  </thead>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/gin/templates/views/views-view-table.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  327 => 84,  320 => 82,  315 => 79,  305 => 77,  303 => 76,  298 => 74,  294 => 72,  284 => 70,  282 => 69,  278 => 68,  276 => 67,  270 => 64,  265 => 61,  263 => 60,  258 => 59,  255 => 58,  253 => 55,  252 => 54,  251 => 52,  249 => 51,  246 => 50,  242 => 49,  238 => 47,  224 => 46,  215 => 140,  208 => 138,  201 => 136,  193 => 133,  189 => 132,  184 => 130,  174 => 128,  170 => 127,  165 => 126,  163 => 125,  159 => 124,  156 => 123,  150 => 122,  147 => 121,  142 => 120,  140 => 116,  138 => 115,  135 => 114,  131 => 113,  126 => 112,  122 => 111,  119 => 110,  113 => 108,  110 => 107,  106 => 105,  100 => 103,  97 => 102,  91 => 100,  85 => 98,  83 => 97,  80 => 96,  78 => 95,  74 => 94,  71 => 93,  65 => 90,  62 => 89,  60 => 88,  57 => 87,  54 => 45,  52 => 44,  49 => 43,  47 => 40,  46 => 39,  45 => 38,  44 => 35,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/gin/templates/views/views-view-table.html.twig", "C:\\laragon\\www\\fmcrs-website\\web\\themes\\gin\\templates\\views\\views-view-table.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 35, "import" => 44, "macro" => 46, "if" => 88, "for" => 111);
        static $filters = array("length" => 38, "escape" => 94, "merge" => 121, "t" => 64);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'import', 'macro', 'if', 'for'],
                ['length', 'escape', 'merge', 't'],
                [],
                $this->source
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
