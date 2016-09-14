<?php

/* __string_template__30ebc054e0cfc28d6c8f3aa742b2ba08b92127fbd5bc1a1b8d44225220ff0a86 */
class __TwigTemplate_338b6ebe118e66192b968cc8e31c04e8019ae22efcbb30d86200a1a16dd80566 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__30ebc054e0cfc28d6c8f3aa742b2ba08b92127fbd5bc1a1b8d44225220ff0a86", 22);
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
        $context["menus"] = array(0 => "setting", 1 => "shop", 2 => "customer_agreement");
        // line 29
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
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
        echo "会員規約管理";
    }

    // line 31
    public function block_main($context, array $blocks = array())
    {
        // line 32
        echo "        <form role=\"form\" name=\"form1\" id=\"form1\" method=\"post\">
            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
            <div class=\"row\" id=\"aside_wrap\">
                <div id=\"detail_wrap\" class=\"col-md-9\">
                    <div id=\"detail_box\" class=\"box form-horizontal\">
                        <div id=\"detail_box__header\" class=\"box-header\">
                            <h3 class=\"box-title\">会員規約</h3>
                        </div><!-- /.box-header -->
                        <div id=\"detail_box__body\" class=\"box-body\">
                            <div id=\"detail_box__customer_agreement\" class=\"form-group\">
                                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "customer_agreement", array()), 'label');
        echo "
                                <div class=\"col-sm-9 col-lg-10\">
                                    ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "customer_agreement", array()), 'widget', array("attr" => array("rows" => 20)));
        echo "
                                    ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "customer_agreement", array()), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"extra-form\">
                                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 50
            echo "                                    ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 51
                echo "                                        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'row');
                echo "
                                    ";
            }
            // line 53
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                            </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
                <div id=\"common_box\" class=\"col-md-3\">
                    <div class=\"col_inner\" id=\"aside_column\">
                        <div id=\"common_button_box\" class=\"box no-header\">
                            <div id=\"common_button_box__body\" class=\"box-body\">
                                <div class=\"row\">
                                    <div class=\"col-xs-12\">
                                        <div id=\"common_button_box__insert_button\" class=\"form-group\">
                                            <div class=\"row text-center\">
                                                <div class=\"col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0\">
                                                    <button class=\"btn btn-primary btn-block btn-lg\" onclick=\"document.form1.submit();\">規約を登録</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div>
                </div><!-- /.col -->
            </div>

        <div class=\"btn-area\">
        </div>
        </form>
";
    }

    public function getTemplateName()
    {
        return "__string_template__30ebc054e0cfc28d6c8f3aa742b2ba08b92127fbd5bc1a1b8d44225220ff0a86";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 54,  94 => 53,  88 => 51,  85 => 50,  81 => 49,  74 => 45,  70 => 44,  65 => 42,  53 => 33,  50 => 32,  47 => 31,  41 => 27,  35 => 26,  31 => 22,  29 => 29,  27 => 24,  11 => 22,);
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
/* {% set menus = ['setting', 'shop', 'customer_agreement'] %}*/
/* */
/* {% block title %}ショップ設定{% endblock %}*/
/* {% block sub_title %}会員規約管理{% endblock %}*/
/* */
/* {% form_theme form 'Form/bootstrap_3_horizontal_layout.html.twig' %}*/
/* */
/* {% block main %}*/
/*         <form role="form" name="form1" id="form1" method="post">*/
/*             {{ form_widget(form._token) }}*/
/*             <div class="row" id="aside_wrap">*/
/*                 <div id="detail_wrap" class="col-md-9">*/
/*                     <div id="detail_box" class="box form-horizontal">*/
/*                         <div id="detail_box__header" class="box-header">*/
/*                             <h3 class="box-title">会員規約</h3>*/
/*                         </div><!-- /.box-header -->*/
/*                         <div id="detail_box__body" class="box-body">*/
/*                             <div id="detail_box__customer_agreement" class="form-group">*/
/*                                 {{ form_label(form.customer_agreement) }}*/
/*                                 <div class="col-sm-9 col-lg-10">*/
/*                                     {{ form_widget(form.customer_agreement, { attr : { 'rows' : 20 } }) }}*/
/*                                     {{ form_errors(form.customer_agreement) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="extra-form">*/
/*                                 {% for f in form.getIterator %}*/
/*                                     {% if f.vars.name matches '[^plg*]' %}*/
/*                                         {{ form_row(f) }}*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             </div>*/
/*                         </div><!-- /.box-body -->*/
/*                     </div><!-- /.box -->*/
/*                 </div>*/
/*                 <div id="common_box" class="col-md-3">*/
/*                     <div class="col_inner" id="aside_column">*/
/*                         <div id="common_button_box" class="box no-header">*/
/*                             <div id="common_button_box__body" class="box-body">*/
/*                                 <div class="row">*/
/*                                     <div class="col-xs-12">*/
/*                                         <div id="common_button_box__insert_button" class="form-group">*/
/*                                             <div class="row text-center">*/
/*                                                 <div class="col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0">*/
/*                                                     <button class="btn btn-primary btn-block btn-lg" onclick="document.form1.submit();">規約を登録</button>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div><!-- /.box-body -->*/
/*                         </div><!-- /.box -->*/
/*                     </div>*/
/*                 </div><!-- /.col -->*/
/*             </div>*/
/* */
/*         <div class="btn-area">*/
/*         </div>*/
/*         </form>*/
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
