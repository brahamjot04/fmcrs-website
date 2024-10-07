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

/* themes/gin/templates/page/page.html.twig */
class __TwigTemplate_2fa95c83b74789d1afe8c509c39ee8a3 extends Template
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
        // line 42
        $context["page_title_block"] = ($this->sandbox->ensureToStringAllowed(($context["active_admin_theme"] ?? null), 42, $this->source) . "_page_title");
        // line 43
        $context["local_actions_block"] = ($this->sandbox->ensureToStringAllowed(($context["active_admin_theme"] ?? null), 43, $this->source) . "_local_actions");
        // line 44
        yield "
<div class=\"gin-secondary-toolbar layout-container\">
  <div class=\"gin-breadcrumb-wrapper\">
  ";
        // line 47
        if ((($context["route_name"] ?? null) == "entity.node.canonical")) {
            // line 48
            yield "    <div class=\"region region-breadcrumb gin-region-breadcrumb\">
      <nav class=\"breadcrumb\" role=\"navigation\" aria-labelledby=\"system-breadcrumb\">
        <h2 id=\"system-breadcrumb\" class=\"visually-hidden\">";
            // line 50
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Breadcrumb"));
            yield "</h2>
        <ol class=\"breadcrumb__list\">
          <li class=\"breadcrumb__item\">
            ";
            // line 53
            if ((($context["entity_edit_url"] ?? null) && ($context["entity_title"] ?? null))) {
                // line 54
                yield "              <a class=\"breadcrumb__link gin-back-to-admin\" href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["entity_edit_url"] ?? null), 54, $this->source), "html", null, true);
                yield "\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Edit %title", ["%title" => ($context["entity_title"] ?? null)]));
                yield "</a>
            ";
            } else {
                // line 56
                yield "              <a class=\"breadcrumb__link gin-back-to-admin\" href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("system.admin_content"));
                yield "\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Back to Administration"));
                yield "</a>
            ";
            }
            // line 58
            yield "          </li>
        </ol>
      </nav>
    </div>
  ";
        } else {
            // line 63
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
            yield "
  ";
        }
        // line 65
        yield "  </div>
  ";
        // line 66
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "gin_secondary_toolbar", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
        yield "
</div>

<div class=\"region-sticky-watcher\"></div>

<header class=\"region region-sticky ";
        // line 71
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["gin_form_actions_class"] ?? null), 71, $this->source), "html", null, true);
        yield "\">
  <div class=\"layout-container region-sticky__items\">
    <div class=\"region-sticky__items__inner\">
      ";
        // line 74
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 74)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["page_title_block"] ?? null)] ?? null) : null), 74, $this->source), "html", null, true);
        yield "
      ";
        // line 75
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 75)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["local_actions_block"] ?? null)] ?? null) : null), 75, $this->source), "html", null, true);
        yield "
      ";
        // line 76
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["gin_form_actions"] ?? null), 76, $this->source), "html", null, true);
        yield "
    </div>
  </div>
</header>

<div class=\"sticky-shadow\"></div>

<div class=\"content-header clearfix\">
  <div class=\"layout-container\">
    ";
        // line 85
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 85), 85, $this->source), $this->sandbox->ensureToStringAllowed(($context["page_title_block"] ?? null), 85, $this->source)), "html", null, true);
        yield "
  </div>
</div>

<div class=\"layout-container\">
  ";
        // line 90
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "pre_content", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
        yield "
  <main class=\"page-content clearfix\" role=\"main\">
    <div class=\"visually-hidden\"><a id=\"main-content\" tabindex=\"-1\"></a></div>
    ";
        // line 93
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
        yield "
    ";
        // line 94
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 94)) {
            // line 95
            yield "      <div class=\"help\">
        ";
            // line 96
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
            yield "
      </div>
    ";
        }
        // line 99
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 99), 99, $this->source), $this->sandbox->ensureToStringAllowed(($context["local_actions_block"] ?? null), 99, $this->source)), "html", null, true);
        yield "
  </main>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["active_admin_theme", "route_name", "entity_edit_url", "entity_title", "page", "gin_form_actions_class", "gin_form_actions"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/gin/templates/page/page.html.twig";
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
        return array (  162 => 99,  156 => 96,  153 => 95,  151 => 94,  147 => 93,  141 => 90,  133 => 85,  121 => 76,  117 => 75,  113 => 74,  107 => 71,  99 => 66,  96 => 65,  90 => 63,  83 => 58,  75 => 56,  67 => 54,  65 => 53,  59 => 50,  55 => 48,  53 => 47,  48 => 44,  46 => 43,  44 => 42,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/gin/templates/page/page.html.twig", "C:\\laragon\\www\\fmcrs-website\\web\\themes\\gin\\templates\\page\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 42, "if" => 47);
        static $filters = array("t" => 50, "escape" => 54, "without" => 85);
        static $functions = array("path" => 56);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['t', 'escape', 'without'],
                ['path'],
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
