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

/* themes/dxpr_theme/templates/page.html.twig */
class __TwigTemplate_f1407d3580391104fe5cb4f9857c7627 extends Template
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
            'secondary_header' => [$this, 'block_secondary_header'],
            'navbar' => [$this, 'block_navbar'],
            'highlighted' => [$this, 'block_highlighted'],
            'page_title' => [$this, 'block_page_title'],
            'content_top' => [$this, 'block_content_top'],
            'main' => [$this, 'block_main'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'action_links' => [$this, 'block_action_links'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'content_bottom' => [$this, 'block_content_bottom'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 60
        if ((( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_dth_page_layout", [], "any", false, false, true, 60), "getString", [], "method", false, false, true, 60) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 60), "boxed_layout", [], "any", false, false, true, 60)) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 61
($context["node"] ?? null), "field_dth_page_layout", [], "any", false, false, true, 61), "getString", [], "method", false, false, true, 61) == "boxed"))) {
            // line 62
            yield "<div class=\"dxpr-theme-boxed-container\">
";
        }
        // line 64
        yield "
";
        // line 66
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_header", [], "any", false, false, true, 66)) {
            // line 67
            yield "  ";
            yield from $this->unwrap()->yieldBlock('secondary_header', $context, $blocks);
        }
        // line 82
        yield "
";
        // line 84
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 84) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 84))) {
            // line 85
            yield "  ";
            yield from $this->unwrap()->yieldBlock('navbar', $context, $blocks);
        }
        // line 142
        yield "
<div class=\"wrap-containers\">

";
        // line 146
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 146)) {
            // line 147
            yield "  ";
            yield from $this->unwrap()->yieldBlock('highlighted', $context, $blocks);
        }
        // line 151
        yield "
";
        // line 153
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 153) &&  !(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 153), "page_title_home_hide", [], "any", false, false, true, 153) && ($context["is_front"] ?? null)))) {
            // line 154
            yield "
  ";
            // line 155
            yield from $this->unwrap()->yieldBlock('page_title', $context, $blocks);
        }
        // line 169
        yield "
";
        // line 171
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 171)) {
            // line 172
            yield "  ";
            yield from $this->unwrap()->yieldBlock('content_top', $context, $blocks);
        }
        // line 185
        yield "
";
        // line 187
        yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
        // line 264
        yield "
";
        // line 266
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 266)) {
            // line 267
            yield "  ";
            yield from $this->unwrap()->yieldBlock('content_bottom', $context, $blocks);
        }
        // line 280
        yield "</div>

";
        // line 283
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 283)) {
            // line 284
            yield "  ";
            yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        }
        // line 299
        yield "
