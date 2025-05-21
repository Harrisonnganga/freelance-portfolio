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

/* themes/custom/portfolio/templates/page.html.twig */
class __TwigTemplate_f6fe97661decd01093d936da9b4b4cd1 extends Template
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
        yield "<html lang=\"en\"> 
<head> 
   <meta charset=\"UTF-8\"> 
   <title>";
        // line 4
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["head_title"] ?? null), "html", null, true);
        yield "</title> 
   ";
        // line 5
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("portfolio/global-styling"), "html", null, true);
        yield "
</head> 
<body> 
   <header>
       <div class=\"container\">
           ";
        // line 10
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero_image", [], "any", false, false, true, 10)) {
            yield " 
               <div class=\"hero\"> 
                   <img src=\"";
            // line 12
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero_image", [], "any", false, false, true, 12), "html", null, true);
            yield "\" alt=\"Hero Image\" class=\"img-fluid\"> 
               </div> 
           ";
        }
        // line 14
        yield " 
           ";
        // line 15
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 15), "html", null, true);
        yield " 
       </div>
   </header> 

   <main> 
       ";
        // line 20
        if (($context["is_front"] ?? null)) {
            yield " 
           <header class=\"content-header-hero-image\"> 
               <div class=\"layout-container\"> 
                   ";
            // line 23
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 23), "html", null, true);
            yield " 
                   ";
            // line 24
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "pre_content", [], "any", false, false, true, 24), "html", null, true);
            yield " 
               </div> 
           </header> 
       ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 27
($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 27)) {
            yield " 
           <header class=\"content-header clearfix\"> 
               <div class=\"layout-container\"> 
                   ";
            // line 30
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 30), "html", null, true);
            yield " 
               </div> 
           </header> 
       ";
        }
        // line 33
        yield " 

       <div class=\"layout-container\"> 
           ";
        // line 36
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "pre_content", [], "any", false, false, true, 36), "html", null, true);
        yield " 
           <div class=\"page-content clearfix\"> 
               ";
        // line 38
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 38), "html", null, true);
        yield " 
               ";
        // line 39
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 39)) {
            yield " 
                   <div class=\"help\"> ";
            // line 40
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 40), "html", null, true);
            yield " </div> 
               ";
        }
        // line 41
        yield " 
               ";
        // line 42
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 42), "html", null, true);
        yield "
               ";
        // line 43
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "portfolio", [], "any", false, false, true, 43)) {
            // line 44
            yield "                   <div class=\"portfolio-wrapper\">
                       <h1>My Portfolio</h1>
                       ";
            // line 46
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "portfolio", [], "any", false, false, true, 46), "html", null, true);
            yield "
                   </div>
               ";
        }
        // line 49
        yield "           </div> 
       </div> 
   </main> 

   <footer> 
       <p>&copy; ";
        // line 54
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Harrison Ng'ang'a</p> 
   </footer> 
</body> 
</html>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["head_title", "page", "is_front"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/portfolio/templates/page.html.twig";
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
        return array (  161 => 54,  154 => 49,  148 => 46,  144 => 44,  142 => 43,  138 => 42,  135 => 41,  130 => 40,  126 => 39,  122 => 38,  117 => 36,  112 => 33,  105 => 30,  99 => 27,  93 => 24,  89 => 23,  83 => 20,  75 => 15,  72 => 14,  66 => 12,  61 => 10,  53 => 5,  49 => 4,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/portfolio/templates/page.html.twig", "/var/www/html/web/themes/custom/portfolio/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 10);
        static $filters = array("escape" => 4, "date" => 54);
        static $functions = array("attach_library" => 5);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'date'],
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
