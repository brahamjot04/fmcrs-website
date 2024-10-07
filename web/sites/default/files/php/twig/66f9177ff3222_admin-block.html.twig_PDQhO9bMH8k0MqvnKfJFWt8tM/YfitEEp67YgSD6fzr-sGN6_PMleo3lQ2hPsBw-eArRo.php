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

/* themes/gin/templates/admin/admin-block.html.twig */
class __TwigTemplate_eb70d9babe5d7131f364c4754c2489e4 extends Template
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
        // line 17
        $context["classes"] = ["panel", "gin-layer-wrapper"];
        // line 22
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 22), 22, $this->source), "html", null, true);
        yield ">
  ";
        // line 23
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["block"] ?? null), "title", [], "any", false, false, true, 23)) {
            // line 24
            yield "    <h3 class=\"panel__title\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["block"] ?? null), "title", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            yield "</h3>
  ";
        }
        // line 26
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["block"] ?? null), "content", [], "any", false, false, true, 26)) {
            // line 27
            yield "    <div class=\"panel__content\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["block"] ?? null), "content", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            yield "</div>
  ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 28
($context["block"] ?? null), "description", [], "any", false, false, true, 28)) {
            // line 29
            yield "    <div class=\"panel__description\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["block"] ?? null), "description", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            yield "</div>
  ";
        }
        // line 31
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "block"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/gin/templates/admin/admin-block.html.twig";
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
        return array (  75 => 31,  69 => 29,  67 => 28,  62 => 27,  59 => 26,  53 => 24,  51 => 23,  46 => 22,  44 => 17,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/gin/templates/admin/admin-block.html.twig", "C:\\laragon\\www\\fmcrs-website\\web\\themes\\gin\\templates\\admin\\admin-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 17, "if" => 23);
        static $filters = array("escape" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
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
