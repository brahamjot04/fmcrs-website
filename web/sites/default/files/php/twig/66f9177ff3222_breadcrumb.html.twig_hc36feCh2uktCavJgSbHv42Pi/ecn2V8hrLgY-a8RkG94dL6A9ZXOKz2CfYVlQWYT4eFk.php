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

/* themes/bootstrap/templates/navigation/breadcrumb.html.twig */
class __TwigTemplate_20257b73d9abb56f45341d1d5b285408 extends Template
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
        // line 11
        yield "
";
        // line 12
        if (($context["breadcrumb"] ?? null)) {
            // line 13
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "bootstrap:breadcrumb", ["breadcrumb" =>             // line 14
($context["breadcrumb"] ?? null), "breadcrumb_divider" =>             // line 15
($context["breadcrumb_divider"] ?? null)]));
            // line 17
            yield "
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["breadcrumb", "breadcrumb_divider"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/bootstrap/templates/navigation/breadcrumb.html.twig";
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
        return array (  54 => 17,  52 => 15,  51 => 14,  49 => 13,  47 => 12,  44 => 11,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/bootstrap/templates/navigation/breadcrumb.html.twig", "C:\\laragon\\www\\fmcrs-website\\web\\themes\\bootstrap\\templates\\navigation\\breadcrumb.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 12);
        static $filters = array();
        static $functions = array("include" => 13);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['include'],
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
