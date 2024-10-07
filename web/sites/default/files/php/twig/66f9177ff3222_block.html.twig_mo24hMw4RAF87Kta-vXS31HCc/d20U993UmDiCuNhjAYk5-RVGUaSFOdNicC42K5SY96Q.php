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

/* themes/dxpr_theme/templates/block.html.twig */
class __TwigTemplate_7a6c8de89f96c50333244800dcdf0d80 extends Template
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
            yield "   ";
            if ($context["name"]) {
                // line 51
                yield "   ";
                $context["designRegions"] = Twig\Extension\CoreExtension::merge($this->sandbox->ensureToStringAllowed(($context["designRegions"] ?? null), 51, $this->source), [$context["name"]]);
                // line 52
                yield "   ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['name'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        $context["classes"] = ["block", ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 57
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 57), 57, $this->source))), ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 58
($context["plugin_id"] ?? null), 58, $this->source))), "clearfix", (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 60
($context["theme"] ?? null), "settings", [], "any", false, false, true, 60), "block_card", [], "any", false, false, true, 60) && CoreExtension::inFilter(($context["region"] ?? null), ($context["designRegions"] ?? null)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 60), "block_card", [], "any", false, false, true, 60)) : (""))];
        // line 64
        $context["title_classes"] = ["block-title", (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 66
($context["theme"] ?? null), "settings", [], "any", false, false, true, 66), "title_card", [], "any", false, false, true, 66) && CoreExtension::inFilter(($context["region"] ?? null), ($context["designRegions"] ?? null)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 66), "title_card", [], "any", false, false, true, 66)) : (""))];
        // line 69
        yield "<section";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 69), 69, $this->source), "html", null, true);
        yield ">
  ";
        // line 70
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 70, $this->source), "html", null, true);
        yield "
  ";
        // line 71
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 71), "title_sticker", [], "any", false, false, true, 71) && CoreExtension::inFilter(($context["region"] ?? null), ($context["designRegions"] ?? null)))) {
            // line 72
            yield "    <div class=\"wrap-block-title\">
  ";
        }
        // line 74
        yield "  ";
        if (($context["label"] ?? null)) {
            // line 75
            yield "    <h2";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [($context["title_classes"] ?? null)], "method", false, false, true, 75), 75, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 75, $this->source), "html", null, true);
            yield "</h2>
  ";
        }
        // line 77
        yield "  ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 77), "title_sticker", [], "any", false, false, true, 77) && CoreExtension::inFilter(($context["region"] ?? null), ($context["designRegions"] ?? null)))) {
            // line 78
            yield "    </div>
  ";
        }
        // line 80
        yield "  ";
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 80), "block_divider", [], "any", false, false, true, 80) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 80), "block_divider_thickness", [], "any", false, false, true, 80)) && CoreExtension::inFilter(($context["region"] ?? null), ($context["designRegions"] ?? null)))) {
            // line 81
            yield "    <hr class=\"block-hr\">
  ";
        }
        // line 83
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 83, $this->source), "html", null, true);
        yield "

  ";
        // line 85
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 88
        yield "</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "configuration", "plugin_id", "region", "attributes", "title_prefix", "label", "title_attributes", "title_suffix", "content"]);        yield from [];
    }

    // line 85
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 86
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 86, $this->source), "html", null, true);
        yield "
  ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/dxpr_theme/templates/block.html.twig";
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
        return array (  134 => 86,  127 => 85,  120 => 88,  118 => 85,  112 => 83,  108 => 81,  105 => 80,  101 => 78,  98 => 77,  90 => 75,  87 => 74,  83 => 72,  81 => 71,  77 => 70,  72 => 69,  70 => 66,  69 => 64,  67 => 60,  66 => 58,  65 => 57,  64 => 55,  57 => 52,  54 => 51,  51 => 50,  47 => 49,  45 => 48,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/dxpr_theme/templates/block.html.twig", "C:\\laragon\\www\\fmcrs-website\\web\\themes\\dxpr_theme\\templates\\block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 48, "for" => 49, "if" => 50, "block" => 85);
        static $filters = array("merge" => 51, "clean_class" => 57, "escape" => 69);
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
