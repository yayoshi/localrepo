<?php

/* __string_template__d92debcee6cbdd05514e60df7019cae3aef0076d43103915a1b2bce8b99850c5 */
class __TwigTemplate_8a050239b638964567301cc0620218d0edf7b7c7498a2646d2f16ae0ba204bb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__d92debcee6cbdd05514e60df7019cae3aef0076d43103915a1b2bce8b99850c5", 22);
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
        $context["menus"] = array(0 => "setting", 1 => "shop", 2 => "shop_delivery");
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        echo "ショップ設定";
    }

    // line 27
    public function block_sub_title($context, array $blocks = array())
    {
        echo "配送方法管理";
    }

    // line 29
    public function block_javascript($context, array $blocks = array())
    {
        // line 30
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery.ui/jquery.ui.core.min.js\"></script>
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery.ui/jquery.ui.widget.min.js\"></script>
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery.ui/jquery.ui.mouse.min.js\"></script>
    <script src=\"";
        // line 33
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
                    newRanks[this.dataset.deliveryId] = oldRanks[i];
                    i++;
                });

                \$.ajax({
                    url: '";
        // line 63
        echo $this->env->getExtension('eccube')->getUrl("admin_setting_shop_delivery_rank_move");
        echo "',
                    type: 'POST',
                    data: newRanks
                }).done(function() {
                    \$(\".modal-backdrop\").remove();
                }).fail(function() {
                    \$(\".modal-backdrop\").remove();
                });
            };
        });
    </script>
