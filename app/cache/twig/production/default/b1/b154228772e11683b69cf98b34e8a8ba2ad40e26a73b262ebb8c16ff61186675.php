<?php

/* __string_template__7b5f58687f937908067f9ef82184de6e0b47314b3257ee4499c4ebe0eeb391d9 */
class __TwigTemplate_2defe1c818cc3a683c974782c3f7fbbc6bedf80a2d0e34c9e53c611f58db4fcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__7b5f58687f937908067f9ef82184de6e0b47314b3257ee4499c4ebe0eeb391d9", 22);
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
                <h1 class=\"page-heading\">パスワード発行メールの送信 完了</h1>
                <div id=\"complete_wrap\" class=\"container-fluid\">
                    <div id=\"complete_box\" class=\"row\">
                        <div id=\"complete_box__body\" class=\"col-md-10 col-md-offset-1\">
                            <div id=\"complete_box__message\" class=\"complete_message\">
                                <h2>パスワード再発行メールの送信が完了しました。</h2>
                                <p>ご登録メールアドレスにパスワードを再発行するためのメールを送信いたしました。<br/>
                            メールの内容をご確認いただきますよう、お願いいたします。</p>
                                <p>※メールが届かない場合はメールアドレスをご確認の上、再度お試しください。</p>
                            </div>
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
        return "__string_template__7b5f58687f937908067f9ef82184de6e0b47314b3257ee4499c4ebe0eeb391d9";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 25,  28 => 24,  11 => 22,);
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
/*                 <h1 class="page-heading">パスワード発行メールの送信 完了</h1>*/
/*                 <div id="complete_wrap" class="container-fluid">*/
/*                     <div id="complete_box" class="row">*/
/*                         <div id="complete_box__body" class="col-md-10 col-md-offset-1">*/
/*                             <div id="complete_box__message" class="complete_message">*/
/*                                 <h2>パスワード再発行メールの送信が完了しました。</h2>*/
/*                                 <p>ご登録メールアドレスにパスワードを再発行するためのメールを送信いたしました。<br/>*/
/*                             メールの内容をご確認いただきますよう、お願いいたします。</p>*/
/*                                 <p>※メールが届かない場合はメールアドレスをご確認の上、再度お試しください。</p>*/
/*                             </div>*/
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
