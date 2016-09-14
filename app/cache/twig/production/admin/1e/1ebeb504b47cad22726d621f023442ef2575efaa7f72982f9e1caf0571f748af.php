<?php

/* Store/plugin_table.twig */
class __TwigTemplate_f47e13b753ddeefc7d483e994956ae4c4b1bb25a8d436e338865fbb80452c676 extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["Plugins"]) ? $context["Plugins"] : null)) > 0)) {
            // line 23
            echo "    <div class=\"table_list plugin-table\">
        <div class=\"table-responsive with-border\">
            <table class=\"table table-hover table-condensed\">
                <thead>
                <tr>
                    <th>プラグイン</th>
                    <th>バージョン</th>
                    <th>コード</th>
                    <th>アップデート</th>
                    <th>設定</th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Plugins"]) ? $context["Plugins"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["Plugin"]) {
                // line 37
                echo "                    ";
                $context["form"] = $this->getAttribute((isset($context["plugin_forms"]) ? $context["plugin_forms"] : null), $this->getAttribute($context["Plugin"], "id", array()), array(), "array");
                // line 38
                echo "                    <form id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "name", array()), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "name", array()), "html", null, true);
                echo "\" method=\"post\" action=\"\" ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
                echo ">
                        <tr class=\"";
                // line 39
                if (($this->getAttribute($context["Plugin"], "enable", array()) == 0)) {
                    echo "active";
                }
                echo "\">
                            <td class=\"tp\">
                                <strong>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["Plugin"], "name", array()), "html", null, true);
                echo "</strong>";
                if (($this->getAttribute($context["Plugin"], "enable", array()) == 0)) {
                    echo "<span class=\"text-danger\"> (停止中)</span>";
                }
                echo "<br>
                                ";
                // line 42
                if (($this->getAttribute($context["Plugin"], "enable", array()) == 1)) {
                    // line 43
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_store_plugin_disable", array("id" => $this->getAttribute($context["Plugin"], "id", array()))), "html", null, true);
                    echo "\" ";
                    echo $this->env->getExtension('eccube')->getCsrfTokenForAnchor();
                    echo " data-method=\"put\" data-confirm=\"false\">
                                        無効にする
                                    </a>
                                ";
                } else {
                    // line 47
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_store_plugin_enable", array("id" => $this->getAttribute($context["Plugin"], "id", array()))), "html", null, true);
                    echo "\" ";
                    echo $this->env->getExtension('eccube')->getCsrfTokenForAnchor();
                    echo " data-method=\"put\" data-confirm=\"false\">
                                        有効にする
                                    </a>
                                ";
                }
                // line 51
                echo "                                /
                                <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_store_plugin_uninstall", array("id" => $this->getAttribute($context["Plugin"], "id", array()))), "html", null, true);
                echo "\" ";
                echo $this->env->getExtension('eccube')->getCsrfTokenForAnchor();
                echo " data-method=\"delete\" data-message=\"このプラグインを削除してもよろしいですか？\">
                                    削除
                                </a>
                            </td>
                            <td class=\"tv text-center\">";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["Plugin"], "version", array()), "html", null, true);
                echo "</td>
                            <td class=\"tc\">";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["Plugin"], "code", array()), "html", null, true);
                echo "</td>
                            <td class=\"tu\">
                            ";
                // line 59
                if (($this->getAttribute($context["Plugin"], "source", array()) == 0)) {
                    // line 60
                    echo "                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
                    echo "
                                ";
                    // line 61
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plugin_id", array()), 'widget');
                    echo "
                                ";
                    // line 62
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plugin_archive", array()), 'widget', array("attr" => array("accept" => "application/zip,application/x-tar,application/x-gzip")));
                    echo "
                                ";
                    // line 63
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plugin_archive", array()), 'errors');
                    echo "
                                <p></p>
                                <a class=\"btn btn-primary btn-xs\" href=\"#\" onclick=\"changeActionSubmit('";
                    // line 65
                    echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_store_plugin_update", array("id" => $this->getAttribute($context["Plugin"], "id", array()))), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "name", array()), "html", null, true);
                    echo "');\">
                                    アップロード
                                </a>
                            ";
                } else {
                    // line 69
                    echo "                                ";
                    if (($this->getAttribute($context["Plugin"], "updateStatus", array()) == 3)) {
                        // line 70
                        echo "                                    <p>新バージョンのプラグインが利用可能です。
                                        <a class=\"btn btn-default btn-xs\" href=\"";
                        // line 71
                        echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_store_plugin_upgrade", array("action" => "update", "id" => $this->getAttribute($context["Plugin"], "source", array()), "version" => $this->getAttribute($context["Plugin"], "version", array()))), "html", null, true);
                        echo "\">今すぐ更新</a>
                                    </p>
                                    <ul class=\"plugin-meta dl-horizontal\">
                                        <li class=\"plugin-version\">プラグインバージョン : ";
                        // line 74
                        echo twig_escape_filter($this->env, $this->getAttribute($context["Plugin"], "newVersion", array()), "html", null, true);
                        echo "</li>
                                        <li class=\"plugin-version\">EC-CUBE対応バージョン : ";
                        // line 75
                        echo twig_escape_filter($this->env, $this->getAttribute($context["Plugin"], "eccubeVersionAsString", array()), "html", null, true);
                        echo "</li>
                                        <li class=\"plugin-update\">更新日 : ";
                        // line 76
                        echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getTimeAgo($this->getAttribute($context["Plugin"], "lastUpdateDate", array())), "html", null, true);
                        echo "</li>
                                    </ul>
                                ";
                    } else {
                        // line 79
                        echo "                                    <p>アップデート対象プラグインはありません。</p>
                                ";
                    }
                    // line 81
                    echo "                                <p><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Plugin"], "productUrl", array()), "html", null, true);
                    echo "\" target=\"_blank\">詳細</a></p>
                            ";
                }
                // line 83
                echo "                            </td>
                            <td class=\"ta text-center\">
                                ";
                // line 85
                if ($this->getAttribute((isset($context["configPages"]) ? $context["configPages"] : null), $this->getAttribute($context["Plugin"], "code", array()), array(), "array", true, true)) {
                    // line 86
                    echo "                                   <a href='";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configPages"]) ? $context["configPages"] : null), $this->getAttribute($context["Plugin"], "code", array()), array(), "array"), "html", null, true);
                    echo "'>設定</a>
                                ";
                }
                // line 88
                echo "                            </td>
                        </tr>
                    </form>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "                </tbody>
            </table>
        </div>
    </div>
