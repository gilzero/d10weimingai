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

/* core/profiles/demo_umami/themes/umami/templates/components/navigation/menu.html.twig */
class __TwigTemplate_6a122851c3afd22413a824c26705398d extends Template
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
        // line 21
        yield "
";
        // line 22
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 23
        yield "
";
        // line 31
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["menu_name"] ?? null)], 31, $context, $this->getSourceContext()));
        yield " ";
        // line 32
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "menu_name", "menu_level"]);        yield from [];
    }

    // line 33
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__menu_name__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "menu_name" => $__menu_name__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield " ";
            // line 34
            yield "  ";
            $macros["menus"] = $this;
            // line 35
            yield "  ";
            // line 36
            yield "  ";
            // line 37
            $context["menu_classes"] = [("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 38
($context["menu_name"] ?? null), 38, $this->source)))];
            // line 41
            yield "  ";
            // line 42
            yield "  ";
            // line 43
            $context["submenu_classes"] = [(("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 44
($context["menu_name"] ?? null), 44, $this->source))) . "__submenu")];
            // line 47
            yield "  ";
            if (($context["items"] ?? null)) {
                // line 48
                yield "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 49
                    yield "      <ul";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["menu_classes"] ?? null)], "method", false, false, true, 49), 49, $this->source), "html", null, true);
                    yield "> ";
                    // line 50
                    yield "    ";
                } else {
                    // line 51
                    yield "      <ul";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [($context["menu_classes"] ?? null)], "method", false, false, true, 51), "addClass", [($context["submenu_classes"] ?? null)], "method", false, false, true, 51), 51, $this->source), "html", null, true);
                    yield "> ";
                    // line 52
                    yield "    ";
                }
                // line 53
                yield "    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 54
                    yield "      ";
                    // line 55
                    yield "      ";
                    // line 56
                    $context["item_classes"] = [(("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(                    // line 57
($context["menu_name"] ?? null), 57, $this->source))) . "__item"), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 58
$context["item"], "is_expanded", [], "any", false, false, true, 58)) ? ((("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null), 58, $this->source))) . "__item--expanded")) : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 59
$context["item"], "is_collapsed", [], "any", false, false, true, 59)) ? ((("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null), 59, $this->source))) . "__item--collapsed")) : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 60
$context["item"], "in_active_trail", [], "any", false, false, true, 60)) ? ((("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null), 60, $this->source))) . "__item--active-trail")) : (""))];
                    // line 63
                    yield "      ";
                    // line 64
                    yield "      ";
                    // line 65
                    $context["link_classes"] = [(("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(                    // line 66
($context["menu_name"] ?? null), 66, $this->source))) . "__link")];
                    // line 69
                    yield "      <li";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 69), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 69), 69, $this->source), "html", null, true);
                    yield ">";
                    // line 70
                    yield "        ";
                    // line 71
                    yield "        ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,                     // line 73
$context["item"], "title", [], "any", false, false, true, 73), 73, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,                     // line 74
$context["item"], "url", [], "any", false, false, true, 74), 74, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 75
$context["item"], "attributes", [], "any", false, false, true, 75), "removeClass", [($context["item_classes"] ?? null)], "method", false, false, true, 75), "addClass", [($context["link_classes"] ?? null)], "method", false, false, true, 75), 75, $this->source)), "html", null, true);
                    // line 77
                    yield "
        ";
                    // line 78
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 78)) {
                        // line 79
                        yield "          ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 79), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), ($context["menu_name"] ?? null)], 79, $context, $this->getSourceContext()));
                        yield " ";
                        // line 80
                        yield "        ";
                    }
                    // line 81
                    yield "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                yield "    </ul>
  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/profiles/demo_umami/themes/umami/templates/components/navigation/menu.html.twig";
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
        return array (  168 => 83,  161 => 81,  158 => 80,  154 => 79,  152 => 78,  149 => 77,  147 => 75,  146 => 74,  145 => 73,  143 => 71,  141 => 70,  137 => 69,  135 => 66,  134 => 65,  132 => 64,  130 => 63,  128 => 60,  127 => 59,  126 => 58,  125 => 57,  124 => 56,  122 => 55,  120 => 54,  115 => 53,  112 => 52,  108 => 51,  105 => 50,  101 => 49,  98 => 48,  95 => 47,  93 => 44,  92 => 43,  90 => 42,  88 => 41,  86 => 38,  85 => 37,  83 => 36,  81 => 35,  78 => 34,  62 => 33,  55 => 32,  52 => 31,  49 => 23,  47 => 22,  44 => 21,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/profiles/demo_umami/themes/umami/templates/components/navigation/menu.html.twig", "/var/www/html/d10.weiming.ai/web/core/profiles/demo_umami/themes/umami/templates/components/navigation/menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 22, "macro" => 33, "set" => 37, "if" => 47, "for" => 53);
        static $filters = array("clean_class" => 38, "escape" => 49);
        static $functions = array("link" => 72);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'set', 'if', 'for'],
                ['clean_class', 'escape'],
                ['link'],
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
