<?php

/* core/themes/stable/templates/admin/views-ui-view-preview-section.html.twig */
class __TwigTemplate_1e3bd3158d46ccaf86b2e3c1e246be3e35c5bbaa067ae07398b77dc6a59a27d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dee1e21b46edce00931c080fbe6e5b31137982f1d52169acba3b7d248f015e58 = $this->env->getExtension("native_profiler");
        $__internal_dee1e21b46edce00931c080fbe6e5b31137982f1d52169acba3b7d248f015e58->enter($__internal_dee1e21b46edce00931c080fbe6e5b31137982f1d52169acba3b7d248f015e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/admin/views-ui-view-preview-section.html.twig"));

        $tags = array("if" => 15);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 14
        echo "<h1 class=\"section-title\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</h1>
";
        // line 15
        if ((isset($context["links"]) ? $context["links"] : null)) {
            // line 16
            echo "  <div class=\"contextual\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["links"]) ? $context["links"] : null), "html", null, true));
            echo "</div>
";
        }
        // line 18
        echo "<div class=\"preview-section\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "</div>
";
        
        $__internal_dee1e21b46edce00931c080fbe6e5b31137982f1d52169acba3b7d248f015e58->leave($__internal_dee1e21b46edce00931c080fbe6e5b31137982f1d52169acba3b7d248f015e58_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/views-ui-view-preview-section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 18,  53 => 16,  51 => 15,  46 => 14,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a views UI preview section.*/
/*  **/
/*  * Available variables:*/
/*  * - title: The human readable section title.*/
/*  * - links: A list of contextual links.*/
/*  * - content: The content for this section preview.*/
/*  **/
/*  * @see template_preprocess_views_ui_view_preview_section()*/
/*  *//* */
/* #}*/
/* <h1 class="section-title">{{ title }}</h1>*/
/* {% if links %}*/
/*   <div class="contextual">{{ links }}</div>*/
/* {% endif %}*/
/* <div class="preview-section">{{ content }}</div>*/
/* */
