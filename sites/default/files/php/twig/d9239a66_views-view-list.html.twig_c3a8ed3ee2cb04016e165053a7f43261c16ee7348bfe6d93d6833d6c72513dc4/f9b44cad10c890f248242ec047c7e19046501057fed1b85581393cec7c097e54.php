<?php

/* core/modules/views/templates/views-view-list.html.twig */
class __TwigTemplate_a902b93774fe001af69350e597a83ef25024edb35025d054c08abd35cc44446d extends Twig_Template
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
        $__internal_62a213976694529e537a44b3310c732abf113051893bfc583f371ccc12b27c59 = $this->env->getExtension("native_profiler");
        $__internal_62a213976694529e537a44b3310c732abf113051893bfc583f371ccc12b27c59->enter($__internal_62a213976694529e537a44b3310c732abf113051893bfc583f371ccc12b27c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/modules/views/templates/views-view-list.html.twig"));

        $tags = array("if" => 21, "for" => 30);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for'),
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

        // line 21
        if ((isset($context["attributes"]) ? $context["attributes"] : null)) {
            // line 22
            echo "<div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
            echo ">
";
        }
        // line 24
        echo "  ";
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 25
            echo "    <h3>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h3>
  ";
        }
        // line 27
        echo "
  <";
        // line 28
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["list"]) ? $context["list"] : null), "type", array()), "html", null, true));
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["list"]) ? $context["list"] : null), "attributes", array()), "html", null, true));
        echo ">

    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 31
            echo "      <li";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "attributes", array()), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true));
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
  </";
        // line 34
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["list"]) ? $context["list"] : null), "type", array()), "html", null, true));
        echo ">

";
        // line 36
        if ((isset($context["attributes"]) ? $context["attributes"] : null)) {
            // line 37
            echo "</div>
";
        }
        
        $__internal_62a213976694529e537a44b3310c732abf113051893bfc583f371ccc12b27c59->leave($__internal_62a213976694529e537a44b3310c732abf113051893bfc583f371ccc12b27c59_prof);

    }

    public function getTemplateName()
    {
        return "core/modules/views/templates/views-view-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 37,  95 => 36,  90 => 34,  87 => 33,  76 => 31,  72 => 30,  66 => 28,  63 => 27,  57 => 25,  54 => 24,  48 => 22,  46 => 21,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a view template to display a list of rows.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the container.*/
/*  * - rows: A list of rows for this list.*/
/*  *   - attributes: The row's HTML attributes.*/
/*  *   - content: The row's contents.*/
/*  * - title: The title of this group of rows. May be empty.*/
/*  * - list: @todo.*/
/*  *   - type: Starting tag will be either a ul or ol.*/
/*  *   - attributes: HTML attributes for the list element.*/
/*  **/
/*  * @see template_preprocess_views_view_list()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% if attributes -%}*/
/*   <div{{ attributes }}>*/
/* {% endif %}*/
/*   {% if title %}*/
/*     <h3>{{ title }}</h3>*/
/*   {% endif %}*/
/* */
/*   <{{ list.type }}{{ list.attributes }}>*/
/* */
/*     {% for row in rows %}*/
/*       <li{{ row.attributes }}>{{ row.content }}</li>*/
/*     {% endfor %}*/
/* */
/*   </{{ list.type }}>*/
/* */
/* {% if attributes -%}*/
/*   </div>*/
/* {% endif %}*/
/* */
