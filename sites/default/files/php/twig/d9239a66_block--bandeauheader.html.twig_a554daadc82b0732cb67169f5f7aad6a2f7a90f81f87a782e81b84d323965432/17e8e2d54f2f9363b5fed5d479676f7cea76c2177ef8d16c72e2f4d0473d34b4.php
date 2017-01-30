<?php

/* themes/custom/mybootstrap/templates/block--bandeauheader.html.twig */
class __TwigTemplate_3b0f5a77f138fd9eb0bf952efb2d2e383da0b33254d5837a2e53164640a21b3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0688f3024a7d565fe60bd3d9493540e27154f96880473a276b726dc25e93363a = $this->env->getExtension("native_profiler");
        $__internal_0688f3024a7d565fe60bd3d9493540e27154f96880473a276b726dc25e93363a->enter($__internal_0688f3024a7d565fe60bd3d9493540e27154f96880473a276b726dc25e93363a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/custom/mybootstrap/templates/block--bandeauheader.html.twig"));

        $tags = array("set" => 49, "block" => 58);
        $filters = array("clean_class" => 51);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'block'),
                array('clean_class'),
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

        // line 49
        $context["classes"] = array(0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 51
(isset($context["configuration"]) ? $context["configuration"] : null), "provider", array()))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass(        // line 52
(isset($context["plugin_id"]) ? $context["plugin_id"] : null))), 3 => "clearfix");
        // line 56
        echo "<section";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">

  ";
        // line 58
        $this->displayBlock('content', $context, $blocks);
        // line 64
        echo "</section>


";
        
        $__internal_0688f3024a7d565fe60bd3d9493540e27154f96880473a276b726dc25e93363a->leave($__internal_0688f3024a7d565fe60bd3d9493540e27154f96880473a276b726dc25e93363a_prof);

    }

    // line 58
    public function block_content($context, array $blocks = array())
    {
        $__internal_7b156aacb45d54c272576ada75e1d202dd2a4cdf0a38b4d513290e09139e3e80 = $this->env->getExtension("native_profiler");
        $__internal_7b156aacb45d54c272576ada75e1d202dd2a4cdf0a38b4d513290e09139e3e80->enter($__internal_7b156aacb45d54c272576ada75e1d202dd2a4cdf0a38b4d513290e09139e3e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 59
        echo "    <img src=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/images/photo.png\"
     srcset=\" ";
        // line 60
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/images/photo@2x.png 2x, 
              ";
        // line 61
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/images/photo@3x.png 3x\"
     class=\"no-brokers\">
  ";
        
        $__internal_7b156aacb45d54c272576ada75e1d202dd2a4cdf0a38b4d513290e09139e3e80->leave($__internal_7b156aacb45d54c272576ada75e1d202dd2a4cdf0a38b4d513290e09139e3e80_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/mybootstrap/templates/block--bandeauheader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 61,  80 => 60,  75 => 59,  69 => 58,  59 => 64,  57 => 58,  51 => 56,  49 => 52,  48 => 51,  47 => 49,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a block.*/
/*  **/
/*  * Available variables:*/
/*  * - $block->subject: Block title.*/
/*  * - $content: Block content.*/
/*  * - $block->module: Module that generated the block.*/
/*  * - $block->delta: An ID for the block, unique within each module.*/
/*  * - $block->region: The block region embedding the current block.*/
/*  * - $classes: String of classes that can be used to style contextually through*/
/*  *   CSS. It can be manipulated through the variable $classes_array from*/
/*  *   preprocess functions. The default values can be one or more of the*/
/*  *   following:*/
/*  *   - block: The current template type, i.e., "theming hook".*/
/*  *   - block-[module]: The module generating the block. For example, the user*/
/*  *     module is responsible for handling the default user navigation block. In*/
/*  *     that case the class would be 'block-user'.*/
/*  * - $title_prefix (array): An array containing additional output populated by*/
/*  *   modules, intended to be displayed in front of the main title tag that*/
/*  *   appears in the template.*/
/*  * - $title_suffix (array): An array containing additional output populated by*/
/*  *   modules, intended to be displayed after the main title tag that appears in*/
/*  *   the template.*/
/*  **/
/*  * Helper variables:*/
/*  * - $classes_array: Array of html class attribute values. It is flattened*/
/*  *   into a string within the variable $classes.*/
/*  * - $block_zebra: Outputs 'odd' and 'even' dependent on each block region.*/
/*  * - $zebra: Same output as $block_zebra but independent of any block region.*/
/*  * - $block_id: Counter dependent on each block region.*/
/*  * - $id: Same output as $block_id but independent of any block region.*/
/*  * - $is_front: Flags true when presented in the front page.*/
/*  * - $logged_in: Flags true when the current user is a logged-in member.*/
/*  * - $is_admin: Flags true when the current user is an administrator.*/
/*  * - $block_html_id: A valid HTML ID and guaranteed unique.*/
/*  **/
/*  * @ingroup templates*/
/*  **/
/*  * @see bootstrap_preprocess_block()*/
/*  * @see template_preprocess()*/
/*  * @see template_preprocess_block()*/
/*  * @see bootstrap_process_block()*/
/*  * @see template_process()*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'block',*/
/*     'block-' ~ configuration.provider|clean_class,*/
/*     'block-' ~ plugin_id|clean_class,*/
/*     'clearfix',*/
/*   ]*/
/* %}*/
/* <section{{ attributes.addClass(classes) }}>*/
/* */
/*   {% block content %}*/
/*     <img src="{{ directory }}/images/photo.png"*/
/*      srcset=" {{  directory }}/images/photo@2x.png 2x, */
/*               {{  directory }}/images/photo@3x.png 3x"*/
/*      class="no-brokers">*/
/*   {% endblock %}*/
/* </section>*/
/* */
/* */
/* */
