<?php

/* {# inline_template_start #}<strong>{% trans 'Query' %}</strong> */
class __TwigTemplate_09836161ee6f62c54868777a417015e17213d2d819959b4783ab3c59f7aabd16 extends Twig_Template
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
        $__internal_a86ce9d4daec1e90d3cfd03f24b4bcbd6f8122a5cef1b9e5d83ad4a02b2bebf3 = $this->env->getExtension("native_profiler");
        $__internal_a86ce9d4daec1e90d3cfd03f24b4bcbd6f8122a5cef1b9e5d83ad4a02b2bebf3->enter($__internal_a86ce9d4daec1e90d3cfd03f24b4bcbd6f8122a5cef1b9e5d83ad4a02b2bebf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<strong>{% trans 'Query' %}</strong>"));

        $tags = array("trans" => 1);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('trans'),
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

        // line 1
        echo "<strong>";
        echo t("Query", array());
        echo "</strong>";
        
        $__internal_a86ce9d4daec1e90d3cfd03f24b4bcbd6f8122a5cef1b9e5d83ad4a02b2bebf3->leave($__internal_a86ce9d4daec1e90d3cfd03f24b4bcbd6f8122a5cef1b9e5d83ad4a02b2bebf3_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<strong>{% trans 'Query' %}</strong>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}<strong>{% trans 'Query' %}</strong>*/
