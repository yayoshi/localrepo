<?php

/* __string_template__8fb72af4106c287dd7243fde8e9b8bdf6a98968bb4640a104d158087082e87c2 */
class __TwigTemplate_af02d6dcf513296d6a74ebc11239cf97bd9c914ca2f25ce03d4a91441224a136 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__8fb72af4106c287dd7243fde8e9b8bdf6a98968bb4640a104d158087082e87c2", 22);
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
        echo "    <script src=\"//ajaxzip3.github.io/ajaxzip3.js\" charset=\"UTF-8\"></script>
    <script>
        \$(function() {
            \$('#zip-search').click(function() {
                AjaxZip3.zip2addr('shopping_shipping[zip][zip01]', 'shopping_shipping[zip][zip02]', 'shopping_shipping[address][pref]', 'shopping_shipping[address][addr01]');
            });
        });
    </script>
";
    }

    // line 37
    public function block_main($context, array $blocks = array())
    {
        // line 38
        echo "    <h1 class=\"page-heading\">お届け先の追加</h1>
    <div id=\"detail_wrap\" class=\"container-fluid\">
        <div id=\"detail_box\" class=\"row\">
            <form method=\"post\" action=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("shopping_shipping_edit", array("id" => (isset($context["shippingId"]) ? $context["shippingId"] : null))), "html", null, true);
        echo "\">
                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
                <div id=\"detail_box__body\" class=\"col-sm-10 col-sm-offset-1\">
                    <div id=\"detail_box__body_inner\" class=\"dl_table\">
                        <dl id=\"detail_box__name\">
                            <dt>";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'label');
        echo "</dt>
                            <dd class=\"form-group input_name\">
                                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), "name01", array()), 'widget');
        echo "
                                ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), "name02", array()), 'widget');
        echo "
                                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), "name01", array()), 'errors');
        echo "
                                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), "name02", array()), 'errors');
        echo "
                            </dd>
                        </dl>
                        <dl id=\"detail_box__kana\">
                            <dt>";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "kana", array()), 'label');
        echo "</dt>
                            <dd class=\"form-group input_name\">
                                ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "kana", array()), "kana01", array()), 'widget');
        echo "
                                ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "kana", array()), "kana02", array()), 'widget');
        echo "
                                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "kana", array()), "kana01", array()), 'errors');
        echo "
                                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "kana", array()), "kana02", array()), 'errors');
        echo "
                            </dd>
                        </dl>
                        <dl id=\"detail_box__company_name\">
                            <dt>";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_name", array()), 'label');
        echo "</dt>
                            <dd class=\"form-group input_name\">
                                ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_name", array()), 'widget');
        echo "
                                ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_name", array()), 'errors');
        echo "
                            </dd>
                        </dl>
                        <dl id=\"detail_box__address\">
                            <dt>";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), 'label');
        echo "</dt>
                            <dd>
                                <div id=\"detail_box__zip\"
                                     class=\"form-group form-inline input_zip ";
        // line 74
        if (( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zip", array()), "zip01", array()), "vars", array()), "errors", array())) ||  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zip", array()), "zip02", array()), "vars", array()), "errors", array())))) {
            echo "has-error";
        }
        echo "\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zip", array()), 'widget');
        echo "</div>
                                <div id=\"detail_box__pref\"
                                     class=\"";
        // line 76
        if ((( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "pref", array()), "vars", array()), "errors", array())) ||  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "addr01", array()), "vars", array()), "errors", array()))) ||  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "addr02", array()), "vars", array()), "errors", array())))) {
            echo "has-error";
        }
        echo "\">
                                    ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), 'widget');
        echo "
                                    ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), 'errors');
        echo "
                                </div>
                            </dd>
                        </dl>
                        <dl id=\"detail_box__tel\">
                            <dt>";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), 'label');
        echo "</dt>
                            <dd>
                                <div class=\"form-inline form-group input_tel\">
                                    ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), 'widget', array("attr" => array("class" => "short")));
        echo "
                                    ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), 'errors');
        echo "
                                </div>
                            </dd>
                        </dl>
                        <dl id=\"detail_box__fax\">
                            <dt>";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fax", array()), 'label');
        echo "</dt>
                            <dd>
                                <div class=\"form-inline form-group input_tel\">
                                    ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fax", array()), 'widget', array("attr" => array("class" => "short")));
        echo "
                                    ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fax", array()), 'errors');
        echo "
                                </div>
                            </dd>
                        </dl>
                    </div>
                    ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 102
            echo "                        ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 103
                echo "                            <div class=\"extra-form dl_table\">
                                ";
                // line 104
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'row');
                echo "
                            </div>
                        ";
            }
            // line 107
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                    <div id=\"detail_box_footer\" class=\"row no-padding\">
                        <div id=\"detail_box__button_menu\" class=\"btn_group col-sm-offset-4 col-sm-4\">
                            <p id=\"detail_box__insert_button\">
                                <button type=\"submit\" class=\"btn btn-primary btn-block prevention-btn prevention-mask\">
                                    登録する
                                </button>
                            </p>
                            <p id=\"detail_box__back_button\"><a href=\"";
        // line 115
        echo $this->env->getExtension('eccube')->getUrl("shopping");
        echo "\"
                                                               class=\"btn btn-info btn-block\">戻る</a></p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__8fb72af4106c287dd7243fde8e9b8bdf6a98968bb4640a104d158087082e87c2";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 115,  221 => 108,  215 => 107,  209 => 104,  206 => 103,  203 => 102,  199 => 101,  191 => 96,  187 => 95,  181 => 92,  173 => 87,  169 => 86,  163 => 83,  155 => 78,  151 => 77,  145 => 76,  136 => 74,  130 => 71,  123 => 67,  119 => 66,  114 => 64,  107 => 60,  103 => 59,  99 => 58,  95 => 57,  90 => 55,  83 => 51,  79 => 50,  75 => 49,  71 => 48,  66 => 46,  59 => 42,  55 => 41,  50 => 38,  47 => 37,  35 => 27,  32 => 26,  28 => 22,  26 => 24,  11 => 22,);
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
/*     <script src="//ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>*/
/*     <script>*/
/*         $(function() {*/
/*             $('#zip-search').click(function() {*/
/*                 AjaxZip3.zip2addr('shopping_shipping[zip][zip01]', 'shopping_shipping[zip][zip02]', 'shopping_shipping[address][pref]', 'shopping_shipping[address][addr01]');*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock javascript %}*/
/* */
/* {% block main %}*/
/*     <h1 class="page-heading">お届け先の追加</h1>*/
/*     <div id="detail_wrap" class="container-fluid">*/
/*         <div id="detail_box" class="row">*/
/*             <form method="post" action="{{ url('shopping_shipping_edit', {'id': shippingId}) }}">*/
/*                 {{ form_widget(form._token) }}*/
/*                 <div id="detail_box__body" class="col-sm-10 col-sm-offset-1">*/
/*                     <div id="detail_box__body_inner" class="dl_table">*/
/*                         <dl id="detail_box__name">*/
/*                             <dt>{{ form_label(form.name) }}</dt>*/
/*                             <dd class="form-group input_name">*/
/*                                 {{ form_widget(form.name.name01) }}*/
/*                                 {{ form_widget(form.name.name02) }}*/
/*                                 {{ form_errors(form.name.name01) }}*/
/*                                 {{ form_errors(form.name.name02) }}*/
/*                             </dd>*/
/*                         </dl>*/
/*                         <dl id="detail_box__kana">*/
/*                             <dt>{{ form_label(form.kana) }}</dt>*/
/*                             <dd class="form-group input_name">*/
/*                                 {{ form_widget(form.kana.kana01) }}*/
/*                                 {{ form_widget(form.kana.kana02) }}*/
/*                                 {{ form_errors(form.kana.kana01) }}*/
/*                                 {{ form_errors(form.kana.kana02) }}*/
/*                             </dd>*/
/*                         </dl>*/
/*                         <dl id="detail_box__company_name">*/
/*                             <dt>{{ form_label(form.company_name) }}</dt>*/
/*                             <dd class="form-group input_name">*/
/*                                 {{ form_widget(form.company_name) }}*/
/*                                 {{ form_errors(form.company_name) }}*/
/*                             </dd>*/
/*                         </dl>*/
/*                         <dl id="detail_box__address">*/
/*                             <dt>{{ form_label(form.address) }}</dt>*/
/*                             <dd>*/
/*                                 <div id="detail_box__zip"*/
/*                                      class="form-group form-inline input_zip {% if form.zip.zip01.vars.errors is not empty or form.zip.zip02.vars.errors is not empty %}has-error{% endif %}">{{ form_widget(form.zip) }}</div>*/
/*                                 <div id="detail_box__pref"*/
/*                                      class="{% if form.address.pref.vars.errors is not empty or form.address.addr01.vars.errors is not empty or form.address.addr02.vars.errors is not empty %}has-error{% endif %}">*/
/*                                     {{ form_widget(form.address) }}*/
/*                                     {{ form_errors(form.address) }}*/
/*                                 </div>*/
/*                             </dd>*/
/*                         </dl>*/
/*                         <dl id="detail_box__tel">*/
/*                             <dt>{{ form_label(form.tel) }}</dt>*/
/*                             <dd>*/
/*                                 <div class="form-inline form-group input_tel">*/
/*                                     {{ form_widget(form.tel, {attr : {class : 'short'}}) }}*/
/*                                     {{ form_errors(form.tel) }}*/
/*                                 </div>*/
/*                             </dd>*/
/*                         </dl>*/
/*                         <dl id="detail_box__fax">*/
/*                             <dt>{{ form_label(form.fax) }}</dt>*/
/*                             <dd>*/
/*                                 <div class="form-inline form-group input_tel">*/
/*                                     {{ form_widget(form.fax, {attr : {class : 'short'}}) }}*/
/*                                     {{ form_errors(form.fax) }}*/
/*                                 </div>*/
/*                             </dd>*/
/*                         </dl>*/
/*                     </div>*/
/*                     {% for f in form %}*/
/*                         {% if f.vars.name matches '[^plg*]' %}*/
/*                             <div class="extra-form dl_table">*/
/*                                 {{ form_row(f) }}*/
/*                             </div>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                     <div id="detail_box_footer" class="row no-padding">*/
/*                         <div id="detail_box__button_menu" class="btn_group col-sm-offset-4 col-sm-4">*/
/*                             <p id="detail_box__insert_button">*/
/*                                 <button type="submit" class="btn btn-primary btn-block prevention-btn prevention-mask">*/
/*                                     登録する*/
/*                                 </button>*/
/*                             </p>*/
/*                             <p id="detail_box__back_button"><a href="{{ url('shopping') }}"*/
/*                                                                class="btn btn-info btn-block">戻る</a></p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