";
    }

    // line 76
    public function block_main($context, array $blocks = array())
    {
        // line 77
        echo "    <form name=\"form1\" method=\"post\">
    <div id=\"delivery_wrap\" class=\"row\">
        <div id=\"delivery_list_box\" class=\"col-md-12\">
            <div id=\"delivery_list__body\" class=\"box\">
                <div id=\"delivery_list__header\" class=\"box-header\">
                    <h3 class=\"box-title\">配送方法一覧</h3>
                </div>
                ";
        // line 84
        if ((twig_length_filter($this->env, (isset($context["Deliveries"]) ? $context["Deliveries"] : null)) > 0)) {
            // line 85
            echo "                    <div id=\"delivery_list__body_inner\" class=\"box-body no-padding no-border\">
                        <div id=\"delivery_list__sortable_area\" class=\"sortable_list\">
                            <div class=\"tableish\">

                                ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Deliveries"]) ? $context["Deliveries"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["Delivery"]) {
                // line 90
                echo "
                                    <div id=\"delivery_list__item--";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($context["Delivery"], "id", array()), "html", null, true);
                echo "\" class=\"item_box tr\" data-delivery-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Delivery"], "id", array()), "html", null, true);
                echo "\" data-rank=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Delivery"], "rank", array()), "html", null, true);
                echo "\">
                                        <div class=\"icon_sortable td\">
                                            <svg class=\"cb cb-ellipsis-v\"> <use xlink:href=\"#cb-ellipsis-v\" /></svg>
                                        </div>
                                        <div id=\"delivery_list__name--";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute($context["Delivery"], "id", array()), "html", null, true);
                echo "\" class=\"item_pattern td\">
                                            <a href=\"";
                // line 96
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_setting_shop_delivery_edit", array("id" => $this->getAttribute($context["Delivery"], "id", array()))), "html", null, true);
                echo "\">
                                                ";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($context["Delivery"], "name", array()), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Delivery"], "service_name", array()), "html", null, true);
                echo "
                                            </a>
                                        </div>
                                        <div id=\"delivery_list__menu_box--";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute($context["Delivery"], "id", array()), "html", null, true);
                echo "\" class=\"icon_edit td\">
                                            <div id=\"delivery_list__menu_toggle--";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($context["Delivery"], "id", array()), "html", null, true);
                echo "\" class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><svg class=\"cb cb-ellipsis-h\"> <use xlink:href=\"#cb-ellipsis-h\" /></svg></a>
                                                <ul id=\"delivery_list__menu--";
                // line 103
                echo twig_escape_filter($this->env, $this->getAttribute($context["Delivery"], "id", array()), "html", null, true);
                echo "\" class=\"dropdown-menu dropdown-menu-right\">
                                                    <li><a href=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_setting_shop_delivery_edit", array("id" => $this->getAttribute($context["Delivery"], "id", array()))), "html", null, true);
                echo "\">編集</a></li>
                                                    <li><a href=\"";
                // line 105
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_setting_shop_delivery_delete", array("id" => $this->getAttribute($context["Delivery"], "Id", array()))), "html", null, true);
                echo "\" ";
                echo $this->env->getExtension('eccube')->getCsrfTokenForAnchor();
                echo " data-method=\"delete\">削除</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- /.item_box -->
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Delivery'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                ";
        } else {
            // line 116
            echo "                    <div id=\"delivery_list__body_inner\" class=\"box-body no-padding\">
                        <div class=\"data-empty\"><svg class=\"cb cb-inbox\"> <use xlink:href=\"#cb-inbox\" /></svg><p>データはありません</p></div>
                    </div><!-- /.box-body -->
                ";
        }
        // line 120
        echo "                <!-- ▲ データがある時 ▲ -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div>
    </form>

    <div id=\"delivery_list_footer\" class=\"row\">
        <div id=\"delivery_list_footer__button_area\" class=\"col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 text-center btn_area\">
            <a href=\"";
        // line 128
        echo $this->env->getExtension('eccube')->getUrl("admin_setting_shop_delivery_new");
        echo "\" class=\"btn btn-primary btn-block btn-lg\">配送方法";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "input_deliv_fee", array())) {
            echo "・配送料";
        }
        echo "を新規入力</a>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "__string_template__d92debcee6cbdd05514e60df7019cae3aef0076d43103915a1b2bce8b99850c5";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 128,  209 => 120,  203 => 116,  196 => 111,  182 => 105,  178 => 104,  174 => 103,  169 => 101,  165 => 100,  157 => 97,  153 => 96,  149 => 95,  138 => 91,  135 => 90,  131 => 89,  125 => 85,  123 => 84,  114 => 77,  111 => 76,  95 => 63,  62 => 33,  58 => 32,  54 => 31,  49 => 30,  46 => 29,  40 => 27,  34 => 26,  30 => 22,  28 => 24,  11 => 22,);
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
/* {% set menus = ['setting', 'shop', 'shop_delivery'] %}*/
/* */
/* {% block title %}ショップ設定{% endblock %}*/
/* {% block sub_title %}配送方法管理{% endblock %}*/
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
/*                     newRanks[this.dataset.deliveryId] = oldRanks[i];*/
/*                     i++;*/
/*                 });*/
/* */
/*                 $.ajax({*/
/*                     url: '{{ url('admin_setting_shop_delivery_rank_move') }}',*/
/*                     type: 'POST',*/
/*                     data: newRanks*/
/*                 }).done(function() {*/
/*                     $(".modal-backdrop").remove();*/
/*                 }).fail(function() {*/
/*                     $(".modal-backdrop").remove();*/
/*                 });*/
/*             };*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* {% block main %}*/
/*     <form name="form1" method="post">*/
/*     <div id="delivery_wrap" class="row">*/
/*         <div id="delivery_list_box" class="col-md-12">*/
/*             <div id="delivery_list__body" class="box">*/
/*                 <div id="delivery_list__header" class="box-header">*/
/*                     <h3 class="box-title">配送方法一覧</h3>*/
/*                 </div>*/
/*                 {% if Deliveries|length > 0 %}*/
/*                     <div id="delivery_list__body_inner" class="box-body no-padding no-border">*/
/*                         <div id="delivery_list__sortable_area" class="sortable_list">*/
/*                             <div class="tableish">*/
/* */
/*                                 {% for Delivery in Deliveries%}*/
/* */
/*                                     <div id="delivery_list__item--{{ Delivery.id }}" class="item_box tr" data-delivery-id="{{ Delivery.id }}" data-rank="{{ Delivery.rank }}">*/
/*                                         <div class="icon_sortable td">*/
/*                                             <svg class="cb cb-ellipsis-v"> <use xlink:href="#cb-ellipsis-v" /></svg>*/
/*                                         </div>*/
/*                                         <div id="delivery_list__name--{{ Delivery.id }}" class="item_pattern td">*/
/*                                             <a href="{{ url('admin_setting_shop_delivery_edit', {id: Delivery.id} ) }}">*/
/*                                                 {{ Delivery.name }} / {{ Delivery.service_name }}*/
/*                                             </a>*/
/*                                         </div>*/
/*                                         <div id="delivery_list__menu_box--{{ Delivery.id }}" class="icon_edit td">*/
/*                                             <div id="delivery_list__menu_toggle--{{ Delivery.id }}" class="dropdown">*/
/*                                                 <a class="dropdown-toggle" data-toggle="dropdown"><svg class="cb cb-ellipsis-h"> <use xlink:href="#cb-ellipsis-h" /></svg></a>*/
/*                                                 <ul id="delivery_list__menu--{{ Delivery.id }}" class="dropdown-menu dropdown-menu-right">*/
/*                                                     <li><a href="{{ url('admin_setting_shop_delivery_edit', {id: Delivery.id} ) }}">編集</a></li>*/
/*                                                     <li><a href="{{ url('admin_setting_shop_delivery_delete', {id: Delivery.Id} ) }}" {{ csrf_token_for_anchor() }} data-method="delete">削除</a></li>*/
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
/*                     <div id="delivery_list__body_inner" class="box-body no-padding">*/
/*                         <div class="data-empty"><svg class="cb cb-inbox"> <use xlink:href="#cb-inbox" /></svg><p>データはありません</p></div>*/
/*                     </div><!-- /.box-body -->*/
/*                 {% endif %}*/
/*                 <!-- ▲ データがある時 ▲ -->*/
/*             </div><!-- /.box -->*/
/*         </div><!-- /.col -->*/
/*     </div>*/
/*     </form>*/
/* */
/*     <div id="delivery_list_footer" class="row">*/
/*         <div id="delivery_list_footer__button_area" class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 text-center btn_area">*/
/*             <a href="{{ url('admin_setting_shop_delivery_new') }}" class="btn btn-primary btn-block btn-lg">配送方法{% if app.config.input_deliv_fee %}・配送料{% endif %}を新規入力</a>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
