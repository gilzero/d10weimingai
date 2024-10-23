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

/* core/profiles/demo_umami/themes/umami/templates/components/search/block--search-form-block.html.twig */
class __TwigTemplate_ddd1fad394ff05076e1a2379161558d4 extends Template
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
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 31
        $context["classes"] = ["block", "block-search", "container-inline"];
        // line 37
        yield "
<div class=\"search-iconwrap\">
  <a class=\"search-link\" title=\"";
        // line 39
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to the search page"));
        yield "\" href=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("search.view"));
        yield "\">
    <span class=\"search-icon\" aria-hidden=\"true\">";
        // line 40
        yield from         $this->loadTemplate(($this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath() . "/images/svg/search.svg"), "core/profiles/demo_umami/themes/umami/templates/components/search/block--search-form-block.html.twig", 40)->unwrap()->yield($context);
        yield "</span>
    <span class=\"visually-hidden\">";
        // line 41
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Search"));
        yield "</span>
  </a>
</div>

<div";
        // line 45
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 45), 45, $this->source), "html", null, true);
        yield ">
  ";
        // line 46
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 46, $this->source), "html", null, true);
        yield "
  ";
        // line 47
        if (($context["label"] ?? null)) {
            // line 48
            yield "    <h2";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["visually-hidden"], "method", false, false, true, 48), 48, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 48, $this->source), "html", null, true);
            yield "</h2>
  ";
        }
        // line 50
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 50, $this->source), "html", null, true);
        yield "
  ";
        // line 51
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 54
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "title_prefix", "label", "title_attributes", "title_suffix", "content"]);        yield from [];
    }

    // line 51
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 52
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 52, $this->source), "html", null, true);
        yield "
  ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/profiles/demo_umami/themes/umami/templates/components/search/block--search-form-block.html.twig";
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
        return array (  107 => 52,  100 => 51,  93 => 54,  91 => 51,  86 => 50,  78 => 48,  76 => 47,  72 => 46,  68 => 45,  61 => 41,  57 => 40,  51 => 39,  47 => 37,  45 => 31,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/profiles/demo_umami/themes/umami/templates/components/search/block--search-form-block.html.twig", "/var/www/html/d10.weiming.ai/web/core/profiles/demo_umami/themes/umami/templates/components/search/block--search-form-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 31, "include" => 40, "if" => 47, "block" => 51);
        static $filters = array("t" => 39, "escape" => 45);
        static $functions = array("path" => 39, "active_theme_path" => 40);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include', 'if', 'block'],
                ['t', 'escape'],
                ['path', 'active_theme_path'],
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
