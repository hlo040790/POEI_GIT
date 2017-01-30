<?php

/* themes/custom/mybootstrap/templates/page--front.html.twig */
class __TwigTemplate_401ac842f12754dfd6052c11fed0df77eb5d1e09791a739250c54feaae20178e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'bandeau_header' => array($this, 'block_bandeau_header'),
            'navbar' => array($this, 'block_navbar'),
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'highlighted' => array($this, 'block_highlighted'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'action_links' => array($this, 'block_action_links'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0407e2f0b5132ea6ec65b3117c944143b783286866cb68292a754d3ca0eebdee = $this->env->getExtension("native_profiler");
        $__internal_0407e2f0b5132ea6ec65b3117c944143b783286866cb68292a754d3ca0eebdee->enter($__internal_0407e2f0b5132ea6ec65b3117c944143b783286866cb68292a754d3ca0eebdee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/custom/mybootstrap/templates/page--front.html.twig"));

        $tags = array("set" => 60, "if" => 63, "block" => 64);
        $filters = array("clean_class" => 76, "t" => 88);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 't'),
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

        // line 60
        $context["container"] = (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 61
        echo "
";
        // line 63
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bandeau_header", array())) {
            // line 64
            echo "  ";
            $this->displayBlock('bandeau_header', $context, $blocks);
        }
        // line 68
        echo "
";
        // line 70
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()))) {
            // line 71
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 108
        echo "
";
        // line 110
        $this->displayBlock('main', $context, $blocks);
        // line 189
        echo "
";
        // line 190
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 191
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
        
        $__internal_0407e2f0b5132ea6ec65b3117c944143b783286866cb68292a754d3ca0eebdee->leave($__internal_0407e2f0b5132ea6ec65b3117c944143b783286866cb68292a754d3ca0eebdee_prof);

    }

    // line 64
    public function block_bandeau_header($context, array $blocks = array())
    {
        $__internal_6ceec3d8291e05aaab5e683b1c6e7d9a9f6a088810aff4e31090aa9aaa12a19f = $this->env->getExtension("native_profiler");
        $__internal_6ceec3d8291e05aaab5e683b1c6e7d9a9f6a088810aff4e31090aa9aaa12a19f->enter($__internal_6ceec3d8291e05aaab5e683b1c6e7d9a9f6a088810aff4e31090aa9aaa12a19f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bandeau_header"));

        // line 65
        echo "        <div class=\"bandeau_header\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bandeau_header", array()), "html", null, true));
        echo "</div>
  ";
        
        $__internal_6ceec3d8291e05aaab5e683b1c6e7d9a9f6a088810aff4e31090aa9aaa12a19f->leave($__internal_6ceec3d8291e05aaab5e683b1c6e7d9a9f6a088810aff4e31090aa9aaa12a19f_prof);

    }

    // line 71
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_f2014b1326abc80bc401251dbd16ff792643a2605d2082ebd7b55b0eed30cfc1 = $this->env->getExtension("native_profiler");
        $__internal_f2014b1326abc80bc401251dbd16ff792643a2605d2082ebd7b55b0eed30cfc1->enter($__internal_f2014b1326abc80bc401251dbd16ff792643a2605d2082ebd7b55b0eed30cfc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 72
        echo "    ";
        // line 73
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 75
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 76
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())))) : ((isset($context["container"]) ? $context["container"] : null))));
        // line 79
        echo "    <header";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "addClass", array(0 => (isset($context["navbar_classes"]) ? $context["navbar_classes"] : null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 80
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => "container"), "method")) {
            // line 81
            echo "        <div class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
            echo "\">
      ";
        }
        // line 83
        echo "      <div class=\"navbar-header\">
        ";
        // line 84
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "
        ";
        // line 86
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 87
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 88
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Toggle navigation")));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 94
        echo "      </div>

      ";
        // line 97
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 98
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 99
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 102
        echo "      ";
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => "container"), "method")) {
            // line 103
            echo "        </div>
      ";
        }
        // line 105
        echo "    </header>
  ";
        
        $__internal_f2014b1326abc80bc401251dbd16ff792643a2605d2082ebd7b55b0eed30cfc1->leave($__internal_f2014b1326abc80bc401251dbd16ff792643a2605d2082ebd7b55b0eed30cfc1_prof);

    }

    // line 110
    public function block_main($context, array $blocks = array())
    {
        $__internal_f1992f46667fa2456015a2507233f0c89d3f339b598d831c6ada565d7016f45d = $this->env->getExtension("native_profiler");
        $__internal_f1992f46667fa2456015a2507233f0c89d3f339b598d831c6ada565d7016f45d->enter($__internal_f1992f46667fa2456015a2507233f0c89d3f339b598d831c6ada565d7016f45d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 111
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 115
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 116
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 121
            echo "      ";
        }
        // line 122
        echo "
      ";
        // line 124
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 125
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 130
            echo "      ";
        }
        // line 131
        echo "
      ";
        // line 133
        echo "      ";
        // line 134
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 135
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 136
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 137
(isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 138
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 141
        echo "      <section";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
        echo ">

        ";
        // line 144
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 145
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 148
            echo "        ";
        }
        // line 149
        echo "
        ";
        // line 151
        echo "        ";
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 152
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 155
            echo "        ";
        }
        // line 156
        echo "
        ";
        // line 158
        echo "        ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 159
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 162
            echo "        ";
        }
        // line 163
        echo "
        ";
        // line 165
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 166
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 169
            echo "        ";
        }
        // line 170
        echo "
        ";
        // line 172
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 176
        echo "      </section>

      ";
        // line 179
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 180
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 185
            echo "      ";
        }
        // line 186
        echo "    </div>
  </div>
