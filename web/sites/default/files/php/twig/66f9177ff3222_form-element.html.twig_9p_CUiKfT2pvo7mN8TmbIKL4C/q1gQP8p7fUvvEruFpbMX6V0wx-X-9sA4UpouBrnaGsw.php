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

/* themes/bootstrap/templates/form/form-element.html.twig */
class __TwigTemplate_6c55a92e2b8de71548bb332cf03fb9cd extends Template
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
        // line 47
        yield "
";
        // line 49
        $context["label_attributes"] = ((($context["label_attributes"] ?? null)) ? (($context["label_attributes"] ?? null)) : ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 51
        yield "
";
        // line 52
        if ((($context["type"] ?? null) == "checkbox")) {
            // line 53
            yield "  ";
            $context["wrapperclass"] = (((($context["checkbox_style"] ?? null) != "form-button")) ? ("form-check") : (""));
            // line 54
            yield "  ";
            $context["labelclass"] = (((($context["checkbox_style"] ?? null) == "form-button")) ? ("btn btn-outline-primary") : ("form-check-label"));
            // line 55
            yield "  ";
            $context["inputclass"] = (((($context["checkbox_style"] ?? null) == "form-button")) ? ("btn-check") : ("form-check-input"));
        }
        // line 57
        yield "
";
        // line 58
        if ((($context["type"] ?? null) == "radio")) {
            // line 59
            yield "  ";
            $context["wrapperclass"] = (((($context["checkbox_style"] ?? null) != "form-button")) ? ("form-check") : (""));
            // line 60
            yield "  ";
            $context["labelclass"] = (((($context["checkbox_style"] ?? null) == "form-button")) ? ("btn btn-outline-primary") : ("form-check-label"));
            // line 61
            yield "  ";
            $context["inputclass"] = (((($context["checkbox_style"] ?? null) == "form-button")) ? ("btn-check") : ("form-check-input"));
        }
        // line 63
        yield "
";
        // line 65
        $context["classes"] = ["js-form-item", ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 67
($context["type"] ?? null), 67, $this->source))), ((CoreExtension::inFilter(        // line 68
($context["type"] ?? null), ["checkbox", "radio"])) ? (\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 68, $this->source))) : (("form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 68, $this->source))))), ((CoreExtension::inFilter(        // line 69
($context["type"] ?? null), ["checkbox", "radio"])) ? (($context["wrapperclass"] ?? null)) : ("")), (((        // line 70
($context["checkbox_style"] ?? null) == "form-switch")) ? ("form-switch") : ("")), ((CoreExtension::inFilter(        // line 71
($context["type"] ?? null), ["checkbox"])) ? ("mb-3") : ("")), ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 72
($context["name"] ?? null), 72, $this->source))), ("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 73
($context["name"] ?? null), 73, $this->source))), ((!CoreExtension::inFilter(        // line 74
($context["title_display"] ?? null), ["after", "before"])) ? ("form-no-label") : ("")), (((        // line 75
($context["disabled"] ?? null) == "disabled")) ? ("disabled") : ("")), ((        // line 76
($context["errors"] ?? null)) ? ("has-error") : (""))];
        // line 79
        yield "
";
        // line 80
        if ((($context["title_display"] ?? null) == "invisible")) {
            // line 81
            yield "  ";
            if (array_key_exists("labelclass", $context)) {
                // line 82
                yield "    ";
                $context["labelclass"] = ($this->sandbox->ensureToStringAllowed(($context["labelclass"] ?? null), 82, $this->source) . " visually-hidden");
                // line 83
                yield "  ";
            } else {
                // line 84
                yield "    ";
                $context["labelclass"] = "visually-hidden";
                // line 85
                yield "  ";
            }
        }
        // line 87
        yield "
