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

/* @gin/admin/entity-add-list.html.twig */
class __TwigTemplate_9648bc0da4028479d7a9c252400afa92 extends Template
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
        // line 19
        $context["item_classes"] = ["admin-item"];
        // line 23
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["bundles"] ?? null))) {
            // line 24
            yield "  <div class=\"panel gin-layer-wrapper\">
    ";
            // line 25
            if (($context["title"] ?? null)) {
                // line 26
                yield "      <h3 class=\"panel__title\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 26, $this->source), "html", null, true);
                yield "</h3>
    ";
            }
            // line 28
            yield "
    <div";
            // line 29
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["admin-list", "panel__content", "gin-layer-wrapper"], "method", false, false, true, 29), 29, $this->source), "html", null, true);
            yield ">
      ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["bundles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["bundle"]) {
                // line 31
                yield "        ";
                // line 35
                yield "        ";
                $context["bundle_attributes"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bundle"], "add_link", [], "any", false, false, true, 35), "url", [], "any", false, false, true, 35), "getOption", ["attributes"], "method", false, false, true, 35)) ?: ([]));
                // line 36
                yield "        ";
                $context["link_attributes"] = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute($this->sandbox->ensureToStringAllowed(($context["bundle_attributes"] ?? null), 36, $this->source)), "addClass", ["admin-item__link"], "method", false, false, true, 36);
                // line 37
                yield "        ";
                $context["description_id"] = (\Drupal\Component\Utility\Html::getId($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bundle"], "add_link", [], "any", false, false, true, 37), "text", [], "any", false, false, true, 37), 37, $this->source)) . "-desc");
                // line 38
                yield "        <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["class" => ($context["item_classes"] ?? null)]), "html", null, true);
                yield ">
          <a href=\"";
                // line 39
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bundle"], "add_link", [], "any", false, false, true, 39), "url", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bundle"], "add_link", [], "any", false, false, true, 39), "text", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                yield "\" ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_attributes"] ?? null), 39, $this->source), "html", null, true);
                yield "></a>
          <div class=\"admin-item__title\"";
                // line 40
                if (CoreExtension::getAttribute($this->env, $this->source, $context["bundle"], "description", [], "any", false, false, true, 40)) {
                    yield " aria-details=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description_id"] ?? null), 40, $this->source), "html", null, true);
                    yield "\"";
                }
                yield ">
            ";
                // line 41
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bundle"], "add_link", [], "any", false, false, true, 41), "text", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                yield "
          </div>
          ";
                // line 44
                yield "          ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["bundle"], "description", [], "any", false, false, true, 44)) {
                    // line 45
                    yield "            <div class=\"admin-item__description\" id=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description_id"] ?? null), 45, $this->source), "html", null, true);
                    yield "\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["bundle"], "description", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
                    yield "</div>
          ";
                }
                // line 47
                yield "        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['bundle'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            yield "    </div>
  </div>
";
        } elseif ( !Twig\Extension\CoreExtension::testEmpty(        // line 51
($context["add_bundle_message"] ?? null))) {
            // line 52
            yield "  <p>
    ";
            // line 53
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["add_bundle_message"] ?? null), 53, $this->source), "html", null, true);
            yield "
  </p>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["bundles", "title", "attributes", "add_bundle_message"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@gin/admin/entity-add-list.html.twig";
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
        return array (  134 => 53,  131 => 52,  129 => 51,  125 => 49,  118 => 47,  110 => 45,  107 => 44,  102 => 41,  94 => 40,  86 => 39,  81 => 38,  78 => 37,  75 => 36,  72 => 35,  70 => 31,  66 => 30,  62 => 29,  59 => 28,  53 => 26,  51 => 25,  48 => 24,  46 => 23,  44 => 19,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@gin/admin/entity-add-list.html.twig", "C:\\laragon\\www\\fmcrs-website\\web\\themes\\gin\\templates\\admin\\entity-add-list.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 19, "if" => 23, "for" => 30);
        static $filters = array("escape" => 26, "clean_id" => 37);
        static $functions = array("create_attribute" => 36);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'clean_id'],
                ['create_attribute'],
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