";
        // line 300
        if ((( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_dth_page_layout", [], "any", false, false, true, 300), "getString", [], "method", false, false, true, 300) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 300), "boxed_layout", [], "any", false, false, true, 300)) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 301
($context["node"] ?? null), "field_dth_page_layout", [], "any", false, false, true, 301), "getString", [], "method", false, false, true, 301) == "boxed"))) {
            // line 302
            yield "</div><!-- end dxpr-theme-boxed-container -->
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "theme", "page", "is_front", "title_bg_image_path", "page_title_attributes", "content_attributes", "action_links"]);        yield from [];
    }

    // line 67
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_secondary_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 68
        yield "    ";
        $context["container"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 68), "full_width_containers", [], "any", false, false, true, 68), "cnt_secondary_header", [], "any", false, false, true, 68)) ? ("dxpr-theme-fluid") : ("container"));
        // line 69
        yield "    <header id=\"secondary-header\" class=\"dxpr-theme-secondary-header clearfix ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 69), "secondary_header_hide", [], "any", false, false, true, 69), 69, $this->source)), "html", null, true);
        yield "\" role=\"banner\">
      <div class=\"";
        // line 70
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 70, $this->source), "html", null, true);
        yield " secondary-header-container\">
        ";
        // line 71
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 71), "full_width_containers", [], "any", false, false, true, 71), "cnt_secondary_header", [], "any", false, false, true, 71)) {
            // line 72
            yield "          <div class=\"row container-row\"><div class=\"col-sm-12 container-col\">
        ";
        }
        // line 74
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_header", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
        yield "
        ";
        // line 75
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 75), "full_width_containers", [], "any", false, false, true, 75), "cnt_secondary_header", [], "any", false, false, true, 75)) {
            // line 76
            yield "          </div></div>
        ";
        }
        // line 78
        yield "      </div>
    </header>
  ";
        yield from [];
    }

    // line 85
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 86
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 86), "header_position", [], "any", false, false, true, 86)) {
            // line 87
            yield "      ";
            // line 88
            $context["navbar_classes"] = ["navbar dxpr-theme-header dxpr-theme-header--top", ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 90
($context["theme"] ?? null), "settings", [], "any", false, false, true, 90), "navbar_position", [], "any", false, false, true, 90)) ? (("navbar-is-" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 90), "navbar_position", [], "any", false, false, true, 90), 90, $this->source))) : ("")), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 91
($context["theme"] ?? null), "settings", [], "any", false, false, true, 91), "header_side_align", [], "any", false, false, true, 91)];
            // line 94
            yield "    ";
        } else {
            // line 95
            yield "      ";
            // line 96
            $context["navbar_classes"] = ["navbar dxpr-theme-header clearfix", ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 98
($context["theme"] ?? null), "settings", [], "any", false, false, true, 98), "header_position", [], "any", false, false, true, 98)) ? ("dxpr-theme-header--side") : ("dxpr-theme-header--top")), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 99
($context["theme"] ?? null), "settings", [], "any", false, false, true, 99), "navbar_position", [], "any", false, false, true, 99)) ? (("navbar-is-" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 99), "navbar_position", [], "any", false, false, true, 99), 99, $this->source))) : ("")), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 100
($context["theme"] ?? null), "settings", [], "any", false, false, true, 100), "header_top_layout", [], "any", false, false, true, 100)) ? (("dxpr-theme-header--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 100), "header_top_layout", [], "any", false, false, true, 100), 100, $this->source)))) : ("")), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 101
($context["theme"] ?? null), "settings", [], "any", false, false, true, 101), "header_style", [], "any", false, false, true, 101)) ? (("dxpr-theme-header--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 101), "header_style", [], "any", false, false, true, 101), 101, $this->source)))) : ("")), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 102
($context["theme"] ?? null), "settings", [], "any", false, false, true, 102), "menu_hover", [], "any", false, false, true, 102)) ? (("dxpr-theme-header--hover-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 102), "menu_hover", [], "any", false, false, true, 102), 102, $this->source)))) : ("")), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 103
($context["theme"] ?? null), "settings", [], "any", false, false, true, 103), "header_top_fixed", [], "any", false, false, true, 103) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 103), "header_top_sticky", [], "any", false, false, true, 103))) ? ("dxpr-theme-header--sticky") : ("")), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 104
($context["theme"] ?? null), "settings", [], "any", false, false, true, 104), "header_top_fixed", [], "any", false, false, true, 104) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 104), "header_top_sticky", [], "any", false, false, true, 104))) ? ("dxpr-theme-header--fixed") : (""))];
            // line 107
            yield "    ";
        }
        // line 108
        yield "    ";
        $context["mark_menu"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 108), "mark_menu_with_children", [], "any", false, false, true, 108)) ? ("dxpr-theme-menu--has-children") : (""));
        // line 109
        yield "    ";
        $context["navbar_attributes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "removeClass", ["container"], "method", false, false, true, 109), "addClass", [($context["navbar_classes"] ?? null)], "method", false, false, true, 109);
        // line 110
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 110), "header_top_fixed", [], "any", false, false, true, 110) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 110), "header_top_sticky", [], "any", false, false, true, 110))) {
            // line 111
            yield "      ";
            $context["navbar_attributes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "setAttribute", ["data-spy", "affix"], "method", false, false, true, 111), "setAttribute", ["data-offset-top", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 111), "header_top_height_sticky_offset", [], "any", false, false, true, 111)], "method", false, false, true, 111);
            // line 112
            yield "    ";
        }
        // line 113
        yield "    ";
        $context["hamburger_menu"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 113), "hamburger_menu", [], "any", false, false, true, 113)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 113), "hamburger_menu", [], "any", false, false, true, 113)) : ("three-dash"));
        // line 114
        yield "
    <header";
        // line 115
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_attributes"] ?? null), 115, $this->source), "html", null, true);
        yield ">
      ";
        // line 116
        $context["container"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 116), "full_width_containers", [], "any", false, false, true, 116), "cnt_header_nav", [], "any", false, false, true, 116)) ? ("dxpr-theme-fluid") : ("container"));
        // line 117
        yield "      <div class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 117, $this->source), "html", null, true);
        yield " navbar-container\">
        ";
        // line 118
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 118), "full_width_containers", [], "any", false, false, true, 118), "cnt_header_nav", [], "any", false, false, true, 118)) {
            // line 119
            yield "          <div class=\"row container-row\"><div class=\"col-sm-12 container-col\">
        ";
        }
        // line 121
        yield "        <div class=\"navbar-header\">
          ";
        // line 122
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
        yield "
          ";
        // line 124
        yield "          ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 124)) {
            // line 125
            yield "            <a id=\"dxpr-theme-menu-toggle\" href=\"#\" class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hamburger_menu"] ?? null), 125, $this->source), "html", null, true);
            yield "\"><span></span><div class=\"screenreader-text visually-hidden\">Toggle menu</div></a>
          ";
        }
        // line 127
        yield "        </div>

        ";
        // line 130
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 130)) {
            // line 131
            yield "            <nav role=\"navigation\" id=\"dxpr-theme-main-menu\" class=\"dxpr-theme-main-menu ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mark_menu"] ?? null), 131, $this->source), "html", null, true);
            yield "\">
            ";
            // line 132
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
            yield "
            </nav>
        ";
        }
        // line 135
        yield "        ";
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 135), "full_width_containers", [], "any", false, false, true, 135), "cnt_header_nav", [], "any", false, false, true, 135)) {
            // line 136
            yield "          </div></div>
        ";
        }
        // line 138
        yield "      </div>
    </header>
  ";
        yield from [];
    }

    // line 147
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_highlighted(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 148
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
        yield "
  ";
        yield from [];
    }

    // line 155
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 156
        yield "  ";
        if (($context["title_bg_image_path"] ?? null)) {
            // line 157
            yield "    <style>
      #page-title-full-width-container::after{ background-image:url(";
            // line 158
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(($context["title_bg_image_path"] ?? null), 158, $this->source)), "html", null, true);
            yield ");}
    </style>
  ";
        }
        // line 161
        yield "    <div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_title_attributes"] ?? null), 161, $this->source), "html", null, true);
        yield " class=\"page-title-full-width-container\" id=\"page-title-full-width-container\">
    ";
        // line 162
        $context["container"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 162), "full_width_containers", [], "any", false, false, true, 162), "cnt_page_title", [], "any", false, false, true, 162)) ? ("dxpr-theme-fluid") : ("container"));
        // line 163
        yield "      <header role=\"banner\" id=\"page-title\" class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 163, $this->source), "html", null, true);
        yield " page-title-container\">
        ";
        // line 164
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 164), 164, $this->source), "html", null, true);
        yield "
      </header>
    </div>
  ";
        yield from [];
    }

    // line 172
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_top(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 173
        yield "    ";
        $context["container"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 173), "full_width_containers", [], "any", false, false, true, 173), "cnt_content_top", [], "any", false, false, true, 173)) ? ("dxpr-theme-fluid") : ("container"));
        // line 174
        yield "    <div class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 174, $this->source), "html", null, true);
        yield " content-top-container\">
      ";
        // line 175
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 175), "full_width_containers", [], "any", false, false, true, 175), "cnt_content_top", [], "any", false, false, true, 175)) {
            // line 176
            yield "      <div class=\"row container-row\"><div class=\"col-sm-12 container-col\">
      ";
        }
        // line 178
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 178), 178, $this->source), "html", null, true);
        yield "
      ";
        // line 179
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 179), "full_width_containers", [], "any", false, false, true, 179), "cnt_content_top", [], "any", false, false, true, 179)) {
            // line 180
            yield "      </div></div>
      ";
        }
        // line 182
        yield "    </div>
  ";
        yield from [];
    }

    // line 187
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 188
        yield "  ";
        $context["container"] = ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 188), "full_width_containers", [], "any", false, false, true, 188), "cnt_content", [], "any", false, false, true, 188) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 189