";
        // line 89
        $context["description_classes"] = ["description", "text-muted", (((        // line 92
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 95
        if (CoreExtension::inFilter(($context["type"] ?? null), ["checkbox", "radio"])) {
            // line 96
            yield "  <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 96), 96, $this->source), "html", null, true);
            yield ">
    ";
            // line 97
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["prefix"] ?? null))) {
                // line 98
                yield "      <span class=\"field-prefix\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 98, $this->source), "html", null, true);
                yield "</span>
    ";
            }
            // line 100
            yield "    ";
            if (((($context["description_display"] ?? null) == "before") && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 100))) {
                // line 101
                yield "      <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
                yield ">
        ";
                // line 102
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
                yield "
      </div>
    ";
            }
            // line 105
            yield "    ";
            if (CoreExtension::inFilter(($context["label_display"] ?? null), ["before", "invisible"])) {
                // line 106
                yield "      <label ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["label_attributes"] ?? null), "addClass", [($context["labelclass"] ?? null)], "method", false, false, true, 106), "setAttribute", ["for", CoreExtension::getAttribute($this->env, $this->source, ($context["input_attributes"] ?? null), "id", [], "any", false, false, true, 106)], "method", false, false, true, 106), 106, $this->source), "html", null, true);
                yield ">
        ";
                // line 107
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["input_title"] ?? null), 107, $this->source));
                yield "
      </label>
    ";
            }
            // line 110
            yield "    ";
            if ((($context["checkbox_style"] ?? null) == "form-button")) {
                // line 111
                yield "      <input";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["input_attributes"] ?? null), "addClass", [($context["inputclass"] ?? null)], "method", false, false, true, 111), "setAttribute", ["autocomplete", "off"], "method", false, false, true, 111), 111, $this->source), "html", null, true);
                yield ">
    ";
            } else {
                // line 113
                yield "      <input";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["input_attributes"] ?? null), "addClass", [($context["inputclass"] ?? null)], "method", false, false, true, 113), 113, $this->source), "html", null, true);
                yield ">
    ";
            }
            // line 115
            yield "    ";
            if ((($context["label_display"] ?? null) == "after")) {
                // line 116
                yield "      <label ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["label_attributes"] ?? null), "addClass", [($context["labelclass"] ?? null)], "method", false, false, true, 116), "setAttribute", ["for", CoreExtension::getAttribute($this->env, $this->source, ($context["input_attributes"] ?? null), "id", [], "any", false, false, true, 116)], "method", false, false, true, 116), 116, $this->source), "html", null, true);
                yield ">
        ";
                // line 117
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["input_title"] ?? null), 117, $this->source));
                yield "
      </label>
    ";
            }
            // line 120
            yield "    ";
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["suffix"] ?? null))) {
                // line 121
                yield "      <span class=\"field-suffix\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 121, $this->source), "html", null, true);
                yield "</span>
    ";
            }
            // line 123
            yield "    ";
            if (($context["errors"] ?? null)) {
                // line 124
                yield "      <div class=\"invalid-feedback form-item--error-message\">
        ";
                // line 125
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 125, $this->source), "html", null, true);
                yield "
      </div>
    ";
            }
            // line 128
            yield "    ";
            if ((CoreExtension::inFilter(($context["description_display"] ?? null), ["after", "invisible"]) && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 128))) {
                // line 129
                yield "      <small";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 129), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 129), 129, $this->source), "html", null, true);
                yield ">
        ";
                // line 130
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
                yield "
      </small>
    ";
            }
            // line 133
            yield "  </div>