";
        } else {
            // line 97
            echo "    <div class=\"text-danger\">
        インストールされているプラグインはありません。
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "Store/plugin_table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 97,  196 => 92,  187 => 88,  181 => 86,  179 => 85,  175 => 83,  169 => 81,  165 => 79,  159 => 76,  155 => 75,  151 => 74,  145 => 71,  142 => 70,  139 => 69,  130 => 65,  125 => 63,  121 => 62,  117 => 61,  112 => 60,  110 => 59,  105 => 57,  101 => 56,  92 => 52,  89 => 51,  79 => 47,  69 => 43,  67 => 42,  59 => 41,  52 => 39,  43 => 38,  40 => 37,  36 => 36,  21 => 23,  19 => 22,);
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
/* {% if Plugins|length > 0 %}*/
/*     <div class="table_list plugin-table">*/
/*         <div class="table-responsive with-border">*/
/*             <table class="table table-hover table-condensed">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th>プラグイン</th>*/
/*                     <th>バージョン</th>*/
/*                     <th>コード</th>*/
/*                     <th>アップデート</th>*/
/*                     <th>設定</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for Plugin in Plugins %}*/
/*                     {% set form = plugin_forms[Plugin.id] %}*/
/*                     <form id="{{ form.vars.name }}" name="{{ form.vars.name }}" method="post" action="" {{ form_enctype(form) }}>*/
/*                         <tr class="{% if Plugin.enable == 0 %}active{% endif %}">*/
/*                             <td class="tp">*/
/*                                 <strong>{{ Plugin.name }}</strong>{% if Plugin.enable == 0 %}<span class="text-danger"> (停止中)</span>{% endif %}<br>*/
/*                                 {% if Plugin.enable == 1 %}*/
/*                                     <a href="{{ url('admin_store_plugin_disable', { id : Plugin.id }) }}" {{ csrf_token_for_anchor() }} data-method="put" data-confirm="false">*/
/*                                         無効にする*/
/*                                     </a>*/
/*                                 {% else %}*/
/*                                     <a href="{{ url('admin_store_plugin_enable', { id : Plugin.id }) }}" {{ csrf_token_for_anchor() }} data-method="put" data-confirm="false">*/
/*                                         有効にする*/
/*                                     </a>*/
/*                                 {% endif %}*/
/*                                 /*/
/*                                 <a href="{{ url('admin_store_plugin_uninstall', { id : Plugin.id }) }}" {{ csrf_token_for_anchor() }} data-method="delete" data-message="このプラグインを削除してもよろしいですか？">*/
/*                                     削除*/
/*                                 </a>*/
/*                             </td>*/
/*                             <td class="tv text-center">{{ Plugin.version }}</td>*/
/*                             <td class="tc">{{ Plugin.code }}</td>*/
/*                             <td class="tu">*/
/*                             {% if Plugin.source == 0 %}*/
/*                                 {{ form_widget(form._token) }}*/
/*                                 {{ form_widget(form.plugin_id) }}*/
/*                                 {{ form_widget(form.plugin_archive, {'attr': {'accept': 'application/zip,application/x-tar,application/x-gzip'}}) }}*/
/*                                 {{ form_errors(form.plugin_archive) }}*/
/*                                 <p></p>*/
/*                                 <a class="btn btn-primary btn-xs" href="#" onclick="changeActionSubmit('{{ url('admin_store_plugin_update', { id : Plugin.id }) }}', '{{ form.vars.name }}');">*/
/*                                     アップロード*/
/*                                 </a>*/
/*                             {% else %}*/
/*                                 {% if Plugin.updateStatus == 3 %}*/
/*                                     <p>新バージョンのプラグインが利用可能です。*/
/*                                         <a class="btn btn-default btn-xs" href="{{ url('admin_store_plugin_upgrade', {'action': 'update', 'id': Plugin.source, 'version': Plugin.version}) }}">今すぐ更新</a>*/
/*                                     </p>*/
/*                                     <ul class="plugin-meta dl-horizontal">*/
/*                                         <li class="plugin-version">プラグインバージョン : {{ Plugin.newVersion }}</li>*/
/*                                         <li class="plugin-version">EC-CUBE対応バージョン : {{ Plugin.eccubeVersionAsString }}</li>*/
/*                                         <li class="plugin-update">更新日 : {{ Plugin.lastUpdateDate|time_ago }}</li>*/
/*                                     </ul>*/
/*                                 {% else %}*/
/*                                     <p>アップデート対象プラグインはありません。</p>*/
/*                                 {% endif %}*/
/*                                 <p><a href="{{ Plugin.productUrl }}" target="_blank">詳細</a></p>*/
/*                             {% endif %}*/
/*                             </td>*/
/*                             <td class="ta text-center">*/
/*                                 {% if configPages[Plugin.code] is defined %}*/
/*                                    <a href='{{configPages[Plugin.code]}}'>設定</a>*/
/*                                 {% endif %}*/
/*                             </td>*/
/*                         </tr>*/
/*                     </form>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* {% else %}*/
/*     <div class="text-danger">*/
/*         インストールされているプラグインはありません。*/
/*     </div>*/
/* {% endif %}*/
/* */