($context["node"] ?? null), "field_dth_main_content_width", [], "any", false, false, true, 189), "getString", [], "method", false, false, true, 189) == "dxpr-theme-util-full-width-content")) || (((        // line 190
($context["node"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 190), "full_width_content_types", [], "any", false, false, true, 190), CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "getType", [], "any", false, false, true, 190), [], "any", false, false, true, 190)) &&  !Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 191
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 191), 191, $this->source))))) &&  !Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 192
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 192), 192, $this->source))))))) ? ("") : ("container"));
        // line 193
        yield "  <div role=\"main\" class=\"main-container ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 193, $this->source), "html", null, true);
        yield " js-quickedit-main-content clearfix\">
    ";
        // line 194
        if ((($context["container"] ?? null) != "")) {
            // line 195
            yield "    <div class=\"row\">
    ";
        }
        // line 197
        yield "      ";
        // line 198
        yield "      ";
        if (Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 198))))) {
            // line 199
            yield "        ";
            yield from $this->unwrap()->yieldBlock('sidebar_first', $context, $blocks);
            // line 204
            yield "      ";
        }
        // line 205
        yield "
      ";
        // line 207
        yield "      ";
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_dth_main_content_width", [], "any", false, false, true, 207), "getString", [], "method", false, false, true, 207)) {
            // line 208
            yield "        ";
            // line 209
            $context["content_classes"] = [(((Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,             // line 210
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 210), 210, $this->source)))) && Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 210), 210, $this->source)))))) ? ("col-sm-6") : ("")), (((Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,             // line 211
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 211), 211, $this->source)))) && Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 211), 211, $this->source))))))) ? ("col-sm-9") : ("")), (((Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,             // line 212
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 212), 212, $this->source)))) && Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 212), 212, $this->source))))))) ? ("col-sm-9") : ("")), (((((            // line 213
($context["container"] ?? null) != "") && Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 213), 213, $this->source)))))) && Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 213), 213, $this->source))))))) ? ("col-sm-12") : (""))];
            // line 216
            yield "      ";
        } else {
            // line 217
            yield "        ";
            $context["col"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_dth_main_content_width", [], "any", false, false, true, 217), "getString", [], "method", false, false, true, 217);
            // line 218
            yield "        ";
            // line 219
            $context["content_classes"] = [(((            // line 220
($context["col"] ?? null) == "dxpr-theme-util-content-center-4-col")) ? ("col-md-4 col-md-offset-4") : ("")), (((            // line 221
($context["col"] ?? null) == "dxpr-theme-util-content-center-6-col")) ? ("col-md-6 col-md-offset-3") : ("")), (((            // line 222
($context["col"] ?? null) == "dxpr-theme-util-content-center-8-col")) ? ("col-md-8 col-md-offset-2") : ("")), (((            // line 223
($context["col"] ?? null) == "dxpr-theme-util-content-center-10-col")) ? ("col-md-10 col-md-offset-1") : (""))];
            // line 226
            yield "      ";
        }
        // line 227
        yield "
      <section";
        // line 228
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [($context["content_classes"] ?? null)], "method", false, false, true, 228), 228, $this->source), "html", null, true);
        yield ">

        ";
        // line 231
        yield "        ";
        if (($context["action_links"] ?? null)) {
            // line 232
            yield "          ";
            yield from $this->unwrap()->yieldBlock('action_links', $context, $blocks);
            // line 235
            yield "        ";
        }
        // line 236
        yield "
        ";
        // line 238
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 238)) {
            // line 239
            yield "          ";
            yield from $this->unwrap()->yieldBlock('help', $context, $blocks);
            // line 242
            yield "        ";
        }
        // line 243
        yield "
        ";
        // line 245
        yield "        ";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 249
        yield "      </section>

      ";
        // line 252
        yield "      ";
        if (Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 252))))) {
            // line 253
            yield "        ";
            yield from $this->unwrap()->yieldBlock('sidebar_second', $context, $blocks);
            // line 258
            yield "      ";
        }
        // line 259
        yield "    ";
        if ((($context["container"] ?? null) != "")) {
            // line 260
            yield "    </div><!-- end .ow -->
    ";
        }
        // line 262
        yield "  </div><!-- end main-container -->