";
        } else {
            // line 135
            yield "  <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null), ((!CoreExtension::inFilter(($context["type"] ?? null), ["date", "time"])) ? ("mb-3") : ("")), ((($context["float_label"] ?? null)) ? ("form-floating") : (""))], "method", false, false, true, 135), 135, $this->source), "html", null, true);
            yield ">
    ";
            // line 136
            if (CoreExtension::inFilter(($context["label_display"] ?? null), ["before", "invisible"])) {
                // line 137
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 137, $this->source), "html", null, true);
                yield "
    ";
            }
            // line 139
            yield "    ";
            if (( !Twig\Extension\CoreExtension::testEmpty(($context["prefix"] ?? null)) ||  !Twig\Extension\CoreExtension::testEmpty(($context["suffix"] ?? null)))) {
                // line 140
                yield "      <div class=\"input-group";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["errors"] ?? null)) ? (" is-invalid") : ("")));
                yield "\">
    ";
            }
            // line 142
            yield "    ";
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["prefix"] ?? null))) {
                // line 143
                yield "      <span class=\"input-group-text\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 143, $this->source), "html", null, true);
                yield "</span>
    ";
            }
            // line 145
            yield "    ";
            if (((($context["description_display"] ?? null) == "before") && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 145))) {
                // line 146
                yield "      <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 146), 146, $this->source), "html", null, true);
                yield ">
        ";
                // line 147
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 147), 147, $this->source), "html", null, true);
                yield "
      </div>
    ";
            }
            // line 150
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 150, $this->source), "html", null, true);
            yield "
    ";
            // line 151
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["suffix"] ?? null))) {
                // line 152
                yield "      <span class=\"input-group-text\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 152, $this->source), "html", null, true);
                yield "</span>
    ";
            }
            // line 154
            yield "    ";
            if (( !Twig\Extension\CoreExtension::testEmpty(($context["prefix"] ?? null)) ||  !Twig\Extension\CoreExtension::testEmpty(($context["suffix"] ?? null)))) {
                // line 155
                yield "      </div>
    ";
            }
            // line 157
            yield "    ";
            if ((($context["label_display"] ?? null) == "after")) {
                // line 158
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 158, $this->source), "html", null, true);
                yield "
    ";
            }
            // line 160
            yield "    ";
            if (($context["errors"] ?? null)) {
                // line 161
                yield "      <div class=\"invalid-feedback form-item--error-message\">
        ";
                // line 162
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 162, $this->source), "html", null, true);
                yield "
      </div>
    ";
            }
            // line 165
            yield "    ";
            if ((CoreExtension::inFilter(($context["description_display"] ?? null), ["after", "invisible"]) && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 165))) {
                // line 166
                yield "      <small";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 166), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 166), 166, $this->source), "html", null, true);
                yield ">
        ";
                // line 167
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 167), 167, $this->source), "html", null, true);
                yield "
      </small>
    ";
            }
            // line 170
            yield "  </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["type", "checkbox_style", "name", "title_display", "disabled", "errors", "description_display", "attributes", "prefix", "description", "label_display", "input_attributes", "input_title", "suffix", "float_label", "label", "children"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/bootstrap/templates/form/form-element.html.twig";
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
        return array (  332 => 170,  326 => 167,  321 => 166,  318 => 165,  312 => 162,  309 => 161,  306 => 160,  300 => 158,  297 => 157,  293 => 155,  290 => 154,  284 => 152,  282 => 151,  277 => 150,  271 => 147,  266 => 146,  263 => 145,  257 => 143,  254 => 142,  248 => 140,  245 => 139,  239 => 137,  237 => 136,  232 => 135,  228 => 133,  222 => 130,  217 => 129,  214 => 128,  208 => 125,  205 => 124,  202 => 123,  196 => 121,  193 => 120,  187 => 117,  182 => 116,  179 => 115,  173 => 113,  167 => 111,  164 => 110,  158 => 107,  153 => 106,  150 => 105,  144 => 102,  139 => 101,  136 => 100,  130 => 98,  128 => 97,  123 => 96,  121 => 95,  119 => 92,  118 => 89,  115 => 87,  111 => 85,  108 => 84,  105 => 83,  102 => 82,  99 => 81,  97 => 80,  94 => 79,  92 => 76,  91 => 75,  90 => 74,  89 => 73,  88 => 72,  87 => 71,  86 => 70,  85 => 69,  84 => 68,  83 => 67,  82 => 65,  79 => 63,  75 => 61,  72 => 60,  69 => 59,  67 => 58,  64 => 57,  60 => 55,  57 => 54,  54 => 53,  52 => 52,  49 => 51,  47 => 49,  44 => 47,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/bootstrap/templates/form/form-element.html.twig", "C:\\laragon\\www\\fmcrs-website\\web\\themes\\bootstrap\\templates\\form\\form-element.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 49, "if" => 52);
        static $filters = array("clean_class" => 67, "escape" => 96, "raw" => 107);
        static $functions = array("create_attribute" => 49);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'raw'],
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
