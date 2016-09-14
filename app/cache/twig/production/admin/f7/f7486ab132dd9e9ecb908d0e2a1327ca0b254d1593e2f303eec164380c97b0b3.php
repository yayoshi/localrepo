<?php

/* __string_template__cc5790e63a009cc68e1f3f6d7ed7d75dd1f8d5fcca02d22fd422b129ef5535a2 */
class __TwigTemplate_f3a7bee3861371d817b1679b3649fe2e94bf914c82a410138a041b91aacdf171 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 23
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__cc5790e63a009cc68e1f3f6d7ed7d75dd1f8d5fcca02d22fd422b129ef5535a2", 23);
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
        // line 25
        $context["menus"] = array(0 => "store", 1 => "plugin", 2 => "plugin_list");
        // line 23
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_title($context, array $blocks = array())
    {
        echo "オーナーズストア";
    }

    // line 28
    public function block_sub_title($context, array $blocks = array())
    {
        echo "プラグイン一覧";
    }

    // line 30
    public function block_javascript($context, array $blocks = array())
    {
        // line 31
        echo "<script>
    function changeActionSubmit(action, form_name) {
        document.forms[form_name].action = action;
        document.forms[form_name].submit();
    }
</script>
";
    }

    // line 39
    public function block_main($context, array $blocks = array())
    {
        // line 40
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <a href=\"";
        // line 44
        echo $this->env->getExtension('eccube')->getUrl("admin_store_plugin_owners_install");
        echo "\" class=\"btn btn-info btn-xs pull-right\">プラグインの新規追加はこちら</a>
                    <h3 class=\"box-title\">オーナーズストアプラグイン</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                    ";
        // line 48
        echo twig_include($this->env, $context, "Store/plugin_table.twig", array("Plugins" => (isset($context["officialPlugins"]) ? $context["officialPlugins"] : null)));
        echo "
                </div><!-- /.box-body -->
            </div><!-- /.box -->

            <div class=\"box\">
                <div class=\"box-header\">
                    <a href=\"";
        // line 54
        echo $this->env->getExtension('eccube')->getUrl("admin_store_plugin_install");
        echo "\" class=\"btn btn-info btn-xs pull-right\">プラグインのアップロードはこちら</a>
                    <h3 class=\"box-title\">独自プラグイン</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                    ";
        // line 58
        echo twig_include($this->env, $context, "Store/plugin_table.twig", array("Plugins" => (isset($context["unofficialPlugins"]) ? $context["unofficialPlugins"] : null)));
        echo "
                </div><!-- /.box-body -->
            </div><!-- /.box -->
            ";
        // line 61
        if ( !twig_test_empty((isset($context["unregisterdPlugins"]) ? $context["unregisterdPlugins"] : null))) {
            // line 62
            echo "            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">未登録プラグイン</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                    ";
            // line 67
            echo twig_include($this->env, $context, "Store/unregisterd_plugin_table.twig", array("Plugins" => (isset($context["unregisterdPlugins"]) ? $context["unregisterdPlugins"] : null)));
            echo "
                </div><!-- /.box-body -->
            </div><!-- /.box -->
            ";
        }
        // line 71
        echo "        </div><!-- /.col -->
    </div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__cc5790e63a009cc68e1f3f6d7ed7d75dd1f8d5fcca02d22fd422b129ef5535a2";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 71,  106 => 67,  99 => 62,  97 => 61,  91 => 58,  84 => 54,  75 => 48,  68 => 44,  62 => 40,  59 => 39,  49 => 31,  46 => 30,  40 => 28,  34 => 27,  30 => 23,  28 => 25,  11 => 23,);
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
/* */
/* {% extends 'default_frame.twig' %}*/
/* */
/* {% set menus = ['store', 'plugin', 'plugin_list'] %}*/
/* */
/* {% block title %}オーナーズストア{% endblock %}*/
/* {% block sub_title %}プラグイン一覧{% endblock %}*/
/* */
/* {% block javascript %}*/
/* <script>*/
/*     function changeActionSubmit(action, form_name) {*/
/*         document.forms[form_name].action = action;*/
/*         document.forms[form_name].submit();*/
/*     }*/
/* </script>*/
/* {% endblock javascript %}*/
/* */
/* {% block main %}*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <div class="box">*/
/*                 <div class="box-header">*/
/*                     <a href="{{ url('admin_store_plugin_owners_install') }}" class="btn btn-info btn-xs pull-right">プラグインの新規追加はこちら</a>*/
/*                     <h3 class="box-title">オーナーズストアプラグイン</h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 <div class="box-body">*/
/*                     {{ include('Store/plugin_table.twig', {'Plugins': officialPlugins}) }}*/
/*                 </div><!-- /.box-body -->*/
/*             </div><!-- /.box -->*/
/* */
/*             <div class="box">*/
/*                 <div class="box-header">*/
/*                     <a href="{{ url('admin_store_plugin_install') }}" class="btn btn-info btn-xs pull-right">プラグインのアップロードはこちら</a>*/
/*                     <h3 class="box-title">独自プラグイン</h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 <div class="box-body">*/
/*                     {{ include('Store/plugin_table.twig', {'Plugins': unofficialPlugins}) }}*/
/*                 </div><!-- /.box-body -->*/
/*             </div><!-- /.box -->*/
/*             {% if unregisterdPlugins is not empty %}*/
/*             <div class="box">*/
/*                 <div class="box-header">*/
/*                     <h3 class="box-title">未登録プラグイン</h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 <div class="box-body">*/
/*                     {{ include('Store/unregisterd_plugin_table.twig', {'Plugins': unregisterdPlugins}) }}*/
/*                 </div><!-- /.box-body -->*/
/*             </div><!-- /.box -->*/
/*             {% endif %}*/
/*         </div><!-- /.col -->*/
/*     </div>*/
/* {% endblock %}*/
/* */
