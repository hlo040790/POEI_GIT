<?php

/* @webprofiler/Collector/blocks.html.twig */
class __TwigTemplate_a9f695c42ef004f2cf75c59388fd60e386554ec0e7d6d17f0ffa53db209ef1ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ae6f81a8e50f8bc8118a365d0104369e98a6bae80af2e342929991bd2539c7a = $this->env->getExtension("native_profiler");
        $__internal_2ae6f81a8e50f8bc8118a365d0104369e98a6bae80af2e342929991bd2539c7a->enter($__internal_2ae6f81a8e50f8bc8118a365d0104369e98a6bae80af2e342929991bd2539c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@webprofiler/Collector/blocks.html.twig"));

        $tags = array("block" => 1, "set" => 2);
        $filters = array("t" => 3, "default" => 22);
        $functions = array("url" => 3);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('block', 'set'),
                array('t', 'default'),
                array('url')
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
        $this->displayBlock('toolbar', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2ae6f81a8e50f8bc8118a365d0104369e98a6bae80af2e342929991bd2539c7a->leave($__internal_2ae6f81a8e50f8bc8118a365d0104369e98a6bae80af2e342929991bd2539c7a_prof);

    }

    // line 1
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cc06f8be87bb2294f8509c2b85c5eed7c1cc2dd7264f19179482b6f20004271a = $this->env->getExtension("native_profiler");
        $__internal_cc06f8be87bb2294f8509c2b85c5eed7c1cc2dd7264f19179482b6f20004271a->enter($__internal_cc06f8be87bb2294f8509c2b85c5eed7c1cc2dd7264f19179482b6f20004271a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getUrl("webprofiler.dashboard", array("profile" => (isset($context["token"]) ? $context["token"] : null)), array("fragment" => "blocks")), "html", null, true));
        echo "\" title=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Blocks")));
        echo "\">
        <img width=\"20\" height=\"28\" alt=\"";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Blocks")));
        echo "\"
             src=\"data:image/png;base64,";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "icon", array()), "html", null, true));
        echo "\"/>
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "renderedBlocksCount", array()), "html", null, true));
        echo "</span>
    </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 9
        echo "    ";
        ob_start();
        // line 10
        echo "
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Loaded")));
        echo "</b>
        <span>";
        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "loadedBlocksCount", array()), "html", null, true));
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Rendered")));
        echo "</b>
        <span>";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "renderedBlocksCount", array()), "html", null, true));
        echo "</span>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 20
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 22
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : null), "")) : ("")), "html", null, true));
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : null), "")) : ("")), "html", null, true));
        echo "</div>
    </div>
