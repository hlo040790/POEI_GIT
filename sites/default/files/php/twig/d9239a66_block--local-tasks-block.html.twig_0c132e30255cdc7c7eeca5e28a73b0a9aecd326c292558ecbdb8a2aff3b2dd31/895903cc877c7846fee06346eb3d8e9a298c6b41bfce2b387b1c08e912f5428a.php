<?php

/* themes/contrib/bootstrap/templates/block/block--local-tasks-block.html.twig */
class __TwigTemplate_9a17ef0a2fef1b6a62aa0c6d5a1d23706e9c1e114c0a6cead9c28e01db37049a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block--bare.html.twig", "themes/contrib/bootstrap/templates/block/block--local-tasks-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block--bare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cba9947a8573a32c9823e0d8141f41253e3792434f5d6857888b8809a3ec9fcc = $this->env->getExtension("native_profiler");
        $__internal_cba9947a8573a32c9823e0d8141f41253e3792434f5d6857888b8809a3ec9fcc->enter($__internal_cba9947a8573a32c9823e0d8141f41253e3792434f5d6857888b8809a3ec9fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/contrib/bootstrap/templates/block/block--local-tasks-block.html.twig"));

        $tags = array("if" => 11);
        $filters = array("t" => 12);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cba9947a8573a32c9823e0d8141f41253e3792434f5d6857888b8809a3ec9fcc->leave($__internal_cba9947a8573a32c9823e0d8141f41253e3792434f5d6857888b8809a3ec9fcc_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_fae89dc73e9b6f73f65d6ced61a021fcdf2fd4cf8acd5fc8283f8623c711f8af = $this->env->getExtension("native_profiler");
        $__internal_fae89dc73e9b6f73f65d6ced61a021fcdf2fd4cf8acd5fc8283f8623c711f8af->enter($__internal_fae89dc73e9b6f73f65d6ced61a021fcdf2fd4cf8acd5fc8283f8623c711f8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "  ";
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 12
            echo "    <nav class=\"tabs\" role=\"navigation\" aria-label=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Tabs")));
            echo "\">
      ";
            // line 13
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
    </nav>
  ";
        }
        
        $__internal_fae89dc73e9b6f73f65d6ced61a021fcdf2fd4cf8acd5fc8283f8623c711f8af->leave($__internal_fae89dc73e9b6f73f65d6ced61a021fcdf2fd4cf8acd5fc8283f8623c711f8af_prof);

    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/block/block--local-tasks-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 13,  67 => 12,  64 => 11,  58 => 10,  11 => 1,);
    }
}
/* {% extends "block--bare.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for tabs.*/
/*  **/
/*  * @ingroup templates*/
/*  *//* */
/* #}*/
/* {% block content %}*/
/*   {% if content %}*/
/*     <nav class="tabs" role="navigation" aria-label="{{ 'Tabs'|t }}">*/
/*       {{ content }}*/
/*     </nav>*/
/*   {% endif %}*/
/* {% endblock %}*/
/* */
