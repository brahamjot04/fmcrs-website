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

/* @edux/template-parts/footer.html.twig */
class __TwigTemplate_757f06bef0379f79a90611dcb4eca94a extends Template
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
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 1)) {
            // line 2
            yield "  ";
            yield from             $this->loadTemplate("@thex/template-parts/footer/footer-top.html.twig", "@edux/template-parts/footer.html.twig", 2)->unwrap()->yield($context);
        }
        // line 4
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_one", [], "any", false, false, true, 4) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_two", [], "any", false, false, true, 4)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_three", [], "any", false, false, true, 4)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_four", [], "any", false, false, true, 4))) {
            // line 5
            yield "  ";
            yield from             $this->loadTemplate("@thex/template-parts/footer/footer-blocks.html.twig", "@edux/template-parts/footer.html.twig", 5)->unwrap()->yield($context);
        }
        // line 7
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_left", [], "any", false, false, true, 7) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_right", [], "any", false, false, true, 7))) {
            // line 8
            yield "  ";
            yield from             $this->loadTemplate("@thex/template-parts/footer/footer-bottom-blocks.html.twig", "@edux/template-parts/footer.html.twig", 8)->unwrap()->yield($context);
        }
        // line 10
        if (($context["all_icons_show"] ?? null)) {
            // line 11
            yield "<div class=\"footer footer-social\">
  <div class=\"container text-center\">
    ";
            // line 13
            yield from             $this->loadTemplate("@edux/template-parts/components/social-icons.html.twig", "@edux/template-parts/footer.html.twig", 13)->unwrap()->yield($context);
            // line 14
            yield "  </div><!-- /container -->
</div>
";
        }
        // line 17
        if ((($context["copyright_text"] ?? null) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_last", [], "any", false, false, true, 17))) {
            // line 18
            yield "  <footer class=\"footer-bottom footer\">
    <div class=\"container\">
      <div class=\"footer-bottom-container\">
        ";
            // line 21
            if (($context["copyright_text"] ?? null)) {
                // line 22
                yield "          ";
                yield from                 $this->loadTemplate("@thex/template-parts/footer/footer-copyright.html.twig", "@edux/template-parts/footer.html.twig", 22)->unwrap()->yield($context);
                // line 23
                yield "        ";
            }
            // line 24
            yield "        ";
            yield from             $this->loadTemplate("@thex/template-parts/footer/footer-bottom-last.html.twig", "@edux/template-parts/footer.html.twig", 24)->unwrap()->yield($context);
            // line 25
            yield "      </div><!-- /footer-bottom-container -->
    </div><!-- /container -->
  </footer><!-- /footer-bottom -->
";
        }
        // line 29
        yield "
";
        // line 30
        if (($context["scrolltotop_on"] ?? null)) {
            // line 31
            yield "  <div class=\"scrolltop\"><i class=\"icon-arrow-up\"></i></div>
";
        }
        // line 33
        yield from         $this->loadTemplate("@edux/template-parts/style.html.twig", "@edux/template-parts/footer.html.twig", 33)->unwrap()->yield($context);
        // line 34
        if (($context["fontawesome_four"] ?? null)) {
            // line 35
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("thex/fontawesome4"), "html", null, true);
            yield "
";
        }
        // line 37
        if (($context["fontawesome_five"] ?? null)) {
            // line 38
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("thex/fontawesome5"), "html", null, true);
            yield "
";
        }
        // line 40
        if (($context["bootstrapicons"] ?? null)) {
            // line 41
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("thex/bootstrap-icons"), "html", null, true);
            yield "
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "all_icons_show", "copyright_text", "scrolltotop_on", "fontawesome_four", "fontawesome_five", "bootstrapicons"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@edux/template-parts/footer.html.twig";
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
        return array (  128 => 41,  126 => 40,  120 => 38,  118 => 37,  112 => 35,  110 => 34,  108 => 33,  104 => 31,  102 => 30,  99 => 29,  93 => 25,  90 => 24,  87 => 23,  84 => 22,  82 => 21,  77 => 18,  75 => 17,  70 => 14,  68 => 13,  64 => 11,  62 => 10,  58 => 8,  56 => 7,  52 => 5,  50 => 4,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@edux/template-parts/footer.html.twig", "C:\\laragon\\www\\fmcrs-website\\web\\themes\\edux\\templates\\template-parts\\footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "include" => 2);
        static $filters = array("escape" => 35);
        static $functions = array("attach_library" => 35);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['escape'],
                ['attach_library'],
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
