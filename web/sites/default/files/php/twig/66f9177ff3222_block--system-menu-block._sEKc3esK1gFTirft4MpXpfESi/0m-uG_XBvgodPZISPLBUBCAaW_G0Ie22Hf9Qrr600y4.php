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

/* themes/dxpr_theme/templates/block--system-menu-block.html.twig */
class __TwigTemplate_94506b13b13677d9352b5ecf5f76b7f1 extends Template
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
        // line 28
        $context["designRegions"] = [];
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 29), "block_design_regions", [], "any", false, false, true, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 30
            yield "   ";
            if ($context["name"]) {
                // line 31
                yield "   ";
                $context["designRegions"] = Twig\Extension\CoreExtension::merge($this->sandbox->ensureToStringAllowed(($context["designRegions"] ?? null), 31, $this->source), [$context["name"]]);
                // line 32
                yield "   ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['name'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        $context["classes"] = ["block", ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 37
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 37), 37, $this->source))), ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 38
($context["plugin_id"] ?? null), 38, $this->source))), "clearfix", (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 40
($context["theme"] ?? null), "settings", [], "any", false, false, true, 40), "block_card", [], "any", false, false, true, 40) && CoreExtension::inFilter(($context["region"] ?? null), ($context["designRegions"] ?? null)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 40), "block_card", [], "any", false, false, true, 40)) : (""))];
        // line 44
        $context["title_classes"] = ["block-title", (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 46
($context["theme"] ?? null), "settings", [], "any", false, false, true, 46), "title_card", [], "any", false, false, true, 46) && CoreExtension::inFilter(($context["region"] ?? null), ($context["designRegions"] ?? null)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 46), "title_card", [], "any", false, false, true, 46)) : (""))];
        // line 49
        yield "
<section";
        // line 50
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 50), 50, $this->source), "html", null, true);
        yield ">
  ";
        // line 51
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 51, $this->source), "html", null, true);
        yield "
  ";
        // line 52
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 52), "title_sticker", [], "any", false, false, true, 52) && CoreExtension::inFilter(($context["region"] ?? null), ($context["designRegions"] ?? null)))) {
            // line 53
            yield "    <div class=\"wrap-block-title\">
  ";
        }
        // line 55
        yield "  ";
        if (($context["label"] ?? null)) {
            // line 56
            yield "    <h2";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [($context["title_classes"] ?? null)], "method", false, false, true, 56), 56, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 56, $this->source), "html", null, true);
            yield "</h2>
  ";
        }
        // line 58
        yield "  ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 58), "title_sticker", [], "any", false, false, true, 58) && CoreExtension::inFilter(($context["region"] ?? null), ($context["designRegions"] ?? null)))) {
            // line 59
            yield "    </div>
  ";
        }
        // line 61
        yield "  ";
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 61), "block_divider", [], "any", false, false, true, 61) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 61), "block_divider_thickness", [], "any", false, false, true, 61)) && CoreExtension::inFilter(($context["region"] ?? null), ($context["designRegions"] ?? null)))) {
            // line 62
            yield "    <hr class=\"block-hr\">
  ";
        }
        // line 64
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 64, $this->source), "html", null, true);
        yield "

  ";
        // line 66
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 69
        yield "</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "configuration", "plugin_id", "region", "attributes", "title_prefix", "label", "title_attributes", "title_suffix", "content"]);        yield from [];
    }

    // line 66
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 67
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 67, $this->source), "html", null, true);
        yield "
  ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/dxpr_theme/templates/block--system-menu-block.html.twig";
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
        return array (  136 => 67,  129 => 66,  122 => 69,  120 => 66,  114 => 64,  110 => 62,  107 => 61,  103 => 59,  100 => 58,  92 => 56,  89 => 55,  85 => 53,  83 => 52,  79 => 51,  75 => 50,  72 => 49,  70 => 46,  69 => 44,  67 => 40,  66 => 38,  65 => 37,  64 => 35,  57 => 32,  54 => 31,  51 => 30,  47 => 29,  45 => 28,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/dxpr_theme/templates/block--system-menu-block.html.twig", "C:\\laragon\\www\\fmcrs-website\\web\\themes\\dxpr_theme\\templates\\block--system-menu-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 28, "for" => 29, "if" => 30, "block" => 66);
        static $filters = array("merge" => 31, "clean_class" => 37, "escape" => 50);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'block'],
                ['merge', 'clean_class', 'escape'],
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
