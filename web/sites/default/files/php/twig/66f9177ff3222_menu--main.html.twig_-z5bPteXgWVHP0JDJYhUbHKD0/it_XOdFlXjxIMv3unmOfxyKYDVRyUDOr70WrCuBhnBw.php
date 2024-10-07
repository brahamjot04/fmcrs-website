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

/* themes/dxpr_theme/templates/menu--main.html.twig */
class __TwigTemplate_66a4ab832b6a43475b09880f54c3d993 extends Template
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
        // line 18
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 19
        yield "
";
        // line 24
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 24, $context, $this->getSourceContext()));
        yield "

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "menu_level"]);        yield from [];
    }

    // line 26
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
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
            // line 27
            yield "  ";
            $macros["menus"] = $this;
            // line 28
            yield "  ";
            if (($context["items"] ?? null)) {
                // line 29
                yield "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 30
                    yield "      <ul";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["menu", "nav", "navbar-nav"], "method", false, false, true, 30), 30, $this->source), "html", null, true);
                    yield ">
    ";
                } elseif ((                // line 31
($context["menu_level"] ?? null) == 1)) {
                    // line 32
                    yield "      <ul";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["dropdown-menu"], "method", false, false, true, 32), 32, $this->source), "html", null, true);
                    yield ">
    ";
                } else {
                    // line 34
                    yield "      <ul";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["dxpr-theme-megamenu"], "method", false, false, true, 34), 34, $this->source), "html", null, true);
                    yield ">
    ";
                }
                // line 36
                yield "    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 37
                    yield "      ";
                    // line 38
                    $context["item_classes"] = ["expanded", "dropdown", ((CoreExtension::getAttribute($this->env, $this->source,                     // line 41
$context["item"], "in_active_trail", [], "any", false, false, true, 41)) ? ("active") : (""))];
                    // line 44
                    yield "      ";
                    if (((($context["menu_level"] ?? null) == 0) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 44))) {
                        // line 45
                        yield "        <li";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 45), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 45), 45, $this->source), "html", null, true);
                        yield ">
        <a href=\"";
                        // line 46
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                        yield "\" class=\"dropdown-toggle\" data-target=\"#\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                        yield "</a>
      ";
                    } elseif (((                    // line 47
($context["menu_level"] ?? null) == 1) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 47))) {
                        // line 48
                        yield "        <li";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 48), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 48), 48, $this->source), "html", null, true);
                        yield ">
        <a href=\"";
                        // line 49
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
                        yield "\" class=\"dxpr-theme-megamenu__heading\" data-target=\"#\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
                        yield "</a>
      ";
                    } else {
                        // line 51
                        yield "        <li";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 51), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 51), 51, $this->source), "html", null, true);
                        yield ">
        ";
                        // line 52
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 52), 52, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 52), 52, $this->source), ["class" => "parent_link"]), "html", null, true);
                        yield "
      ";
                    }
                    // line 54
                    yield "      ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 54)) {
                        // line 55
                        yield "        ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 55), CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", ["nav", "navbar-nav", "menu", "dropdown-menu", "dxpr-theme-megamenu"], "method", false, false, true, 55), (($context["menu_level"] ?? null) + 1)], 55, $context, $this->getSourceContext()));
                        yield "
      ";
                    }
                    // line 57
                    yield "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                yield "    </ul>
  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/dxpr_theme/templates/menu--main.html.twig";
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
        return array (  164 => 59,  157 => 57,  151 => 55,  148 => 54,  143 => 52,  138 => 51,  131 => 49,  126 => 48,  124 => 47,  118 => 46,  113 => 45,  110 => 44,  108 => 41,  107 => 38,  105 => 37,  100 => 36,  94 => 34,  88 => 32,  86 => 31,  81 => 30,  78 => 29,  75 => 28,  72 => 27,  58 => 26,  49 => 24,  46 => 19,  44 => 18,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/dxpr_theme/templates/menu--main.html.twig", "C:\\laragon\\www\\fmcrs-website\\web\\themes\\dxpr_theme\\templates\\menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 18, "macro" => 26, "if" => 28, "for" => 36, "set" => 38);
        static $filters = array("escape" => 30);
        static $functions = array("link" => 52);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape'],
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
