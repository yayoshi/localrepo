<?php

/* __string_template__d519d68a5f3beb136491c76ce86415c0ee0a074cd505545353588d6162a8185c */
class __TwigTemplate_cec2dc39be5a6a3e5cad703c52e3d72ce8fc0262b38c6a3c54f49b9016cd571d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__d519d68a5f3beb136491c76ce86415c0ee0a074cd505545353588d6162a8185c", 22);
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
        $context["menus"] = array(0 => "product", 1 => "class_category");
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
        echo "カテゴリ編集";
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
                    newRanks[this.dataset.categoryId] = oldRanks[i];
                    i++;
                });

                \$.ajax({
                    url: '";
        // line 65
        echo $this->env->getExtension('eccube')->getUrl("admin_product_category_rank_move");
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

            // カテゴリツリー開閉
            // 初期表示
            \$(\"#category_tree li ul\").css(\"display\", \"none\");
            // 現在地まで拓く
            \$(\"#category_tree li.active\")
                    .parents(\"ul\")
                    .css(\"display\", \"\");

            // クリックでひらく
            \$(\"#category_tree li svg\").on(\"click\", function(){
                \$(this).parent().find(\"ul\").slideToggle(100);
            });
        });
    </script>
";
    }

    // line 93
    public function block_main($context, array $blocks = array())
    {
        // line 94
        echo "    <div id=\"category_wrap\" class=\"row\">
        <div id=\"list_box\" class=\"col-md-9\">
            <div id=\"list_box__body\" class=\"box\">
                <div id=\"bread_crumb_box\" class=\"box-header\">
                    <div id=\"bread_crumb_box__body\" class=\"box-title box-title-category\">
                        <a href=\"";
        // line 99
        echo $this->env->getExtension('eccube')->getUrl("admin_product_category");
        echo "\">全カテゴリー</a>
                        ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["TargetCategory"]) ? $context["TargetCategory"] : null), "path", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ParentCategory"]) {
            // line 101
            echo "                            ";
            if ( !(null === $this->getAttribute($context["ParentCategory"], "id", array()))) {
                // line 102
                echo "                            &nbsp;<svg class=\"cb cb-angle-right\"> <use xlink:href=\"#cb-angle-right\" /></svg>&nbsp;<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_product_category_show", array("parent_id" => $this->getAttribute($context["ParentCategory"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ParentCategory"], "name", array()), "html", null, true);
                echo "</a>
                            ";
            }
            // line 104
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ParentCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                    </div>
                </div>
                <div id=\"edit_box\" class=\"box-body\">
                    <div id=\"edit_box__body\" class=\"row\">
                        <div id=\"edit_box__body_inner\" class=\"col-md-9\">
                            <form role=\"form\" class=\"form-horizontal\" name=\"form1\" id=\"form1\" method=\"post\" action=\"";
        // line 110
        if ($this->getAttribute((isset($context["TargetCategory"]) ? $context["TargetCategory"] : null), "id", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPath("admin_product_category_edit", array("id" => $this->getAttribute((isset($context["TargetCategory"]) ? $context["TargetCategory"] : null), "id", array()))), "html", null, true);
        } elseif ((isset($context["Parent"]) ? $context["Parent"] : null)) {
            echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_product_category_show", array("parent_id" => $this->getAttribute((isset($context["Parent"]) ? $context["Parent"] : null), "id", array()))), "html", null, true);
        } else {
            echo $this->env->getExtension('eccube')->getUrl("admin_product_category");
        }
        echo "\" enctype=\"multipart/form-data\">
                                <div class=\"form-group\">
                                    ";
        // line 112
        if (($this->getAttribute((isset($context["TargetCategory"]) ? $context["TargetCategory"] : null), "level", array()) < $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "category_nest_level", array()))) {
            // line 113
            echo "                                        <div class=\"col-md-12 form-inline\">
                                            ";
            // line 114
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
            echo "
                                            ";
            // line 115
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'widget', array("attr" => array("placeholder" => "カテゴリ名を入力")));
            echo "
                                            ";
            // line 116
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'errors');
            echo "
                                            <button class=\"btn btn-default btn-sm\" type=\"submit\">カテゴリ作成</button>
                                        </div>
                                    ";
        }
        // line 120
        echo "                                </div>
                                <div class=\"extra-form\">
                                    ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 123
            echo "                                        ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 124
                echo "                                            <div class=\"col-md-12 form-group\">
                                                ";
                // line 125
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'label');
                echo "
                                                ";
                // line 126
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'widget');
                echo "
                                                ";
                // line 127
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'errors');
                echo "
                                            </div>
                                        ";
            }
            // line 130
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "                                </div>
                            </form>
                        </div>
                        <div id=\"csv_menu_box\" class=\"dl_dropdown col-md-3\">
                            <div id=\"csv_menu_box__toggle\" class=\"dropdown\"><a data-toggle=\"dropdown\" class=\"dropdown-toggle\" aria-expanded=\"false\">CSVダウンロード<svg class=\"cb cb-angle-down icon_down\"><use xlink:href=\"#cb-angle-down\"/></svg></a>
                                <ul id=\"csv_menu\" class=\"dropdown-menu dropdown-menu-right\">
                                    <li><a href=\"";
        // line 137
        echo $this->env->getExtension('eccube')->getUrl("admin_product_category_export");
        echo "\">CSVダウンロード</a></li>
                                    <li><a href=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_setting_shop_csv", array("id" => twig_constant("\\Eccube\\Entity\\Master\\CsvType::CSV_TYPE_CATEGORY"))), "html", null, true);
        echo "\">出力項目設定</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- /.box-header -->
                ";
        // line 144
        if ((twig_length_filter($this->env, (isset($context["Categories"]) ? $context["Categories"] : null)) > 0)) {
            // line 145
            echo "                    <div id=\"sortable_list\" class=\"box-body no-padding no-border\">
                        <div id=\"sortable_list_box\" class=\"sortable_list\">
                            <div id=\"sortable_list_box__list\" class=\"tableish\">

                                ";
            // line 149
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Categories"]) ? $context["Categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
                // line 150
                echo "
                                <div id=\"sortable_list__item--";
                // line 151
                echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "id", array()), "html", null, true);
                echo "\" class=\"item_box tr\" data-rank=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "rank", array()), "html", null, true);
                echo "\" data-category-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "id", array()), "html", null, true);
                echo "\">
                                    <div class=\"icon_sortable td\">
                                        <svg class=\"cb cb-ellipsis-v\"> <use xlink:href=\"#cb-ellipsis-v\" /></svg>
                                    </div>
                                    <div id=\"sortable_list__item_body--";
                // line 155
                echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "id", array()), "html", null, true);
                echo "\" class=\"item_pattern td\">
                                        <a href=\"";
                // line 156
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_product_category_show", array("parent_id" => $this->getAttribute($context["Category"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "name", array()), "html", null, true);
                echo "</a>
                                    </div>
                                    <div id=\"sortable_list__item_menu_box--";
                // line 158
                echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "id", array()), "html", null, true);
                echo "\" class=\"icon_edit td\">
                                        <div id=\"sortable_list__item_menu_toggle--";
                // line 159
                echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "id", array()), "html", null, true);
                echo "\" class=\"dropdown\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><svg class=\"cb cb-ellipsis-h\"> <use xlink:href=\"#cb-ellipsis-h\" /></svg></a>
                                            <ul id=\"sortable_list__menu--";
                // line 161
                echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "id", array()), "html", null, true);
                echo "\" class=\"dropdown-menu dropdown-menu-right\">
                                                ";
                // line 162
                if (($this->getAttribute($context["Category"], "id", array()) != $this->getAttribute((isset($context["TargetCategory"]) ? $context["TargetCategory"] : null), "id", array()))) {
                    // line 163
                    echo "                                                    <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_product_category_edit", array("id" => $this->getAttribute($context["Category"], "id", array()))), "html", null, true);
                    echo "\">編集</a></li>
                                                ";
                } else {
                    // line 165
                    echo "                                                    <li><a>編集中</a></li>
                                                ";
                }
                // line 167
                echo "
                                                ";
                // line 168
                if (((twig_length_filter($this->env, $this->getAttribute($context["Category"], "Children", array())) > 0) || (twig_length_filter($this->env, $this->getAttribute($context["Category"], "ProductCategories", array())) > 0))) {
                    // line 169
                    echo "                                                    <li><a title=\"子カテゴリが存在するため削除できません。\">削除</a></li>
                                                ";
                } else {
                    // line 171
                    echo "                                                    <li>
                                                        <a href=\"";
                    // line 172
                    echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_product_category_delete", array("id" => $this->getAttribute($context["Category"], "id", array()))), "html", null, true);
                    echo "\" ";
                    echo $this->env->getExtension('eccube')->getCsrfTokenForAnchor();
                    echo " data-method=\"delete\">
                                                            削除
                                                        </a>
                                                    </li>
                                                ";
                }
                // line 177
                echo "
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- /.item_box -->
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "
                            </div>
                        </div>
                    </div><!-- /.box-body -->
            ";
        } else {
            // line 188
            echo "                <div id=\"list_box\" class=\"box-body no-padding\">
                    <div id=\"list_box__not_find_category\" class=\"data-empty\"><svg class=\"cb cb-inbox\"> <use xlink:href=\"#cb-inbox\" /></svg><p>データはありません</p></div>
                </div><!-- /.box-body -->
            ";
        }
        // line 192
        echo "            <!-- ▲ データがある時 ▲ -->
            </div><!-- /.box -->
        </div><!-- /.col -->

        ";
        // line 212
        echo "
        <div class=\"col-md-3\" id=\"aside_column\">
            <div id=\"tree_box\" class=\"col_inner\">

                <div id=\"tree_box__body\" class=\"box no-header\">
                    <div id=\"tree_box__body_inner\" class=\"box-body\">
                        <div id=\"tree_box__tree\" class=\"tree\">
                            <p id=\"tree_box__header\" class=\"";
        // line 219
        if ((null === (isset($context["Parent"]) ? $context["Parent"] : null))) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('eccube')->getUrl("admin_product_category");
        echo "\">全カテゴリー</a></p>
                            <ul id=\"category_tree\">
                                ";
        // line 221
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["TopCategories"]) ? $context["TopCategories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["TopCategory"]) {
            // line 222
            echo "                                    ";
            echo $this->getAttribute($this, "tree", array(0 => $context["TopCategory"], 1 => (($this->getAttribute($this->getAttribute((isset($context["TargetCategory"]) ? $context["TargetCategory"] : null), "Parent", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["TargetCategory"]) ? $context["TargetCategory"] : null), "Parent", array(), "any", false, true), "id", array()), null)) : (null)), 2 => 0), "method");
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['TopCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 224
        echo "                            </ul>
                        </div>
                    </div>
                </div><!-- /.box -->

            </div>
        </div><!-- /.col -->

    </div>
";
    }

    // line 196
    public function gettree($__Category__ = null, $__TargetId__ = null, $__level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "Category" => $__Category__,
            "TargetId" => $__TargetId__,
            "level" => $__level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 197
            echo "            ";
            $context["level"] = ((isset($context["level"]) ? $context["level"] : null) + 1);
            // line 198
            echo "            <li id=\"tree_item--";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Category"]) ? $context["Category"] : null), "id", array()), "html", null, true);
            echo "\" class=\"level";
            echo twig_escape_filter($this->env, (isset($context["level"]) ? $context["level"] : null), "html", null, true);
            echo " ";
            if (($this->getAttribute((isset($context["Category"]) ? $context["Category"] : null), "id", array()) == (isset($context["TargetId"]) ? $context["TargetId"] : null))) {
                echo "active";
            }
            echo "\">
                <svg class=\"cb cb-plus-square\"> <use xlink:href=\"";
            // line 199
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["Category"]) ? $context["Category"] : null), "children", array())) > 0)) {
                echo "#cb-plus-square";
            } else {
                echo "#cb-minus-square";
            }
            echo "\" /></svg>
                <a href=\"";
            // line 200
            echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_product_category_show", array("parent_id" => $this->getAttribute((isset($context["Category"]) ? $context["Category"] : null), "id", array()))), "html", null, true);
            echo "\">
                    ";
            // line 201
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Category"]) ? $context["Category"] : null), "name", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["Category"]) ? $context["Category"] : null), "children", array())), "html", null, true);
            echo ")
                </a>
                ";
            // line 203
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["Category"]) ? $context["Category"] : null), "children", array())) > 0)) {
                // line 204
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Category"]) ? $context["Category"] : null), "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["ChildCategory"]) {
                    // line 205
                    echo "                        <ul id=\"tree_item_child--";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ChildCategory"], "id", array()), "html", null, true);
                    echo "\">
                            ";
                    // line 206
                    echo $this->getAttribute($this, "tree", array(0 => $context["ChildCategory"], 1 => (isset($context["TargetId"]) ? $context["TargetId"] : null), 2 => (isset($context["level"]) ? $context["level"] : null)), "method");
                    echo "
                        </ul>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ChildCategory'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 209
                echo "                ";
            }
            // line 210
            echo "            </li>
        ";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "__string_template__d519d68a5f3beb136491c76ce86415c0ee0a074cd505545353588d6162a8185c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  485 => 210,  482 => 209,  473 => 206,  468 => 205,  463 => 204,  461 => 203,  454 => 201,  450 => 200,  442 => 199,  431 => 198,  428 => 197,  414 => 196,  401 => 224,  392 => 222,  388 => 221,  379 => 219,  370 => 212,  364 => 192,  358 => 188,  351 => 183,  340 => 177,  330 => 172,  327 => 171,  323 => 169,  321 => 168,  318 => 167,  314 => 165,  308 => 163,  306 => 162,  302 => 161,  297 => 159,  293 => 158,  286 => 156,  282 => 155,  271 => 151,  268 => 150,  264 => 149,  258 => 145,  256 => 144,  247 => 138,  243 => 137,  235 => 131,  229 => 130,  223 => 127,  219 => 126,  215 => 125,  212 => 124,  209 => 123,  205 => 122,  201 => 120,  194 => 116,  190 => 115,  186 => 114,  183 => 113,  181 => 112,  170 => 110,  163 => 105,  157 => 104,  149 => 102,  146 => 101,  142 => 100,  138 => 99,  131 => 94,  128 => 93,  97 => 65,  64 => 35,  60 => 34,  56 => 33,  51 => 32,  48 => 31,  42 => 27,  36 => 26,  32 => 22,  30 => 29,  28 => 24,  11 => 22,);
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
/* {% set menus = ['product', 'class_category'] %}*/
/* */
/* {% block title %}商品管理{% endblock %}*/
/* {% block sub_title %}カテゴリ編集{% endblock %}*/
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
/*                     newRanks[this.dataset.categoryId] = oldRanks[i];*/
/*                     i++;*/
/*                 });*/
/* */
/*                 $.ajax({*/
/*                     url: '{{ url('admin_product_category_rank_move') }}',*/
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
/* */
/*             // カテゴリツリー開閉*/
/*             // 初期表示*/
/*             $("#category_tree li ul").css("display", "none");*/
/*             // 現在地まで拓く*/
/*             $("#category_tree li.active")*/
/*                     .parents("ul")*/
/*                     .css("display", "");*/
/* */
/*             // クリックでひらく*/
/*             $("#category_tree li svg").on("click", function(){*/
/*                 $(this).parent().find("ul").slideToggle(100);*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* {% block main %}*/
/*     <div id="category_wrap" class="row">*/
/*         <div id="list_box" class="col-md-9">*/
/*             <div id="list_box__body" class="box">*/
/*                 <div id="bread_crumb_box" class="box-header">*/
/*                     <div id="bread_crumb_box__body" class="box-title box-title-category">*/
/*                         <a href="{{ url('admin_product_category') }}">全カテゴリー</a>*/
/*                         {% for ParentCategory in TargetCategory.path %}*/
/*                             {% if ParentCategory.id is not null %}*/
/*                             &nbsp;<svg class="cb cb-angle-right"> <use xlink:href="#cb-angle-right" /></svg>&nbsp;<a href="{{ url('admin_product_category_show', { parent_id : ParentCategory.id }) }}">{{ ParentCategory.name }}</a>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div id="edit_box" class="box-body">*/
/*                     <div id="edit_box__body" class="row">*/
/*                         <div id="edit_box__body_inner" class="col-md-9">*/
/*                             <form role="form" class="form-horizontal" name="form1" id="form1" method="post" action="{% if TargetCategory.id %}{{ path('admin_product_category_edit', {id: TargetCategory.id}) }}{% elseif Parent %}{{ url('admin_product_category_show', {'parent_id': Parent.id}) }}{% else %}{{ url('admin_product_category') }}{% endif %}" enctype="multipart/form-data">*/
/*                                 <div class="form-group">*/
/*                                     {% if TargetCategory.level < app.config.category_nest_level %}*/
/*                                         <div class="col-md-12 form-inline">*/
/*                                             {{ form_widget(form._token) }}*/
/*                                             {{ form_widget(form.name, {attr: {placeholder: 'カテゴリ名を入力'}}) }}*/
/*                                             {{ form_errors(form.name) }}*/
/*                                             <button class="btn btn-default btn-sm" type="submit">カテゴリ作成</button>*/
/*                                         </div>*/
/*                                     {% endif %}*/
/*                                 </div>*/
/*                                 <div class="extra-form">*/
/*                                     {% for f in form.getIterator %}*/
/*                                         {% if f.vars.name matches '[^plg*]' %}*/
/*                                             <div class="col-md-12 form-group">*/
/*                                                 {{ form_label(f) }}*/
/*                                                 {{ form_widget(f) }}*/
/*                                                 {{ form_errors(f) }}*/
/*                                             </div>*/
/*                                         {% endif %}*/
/*                                     {% endfor %}*/
/*                                 </div>*/
/*                             </form>*/
/*                         </div>*/
/*                         <div id="csv_menu_box" class="dl_dropdown col-md-3">*/
/*                             <div id="csv_menu_box__toggle" class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" aria-expanded="false">CSVダウンロード<svg class="cb cb-angle-down icon_down"><use xlink:href="#cb-angle-down"/></svg></a>*/
/*                                 <ul id="csv_menu" class="dropdown-menu dropdown-menu-right">*/
/*                                     <li><a href="{{ url('admin_product_category_export') }}">CSVダウンロード</a></li>*/
/*                                     <li><a href="{{ url('admin_setting_shop_csv', { id : constant('\\Eccube\\Entity\\Master\\CsvType::CSV_TYPE_CATEGORY') }) }}">出力項目設定</a></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div><!-- /.box-header -->*/
/*                 {% if Categories|length > 0 %}*/
/*                     <div id="sortable_list" class="box-body no-padding no-border">*/
/*                         <div id="sortable_list_box" class="sortable_list">*/
/*                             <div id="sortable_list_box__list" class="tableish">*/
/* */
/*                                 {% for Category in Categories %}*/
/* */
/*                                 <div id="sortable_list__item--{{ Category.id }}" class="item_box tr" data-rank="{{ Category.rank }}" data-category-id="{{ Category.id }}">*/
/*                                     <div class="icon_sortable td">*/
/*                                         <svg class="cb cb-ellipsis-v"> <use xlink:href="#cb-ellipsis-v" /></svg>*/
/*                                     </div>*/
/*                                     <div id="sortable_list__item_body--{{ Category.id }}" class="item_pattern td">*/
/*                                         <a href="{{ url('admin_product_category_show',  { parent_id : Category.id }) }}">{{ Category.name }}</a>*/
/*                                     </div>*/
/*                                     <div id="sortable_list__item_menu_box--{{ Category.id }}" class="icon_edit td">*/
/*                                         <div id="sortable_list__item_menu_toggle--{{ Category.id }}" class="dropdown">*/
/*                                             <a class="dropdown-toggle" data-toggle="dropdown"><svg class="cb cb-ellipsis-h"> <use xlink:href="#cb-ellipsis-h" /></svg></a>*/
/*                                             <ul id="sortable_list__menu--{{ Category.id }}" class="dropdown-menu dropdown-menu-right">*/
/*                                                 {% if Category.id != TargetCategory.id %}*/
/*                                                     <li><a href="{{ url('admin_product_category_edit', {id: Category.id}) }}">編集</a></li>*/
/*                                                 {% else %}*/
/*                                                     <li><a>編集中</a></li>*/
/*                                                 {% endif %}*/
/* */
/*                                                 {% if Category.Children|length > 0 or Category.ProductCategories|length > 0 %}*/
/*                                                     <li><a title="子カテゴリが存在するため削除できません。">削除</a></li>*/
/*                                                 {% else %}*/
/*                                                     <li>*/
/*                                                         <a href="{{ url('admin_product_category_delete', {id: Category.id}) }}" {{ csrf_token_for_anchor() }} data-method="delete">*/
/*                                                             削除*/
/*                                                         </a>*/
/*                                                     </li>*/
/*                                                 {% endif %}*/
/* */
/*                                             </ul>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div><!-- /.item_box -->*/
/*                                 {% endfor %}*/
/* */
/*                             </div>*/
/*                         </div>*/
/*                     </div><!-- /.box-body -->*/
/*             {% else %}*/
/*                 <div id="list_box" class="box-body no-padding">*/
/*                     <div id="list_box__not_find_category" class="data-empty"><svg class="cb cb-inbox"> <use xlink:href="#cb-inbox" /></svg><p>データはありません</p></div>*/
/*                 </div><!-- /.box-body -->*/
/*             {% endif %}*/
/*             <!-- ▲ データがある時 ▲ -->*/
/*             </div><!-- /.box -->*/
/*         </div><!-- /.col -->*/
/* */
/*         {% macro tree(Category, TargetId, level) %}*/
/*             {% set level = level + 1 %}*/
/*             <li id="tree_item--{{ Category.id }}" class="level{{ level }} {% if Category.id == TargetId %}active{% endif %}">*/
/*                 <svg class="cb cb-plus-square"> <use xlink:href="{% if Category.children|length > 0 %}#cb-plus-square{% else %}#cb-minus-square{% endif %}" /></svg>*/
/*                 <a href="{{ url('admin_product_category_show', { parent_id : Category.id }) }}">*/
/*                     {{ Category.name }} ({{ Category.children|length }})*/
/*                 </a>*/
/*                 {% if Category.children|length > 0 %}*/
/*                     {% for ChildCategory in Category.children %}*/
/*                         <ul id="tree_item_child--{{ ChildCategory.id }}">*/
/*                             {{ _self.tree(ChildCategory, TargetId, level) }}*/
/*                         </ul>*/
/*                     {% endfor %}*/
/*                 {% endif %}*/
/*             </li>*/
/*         {% endmacro %}*/
/* */
/*         <div class="col-md-3" id="aside_column">*/
/*             <div id="tree_box" class="col_inner">*/
/* */
/*                 <div id="tree_box__body" class="box no-header">*/
/*                     <div id="tree_box__body_inner" class="box-body">*/
/*                         <div id="tree_box__tree" class="tree">*/
/*                             <p id="tree_box__header" class="{% if Parent is null %}active{% endif %}"><a href="{{ url('admin_product_category') }}">全カテゴリー</a></p>*/
/*                             <ul id="category_tree">*/
/*                                 {% for TopCategory in TopCategories %}*/
/*                                     {{ _self.tree(TopCategory, TargetCategory.Parent.id | default(null), 0)}}*/
/*                                 {% endfor %}*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div><!-- /.box -->*/
/* */
/*             </div>*/
/*         </div><!-- /.col -->*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
