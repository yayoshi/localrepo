<?php

/* __string_template__c9119e7ab6cf2edd422bb634943cfc05ffbe21b5949c6f7a071a74f42c8c433e */
class __TwigTemplate_c53ff4e4f619cc7f5c10270f98b6750a77531e683577a6b97d6d76f156a702f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 24
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__c9119e7ab6cf2edd422bb634943cfc05ffbe21b5949c6f7a071a74f42c8c433e", 24);
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
        $context["menus"] = array(0 => "content", 1 => "block");
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
        echo "ブロック管理";
    }

    // line 33
    public function block_main($context, array $blocks = array())
    {
        // line 34
        echo "<form name=\"content_block_form\" id=\"content_block_form\" method=\"post\" action=\"";
        // line 35
        if ( !(null === (isset($context["block_id"]) ? $context["block_id"] : null))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_content_block_edit", array("id" => (isset($context["block_id"]) ? $context["block_id"] : null))), "html", null, true);
        } else {
            echo $this->env->getExtension('eccube')->getUrl("admin_content_block_new");
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
        <div id=\"detail_wrap\" class=\"col-md-9\">
            <div id=\"detail_box\" class=\"box form-horizontal\">
                <div id=\"detail_box__header\" class=\"box-header\">
                    <h3 class=\"box-title\">ブロック編集</h3>
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'widget');
        echo "
                            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div id=\"detail_box__file_name\" class=\"form-group\">
                        ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file_name", array()), 'label');
        echo "
                        <div class=\"col-sm-9 col-lg-10 padT07\">
                            ";
        // line 59
        if ((isset($context["deletable"]) ? $context["deletable"] : null)) {
            // line 60
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file_name", array()), 'widget');
            echo ".twig
                            ";
        } else {
            // line 62
            echo "                                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file_name", array()), "vars", array()), "value", array()), "html", null, true);
            echo ".twig
                                ";
            // line 63
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file_name", array()), 'widget', array("type" => "hidden"));
            echo "
                            ";
        }
        // line 65
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file_name", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div id=\"detail_box__block_html\" class=\"form-group\">
                        ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "block_html", array()), 'label');
        echo "
                        <div class=\"col-sm-9 col-lg-10\">
                            ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "block_html", array()), 'widget', array("attr" => array("rows" => 15, "style" => "font-size:12px")));
        echo "
                            ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "block_html", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"extra-form\">
                        ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 79
            echo "                            ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 80
                echo "                                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'row');
                echo "
                            ";
            }
            // line 82
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                    </div>
                </div>
            </div>

            <div id=\"detail_box__footer\" class=\"row hidden-xs hidden-sm\">
                <div id=\"detail_box__back_button\" class=\"col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 text-center btn_area\">
                    <p><a href=\"";
        // line 89
        echo $this->env->getExtension('eccube')->getUrl("admin_content_block");
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
                                        onclick=\"document.content_block_form.submit();\">登録
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
        return "__string_template__c9119e7ab6cf2edd422bb634943cfc05ffbe21b5949c6f7a071a74f42c8c433e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 89,  167 => 83,  161 => 82,  155 => 80,  152 => 79,  148 => 78,  140 => 73,  136 => 72,  131 => 70,  122 => 65,  117 => 63,  112 => 62,  106 => 60,  104 => 59,  99 => 57,  91 => 52,  87 => 51,  82 => 49,  68 => 38,  64 => 37,  60 => 36,  52 => 35,  50 => 34,  47 => 33,  41 => 29,  35 => 28,  31 => 24,  29 => 31,  27 => 26,  11 => 24,);
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
/* {% set menus = ['content', 'block'] %}*/
/* */
/* {% block title %}コンテンツ管理{% endblock %}*/
/* {% block sub_title %}ブロック管理{% endblock %}*/
/* */
/* {% form_theme form 'Form/bootstrap_3_horizontal_layout.html.twig' %}*/
/* */
/* {% block main %}*/
/* <form name="content_block_form" id="content_block_form" method="post" action="*/
/* {%- if block_id is not null %}{{ url('admin_content_block_edit', {id: block_id}) }}{% else %}{{ url('admin_content_block_new')}}{% endif -%}">*/
/*     {{ form_widget(form._token) }}*/
/*     {{ form_widget(form.id) }}*/
/*     {{ form_widget(form.DeviceType, { attr : { style : 'display: none;' } } ) }}*/
/*     <div class="row" id="aside_wrap">*/
/*         <div id="detail_wrap" class="col-md-9">*/
/*             <div id="detail_box" class="box form-horizontal">*/
/*                 <div id="detail_box__header" class="box-header">*/
/*                     <h3 class="box-title">ブロック編集</h3>*/
/*                 </div>*/
/*                 <!-- /.box-header -->*/
/*                 <div id="detail_box__body" class="box-body">*/
/* */
/*                     <div id="detail_box__name" class="form-group">*/
/*                         {{ form_label(form.name) }}*/
/*                         <div class="col-sm-9 col-lg-10">*/
/*                             {{ form_widget(form.name) }}*/
/*                             {{ form_errors(form.name) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div id="detail_box__file_name" class="form-group">*/
/*                         {{ form_label(form.file_name) }}*/
/*                         <div class="col-sm-9 col-lg-10 padT07">*/
/*                             {% if deletable %}*/
/*                                 {{ form_widget(form.file_name) }}.twig*/
/*                             {% else %}*/
/*                                 {{ form.file_name.vars.value }}.twig*/
/*                                 {{ form_widget(form.file_name, { type : 'hidden' } ) }}*/
/*                             {% endif %}*/
/*                             {{ form_errors(form.file_name) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div id="detail_box__block_html" class="form-group">*/
/*                         {{ form_label(form.block_html) }}*/
/*                         <div class="col-sm-9 col-lg-10">*/
/*                             {{ form_widget(form.block_html, { attr : { 'rows' : 15, style : 'font-size:12px' } }) }}*/
/*                             {{ form_errors(form.block_html) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="extra-form">*/
/*                         {% for f in form.getIterator %}*/
/*                             {% if f.vars.name matches '[^plg*]' %}*/
/*                                 {{ form_row(f) }}*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div id="detail_box__footer" class="row hidden-xs hidden-sm">*/
/*                 <div id="detail_box__back_button" class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 text-center btn_area">*/
/*                     <p><a href="{{ url('admin_content_block') }}">戻る</a></p>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*         <!-- /.col -->*/
/*         <div id="common_box" class="col-md-3">*/
/*             <div class="col_inner" id="aside_column">*/
/*                 <div id="common_button_box" class="box no-header">*/
/*                     <div id="common_button_box__body" class="box-body">*/
/*                         <div id="common_button_box__insert_button" class="row text-center">*/
/*                             <div class="col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0">*/
/*                                 <button class="btn btn-primary btn-block btn-lg"*/
/*                                         onclick="document.content_block_form.submit();">登録*/
/*                                 </button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- /.box-body -->*/
/*                 </div>*/
/*                 <!-- /.box -->*/
/*             </div>*/
/*         </div>*/
/*         <!-- /.col -->*/
/*     </div>*/
/* */
/* </form>*/
/* {% endblock %}*/
/* */
