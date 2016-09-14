<?php

/* __string_template__ff8f10b7f2da096e8121be1736849c650ba58ea02c3d73b2e564cb10727e086a */
class __TwigTemplate_8216fcc3d83cec7dcca4196c2ef8d414e00705b7828dafd52b8e7b33e413d706 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 22
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 23
            echo "    <div id=\"member\" class=\"member drawer_block pc\">
        <ul class=\"member_link\">
            <li>
                <a href=\"";
            // line 26
            echo $this->env->getExtension('eccube')->getUrl("mypage");
            echo "\">
                    <svg class=\"cb cb-user-circle\"><use xlink:href=\"#cb-user-circle\" /></svg>マイページ
                </a>
            </li>
            ";
            // line 30
            if (($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "option_favorite_product", array()) == 1)) {
                // line 31
                echo "                <li><a href=\"";
                echo $this->env->getExtension('eccube')->getUrl("mypage_favorite");
                echo "\"><svg class=\"cb cb-heart-circle\"><use xlink:href=\"#cb-heart-circle\"></use></svg>お気に入り</a></li>
            ";
            }
            // line 33
            echo "            <li>
                <a href=\"";
            // line 34
            echo $this->env->getExtension('eccube')->getUrl("logout");
            echo "\">
                    <svg class=\"cb cb-lock-circle\"><use xlink:href=\"#cb-lock-circle\" /></svg>ログアウト
                </a>
            </li>
        </ul>
    </div>
";
        } else {
            // line 41
            echo "    <div id=\"member\" class=\"member drawer_block pc\">
        <ul class=\"member_link\">
            <li>
                <a href=\"";
            // line 44
            echo $this->env->getExtension('eccube')->getUrl("entry");
            echo "\">
                    <svg class=\"cb cb-user-circle\"><use xlink:href=\"#cb-user-circle\" /></svg>新規会員登録
                </a>
            </li>
            ";
            // line 48
            if (($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "option_favorite_product", array()) == 1)) {
                // line 49
                echo "                <li><a href=\"";
                echo $this->env->getExtension('eccube')->getUrl("mypage_favorite");
                echo "\"><svg class=\"cb cb-heart-circle\"><use xlink:href=\"#cb-heart-circle\"></use></svg>お気に入り</a></li>
            ";
            }
            // line 51
            echo "            <li>
                <a href=\"";
            // line 52
            echo $this->env->getExtension('eccube')->getUrl("mypage_login");
            echo "\">
                    <svg class=\"cb cb-lock-circle\"><use xlink:href=\"#cb-lock-circle\" /></svg>ログイン
                </a>
            </li>
        </ul>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__ff8f10b7f2da096e8121be1736849c650ba58ea02c3d73b2e564cb10727e086a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 52,  74 => 51,  68 => 49,  66 => 48,  59 => 44,  54 => 41,  44 => 34,  41 => 33,  35 => 31,  33 => 30,  26 => 26,  21 => 23,  19 => 22,);
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
/* {% if is_granted('ROLE_USER') %}*/
/*     <div id="member" class="member drawer_block pc">*/
/*         <ul class="member_link">*/
/*             <li>*/
/*                 <a href="{{ url('mypage') }}">*/
/*                     <svg class="cb cb-user-circle"><use xlink:href="#cb-user-circle" /></svg>マイページ*/
/*                 </a>*/
/*             </li>*/
/*             {% if BaseInfo.option_favorite_product == 1 %}*/
/*                 <li><a href="{{ url('mypage_favorite') }}"><svg class="cb cb-heart-circle"><use xlink:href="#cb-heart-circle"></use></svg>お気に入り</a></li>*/
/*             {% endif %}*/
/*             <li>*/
/*                 <a href="{{ url('logout') }}">*/
/*                     <svg class="cb cb-lock-circle"><use xlink:href="#cb-lock-circle" /></svg>ログアウト*/
/*                 </a>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/* {% else %}*/
/*     <div id="member" class="member drawer_block pc">*/
/*         <ul class="member_link">*/
/*             <li>*/
/*                 <a href="{{ url('entry') }}">*/
/*                     <svg class="cb cb-user-circle"><use xlink:href="#cb-user-circle" /></svg>新規会員登録*/
/*                 </a>*/
/*             </li>*/
/*             {% if BaseInfo.option_favorite_product == 1 %}*/
/*                 <li><a href="{{ url('mypage_favorite') }}"><svg class="cb cb-heart-circle"><use xlink:href="#cb-heart-circle"></use></svg>お気に入り</a></li>*/
/*             {% endif %}*/
/*             <li>*/
/*                 <a href="{{ url('mypage_login') }}">*/
/*                     <svg class="cb cb-lock-circle"><use xlink:href="#cb-lock-circle" /></svg>ログイン*/
/*                 </a>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/* {% endif %}*/
