<?php

/* __string_template__b8673ebc5d1e2e11674ce717b02794eb5ee25d332741fea00589794a13f4c686 */
class __TwigTemplate_71927331241d7056ccf7faac0ce95fa90c6345690fa04fdea14db6fd2ae41fd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__b8673ebc5d1e2e11674ce717b02794eb5ee25d332741fea00589794a13f4c686", 22);
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
        $context["body_class"] = "registration_page";
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_main($context, array $blocks = array())
    {
        // line 27
        echo "    <h1 class=\"page-heading\">新規会員登録（完了）</h1>
    <div id=\"complete_box\" class=\"container-fluid\">
        <div id=\"deliveradd_input\" class=\"row\">
            <div id=\"complete_box__body\" class=\"col-sm-10 col-sm-offset-1\">
                <div id=\"complete_box__message\" class=\"complete_message\">
                    <h2 class=\"heading01\">会員登録ありがとうございます</h2>
                    <p id=\"complete_box__attention\">
                        現在<span class=\"attention\">仮会員</span>の状態です。<br />
                        ご入力いただいたメールアドレス宛てに、ご連絡が届いておりますので、<br />本会員登録になった上でお買い物をお楽しみください。<br />
                        今後ともご愛顧賜りますようよろしくお願い申し上げます。
                    </p>
                </div>
                <div id=\"complete_box__footer\" class=\"row no-padding\">
                    <div id=\"complete_box__button_menu\" class=\"btn_group col-sm-offset-4 col-sm-4\">
                        <p id=\"complete_box__top_button\">
                            <a href=\"";
        // line 42
        echo $this->env->getExtension('eccube')->getUrl("index");
        echo "\" class=\"btn btn-info btn-block\">トップページへ</a>
                        </p>
                    </div>
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__b8673ebc5d1e2e11674ce717b02794eb5ee25d332741fea00589794a13f4c686";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 42,  34 => 27,  31 => 26,  27 => 22,  25 => 24,  11 => 22,);
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
/* {% block main %}*/
/*     <h1 class="page-heading">新規会員登録（完了）</h1>*/
/*     <div id="complete_box" class="container-fluid">*/
/*         <div id="deliveradd_input" class="row">*/
/*             <div id="complete_box__body" class="col-sm-10 col-sm-offset-1">*/
/*                 <div id="complete_box__message" class="complete_message">*/
/*                     <h2 class="heading01">会員登録ありがとうございます</h2>*/
/*                     <p id="complete_box__attention">*/
/*                         現在<span class="attention">仮会員</span>の状態です。<br />*/
/*                         ご入力いただいたメールアドレス宛てに、ご連絡が届いておりますので、<br />本会員登録になった上でお買い物をお楽しみください。<br />*/
/*                         今後ともご愛顧賜りますようよろしくお願い申し上げます。*/
/*                     </p>*/
/*                 </div>*/
/*                 <div id="complete_box__footer" class="row no-padding">*/
/*                     <div id="complete_box__button_menu" class="btn_group col-sm-offset-4 col-sm-4">*/
/*                         <p id="complete_box__top_button">*/
/*                             <a href="{{ url('index') }}" class="btn btn-info btn-block">トップページへ</a>*/
/*                         </p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div><!-- /.col -->*/
/*         </div><!-- /.row -->*/
/*     </div>*/
/* {% endblock %}*/
/* */
