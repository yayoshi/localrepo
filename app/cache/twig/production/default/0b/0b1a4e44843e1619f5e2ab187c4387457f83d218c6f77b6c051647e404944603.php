<?php

/* __string_template__990ff69ed7742b851652663f6ea3e08f3ac1d0bf5f7c0128efb8199b0e2e4afd */
class __TwigTemplate_9e53d62e74b383f985535c5c55252cdcb409964f352bc13ea5dc6da07a2badaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__990ff69ed7742b851652663f6ea3e08f3ac1d0bf5f7c0128efb8199b0e2e4afd", 22);
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
        $context["body_class"] = "mypage";
        // line 26
        $context["mypageno"] = "change";
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_javascript($context, array $blocks = array())
    {
        // line 29
        echo "<script src=\"//ajaxzip3.github.io/ajaxzip3.js\" charset=\"UTF-8\"></script>
<script>
    \$(function() {
        \$('#zip-search').click(function() {
            AjaxZip3.zip2addr('entry[zip][zip01]', 'entry[zip][zip02]', 'entry[address][pref]', 'entry[address][addr01]');
        });
    });
</script>
";
    }

    // line 39
    public function block_main($context, array $blocks = array())
    {
        // line 40
        echo "<h1 class=\"page-heading\">マイページ/会員情報編集</h1>
<div id=\"detail_wrap\" class=\"container-fluid\">
    ";
        // line 42
        $this->loadTemplate("Mypage/navi.twig", "__string_template__990ff69ed7742b851652663f6ea3e08f3ac1d0bf5f7c0128efb8199b0e2e4afd", 42)->display($context);
        // line 43
        echo "    <div id=\"detail_box\" class=\"row\">
        <div id=\"detail_box__body\" class=\"col-md-10 col-md-offset-1\">
            <form method=\"post\" action=\"";
        // line 45
        echo $this->env->getExtension('eccube')->getUrl("mypage_change");
        echo "\">
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
                <div id=\"detail_box__body_inner\" class=\"dl_table\">
                    <dl id=\"detail_box__name\">
                        <dt>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'label');
        echo "</dt>
                        <dd class=\"form-group input_name\">
                            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), "name01", array()), 'widget');
        echo "
                            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), "name02", array()), 'widget');
        echo "
                            ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), "name01", array()), 'errors');
        echo "
                            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), "name02", array()), 'errors');
        echo "
                        </dd>
                    </dl>
                    <dl id=\"detail_box__kana\">
                        <dt>";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "kana", array()), 'label');
        echo "</dt>
                        <dd class=\"form-group input_name\">
                            ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "kana", array()), "kana01", array()), 'widget');
        echo "
                            ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "kana", array()), "kana02", array()), 'widget');
        echo "
                            ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "kana", array()), "kana01", array()), 'errors');
        echo "
                            ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "kana", array()), "kana02", array()), 'errors');
        echo "
                        </dd>
                    </dl>
                    <dl id=\"detail_box__company_name\">
                        <dt>";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_name", array()), 'label');
        echo "</dt>
                        <dd class=\"form-group input_name\">
                            ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_name", array()), 'widget');
        echo "
                            ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_name", array()), 'errors');
        echo "
                        </dd>
                    </dl>
                    <dl id=\"detail_box__address_detail\">
                        <dt>";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), 'label');
        echo "</dt>
                        <dd>
                            <div id=\"detail_box__zip\" class=\"form-group form-inline input_zip ";
        // line 76
        if (( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zip", array()), "zip01", array()), "vars", array()), "errors", array())) ||  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zip", array()), "zip02", array()), "vars", array()), "errors", array())))) {
            echo "has-error";
        }
        echo "\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zip", array()), 'widget');
        echo "</div>
                            <div id=\"detail_box__address\" class=\"";
        // line 77
        if ((( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "pref", array()), "vars", array()), "errors", array())) ||  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "addr01", array()), "vars", array()), "errors", array()))) ||  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "addr02", array()), "vars", array()), "errors", array())))) {
            echo "has-error";
        }
        echo "\">
                                ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), 'widget');
        echo "
                                ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), 'errors');
        echo "
                            </div>
                        </dd>
                    </dl>
                    <dl id=\"detail_box__tel\">
                        <dt>";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), 'label');
        echo "</dt>
                        <dd>
                            <div class=\"form-inline form-group input_tel\">
                                ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), 'widget', array("attr" => array("class" => "short")));
        echo "
                                ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), 'errors');
        echo "
                            </div>
                        </dd>
                    </dl>
                    <dl id=\"detail_box__fax\">
                        <dt>";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fax", array()), 'label');
        echo "</dt>
                        <dd>
                            <div class=\"form-inline form-group input_tel\">
                                ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fax", array()), 'widget', array("attr" => array("class" => "short")));
        echo "
                                ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fax", array()), 'errors');
        echo "
                            </div>
                        </dd>
                    </dl>
                    <dl id=\"detail_box__email\">
                        <dt>";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label');
        echo "</dt>
                        <dd>
                            ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["emailField"]) {
            // line 105
            echo "                            <div class=\"form-group ";
            if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["emailField"], "vars", array()), "errors", array()))) {
                echo "has-error";
            }
            echo "\">
                                ";
            // line 106
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["emailField"], 'widget');
            echo "
                                ";
            // line 107
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["emailField"], 'errors');
            echo "
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emailField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "                        </dd>
                    </dl>
                    <dl id=\"detail_box__password\">
                        <dt>";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), 'label');
        echo "</dt>
                        <dd>
                            ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["passwordField"]) {
            // line 116
            echo "                            <div class=\"form-group ";
            if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["passwordField"], "vars", array()), "errors", array()))) {
                echo "has-error";
            }
            echo "\">
                                ";
            // line 117
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["passwordField"], 'widget', array("type" => "password"));
            echo "
                                ";
            // line 118
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["passwordField"], 'errors');
            echo "
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['passwordField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "                        </dd>
                    </dl>
                </div>
                <div class=\"dl_table not_required\">
                    <dl id=\"detail_box__birth\">
                        <dt>";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "birth", array()), 'label');
        echo "</dt>
                        <dd>
                            <div class=\"form-group form-inline\">
                                ";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "birth", array()), 'widget');
        echo "
                                ";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "birth", array()), 'errors');
        echo "
                            </div>
                        </dd>
                    </dl>
                    <dl id=\"detail_box__sex\">
                        <dt>";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sex", array()), 'label');
        echo "</dt>
                        <dd>
                            <div class=\"form-group form-inline\">
                                ";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sex", array()), 'widget');
        echo "
                                ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sex", array()), 'errors');
        echo "
                            </div>
                        </dd>
                    </dl>
                    <dl id=\"detail_box__job\">
                        <dt>";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "job", array()), 'label');
        echo "</dt>
                        <dd>
                            <div class=\"form-group form-inline\">
                                ";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "job", array()), 'widget');
        echo "
                                ";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "job", array()), 'errors');
        echo "
                            </div>
                        </dd>
                    </dl>
                </div>
                ";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 154
            echo "                    ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 155
                echo "                        <div class=\"extra-form dl_table\">
                            ";
                // line 156
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'row');
                echo "
                        </div>
                    ";
            }
            // line 159
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "                <div id=\"detail_box__edit_button\" class=\"row no-padding\">
                    <div class=\"btn_group col-sm-offset-4 col-sm-4\">
                        <p>
                            <button type=\"submit\" class=\"btn btn-info btn-block\">変更する</button>
                        </p>
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
        return "__string_template__990ff69ed7742b851652663f6ea3e08f3ac1d0bf5f7c0128efb8199b0e2e4afd";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 160,  343 => 159,  337 => 156,  334 => 155,  331 => 154,  327 => 153,  319 => 148,  315 => 147,  309 => 144,  301 => 139,  297 => 138,  291 => 135,  283 => 130,  279 => 129,  273 => 126,  266 => 121,  257 => 118,  253 => 117,  246 => 116,  242 => 115,  237 => 113,  232 => 110,  223 => 107,  219 => 106,  212 => 105,  208 => 104,  203 => 102,  195 => 97,  191 => 96,  185 => 93,  177 => 88,  173 => 87,  167 => 84,  159 => 79,  155 => 78,  149 => 77,  141 => 76,  136 => 74,  129 => 70,  125 => 69,  120 => 67,  113 => 63,  109 => 62,  105 => 61,  101 => 60,  96 => 58,  89 => 54,  85 => 53,  81 => 52,  77 => 51,  72 => 49,  66 => 46,  62 => 45,  58 => 43,  56 => 42,  52 => 40,  49 => 39,  37 => 29,  34 => 28,  30 => 22,  28 => 26,  26 => 24,  11 => 22,);
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
/* {% set body_class = 'mypage' %}*/
/* */
/* {% set mypageno = 'change' %}*/
/* */
/* {% block javascript %}*/
/* <script src="//ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>*/
/* <script>*/
/*     $(function() {*/
/*         $('#zip-search').click(function() {*/
/*             AjaxZip3.zip2addr('entry[zip][zip01]', 'entry[zip][zip02]', 'entry[address][pref]', 'entry[address][addr01]');*/
/*         });*/
/*     });*/
/* </script>*/
/* {% endblock javascript %}*/
/* */
/* {% block main %}*/
/* <h1 class="page-heading">マイページ/会員情報編集</h1>*/
/* <div id="detail_wrap" class="container-fluid">*/
/*     {% include 'Mypage/navi.twig' %}*/
/*     <div id="detail_box" class="row">*/
/*         <div id="detail_box__body" class="col-md-10 col-md-offset-1">*/
/*             <form method="post" action="{{ url('mypage_change') }}">*/
/*                 {{ form_widget(form._token) }}*/
/*                 <div id="detail_box__body_inner" class="dl_table">*/
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
/*                     <dl id="detail_box__address_detail">*/
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
/*                     <dl id="detail_box__fax">*/
/*                         <dt>{{ form_label(form.fax) }}</dt>*/
/*                         <dd>*/
/*                             <div class="form-inline form-group input_tel">*/
/*                                 {{ form_widget(form.fax, {attr : {class : 'short'}}) }}*/
/*                                 {{ form_errors(form.fax) }}*/
/*                             </div>*/
/*                         </dd>*/
/*                     </dl>*/
/*                     <dl id="detail_box__email">*/
/*                         <dt>{{ form_label(form.email) }}</dt>*/
/*                         <dd>*/
/*                             {% for emailField in form.email %}*/
/*                             <div class="form-group {% if emailField.vars.errors is not empty %}has-error{% endif %}">*/
/*                                 {{ form_widget(emailField) }}*/
/*                                 {{ form_errors(emailField) }}*/
/*                             </div>*/
/*                             {% endfor %}*/
/*                         </dd>*/
/*                     </dl>*/
/*                     <dl id="detail_box__password">*/
/*                         <dt>{{ form_label(form.password) }}</dt>*/
/*                         <dd>*/
/*                             {% for passwordField in form.password %}*/
/*                             <div class="form-group {% if passwordField.vars.errors is not empty %}has-error{% endif %}">*/
/*                                 {{ form_widget(passwordField, { type : 'password' }) }}*/
/*                                 {{ form_errors(passwordField) }}*/
/*                             </div>*/
/*                             {% endfor %}*/
/*                         </dd>*/
/*                     </dl>*/
/*                 </div>*/
/*                 <div class="dl_table not_required">*/
/*                     <dl id="detail_box__birth">*/
/*                         <dt>{{ form_label(form.birth) }}</dt>*/
/*                         <dd>*/
/*                             <div class="form-group form-inline">*/
/*                                 {{ form_widget(form.birth) }}*/
/*                                 {{ form_errors(form.birth) }}*/
/*                             </div>*/
/*                         </dd>*/
/*                     </dl>*/
/*                     <dl id="detail_box__sex">*/
/*                         <dt>{{ form_label(form.sex) }}</dt>*/
/*                         <dd>*/
/*                             <div class="form-group form-inline">*/
/*                                 {{ form_widget(form.sex) }}*/
/*                                 {{ form_errors(form.sex) }}*/
/*                             </div>*/
/*                         </dd>*/
/*                     </dl>*/
/*                     <dl id="detail_box__job">*/
/*                         <dt>{{ form_label(form.job) }}</dt>*/
/*                         <dd>*/
/*                             <div class="form-group form-inline">*/
/*                                 {{ form_widget(form.job) }}*/
/*                                 {{ form_errors(form.job) }}*/
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
/*                 <div id="detail_box__edit_button" class="row no-padding">*/
/*                     <div class="btn_group col-sm-offset-4 col-sm-4">*/
/*                         <p>*/
/*                             <button type="submit" class="btn btn-info btn-block">変更する</button>*/
/*                         </p>*/
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
