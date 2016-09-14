<?php

/* __string_template__8dcb01ad016fc3523ca1ccad4ad77e2f833a2f1fe40cfab91a8956663c5514df */
class __TwigTemplate_4be0eba6ffb58c296fb3031972e926725acf9a8ac1054bc3baf1446f46fa7749 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 24
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__8dcb01ad016fc3523ca1ccad4ad77e2f833a2f1fe40cfab91a8956663c5514df", 24);
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
        // line 26
        $context["menus"] = array(0 => "content", 1 => "page");
        // line 24
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_title($context, array $blocks = array())
    {
        echo "コンテンツ管理";
    }

    // line 29
    public function block_sub_title($context, array $blocks = array())
    {
        echo "ページ管理";
    }

    // line 31
    public function block_main($context, array $blocks = array())
    {
        // line 32
        echo "<form name=\"content_page_form\" action=\"\" method=\"post\">
</form>
<div id=\"page_wrap\" class=\"container-fluid\">
    <div id=\"page_list\" class=\"row\">
        <div id=\"page_list_box\" class=\"col-md-12\">
            <div id=\"page_list__body\" class=\"box\">
                <div id=\"page_list_box__header\" class=\"box-header\">
                    <div class=\"box-title\">
                        ページ一覧
                    </div>
                </div>
                <div id=\"sortable_list_box\" class=\"box-body no-padding no-border\">
                    <div id=\"sortable_list_box__list\" class=\"sortable_list\">
                        <div class=\"tableish\">

                            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["PageLayouts"]) ? $context["PageLayouts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["PageLayout"]) {
            // line 48
            echo "                                <div id=\"sortable_list_box__item--";
            echo twig_escape_filter($this->env, $this->getAttribute($context["PageLayout"], "id", array()), "html", null, true);
            echo "\" class=\"item_box tr\">
                                    <div id=\"sortable_list_box__name--";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["PageLayout"], "id", array()), "html", null, true);
            echo "\" class=\"item_pattern td\">
                                        ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["PageLayout"], "name", array()), "html", null, true);
            echo "
                                    </div>
                                    <div id=\"sortable_list_box__menu_box--";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["PageLayout"], "id", array()), "html", null, true);
            echo "\" class=\"icon_edit td\">
                                        <div id=\"sortable_list_box__menu_box_toggle--";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["PageLayout"], "id", array()), "html", null, true);
            echo "\" class=\"dropdown\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><svg class=\"cb cb-ellipsis-h\"> <use xlink:href=\"#cb-ellipsis-h\" /></svg></a>
                                            <ul id=\"sortable_list_box__menu--";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["PageLayout"], "id", array()), "html", null, true);
            echo "\" class=\"dropdown-menu dropdown-menu-right\">
                                                <li>
                                                    <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_content_layout_edit", array("id" => $this->getAttribute($context["PageLayout"], "id", array()))), "html", null, true);
            echo "\" >レイアウト編集</a>
                                                </li>
                                                <li>
                                                    ";
            // line 60
            if ((twig_length_filter($this->env, $this->getAttribute($context["PageLayout"], "filename", array())) >= 1)) {
                // line 61
                echo "                                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_content_page_edit", array("id" => $this->getAttribute($context["PageLayout"], "id", array()))), "html", null, true);
                echo "\">ページ編集</a>
                                                    ";
            } else {
                // line 63
                echo "                                                        <a>ページ編集</a>
                                                    ";
            }
            // line 65
            echo "                                                </li>
                                                <li>
                                                    ";
            // line 67
            if (($this->getAttribute($context["PageLayout"], "edit_flg", array()) == twig_constant("Eccube\\Entity\\PageLayout::EDIT_FLG_USER"))) {
                // line 68
                echo "                                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_content_page_delete", array("id" => $this->getAttribute($context["PageLayout"], "id", array()))), "html", null, true);
                echo "\" ";
                echo $this->env->getExtension('eccube')->getCsrfTokenForAnchor();
                echo " data-method=\"delete\" data-message=\"このページを削除してもよろしいですか？\">削除</a>
                                                    ";
            } else {
                // line 70
                echo "                                                        <a>削除</a>
                                                    ";
            }
            // line 72
            echo "                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- /.item_box -->
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['PageLayout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "
                        </div>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
            <!-- ▲ データがある時 ▲ -->
        </div><!-- /.col -->

        <div id=\"page_list__footer\" class=\"row btn_area2\">
            <div id=\"page_list__insert_button\" class=\"col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 text-center\">
                <a class=\"btn btn-primary btn-block btn-lg\" href=\"";
        // line 88
        echo $this->env->getExtension('eccube')->getUrl("admin_content_page_new");
        echo "\">新規入力</a>
            </div>
        </div>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__8dcb01ad016fc3523ca1ccad4ad77e2f833a2f1fe40cfab91a8956663c5514df";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 88,  144 => 78,  133 => 72,  129 => 70,  121 => 68,  119 => 67,  115 => 65,  111 => 63,  105 => 61,  103 => 60,  97 => 57,  92 => 55,  87 => 53,  83 => 52,  78 => 50,  74 => 49,  69 => 48,  65 => 47,  48 => 32,  45 => 31,  39 => 29,  33 => 28,  29 => 24,  27 => 26,  11 => 24,);
    }
}
/* {#*/
/* /**/
/*  * This file is part of EC-CUBE*/
/*  **/
/*  * Copyright(c) 2000-2015 LOCKON CO.,LTD. All Rights Reserved.*/
/*  **/
/*  * http://www.lockon.co.jp/*/
/*  **/
/*  * This program is free software; you can redistribute it and/or*/
/*  * modify it under the terms of the GNU General Public License*/
/*  * as published by the Free Software Foundation; either version 2*/
/*  * of the License, or (at your option) any later version.*/
/*  **/
/*  * This program is distributed in the hope that it will be useful,*/
/*  * but WITHOUT ANY WARRANTY; without even the implied warranty of*/
/*  * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the*/
/*  * GNU General Public License for more details.*/
/*  **/
/*  * You should have received a copy of the GNU General Public License*/
/*  * along with this program; if not, write to the Free Software*/
/*  * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.*/
/*  *//* */
/* #}*/
/* {% extends 'default_frame.twig' %}*/
/* */
/* {% set menus = ['content', 'page'] %}*/
/* */
/* {% block title %}コンテンツ管理{% endblock %}*/
/* {% block sub_title %}ページ管理{% endblock %}*/
/* */
/* {% block main %}*/
/* <form name="content_page_form" action="" method="post">*/
/* </form>*/
/* <div id="page_wrap" class="container-fluid">*/
/*     <div id="page_list" class="row">*/
/*         <div id="page_list_box" class="col-md-12">*/
/*             <div id="page_list__body" class="box">*/
/*                 <div id="page_list_box__header" class="box-header">*/
/*                     <div class="box-title">*/
/*                         ページ一覧*/
/*                     </div>*/
/*                 </div>*/
/*                 <div id="sortable_list_box" class="box-body no-padding no-border">*/
/*                     <div id="sortable_list_box__list" class="sortable_list">*/
/*                         <div class="tableish">*/
/* */
/*                             {% for PageLayout in PageLayouts %}*/
/*                                 <div id="sortable_list_box__item--{{ PageLayout.id }}" class="item_box tr">*/
/*                                     <div id="sortable_list_box__name--{{ PageLayout.id }}" class="item_pattern td">*/
/*                                         {{ PageLayout.name }}*/
/*                                     </div>*/
/*                                     <div id="sortable_list_box__menu_box--{{ PageLayout.id }}" class="icon_edit td">*/
/*                                         <div id="sortable_list_box__menu_box_toggle--{{ PageLayout.id }}" class="dropdown">*/
/*                                             <a class="dropdown-toggle" data-toggle="dropdown"><svg class="cb cb-ellipsis-h"> <use xlink:href="#cb-ellipsis-h" /></svg></a>*/
/*                                             <ul id="sortable_list_box__menu--{{ PageLayout.id }}" class="dropdown-menu dropdown-menu-right">*/
/*                                                 <li>*/
/*                                                     <a href="{{ url('admin_content_layout_edit', { id : PageLayout.id } ) }}" >レイアウト編集</a>*/
/*                                                 </li>*/
/*                                                 <li>*/
/*                                                     {% if PageLayout.filename|length >= 1 %}*/
/*                                                         <a href="{{ url('admin_content_page_edit', {id : PageLayout.id } ) }}">ページ編集</a>*/
/*                                                     {% else %}*/
/*                                                         <a>ページ編集</a>*/
/*                                                     {% endif %}*/
/*                                                 </li>*/
/*                                                 <li>*/
/*                                                     {% if PageLayout.edit_flg == constant('Eccube\\Entity\\PageLayout::EDIT_FLG_USER') %}*/
/*                                                         <a href="{{ url('admin_content_page_delete', { 'id': PageLayout.id}) }}" {{ csrf_token_for_anchor() }} data-method="delete" data-message="このページを削除してもよろしいですか？">削除</a>*/
/*                                                     {% else %}*/
/*                                                         <a>削除</a>*/
/*                                                     {% endif %}*/
/*                                                 </li>*/
/*                                             </ul>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div><!-- /.item_box -->*/
/*                             {% endfor %}*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </div><!-- /.box-body -->*/
/*             </div><!-- /.box -->*/
/*             <!-- ▲ データがある時 ▲ -->*/
/*         </div><!-- /.col -->*/
/* */
/*         <div id="page_list__footer" class="row btn_area2">*/
/*             <div id="page_list__insert_button" class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 text-center">*/
/*                 <a class="btn btn-primary btn-block btn-lg" href="{{ url('admin_content_page_new')}}">新規入力</a>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
