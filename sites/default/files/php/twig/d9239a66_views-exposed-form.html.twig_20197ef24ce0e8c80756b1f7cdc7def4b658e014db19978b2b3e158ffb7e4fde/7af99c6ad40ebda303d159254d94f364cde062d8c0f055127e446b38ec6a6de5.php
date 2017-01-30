<?php

/* themes/contrib/bootstrap/templates/views/views-exposed-form.html.twig */
class __TwigTemplate_51c98fd75e2e47e98538fec6625ab784963c09a7310bb5f6811ea3316e9584c8 extends Twig_Template
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
        $__internal_a2801b490ca2a5753dcfd968cacd08a733462e64a15ec91789ea9591c3caa6dd = $this->env->getExtension("native_profiler");
        $__internal_a2801b490ca2a5753dcfd968cacd08a733462e64a15ec91789ea9591c3caa6dd->enter($__internal_a2801b490ca2a5753dcfd968cacd08a733462e64a15ec91789ea9591c3caa6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/contrib/bootstrap/templates/views/views-exposed-form.html.twig"));

        $tags = array("if" => 14);
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
        if ( !twig_test_empty((isset($context["q"]) ? $context["q"] : null))) {
            // line 15
            echo "  ";
            // line 19
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["q"]) ? $context["q"] : null), "html", null, true));
            echo "
";
        }
        // line 21
        echo "<div class=\"form--inline form-inline clearfix\">
  ";
        // line 22
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["form"]) ? $context["form"] : null), "html", null, true));
        echo "
</div>
";
        
        $__internal_a2801b490ca2a5753dcfd968cacd08a733462e64a15ec91789ea9591c3caa6dd->leave($__internal_a2801b490ca2a5753dcfd968cacd08a733462e64a15ec91789ea9591c3caa6dd_prof);

    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/views/views-exposed-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 22,  56 => 21,  50 => 19,  48 => 15,  46 => 14,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation of a views exposed form.*/
/*  **/
/*  * Available variables:*/
/*  * - form: A render element representing the form.*/
/*  **/
/*  * @ingroup templates*/
/*  **/
/*  * @see template_preprocess_views_exposed_form()*/
/*  *//* */
/* #}*/
/* {% if q is not empty %}*/
/*   {#*/
/*     This ensures that, if clean URLs are off, the 'q' is added first,*/
/*     as a hidden form element, so that it shows up first in the POST URL.*/
/*   #}*/
/*   {{ q }}*/
/* {% endif %}*/
/* <div class="form--inline form-inline clearfix">*/
/*   {{ form }}*/
/* </div>*/
/* */
