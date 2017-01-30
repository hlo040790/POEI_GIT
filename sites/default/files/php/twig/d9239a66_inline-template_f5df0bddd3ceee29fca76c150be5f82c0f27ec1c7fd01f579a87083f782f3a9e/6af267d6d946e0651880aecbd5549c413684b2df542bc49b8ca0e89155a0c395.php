<?php

/* {# inline_template_start #}<pre>{{ query }}</pre> */
class __TwigTemplate_18201d5cf0c86b6d2354a6fa3d4586c1d0401ac7417d39177a89bdaa13708c00 extends Twig_Template
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
        $__internal_0605b6ed6056db592153910c505ba51208126dde5630ea173d01a02ce2bc049d = $this->env->getExtension("native_profiler");
        $__internal_0605b6ed6056db592153910c505ba51208126dde5630ea173d01a02ce2bc049d->enter($__internal_0605b6ed6056db592153910c505ba51208126dde5630ea173d01a02ce2bc049d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<pre>{{ query }}</pre>"));

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

        // line 1
        echo "<pre>";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["query"]) ? $context["query"] : null), "html", null, true));
        echo "</pre>";
        
        $__internal_0605b6ed6056db592153910c505ba51208126dde5630ea173d01a02ce2bc049d->leave($__internal_0605b6ed6056db592153910c505ba51208126dde5630ea173d01a02ce2bc049d_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<pre>{{ query }}</pre>";
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
/* {# inline_template_start #}<pre>{{ query }}</pre>*/
