<?php

/* core/themes/stable/templates/admin/views-ui-container.html.twig */
class __TwigTemplate_1645f32c8f216cb8652ecbc0ff80f2748d8cfbbc4fb4ffb187a4f652297194a0 extends Twig_Template
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
        $__internal_cb5f6108fe3648804eaf208b2c366646af24b1440723208ca6570f17597fcb39 = $this->env->getExtension("native_profiler");
        $__internal_cb5f6108fe3648804eaf208b2c366646af24b1440723208ca6570f17597fcb39->enter($__internal_cb5f6108fe3648804eaf208b2c366646af24b1440723208ca6570f17597fcb39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/admin/views-ui-container.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 11
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "</div>
";
        
        $__internal_cb5f6108fe3648804eaf208b2c366646af24b1440723208ca6570f17597fcb39->leave($__internal_cb5f6108fe3648804eaf208b2c366646af24b1440723208ca6570f17597fcb39_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/views-ui-container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a generic views UI container/wrapper.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes to apply to the container element.*/
/*  * - children: The remaining elements such as dropbuttons and tabs.*/
/*  *//* */
/* #}*/
/* <div{{ attributes }}>{{ children }}</div>*/
/* */