";
        
        $__internal_f1992f46667fa2456015a2507233f0c89d3f339b598d831c6ada565d7016f45d->leave($__internal_f1992f46667fa2456015a2507233f0c89d3f339b598d831c6ada565d7016f45d_prof);

    }

    // line 116
    public function block_header($context, array $blocks = array())
    {
        $__internal_ae0dc65f191a9dd65076557dee164d79892314eb28a41b82b597c1f5027a8e99 = $this->env->getExtension("native_profiler");
        $__internal_ae0dc65f191a9dd65076557dee164d79892314eb28a41b82b597c1f5027a8e99->enter($__internal_ae0dc65f191a9dd65076557dee164d79892314eb28a41b82b597c1f5027a8e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 117
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 118
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
          </div>
        ";
        
        $__internal_ae0dc65f191a9dd65076557dee164d79892314eb28a41b82b597c1f5027a8e99->leave($__internal_ae0dc65f191a9dd65076557dee164d79892314eb28a41b82b597c1f5027a8e99_prof);

    }

    // line 125
    public function block_sidebar_first($context, array $blocks = array())
    {
        $__internal_ddddccbb249ec5e162831bf92563a8d61a49bc567d4c122d986df72272a060b9 = $this->env->getExtension("native_profiler");
        $__internal_ddddccbb249ec5e162831bf92563a8d61a49bc567d4c122d986df72272a060b9->enter($__internal_ddddccbb249ec5e162831bf92563a8d61a49bc567d4c122d986df72272a060b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar_first"));

        // line 126
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 127
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
        echo "
          </aside>
        ";
        
        $__internal_ddddccbb249ec5e162831bf92563a8d61a49bc567d4c122d986df72272a060b9->leave($__internal_ddddccbb249ec5e162831bf92563a8d61a49bc567d4c122d986df72272a060b9_prof);

    }

    // line 145
    public function block_highlighted($context, array $blocks = array())
    {
        $__internal_160b39e7815082a4e3e64c41e62a12a42e2bc112cb4cc06149541de778198fe0 = $this->env->getExtension("native_profiler");
        $__internal_160b39e7815082a4e3e64c41e62a12a42e2bc112cb4cc06149541de778198fe0->enter($__internal_160b39e7815082a4e3e64c41e62a12a42e2bc112cb4cc06149541de778198fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "highlighted"));

        // line 146
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
        
        $__internal_160b39e7815082a4e3e64c41e62a12a42e2bc112cb4cc06149541de778198fe0->leave($__internal_160b39e7815082a4e3e64c41e62a12a42e2bc112cb4cc06149541de778198fe0_prof);

    }

    // line 152
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_e9d98efe3e8092832230e5501a126dc21da6a3478cc087837887bc6222c3e663 = $this->env->getExtension("native_profiler");
        $__internal_e9d98efe3e8092832230e5501a126dc21da6a3478cc087837887bc6222c3e663->enter($__internal_e9d98efe3e8092832230e5501a126dc21da6a3478cc087837887bc6222c3e663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 153
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
        echo "
          ";
        
        $__internal_e9d98efe3e8092832230e5501a126dc21da6a3478cc087837887bc6222c3e663->leave($__internal_e9d98efe3e8092832230e5501a126dc21da6a3478cc087837887bc6222c3e663_prof);

    }

    // line 159
    public function block_action_links($context, array $blocks = array())
    {
        $__internal_135e085e663a8475711df283f7d4b5dec93c4a307600c1887a73d51144e2c2dc = $this->env->getExtension("native_profiler");
        $__internal_135e085e663a8475711df283f7d4b5dec93c4a307600c1887a73d51144e2c2dc->enter($__internal_135e085e663a8475711df283f7d4b5dec93c4a307600c1887a73d51144e2c2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "action_links"));

        // line 160
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
        echo "</ul>
          ";
        
        $__internal_135e085e663a8475711df283f7d4b5dec93c4a307600c1887a73d51144e2c2dc->leave($__internal_135e085e663a8475711df283f7d4b5dec93c4a307600c1887a73d51144e2c2dc_prof);

    }

    // line 166
    public function block_help($context, array $blocks = array())
    {
        $__internal_e186810b91d4025ad58f9966e433ae83c3ad40dccbdc43d76923a992ee0b8a3e = $this->env->getExtension("native_profiler");
        $__internal_e186810b91d4025ad58f9966e433ae83c3ad40dccbdc43d76923a992ee0b8a3e->enter($__internal_e186810b91d4025ad58f9966e433ae83c3ad40dccbdc43d76923a992ee0b8a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        // line 167
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
          ";
        
        $__internal_e186810b91d4025ad58f9966e433ae83c3ad40dccbdc43d76923a992ee0b8a3e->leave($__internal_e186810b91d4025ad58f9966e433ae83c3ad40dccbdc43d76923a992ee0b8a3e_prof);

    }

    // line 172
    public function block_content($context, array $blocks = array())
    {
        $__internal_00cc62cca881674d215b61a01941edae406ca71ab221e316a79b89affd943242 = $this->env->getExtension("native_profiler");
        $__internal_00cc62cca881674d215b61a01941edae406ca71ab221e316a79b89affd943242->enter($__internal_00cc62cca881674d215b61a01941edae406ca71ab221e316a79b89affd943242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 173
        echo "          <a id=\"main-content\"></a>
          ";
        // line 174
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        ";
        
        $__internal_00cc62cca881674d215b61a01941edae406ca71ab221e316a79b89affd943242->leave($__internal_00cc62cca881674d215b61a01941edae406ca71ab221e316a79b89affd943242_prof);

    }

    // line 180
    public function block_sidebar_second($context, array $blocks = array())
    {
        $__internal_745392b16f3c30a0c70dbc05dc5dfb3e62489e04f7ec675b18b2682c18944b25 = $this->env->getExtension("native_profiler");
        $__internal_745392b16f3c30a0c70dbc05dc5dfb3e62489e04f7ec675b18b2682c18944b25->enter($__internal_745392b16f3c30a0c70dbc05dc5dfb3e62489e04f7ec675b18b2682c18944b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar_second"));

        // line 181
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 182
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
        echo "
          </aside>
        ";
        
        $__internal_745392b16f3c30a0c70dbc05dc5dfb3e62489e04f7ec675b18b2682c18944b25->leave($__internal_745392b16f3c30a0c70dbc05dc5dfb3e62489e04f7ec675b18b2682c18944b25_prof);

    }

    // line 191
    public function block_footer($context, array $blocks = array())
    {
        $__internal_242ad0b53d43c839e5961b5d89bffe4646eaa30cb1444304f1a6eda1536e9a53 = $this->env->getExtension("native_profiler");
        $__internal_242ad0b53d43c839e5961b5d89bffe4646eaa30cb1444304f1a6eda1536e9a53->enter($__internal_242ad0b53d43c839e5961b5d89bffe4646eaa30cb1444304f1a6eda1536e9a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 192
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo "\" role=\"contentinfo\">
      ";
        // line 193
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
    </footer>
  ";
        
        $__internal_242ad0b53d43c839e5961b5d89bffe4646eaa30cb1444304f1a6eda1536e9a53->leave($__internal_242ad0b53d43c839e5961b5d89bffe4646eaa30cb1444304f1a6eda1536e9a53_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/mybootstrap/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  465 => 193,  460 => 192,  454 => 191,  444 => 182,  441 => 181,  435 => 180,  426 => 174,  423 => 173,  417 => 172,  407 => 167,  401 => 166,  391 => 160,  385 => 159,  375 => 153,  369 => 152,  359 => 146,  353 => 145,  343 => 127,  340 => 126,  334 => 125,  324 => 118,  321 => 117,  315 => 116,  306 => 186,  303 => 185,  300 => 180,  297 => 179,  293 => 176,  290 => 172,  287 => 170,  284 => 169,  281 => 166,  278 => 165,  275 => 163,  272 => 162,  269 => 159,  266 => 158,  263 => 156,  260 => 155,  257 => 152,  254 => 151,  251 => 149,  248 => 148,  245 => 145,  242 => 144,  236 => 141,  234 => 138,  233 => 137,  232 => 136,  231 => 135,  230 => 134,  228 => 133,  225 => 131,  222 => 130,  219 => 125,  216 => 124,  213 => 122,  210 => 121,  207 => 116,  204 => 115,  197 => 111,  191 => 110,  183 => 105,  179 => 103,  176 => 102,  170 => 99,  167 => 98,  164 => 97,  160 => 94,  151 => 88,  148 => 87,  145 => 86,  141 => 84,  138 => 83,  132 => 81,  130 => 80,  125 => 79,  123 => 76,  122 => 75,  121 => 73,  119 => 72,  113 => 71,  103 => 65,  97 => 64,  88 => 191,  86 => 190,  83 => 189,  81 => 110,  78 => 108,  74 => 71,  72 => 70,  69 => 68,  65 => 64,  63 => 63,  60 => 61,  58 => 60,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template in this directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  **/
/*  * Navigation:*/
/*  * - breadcrumb: The breadcrumb trail for the current page.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title: The page title, for use in the actual content.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  * - messages: Status and error messages. Should be displayed prominently.*/
/*  * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the*/
/*  *   view and edit tabs when displaying a node).*/
/*  * - action_links: Actions local to the page, such as "Add menu" on the menu*/
/*  *   administration interface.*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.bandeau_header: Items for the header region.*/
/*  * - page.header: Items for the header region.*/
/*  * - page.navigation: Items for the navigation region.*/
/*  * - page.navigation_collapsible: Items for the navigation (collapsible) region.*/
/*  * - page.highlighted: Items for the highlighted content region.*/
/*  * - page.help: Dynamic help text, mostly for admin pages.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.sidebar_second: Items for the second sidebar.*/
/*  * - page.footer: Items for the footer region.*/
/*  **/
/*  * @ingroup templates*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  *//* */
/* #}*/
/* {% set container = theme.settings.fluid_container ? 'container-fluid' : 'container' %}*/
/* */
/* {# Bandeau header #}*/
/* {% if page.bandeau_header %}*/
/*   {% block bandeau_header %}*/
/*         <div class="bandeau_header">{{ page.bandeau_header }}</div>*/
/*   {% endblock %}*/
/* {% endif %}*/
/* */
/* {# Navbar #}*/
/* {% if page.navigation or page.navigation_collapsible %}*/
/*   {% block navbar %}*/
/*     {%*/
/*       set navbar_classes = [*/
/*         'navbar',*/
/*         theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-default',*/
/*         theme.settings.navbar_position ? 'navbar-' ~ theme.settings.navbar_position|clean_class : container,*/
/*       ]*/
/*     %}*/
/*     <header{{ navbar_attributes.addClass(navbar_classes) }} id="navbar" role="banner">*/
/*       {% if not navbar_attributes.hasClass('container') %}*/
/*         <div class="{{ container }}">*/
/*       {% endif %}*/
/*       <div class="navbar-header">*/
/*         {{ page.navigation }}*/
/*         {# .btn-navbar is used as the toggle for collapsed navbar content #}*/
/*         {% if page.navigation_collapsible %}*/
/*           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">*/
/*             <span class="sr-only">{{ 'Toggle navigation'|t }}</span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*           </button>*/
/*         {% endif %}*/
/*       </div>*/
/* */
/*       {# Navigation (collapsible) #}*/
/*       {% if page.navigation_collapsible %}*/
/*         <div id="navbar-collapse" class="navbar-collapse collapse">*/
/*           {{ page.navigation_collapsible }}*/
/*         </div>*/
/*       {% endif %}*/
/*       {% if not navbar_attributes.hasClass('container') %}*/
/*         </div>*/
/*       {% endif %}*/
/*     </header>*/
/*   {% endblock %}*/
/* {% endif %}*/
/* */
/* {# Main #}*/
/* {% block main %}*/
/*   <div role="main" class="main-container {{ container }} js-quickedit-main-content">*/
/*     <div class="row">*/
/* */
/*       {# Header #}*/
/*       {% if page.header %}*/
/*         {% block header %}*/
/*           <div class="col-sm-12" role="heading">*/
/*             {{ page.header }}*/
/*           </div>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* */
/*       {# Sidebar First #}*/
/*       {% if page.sidebar_first %}*/
/*         {% block sidebar_first %}*/
/*           <aside class="col-sm-3" role="complementary">*/
/*             {{ page.sidebar_first }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* */
/*       {# Content #}*/
/*       {%*/
/*         set content_classes = [*/
/*           page.sidebar_first and page.sidebar_second ? 'col-sm-6',*/
/*           page.sidebar_first and page.sidebar_second is empty ? 'col-sm-9',*/
/*           page.sidebar_second and page.sidebar_first is empty ? 'col-sm-9',*/
/*           page.sidebar_first is empty and page.sidebar_second is empty ? 'col-sm-12'*/
/*         ]*/
/*       %}*/
/*       <section{{ content_attributes.addClass(content_classes) }}>*/
/* */
/*         {# Highlighted #}*/
/*         {% if page.highlighted %}*/
/*           {% block highlighted %}*/
/*             <div class="highlighted">{{ page.highlighted }}</div>*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Breadcrumbs #}*/
/*         {% if breadcrumb %}*/
/*           {% block breadcrumb %}*/
/*             {{ breadcrumb }}*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Action Links #}*/
/*         {% if action_links %}*/
/*           {% block action_links %}*/
/*             <ul class="action-links">{{ action_links }}</ul>*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Help #}*/
/*         {% if page.help %}*/
/*           {% block help %}*/
/*             {{ page.help }}*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Content #}*/
/*         {% block content %}*/
/*           <a id="main-content"></a>*/
/*           {{ page.content }}*/
/*         {% endblock %}*/
/*       </section>*/
/* */
/*       {# Sidebar Second #}*/
/*       {% if page.sidebar_second %}*/
/*         {% block sidebar_second %}*/
/*           <aside class="col-sm-3" role="complementary">*/
/*             {{ page.sidebar_second }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
/* {% if page.footer %}*/
/*   {% block footer %}*/
/*     <footer class="footer {{ container }}" role="contentinfo">*/
/*       {{ page.footer }}*/
/*     </footer>*/
/*   {% endblock %}*/
/* {% endif %}*/
/* */
