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

/* themes/bootstrap5/templates/layout/page.html.twig */
class __TwigTemplate_324be5879043f530ef151b5cc6ba352d extends Template
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
        // line 46
        $context["nav_classes"] = ((("navbar navbar-expand-lg" . (((        // line 47
($context["b5_navbar_schema"] ?? null) != "none")) ? ((" navbar-" . $this->sandbox->ensureToStringAllowed(($context["b5_navbar_schema"] ?? null), 47, $this->source))) : (" "))) . (((        // line 48
($context["b5_navbar_schema"] ?? null) != "none")) ? ((((($context["b5_navbar_schema"] ?? null) == "dark")) ? (" text-light") : (" text-dark"))) : (" "))) . (((        // line 49
($context["b5_navbar_bg_schema"] ?? null) != "none")) ? ((" bg-" . $this->sandbox->ensureToStringAllowed(($context["b5_navbar_bg_schema"] ?? null), 49, $this->source))) : (" ")));
        // line 51
        yield "
";
        // line 53
        $context["footer_classes"] = (((" " . (((        // line 54
($context["b5_footer_schema"] ?? null) != "none")) ? ((" footer-" . $this->sandbox->ensureToStringAllowed(($context["b5_footer_schema"] ?? null), 54, $this->source))) : (" "))) . (((        // line 55
($context["b5_footer_schema"] ?? null) != "none")) ? ((((($context["b5_footer_schema"] ?? null) == "dark")) ? (" text-light") : (" text-dark"))) : (" "))) . (((        // line 56
($context["b5_footer_bg_schema"] ?? null) != "none")) ? ((" bg-" . $this->sandbox->ensureToStringAllowed(($context["b5_footer_bg_schema"] ?? null), 56, $this->source))) : (" ")));
        // line 58
        yield "
<header role=\"banner\">
  ";
        // line 60
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        yield "

  ";
        // line 62
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_branding", [], "any", false, false, true, 62) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_main", [], "any", false, false, true, 62)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_additional", [], "any", false, false, true, 62))) {
            // line 63
            yield "  <nav class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nav_classes"] ?? null), 63, $this->source), "html", null, true);
            yield "\">
    <div class=\"";
            // line 64
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b5_top_container"] ?? null), 64, $this->source), "html", null, true);
            yield " d-flex\">
      ";
            // line 65
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_branding", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
            yield "

      ";
            // line 67
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_main", [], "any", false, false, true, 67) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_additional", [], "any", false, false, true, 67))) {
                // line 68
                yield "        <button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
                aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse justify-content-md-end\" id=\"navbarSupportedContent\">
          ";
                // line 75
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_main", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
                yield "
          ";
                // line 76
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_additional", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
                yield "
        </div>
      ";
            }
            // line 79
            yield "    </div>
  </nav>
  ";
        }
        // line 82
        yield "
</header>

<main role=\"main\">
  <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 87
        yield "
  ";
        // line 89
        $context["sidebar_first_classes"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 89) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 89))) ? ("col-12 col-sm-6 col-lg-3") : ("col-12 col-lg-3"));
        // line 91
        yield "
  ";
        // line 93
        $context["sidebar_second_classes"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 93) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 93))) ? ("col-12 col-sm-6 col-lg-3") : ("col-12 col-lg-3"));
        // line 95
        yield "
  ";
        // line 97
        $context["content_classes"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 97) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 97))) ? ("col-12 col-lg-6") : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 97) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 97))) ? ("col-12 col-lg-9") : ("col-12"))));
        // line 99
        yield "

  <div class=\"";
        // line 101
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b5_top_container"] ?? null), 101, $this->source), "html", null, true);
        yield "\">
    ";
        // line 102
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 102)) {
            // line 103
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
            yield "
    ";
        }
        // line 105
        yield "    <div class=\"row g-0\">
      ";
        // line 106
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 106)) {
            // line 107
            yield "        <div class=\"order-2 order-lg-1 ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_classes"] ?? null), 107, $this->source), "html", null, true);
            yield "\">
          ";
            // line 108
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 111
        yield "      <div class=\"order-1 order-lg-2 ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_classes"] ?? null), 111, $this->source), "html", null, true);
        yield "\">
        ";
        // line 112
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
        yield "
      </div>
      ";
        // line 114
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 114)) {
            // line 115
            yield "        <div class=\"order-3 ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_classes"] ?? null), 115, $this->source), "html", null, true);
            yield "\">
          ";
            // line 116
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 119
        yield "    </div>
  </div>

</main>

";
        // line 124
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 124)) {
            // line 125
            yield "<footer role=\"contentinfo\" class=\"mt-auto ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_classes"] ?? null), 125, $this->source), "html", null, true);
            yield "\">
  <div class=\"";
            // line 126
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b5_top_container"] ?? null), 126, $this->source), "html", null, true);
            yield "\">
    ";
            // line 127
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
            yield "
  </div>
</footer>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["b5_navbar_schema", "b5_navbar_bg_schema", "b5_footer_schema", "b5_footer_bg_schema", "page", "b5_top_container"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/bootstrap5/templates/layout/page.html.twig";
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
        return array (  202 => 127,  198 => 126,  193 => 125,  191 => 124,  184 => 119,  178 => 116,  173 => 115,  171 => 114,  166 => 112,  161 => 111,  155 => 108,  150 => 107,  148 => 106,  145 => 105,  139 => 103,  137 => 102,  133 => 101,  129 => 99,  127 => 97,  124 => 95,  122 => 93,  119 => 91,  117 => 89,  114 => 87,  108 => 82,  103 => 79,  97 => 76,  93 => 75,  84 => 68,  82 => 67,  77 => 65,  73 => 64,  68 => 63,  66 => 62,  61 => 60,  57 => 58,  55 => 56,  54 => 55,  53 => 54,  52 => 53,  49 => 51,  47 => 49,  46 => 48,  45 => 47,  44 => 46,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/bootstrap5/templates/layout/page.html.twig", "C:\\laragon\\www\\fmcrs-website\\web\\themes\\bootstrap5\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 46, "if" => 62);
        static $filters = array("escape" => 60);
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
