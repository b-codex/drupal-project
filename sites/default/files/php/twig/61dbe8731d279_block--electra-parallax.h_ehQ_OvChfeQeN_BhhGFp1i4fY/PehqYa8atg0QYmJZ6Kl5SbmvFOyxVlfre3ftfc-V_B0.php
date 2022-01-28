<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/electra/templates/block/block--electra-parallax.html.twig */
class __TwigTemplate_2e16f27b6759955a5ed9f60699cc0e87b820da5d4b539863efdac14ed094159e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        $context["type"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["content"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["#block_content"] ?? null) : null), "field_electra_parallax_type", [], "any", false, false, true, 8), "value", [], "any", false, false, true, 8);
        // line 9
        $context["gradient_style"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["content"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["#block_content"] ?? null) : null), "field_electra_color_type", [], "any", false, false, true, 9), "value", [], "any", false, false, true, 9);
        // line 10
        $context["bg_image_url"] = call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["content"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["#block_content"] ?? null) : null), "field_electra_parallax_bg_image", [], "any", false, false, true, 10), "entity", [], "any", false, false, true, 10), "uri", [], "any", false, false, true, 10), "value", [], "any", false, false, true, 10), 10, $this->source)]);
        // line 11
        $context["bg_image_type"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["content"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["#block_content"] ?? null) : null), "field_electra_parallax_bg_type", [], "any", false, false, true, 11), "value", [], "any", false, false, true, 11);
        // line 12
        $context["extra_class"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["content"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["#block_content"] ?? null) : null), "field_extra_class", [], "any", false, false, true, 12), "value", [], "any", false, false, true, 12);
        // line 13
        echo "
";
        // line 15
        $context["classes"] = [0 => "parallax-block", 1 => ("parallax-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 17
($context["type"] ?? null), 17, $this->source))), 2 => \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 18
($context["extra_class"] ?? null), 18, $this->source))];
        // line 21
        echo "
";
        // line 22
        $context["inner_attribute"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
        // line 24
        $context["inner_classes"] = [0 => "parallax-inner", 1 => "d-flex", 2 => "d-height", 3 => (((        // line 28
($context["type"] ?? null) == "Image")) ? ("image") : (\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["gradient_style"] ?? null), 28, $this->source))))];
        // line 31
        echo "
";
        // line 32
        $context["wrapper_attribute"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
        // line 34
        $context["wrapper_classes"] = [0 => "inner-wrapper", 1 => "text-left"];
        // line 39
        echo "
";
        // line 41
        $context["image_styles"] = [0 => (((        // line 42
($context["type"] ?? null) == "Image")) ? ((("background: linear-gradient(0deg,rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url(" . call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(($context["bg_image_url"] ?? null), 42, $this->source)])) . ");")) : ("")), 1 => "background-attachment: fixed;", 2 => (((        // line 44
($context["bg_image_type"] ?? null) == "Cover")) ? ("background-repeat: no-repeat;") : ("background-repeat:repeat;")), 3 => (((        // line 45
($context["bg_image_type"] ?? null) == "Cover")) ? ("background-position: center center; background-size: cover;") : (""))];
        // line 48
        echo "
<div ";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 49), 49, $this->source), "html", null, true);
        echo ">
";
        // line 50
        if ((($context["type"] ?? null) == "Image")) {
            // line 51
            echo "<div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["inner_attribute"] ?? null), "addClass", [0 => ($context["inner_classes"] ?? null)], "method", false, false, true, 51), 51, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["inner_attribute"] ?? null), "setAttribute", [0 => "style", 1 => ($context["image_styles"] ?? null)], "method", false, false, true, 51), 51, $this->source), "html", null, true);
            echo ">
";
        } else {
            // line 53
            echo "<div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["inner_attribute"] ?? null), "addClass", [0 => ($context["inner_classes"] ?? null)], "method", false, false, true, 53), 53, $this->source), "html", null, true);
            echo " >
";
        }
        // line 55
        echo "  <div ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["wrapper_attribute"] ?? null), "addClass", [0 => ($context["wrapper_classes"] ?? null)], "method", false, false, true, 55), 55, $this->source), "html", null, true);
        echo " >
    <div class=\"container\">
      <div class=\"row\">
              <div class=\"col-md-12\">
                    <div class=\"parallax-content text-center\">
                        ";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["content"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["#block_content"] ?? null) : null), "body", [], "any", false, false, true, 60), "value", [], "any", false, false, true, 60), 60, $this->source));
        echo "
                    </div>
              </div>   
      </div>
    </div>
  </div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/electra/templates/block/block--electra-parallax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 60,  102 => 55,  96 => 53,  88 => 51,  86 => 50,  82 => 49,  79 => 48,  77 => 45,  76 => 44,  75 => 42,  74 => 41,  71 => 39,  69 => 34,  67 => 32,  64 => 31,  62 => 28,  61 => 24,  59 => 22,  56 => 21,  54 => 18,  53 => 17,  52 => 15,  49 => 13,  47 => 12,  45 => 11,  43 => 10,  41 => 9,  39 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/electra/templates/block/block--electra-parallax.html.twig", "C:\\xampp\\htdocs\\drupal-project\\themes\\electra\\templates\\block\\block--electra-parallax.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "if" => 50);
        static $filters = array("clean_class" => 17, "escape" => 49, "raw" => 60);
        static $functions = array("file_url" => 10, "create_attribute" => 22);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'raw'],
                ['file_url', 'create_attribute']
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
