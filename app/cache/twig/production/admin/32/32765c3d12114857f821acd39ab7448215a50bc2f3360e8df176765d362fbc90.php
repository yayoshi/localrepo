<?php

/* __string_template__80f674f78dcb8d5ae5731577e20c1be5930391b2bd6383897d09ed2b5b7fb880 */
class __TwigTemplate_74ba9fb7275dce4f00918a1aa13c0bc1e8afdd48b74608e3f2b97222a2d824a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__80f674f78dcb8d5ae5731577e20c1be5930391b2bd6383897d09ed2b5b7fb880", 22);
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
        $context["menus"] = array(0 => "content", 1 => "cache");
        // line 29
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        echo "コンテンツ管理";
    }

    // line 27
    public function block_sub_title($context, array $blocks = array())
    {
        echo "キャッシュ管理";
    }

    // line 31
    public function block_main($context, array $blocks = array())
    {
        // line 32
        echo "<form name=\"form1\" method=\"post\" action=\"";
        echo $this->env->getExtension('eccube')->getUrl("admin_content_cache");
        echo "\">
    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
    <div id=\"cache_wrap\" class=\"row\">
        <div class=\"col-md-12\">
            <div id=\"cache_box\" class=\"box\">
                <div id=\"cache_box__header\" class=\"box-header\">
                    <h3 class=\"box-title\">キャッシュ管理</h3>
                    <div id=\"cache_box__message\" style=\"margin-left: 10px;\">
                        <p class=\"text-danger\">本番環境にFTPなどでTwigファイルをアップロードして入れ替えた場合、画面を反映させるにはTwigキャッシュをクリアをする必要があります。</p>
                        <p>キャッシュをクリアをするには「キャッシュクリア」ボタンを押してください。</p>
                    </div>
                </div>
                <div id=\"cache_box__clear_button\" class=\"box-body\">
                    <button type=\"submit\" class=\"btn btn-primary\" name=\"mode\" value=\"twig\">キャッシュクリア</button>
                </div>
            </div>
        </div>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "__string_template__80f674f78dcb8d5ae5731577e20c1be5930391b2bd6383897d09ed2b5b7fb880";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 33,  50 => 32,  47 => 31,  41 => 27,  35 => 26,  31 => 22,  29 => 29,  27 => 24,  11 => 22,);
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
/* {% set menus = ['content', 'cache'] %}*/
/* */
/* {% block title %}コンテンツ管理{% endblock %}*/
/* {% block sub_title %}キャッシュ管理{% endblock %}*/
/* */
/* {% form_theme form 'Form/bootstrap_3_horizontal_layout.html.twig' %}*/
/* */
/* {% block main %}*/
/* <form name="form1" method="post" action="{{ url('admin_content_cache') }}">*/
/*     {{ form_widget(form._token) }}*/
/*     <div id="cache_wrap" class="row">*/
/*         <div class="col-md-12">*/
/*             <div id="cache_box" class="box">*/
/*                 <div id="cache_box__header" class="box-header">*/
/*                     <h3 class="box-title">キャッシュ管理</h3>*/
/*                     <div id="cache_box__message" style="margin-left: 10px;">*/
/*                         <p class="text-danger">本番環境にFTPなどでTwigファイルをアップロードして入れ替えた場合、画面を反映させるにはTwigキャッシュをクリアをする必要があります。</p>*/
/*                         <p>キャッシュをクリアをするには「キャッシュクリア」ボタンを押してください。</p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div id="cache_box__clear_button" class="box-body">*/
/*                     <button type="submit" class="btn btn-primary" name="mode" value="twig">キャッシュクリア</button>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </form>*/
/* {% endblock %}*/
/* */
