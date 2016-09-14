<?php

/* __string_template__dc94084b8320b4e60dffdb1d1fb1a144837b146a902a84f3f27db4e5054ee05a */
class __TwigTemplate_af68e82d9f015b8757476e3f1cb050c720fd6c1e058425e19daaa76133c6336c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__dc94084b8320b4e60dffdb1d1fb1a144837b146a902a84f3f27db4e5054ee05a", 22);
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
        $context["body_class"] = "mypage";
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_main($context, array $blocks = array())
    {
        // line 27
        echo "    <h1 class=\"page-heading\">ログイン</h1>
    <div class=\"container-fluid\">
        <form name=\"login_mypage\" id=\"login_mypage\" method=\"post\" action=\"";
        // line 29
        echo $this->env->getExtension('eccube')->getUrl("login_check");
        echo "\" onsubmit=\"return eccube.checkLoginFormInputted('login_mypage')\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
            ";
        // line 30
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "has", array(0 => "eccube.login.target.path"), "method")) {
            // line 31
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => "eccube.login.target.path"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["targetPath"]) {
                // line 32
                echo "                    <input type=\"hidden\" name=\"_target_path\" value=\"";
                echo twig_escape_filter($this->env, $context["targetPath"], "html", null, true);
                echo "\" />
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['targetPath'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "            ";
        }
        // line 35
        echo "            <div id=\"login_box\" class=\"row\">
                <div id=\"mypage_login_wrap\" class=\"col-sm-8 col-sm-offset-2\">
                    <div id=\"mypage_login_box\" class=\"column\">

                        <div id=\"mypage_login_box__body\" class=\"column_inner clearfix\">
                            <div class=\"icon\"><svg class=\"cb cb-user-circle\"><use xlink:href=\"#cb-user-circle\" /></svg></div>
                            <div id=\"mypage_login_box__login_email\" class=\"form-group\">
                                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "login_email", array()), 'widget', array("attr" => array("style" => "ime-mode: disabled;", "placeholder" => "メールアドレス")));
        echo "
                            </div>
                            <div id=\"mypage_login_box__login_pass\" class=\"form-group\">
                                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "login_pass", array()), 'widget', array("attr" => array("placeholder" => "パスワード")));
        echo "
                                ";
        // line 46
        if ($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "option_remember_me", array())) {
            // line 47
            echo "                                    ";
            if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 48
                echo "                                        <input id=\"mypage_login_box__login_memory\" type=\"hidden\" name=\"login_memory\" value=\"1\">
                                    ";
            } else {
                // line 50
                echo "                                        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "login_memory", array()), 'widget');
                echo "
                                    ";
            }
            // line 52
            echo "                                ";
        }
        // line 53
        echo "                            </div>
                            <div class=\"extra-form form-group\">
                                ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 56
            echo "                                    ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 57
                echo "                                        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'label');
                echo "
                                        ";
                // line 58
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'widget');
                echo "
                                        ";
                // line 59
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'errors');
                echo "
                                    ";
            }
            // line 61
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                            </div>
                            ";
        // line 63
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 64
            echo "                            <div id=\"mypage_login_box__error_message\" class=\"form-group\">
                                <span class=\"text-danger\">";
            // line 65
            echo $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : null));
            echo "</span>
                            </div>
                            ";
        }
        // line 68
        echo "                            <div id=\"mypage_login__login_button\" class=\"btn_area\">
                                <p><button type=\"submit\" class=\"btn btn-info btn-block btn-lg\">ログイン</button></p>
                                <ul id=\"mypage_login__login_menu\" >
                                    <li><a href=\"";
        // line 71
        echo $this->env->getExtension('eccube')->getUrl("forgot");
        echo "\">ログイン情報をお忘れですか？</a></li>
                                    <li><a href=\"";
        // line 72
        echo $this->env->getExtension('eccube')->getUrl("entry");
        echo "\">新規会員登録</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__dc94084b8320b4e60dffdb1d1fb1a144837b146a902a84f3f27db4e5054ee05a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 79,  154 => 72,  150 => 71,  145 => 68,  139 => 65,  136 => 64,  134 => 63,  131 => 62,  125 => 61,  120 => 59,  116 => 58,  111 => 57,  108 => 56,  104 => 55,  100 => 53,  97 => 52,  91 => 50,  87 => 48,  84 => 47,  82 => 46,  78 => 45,  72 => 42,  63 => 35,  60 => 34,  51 => 32,  46 => 31,  44 => 30,  38 => 29,  34 => 27,  31 => 26,  27 => 22,  25 => 24,  11 => 22,);
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
/* {% block main %}*/
/*     <h1 class="page-heading">ログイン</h1>*/
/*     <div class="container-fluid">*/
/*         <form name="login_mypage" id="login_mypage" method="post" action="{{ url('login_check') }}" onsubmit="return eccube.checkLoginFormInputted('login_mypage')" {{ form_enctype(form) }}>*/
/*             {% if app.session.flashBag.has('eccube.login.target.path') %}*/
/*                 {% for targetPath in app.session.flashBag.get('eccube.login.target.path') %}*/
/*                     <input type="hidden" name="_target_path" value="{{ targetPath }}" />*/
/*                 {% endfor %}*/
/*             {% endif %}*/
/*             <div id="login_box" class="row">*/
/*                 <div id="mypage_login_wrap" class="col-sm-8 col-sm-offset-2">*/
/*                     <div id="mypage_login_box" class="column">*/
/* */
/*                         <div id="mypage_login_box__body" class="column_inner clearfix">*/
/*                             <div class="icon"><svg class="cb cb-user-circle"><use xlink:href="#cb-user-circle" /></svg></div>*/
/*                             <div id="mypage_login_box__login_email" class="form-group">*/
/*                                 {{ form_widget(form.login_email, {'attr': {'style' : 'ime-mode: disabled;', 'placeholder' : 'メールアドレス' }}) }}*/
/*                             </div>*/
/*                             <div id="mypage_login_box__login_pass" class="form-group">*/
/*                                 {{ form_widget(form.login_pass,  {'attr': {'placeholder' : 'パスワード' }}) }}*/
/*                                 {% if BaseInfo.option_remember_me %}*/
/*                                     {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}*/
/*                                         <input id="mypage_login_box__login_memory" type="hidden" name="login_memory" value="1">*/
/*                                     {% else %}*/
/*                                         {{ form_widget(form.login_memory) }}*/
/*                                     {% endif %}*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                             <div class="extra-form form-group">*/
/*                                 {% for f in form.getIterator %}*/
/*                                     {% if f.vars.name matches '[^plg*]' %}*/
/*                                         {{ form_label(f) }}*/
/*                                         {{ form_widget(f) }}*/
/*                                         {{ form_errors(f) }}*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             </div>*/
/*                             {% if error %}*/
/*                             <div id="mypage_login_box__error_message" class="form-group">*/
/*                                 <span class="text-danger">{{ error|trans|raw }}</span>*/
/*                             </div>*/
/*                             {% endif %}*/
/*                             <div id="mypage_login__login_button" class="btn_area">*/
/*                                 <p><button type="submit" class="btn btn-info btn-block btn-lg">ログイン</button></p>*/
/*                                 <ul id="mypage_login__login_menu" >*/
/*                                     <li><a href="{{ url('forgot') }}">ログイン情報をお忘れですか？</a></li>*/
/*                                     <li><a href="{{ url('entry') }}">新規会員登録</a></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div><!-- /.col -->*/
/*             </div><!-- /.row -->*/
/*             <input type="hidden" name="_csrf_token" value="{{ csrf_token('authenticate') }}">*/
/*         </form>*/
/*     </div>*/
/* {% endblock %}*/
/* */
