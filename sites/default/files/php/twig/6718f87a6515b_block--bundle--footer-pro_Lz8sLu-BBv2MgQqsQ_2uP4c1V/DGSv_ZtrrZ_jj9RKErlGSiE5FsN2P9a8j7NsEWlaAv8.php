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

/* core/profiles/demo_umami/themes/umami/templates/components/footer-promo-block/block--bundle--footer-promo-block.html.twig */
class __TwigTemplate_5951b92a4b9648e9bd38780a12d18959 extends Template
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
        // line 29
        yield "
";
        // line 30
        yield from         $this->loadTemplate("core/profiles/demo_umami/themes/umami/templates/components/footer-promo-block/block--bundle--footer-promo-block.html.twig", "core/profiles/demo_umami/themes/umami/templates/components/footer-promo-block/block--bundle--footer-promo-block.html.twig", 30, "1455277136")->unwrap()->yield(CoreExtension::toArray(["attributes" =>         // line 31
($context["attributes"] ?? null), "content" =>         // line 32
($context["content"] ?? null), "label" =>         // line 33
($context["label"] ?? null), "title_attributes" =>         // line 34
($context["title_attributes"] ?? null), "title_prefix" =>         // line 35
($context["title_prefix"] ?? null), "title_suffix" =>         // line 36
($context["title_suffix"] ?? null)]));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "content", "label", "title_attributes", "title_prefix", "title_suffix"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/profiles/demo_umami/themes/umami/templates/components/footer-promo-block/block--bundle--footer-promo-block.html.twig";
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
        return array (  53 => 36,  52 => 35,  51 => 34,  50 => 33,  49 => 32,  48 => 31,  47 => 30,  44 => 29,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/profiles/demo_umami/themes/umami/templates/components/footer-promo-block/block--bundle--footer-promo-block.html.twig", "/var/www/html/d10.weiming.ai/web/core/profiles/demo_umami/themes/umami/templates/components/footer-promo-block/block--bundle--footer-promo-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("embed" => 30);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['embed'],
                [],
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


/* core/profiles/demo_umami/themes/umami/templates/components/footer-promo-block/block--bundle--footer-promo-block.html.twig */
class __TwigTemplate_5951b92a4b9648e9bd38780a12d18959___1455277136 extends Template
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

        $this->blocks = [
            'image' => [$this, 'block_image'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 30
        return "umami:footer-block";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("umami:footer-block", "core/profiles/demo_umami/themes/umami/templates/components/footer-promo-block/block--bundle--footer-promo-block.html.twig", 30);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content", "title_attributes", "label", "title_prefix", "title_suffix"]);    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_image(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 39
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_media_image", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        yield "
  ";
        yield from [];
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 42
        yield "    ";
        yield from         $this->loadTemplate("core/profiles/demo_umami/themes/umami/templates/components/footer-promo-block/block--bundle--footer-promo-block.html.twig", "core/profiles/demo_umami/themes/umami/templates/components/footer-promo-block/block--bundle--footer-promo-block.html.twig", 42, "1679248462")->unwrap()->yield(CoreExtension::toArray(["attributes" => CoreExtension::getAttribute($this->env, $this->source,         // line 43
($context["title_attributes"] ?? null), "addClass", ["footer-block__title"], "method", false, false, true, 43), "label" => ((        // line 44
($context["label"] ?? null)) ? (($context["label"] ?? null)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 44))), "title_prefix" =>         // line 45
($context["title_prefix"] ?? null), "title_suffix" =>         // line 46
($context["title_suffix"] ?? null)]));
        // line 55
        yield "    ";
        if ( !($context["label"] ?? null)) {
            // line 56
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 56, $this->source), "field_title"), "field_media_image"), "html", null, true);
            yield "
    ";
        } else {
            // line 58
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 58, $this->source), "field_media_image"), "html", null, true);
            yield "
    ";
        }
        // line 60
        yield "  ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/profiles/demo_umami/themes/umami/templates/components/footer-promo-block/block--bundle--footer-promo-block.html.twig";
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
        return array (  200 => 60,  194 => 58,  188 => 56,  185 => 55,  183 => 46,  182 => 45,  181 => 44,  180 => 43,  178 => 42,  171 => 41,  163 => 39,  156 => 38,  144 => 30,  53 => 36,  52 => 35,  51 => 34,  50 => 33,  49 => 32,  48 => 31,  47 => 30,  44 => 29,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/profiles/demo_umami/themes/umami/templates/components/footer-promo-block/block--bundle--footer-promo-block.html.twig", "/var/www/html/d10.weiming.ai/web/core/profiles/demo_umami/themes/umami/templates/components/footer-promo-block/block--bundle--footer-promo-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("extends" => 30, "embed" => 42, "if" => 55);
        static $filters = array("escape" => 39, "without" => 56);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['extends', 'embed', 'if'],
                ['escape', 'without'],
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


/* core/profiles/demo_umami/themes/umami/templates/components/footer-promo-block/block--bundle--footer-promo-block.html.twig */
class __TwigTemplate_5951b92a4b9648e9bd38780a12d18959___1679248462 extends Template
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

        $this->blocks = [
            'title_prefix' => [$this, 'block_title_prefix'],
            'title_suffix' => [$this, 'block_title_suffix'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 42
        return "umami:title";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("umami:title", "core/profiles/demo_umami/themes/umami/templates/components/footer-promo-block/block--bundle--footer-promo-block.html.twig", 42);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["title_prefix", "title_suffix"]);    }

    // line 48
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title_prefix(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 49
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 49, $this->source), "html", null, true);
        yield "
      ";
        yield from [];
    }

    // line 51
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title_suffix(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 52
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 52, $this->source), "html", null, true);
        yield "
      ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/profiles/demo_umami/themes/umami/templates/components/footer-promo-block/block--bundle--footer-promo-block.html.twig";
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
        return array (  324 => 52,  317 => 51,  309 => 49,  302 => 48,  290 => 42,  200 => 60,  194 => 58,  188 => 56,  185 => 55,  183 => 46,  182 => 45,  181 => 44,  180 => 43,  178 => 42,  171 => 41,  163 => 39,  156 => 38,  144 => 30,  53 => 36,  52 => 35,  51 => 34,  50 => 33,  49 => 32,  48 => 31,  47 => 30,  44 => 29,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/profiles/demo_umami/themes/umami/templates/components/footer-promo-block/block--bundle--footer-promo-block.html.twig", "/var/www/html/d10.weiming.ai/web/core/profiles/demo_umami/themes/umami/templates/components/footer-promo-block/block--bundle--footer-promo-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("extends" => 42);
        static $filters = array("escape" => 49);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['extends'],
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