";
        
        $__internal_cc06f8be87bb2294f8509c2b85c5eed7c1cc2dd7264f19179482b6f20004271a->leave($__internal_cc06f8be87bb2294f8509c2b85c5eed7c1cc2dd7264f19179482b6f20004271a_prof);

    }

    // line 27
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a4430ebfd9eb93f7174ac49e78e56e0c0b8563a6effddf5edde345520255e4c5 = $this->env->getExtension("native_profiler");
        $__internal_a4430ebfd9eb93f7174ac49e78e56e0c0b8563a6effddf5edde345520255e4c5->enter($__internal_a4430ebfd9eb93f7174ac49e78e56e0c0b8563a6effddf5edde345520255e4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 28
        echo "    <script id=\"blocks\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 29
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Blocks")));
        echo "</h2>

        <form class=\"panel__toolbar\">
            <div class=\"panel__filter--text\">
                <input id=\"edit-sid\" class=\"js--live-filter\" placeholder=\"";
        // line 33
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("ID")));
        echo "\" type=\"text\"/>
                <label for=\"edit-sid\" class=\"panel__filter-label\">";
        // line 34
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("ID")));
        echo "</label>
            </div>
            <div class=\"panel__filter--text\">
                <input id=\"edit-label\" class=\"js--live-filter\" placeholder=\"";
        // line 37
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Label")));
        echo "\" type=\"text\"/>
                <label for=\"edit-label\" class=\"panel__filter-label\">";
        // line 38
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Label")));
        echo "</label>
            </div>
            <div class=\"panel__filter--text\">
                <input id=\"edit-region\" class=\"js--live-filter\" placeholder=\"";
        // line 41
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Region")));
        echo "\" type=\"text\"/>
                <label for=\"edit-region\" class=\"panel__filter-label\">";
        // line 42
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Region")));
        echo "</label>
            </div>
            <div class=\"panel__filter--text\">
                <input id=\"edit-provider\" class=\"js--live-filter\" placeholder=\"";
        // line 45
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Provider")));
        echo "\" type=\"text\"/>
                <label for=\"edit-provider\" class=\"panel__filter-label\">";
        // line 46
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Provider")));
        echo "</label>
            </div>
            <div class=\"panel__filter--select\">
                <select id=\"edit-rendered\" class=\"js--live-filter\">
                    <option value=\"\">";
        // line 50
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Any")));
        echo "</option>
                    <option value=\"1\">";
        // line 51
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Yes")));
        echo "</option>
                    <option value=\"0\">";
        // line 52
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("No")));
        echo "</option>
                </select>
                <label for=\"edit-rendered\" class=\"panel__filter-label\">";
        // line 54
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Rendered")));
        echo "</label>
            </div>
        </form>

        <% _.each( data.blocks.loaded, function( item ){ %>

        <div class=\"panel__container\"
             data-wp-sid=\"<%- item.id %>\"
             data-wp-label=\"<%= item.settings.label %>\"
             data-wp-region=\"<%= item.region %>\"
             data-wp-provider=\"<%= item.settings.provider %>\"
             data-wp-rendered=\"<%- (data.blocks.rendered[item.id]) ? '1' : '0' %>\">

            <div class=\"panel__expand-header\">
                <ul class=\"list--inline\">
                    <li>
                        <b>";
        // line 70
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("ID")));
        echo "</b> <%- item.id %>
                    </li>
                    <li>
                        <b>";
        // line 73
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Label")));
        echo "</b> <%= item.settings.label %>
                    </li>
                    <li>
                        <b>";
        // line 76
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Region")));
        echo "</b> <%= (item.region == -1) ? '";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("No region")));
        echo "' : item.region %>
                    </li>
                    <li>
                        <b><%- (data.blocks.rendered[item.id]) ? '' : '";
        // line 79
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Not rendered")));
        echo "' %></b>
                    </li>
                </ul>
                <div class=\"button--flat l-right js--panel-toggle\">";
        // line 82
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Info")));
        echo "</div>
                <a class=\"button--flat l-right \" href=\"<%- item.route %>\">";
        // line 83
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Edit")));
        echo "</a>

            </div>

            <div class=\"panel__expand-content\">
                <div class=\"wp-query-arguments\">
                    <table class=\"table--duo\">
                        <tr>
                            <th>";
        // line 91
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Provider")));
        echo "</th>
                            <td><%- item.settings.provider %></td>
                        </tr>
                        <tr>
                            <th>";
        // line 95
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Theme")));
        echo "</th>
                            <td><%- item.theme %></td>
                        </tr>
                        <tr>
                            <th>";
        // line 99
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Status")));
        echo "</th>
                            <td><%- (item.status) ? '";
        // line 100
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Enabled")));
        echo "' : '";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Disabled")));
        echo "' %></td>
                        </tr>
                        <tr>
                            <th>";
        // line 103
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Plugin")));
        echo "</th>
                            <td><%- item.plugin %></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <% }); %>

    </script>
