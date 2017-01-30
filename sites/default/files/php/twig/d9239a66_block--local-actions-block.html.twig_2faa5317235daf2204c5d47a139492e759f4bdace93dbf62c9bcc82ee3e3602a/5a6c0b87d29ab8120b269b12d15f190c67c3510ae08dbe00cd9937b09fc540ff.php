<?php

/* core/themes/seven/templates/block--local-actions-block.html.twig */
class __TwigTemplate_c71b2acbf39c0a8091ded170740a35bb2f9b5589b6098736456eb307da0eefb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@block/block.html.twig", "core/themes/seven/templates/block--local-actions-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@block/block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5854c225acb9f4c92a569c6ef018fa1a8ee3d703d98aab5d03cc3ef243eeda6f = $this->env->getExtension("native_profiler");
        $__internal_5854c225acb9f4c92a569c6ef018fa1a8ee3d703d98aab5d03cc3ef243eeda6f->enter($__internal_5854c225acb9f4c92a569c6ef018fa1a8ee3d703d98aab5d03cc3ef243eeda6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/seven/templates/block--local-actions-block.html.twig"));

        $tags = array("if" => 9);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5854c225acb9f4c92a569c6ef018fa1a8ee3d703d98aab5d03cc3ef243eeda6f->leave($__internal_5854c225acb9f4c92a569c6ef018fa1a8ee3d703d98aab5d03cc3ef243eeda6f_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_52b6b08cf6e830e12e005af6f05fe9bf4e86c654780e4b3ce5a1c806826a78d6 = $this->env->getExtension("native_profiler");
        $__internal_52b6b08cf6e830e12e005af6f05fe9bf4e86c654780e4b3ce5a1c806826a78d6->enter($__internal_52b6b08cf6e830e12e005af6f05fe9bf4e86c654780e4b3ce5a1c806826a78d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "  ";
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 10
            echo "    <ul class=\"action-links\">
      ";
            // line 11
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
    </ul>
  ";
        }
        
        $__internal_52b6b08cf6e830e12e005af6f05fe9bf4e86c654780e4b3ce5a1c806826a78d6->leave($__internal_52b6b08cf6e830e12e005af6f05fe9bf4e86c654780e4b3ce5a1c806826a78d6_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/block--local-actions-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 11,  67 => 10,  64 => 9,  58 => 8,  11 => 1,);
    }
}
/* {% extends "@block/block.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for local actions (primary admin actions.)*/
/*  *//* */
/* #}*/
/* {% block content %}*/
/*   {% if content %}*/
/*     <ul class="action-links">*/
/*       {{ content }}*/
/*     </ul>*/
/*   {% endif %}*/
/* {% endblock %}*/
/* */
