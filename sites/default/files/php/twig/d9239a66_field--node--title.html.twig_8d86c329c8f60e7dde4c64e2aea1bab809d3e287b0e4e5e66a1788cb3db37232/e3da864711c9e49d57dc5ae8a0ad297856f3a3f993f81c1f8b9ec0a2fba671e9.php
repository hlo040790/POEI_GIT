<?php

/* core/modules/node/templates/field--node--title.html.twig */
class __TwigTemplate_8a8691c22234e803e7bcf801016dfc8aa021d4262cd15d9e2880dd273833aa0a extends Twig_Template
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
        $__internal_37b09b7eb9c21b7b12cc39ed9d68a24dec4462af9fab2247cef6643377f0f757 = $this->env->getExtension("native_profiler");
        $__internal_37b09b7eb9c21b7b12cc39ed9d68a24dec4462af9fab2247cef6643377f0f757->enter($__internal_37b09b7eb9c21b7b12cc39ed9d68a24dec4462af9fab2247cef6643377f0f757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/modules/node/templates/field--node--title.html.twig"));

        $tags = array("for" => 25);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for'),
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

        // line 24
        echo "<span";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 26
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</span>
";
        
        $__internal_37b09b7eb9c21b7b12cc39ed9d68a24dec4462af9fab2247cef6643377f0f757->leave($__internal_37b09b7eb9c21b7b12cc39ed9d68a24dec4462af9fab2247cef6643377f0f757_prof);

    }

    public function getTemplateName()
    {
        return "core/modules/node/templates/field--node--title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 28,  54 => 26,  50 => 25,  46 => 24,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for the node title field.*/
/*  **/
/*  * This is an override of field.html.twig for the node title field. See that*/
/*  * template for documentation about its details and overrides.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the containing span element.*/
/*  * - items: List of all the field items. Each item contains:*/
/*  *   - attributes: List of HTML attributes for each item.*/
/*  *   - content: The field item content.*/
/*  * - entity_type: The entity type to which the field belongs.*/
/*  * - field_name: The name of the field.*/
/*  * - field_type: The type of the field.*/
/*  * - label_display: The display settings for the label.*/
/*  **/
/*  * @see field.html.twig*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <span{{ attributes }}>*/
/*   {%- for item in items -%}*/
/*     {{ item.content }}*/
/*   {%- endfor -%}*/
/* </span>*/
/* */