";
        
        $__internal_a4430ebfd9eb93f7174ac49e78e56e0c0b8563a6effddf5edde345520255e4c5->leave($__internal_a4430ebfd9eb93f7174ac49e78e56e0c0b8563a6effddf5edde345520255e4c5_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/blocks.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  291 => 103,  283 => 100,  279 => 99,  272 => 95,  265 => 91,  254 => 83,  250 => 82,  244 => 79,  236 => 76,  230 => 73,  224 => 70,  205 => 54,  200 => 52,  196 => 51,  192 => 50,  185 => 46,  181 => 45,  175 => 42,  171 => 41,  165 => 38,  161 => 37,  155 => 34,  151 => 33,  144 => 29,  141 => 28,  135 => 27,  125 => 23,  121 => 22,  117 => 20,  111 => 17,  107 => 16,  101 => 13,  97 => 12,  93 => 10,  90 => 9,  84 => 6,  80 => 5,  76 => 4,  69 => 3,  66 => 2,  60 => 1,  53 => 27,  50 => 26,  48 => 1,);
    }
}
/* {% block toolbar %}*/
/*     {% set icon %}*/
/*     <a href="{{ url("webprofiler.dashboard", {profile: token}, {fragment: 'blocks'}) }}" title="{{ 'Blocks'|t }}">*/
/*         <img width="20" height="28" alt="{{ 'Blocks'|t }}"*/
/*              src="data:image/png;base64,{{ collector.icon }}"/>*/
/*         <span class="sf-toolbar-info-piece-additional sf-toolbar-status">{{ collector.renderedBlocksCount }}</span>*/
/*     </a>*/
/*     {% endset %}*/
/*     {% set text %}*/
/* */
/*     <div class="sf-toolbar-info-piece">*/
/*         <b>{{ 'Loaded'|t }}</b>*/
/*         <span>{{ collector.loadedBlocksCount }}</span>*/
/*     </div>*/
/*     <div class="sf-toolbar-info-piece">*/
/*         <b>{{ 'Rendered'|t }}</b>*/
/*         <span>{{ collector.renderedBlocksCount }}</span>*/
/*     </div>*/
/*     {% endset %}*/
/* */
/*     <div class="sf-toolbar-block">*/
/*         <div class="sf-toolbar-icon">{{ icon|default('') }}</div>*/
/*         <div class="sf-toolbar-info">{{ text|default('') }}</div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <script id="blocks" type="text/template">*/
/*         <h2 class="panel__title">{{ 'Blocks'|t }}</h2>*/
/* */
/*         <form class="panel__toolbar">*/
/*             <div class="panel__filter--text">*/
/*                 <input id="edit-sid" class="js--live-filter" placeholder="{{ 'ID'|t }}" type="text"/>*/
/*                 <label for="edit-sid" class="panel__filter-label">{{ 'ID'|t }}</label>*/
/*             </div>*/
/*             <div class="panel__filter--text">*/
/*                 <input id="edit-label" class="js--live-filter" placeholder="{{ 'Label'|t }}" type="text"/>*/
/*                 <label for="edit-label" class="panel__filter-label">{{ 'Label'|t }}</label>*/
/*             </div>*/
/*             <div class="panel__filter--text">*/
/*                 <input id="edit-region" class="js--live-filter" placeholder="{{ 'Region'|t }}" type="text"/>*/
/*                 <label for="edit-region" class="panel__filter-label">{{ 'Region'|t }}</label>*/
/*             </div>*/
/*             <div class="panel__filter--text">*/
/*                 <input id="edit-provider" class="js--live-filter" placeholder="{{ 'Provider'|t }}" type="text"/>*/
/*                 <label for="edit-provider" class="panel__filter-label">{{ 'Provider'|t }}</label>*/
/*             </div>*/
/*             <div class="panel__filter--select">*/
/*                 <select id="edit-rendered" class="js--live-filter">*/
/*                     <option value="">{{ 'Any'|t }}</option>*/
/*                     <option value="1">{{ 'Yes'|t }}</option>*/
/*                     <option value="0">{{ 'No'|t }}</option>*/
/*                 </select>*/
/*                 <label for="edit-rendered" class="panel__filter-label">{{ 'Rendered'|t }}</label>*/
/*             </div>*/
/*         </form>*/
/* */
/*         <% _.each( data.blocks.loaded, function( item ){ %>*/
/* */
/*         <div class="panel__container"*/
/*              data-wp-sid="<%- item.id %>"*/
/*              data-wp-label="<%= item.settings.label %>"*/
/*              data-wp-region="<%= item.region %>"*/
/*              data-wp-provider="<%= item.settings.provider %>"*/
/*              data-wp-rendered="<%- (data.blocks.rendered[item.id]) ? '1' : '0' %>">*/
/* */
/*             <div class="panel__expand-header">*/
/*                 <ul class="list--inline">*/
/*                     <li>*/
/*                         <b>{{ 'ID'|t }}</b> <%- item.id %>*/
/*                     </li>*/
/*                     <li>*/
/*                         <b>{{ 'Label'|t }}</b> <%= item.settings.label %>*/
/*                     </li>*/
/*                     <li>*/
/*                         <b>{{ 'Region'|t }}</b> <%= (item.region == -1) ? '{{ 'No region'|t }}' : item.region %>*/
/*                     </li>*/
/*                     <li>*/
/*                         <b><%- (data.blocks.rendered[item.id]) ? '' : '{{ 'Not rendered'|t }}' %></b>*/
/*                     </li>*/
/*                 </ul>*/
/*                 <div class="button--flat l-right js--panel-toggle">{{ 'Info'|t }}</div>*/
/*                 <a class="button--flat l-right " href="<%- item.route %>">{{ 'Edit'|t }}</a>*/
/* */
/*             </div>*/
/* */
/*             <div class="panel__expand-content">*/
/*                 <div class="wp-query-arguments">*/
/*                     <table class="table--duo">*/
/*                         <tr>*/
/*                             <th>{{ 'Provider'|t }}</th>*/
/*                             <td><%- item.settings.provider %></td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th>{{ 'Theme'|t }}</th>*/
/*                             <td><%- item.theme %></td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th>{{ 'Status'|t }}</th>*/
/*                             <td><%- (item.status) ? '{{ 'Enabled'|t }}' : '{{ 'Disabled'|t }}' %></td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th>{{ 'Plugin'|t }}</th>*/
/*                             <td><%- item.plugin %></td>*/
/*                         </tr>*/
/*                     </table>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <% }); %>*/
/* */
/*     </script>*/
/* {% endblock %}*/
/* */
