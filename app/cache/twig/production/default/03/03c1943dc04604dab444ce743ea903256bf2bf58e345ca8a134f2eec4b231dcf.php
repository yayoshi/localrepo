<?php

/* __string_template__000bc9d4f08a46caa27364501cfe6c66c1fb612816277c6b63f463a4c9a2bda5 */
class __TwigTemplate_dcc622729e4d738b7dc1a99b37d24852ae72ed7cd2a64718f14d95167c4c1ed5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__000bc9d4f08a46caa27364501cfe6c66c1fb612816277c6b63f463a4c9a2bda5", 22);
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
        $context["body_class"] = "registration_page";
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
            AjaxZip3.zip2addr('entry[zip][zip01]', 'entry[zip][zip02]', 'entry[address][pref]', 'entry[address][addr01]');
        });
    });
</script>
";
    }

    // line 37
    public function block_main($context, array $blocks = array())
    {
        // line 38
        echo "<h1 class=\"page-heading\">新規会員登録</h1>
<div id=\"top_wrap\" class=\"container-fluid\">
    <div id=\"top_box\" class=\"row\">
        <div id=\"top_box__body\" class=\"col-md-10 col-md-offset-1\">
            <form method=\"post\" action=\"";
        // line 42
        echo $this->env->getExtension('eccube')->getUrl("entry");
        echo "\">
                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
                <div id=\"top_box__body_inner\" class=\"dl_table\">
                    <dl id=\"top_box__name\">
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
                    <dl id=\"top_box__kana\">
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
                    <dl id=\"top_box__company_name\">
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
                    <dl id=\"top_box__address_detail\">
                        <dt>";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), 'label');
        echo "</dt>
                        <dd>
                            <div id=\"top_box__zip\" class=\"form-group form-inline input_zip ";
        // line 73
        if (( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zip", array()), "zip01", array()), "vars", array()), "errors", array())) ||  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zip", array()), "zip02", array()), "vars", array()), "errors", array())))) {
            echo "has-error";
        }
        echo "\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zip", array()), 'widget');
        echo "</div>
                            <div id=\"top_box__address\" class=\"";
        // line 74
        if ((( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "pref", array()), "vars", array()), "errors", array())) ||  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "addr01", array()), "vars", array()), "errors", array()))) ||  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "addr02", array()), "vars", array()), "errors", array())))) {
            echo "has-error";
        }
        echo "\">
                                ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), 'widget');
        echo "
                                ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), 'errors');
        echo "
                            </div>
                        </dd>
                    </dl>
                    <dl id=\"top_box__tel\">
                        <dt>";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), 'label');
        echo "</dt>
                        <dd>
                            <div class=\"form-inline form-group input_tel\">
                                ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), 'widget', array("attr" => array("class" => "short")));
        echo "
                                ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), 'errors');
        echo "
                            </div>
                        </dd>
                    </dl>
                    <dl id=\"top_box__fax\">
                        <dt>";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fax", array()), 'label');
        echo "</dt>
                        <dd>
                            <div class=\"form-inline form-group input_tel\">
                                ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fax", array()), 'widget', array("attr" => array("class" => "short")));
        echo "
                                ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fax", array()), 'errors');
        echo "
                            </div>
                        </dd>
                    </dl>
                    <dl id=\"top_box__email\">
                        <dt>";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label');
        echo "</dt>
                        <dd>
                            ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["emailField"]) {
            // line 102
            echo "                            <div class=\"form-group ";
            if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["emailField"], "vars", array()), "errors", array()))) {
                echo "has-error";
            }
            echo "\">
                                ";
            // line 103
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["emailField"], 'widget');
            echo "
                                ";
            // line 104
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["emailField"], 'errors');
            echo "
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emailField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "                        </dd>
                    </dl>
                    <dl id=\"top_box__password\">
                        <dt>";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), 'label');
        echo "</dt>
                        <dd>
                            ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["passwordField"]) {
            // line 113
            echo "                            <div class=\"form-group ";
            if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["passwordField"], "vars", array()), "errors", array()))) {
                echo "has-error";
            }
            echo "\">
                                ";
            // line 114
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["passwordField"], 'widget', array("type" => "password"));
            echo "
                                ";
            // line 115
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["passwordField"], 'errors');
            echo "
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['passwordField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "                        </dd>
                    </dl>
                </div>
                <div id=\"top_box__birth\" class=\"dl_table not_required\">
                    <dl>
                        <dt>";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "birth", array()), 'label');
        echo "</dt>
                        <dd>
                            <div class=\"form-group form-inline\">
                                ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "birth", array()), 'widget');
        echo "
                                ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "birth", array()), 'errors');
        echo "
                            </div>
                        </dd>
                    </dl>
                    <dl>
                        <dt id=\"top_box__sex\">";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sex", array()), 'label');
        echo "</dt>
                        <dd>
                            <div class=\"form-group form-inline\">
                                ";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sex", array()), 'widget');
        echo "
                                ";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sex", array()), 'errors');
        echo "
                            </div>
                        </dd>
                    </dl>
                    <dl id=\"top_box__job\">
                        <dt>";
        // line 141
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "job", array()), 'label');
        echo "</dt>
                        <dd>
                            <div class=\"form-group form-inline\">
                                ";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "job", array()), 'widget');
        echo "
                                ";
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "job", array()), 'errors');
        echo "
                            </div>
                        </dd>
                    </dl>
                </div>
                ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 151
            echo "                    ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 152
                echo "                        <div class=\"extra-form dl_table\">
                            ";
                // line 153
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'row');
                echo "
                        </div>
                    ";
            }
            // line 156
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "                <input id=\"top_box__hidden_mode\" type=\"hidden\" name=\"mode\" value=\"confirm\">
                <p id=\"top_box__agreement\" class=\"form_terms_link\"><a href=\"";
        // line 158
        echo $this->env->getExtension('eccube')->getUrl("help_agreement");
        echo "\" target=\"_blank\">利用規約</a>に同意してお進みください
                </p>

                <div id=\"top_box__footer\" class=\"row no-padding\">
                    <div id=\"top_box__button_menu\" class=\"btn_group col-sm-offset-4 col-sm-4\">
                        <p>
                            <button type=\"submit\" class=\"btn btn-primary btn-block\">同意する</button>
                        </p>
                        <p><a href=\"";
        // line 166
        echo $this->env->getExtension('eccube')->getUrl("index");
        echo "\" class=\"btn btn-info btn-block\">同意しない</a></p>
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
        return "__string_template__000bc9d4f08a46caa27364501cfe6c66c1fb612816277c6b63f463a4c9a2bda5";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 166,  346 => 158,  343 => 157,  337 => 156,  331 => 153,  328 => 152,  325 => 151,  321 => 150,  313 => 145,  309 => 144,  303 => 141,  295 => 136,  291 => 135,  285 => 132,  277 => 127,  273 => 126,  267 => 123,  260 => 118,  251 => 115,  247 => 114,  240 => 113,  236 => 112,  231 => 110,  226 => 107,  217 => 104,  213 => 103,  206 => 102,  202 => 101,  197 => 99,  189 => 94,  185 => 93,  179 => 90,  171 => 85,  167 => 84,  161 => 81,  153 => 76,  149 => 75,  143 => 74,  135 => 73,  130 => 71,  123 => 67,  119 => 66,  114 => 64,  107 => 60,  103 => 59,  99 => 58,  95 => 57,  90 => 55,  83 => 51,  79 => 50,  75 => 49,  71 => 48,  66 => 46,  60 => 43,  56 => 42,  50 => 38,  47 => 37,  35 => 27,  32 => 26,  28 => 22,  26 => 24,  11 => 22,);
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
/* {% set body_class = 'registration_page' %}*/
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
/* <h1 class="page-heading">新規会員登録</h1>*/
/* <div id="top_wrap" class="container-fluid">*/
/*     <div id="top_box" class="row">*/
/*         <div id="top_box__body" class="col-md-10 col-md-offset-1">*/
/*             <form method="post" action="{{ url('entry') }}">*/
/*                 {{ form_widget(form._token) }}*/
/*                 <div id="top_box__body_inner" class="dl_table">*/
/*                     <dl id="top_box__name">*/
/*                         <dt>{{ form_label(form.name) }}</dt>*/
/*                         <dd class="form-group input_name">*/
/*                             {{ form_widget(form.name.name01) }}*/
/*                             {{ form_widget(form.name.name02) }}*/
/*                             {{ form_errors(form.name.name01) }}*/
/*                             {{ form_errors(form.name.name02) }}*/
/*                         </dd>*/
/*                     </dl>*/
/*                     <dl id="top_box__kana">*/
/*                         <dt>{{ form_label(form.kana) }}</dt>*/
/*                         <dd class="form-group input_name">*/
/*                             {{ form_widget(form.kana.kana01) }}*/
/*                             {{ form_widget(form.kana.kana02) }}*/
/*                             {{ form_errors(form.kana.kana01) }}*/
/*                             {{ form_errors(form.kana.kana02) }}*/
/*                         </dd>*/
/*                     </dl>*/
/*                     <dl id="top_box__company_name">*/
/*                         <dt>{{ form_label(form.company_name) }}</dt>*/
/*                         <dd class="form-group input_name">*/
/*                             {{ form_widget(form.company_name) }}*/
/*                             {{ form_errors(form.company_name) }}*/
/*                         </dd>*/
/*                     </dl>*/
/*                     <dl id="top_box__address_detail">*/
/*                         <dt>{{ form_label(form.address) }}</dt>*/
/*                         <dd>*/
/*                             <div id="top_box__zip" class="form-group form-inline input_zip {% if form.zip.zip01.vars.errors is not empty or form.zip.zip02.vars.errors is not empty %}has-error{% endif %}">{{ form_widget(form.zip) }}</div>*/
/*                             <div id="top_box__address" class="{% if form.address.pref.vars.errors is not empty or form.address.addr01.vars.errors is not empty or form.address.addr02.vars.errors is not empty %}has-error{% endif %}">*/
/*                                 {{ form_widget(form.address) }}*/
/*                                 {{ form_errors(form.address) }}*/
/*                             </div>*/
/*                         </dd>*/
/*                     </dl>*/
/*                     <dl id="top_box__tel">*/
/*                         <dt>{{ form_label(form.tel) }}</dt>*/
/*                         <dd>*/
/*                             <div class="form-inline form-group input_tel">*/
/*                                 {{ form_widget(form.tel, {attr : {class : 'short'}}) }}*/
/*                                 {{ form_errors(form.tel) }}*/
/*                             </div>*/
/*                         </dd>*/
/*                     </dl>*/
/*                     <dl id="top_box__fax">*/
/*                         <dt>{{ form_label(form.fax) }}</dt>*/
/*                         <dd>*/
/*                             <div class="form-inline form-group input_tel">*/
/*                                 {{ form_widget(form.fax, {attr : {class : 'short'}}) }}*/
/*                                 {{ form_errors(form.fax) }}*/
/*                             </div>*/
/*                         </dd>*/
/*                     </dl>*/
/*                     <dl id="top_box__email">*/
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
/*                     <dl id="top_box__password">*/
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
/*                 <div id="top_box__birth" class="dl_table not_required">*/
/*                     <dl>*/
/*                         <dt>{{ form_label(form.birth) }}</dt>*/
/*                         <dd>*/
/*                             <div class="form-group form-inline">*/
/*                                 {{ form_widget(form.birth) }}*/
/*                                 {{ form_errors(form.birth) }}*/
/*                             </div>*/
/*                         </dd>*/
/*                     </dl>*/
/*                     <dl>*/
/*                         <dt id="top_box__sex">{{ form_label(form.sex) }}</dt>*/
/*                         <dd>*/
/*                             <div class="form-group form-inline">*/
/*                                 {{ form_widget(form.sex) }}*/
/*                                 {{ form_errors(form.sex) }}*/
/*                             </div>*/
/*                         </dd>*/
/*                     </dl>*/
/*                     <dl id="top_box__job">*/
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
/*                 <input id="top_box__hidden_mode" type="hidden" name="mode" value="confirm">*/
/*                 <p id="top_box__agreement" class="form_terms_link"><a href="{{ url('help_agreement') }}" target="_blank">利用規約</a>に同意してお進みください*/
/*                 </p>*/
/* */
/*                 <div id="top_box__footer" class="row no-padding">*/
/*                     <div id="top_box__button_menu" class="btn_group col-sm-offset-4 col-sm-4">*/
/*                         <p>*/
/*                             <button type="submit" class="btn btn-primary btn-block">同意する</button>*/
/*                         </p>*/
/*                         <p><a href="{{ url('index') }}" class="btn btn-info btn-block">同意しない</a></p>*/
/*                     </div>*/
/*                 </div>*/
/*             </form>*/
/*         </div>*/
/*         <!-- /.col -->*/
/*     </div>*/
/*     <!-- /.row -->*/
/* </div>*/
/* {% endblock %}*/
/* */
