<?php

/* core/themes/classy/templates/form/dropbutton-wrapper.html.twig */
class __TwigTemplate_aa0f7eb5ef0b0e78ad8caf723325b250d69df336c1f65f37b01a1c1433bc9b71 extends Twig_Template
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
        $__internal_65a552a54e6f766ba90e27bb0b13937749e3c1dee74b02e97ac0419319e214c5 = $this->env->getExtension("native_profiler");
        $__internal_65a552a54e6f766ba90e27bb0b13937749e3c1dee74b02e97ac0419319e214c5->enter($__internal_65a552a54e6f766ba90e27bb0b13937749e3c1dee74b02e97ac0419319e214c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/form/dropbutton-wrapper.html.twig"));

        $tags = array("if" => 12, "spaceless" => 13);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'spaceless'),
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

        // line 12
        if ((isset($context["children"]) ? $context["children"] : null)) {
            // line 13
            echo "  ";
            ob_start();
            // line 14
            echo "    <div class=\"dropbutton-wrapper\">
      <div class=\"dropbutton-widget\">
        ";
            // line 16
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
            echo "
      </div>
    </div>
  ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
        
        $__internal_65a552a54e6f766ba90e27bb0b13937749e3c1dee74b02e97ac0419319e214c5->leave($__internal_65a552a54e6f766ba90e27bb0b13937749e3c1dee74b02e97ac0419319e214c5_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/dropbutton-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 16,  51 => 14,  48 => 13,  46 => 12,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a dropbutton wrapper.*/
/*  **/
/*  * Available variables:*/
/*  * - children: Contains the child elements of the dropbutton menu.*/
/*  **/
/*  * @see template_preprocess()*/
/*  *//* */
/* #}*/
/* {% if children %}*/
/*   {% spaceless %}*/
/*     <div class="dropbutton-wrapper">*/
/*       <div class="dropbutton-widget">*/
/*         {{ children }}*/
/*       </div>*/
/*     </div>*/
/*   {% endspaceless %}*/
/* {% endif %}*/
/* */
