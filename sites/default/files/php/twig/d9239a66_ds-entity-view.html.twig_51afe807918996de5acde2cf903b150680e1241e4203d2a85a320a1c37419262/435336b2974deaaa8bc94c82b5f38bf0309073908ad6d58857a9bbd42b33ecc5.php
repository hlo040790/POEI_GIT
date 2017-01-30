<?php

/* modules/contrib/ds/templates/ds-entity-view.html.twig */
class __TwigTemplate_7e5932702bd18b19a7221a7a8db59c2e53bbab5793ffa939bc5f454659b9cc45 extends Twig_Template
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
        $__internal_0a70d5361a0c137e89a171d686425c57b16fcd81add443269c402feb27d18c0a = $this->env->getExtension("native_profiler");
        $__internal_0a70d5361a0c137e89a171d686425c57b16fcd81add443269c402feb27d18c0a->enter($__internal_0a70d5361a0c137e89a171d686425c57b16fcd81add443269c402feb27d18c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/ds/templates/ds-entity-view.html.twig"));

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

        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
";
        
        $__internal_0a70d5361a0c137e89a171d686425c57b16fcd81add443269c402feb27d18c0a->leave($__internal_0a70d5361a0c137e89a171d686425c57b16fcd81add443269c402feb27d18c0a_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/ds/templates/ds-entity-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Display Entity View*/
/*  **/
/*  * Available variables:*/
/*  * - content: The render array which contains the layout*/
/*  *//* */
/* #}*/
/* {{ content }}*/
/* */
