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

/* themes/bootstrap5/templates/form/fieldset.html.twig */
class __TwigTemplate_accebf498fc81322dc2941a3e5b1e9ae extends Template
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
        // line 24
        $context["classes"] = ["js-form-item", "form-item", "js-form-wrapper", "form-wrapper"];
        // line 31
        yield "<fieldset";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 31), 31, $this->source), "html", null, true);
        yield ">
  ";
        // line 33
        $context["legend_span_classes"] = ["fieldset-legend", ((        // line 35
($context["required"] ?? null)) ? ("js-form-required") : ("")), ((        // line 36
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 39
        yield "  ";
        // line 40
        yield "  <legend";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["legend"] ?? null), "attributes", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
        yield ">
    <span";
        // line 41
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["legend_span"] ?? null), "attributes", [], "any", false, false, true, 41), "addClass", [($context["legend_span_classes"] ?? null)], "method", false, false, true, 41), 41, $this->source), "html", null, true);
        yield ">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["legend"] ?? null), "title", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
        yield "</span>
  </legend>
  <div class=\"fieldset-wrapper\">
    ";
        // line 44
        if (($context["errors"] ?? null)) {
            // line 45
            yield "      <div class=\"form-item--error-message\">
        <strong>";
            // line 46
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 46, $this->source), "html", null, true);
            yield "</strong>
      </div>
    ";
        }
        // line 49
        yield "    ";
        if (($context["prefix"] ?? null)) {
            // line 50
            yield "      <span class=\"field-prefix\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 50, $this->source), "html", null, true);
            yield "</span>
    ";
        }
        // line 52
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 52, $this->source), "html", null, true);
        yield "
    ";
        // line 53
        if (($context["suffix"] ?? null)) {
            // line 54
            yield "      <span class=\"field-suffix\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 54, $this->source), "html", null, true);
            yield "</span>
    ";
        }
        // line 56
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 56)) {
            // line 57
            yield "      <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 57), "addClass", ["description"], "method", false, false, true, 57), 57, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
            yield "</div>
    ";
        }
        // line 59
        yield "  </div>
</fieldset>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "required", "legend", "legend_span", "errors", "prefix", "children", "suffix", "description"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/bootstrap5/templates/form/fieldset.html.twig";
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
        return array (  114 => 59,  106 => 57,  103 => 56,  97 => 54,  95 => 53,  90 => 52,  84 => 50,  81 => 49,  75 => 46,  72 => 45,  70 => 44,  62 => 41,  57 => 40,  55 => 39,  53 => 36,  52 => 35,  51 => 33,  46 => 31,  44 => 24,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/bootstrap5/templates/form/fieldset.html.twig", "C:\\laragon\\www\\fmcrs-website\\web\\themes\\bootstrap5\\templates\\form\\fieldset.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 24, "if" => 44);
        static $filters = array("escape" => 31);
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
