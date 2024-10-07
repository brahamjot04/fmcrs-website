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

/* themes/dxpr_theme/templates/block--dxpr-theme-breadcrumbs.html.twig */
class __TwigTemplate_c1d848146467834c6a9913bce057ac2e extends Template
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
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 48
        $context["designRegions"] = [];
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 49), "block_design_regions", [], "any", false, false, true, 49));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 50
            yield "    ";
            if ($context["name"]) {
                // line 51
                yield "        ";
                $context["designRegions"] = Twig\Extension\CoreExtension::merge($this->sandbox->ensureToStringAllowed(($context["designRegions"] ?? null), 51, $this->source), [$context["name"]]);
                // line 52
                yield "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['name'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        $context["title_classes"] = ["block-title", (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 56
($context["theme"] ?? null), "settings", [], "any", false, false, true, 56), "title_card", [], "any", false, false, true, 56) && CoreExtension::inFilter(($context["region"] ?? null), ($context["designRegions"] ?? null)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 56), "title_card", [], "any", false, false, true, 56)) : (""))];
        // line 58
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 58, $this->source), "html", null, true);
        yield "
";
        // line 59
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 59), "title_sticker", [], "any", false, false, true, 59) && CoreExtension::inFilter(($context["region"] ?? null), ($context["designRegions"] ?? null)))) {
            // line 60
            yield "<div class=\"wrap-block-title\">
    ";
        }
        // line 62
        yield "    ";
        if (($context["label"] ?? null)) {
            // line 63
            yield "        <h2";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [($context["title_classes"] ?? null)], "method", false, false, true, 63), 63, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 63, $this->source), "html", null, true);
            yield "</h2>
    ";
        }
        // line 65
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 65), "title_sticker", [], "any", false, false, true, 65) && CoreExtension::inFilter(($context["region"] ?? null), ($context["designRegions"] ?? null)))) {
            // line 66
            yield "</div>
";
        }
        // line 68
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 68), "block_divider", [], "any", false, false, true, 68) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 68), "block_divider_thickness", [], "any", false, false, true, 68)) && CoreExtension::inFilter(($context["region"] ?? null), ($context["designRegions"] ?? null)))) {
            // line 69
            yield "    <hr class=\"block-hr\">
";
        }
        // line 71
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 71, $this->source), "html", null, true);
        yield "

";
        // line 73
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "region", "title_prefix", "label", "title_attributes", "title_suffix", "content"]);        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 74
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 74, $this->source), "html", null, true);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/dxpr_theme/templates/block--dxpr-theme-breadcrumbs.html.twig";
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
        return array (  118 => 74,  106 => 73,  101 => 71,  97 => 69,  95 => 68,  91 => 66,  88 => 65,  80 => 63,  77 => 62,  73 => 60,  71 => 59,  67 => 58,  65 => 56,  64 => 54,  57 => 52,  54 => 51,  51 => 50,  47 => 49,  45 => 48,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/dxpr_theme/templates/block--dxpr-theme-breadcrumbs.html.twig", "C:\\laragon\\www\\fmcrs-website\\web\\themes\\dxpr_theme\\templates\\block--dxpr-theme-breadcrumbs.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 48, "for" => 49, "if" => 50, "block" => 73);
        static $filters = array("merge" => 51, "escape" => 58);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'block'],
                ['merge', 'escape'],
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
