<?php

/* __string_template__f9c2c38d93222eb0289f6fac6950a5cdf2da59ab04830da83f45449d7aa1a1f5 */
class __TwigTemplate_afd46e1ddc77a4a7306a8d455649f52273e25d11c7761f8c75ad53785b1e6265 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__f9c2c38d93222eb0289f6fac6950a5cdf2da59ab04830da83f45449d7aa1a1f5", 22);
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
        // line 24
        $context["menus"] = array(0 => "product", 1 => "class_name");
        // line 29
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        echo "商品管理";
    }

    // line 27
    public function block_sub_title($context, array $blocks = array())
    {
        echo "規格編集";
    }

    // line 31
    public function block_javascript($context, array $blocks = array())
    {
        // line 32
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery.ui/jquery.ui.core.min.js\"></script>
    <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery.ui/jquery.ui.widget.min.js\"></script>
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery.ui/jquery.ui.mouse.min.js\"></script>
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery.ui/jquery.ui.sortable.min.js\"></script>
    <script>
        \$(function() {
            var oldRanks = [];
            // 画面の中のrank一覧を保持
            \$(\"div.tableish > .item_box\").each(function() {
                oldRanks.push(this.dataset.rank);
            });
            // rsort
            oldRanks.sort(function(a,b){return a - b;}).reverse();

            \$(\"div.tableish\").sortable({
                items: '> .item_box',
                cursor: 'move',
                update: function(e, ui) {
                    \$(\"body\").append(\$('<div class=\"modal-backdrop in\"></div>'));
                    updateRank();
                }
            });

            var updateRank = function() {
                // 並び替え後にrankを更新
                var newRanks = {};
                var i = 0;
                \$(\"div.tableish > .item_box\").each(function() {
                    newRanks[this.dataset.classNameId] = oldRanks[i];
                    i++;
                });

                \$.ajax({
                    url: '";
        // line 65
        echo $this->env->getExtension('eccube')->getUrl("admin_product_class_name_rank_move");
        echo "',
                    type: 'POST',
                    data: newRanks,
                }).done(function(data) {
                    console.log(data);
                    \$(\".modal-backdrop\").remove();
                }).fail(function() {
                    console.log('fail');
                    \$(\".modal-backdrop\").remove();
                });
            };
        });
    </script>
";
    }

    // line 80
    public function block_main($context, array $blocks = array())
    {
        // line 81
        echo "    <div id=\"edit_wrap\" class=\"row\">
        <div id=\"edit_list_box\" class=\"col-md-12\">
            <div id=\"edit_list_box__body\" class=\"box\">
                <div id=\"edit_box\" class=\"box-header\">
                    <form role=\"form\" class=\"form-horizontal\" name=\"form1\" id=\"form1\" method=\"post\" action=\"";
        // line 85
        if ($this->getAttribute((isset($context["TargetClassName"]) ? $context["TargetClassName"] : null), "id", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPath("admin_product_class_name_edit", array("id" => $this->getAttribute((isset($context["TargetClassName"]) ? $context["TargetClassName"] : null), "id", array()))), "html", null, true);
        } else {
            echo $this->env->getExtension('eccube')->getUrl("admin_product_class_name");
        }
        echo "\">
                        <div id=\"edit_box__body\" class=\"form-group\">
                            <div class=\"col-md-12 form-inline\">
                                ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
                                ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'widget', array("attr" => array("placeholder" => "規格名を入力")));
        echo "
                                ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'errors');
        echo "
                                <button class=\"btn btn-default btn-sm\" type=\"submit\">規格作成</button>
                            </div>
                        </div>
                        <div class=\"extra-form\">
                            ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 96
            echo "                                ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 97
                echo "                                    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'label');
                echo "
                                    ";
                // line 98
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'widget');
                echo "
                                    ";
                // line 99
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'errors');
                echo "
                                ";
            }
            // line 101
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                        </div>
                    </form>
                </div><!-- /.box-header -->
                ";
        // line 105
        if ((twig_length_filter($this->env, (isset($context["ClassNames"]) ? $context["ClassNames"] : null)) > 0)) {
            // line 106
            echo "                    <div id=\"sortable_list_box\" class=\"box-body no-padding no-border\">
                        <div id=\"list_box\" class=\"sortable_list\">
                            <div id=\"sortable_list_box__body\" class=\"tableish\">

                                ";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ClassNames"]) ? $context["ClassNames"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["ClassName"]) {
                // line 111
                echo "
                                    <div id=\"sortable_list_box__item--";
                // line 112
                echo twig_escape_filter($this->env, $this->getAttribute($context["ClassName"], "id", array()), "html", null, true);
                echo "\" class=\"item_box tr\" data-class-name-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ClassName"], "id", array()), "html", null, true);
                echo "\" data-rank=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ClassName"], "rank", array()), "html", null, true);
                echo "\">
                                        <div class=\"icon_sortable td\">
                                            <svg class=\"cb cb-ellipsis-v\"> <use xlink:href=\"#cb-ellipsis-v\" /></svg>
                                        </div>
                                        <div id=\"sortable_list_box__name--";
                // line 116
                echo twig_escape_filter($this->env, $this->getAttribute($context["ClassName"], "id", array()), "html", null, true);
                echo "\" class=\"item_pattern td\">
                                            <a href=\"";
                // line 117
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_product_class_category", array("class_name_id" => $this->getAttribute($context["ClassName"], "id", array()))), "html", null, true);
                echo "\">
                                                ";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute($context["ClassName"], "name", array()), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["ClassName"], "ClassCategories", array())), "html", null, true);
                echo ")
                                            </a>
                                        </div>
                                        <div id=\"sortable_list_box__menu_box--";
                // line 121
                echo twig_escape_filter($this->env, $this->getAttribute($context["ClassName"], "id", array()), "html", null, true);
                echo "\" class=\"icon_edit td\">
                                            <div id=\"sortable_list_box__menu_box_toggle--";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute($context["ClassName"], "id", array()), "html", null, true);
                echo "\" class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><svg class=\"cb cb-ellipsis-h\"> <use xlink:href=\"#cb-ellipsis-h\" /></svg></a>
                                                <ul id=\"sortable_list_box__menu--";
                // line 124
                echo twig_escape_filter($this->env, $this->getAttribute($context["ClassName"], "id", array()), "html", null, true);
                echo "\" class=\"dropdown-menu dropdown-menu-right\">
                                                    <li>
                                                        <a href=\"";
                // line 126
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_product_class_category", array("class_name_id" => $this->getAttribute($context["ClassName"], "id", array()))), "html", null, true);
                echo "\">
                                                            分類登録
                                                        </a>
                                                    </li>

                                                    ";
                // line 131
                if (($this->getAttribute($context["ClassName"], "id", array()) != $this->getAttribute((isset($context["TargetClassName"]) ? $context["TargetClassName"] : null), "id", array()))) {
                    // line 132
                    echo "                                                        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_product_class_name_edit", array("id" => $this->getAttribute($context["ClassName"], "id", array()))), "html", null, true);
                    echo "\">編集</a></li>
                                                    ";
                } else {
                    // line 134
                    echo "                                                        <li><a>編集中</a></li>
                                                    ";
                }
                // line 136
                echo "
                                                    ";
                // line 137
                if ((twig_length_filter($this->env, $this->getAttribute($context["ClassName"], "ClassCategories", array())) == 0)) {
                    // line 138
                    echo "                                                        <li>
                                                            <a href=\"";
                    // line 139
                    echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_product_class_name_delete", array("id" => $this->getAttribute($context["ClassName"], "id", array()))), "html", null, true);
                    echo "\" ";
                    echo $this->env->getExtension('eccube')->getCsrfTokenForAnchor();
                    echo " data-method=\"delete\">
                                                                削除
                                                            </a>
                                                        </li>
                                                    ";
                }
                // line 144
                echo "
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- /.item_box -->
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ClassName'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                ";
        } else {
            // line 155
            echo "                    <div id=\"sortable_list_box\" class=\"box-body no-padding\">
                        <div id=\"sortable_list_box__not_find_message\" class=\"data-empty\"><svg class=\"cb cb-inbox\"> <use xlink:href=\"#cb-inbox\" /></svg><p>データはありません</p></div>
                    </div><!-- /.box-body -->
                ";
        }
        // line 159
        echo "                <!-- ▲ データがある時 ▲ -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__f9c2c38d93222eb0289f6fac6950a5cdf2da59ab04830da83f45449d7aa1a1f5";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 159,  294 => 155,  287 => 150,  276 => 144,  266 => 139,  263 => 138,  261 => 137,  258 => 136,  254 => 134,  248 => 132,  246 => 131,  238 => 126,  233 => 124,  228 => 122,  224 => 121,  216 => 118,  212 => 117,  208 => 116,  197 => 112,  194 => 111,  190 => 110,  184 => 106,  182 => 105,  177 => 102,  171 => 101,  166 => 99,  162 => 98,  157 => 97,  154 => 96,  150 => 95,  142 => 90,  138 => 89,  134 => 88,  124 => 85,  118 => 81,  115 => 80,  97 => 65,  64 => 35,  60 => 34,  56 => 33,  51 => 32,  48 => 31,  42 => 27,  36 => 26,  32 => 22,  30 => 29,  28 => 24,  11 => 22,);
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
/* {% set menus = ['product', 'class_name'] %}*/
/* */
/* {% block title %}商品管理{% endblock %}*/
/* {% block sub_title %}規格編集{% endblock %}*/
/* */
/* {% form_theme form 'Form/bootstrap_3_horizontal_layout.html.twig' %}*/
/* */
/* {% block javascript %}*/
/*     <script src="{{ app.config.admin_urlpath }}/assets/js/vendor/jquery.ui/jquery.ui.core.min.js"></script>*/
/*     <script src="{{ app.config.admin_urlpath }}/assets/js/vendor/jquery.ui/jquery.ui.widget.min.js"></script>*/
/*     <script src="{{ app.config.admin_urlpath }}/assets/js/vendor/jquery.ui/jquery.ui.mouse.min.js"></script>*/
/*     <script src="{{ app.config.admin_urlpath }}/assets/js/vendor/jquery.ui/jquery.ui.sortable.min.js"></script>*/
/*     <script>*/
/*         $(function() {*/
/*             var oldRanks = [];*/
/*             // 画面の中のrank一覧を保持*/
/*             $("div.tableish > .item_box").each(function() {*/
/*                 oldRanks.push(this.dataset.rank);*/
/*             });*/
/*             // rsort*/
/*             oldRanks.sort(function(a,b){return a - b;}).reverse();*/
/* */
/*             $("div.tableish").sortable({*/
/*                 items: '> .item_box',*/
/*                 cursor: 'move',*/
/*                 update: function(e, ui) {*/
/*                     $("body").append($('<div class="modal-backdrop in"></div>'));*/
/*                     updateRank();*/
/*                 }*/
/*             });*/
/* */
/*             var updateRank = function() {*/
/*                 // 並び替え後にrankを更新*/
/*                 var newRanks = {};*/
/*                 var i = 0;*/
/*                 $("div.tableish > .item_box").each(function() {*/
/*                     newRanks[this.dataset.classNameId] = oldRanks[i];*/
/*                     i++;*/
/*                 });*/
/* */
/*                 $.ajax({*/
/*                     url: '{{ url('admin_product_class_name_rank_move') }}',*/
/*                     type: 'POST',*/
/*                     data: newRanks,*/
/*                 }).done(function(data) {*/
/*                     console.log(data);*/
/*                     $(".modal-backdrop").remove();*/
/*                 }).fail(function() {*/
/*                     console.log('fail');*/
/*                     $(".modal-backdrop").remove();*/
/*                 });*/
/*             };*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* {% block main %}*/
/*     <div id="edit_wrap" class="row">*/
/*         <div id="edit_list_box" class="col-md-12">*/
/*             <div id="edit_list_box__body" class="box">*/
/*                 <div id="edit_box" class="box-header">*/
/*                     <form role="form" class="form-horizontal" name="form1" id="form1" method="post" action="{% if TargetClassName.id %}{{ path('admin_product_class_name_edit', {id: TargetClassName.id}) }}{% else %}{{ url('admin_product_class_name') }}{% endif %}">*/
/*                         <div id="edit_box__body" class="form-group">*/
/*                             <div class="col-md-12 form-inline">*/
/*                                 {{ form_widget(form._token) }}*/
/*                                 {{ form_widget(form.name, {attr: {placeholder: '規格名を入力'}}) }}*/
/*                                 {{ form_errors(form.name) }}*/
/*                                 <button class="btn btn-default btn-sm" type="submit">規格作成</button>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="extra-form">*/
/*                             {% for f in form.getIterator %}*/
/*                                 {% if f.vars.name matches '[^plg*]' %}*/
/*                                     {{ form_label(f) }}*/
/*                                     {{ form_widget(f) }}*/
/*                                     {{ form_errors(f) }}*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     </form>*/
/*                 </div><!-- /.box-header -->*/
/*                 {% if ClassNames|length > 0 %}*/
/*                     <div id="sortable_list_box" class="box-body no-padding no-border">*/
/*                         <div id="list_box" class="sortable_list">*/
/*                             <div id="sortable_list_box__body" class="tableish">*/
/* */
/*                                 {% for ClassName in ClassNames %}*/
/* */
/*                                     <div id="sortable_list_box__item--{{ ClassName.id }}" class="item_box tr" data-class-name-id="{{ ClassName.id }}" data-rank="{{ ClassName.rank }}">*/
/*                                         <div class="icon_sortable td">*/
/*                                             <svg class="cb cb-ellipsis-v"> <use xlink:href="#cb-ellipsis-v" /></svg>*/
/*                                         </div>*/
/*                                         <div id="sortable_list_box__name--{{ ClassName.id }}" class="item_pattern td">*/
/*                                             <a href="{{ url('admin_product_class_category', {class_name_id : ClassName.id }) }}">*/
/*                                                 {{ ClassName.name }} ({{ ClassName.ClassCategories|length }})*/
/*                                             </a>*/
/*                                         </div>*/
/*                                         <div id="sortable_list_box__menu_box--{{ ClassName.id }}" class="icon_edit td">*/
/*                                             <div id="sortable_list_box__menu_box_toggle--{{ ClassName.id }}" class="dropdown">*/
/*                                                 <a class="dropdown-toggle" data-toggle="dropdown"><svg class="cb cb-ellipsis-h"> <use xlink:href="#cb-ellipsis-h" /></svg></a>*/
/*                                                 <ul id="sortable_list_box__menu--{{ ClassName.id }}" class="dropdown-menu dropdown-menu-right">*/
/*                                                     <li>*/
/*                                                         <a href="{{ url('admin_product_class_category', {class_name_id : ClassName.id }) }}">*/
/*                                                             分類登録*/
/*                                                         </a>*/
/*                                                     </li>*/
/* */
/*                                                     {% if ClassName.id != TargetClassName.id %}*/
/*                                                         <li><a href="{{ url('admin_product_class_name_edit', {id: ClassName.id}) }}">編集</a></li>*/
/*                                                     {% else %}*/
/*                                                         <li><a>編集中</a></li>*/
/*                                                     {% endif %}*/
/* */
/*                                                     {% if ClassName.ClassCategories|length == 0 %}*/
/*                                                         <li>*/
/*                                                             <a href="{{ url('admin_product_class_name_delete', {id: ClassName.id}) }}" {{ csrf_token_for_anchor() }} data-method="delete">*/
/*                                                                 削除*/
/*                                                             </a>*/
/*                                                         </li>*/
/*                                                     {% endif %}*/
/* */
/*                                                 </ul>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div><!-- /.item_box -->*/
/*                                 {% endfor %}*/
/* */
/*                             </div>*/
/*                         </div>*/
/*                     </div><!-- /.box-body -->*/
/*                 {% else %}*/
/*                     <div id="sortable_list_box" class="box-body no-padding">*/
/*                         <div id="sortable_list_box__not_find_message" class="data-empty"><svg class="cb cb-inbox"> <use xlink:href="#cb-inbox" /></svg><p>データはありません</p></div>*/
/*                     </div><!-- /.box-body -->*/
/*                 {% endif %}*/
/*                 <!-- ▲ データがある時 ▲ -->*/
/*             </div><!-- /.box -->*/
/*         </div><!-- /.col -->*/
/*     </div>*/
/* {% endblock %}*/
/* */
