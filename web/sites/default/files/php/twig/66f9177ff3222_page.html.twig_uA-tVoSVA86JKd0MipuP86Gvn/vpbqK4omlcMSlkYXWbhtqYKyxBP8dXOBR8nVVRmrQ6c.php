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

/* themes/edux/templates/layout/page.html.twig */
class __TwigTemplate_0319f4dd30feda44555e33bce84ebbf9 extends Template
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
        // line 1
        yield from         $this->loadTemplate("@edux/template-parts/header/header.html.twig", "themes/edux/templates/layout/page.html.twig", 1)->unwrap()->yield($context);
        // line 2
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "page_header", [], "any", false, false, true, 2)) {
            // line 3
            yield "  ";
            yield from             $this->loadTemplate("@thex/template-parts/header/header-page.html.twig", "themes/edux/templates/layout/page.html.twig", 3)->unwrap()->yield($context);
        }
        // line 5
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 5)) {
            // line 6
            yield "  ";
            yield from             $this->loadTemplate("@thex/template-parts/highlighted.html.twig", "themes/edux/templates/layout/page.html.twig", 6)->unwrap()->yield($context);
        }
        // line 8
        yield "<div class=\"main-wrapper\">
  <div class=\"container\">
    <div class=\"main-container\">
      <main id=\"main\" class=\"main-content\">
        <a id=\"main-content\" tabindex=\"-1\"></a>
        ";
        // line 13
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 13)) {
            // line 14
            yield "          ";
            yield from             $this->loadTemplate("@thex/template-parts/content-parts/content_top.html.twig", "themes/edux/templates/layout/page.html.twig", 14)->unwrap()->yield($context);
            // line 15
            yield "        ";
        }
        // line 16
        yield "        <div class=\"node-content\">
          ";
        // line 17
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        yield "
        </div>
        ";
        // line 19
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 19)) {
            // line 20
            yield "          ";
            yield from             $this->loadTemplate("@thex/template-parts/content-parts/content_bottom.html.twig", "themes/edux/templates/layout/page.html.twig", 20)->unwrap()->yield($context);
            // line 21
            yield "        ";
        }
        // line 22
        yield "      </main>
    ";
        // line 23
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 23)) {
            // line 24
            yield "      ";
            yield from             $this->loadTemplate("@thex/template-parts/sidebar/sidebar_left.html.twig", "themes/edux/templates/layout/page.html.twig", 24)->unwrap()->yield($context);
            // line 25
            yield "    ";
        }
        // line 26
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 26)) {
            // line 27
            yield "      ";
            yield from             $this->loadTemplate("@thex/template-parts/sidebar/sidebar_right.html.twig", "themes/edux/templates/layout/page.html.twig", 27)->unwrap()->yield($context);
            // line 28
            yield "    ";
        }
        // line 29
        yield "    </div><!--/main-container -->
  </div><!--/container -->
</div><!--/main-wrapper -->
";
        // line 32
        yield from         $this->loadTemplate("@edux/template-parts/footer.html.twig", "themes/edux/templates/layout/page.html.twig", 32)->unwrap()->yield($context);
        // line 33
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/edux/templates/layout/page.html.twig";
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
        return array (  116 => 33,  114 => 32,  109 => 29,  106 => 28,  103 => 27,  100 => 26,  97 => 25,  94 => 24,  92 => 23,  89 => 22,  86 => 21,  83 => 20,  81 => 19,  76 => 17,  73 => 16,  70 => 15,  67 => 14,  65 => 13,  58 => 8,  54 => 6,  52 => 5,  48 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/edux/templates/layout/page.html.twig", "C:\\laragon\\www\\fmcrs-website\\web\\themes\\edux\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 1, "if" => 2);
        static $filters = array("escape" => 17);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
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
