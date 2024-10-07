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

/* themes/bootstrap5/templates/navigation/menu--main.html.twig */
class __TwigTemplate_523131d638597ec198a319780341c351 extends Template
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
        // line 21
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 22
        yield "
";
        // line 27
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_build_menu", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 27, $context, $this->getSourceContext()));
        yield "

";
        // line 46
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "menu_level"]);        yield from [];
    }

    // line 29
    public function macro_build_menu($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 30
            yield "  ";
            $macros["menus"] = $this;
            // line 31
            yield "  ";
            if (($context["items"] ?? null)) {
                // line 32
                yield "    ";
                // line 33
                $context["ul_classes"] = [(((                // line 34
($context["menu_level"] ?? null) == 0)) ? ("navbar-nav justify-content-end flex-wrap") : ("")), (((                // line 35
($context["menu_level"] ?? null) > 0)) ? ("dropdown-menu") : ("")), ("nav-level-" . $this->sandbox->ensureToStringAllowed(                // line 36
($context["menu_level"] ?? null), 36, $this->source))];
                // line 39
                yield "    <ul";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["ul_classes"] ?? null)], "method", false, false, true, 39), 39, $this->source), "html", null, true);
                yield ">
    ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 41
                    yield "      ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_add_link", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [($context["ul_classes"] ?? null)], "method", false, false, true, 41), ($context["menu_level"] ?? null)], 41, $context, $this->getSourceContext()));
                    yield "
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                yield "    </ul>
  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 47
    public function macro_add_link($__item__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "item" => $__item__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 48
            yield "  ";
            $macros["menus"] = $this;
            // line 49
            yield "  ";
            // line 50
            $context["list_item_classes"] = ["nav-item", ((CoreExtension::getAttribute($this->env, $this->source,             // line 52
($context["item"] ?? null), "is_expanded", [], "any", false, false, true, 52)) ? ("dropdown") : (""))];
            // line 55
            yield "  ";
            // line 56
            $context["link_class"] = [(((            // line 57
($context["menu_level"] ?? null) == 0)) ? ("nav-link") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,             // line 58
($context["item"] ?? null), "in_active_trail", [], "any", false, false, true, 58)) ? ("active") : ("")), ((((            // line 59
($context["menu_level"] ?? null) == 0) && (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "is_expanded", [], "any", false, false, true, 59) || CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "is_collapsed", [], "any", false, false, true, 59)))) ? ("dropdown-toggle") : ("")), (((            // line 60
($context["menu_level"] ?? null) > 0)) ? ("dropdown-item") : (""))];
            // line 63
            yield "  ";
            // line 64
            $context["toggle_class"] = [];
            // line 67
            yield "  <li";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "attributes", [], "any", false, false, true, 67), "addClass", [($context["list_item_classes"] ?? null)], "method", false, false, true, 67), 67, $this->source), "html", null, true);
            yield ">
    ";
            // line 68
            if (((($context["menu_level"] ?? null) == 0) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", false, false, true, 68))) {
                // line 69
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, true, 69), 69, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 69), 69, $this->source), ["class" => ($context["link_class"] ?? null), "role" => "button", "data-bs-toggle" => "dropdown", "aria-expanded" => "false", "title" => ((t("Expand menu") . " ") . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, true, 69), 69, $this->source))]), "html", null, true);
                yield "
      ";
                // line 70
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_build_menu", [CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", false, false, true, 70), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 70, $context, $this->getSourceContext()));
                yield "
    ";
            } else {
                // line 72
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, true, 72), 72, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 72), 72, $this->source), ["class" => ($context["link_class"] ?? null)]), "html", null, true);
                yield "
    ";
            }
            // line 74
            yield "  </li>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/bootstrap5/templates/navigation/menu--main.html.twig";
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
        return array (  171 => 74,  165 => 72,  160 => 70,  155 => 69,  153 => 68,  148 => 67,  146 => 64,  144 => 63,  142 => 60,  141 => 59,  140 => 58,  139 => 57,  138 => 56,  136 => 55,  134 => 52,  133 => 50,  131 => 49,  128 => 48,  114 => 47,  106 => 43,  97 => 41,  93 => 40,  88 => 39,  86 => 36,  85 => 35,  84 => 34,  83 => 33,  81 => 32,  78 => 31,  75 => 30,  61 => 29,  54 => 46,  49 => 27,  46 => 22,  44 => 21,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/bootstrap5/templates/navigation/menu--main.html.twig", "C:\\laragon\\www\\fmcrs-website\\web\\themes\\bootstrap5\\templates\\navigation\\menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 21, "macro" => 29, "if" => 31, "set" => 33, "for" => 40);
        static $filters = array("escape" => 39, "t" => 69);
        static $functions = array("link" => 69);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'set', 'for'],
                ['escape', 't'],
                ['link'],
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
