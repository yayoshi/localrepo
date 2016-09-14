<?php

/* __string_template__b2dec542fd2acf0de4ec657f41fbd6044ec1266c95439100cb6c29129d04af76 */
class __TwigTemplate_586c120256ef3c4617e395fb312de15f3a8d43fd9d18d14d88bf47cb43db06dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 24
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__b2dec542fd2acf0de4ec657f41fbd6044ec1266c95439100cb6c29129d04af76", 24);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 26
        $context["menus"] = array(0 => "content", 1 => "page");
        // line 31
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 24
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_title($context, array $blocks = array())
    {
        echo "コンテンツ管理";
    }

    // line 29
    public function block_sub_title($context, array $blocks = array())
    {
        echo "ページ管理";
    }

    // line 33
    public function block_main($context, array $blocks = array())
    {
        // line 34
        echo "    <form role=\"form\" name=\"content_page_form\" id=\"content_page_form\" method=\"post\"
          action=\"";
        // line 35
        if ( !(null === (isset($context["page_id"]) ? $context["page_id"] : null))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_content_page_edit", array("id" => (isset($context["page_id"]) ? $context["page_id"] : null))), "html", null, true);
        } else {
            echo $this->env->getExtension('eccube')->getUrl("admin_content_page_new");
        }
        echo "\">
        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id", array()), 'widget');
        echo "
        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "DeviceType", array()), 'widget', array("attr" => array("style" => "display: none;")));
        echo "
        <div class=\"row\" id=\"aside_wrap\">
            <div id=\"detail\" class=\"col-md-9\">
                <div id=\"detail_box\" class=\"box form-horizontal\">
                    <div id=\"detail_box__header\" class=\"box-header\">
                        <h3 class=\"box-title\">ページ詳細編集</h3>
                    </div>
                    <!-- /.box-header -->
                    <div id=\"detail_box__body\" class=\"box-body\">

                        <div id=\"detail_box__name\" class=\"form-group\">
                            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'label');
        echo "
                            <div class=\"col-sm-9 col-lg-10\">
                                ";
        // line 51
        if ((isset($context["editable"]) ? $context["editable"] : null)) {
            // line 52
            echo "                                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'widget');
            echo "
                                ";
        } else {
            // line 54
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), "vars", array()), "value", array()), "html", null, true);
            echo "
                                    ";
            // line 55
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'widget', array("type" => "hidden"));
            echo "
                                ";
        }
        // line 57
        echo "                                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'errors');
        echo "
                            </div>
                        </div>
                        <div id=\"detail_box__url\" class=\"form-group word-break\">
                            ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "url", array()), 'label');
        echo "
                            <div class=\"col-sm-9 col-lg-10 form-inline\">
                                ";
        // line 63
        if ((isset($context["editable"]) ? $context["editable"] : null)) {
            // line 64
            echo "                                    ";
            echo $this->env->getExtension('eccube')->getUrl("top");
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "user_data_route", array()), "html", null, true);
            echo "/";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "url", array()), 'widget');
            echo "
                                ";
        } else {
            // line 66
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "schemeAndHttpHost", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basePath", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "routes", array()), "get", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "url", array()), "vars", array()), "value", array())), "method"), "path", array()), "html", null, true);
            echo "
                                    ";
            // line 67
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "url", array()), 'widget', array("type" => "hidden"));
            echo "
                                ";
        }
        // line 69
        echo "                                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "url", array()), 'errors');
        echo "
                            </div>
                        </div>
                        <div id=\"detail_box__file_name\" class=\"form-group word-break\">
                            ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file_name", array()), 'label');
        echo "
                            <div class=\"col-sm-9 col-lg-10 form-inline\">
                                ";
        // line 75
        if ((isset($context["editable"]) ? $context["editable"] : null)) {
            // line 76
            echo "                                    ";
            echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
            echo "/";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file_name", array()), 'widget');
            echo ".twig
                                ";
        } else {
            // line 78
            echo "                                    ";
            echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file_name", array()), "vars", array()), "value", array()), "html", null, true);
            echo ".twig
                                    ";
            // line 79
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file_name", array()), 'widget', array("type" => "hidden"));
            echo "
                                ";
        }
        // line 81
        echo "                                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file_name", array()), 'errors');
        echo "
                            </div>
                        </div>

                        <div id=\"detail_box__tpl_data\" class=\"form-group\">
                            ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tpl_data", array()), 'label');
        echo "
                            <div class=\"col-sm-9 col-lg-10\">
                                ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tpl_data", array()), 'widget', array("attr" => array("rows" => 15, "style" => "font-size:12px")));
        echo "
                                ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tpl_data", array()), 'errors');
        echo "
                            </div>
                        </div>

                        <div class=\"extra-form\">
                            ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 95
            echo "                                ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 96
                echo "                                    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'row');
                echo "
                                ";
            }
            // line 98
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "                        </div>
                    </div>
                </div>
                <div id=\"detail_meta_box\" class=\"box form-horizontal\">
                    <div id=\"detail_meta_box__header\" class=\"box-header\">
                        <h3 class=\"box-title\">
                            meta設定
                        </h3>
                    </div>
                    <!-- /.box-header -->

                    <div id=\"detail_meta_box__body\" class=\"box-body\">
                        ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "author", array()), 'row');
        echo "
                        ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'row');
        echo "
                        ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "keyword", array()), 'row');
        echo "
                        ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "meta_robots", array()), 'row');
        echo "
                    </div>
                </div>

                <div id=\"detail_box__footer\" class=\"row hidden-xs hidden-sm\">
                    <div id=\"detail_box__back_button\" class=\"col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 text-center btn_area\">
                        <p><a href=\"";
        // line 120
        echo $this->env->getExtension('eccube')->getUrl("admin_content_page");
        echo "\">戻る</a></p>
                    </div>
                </div>
            </div>
            <!-- /.col -->
            <div id=\"common_box\" class=\"col-md-3\">
                <div class=\"col_inner\" id=\"aside_column\">
                    <div id=\"common_button_box\" class=\"box no-header\">
                        <div id=\"common_button_box__body\" class=\"box-body\">
                            <div id=\"common_button_box__insert_button\" class=\"row text-center\">
                                <div class=\"col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0\">
                                    <button class=\"btn btn-primary btn-block btn-lg\"
                                            onclick=\"document.content_page_form.submit();\">登録
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
            <!-- /.col -->
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "__string_template__b2dec542fd2acf0de4ec657f41fbd6044ec1266c95439100cb6c29129d04af76";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 120,  248 => 114,  244 => 113,  240 => 112,  236 => 111,  222 => 99,  216 => 98,  210 => 96,  207 => 95,  203 => 94,  195 => 89,  191 => 88,  186 => 86,  177 => 81,  172 => 79,  165 => 78,  157 => 76,  155 => 75,  150 => 73,  142 => 69,  137 => 67,  130 => 66,  121 => 64,  119 => 63,  114 => 61,  106 => 57,  101 => 55,  96 => 54,  90 => 52,  88 => 51,  83 => 49,  69 => 38,  65 => 37,  61 => 36,  53 => 35,  50 => 34,  47 => 33,  41 => 29,  35 => 28,  31 => 24,  29 => 31,  27 => 26,  11 => 24,);
    }
}
/* {#*/
/* /**/
/*  * This file is part of EC-CUBE*/
/*  **/
/*  * Copyright(c) 2000-2015 LOCKON CO.,LTD. All Rights Reserved.*/
/*  **/
/*  * http://www.lockon.co.jp/*/
/*  **/
/*  * This program is free software; you can redistribute it and/or*/
/*  * modify it under the terms of the GNU General Public License*/
/*  * as published by the Free Software Foundation; either version 2*/
/*  * of the License, or (at your option) any later version.*/
/*  **/
/*  * This program is distributed in the hope that it will be useful,*/
/*  * but WITHOUT ANY WARRANTY; without even the implied warranty of*/
/*  * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the*/
/*  * GNU General Public License for more details.*/
/*  **/
/*  * You should have received a copy of the GNU General Public License*/
/*  * along with this program; if not, write to the Free Software*/
/*  * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.*/
/*  *//* */
/* #}*/
/* {% extends 'default_frame.twig' %}*/
/* */
/* {% set menus = ['content', 'page'] %}*/
/* */
/* {% block title %}コンテンツ管理{% endblock %}*/
/* {% block sub_title %}ページ管理{% endblock %}*/
/* */
/* {% form_theme form 'Form/bootstrap_3_horizontal_layout.html.twig' %}*/
/* */
/* {% block main %}*/
/*     <form role="form" name="content_page_form" id="content_page_form" method="post"*/
/*           action="{%- if page_id is not null %}{{ url('admin_content_page_edit', {id: page_id}) }}{% else %}{{ url('admin_content_page_new') }}{% endif -%}">*/
/*         {{ form_widget(form._token) }}*/
/*         {{ form_widget(form.id) }}*/
/*         {{ form_widget(form.DeviceType, { attr : { style : 'display: none;' } } ) }}*/
/*         <div class="row" id="aside_wrap">*/
/*             <div id="detail" class="col-md-9">*/
/*                 <div id="detail_box" class="box form-horizontal">*/
/*                     <div id="detail_box__header" class="box-header">*/
/*                         <h3 class="box-title">ページ詳細編集</h3>*/
/*                     </div>*/
/*                     <!-- /.box-header -->*/
/*                     <div id="detail_box__body" class="box-body">*/
/* */
/*                         <div id="detail_box__name" class="form-group">*/
/*                             {{ form_label(form.name) }}*/
/*                             <div class="col-sm-9 col-lg-10">*/
/*                                 {% if editable %}*/
/*                                     {{ form_widget(form.name) }}*/
/*                                 {% else %}*/
/*                                     {{ form.name.vars.value }}*/
/*                                     {{ form_widget(form.name, { type : 'hidden' } ) }}*/
/*                                 {% endif %}*/
/*                                 {{ form_errors(form.name) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div id="detail_box__url" class="form-group word-break">*/
/*                             {{ form_label(form.url) }}*/
/*                             <div class="col-sm-9 col-lg-10 form-inline">*/
/*                                 {% if editable %}*/
/*                                     {{ url('top') }}{{ app.config.user_data_route }}/{{ form_widget(form.url) }}*/
/*                                 {% else %}*/
/*                                     {{ app.request.schemeAndHttpHost }}{{ app.request.basePath }}{{ app.routes.get(form.url.vars.value).path }}*/
/*                                     {{ form_widget(form.url, { type : 'hidden' } ) }}*/
/*                                 {% endif %}*/
/*                                 {{ form_errors(form.url) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div id="detail_box__file_name" class="form-group word-break">*/
/*                             {{ form_label(form.file_name) }}*/
/*                             <div class="col-sm-9 col-lg-10 form-inline">*/
/*                                 {% if editable %}*/
/*                                     {{ template_path }}/{{ form_widget(form.file_name) }}.twig*/
/*                                 {% else %}*/
/*                                     {{ template_path }}/{{ form.file_name.vars.value }}.twig*/
/*                                     {{ form_widget(form.file_name, { type : 'hidden' } ) }}*/
/*                                 {% endif %}*/
/*                                 {{ form_errors(form.file_name) }}*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div id="detail_box__tpl_data" class="form-group">*/
/*                             {{ form_label(form.tpl_data) }}*/
/*                             <div class="col-sm-9 col-lg-10">*/
/*                                 {{ form_widget(form.tpl_data, { attr : { 'rows' : 15, style : 'font-size:12px' } }) }}*/
/*                                 {{ form_errors(form.tpl_data) }}*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="extra-form">*/
/*                             {% for f in form.getIterator %}*/
/*                                 {% if f.vars.name matches '[^plg*]' %}*/
/*                                     {{ form_row(f) }}*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div id="detail_meta_box" class="box form-horizontal">*/
/*                     <div id="detail_meta_box__header" class="box-header">*/
/*                         <h3 class="box-title">*/
/*                             meta設定*/
/*                         </h3>*/
/*                     </div>*/
/*                     <!-- /.box-header -->*/
/* */
/*                     <div id="detail_meta_box__body" class="box-body">*/
/*                         {{ form_row(form.author) }}*/
/*                         {{ form_row(form.description) }}*/
/*                         {{ form_row(form.keyword) }}*/
/*                         {{ form_row(form.meta_robots) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div id="detail_box__footer" class="row hidden-xs hidden-sm">*/
/*                     <div id="detail_box__back_button" class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 text-center btn_area">*/
/*                         <p><a href="{{ url('admin_content_page') }}">戻る</a></p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- /.col -->*/
/*             <div id="common_box" class="col-md-3">*/
/*                 <div class="col_inner" id="aside_column">*/
/*                     <div id="common_button_box" class="box no-header">*/
/*                         <div id="common_button_box__body" class="box-body">*/
/*                             <div id="common_button_box__insert_button" class="row text-center">*/
/*                                 <div class="col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0">*/
/*                                     <button class="btn btn-primary btn-block btn-lg"*/
/*                                             onclick="document.content_page_form.submit();">登録*/
/*                                     </button>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <!-- /.box-body -->*/
/*                     </div>*/
/*                     <!-- /.box -->*/
/*                 </div>*/
/*             </div>*/
/*             <!-- /.col -->*/
/*         </div>*/
/*     </form>*/
/* {% endblock %}*/
/* */
