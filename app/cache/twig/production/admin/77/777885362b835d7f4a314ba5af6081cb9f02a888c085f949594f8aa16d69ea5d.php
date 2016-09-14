<?php

/* __string_template__3939bdbe1de9071fcd4295b439e7d4f596d0596d569f50cdd89b141c40c2cbbf */
class __TwigTemplate_224c7b6b73f10ca7f0649a6dd5cdeb82993cd27fe28acec121ff0a84984f132b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 23
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__3939bdbe1de9071fcd4295b439e7d4f596d0596d569f50cdd89b141c40c2cbbf", 23);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
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
        // line 25
        $context["menus"] = array(0 => "setting", 1 => "shop", 2 => "tradelaw");
        // line 30
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 23
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_title($context, array $blocks = array())
    {
        echo "ショップ設定";
    }

    // line 28
    public function block_sub_title($context, array $blocks = array())
    {
        echo "特定商取引法管理";
    }

    // line 32
    public function block_javascript($context, array $blocks = array())
    {
        // line 33
        echo "<script src=\"//ajaxzip3.github.io/ajaxzip3.js\" charset=\"UTF-8\"></script>
<script>
    \$(function() {
        \$('#zip-search').click(function(event) {
            AjaxZip3.zip2addr('tradelaw[law_zip][law_zip01]', 'tradelaw[law_zip][law_zip02]', 'tradelaw[law_address][law_pref]', 'tradelaw[law_address][law_addr01]');
        });
    });
</script>
";
    }

    // line 43
    public function block_main($context, array $blocks = array())
    {
        // line 44
        echo "
<form name=\"tradelaw_form\" role=\"form\" id=\"tradelaw_form\" method=\"post\" action=\"";
        // line 45
        echo $this->env->getExtension('eccube')->getUrl("admin_setting_shop_tradelaw");
        echo "\">
    ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
    <div class=\"row\" id=\"aside_wrap\">
        <div id=\"detail_wrap\" class=\"col-md-9\">
            <div id=\"detail_box\" class=\"box form-horizontal\">
                <div id=\"detail_box__header\" class=\"box-header\">
                    <h3 class=\"box-title\">特定商取引法</h3>
                </div><!-- /.box-header -->
                <div id=\"detail_box__body\" class=\"box-body\">
                    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "law_company", array()), 'row');
        echo "
                    ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "law_manager", array()), 'row');
        echo "

                    ";
        // line 58
        echo "                    <div id=\"detail_box__law_address\" class=\"form-group\">
                        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "law_address", array()), 'label');
        echo "
                        <div id=\"detail_box__zip\" class=\"col-sm-9 col-lg-10 input_zip form-inline\">
                            〒";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "law_zip", array()), "law_zip01", array()), 'widget');
        echo "-";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "law_zip", array()), "law_zip02", array()), 'widget');
        echo "
                            ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "law_zip", array()), "law_zip01", array()), 'errors');
        echo "
                            ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "law_zip", array()), "law_zip02", array()), 'errors');
        echo "
                            <span><button type=\"button\" id=\"zip-search\" class=\"btn btn-default btn-sm\">郵便番号から自動入力</button></span>
                        </div>
                    </div>

                    ";
        // line 69
        echo "                    <div class=\"form-group ";
        if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "law_address", array()), "law_pref", array()), "vars", array()), "errors", array()))) {
            echo "has-error";
        }
        echo "\">
                        <div id=\"detail_box__law_pref\" class=\"col-sm-offset-2 col-sm-9 col-lg-10 form-inline\">
                            ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "law_address", array()), "law_pref", array()), 'widget');
        echo "
                            ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "law_address", array()), "law_pref", array()), 'errors');
        echo "
                        </div>
                    </div>
                    ";
        // line 76
        echo "                    <div class=\"form-group ";
        if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "law_address", array()), "law_addr02", array()), "vars", array()), "errors", array()))) {
            echo "has-error";
        }
        echo "\">
                        <div id=\"detail_box__law_addr01\" class=\"col-sm-offset-2 col-sm-9 col-lg-10\">
                            ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "law_address", array()), "law_addr01", array()), 'widget', array("attr" => array("placeholder" => "市区町村名（例：千代田区神田神保町）")));
        echo "
                            ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "law_address", array()), "law_addr01", array()), 'errors');
        echo "
                        </div>
                    </div>
                    ";
        // line 83
        echo "                    <div class=\"form-group ";
        if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "law_address", array()), "law_addr02", array()), "vars", array()), "errors", array()))) {
            echo "has-error";
        }
        echo "\">
                        <div id=\"detail_box__law_addr02\" class=\"col-sm-offset-2 col-sm-9 col-lg-10\">
                            ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "law_address", array()), "law_addr02", array()), 'widget', array("attr" => array("placeholder" => "番地・ビル名（例：1-3-5）")));
        echo "
                            ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "law_address", array()), "law_addr02", array()), 'errors');
        echo "
                        </div>
                    </div>

                    ";
        // line 91
        echo "                    <div id=\"detail_box__law_tel\" class=\"form-group\">
                        ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "law_tel", array()), 'label');
        echo "
                        <div class=\"col-sm-9 col-lg-10 input_tel form-inline\">
                            ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "law_tel", array()), "law_tel01", array()), 'widget');
        echo "-";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "law_tel", array()), "law_tel02", array()), 'widget');
        echo "-";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "law_tel", array()), "law_tel03", array()), 'widget');
        echo "
                            ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "law_tel", array()), "law_tel01", array()), 'errors');
        echo "
                            ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "law_tel", array()), "law_tel02", array()), 'errors');
        echo "
                            ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "law_tel", array()), "law_tel03", array()), 'errors');
        echo "
                        </div>
                    </div>
                    ";
        // line 101
        echo "                    <div id=\"detail_box__law_fax\" class=\"form-group\">
                        ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "law_fax", array()), 'label');
        echo "
                        <div class=\"col-sm-9 col-lg-10 input_tel form-inline\">
                            ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "law_fax", array()), "law_fax01", array()), 'widget');
        echo "-";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "law_fax", array()), "law_fax02", array()), 'widget');
        echo "-";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "law_fax", array()), "law_fax03", array()), 'widget');
        echo "
                            ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "law_fax", array()), "law_fax01", array()), 'errors');
        echo "
                            ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "law_fax", array()), "law_fax02", array()), 'errors');
        echo "
                            ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "law_fax", array()), "law_fax03", array()), 'errors');
        echo "
                        </div>
                    </div>

                    ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "law_email", array()), 'row');
        echo "
                    ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "law_url", array()), 'row');
        echo "
                    ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "law_term01", array()), 'row');
        echo "
                    ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "law_term02", array()), 'row');
        echo "
                    ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "law_term03", array()), 'row');
        echo "
                    ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "law_term04", array()), 'row');
        echo "
                    ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "law_term05", array()), 'row');
        echo "
                    ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "law_term06", array()), 'row');
        echo "
                    <div class=\"extra-form\">
                        ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 121
            echo "                            ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 122
                echo "                                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'row');
                echo "
                            ";
            }
            // line 124
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
        <div id=\"common_box\" class=\"col-md-3\">
            <div class=\"col_inner\" id=\"aside_column\">
                <div id=\"common_button_box\" class=\"box no-header\">
                    <div id=\"common_button_box__body\" class=\"box-body\">
                        <div  class=\"row\">
                            <div class=\"col-xs-12\">
                                <div class=\"form-group\">
                                    <div id=\"common_button_box__insert_button\" class=\"row text-center\">
                                        <div class=\"col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0\">
                                            <button class=\"btn btn-primary btn-block btn-lg\" onclick=\"document.form1.submit();\">登録</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div><!-- /.col -->
    </div>