";
        yield from [];
    }

    // line 199
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_first(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 200
        yield "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 201
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 201), 201, $this->source), "html", null, true);
        yield "
          </aside>
        ";
        yield from [];
    }

    // line 232
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_action_links(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 233
        yield "            <ul class=\"action-links\" style=\"border: 2px dashed blue\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 233, $this->source), "html", null, true);
        yield "</ul>
          ";
        yield from [];
    }

    // line 239
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_help(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 240
        yield "            ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 240), 240, $this->source), "html", null, true);
        yield "
          ";
        yield from [];
    }

    // line 245
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 246
        yield "          <a id=\"main-content\"></a>
          ";
        // line 247
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 247), 247, $this->source), "html", null, true);
        yield "
        ";
        yield from [];
    }

    // line 253
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_second(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 254
        yield "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 255
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 255), 255, $this->source), "html", null, true);
        yield "
          </aside>
        ";
        yield from [];
    }

    // line 267
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_bottom(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 268
        yield "    ";
        $context["container"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 268), "full_width_containers", [], "any", false, false, true, 268), "cnt_content_bottom", [], "any", false, false, true, 268)) ? ("dxpr-theme-fluid") : ("container"));
        // line 269
        yield "    <div class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 269, $this->source), "html", null, true);
        yield " content-bottom-container\">
      ";
        // line 270
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 270), "full_width_containers", [], "any", false, false, true, 270), "cnt_content_bottom", [], "any", false, false, true, 270)) {
            // line 271
            yield "      <div class=\"row container-row\"><div class=\"col-sm-12 container-col\">
      ";
        }
        // line 273
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 273), 273, $this->source), "html", null, true);
        yield "
      ";
        // line 274
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 274), "full_width_containers", [], "any", false, false, true, 274), "cnt_content_bottom", [], "any", false, false, true, 274)) {
            // line 275
            yield "      </div></div>
      ";
        }
        // line 277
        yield "    </div>
  ";
        yield from [];
    }

    // line 284
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 285
        yield "    <footer class=\"dxpr-theme-footer clearfix\" role=\"contentinfo\">
      ";
        // line 286
        $context["container"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 286), "full_width_containers", [], "any", false, false, true, 286), "cnt_footer", [], "any", false, false, true, 286)) ? ("dxpr-theme-fluid") : ("container"));
        // line 287
        yield "      <div class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 287, $this->source), "html", null, true);
        yield " footer-container\">
        ";
        // line 288
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 288), "full_width_containers", [], "any", false, false, true, 288), "cnt_footer", [], "any", false, false, true, 288)) {
            // line 289
            yield "        <div class=\"row container-row\"><div class=\"col-sm-12 container-col\">
        ";
        }
        // line 291
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 291), 291, $this->source), "html", null, true);
        yield "
        ";
        // line 292
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 292), "full_width_containers", [], "any", false, false, true, 292), "cnt_footer", [], "any", false, false, true, 292)) {
            // line 293
            yield "        </div></div>
        ";
        }
        // line 295
        yield "      </div>
    </footer>
  ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/dxpr_theme/templates/page.html.twig";
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
        return array (  689 => 295,  685 => 293,  683 => 292,  678 => 291,  674 => 289,  672 => 288,  667 => 287,  665 => 286,  662 => 285,  655 => 284,  649 => 277,  645 => 275,  643 => 274,  638 => 273,  634 => 271,  632 => 270,  627 => 269,  624 => 268,  617 => 267,  609 => 255,  606 => 254,  599 => 253,  592 => 247,  589 => 246,  582 => 245,  574 => 240,  567 => 239,  559 => 233,  552 => 232,  544 => 201,  541 => 200,  534 => 199,  528 => 262,  524 => 260,  521 => 259,  518 => 258,  515 => 253,  512 => 252,  508 => 249,  505 => 245,  502 => 243,  499 => 242,  496 => 239,  493 => 238,  490 => 236,  487 => 235,  484 => 232,  481 => 231,  476 => 228,  473 => 227,  470 => 226,  468 => 223,  467 => 222,  466 => 221,  465 => 220,  464 => 219,  462 => 218,  459 => 217,  456 => 216,  454 => 213,  453 => 212,  452 => 211,  451 => 210,  450 => 209,  448 => 208,  445 => 207,  442 => 205,  439 => 204,  436 => 199,  433 => 198,  431 => 197,  427 => 195,  425 => 194,  420 => 193,  418 => 192,  417 => 191,  416 => 190,  415 => 189,  413 => 188,  406 => 187,  400 => 182,  396 => 180,  394 => 179,  389 => 178,  385 => 176,  383 => 175,  378 => 174,  375 => 173,  368 => 172,  359 => 164,  354 => 163,  352 => 162,  347 => 161,  341 => 158,  338 => 157,  335 => 156,  328 => 155,  320 => 148,  313 => 147,  306 => 138,  302 => 136,  299 => 135,  293 => 132,  288 => 131,  285 => 130,  281 => 127,  275 => 125,  272 => 124,  268 => 122,  265 => 121,  261 => 119,  259 => 118,  254 => 117,  252 => 116,  248 => 115,  245 => 114,  242 => 113,  239 => 112,  236 => 111,  233 => 110,  230 => 109,  227 => 108,  224 => 107,  222 => 104,  221 => 103,  220 => 102,  219 => 101,  218 => 100,  217 => 99,  216 => 98,  215 => 96,  213 => 95,  210 => 94,  208 => 91,  207 => 90,  206 => 88,  204 => 87,  201 => 86,  194 => 85,  187 => 78,  183 => 76,  181 => 75,  176 => 74,  172 => 72,  170 => 71,  166 => 70,  161 => 69,  158 => 68,  151 => 67,  143 => 302,  141 => 301,  140 => 300,  137 => 299,  133 => 284,  131 => 283,  127 => 280,  123 => 267,  121 => 266,  118 => 264,  116 => 187,  113 => 185,  109 => 172,  107 => 171,  104 => 169,  101 => 155,  98 => 154,  96 => 153,  93 => 151,  89 => 147,  87 => 146,  82 => 142,  78 => 85,  76 => 84,  73 => 82,  69 => 67,  67 => 66,  64 => 64,  60 => 62,  58 => 61,  57 => 60,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/dxpr_theme/templates/page.html.twig", "C:\\laragon\\www\\fmcrs-website\\web\\themes\\dxpr_theme\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 60, "block" => 67, "set" => 68);
        static $filters = array("escape" => 69, "clean_class" => 69, "trim" => 191, "striptags" => 191, "render" => 191);
        static $functions = array("file_url" => 158);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block', 'set'],
                ['escape', 'clean_class', 'trim', 'striptags', 'render'],
                ['file_url'],
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
