<?php

/* core/modules/views/templates/views-view-summary.html.twig */
class __TwigTemplate_92fd84d76e09f2e61baab66cf73fb05a4fecfc40ed6ae767d46b45b7fa55356d extends Twig_Template
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
        $__internal_438672d34d2baf69abcddc5b8e7f478db122f325206283be389c09a685a9ee1a = $this->env->getExtension("native_profiler");
        $__internal_438672d34d2baf69abcddc5b8e7f478db122f325206283be389c09a685a9ee1a->enter($__internal_438672d34d2baf69abcddc5b8e7f478db122f325206283be389c09a685a9ee1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/modules/views/templates/views-view-summary.html.twig"));

        $tags = array("for" => 24, "if" => 26);
        $filters = array("without" => 25);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for', 'if'),
                array('without'),
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

        // line 23
        echo "<ul>
  ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 25
            echo "    <li><a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "url", array()), "html", null, true));
            echo "\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute($this->getAttribute($context["row"], "attributes", array()), "addClass", array(0 => (($this->getAttribute($context["row"], "active", array())) ? ("is-active") : (""))), "method"), "href"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "link", array()), "html", null, true));
            echo "</a>
      ";
            // line 26
            if ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "count", array())) {
                // line 27
                echo "        (";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "count", array()), "html", null, true));
                echo ")
      ";
            }
            // line 29
            echo "    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "</ul>
";
        
        $__internal_438672d34d2baf69abcddc5b8e7f478db122f325206283be389c09a685a9ee1a->leave($__internal_438672d34d2baf69abcddc5b8e7f478db122f325206283be389c09a685a9ee1a_prof);

    }

    public function getTemplateName()
    {
        return "core/modules/views/templates/views-view-summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 31,  70 => 29,  64 => 27,  62 => 26,  53 => 25,  49 => 24,  46 => 23,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a list of summary lines.*/
/*  **/
/*  * Available variables:*/
/*  * - rows: The rows contained in this view.*/
/*  *   Each row contains:*/
/*  *   - url: The summary link URL.*/
/*  *   - link: The summary link text.*/
/*  *   - count: The number of items under this grouping.*/
/*  *   - attributes: HTML attributes to apply to each row.*/
/*  *   - active: A flag indicating whtether the row is active.*/
/*  * - options: Flags indicating how the summary should be displayed.*/
/*  *   This contains:*/
/*  *   - count: A flag indicating whether the count should be displayed.*/
/*  **/
/*  * @see template_preprocess_views_view_summary()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <ul>*/
/*   {% for row in rows %}*/
/*     <li><a href="{{ row.url }}"{{ row.attributes.addClass(row.active ? 'is-active')|without('href') }}>{{ row.link }}</a>*/
/*       {% if options.count %}*/
/*         ({{ row.count }})*/
/*       {% endif %}*/
/*     </li>*/
/*   {% endfor %}*/
/* </ul>*/
/* */