</form>

";
    }

    public function getTemplateName()
    {
        return "__string_template__3939bdbe1de9071fcd4295b439e7d4f596d0596d569f50cdd89b141c40c2cbbf";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 125,  281 => 124,  275 => 122,  272 => 121,  268 => 120,  263 => 118,  259 => 117,  255 => 116,  251 => 115,  247 => 114,  243 => 113,  239 => 112,  235 => 111,  228 => 107,  224 => 106,  220 => 105,  212 => 104,  207 => 102,  204 => 101,  198 => 97,  194 => 96,  190 => 95,  182 => 94,  177 => 92,  174 => 91,  167 => 86,  163 => 85,  155 => 83,  149 => 79,  145 => 78,  137 => 76,  131 => 72,  127 => 71,  119 => 69,  111 => 63,  107 => 62,  101 => 61,  96 => 59,  93 => 58,  88 => 55,  84 => 54,  73 => 46,  69 => 45,  66 => 44,  63 => 43,  51 => 33,  48 => 32,  42 => 28,  36 => 27,  32 => 23,  30 => 30,  28 => 25,  11 => 23,);
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
/* */
/* {% extends 'default_frame.twig' %}*/
/* */
/* {% set menus = ['setting', 'shop', 'tradelaw'] %}*/
/* */
/* {% block title %}ショップ設定{% endblock %}*/
/* {% block sub_title %}特定商取引法管理{% endblock %}*/
/* */
/* {% form_theme form 'Form/bootstrap_3_horizontal_layout.html.twig' %}*/
/* */
/* {% block javascript %}*/
/* <script src="//ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>*/
/* <script>*/
/*     $(function() {*/
/*         $('#zip-search').click(function(event) {*/
/*             AjaxZip3.zip2addr('tradelaw[law_zip][law_zip01]', 'tradelaw[law_zip][law_zip02]', 'tradelaw[law_address][law_pref]', 'tradelaw[law_address][law_addr01]');*/
/*         });*/
/*     });*/
/* </script>*/
/* {% endblock javascript %}*/
/* */
/* {% block main %}*/
/* */
/* <form name="tradelaw_form" role="form" id="tradelaw_form" method="post" action="{{ url('admin_setting_shop_tradelaw') }}">*/
/*     {{ form_widget(form._token) }}*/
/*     <div class="row" id="aside_wrap">*/
/*         <div id="detail_wrap" class="col-md-9">*/
/*             <div id="detail_box" class="box form-horizontal">*/
/*                 <div id="detail_box__header" class="box-header">*/
/*                     <h3 class="box-title">特定商取引法</h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 <div id="detail_box__body" class="box-body">*/
/*                     {{ form_row(form.law_company) }}*/
/*                     {{ form_row(form.law_manager) }}*/
/* */
/*                     {# 住所：郵便番号 #}*/
/*                     <div id="detail_box__law_address" class="form-group">*/
/*                         {{ form_label(form.law_address) }}*/
/*                         <div id="detail_box__zip" class="col-sm-9 col-lg-10 input_zip form-inline">*/
/*                             〒{{ form_widget(form.law_zip.law_zip01) }}-{{ form_widget(form.law_zip.law_zip02) }}*/
/*                             {{ form_errors(form.law_zip.law_zip01) }}*/
/*                             {{ form_errors(form.law_zip.law_zip02) }}*/
/*                             <span><button type="button" id="zip-search" class="btn btn-default btn-sm">郵便番号から自動入力</button></span>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     {# 住所：都道府県 #}*/
/*                     <div class="form-group {% if form.law_address.law_pref.vars.errors is not empty %}has-error{% endif %}">*/
/*                         <div id="detail_box__law_pref" class="col-sm-offset-2 col-sm-9 col-lg-10 form-inline">*/
/*                             {{ form_widget(form.law_address.law_pref) }}*/
/*                             {{ form_errors(form.law_address.law_pref) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     {# 住所：住所1 #}*/
/*                     <div class="form-group {% if form.law_address.law_addr02.vars.errors is not empty  %}has-error{% endif %}">*/
/*                         <div id="detail_box__law_addr01" class="col-sm-offset-2 col-sm-9 col-lg-10">*/
/*                             {{ form_widget(form.law_address.law_addr01, { attr : { placeholder : '市区町村名（例：千代田区神田神保町）'}} ) }}*/
/*                             {{ form_errors(form.law_address.law_addr01) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     {# 住所：住所2 #}*/
/*                     <div class="form-group {% if form.law_address.law_addr02.vars.errors is not empty  %}has-error{% endif %}">*/
/*                         <div id="detail_box__law_addr02" class="col-sm-offset-2 col-sm-9 col-lg-10">*/
/*                             {{ form_widget(form.law_address.law_addr02, { attr : { placeholder : '番地・ビル名（例：1-3-5）' }}) }}*/
/*                             {{ form_errors(form.law_address.law_addr02) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     {# 電話番号 #}*/
/*                     <div id="detail_box__law_tel" class="form-group">*/
/*                         {{ form_label(form.law_tel) }}*/
/*                         <div class="col-sm-9 col-lg-10 input_tel form-inline">*/
/*                             {{ form_widget(form.law_tel.law_tel01) }}-{{ form_widget(form.law_tel.law_tel02) }}-{{ form_widget(form.law_tel.law_tel03) }}*/
/*                             {{ form_errors(form.law_tel.law_tel01) }}*/
/*                             {{ form_errors(form.law_tel.law_tel02) }}*/
/*                             {{ form_errors(form.law_tel.law_tel03) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     {# FAX番号 #}*/
/*                     <div id="detail_box__law_fax" class="form-group">*/
/*                         {{ form_label(form.law_fax) }}*/
/*                         <div class="col-sm-9 col-lg-10 input_tel form-inline">*/
/*                             {{ form_widget(form.law_fax.law_fax01) }}-{{ form_widget(form.law_fax.law_fax02) }}-{{ form_widget(form.law_fax.law_fax03) }}*/
/*                             {{ form_errors(form.law_fax.law_fax01) }}*/
/*                             {{ form_errors(form.law_fax.law_fax02) }}*/
/*                             {{ form_errors(form.law_fax.law_fax03) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     {{ form_row(form.law_email) }}*/
/*                     {{ form_row(form.law_url) }}*/
/*                     {{ form_row(form.law_term01) }}*/
/*                     {{ form_row(form.law_term02) }}*/
/*                     {{ form_row(form.law_term03) }}*/
/*                     {{ form_row(form.law_term04) }}*/
/*                     {{ form_row(form.law_term05) }}*/
/*                     {{ form_row(form.law_term06) }}*/
/*                     <div class="extra-form">*/
/*                         {% for f in form.getIterator %}*/
/*                             {% if f.vars.name matches '[^plg*]' %}*/
/*                                 {{ form_row(f) }}*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                 </div><!-- /.box-body -->*/
/*             </div><!-- /.box -->*/
/*         </div>*/
/*         <div id="common_box" class="col-md-3">*/
/*             <div class="col_inner" id="aside_column">*/
/*                 <div id="common_button_box" class="box no-header">*/
/*                     <div id="common_button_box__body" class="box-body">*/
/*                         <div  class="row">*/
/*                             <div class="col-xs-12">*/
/*                                 <div class="form-group">*/
/*                                     <div id="common_button_box__insert_button" class="row text-center">*/
/*                                         <div class="col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0">*/
/*                                             <button class="btn btn-primary btn-block btn-lg" onclick="document.form1.submit();">登録</button>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div><!-- /.box-body -->*/
/*                 </div><!-- /.box -->*/
/*             </div>*/
/*         </div><!-- /.col -->*/
/*     </div>*/
/* */
/* */
/* </form>*/
/* */
/* {% endblock %}*/
/* */
