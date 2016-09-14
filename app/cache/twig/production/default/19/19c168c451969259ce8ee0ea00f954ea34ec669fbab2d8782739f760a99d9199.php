<?php

/* __string_template__dcd2a5c5f4e5c99082649303fe1ab88d3ff78008b7853e71b9397e4095e14a90 */
class __TwigTemplate_3f7b148349a74017b63cecacef41879a2d276407cba65d5d7de5776d293eb2da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__dcd2a5c5f4e5c99082649303fe1ab88d3ff78008b7853e71b9397e4095e14a90", 22);
        $this->blocks = array(
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
        $context["body_class"] = "cart_page";
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_javascript($context, array $blocks = array())
    {
        // line 27
        echo "<script src=\"//ajaxzip3.github.io/ajaxzip3.js\" charset=\"UTF-8\"></script>
<script>
    \$(function() {
        \$('#zip-search').click(function() {
            AjaxZip3.zip2addr('nonmember[zip][zip01]', 'nonmember[zip][zip02]', 'nonmember[address][pref]', 'nonmember[address][addr01]');
        });
    });
</script>
";
    }

    // line 37
    public function block_main($context, array $blocks = array())
    {
        // line 38
        echo "<h1 class=\"page-heading\">お客様情報の入力</h1>
<div id=\"detail_wrap\" class=\"container-fluid\">
    <div id=\"detail_box__body\" class=\"row\">
        <div id=\"detail_box__body_inner\" class=\"col-md-10 col-md-offset-1\">
            <div id=\"detail_flow_box__flow_state\" class=\"flowline step4\">
                <ul id=\"detail_flow_box___flow_state_list\"  class=\"clearfix\">
                    <li><span class=\"flow_number\">1</span><br>カートの商品</li>
                    <li class=\"active\"><span class=\"flow_number\">2</span><br>お客様情報</li>
                    <li><span class=\"flow_number\">3</span><br>ご注文内容確認</li>
                    <li><span class=\"flow_number\">4</span><br>完了</li>
                </ul>
            </div>
            <form method=\"post\" action=\"";
        // line 50
        echo $this->env->getExtension('eccube')->getUrl("shopping_nonmember");
        echo "\">
                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
                <div id=\"detail_box__body\" class=\"dl_table\">
                    <dl id=\"detail_box__name\">
                        <dt>";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'label');
        echo "</dt>
                        <dd class=\"form-group input_name\">
                            ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), "name01", array()), 'widget');
        echo "
                            ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), "name02", array()), 'widget');
        echo "
                            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), "name01", array()), 'errors');
        echo "
                            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), "name02", array()), 'errors');
        echo "
                        </dd>
                    </dl>
                    <dl id=\"detail_box__kana\">
                        <dt>";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "kana", array()), 'label');
        echo "</dt>
                        <dd class=\"form-group input_name\">
                            ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "kana", array()), "kana01", array()), 'widget');
        echo "
                            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "kana", array()), "kana02", array()), 'widget');
        echo "
                            ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "kana", array()), "kana01", array()), 'errors');
        echo "
                            ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "kana", array()), "kana02", array()), 'errors');
        echo "
                        </dd>
                    </dl>
                    <dl id=\"detail_box__company_name\">
                        <dt>";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_name", array()), 'label');
        echo "</dt>
                        <dd class=\"form-group input_name\">
                            ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_name", array()), 'widget');
        echo "
                            ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_name", array()), 'errors');
        echo "
                        </dd>
                    </dl>
                    <dl id=\"detail_box__address\">
                        <dt>";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), 'label');
        echo "</dt>
                        <dd>
                            <div id=\"detail_box__zip\" class=\"form-group form-inline input_zip ";
        // line 81
        if (( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zip", array()), "zip01", array()), "vars", array()), "errors", array())) ||  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zip", array()), "zip02", array()), "vars", array()), "errors", array())))) {
            echo "has-error";
        }
        echo "\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zip", array()), 'widget');
        echo "</div>
                            <div id=\"detail_box__address\" class=\"";
        // line 82
        if ((( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "pref", array()), "vars", array()), "errors", array())) ||  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "addr01", array()), "vars", array()), "errors", array()))) ||  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "addr02", array()), "vars", array()), "errors", array())))) {
            echo "has-error";
        }
        echo "\">
                                ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), 'widget');
        echo "
                                ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), 'errors');
        echo "
                            </div>
                        </dd>
                    </dl>
                    <dl id=\"detail_box__tel\">
                        <dt>";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), 'label');
        echo "</dt>
                        <dd>
                            <div class=\"form-inline form-group input_tel\">
                                ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), 'widget', array("attr" => array("class" => "short")));
        echo "
                                ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), 'errors');
        echo "
                            </div>
                        </dd>
                    </dl>
                    <dl id=\"detail_box__email\">
                        <dt>";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label');
        echo "</dt>
                        <dd>
                            <div class=\"form-group ";
        // line 100
        if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), "first", array()), "vars", array()), "errors", array()))) {
            echo "has-error";
        }
        echo "\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), "first", array()), 'widget');
        echo "</div>
                            <div class=\"form-group ";
        // line 101
        if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), "second", array()), "vars", array()), "errors", array()))) {
            echo "has-error";
        }
        echo "\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), "second", array()), 'widget', array("attr" => array("placeholder" => "確認のためもう一度入力してください")));
        echo "
                                ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), "first", array()), 'errors');
        echo "
                                ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), "second", array()), 'errors');
        echo "
                            </div>
                        </dd>
                    </dl>
                </div>
                ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 109
            echo "                    ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 110
                echo "                        <div class=\"extra-form dl_table\">
                            ";
                // line 111
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'row');
                echo "
                        </div>
                    ";
            }
            // line 114
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                <div id=\"detail_box__footer\" class=\"row no-padding\">
                    <div id=\"detail_box__button_menu\" class=\"btn_group col-sm-offset-4 col-sm-4\">
                        <p id=\"detail_box__next_button\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block\">次へ</button>
                        </p>
                        <p id=\"detail_box__back_button\"><a href=\"";
        // line 120
        echo $this->env->getExtension('eccube')->getUrl("cart");
        echo "\" class=\"btn btn-info btn-block\">戻る</a></p>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__dcd2a5c5f4e5c99082649303fe1ab88d3ff78008b7853e71b9397e4095e14a90";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 120,  242 => 115,  236 => 114,  230 => 111,  227 => 110,  224 => 109,  220 => 108,  212 => 103,  208 => 102,  200 => 101,  192 => 100,  187 => 98,  179 => 93,  175 => 92,  169 => 89,  161 => 84,  157 => 83,  151 => 82,  143 => 81,  138 => 79,  131 => 75,  127 => 74,  122 => 72,  115 => 68,  111 => 67,  107 => 66,  103 => 65,  98 => 63,  91 => 59,  87 => 58,  83 => 57,  79 => 56,  74 => 54,  68 => 51,  64 => 50,  50 => 38,  47 => 37,  35 => 27,  32 => 26,  28 => 22,  26 => 24,  11 => 22,);
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
/* {% set body_class = 'cart_page' %}*/
/* */
/* {% block javascript %}*/
/* <script src="//ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>*/
/* <script>*/
/*     $(function() {*/
/*         $('#zip-search').click(function() {*/
/*             AjaxZip3.zip2addr('nonmember[zip][zip01]', 'nonmember[zip][zip02]', 'nonmember[address][pref]', 'nonmember[address][addr01]');*/
/*         });*/
/*     });*/
/* </script>*/
/* {% endblock javascript %}*/
/* */
/* {% block main %}*/
/* <h1 class="page-heading">お客様情報の入力</h1>*/
/* <div id="detail_wrap" class="container-fluid">*/
/*     <div id="detail_box__body" class="row">*/
/*         <div id="detail_box__body_inner" class="col-md-10 col-md-offset-1">*/
/*             <div id="detail_flow_box__flow_state" class="flowline step4">*/
/*                 <ul id="detail_flow_box___flow_state_list"  class="clearfix">*/
/*                     <li><span class="flow_number">1</span><br>カートの商品</li>*/
/*                     <li class="active"><span class="flow_number">2</span><br>お客様情報</li>*/
/*                     <li><span class="flow_number">3</span><br>ご注文内容確認</li>*/
/*                     <li><span class="flow_number">4</span><br>完了</li>*/
/*                 </ul>*/
/*             </div>*/
/*             <form method="post" action="{{ url('shopping_nonmember') }}">*/
/*                 {{ form_widget(form._token) }}*/
/*                 <div id="detail_box__body" class="dl_table">*/
/*                     <dl id="detail_box__name">*/
/*                         <dt>{{ form_label(form.name) }}</dt>*/
/*                         <dd class="form-group input_name">*/
/*                             {{ form_widget(form.name.name01) }}*/
/*                             {{ form_widget(form.name.name02) }}*/
/*                             {{ form_errors(form.name.name01) }}*/
/*                             {{ form_errors(form.name.name02) }}*/
/*                         </dd>*/
/*                     </dl>*/
/*                     <dl id="detail_box__kana">*/
/*                         <dt>{{ form_label(form.kana) }}</dt>*/
/*                         <dd class="form-group input_name">*/
/*                             {{ form_widget(form.kana.kana01) }}*/
/*                             {{ form_widget(form.kana.kana02) }}*/
/*                             {{ form_errors(form.kana.kana01) }}*/
/*                             {{ form_errors(form.kana.kana02) }}*/
/*                         </dd>*/
/*                     </dl>*/
/*                     <dl id="detail_box__company_name">*/
/*                         <dt>{{ form_label(form.company_name) }}</dt>*/
/*                         <dd class="form-group input_name">*/
/*                             {{ form_widget(form.company_name) }}*/
/*                             {{ form_errors(form.company_name) }}*/
/*                         </dd>*/
/*                     </dl>*/
/*                     <dl id="detail_box__address">*/
/*                         <dt>{{ form_label(form.address) }}</dt>*/
/*                         <dd>*/
/*                             <div id="detail_box__zip" class="form-group form-inline input_zip {% if form.zip.zip01.vars.errors is not empty or form.zip.zip02.vars.errors is not empty %}has-error{% endif %}">{{ form_widget(form.zip) }}</div>*/
/*                             <div id="detail_box__address" class="{% if form.address.pref.vars.errors is not empty or form.address.addr01.vars.errors is not empty or form.address.addr02.vars.errors is not empty %}has-error{% endif %}">*/
/*                                 {{ form_widget(form.address) }}*/
/*                                 {{ form_errors(form.address) }}*/
/*                             </div>*/
/*                         </dd>*/
/*                     </dl>*/
/*                     <dl id="detail_box__tel">*/
/*                         <dt>{{ form_label(form.tel) }}</dt>*/
/*                         <dd>*/
/*                             <div class="form-inline form-group input_tel">*/
/*                                 {{ form_widget(form.tel, {attr : {class : 'short'}}) }}*/
/*                                 {{ form_errors(form.tel) }}*/
/*                             </div>*/
/*                         </dd>*/
/*                     </dl>*/
/*                     <dl id="detail_box__email">*/
/*                         <dt>{{ form_label(form.email) }}</dt>*/
/*                         <dd>*/
/*                             <div class="form-group {% if form.email.first.vars.errors is not empty %}has-error{% endif %}">{{ form_widget(form.email.first) }}</div>*/
/*                             <div class="form-group {% if form.email.second.vars.errors is not empty %}has-error{% endif %}">{{ form_widget(form.email.second, {attr: {placeholder: '確認のためもう一度入力してください'}}) }}*/
/*                                 {{ form_errors(form.email.first) }}*/
/*                                 {{ form_errors(form.email.second) }}*/
/*                             </div>*/
/*                         </dd>*/
/*                     </dl>*/
/*                 </div>*/
/*                 {% for f in form %}*/
/*                     {% if f.vars.name matches '[^plg*]' %}*/
/*                         <div class="extra-form dl_table">*/
/*                             {{ form_row(f) }}*/
/*                         </div>*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*                 <div id="detail_box__footer" class="row no-padding">*/
/*                     <div id="detail_box__button_menu" class="btn_group col-sm-offset-4 col-sm-4">*/
/*                         <p id="detail_box__next_button">*/
/*                             <button type="submit" class="btn btn-primary btn-block">次へ</button>*/
/*                         </p>*/
/*                         <p id="detail_box__back_button"><a href="{{ url('cart') }}" class="btn btn-info btn-block">戻る</a></p>*/
/*                     </div>*/
/*                 </div>*/
/*             </form>*/
/*         </div>*/
/*         <!-- /.col -->*/
/*     </div>*/
/*     <!-- /.row -->*/
/* */
/* </div>*/
/* {% endblock %}*/
/* */
