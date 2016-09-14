<?php

/* __string_template__0d6c006f7b6d879d848b3d3202c0b240276f31b4c8a26fb70480f86e5ce00a7c */
class __TwigTemplate_a34f8550d384dde1697646c84ab1266abd3d8f240db929e7333a9a2120dd9842 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__0d6c006f7b6d879d848b3d3202c0b240276f31b4c8a26fb70480f86e5ce00a7c", 22);
        $this->blocks = array(
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
        $context["mypageno"] = "delivery";
        // line 26
        $context["body_class"] = "mypage";
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_main($context, array $blocks = array())
    {
        // line 29
        echo "    <h1 class=\"page-heading\">マイページ/お届け先編集</h1>
    <div id=\"delivery_wrap\" class=\"container-fluid\">

        ";
        // line 32
        echo twig_include($this->env, $context, "Mypage/navi.twig");
        echo "

        <div id=\"delivery_list_box\" class=\"row\">
            <div id=\"delivery_list_box__body\" class=\"col-md-12\">
                <p id=\"delivery_list_box__customer_addresses\" class=\"intro\"><strong>";
        // line 36
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["Customer"]) ? $context["Customer"] : null), "CustomerAddresses", array())), "html", null, true);
        echo "件</strong>のお届け先があります。</p>
                    <div id=\"deliveradd_select\" class=\"row\">
                        <div id=\"delivery_list_box__body_inner\" class=\"col-sm-10 col-sm-offset-1\">
                            <p id=\"delivery_box__new_button\">
                            ";
        // line 40
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["Customer"]) ? $context["Customer"] : null), "CustomerAddresses", array())) < $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "deliv_addr_max", array()))) {
            // line 41
            echo "                                <a href=\"";
            echo $this->env->getExtension('eccube')->getUrl("mypage_delivery_new");
            echo "\">
                                    <button class=\"btn btn-default btn-sm\">新規お届け先を追加する</button>
                                </a>
                            ";
        } else {
            // line 45
            echo "                                <span id=\"delivery_box__deliv_addr_max\" class=\"text-danger\">お届け先登録の上限の";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "deliv_addr_max", array()), "html", null, true);
            echo "件に達しています。お届け先を入力したい場合は、削除か変更を行ってください</span>
                            ";
        }
        // line 47
        echo "                            </p>

                            ";
        // line 49
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["Customer"]) ? $context["Customer"] : null), "CustomerAddresses", array())) > 0)) {
            // line 50
            echo "                            <div id=\"delivery_address_list\" class=\"table address_table\">
                                <div id=\"delivery_address_list__list\" class=\"tbody\">

                                    ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Customer"]) ? $context["Customer"] : null), "CustomerAddresses", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["CustomerAddress"]) {
                // line 54
                echo "                                        <div id=\"delivery_address_list__item--";
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "id", array()), "html", null, true);
                echo "\" class=\"addr_box tr\">
                                            <div id=\"delivery_address_list__delete--";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "id", array()), "html", null, true);
                echo "\" class=\"icon_edit td\">
                                            ";
                // line 56
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["Customer"]) ? $context["Customer"] : null), "CustomerAddresses", array())) != 1)) {
                    // line 57
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("mypage_delivery_delete", array("id" => $this->getAttribute($context["CustomerAddress"], "id", array()))), "html", null, true);
                    echo "\" ";
                    echo $this->env->getExtension('eccube')->getCsrfTokenForAnchor();
                    echo " data-method=\"delete\">
                                                    <svg class=\"cb cb-close\"><use xlink:href=\"#cb-close\" /></svg>
                                                </a>
                                            ";
                }
                // line 61
                echo "                                            </div>
                                            <div id=\"delivery_address_list__address--";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "id", array()), "html", null, true);
                echo "\" class=\"column is-edit td\">
                                                <label for=\"address01\">
                                                <p id=\"delivery_address_list__address_detail--";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "id", array()), "html", null, true);
                echo "\" class=\"address\">
                                                    ";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "name01", array()), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "name02", array()), "html", null, true);
                echo "<br>
                                                    〒";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "zip01", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "zip02", array()), "html", null, true);
                echo "　";
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "Pref", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "addr01", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "addr02", array()), "html", null, true);
                echo "<br>
                                                    ";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "tel01", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "tel02", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "tel03", array()), "html", null, true);
                echo "</p>
                                                </label>
                                                <p id=\"delivery_address_list__edit_button--";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "id", array()), "html", null, true);
                echo "\" class=\"btn_edit\">
                                                    <a href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("mypage_delivery_edit", array("id" => $this->getAttribute($context["CustomerAddress"], "id", array()))), "html", null, true);
                echo "\">
                                                        <button class=\"btn btn-default btn-sm\">変更</button>
                                                    </a>
                                                </p>
                                            </div>
                                        </div><!--/addr_box-->
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['CustomerAddress'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "
                                </div>
                            </div><!--/table-->
                            ";
        }
        // line 81
        echo "
                        </div>
                    </div><!-- /.row -->

            </div><!-- /.col -->
        </div><!-- /.row -->

    </div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__0d6c006f7b6d879d848b3d3202c0b240276f31b4c8a26fb70480f86e5ce00a7c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 81,  161 => 77,  148 => 70,  144 => 69,  135 => 67,  125 => 66,  119 => 65,  115 => 64,  110 => 62,  107 => 61,  97 => 57,  95 => 56,  91 => 55,  86 => 54,  82 => 53,  77 => 50,  75 => 49,  71 => 47,  65 => 45,  57 => 41,  55 => 40,  48 => 36,  41 => 32,  36 => 29,  33 => 28,  29 => 22,  27 => 26,  25 => 24,  11 => 22,);
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
/* {% set mypageno = 'delivery' %}*/
/* */
/* {% set body_class = 'mypage' %}*/
/* */
/* {% block main %}*/
/*     <h1 class="page-heading">マイページ/お届け先編集</h1>*/
/*     <div id="delivery_wrap" class="container-fluid">*/
/* */
/*         {{ include('Mypage/navi.twig') }}*/
/* */
/*         <div id="delivery_list_box" class="row">*/
/*             <div id="delivery_list_box__body" class="col-md-12">*/
/*                 <p id="delivery_list_box__customer_addresses" class="intro"><strong>{{ Customer.CustomerAddresses|length }}件</strong>のお届け先があります。</p>*/
/*                     <div id="deliveradd_select" class="row">*/
/*                         <div id="delivery_list_box__body_inner" class="col-sm-10 col-sm-offset-1">*/
/*                             <p id="delivery_box__new_button">*/
/*                             {% if Customer.CustomerAddresses|length < app.config.deliv_addr_max %}*/
/*                                 <a href="{{ url('mypage_delivery_new') }}">*/
/*                                     <button class="btn btn-default btn-sm">新規お届け先を追加する</button>*/
/*                                 </a>*/
/*                             {% else %}*/
/*                                 <span id="delivery_box__deliv_addr_max" class="text-danger">お届け先登録の上限の{{ app.config.deliv_addr_max }}件に達しています。お届け先を入力したい場合は、削除か変更を行ってください</span>*/
/*                             {% endif %}*/
/*                             </p>*/
/* */
/*                             {% if Customer.CustomerAddresses|length > 0 %}*/
/*                             <div id="delivery_address_list" class="table address_table">*/
/*                                 <div id="delivery_address_list__list" class="tbody">*/
/* */
/*                                     {% for CustomerAddress in Customer.CustomerAddresses %}*/
/*                                         <div id="delivery_address_list__item--{{ CustomerAddress.id }}" class="addr_box tr">*/
/*                                             <div id="delivery_address_list__delete--{{ CustomerAddress.id }}" class="icon_edit td">*/
/*                                             {% if Customer.CustomerAddresses|length != 1 %}*/
/*                                                 <a href="{{ url('mypage_delivery_delete', { id : CustomerAddress.id }) }}" {{ csrf_token_for_anchor() }} data-method="delete">*/
/*                                                     <svg class="cb cb-close"><use xlink:href="#cb-close" /></svg>*/
/*                                                 </a>*/
/*                                             {% endif %}*/
/*                                             </div>*/
/*                                             <div id="delivery_address_list__address--{{ CustomerAddress.id }}" class="column is-edit td">*/
/*                                                 <label for="address01">*/
/*                                                 <p id="delivery_address_list__address_detail--{{ CustomerAddress.id }}" class="address">*/
/*                                                     {{ CustomerAddress.name01 }}&nbsp;{{ CustomerAddress.name02 }}<br>*/
/*                                                     〒{{ CustomerAddress.zip01 }}-{{ CustomerAddress.zip02 }}　{{ CustomerAddress.Pref }}{{ CustomerAddress.addr01 }}{{ CustomerAddress.addr02 }}<br>*/
/*                                                     {{ CustomerAddress.tel01 }}-{{ CustomerAddress.tel02 }}-{{ CustomerAddress.tel03 }}</p>*/
/*                                                 </label>*/
/*                                                 <p id="delivery_address_list__edit_button--{{ CustomerAddress.id }}" class="btn_edit">*/
/*                                                     <a href="{{ url('mypage_delivery_edit', { id : CustomerAddress.id }) }}">*/
/*                                                         <button class="btn btn-default btn-sm">変更</button>*/
/*                                                     </a>*/
/*                                                 </p>*/
/*                                             </div>*/
/*                                         </div><!--/addr_box-->*/
/*                                     {% endfor %}*/
/* */
/*                                 </div>*/
/*                             </div><!--/table-->*/
/*                             {% endif %}*/
/* */
/*                         </div>*/
/*                     </div><!-- /.row -->*/
/* */
/*             </div><!-- /.col -->*/
/*         </div><!-- /.row -->*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
