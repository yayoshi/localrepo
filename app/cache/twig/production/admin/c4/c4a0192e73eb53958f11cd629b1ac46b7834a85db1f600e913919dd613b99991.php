<?php

/* __string_template__003355f9a15d3d32db27e25ab347fb2e60309fbc0e02eafe6a3323cb7376dd0a */
class __TwigTemplate_87df4199ccbaf60153a12b546db0e3d8fe0b26190ebb29ee50305f1b5a8329bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__003355f9a15d3d32db27e25ab347fb2e60309fbc0e02eafe6a3323cb7376dd0a", 22);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascript' => array($this, 'block_javascript'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 24
        $context["menus"] = array(0 => "setting", 1 => "shop", 2 => "shop_tax");
        // line 29
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        echo "基本情報設定";
    }

    // line 27
    public function block_sub_title($context, array $blocks = array())
    {
        echo "税率設定";
    }

    // line 31
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 32
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/css/bootstrap-datetimepicker.min.css\">
";
    }

    // line 35
    public function block_javascript($context, array $blocks = array())
    {
        // line 36
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/moment.min.js\"></script>
<script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/moment-ja.js\"></script>
<script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/bootstrap-datetimepicker.min.js\"></script>
<script>
\$(function() {

    \$('#tax_rule_apply_date').datetimepicker({
        locale: 'ja',
        format: 'YYYY-MM-DD HH:mm',
        useCurrent: false,
        showTodayButton: true
    });

});

    function fnChange(action) {
        document.form1.action = action;
        document.form1.submit();
    }
</script>
";
    }

    // line 58
    public function block_main($context, array $blocks = array())
    {
        // line 59
        echo "    <form name=\"form1\" role=\"form\" class=\"form-horizontal\" id=\"form1\" method=\"post\" action=\"";
        // line 60
        if ((null === $this->getAttribute((isset($context["TargetTaxRule"]) ? $context["TargetTaxRule"] : null), "id", array()))) {
            // line 61
            echo $this->env->getExtension('eccube')->getUrl("admin_setting_shop_tax_new");
        } else {
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_setting_shop_tax_edit", array("id" => $this->getAttribute((isset($context["TargetTaxRule"]) ? $context["TargetTaxRule"] : null), "id", array()))), "html", null, true);
        }
        // line 64
        echo "\">
        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
    <div id=\"tax_rule_wrap\" class=\"row\">
        <div id=\"tax_rule_box\" class=\"col-md-12\">
            ";
        // line 69
        echo "            <div id=\"tax_rule_box__body\" class=\"box\">
                <div id=\"tax_rule_box__header\" class=\"box-header\">
                    <h3 class=\"box-title\">個別税率設定</h3>
                </div><!-- /.box-header -->
                <div id=\"tax_rule_box__body_inner\" class=\"box-body\">
                    ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "option_product_tax_rule", array()), 'row');
        echo "
                </div><!-- /.box-body -->
            </div><!-- /.box -->
            <div id=\"tax_rule_box__insert_button\" class=\"row btn_area2\">
                <div class=\"col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 text-center\">
                    <button class=\"btn btn-primary btn-block btn-lg\"
                            onclick=\"fnChange('";
        // line 80
        echo $this->env->getExtension('eccube')->getUrl("admin_setting_shop_tax_edit_param");
        echo "'); return false;\">登録</button>

                </div>
            </div>

            ";
        // line 86
        echo "            <div id=\"tax_common_rule_box\" class=\"box\">
                <div id=\"tax_common_rule_box__header\" class=\"box-header\">
                    <h3 class=\"box-title\">共通税率設定</h3>
                </div><!-- /.box-header -->
                <div id=\"tax_common_rule_box__body\" class=\"box-body\">
                    ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tax_rate", array()), 'row');
        echo "
                    ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "calc_rule", array()), 'row');
        echo "
                    ";
        // line 93
        if (($this->getAttribute((isset($context["TargetTaxRule"]) ? $context["TargetTaxRule"] : null), "default_tax_rule", array()) == false)) {
            // line 94
            echo "                        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "apply_date", array()), 'row');
            echo "
                    ";
        }
        // line 96
        echo "                    <div class=\"extra-form\">
                        ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 98
            echo "                            ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 99
                echo "                                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'row');
                echo "
                            ";
            }
            // line 101
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
            <div id=\"tax_common_rule_box__insert_button\" class=\"row btn_area2\">
                <div class=\"col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 text-center\">
                    <button class=\"btn btn-primary btn-block btn-lg\" onclick=\"document.form1.submit();\">登録</button>
                </div>
            </div>

            ";
        // line 112
        echo "            <div id=\"tax_rule_list\" class=\"box\">
                <div id=\"tax_rule_list__header\" class=\"box-header\">
                    <h3 class=\"box-title\">税率一覧</h3>
                </div><!-- /.box-header -->
                <div id=\"tax_rule_list__body\" class=\"box-body\">
                    <div id=\"tax_rule_list__list\" class=\"table-responsive\">
                        <table class=\"table table-striped\">
                            <thead>
                            <tr id=\"tax_rule_list__header\">
                                <th id=\"tax_rule_list__header_id\">ID</th>
                                <th id=\"tax_rule_list__header_tax_rate\">消費税率</th>
                                <th id=\"tax_rule_list__header_calc_rule\">課税規則</th>
                                <th id=\"tax_rule_list__header_default_tax_rule\">適用日時</th>
                                <th id=\"tax_rule_list__header_menu_box\">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["TaxRules"]) ? $context["TaxRules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["TaxRule"]) {
            // line 130
            echo "                            <tr id=\"tax_rule_list__item--";
            echo twig_escape_filter($this->env, $this->getAttribute($context["TaxRule"], "id", array()), "html", null, true);
            echo "\">
                                <td id=\"tax_rule_list__id--";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["TaxRule"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["TaxRule"], "id", array()), "html", null, true);
            echo "</td>
                                <td id=\"tax_rule_list__tax_rate--";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["TaxRule"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["TaxRule"], "tax_rate", array()), "html", null, true);
            echo "%</td>
                                <td id=\"tax_rule_list__calc_rule--";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($context["TaxRule"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["TaxRule"], "calc_rule", array()), "html", null, true);
            echo "</td>
                                <td id=\"tax_rule_list__default_tax_rule--";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["TaxRule"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["TaxRule"], "default_tax_rule", array())) ? ("基本税率設定") : (twig_date_format_filter($this->env, $this->getAttribute($context["TaxRule"], "apply_date", array()), "Y/m/d  H:i"))), "html", null, true);
            echo "</td>
                                <td id=\"tax_rule_list__menu_box--";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($context["TaxRule"], "id", array()), "html", null, true);
            echo "\" class=\"icon_edit\">
                                    <div id=\"tax_rule_list__menu_box_toggle\" class=\"dropdown\">
                                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"><svg class=\"cb cb-ellipsis-h\"> <use xlink:href=\"#cb-ellipsis-h\" /></svg></a>
                                        <ul id=\"tax_rule_list__menu--";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($context["TaxRule"], "id", array()), "html", null, true);
            echo "\" class=\"dropdown-menu dropdown-menu-right\">
                                            <li><a href=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_setting_shop_tax_edit", array("id" => $this->getAttribute($context["TaxRule"], "id", array()))), "html", null, true);
            echo "\">編集</a></li>
                                            ";
            // line 140
            if ($this->getAttribute($context["TaxRule"], "default_tax_rule", array())) {
                // line 141
                echo "                                                <li><a>削除</a></li>
                                            ";
            } else {
                // line 143
                echo "                                                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_setting_shop_tax_delete", array("id" => $this->getAttribute($context["TaxRule"], "id", array()))), "html", null, true);
                echo "\" ";
                echo $this->env->getExtension('eccube')->getCsrfTokenForAnchor();
                echo " data-method=\"delete\">削除</a></li>
                                            ";
            }
            // line 145
            echo "                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['TaxRule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "                            </tbody>
                        </table>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "__string_template__003355f9a15d3d32db27e25ab347fb2e60309fbc0e02eafe6a3323cb7376dd0a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 150,  276 => 145,  268 => 143,  264 => 141,  262 => 140,  258 => 139,  254 => 138,  248 => 135,  242 => 134,  236 => 133,  230 => 132,  224 => 131,  219 => 130,  215 => 129,  196 => 112,  185 => 102,  179 => 101,  173 => 99,  170 => 98,  166 => 97,  163 => 96,  157 => 94,  155 => 93,  151 => 92,  147 => 91,  140 => 86,  132 => 80,  123 => 74,  116 => 69,  110 => 65,  107 => 64,  104 => 63,  101 => 61,  99 => 60,  97 => 59,  94 => 58,  71 => 38,  67 => 37,  62 => 36,  59 => 35,  52 => 32,  49 => 31,  43 => 27,  37 => 26,  33 => 22,  31 => 29,  29 => 24,  11 => 22,);
    }
}
/* {#*/
/* This file is part of EC-CUBE*/
/* */
/* Copyright(c) 2000-2015 LOCKON CO.,LTD. All Rights Reserved.*/
/* */
/* http://www.lockon.co.jp/*/
/* */
/* This program is free software; you can redistribute it and/or*/
/* modify it under the terms of the GNU General Public License*/
/* as published by the Free Software Foundation; either version 2*/
/* of the License, or (at your option) any later version.*/
/* */
/* This program is distributed in the hope that it will be useful,*/
/* but WITHOUT ANY WARRANTY; without even the implied warranty of*/
/* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the*/
/* GNU General Public License for more details.*/
/* */
/* You should have received a copy of the GNU General Public License*/
/* along with this program; if not, write to the Free Software*/
/* Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.*/
/* #}*/
/* {% extends 'default_frame.twig' %}*/
/* */
/* {% set menus = ['setting', 'shop', 'shop_tax'] %}*/
/* */
/* {% block title %}基本情報設定{% endblock %}*/
/* {% block sub_title %}税率設定{% endblock %}*/
/* */
/* {% form_theme form 'Form/bootstrap_3_horizontal_layout.html.twig' %}*/
/* */
/* {% block stylesheet %}*/
/* <link rel="stylesheet" href="{{ app.config.admin_urlpath }}/assets/css/bootstrap-datetimepicker.min.css">*/
/* {% endblock stylesheet %}*/
/* */
/* {% block javascript %}*/
/* <script src="{{ app.config.admin_urlpath }}/assets/js/vendor/moment.min.js"></script>*/
/* <script src="{{ app.config.admin_urlpath }}/assets/js/vendor/moment-ja.js"></script>*/
/* <script src="{{ app.config.admin_urlpath }}/assets/js/vendor/bootstrap-datetimepicker.min.js"></script>*/
/* <script>*/
/* $(function() {*/
/* */
/*     $('#tax_rule_apply_date').datetimepicker({*/
/*         locale: 'ja',*/
/*         format: 'YYYY-MM-DD HH:mm',*/
/*         useCurrent: false,*/
/*         showTodayButton: true*/
/*     });*/
/* */
/* });*/
/* */
/*     function fnChange(action) {*/
/*         document.form1.action = action;*/
/*         document.form1.submit();*/
/*     }*/
/* </script>*/
/* {% endblock javascript%}*/
/* */
/* {% block main %}*/
/*     <form name="form1" role="form" class="form-horizontal" id="form1" method="post" action="*/
/*     {%- if TargetTaxRule.id is null -%}*/
/*         {{ url('admin_setting_shop_tax_new')}}*/
/*     {%- else -%}*/
/*         {{ url('admin_setting_shop_tax_edit', { id : TargetTaxRule.id }) }}*/
/*     {%- endif -%}">*/
/*         {{ form_widget(form._token) }}*/
/*     <div id="tax_rule_wrap" class="row">*/
/*         <div id="tax_rule_box" class="col-md-12">*/
/*             {# 個別税率設定 #}*/
/*             <div id="tax_rule_box__body" class="box">*/
/*                 <div id="tax_rule_box__header" class="box-header">*/
/*                     <h3 class="box-title">個別税率設定</h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 <div id="tax_rule_box__body_inner" class="box-body">*/
/*                     {{ form_row(form.option_product_tax_rule) }}*/
/*                 </div><!-- /.box-body -->*/
/*             </div><!-- /.box -->*/
/*             <div id="tax_rule_box__insert_button" class="row btn_area2">*/
/*                 <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 text-center">*/
/*                     <button class="btn btn-primary btn-block btn-lg"*/
/*                             onclick="fnChange('{{ url('admin_setting_shop_tax_edit_param') }}'); return false;">登録</button>*/
/* */
/*                 </div>*/
/*             </div>*/
/* */
/*             {# 共通税率設定 #}*/
/*             <div id="tax_common_rule_box" class="box">*/
/*                 <div id="tax_common_rule_box__header" class="box-header">*/
/*                     <h3 class="box-title">共通税率設定</h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 <div id="tax_common_rule_box__body" class="box-body">*/
/*                     {{ form_row(form.tax_rate) }}*/
/*                     {{ form_row(form.calc_rule) }}*/
/*                     {% if TargetTaxRule.default_tax_rule == false %}*/
/*                         {{ form_row(form.apply_date) }}*/
/*                     {% endif %}*/
/*                     <div class="extra-form">*/
/*                         {% for f in form.getIterator %}*/
/*                             {% if f.vars.name matches '[^plg*]' %}*/
/*                                 {{ form_row(f) }}*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                 </div><!-- /.box-body -->*/
/*             </div><!-- /.box -->*/
/*             <div id="tax_common_rule_box__insert_button" class="row btn_area2">*/
/*                 <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 text-center">*/
/*                     <button class="btn btn-primary btn-block btn-lg" onclick="document.form1.submit();">登録</button>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             {# 税率一覧 #}*/
/*             <div id="tax_rule_list" class="box">*/
/*                 <div id="tax_rule_list__header" class="box-header">*/
/*                     <h3 class="box-title">税率一覧</h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 <div id="tax_rule_list__body" class="box-body">*/
/*                     <div id="tax_rule_list__list" class="table-responsive">*/
/*                         <table class="table table-striped">*/
/*                             <thead>*/
/*                             <tr id="tax_rule_list__header">*/
/*                                 <th id="tax_rule_list__header_id">ID</th>*/
/*                                 <th id="tax_rule_list__header_tax_rate">消費税率</th>*/
/*                                 <th id="tax_rule_list__header_calc_rule">課税規則</th>*/
/*                                 <th id="tax_rule_list__header_default_tax_rule">適用日時</th>*/
/*                                 <th id="tax_rule_list__header_menu_box">&nbsp;</th>*/
/*                             </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                             {%  for TaxRule in TaxRules %}*/
/*                             <tr id="tax_rule_list__item--{{ TaxRule.id }}">*/
/*                                 <td id="tax_rule_list__id--{{ TaxRule.id }}">{{ TaxRule.id }}</td>*/
/*                                 <td id="tax_rule_list__tax_rate--{{ TaxRule.id }}">{{ TaxRule.tax_rate }}%</td>*/
/*                                 <td id="tax_rule_list__calc_rule--{{ TaxRule.id }}">{{ TaxRule.calc_rule }}</td>*/
/*                                 <td id="tax_rule_list__default_tax_rule--{{ TaxRule.id }}">{{ TaxRule.default_tax_rule  ? '基本税率設定' : TaxRule.apply_date|date('Y/m/d  H:i') }}</td>*/
/*                                 <td id="tax_rule_list__menu_box--{{ TaxRule.id }}" class="icon_edit">*/
/*                                     <div id="tax_rule_list__menu_box_toggle" class="dropdown">*/
/*                                         <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><svg class="cb cb-ellipsis-h"> <use xlink:href="#cb-ellipsis-h" /></svg></a>*/
/*                                         <ul id="tax_rule_list__menu--{{ TaxRule.id }}" class="dropdown-menu dropdown-menu-right">*/
/*                                             <li><a href="{{ url('admin_setting_shop_tax_edit', { id : TaxRule.id }) }}">編集</a></li>*/
/*                                             {% if TaxRule.default_tax_rule %}*/
/*                                                 <li><a>削除</a></li>*/
/*                                             {% else %}*/
/*                                                 <li><a href="{{ url('admin_setting_shop_tax_delete', { id : TaxRule.id }) }}" {{ csrf_token_for_anchor() }} data-method="delete">削除</a></li>*/
/*                                             {% endif %}*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                 </td>*/
/*                             </tr>*/
/*                             {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*                 </div><!-- /.box-body -->*/
/*             </div><!-- /.box -->*/
/*         </div>*/
/*     </div>*/
/*     </form>*/
/* {% endblock %}*/
