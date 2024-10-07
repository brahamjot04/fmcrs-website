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

/* themes/gin/templates/navigation/toolbar--gin--secondary.html.twig */
class __TwigTemplate_9d23c6826cb47c95ac2c62c9d786cc44 extends Template
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
        // line 23
        yield "
";
        // line 25
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             $this->loadTemplate("@gin/navigation/fix-toolbar-js-error.html.twig", "themes/gin/templates/navigation/toolbar--gin--secondary.html.twig", 25);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            yield from $__internal_compile_0->unwrap()->yield(CoreExtension::merge($context, ["toolbar_variant" =>             // line 26
($context["toolbar_variant"] ?? null), "core_navigation" =>             // line 27
($context["core_navigation"] ?? null)]));
        }
        // line 29
        yield "
";
        // line 31
        if ((($__internal_compile_1 = (($__internal_compile_2 = $context) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#secondary"] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["tabs"] ?? null) : null)) {
            // line 32
            yield "  ";
            $context["tabs"] = (($__internal_compile_3 = (($__internal_compile_4 = $context) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#secondary"] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["tabs"] ?? null) : null);
        }
        // line 34
        if ((($__internal_compile_5 = (($__internal_compile_6 = $context) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#secondary"] ?? null) : null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["trays"] ?? null) : null)) {
            // line 35
            yield "  ";
            $context["trays"] = (($__internal_compile_7 = (($__internal_compile_8 = $context) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#secondary"] ?? null) : null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["trays"] ?? null) : null);
        }
        // line 37
        yield "
<div";
        // line 38
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["toolbar", "toolbar-secondary"], "method", false, false, true, 38), "setAttribute", ["id", "toolbar-administration-secondary"], "method", false, false, true, 38), 38, $this->source), "html", null, true);
        yield ">
  <nav";
        // line 39
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["toolbar_attributes"] ?? null), "addClass", ["toolbar-bar", "clearfix"], "method", false, false, true, 39), "setAttribute", ["id", "toolbar-bar"], "method", false, false, true, 39), 39, $this->source), "html", null, true);
        yield ">
    <h2 class=\"visually-hidden\">";
        // line 40
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["toolbar_heading"] ?? null), 40, $this->source), "html", null, true);
        yield "</h2>

    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["tab"]) {
            // line 43
            yield "      ";
            $context["tray"] = (($__internal_compile_9 = ($context["trays"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[$context["key"]] ?? null) : null);
            // line 44
            yield "      ";
            $context["user_menu"] = (((($__internal_compile_10 = CoreExtension::getAttribute($this->env, $this->source, ($context["tray"] ?? null), "links", [], "any", false, false, true, 44)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["user_links"] ?? null) : null)) ? ("user-menu") : (false));
            // line 45
            yield "      ";
            $context["item_id"] = [];
            // line 46
            yield "
      ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($__internal_compile_11 = (($__internal_compile_12 = CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "link", [], "any", false, false, true, 47)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["#attributes"] ?? null) : null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["class"] ?? null) : null));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 48
                yield "        ";
                if (CoreExtension::inFilter("icon-", $context["item"])) {
                    // line 49
                    yield "          ";
                    $context["item_id"] = Twig\Extension\CoreExtension::merge($this->sandbox->ensureToStringAllowed(($context["item_id"] ?? null), 49, $this->source), [("toolbar-id--" . $this->sandbox->ensureToStringAllowed($context["item"], 49, $this->source))]);
                    // line 50
                    yield "        ";
                }
                // line 51
                yield "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            yield "
      ";
            // line 53
            $context["tab_id"] = (((($__internal_compile_13 = CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "link", [], "any", false, false, true, 53)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["#id"] ?? null) : null)) ? (("toolbar-tab--" . $this->sandbox->ensureToStringAllowed((($__internal_compile_14 = CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "link", [], "any", false, false, true, 53)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["#id"] ?? null) : null), 53, $this->source))) : (""));
            // line 54
            yield "      ";
            $context["tab_classes"] = Twig\Extension\CoreExtension::merge($this->sandbox->ensureToStringAllowed(($context["item_id"] ?? null), 54, $this->source), ["toolbar-tab", ($context["user_menu"] ?? null), ($context["tab_id"] ?? null)]);
            // line 55
            yield "
      ";
            // line 56
            $context["denylist_items"] = ["toolbar-id--toolbar-icon-menu"];
            // line 59
            yield "
      ";
            // line 61
            yield "      ";
            if (!CoreExtension::inFilter((($__internal_compile_15 = ($context["item_id"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[0] ?? null) : null), ($context["denylist_items"] ?? null))) {
                // line 62
                yield "        <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, true, 62), "addClass", [($context["tab_classes"] ?? null)], "method", false, false, true, 62), 62, $this->source), "html", null, true);
                if (CoreExtension::inFilter("tour-toolbar-tab", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, true, 62), "class", [], "any", false, false, true, 62))) {
                    yield " id=\"toolbar-tab-tour\"";
                }
                yield ">
          ";
                // line 63
                if (((($__internal_compile_16 = ($context["item_id"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[0] ?? null) : null) == "toolbar-id--toolbar-icon-user")) {
                    // line 64
                    yield "            ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_picture"] ?? null), 64, $this->source), "html", null, true);
                    yield "
          ";
                } else {
                    // line 66
                    yield "            ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "link", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
                    yield "
          ";
                }
                // line 68
                yield "          <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["tray"] ?? null), "attributes", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
                yield ">
            ";
                // line 69
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["tray"] ?? null), "label", [], "any", false, false, true, 69)) {
                    // line 70
                    yield "              <nav class=\"toolbar-lining clearfix\" role=\"navigation\" aria-label=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["tray"] ?? null), "label", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
                    yield "\">
                <h3 class=\"toolbar-tray-name visually-hidden\">";
                    // line 71
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["tray"] ?? null), "label", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
                    yield "</h3>
            ";
                } else {
                    // line 73
                    yield "              <nav class=\"toolbar-lining clearfix\" role=\"navigation\">
            ";
                }
                // line 75
                yield "            ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["tray"] ?? null), "links", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
                yield "
            </nav>
          </div>
        </div>
      ";
            }
            // line 80
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['tab'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "  </nav>
  ";
        // line 82
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["remainder"] ?? null), 82, $this->source), "html", null, true);
        yield "
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["toolbar_variant", "core_navigation", "_context", "attributes", "toolbar_attributes", "toolbar_heading", "user_picture", "remainder"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/gin/templates/navigation/toolbar--gin--secondary.html.twig";
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
        return array (  205 => 82,  202 => 81,  196 => 80,  187 => 75,  183 => 73,  178 => 71,  173 => 70,  171 => 69,  166 => 68,  160 => 66,  154 => 64,  152 => 63,  144 => 62,  141 => 61,  138 => 59,  136 => 56,  133 => 55,  130 => 54,  128 => 53,  125 => 52,  119 => 51,  116 => 50,  113 => 49,  110 => 48,  106 => 47,  103 => 46,  100 => 45,  97 => 44,  94 => 43,  90 => 42,  85 => 40,  81 => 39,  77 => 38,  74 => 37,  70 => 35,  68 => 34,  64 => 32,  62 => 31,  59 => 29,  56 => 27,  55 => 26,  47 => 25,  44 => 23,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/gin/templates/navigation/toolbar--gin--secondary.html.twig", "C:\\laragon\\www\\fmcrs-website\\web\\themes\\gin\\templates\\navigation\\toolbar--gin--secondary.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 25, "if" => 31, "set" => 32, "for" => 42);
        static $filters = array("escape" => 38, "merge" => 49);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if', 'set', 'for'],
                ['escape', 'merge'],
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
