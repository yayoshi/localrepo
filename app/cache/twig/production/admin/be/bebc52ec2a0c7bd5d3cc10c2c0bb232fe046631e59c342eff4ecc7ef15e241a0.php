<?php

/* __string_template__8dd3c64c7e927a3cdfbeed0bf7139d7b3b28d12f1df7f034907c6d874d1fd88e */
class __TwigTemplate_f685125234df643d46ab465950b4cd4e39143704165b22d289e1c78bda6a405c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__8dd3c64c7e927a3cdfbeed0bf7139d7b3b28d12f1df7f034907c6d874d1fd88e", 22);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
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
        $context["menus"] = array(0 => "content", 1 => "news");
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
        echo "新着情報管理";
    }

    // line 31
    public function block_javascript($context, array $blocks = array())
    {
        // line 32
        echo "<script>
function changeAction(action) {
    document.form1.action = action;
    document.form1.submit();
}
</script>
";
    }

    // line 40
    public function block_main($context, array $blocks = array())
    {
        // line 41
        echo "    <div id=\"news_wrap\" class=\"row\">
        <div id=\"news_list_box\" class=\"col-md-12\">
            <div id=\"news_list_box__body\" class=\"box\">
                <div id=\"news_list_box__header\" class=\"box-header\">
                    <h3 class=\"box-title\">新着情報管理</h3>
                </div><!-- /.box-header -->
                <div id=\"news_list_box__body_inner\" class=\"box-body\">
                    <form name=\"form1\" id=\"form1\" method=\"post\" action=\"\">
                        <div id=\"news_list_box__list_box\" class=\"table_list\">
                            <div id=\"news_list_box__list\" class=\"table-responsive with-border\">
                                <table class=\"table table-striped\">
                                    <thead>
                                       <tr id=\"news_list_box__list_header\">
                                            <th id=\"news_list_box__header_rank\">順位</th>
                                            <th id=\"news_list_box__header_date\">日付</th>
                                            <th id=\"news_list_box__header_title\">タイトル</th>
                                            <th id=\"news_list_box__header_menu_box\">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["NewsList"]) ? $context["NewsList"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["News"]) {
            // line 62
            echo "                                        <tr id=\"news_list_box__item--";
            echo twig_escape_filter($this->env, $this->getAttribute($context["News"], "id", array()), "html", null, true);
            echo "\">
                                            <td id=\"news_list_box__rank--";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["News"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                                            <td id=\"news_list_box__date--";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["News"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["News"], "date", array()), "Y/m/d"), "html", null, true);
            echo "</td>
                                            <td id=\"news_list_box__title--";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["News"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["News"], "title", array()), "html", null, true);
            echo "</td>
                                            <td id=\"news_list_box__menu_box--";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["News"], "id", array()), "html", null, true);
            echo "\" class=\"icon_edit\">
                                                <div id=\"news_list_box__menu_box_toggle--";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["News"], "id", array()), "html", null, true);
            echo "\" class=\"dropdown\">
                                                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"><svg class=\"cb cb-ellipsis-h\"> <use xlink:href=\"#cb-ellipsis-h\" /></svg></a>
                                                    <ul id=\"news_list_box__menu--";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["News"], "id", array()), "html", null, true);
            echo "\" class=\"dropdown-menu dropdown-menu-right\">
                                                        <li><a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_content_news_edit", array("id" => $this->getAttribute($context["News"], "id", array()))), "html", null, true);
            echo "\" >編集</a></li>
                                                        <li><a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_content_news_delete", array("id" => $this->getAttribute($context["News"], "id", array()))), "html", null, true);
            echo "\" ";
            echo $this->env->getExtension('eccube')->getCsrfTokenForAnchor();
            echo " data-method=\"delete\" data-message=\"この新着情報を削除してもよろしいですか？\">削除</a></li>
                                                        ";
            // line 72
            if (($this->getAttribute($context["loop"], "first", array()) == false)) {
                // line 73
                echo "                                                            <li>
                                                                <a href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_content_news_up", array("id" => $this->getAttribute($context["News"], "id", array()))), "html", null, true);
                echo "\" ";
                echo $this->env->getExtension('eccube')->getCsrfTokenForAnchor();
                echo " data-method=\"put\" data-confirm=\"false\">上へ</a>
                                                            </li>
                                                        ";
            }
            // line 77
            echo "                                                        ";
            if (($this->getAttribute($context["loop"], "last", array()) == false)) {
                // line 78
                echo "                                                            <li>
                                                                <a href=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_content_news_down", array("id" => $this->getAttribute($context["News"], "id", array()))), "html", null, true);
                echo "\" ";
                echo $this->env->getExtension('eccube')->getCsrfTokenForAnchor();
                echo " data-method=\"put\" data-confirm=\"false\">下へ</a>
                                                            </li>
                                                        ";
            }
            // line 82
            echo "
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['News'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.box -->
            <div id=\"news_list_box__footer\" class=\"row\">
                <div id=\"news_list_box__insert_button\" class=\"col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 text-center btn_area\">
                    <a href=\"";
        // line 97
        echo $this->env->getExtension('eccube')->getUrl("admin_content_news_new");
        echo "\" class=\"btn btn-primary btn-block btn-lg\">新規登録</a>
                </div>
            </div>

        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "__string_template__8dd3c64c7e927a3cdfbeed0bf7139d7b3b28d12f1df7f034907c6d874d1fd88e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 97,  195 => 88,  176 => 82,  168 => 79,  165 => 78,  162 => 77,  154 => 74,  151 => 73,  149 => 72,  143 => 71,  139 => 70,  135 => 69,  130 => 67,  126 => 66,  120 => 65,  114 => 64,  108 => 63,  103 => 62,  86 => 61,  64 => 41,  61 => 40,  51 => 32,  48 => 31,  42 => 27,  36 => 26,  32 => 22,  30 => 29,  28 => 24,  11 => 22,);
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
/* {% set menus = ['content', 'news'] %}*/
/* */
/* {% block title %}コンテンツ管理{% endblock %}*/
/* {% block sub_title %}新着情報管理{% endblock %}*/
/* */
/* {% form_theme form 'Form/bootstrap_3_horizontal_layout.html.twig' %}*/
/* */
/* {% block javascript %}*/
/* <script>*/
/* function changeAction(action) {*/
/*     document.form1.action = action;*/
/*     document.form1.submit();*/
/* }*/
/* </script>*/
/* {% endblock javascript %}*/
/* */
/* {% block main %}*/
/*     <div id="news_wrap" class="row">*/
/*         <div id="news_list_box" class="col-md-12">*/
/*             <div id="news_list_box__body" class="box">*/
/*                 <div id="news_list_box__header" class="box-header">*/
/*                     <h3 class="box-title">新着情報管理</h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 <div id="news_list_box__body_inner" class="box-body">*/
/*                     <form name="form1" id="form1" method="post" action="">*/
/*                         <div id="news_list_box__list_box" class="table_list">*/
/*                             <div id="news_list_box__list" class="table-responsive with-border">*/
/*                                 <table class="table table-striped">*/
/*                                     <thead>*/
/*                                        <tr id="news_list_box__list_header">*/
/*                                             <th id="news_list_box__header_rank">順位</th>*/
/*                                             <th id="news_list_box__header_date">日付</th>*/
/*                                             <th id="news_list_box__header_title">タイトル</th>*/
/*                                             <th id="news_list_box__header_menu_box">&nbsp;</th>*/
/*                                         </tr>*/
/*                                     </thead>*/
/*                                     <tbody>*/
/*                                     {% for News in NewsList %}*/
/*                                         <tr id="news_list_box__item--{{ News.id }}">*/
/*                                             <td id="news_list_box__rank--{{ News.id }}">{{ loop.index }}</td>*/
/*                                             <td id="news_list_box__date--{{ News.id }}">{{ News.date|date("Y/m/d") }}</td>*/
/*                                             <td id="news_list_box__title--{{ News.id }}">{{ News.title }}</td>*/
/*                                             <td id="news_list_box__menu_box--{{ News.id }}" class="icon_edit">*/
/*                                                 <div id="news_list_box__menu_box_toggle--{{ News.id }}" class="dropdown">*/
/*                                                     <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><svg class="cb cb-ellipsis-h"> <use xlink:href="#cb-ellipsis-h" /></svg></a>*/
/*                                                     <ul id="news_list_box__menu--{{ News.id }}" class="dropdown-menu dropdown-menu-right">*/
/*                                                         <li><a href="{{ url('admin_content_news_edit', {id: News.id}) }}" >編集</a></li>*/
/*                                                         <li><a href="{{ url('admin_content_news_delete', {id: News.id}) }}" {{ csrf_token_for_anchor() }} data-method="delete" data-message="この新着情報を削除してもよろしいですか？">削除</a></li>*/
/*                                                         {% if loop.first == false %}*/
/*                                                             <li>*/
/*                                                                 <a href="{{ url('admin_content_news_up', {id: News.id}) }}" {{ csrf_token_for_anchor() }} data-method="put" data-confirm="false">上へ</a>*/
/*                                                             </li>*/
/*                                                         {% endif %}*/
/*                                                         {% if loop.last == false %}*/
/*                                                             <li>*/
/*                                                                 <a href="{{ url('admin_content_news_down', {id: News.id}) }}" {{ csrf_token_for_anchor() }} data-method="put" data-confirm="false">下へ</a>*/
/*                                                             </li>*/
/*                                                         {% endif %}*/
/* */
/*                                                     </ul>*/
/*                                                 </div>*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                     {% endfor %}*/
/*                                     </tbody>*/
/*                                 </table>*/
/*                             </div>*/
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/*             </div><!-- /.box -->*/
/*             <div id="news_list_box__footer" class="row">*/
/*                 <div id="news_list_box__insert_button" class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 text-center btn_area">*/
/*                     <a href="{{ url('admin_content_news_new') }}" class="btn btn-primary btn-block btn-lg">新規登録</a>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
