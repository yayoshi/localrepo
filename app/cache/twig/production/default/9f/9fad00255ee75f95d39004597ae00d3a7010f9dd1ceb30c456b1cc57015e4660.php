<?php

/* __string_template__6bb723569a66ea7821ade31b35c618f6e07180a919f3979e40b479f67b52956f */
class __TwigTemplate_5192d3ac3619d962cc9a90dbf46aca3aae270892d22c85f5a84335b7be176cfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__6bb723569a66ea7821ade31b35c618f6e07180a919f3979e40b479f67b52956f", 22);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    public function block_main($context, array $blocks = array())
    {
        // line 25
        echo "    <h1 class=\"page-heading\">お届け先の指定</h1>
    <div id=\"deliver_wrap\" class=\"container-fluid\">
        <form method=\"post\" action=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("shopping_shipping", array("id" => (isset($context["shippingId"]) ? $context["shippingId"] : null))), "html", null, true);
        echo "\">
            <div id=\"deliveradd_select\" class=\"row\">
                <div id=\"list_box__body\" class=\"col-sm-10 col-sm-offset-1\">
                    <p id=\"list_box__add_button\">
                    ";
        // line 31
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["Customer"]) ? $context["Customer"] : null), "CustomerAddresses", array())) < $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "deliv_addr_max", array()))) {
            // line 32
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("shopping_shipping_edit", array("id" => (isset($context["shippingId"]) ? $context["shippingId"] : null))), "html", null, true);
            echo "\" class=\"btn btn-default btn-sm\">新規お届け先を追加する</a>
                    ";
        } else {
            // line 34
            echo "                        <span id=\"list_box__deliv_addr_max_message\" class=\"text-danger\">お届け先登録上限の";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "deliv_addr_max", array()), "html", null, true);
            echo "件に達しています。お届け先を入力したい場合は、削除か変更を行ってください</span>
                    ";
        }
        // line 36
        echo "                    </p>
                    ";
        // line 37
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 38
            echo "                        <p id=\"list_box__deliv_addr_alert\" class=\"text-danger\">お届け先を指定してください。</p>
                    ";
        }
        // line 40
        echo "
                    ";
        // line 41
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["Customer"]) ? $context["Customer"] : null), "CustomerAddresses", array())) > 0)) {
            // line 42
            echo "                     <div id=\"list_box__list_body\" class=\"table address_table\">
                        <div id=\"list_box__list_body_inner\" class=\"tbody\">
                            ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Customer"]) ? $context["Customer"] : null), "CustomerAddresses", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["CustomerAddress"]) {
                // line 45
                echo "                            <div id=\"list_box__item--";
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "id", array()), "html", null, true);
                echo "\" class=\"addr_box tr\">
                            <div id=\"list_box__id--";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "id", array()), "html", null, true);
                echo "\" class=\"icon_radio td\"><input type=\"radio\" id=\"address";
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "id", array()), "html", null, true);
                echo "\" class=\"no-style\" name=\"address\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "id", array()), "html", null, true);
                echo "\" /></div>
                            <div id=\"list_box__address_area--";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "id", array()), "html", null, true);
                echo "\" class=\"column td\">
                                <label for=\"address";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "id", array()), "html", null, true);
                echo "\">
                                    <p id=\"list_box__address--";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "id", array()), "html", null, true);
                echo "\" class=\"address\">
                                        ";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "name01", array()), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "name02", array()), "html", null, true);
                echo "<br>
                                        〒";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "zip01", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "zip02", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "Pref", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "addr01", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "addr02", array()), "html", null, true);
                echo "<br>
                                        ";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "tel01", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "tel02", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "tel03", array()), "html", null, true);
                echo "
                                    </p>
                                </label>
                            </div>
                            </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['CustomerAddress'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                            </div>
                        </div><!--/table-->
                        ";
        }
        // line 61
        echo "
                    <div id=\"list_box__button_menu\" class=\"row no-padding\">
                        <div class=\"btn_group col-sm-offset-4 col-sm-4\">
                            <p id=\"list_box__confirm_button\"><button type=\"submit\" class=\"btn btn-primary btn-block\">選択したお届け先に送る</button></p>
                            <p id=\"list_box__back_button\"><a href=\"";
        // line 65
        echo $this->env->getExtension('eccube')->getUrl("shopping");
        echo "\" class=\"btn btn-info btn-block\">戻る</a></p>
                        </div>
                    </div>

                </div>
            </div><!-- /.row -->
        </form>

    </div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__6bb723569a66ea7821ade31b35c618f6e07180a919f3979e40b479f67b52956f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 65,  140 => 61,  135 => 58,  119 => 52,  109 => 51,  103 => 50,  99 => 49,  95 => 48,  91 => 47,  83 => 46,  78 => 45,  74 => 44,  70 => 42,  68 => 41,  65 => 40,  61 => 38,  59 => 37,  56 => 36,  50 => 34,  44 => 32,  42 => 31,  35 => 27,  31 => 25,  28 => 24,  11 => 22,);
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
/* {% block main %}*/
/*     <h1 class="page-heading">お届け先の指定</h1>*/
/*     <div id="deliver_wrap" class="container-fluid">*/
/*         <form method="post" action="{{ url('shopping_shipping', {'id': shippingId}) }}">*/
/*             <div id="deliveradd_select" class="row">*/
/*                 <div id="list_box__body" class="col-sm-10 col-sm-offset-1">*/
/*                     <p id="list_box__add_button">*/
/*                     {% if Customer.CustomerAddresses|length < app.config.deliv_addr_max %}*/
/*                         <a href="{{ url('shopping_shipping_edit', {'id': shippingId}) }}" class="btn btn-default btn-sm">新規お届け先を追加する</a>*/
/*                     {% else %}*/
/*                         <span id="list_box__deliv_addr_max_message" class="text-danger">お届け先登録上限の{{ app.config.deliv_addr_max }}件に達しています。お届け先を入力したい場合は、削除か変更を行ってください</span>*/
/*                     {% endif %}*/
/*                     </p>*/
/*                     {% if error %}*/
/*                         <p id="list_box__deliv_addr_alert" class="text-danger">お届け先を指定してください。</p>*/
/*                     {% endif %}*/
/* */
/*                     {% if Customer.CustomerAddresses|length > 0 %}*/
/*                      <div id="list_box__list_body" class="table address_table">*/
/*                         <div id="list_box__list_body_inner" class="tbody">*/
/*                             {% for CustomerAddress in Customer.CustomerAddresses %}*/
/*                             <div id="list_box__item--{{ CustomerAddress.id }}" class="addr_box tr">*/
/*                             <div id="list_box__id--{{ CustomerAddress.id }}" class="icon_radio td"><input type="radio" id="address{{ CustomerAddress.id }}" class="no-style" name="address" value="{{ CustomerAddress.id }}" /></div>*/
/*                             <div id="list_box__address_area--{{ CustomerAddress.id }}" class="column td">*/
/*                                 <label for="address{{ CustomerAddress.id }}">*/
/*                                     <p id="list_box__address--{{ CustomerAddress.id }}" class="address">*/
/*                                         {{ CustomerAddress.name01 }}&nbsp;{{ CustomerAddress.name02 }}<br>*/
/*                                         〒{{ CustomerAddress.zip01 }}-{{ CustomerAddress.zip02 }} {{ CustomerAddress.Pref }}{{ CustomerAddress.addr01 }}{{ CustomerAddress.addr02 }}<br>*/
/*                                         {{ CustomerAddress.tel01 }}-{{ CustomerAddress.tel02 }}-{{ CustomerAddress.tel03 }}*/
/*                                     </p>*/
/*                                 </label>*/
/*                             </div>*/
/*                             </div>*/
/*                             {% endfor %}*/
/*                             </div>*/
/*                         </div><!--/table-->*/
/*                         {% endif %}*/
/* */
/*                     <div id="list_box__button_menu" class="row no-padding">*/
/*                         <div class="btn_group col-sm-offset-4 col-sm-4">*/
/*                             <p id="list_box__confirm_button"><button type="submit" class="btn btn-primary btn-block">選択したお届け先に送る</button></p>*/
/*                             <p id="list_box__back_button"><a href="{{ url('shopping') }}" class="btn btn-info btn-block">戻る</a></p>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </div><!-- /.row -->*/
/*         </form>*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
