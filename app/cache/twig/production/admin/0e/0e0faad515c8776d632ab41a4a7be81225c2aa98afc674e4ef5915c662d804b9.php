<?php

/* __string_template__1f89e0b6221508a40a2cef2ec0d4953838e400a2419a53c4d37a85cbb5a47ab9 */
class __TwigTemplate_e03251acdbf379c40ac5ff0a26f0b0a107774f6f777f9aea35c416879ac6e86a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__1f89e0b6221508a40a2cef2ec0d4953838e400a2419a53c4d37a85cbb5a47ab9", 22);
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
        // line 24
        $context["menus"] = array(0 => "setting", 1 => "shop", 2 => "shop_payment");
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
        echo "支払方法管理";
    }

    // line 29
    public function block_main($context, array $blocks = array())
    {
        // line 30
        echo "    <div id=\"payment_wrap\" class=\"row\">
        <div id=\"payment_list_box\" class=\"col-md-12\">
            <div id=\"payment_list_box__body\" class=\"box\">
                <div id=\"payment_list_box__header\" class=\"box-header with-arrow\">
                    <h3 class=\"box-title\">
                        支払方法
                    </h3>
                </div><!-- /.box-header -->
                <div id=\"payment_list_box__body_inner\" class=\"box-body\">
                    <div id=\"payment_list__list\" class=\"table_list\">
                        <div id=\"payment_list__list_body\" class=\"table-responsive with-border\">
                            <table class=\"table table-striped\">
                                <thead>
                                <tr id=\"payment_list__list_header\">
                                    <th id=\"payment_list__header_method\">支払方法</th>
                                    <th id=\"payment_list__header_charge\">手数料</th>
                                    <th id=\"payment_list__header_rule\">利用条件</th>
                                    <th id=\"payment_list__header_menu_box\">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <form name=\"delete_form\" id=\"delete_form\" action=\"\" method=\"post\">
                                    </form>
                                    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Payments"]) ? $context["Payments"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["Payment"]) {
            // line 54
            echo "                                    <tr id=\"payment_list__item--";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Payment"], "id", array()), "html", null, true);
            echo "\">

                                        <td id=\"payment_list__method--";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["Payment"], "id", array()), "html", null, true);
            echo "\" class=\"member_name\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Payment"], "method", array()), "html", null, true);
            echo "</td>
                                        <td id=\"payment_list__charge--";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["Payment"], "id", array()), "html", null, true);
            echo "\" class=\"member_name\">
                                            ";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["Payment"], "charge", array()), "html", null, true);
            echo "
                                        </td>
                                        <td id=\"payment_list__rule--";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["Payment"], "id", array()), "html", null, true);
            echo "\" class=\"member_name\">
                                            ";
            // line 61
            if (($this->getAttribute($context["Payment"], "rule_min", array()) > 0)) {
                // line 62
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Payment"], "rule_min", array()), "html", null, true);
                echo "
                                            ";
            } else {
                // line 64
                echo "                                                0
                                            ";
            }
            // line 65
            echo "円

                                            ";
            // line 67
            if (($this->getAttribute($context["Payment"], "rule_max", array()) > 0)) {
                // line 68
                echo "                                                ～";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Payment"], "rule_max", array()), "html", null, true);
                echo "円
                                            ";
            } elseif ((null === $this->getAttribute(            // line 69
$context["Payment"], "rule_max", array()))) {
                // line 70
                echo "                                                ～無制限
                                            ";
            }
            // line 72
            echo "                                        </td>
                                        <td id=\"payment_list__menu_box--";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["Payment"], "id", array()), "html", null, true);
            echo "\" class=\"icon_edit\">
                                            <div id=\"payment_list__menu_toggle--";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["Payment"], "id", array()), "html", null, true);
            echo "\" class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><svg class=\"cb cb-ellipsis-h\"> <use xlink:href=\"#cb-ellipsis-h\" /></svg></a>
                                                <ul id=\"payment_list__menu--";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["Payment"], "id", array()), "html", null, true);
            echo "\" class=\"dropdown-menu dropdown-menu-right\">
                                                    <li>
                                                        ";
            // line 78
            if (($this->getAttribute($context["Payment"], "fix_flg", array()) == 1)) {
                // line 79
                echo "                                                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_setting_shop_payment_edit", array("id" => $this->getAttribute($context["Payment"], "id", array()))), "html", null, true);
                echo "\">編集</a>
                                                        ";
            } else {
                // line 81
                echo "                                                            <a>編集</a>
                                                        ";
            }
            // line 83
            echo "                                                    </li>
                                                    <li>
                                                        ";
            // line 85
            if (($this->getAttribute($context["Payment"], "fix_flg", array()) == 1)) {
                // line 86
                echo "                                                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_setting_shop_payment_delete", array("id" => $this->getAttribute($context["Payment"], "id", array()))), "html", null, true);
                echo "\" ";
                echo $this->env->getExtension('eccube')->getCsrfTokenForAnchor();
                echo " data-method=\"delete\">削除</a>
                                                        ";
            } else {
                // line 88
                echo "                                                            <a>削除</a>
                                                        ";
            }
            // line 90
            echo "                                                    </li>
                                                    <li>
                                                        ";
            // line 92
            if (($this->getAttribute($context["loop"], "first", array()) == false)) {
                // line 93
                echo "                                                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_setting_shop_payment_up", array("id" => $this->getAttribute($context["Payment"], "id", array()))), "html", null, true);
                echo "\" ";
                echo $this->env->getExtension('eccube')->getCsrfTokenForAnchor();
                echo " data-method=\"put\" data-confirm=\"false\">上へ</a></li>
                                                        ";
            }
            // line 95
            echo "                                                        ";
            if (($this->getAttribute($context["loop"], "last", array()) == false)) {
                // line 96
                echo "                                                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_setting_shop_payment_down", array("id" => $this->getAttribute($context["Payment"], "id", array()))), "html", null, true);
                echo "\"  ";
                echo $this->env->getExtension('eccube')->getCsrfTokenForAnchor();
                echo " data-method=\"put\" data-confirm=\"false\">下へ</a></li>
                                                        ";
            }
            // line 98
            echo "                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!-- /.box-body -->

            </div><!-- /.box -->
        </div><!-- /.col -->
    </div>

    <div id=\"payment_list__footer\" class=\"row\">
        <div id=\"payment_list__insert_button\" class=\"col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 text-center btn_area\">
            <a href=\"";
        // line 116
        echo $this->env->getExtension('eccube')->getUrl("admin_setting_shop_payment_new");
        echo "\" class=\"btn btn-primary btn-block btn-lg\">支払方法を新規入力</a>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__1f89e0b6221508a40a2cef2ec0d4953838e400a2419a53c4d37a85cbb5a47ab9";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 116,  235 => 104,  216 => 98,  208 => 96,  205 => 95,  197 => 93,  195 => 92,  191 => 90,  187 => 88,  179 => 86,  177 => 85,  173 => 83,  169 => 81,  163 => 79,  161 => 78,  156 => 76,  151 => 74,  147 => 73,  144 => 72,  140 => 70,  138 => 69,  133 => 68,  131 => 67,  127 => 65,  123 => 64,  117 => 62,  115 => 61,  111 => 60,  106 => 58,  102 => 57,  96 => 56,  90 => 54,  73 => 53,  48 => 30,  45 => 29,  39 => 27,  33 => 26,  29 => 22,  27 => 24,  11 => 22,);
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
/* {% set menus = ['setting', 'shop', 'shop_payment'] %}*/
/* */
/* {% block title %}ショップ設定{% endblock %}*/
/* {% block sub_title %}支払方法管理{% endblock %}*/
/* */
/* {% block main %}*/
/*     <div id="payment_wrap" class="row">*/
/*         <div id="payment_list_box" class="col-md-12">*/
/*             <div id="payment_list_box__body" class="box">*/
/*                 <div id="payment_list_box__header" class="box-header with-arrow">*/
/*                     <h3 class="box-title">*/
/*                         支払方法*/
/*                     </h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 <div id="payment_list_box__body_inner" class="box-body">*/
/*                     <div id="payment_list__list" class="table_list">*/
/*                         <div id="payment_list__list_body" class="table-responsive with-border">*/
/*                             <table class="table table-striped">*/
/*                                 <thead>*/
/*                                 <tr id="payment_list__list_header">*/
/*                                     <th id="payment_list__header_method">支払方法</th>*/
/*                                     <th id="payment_list__header_charge">手数料</th>*/
/*                                     <th id="payment_list__header_rule">利用条件</th>*/
/*                                     <th id="payment_list__header_menu_box">&nbsp;</th>*/
/*                                 </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                     <form name="delete_form" id="delete_form" action="" method="post">*/
/*                                     </form>*/
/*                                     {% for Payment in Payments %}*/
/*                                     <tr id="payment_list__item--{{ Payment.id }}">*/
/* */
/*                                         <td id="payment_list__method--{{ Payment.id }}" class="member_name">{{ Payment.method }}</td>*/
/*                                         <td id="payment_list__charge--{{ Payment.id }}" class="member_name">*/
/*                                             {{ Payment.charge }}*/
/*                                         </td>*/
/*                                         <td id="payment_list__rule--{{ Payment.id }}" class="member_name">*/
/*                                             {% if Payment.rule_min > 0 %}*/
/*                                                 {{ Payment.rule_min }}*/
/*                                             {% else %}*/
/*                                                 0*/
/*                                             {% endif %}円*/
/* */
/*                                             {% if Payment.rule_max > 0 %}*/
/*                                                 ～{{ Payment.rule_max }}円*/
/*                                             {% elseif Payment.rule_max is null %}*/
/*                                                 ～無制限*/
/*                                             {% endif %}*/
/*                                         </td>*/
/*                                         <td id="payment_list__menu_box--{{ Payment.id }}" class="icon_edit">*/
/*                                             <div id="payment_list__menu_toggle--{{ Payment.id }}" class="dropdown">*/
/*                                                 <a class="dropdown-toggle" data-toggle="dropdown"><svg class="cb cb-ellipsis-h"> <use xlink:href="#cb-ellipsis-h" /></svg></a>*/
/*                                                 <ul id="payment_list__menu--{{ Payment.id }}" class="dropdown-menu dropdown-menu-right">*/
/*                                                     <li>*/
/*                                                         {% if Payment.fix_flg == 1 %}*/
/*                                                             <a href="{{ url('admin_setting_shop_payment_edit', { id: Payment.id}) }}">編集</a>*/
/*                                                         {% else %}*/
/*                                                             <a>編集</a>*/
/*                                                         {% endif %}*/
/*                                                     </li>*/
/*                                                     <li>*/
/*                                                         {% if Payment.fix_flg == 1 %}*/
/*                                                             <a href="{{ url('admin_setting_shop_payment_delete', { id: Payment.id}) }}" {{ csrf_token_for_anchor() }} data-method="delete">削除</a>*/
/*                                                         {% else %}*/
/*                                                             <a>削除</a>*/
/*                                                         {% endif %}*/
/*                                                     </li>*/
/*                                                     <li>*/
/*                                                         {% if loop.first == false %}*/
/*                                                             <li><a href="{{ url('admin_setting_shop_payment_up', {id: Payment.id}) }}" {{ csrf_token_for_anchor() }} data-method="put" data-confirm="false">上へ</a></li>*/
/*                                                         {% endif %}*/
/*                                                         {% if loop.last == false %}*/
/*                                                             <li><a href="{{ url('admin_setting_shop_payment_down', {id: Payment.id}) }}"  {{ csrf_token_for_anchor() }} data-method="put" data-confirm="false">下へ</a></li>*/
/*                                                         {% endif %}*/
/*                                                     </li>*/
/*                                                 </ul>*/
/*                                             </div>*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                     {% endfor %}*/
/*                                 </tbody>*/
/*                             </table>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div><!-- /.box-body -->*/
/* */
/*             </div><!-- /.box -->*/
/*         </div><!-- /.col -->*/
/*     </div>*/
/* */
/*     <div id="payment_list__footer" class="row">*/
/*         <div id="payment_list__insert_button" class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 text-center btn_area">*/
/*             <a href="{{ url('admin_setting_shop_payment_new') }}" class="btn btn-primary btn-block btn-lg">支払方法を新規入力</a>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
