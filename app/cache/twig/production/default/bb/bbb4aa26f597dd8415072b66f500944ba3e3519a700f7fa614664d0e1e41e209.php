<?php

/* __string_template__9e37b3d4d0d0213306bc0bf1cc7cb83c824cdc6e5254326aac18e63badc34bcc */
class __TwigTemplate_794155053ebb69dee898964a164071ed2da65067804ba542ffd820e5d6a80cfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__9e37b3d4d0d0213306bc0bf1cc7cb83c824cdc6e5254326aac18e63badc34bcc", 22);
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
        echo "    <div id=\"contents\" class=\"main_only\">
        <div class=\"container-fluid inner no-padding\">
            <div id=\"main\">
                <h1 class=\"page-heading\">パスワードの再発行</h1>
                <div id=\"top_wrap\" class=\"container-fluid\">
                    <div id=\"top_box\" class=\"row\">
                        <div id=\"top_box__body\" class=\"col-md-10 col-md-offset-1\">
                            <p>ご登録時のメールアドレスを入力して「次へ」ボタンをクリックしてください。</p>
                            <p>※新しくパスワードを発行いたしますので、お忘れになったパスワードはご利用できなくなります。</p>
                            <form name=\"form1\" id=\"form1\" method=\"post\" action=\"";
        // line 34
        echo $this->env->getExtension('eccube')->getUrl("forgot");
        echo "\">
                                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
                                <div id=\"top_box__body_inner\" class=\"dl_table\">
                                    <dl id=\"top_box__login_email\">
                                        <dt>";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "login_email", array()), 'label');
        echo "</dt>
                                        <dd>
                                            <div class=\"form-group\">
                                                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "login_email", array()), 'widget');
        echo "
                                                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "login_email", array()), 'errors');
        echo "
                                            </div>
                                        </dd>
                                    </dl>
                                </div>
                                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 48
            echo "                                    ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 49
                echo "                                        <div class=\"extra-form dl_table\">
                                            ";
                // line 50
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'row');
                echo "
                                        </div>
                                    ";
            }
            // line 53
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                                <div id=\"top_box__footer\" class=\"row no-padding\">
                                <div id=\"top_box__next_button\" class=\"btn_group col-sm-offset-4 col-sm-4\">
                                    <p><button type=\"submit\" class=\"btn btn-primary btn-block\">次のページへ</button></p>
                                </div>
                                </div>
                            </form>
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                </div>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "__string_template__9e37b3d4d0d0213306bc0bf1cc7cb83c824cdc6e5254326aac18e63badc34bcc";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 54,  86 => 53,  80 => 50,  77 => 49,  74 => 48,  70 => 47,  62 => 42,  58 => 41,  52 => 38,  46 => 35,  42 => 34,  31 => 25,  28 => 24,  11 => 22,);
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
/*     <div id="contents" class="main_only">*/
/*         <div class="container-fluid inner no-padding">*/
/*             <div id="main">*/
/*                 <h1 class="page-heading">パスワードの再発行</h1>*/
/*                 <div id="top_wrap" class="container-fluid">*/
/*                     <div id="top_box" class="row">*/
/*                         <div id="top_box__body" class="col-md-10 col-md-offset-1">*/
/*                             <p>ご登録時のメールアドレスを入力して「次へ」ボタンをクリックしてください。</p>*/
/*                             <p>※新しくパスワードを発行いたしますので、お忘れになったパスワードはご利用できなくなります。</p>*/
/*                             <form name="form1" id="form1" method="post" action="{{ url('forgot') }}">*/
/*                                 {{ form_widget(form._token) }}*/
/*                                 <div id="top_box__body_inner" class="dl_table">*/
/*                                     <dl id="top_box__login_email">*/
/*                                         <dt>{{ form_label(form.login_email) }}</dt>*/
/*                                         <dd>*/
/*                                             <div class="form-group">*/
/*                                                 {{ form_widget(form.login_email) }}*/
/*                                                 {{ form_errors(form.login_email) }}*/
/*                                             </div>*/
/*                                         </dd>*/
/*                                     </dl>*/
/*                                 </div>*/
/*                                 {% for f in form %}*/
/*                                     {% if f.vars.name matches '[^plg*]' %}*/
/*                                         <div class="extra-form dl_table">*/
/*                                             {{ form_row(f) }}*/
/*                                         </div>*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                                 <div id="top_box__footer" class="row no-padding">*/
/*                                 <div id="top_box__next_button" class="btn_group col-sm-offset-4 col-sm-4">*/
/*                                     <p><button type="submit" class="btn btn-primary btn-block">次のページへ</button></p>*/
/*                                 </div>*/
/*                                 </div>*/
/*                             </form>*/
/*                         </div><!-- /.col -->*/
/*                     </div><!-- /.row -->*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
