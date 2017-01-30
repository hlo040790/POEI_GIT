<?php

/* modules/contrib/bootstrap_layouts/templates/3.0.0/bs-1col.html.twig */
class __TwigTemplate_78cb77719bbb96c724c068b285f5e4578971b3cc9fd9964611c3eb34508c3ca1 extends Twig_Template
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
        $__internal_97ae96f8396226c7b2b523b098f0346cf4084ea9a14d8d113c31b8880682cabc = $this->env->getExtension("native_profiler");
        $__internal_97ae96f8396226c7b2b523b098f0346cf4084ea9a14d8d113c31b8880682cabc->enter($__internal_97ae96f8396226c7b2b523b098f0346cf4084ea9a14d8d113c31b8880682cabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/bootstrap_layouts/templates/3.0.0/bs-1col.html.twig"));

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

        // line 19
        echo "<";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["wrapper"]) ? $context["wrapper"] : null), "html", null, true));
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  ";
        // line 20
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_suffix"]) ? $context["title_suffix"] : null), "contextual_links", array()), "html", null, true));
        echo "
  <";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["main"]) ? $context["main"] : null), "wrapper", array()), "html", null, true));
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["main"]) ? $context["main"] : null), "attributes", array()), "html", null, true));
        echo ">
    ";
        // line 22
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["main"]) ? $context["main"] : null), "content", array()), "html", null, true));
        echo "
  </";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["main"]) ? $context["main"] : null), "wrapper", array()), "html", null, true));
        echo ">
</";
        // line 24
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["wrapper"]) ? $context["wrapper"] : null), "html", null, true));
        echo ">
";
        
        $__internal_97ae96f8396226c7b2b523b098f0346cf4084ea9a14d8d113c31b8880682cabc->leave($__internal_97ae96f8396226c7b2b523b098f0346cf4084ea9a14d8d113c31b8880682cabc_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/bootstrap_layouts/templates/3.0.0/bs-1col.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 24,  65 => 23,  61 => 22,  56 => 21,  52 => 20,  46 => 19,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Bootstrap Layouts: "1 Column" template.*/
/*  **/
/*  * Available layout variables:*/
/*  * - wrapper: Wrapper element for the layout container.*/
/*  * - attributes: Wrapper attributes for the layout container.*/
/*  **/
/*  * Available region variables:*/
/*  * - main*/
/*  **/
/*  * Each region variable contains the following properties:*/
/*  * - wrapper: The HTML element to use to wrap this region.*/
/*  * - attributes: The HTML attributes to use on the wrapper for this region.*/
/*  * - content: The content to go inside the wrapper for this region.*/
/*  *//* */
/* #}*/
/* <{{ wrapper }}{{ attributes }}>*/
/*   {{ title_suffix.contextual_links }}*/
/*   <{{ main.wrapper }}{{ main.attributes }}>*/
/*     {{ main.content }}*/
/*   </{{ main.wrapper }}>*/
/* </{{ wrapper }}>*/
/* */
