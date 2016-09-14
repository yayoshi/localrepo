<?php

/* __string_template__7fbb540bdd58a03ae4a2145517d49655867072b09cd38aeee9ac18bc6366df2c */
class __TwigTemplate_9538ecc4ff95bd97ceb3daa7cd7ea71dfba78d0873e7167d7797eef4b1cb0633 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("login_frame.twig", "__string_template__7fbb540bdd58a03ae4a2145517d49655867072b09cd38aeee9ac18bc6366df2c", 22);
        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "login_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 24
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_javascript($context, array $blocks = array())
    {
        // line 27
        echo "<script>
\$(function() {
    \$('#login_id').focus();
});
</script>
";
    }

    // line 34
    public function block_main($context, array $blocks = array())
    {
        // line 35
        echo "
    <div class=\"login-box\">
        ";
        // line 37
        echo twig_include($this->env, $context, "alert.twig");
        echo "
        <div class=\"login-box-body\">
            <p class=\"login-logo2\"><img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/img/logo2.png\" width=\"106\"></p>
            <form name=\"form1\" id=\"form1\" method=\"post\" action=\"";
        // line 40
        echo $this->env->getExtension('eccube')->getPath(($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_route", array()) . "_login_check"));
        echo "\">
                ";
        // line 41
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "has", array(0 => "eccube.admin.login.target.path"), "method")) {
            // line 42
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => "eccube.admin.login.target.path"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["targetPath"]) {
                // line 43
                echo "                        <input type=\"hidden\" name=\"_target_path\" value=\"";
                echo twig_escape_filter($this->env, $context["targetPath"], "html", null, true);
                echo "\" />
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['targetPath'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                ";
        }
        // line 46
        echo "                <div class=\"form-group has-feedback\">
                    ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "login_id", array()), 'widget', array("id" => "login_id", "attr" => array("size" => 20, "class" => "box25", "placeholder" => "ログインID")));
        echo "
                </div>
                <div class=\"form-group has-feedback\">
                    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), 'widget', array("attr" => array("size" => 20, "class" => "box25", "placeholder" => "パスワード")));
        echo "
                </div>
                ";
        // line 52
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 53
            echo "                <div class=\"form-group\">
                    <span class=\"text-danger\">";
            // line 54
            echo $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : null));
            echo "</span>
                </div>
                ";
        }
        // line 57
        echo "                <p class=\"btn_area\"><button type=\"submit\" class=\"btn btn-primary btn-block btn-lg\">ログイン</button></p>
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
            </form>
        </div><!-- /.login-box-body -->
        <p class=\"text-center\"><small class=\"copyright\">Copyright &copy; 2000-";
        // line 62
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " LOCKON CO.,LTD. All Rights Reserved.</small></p>
    </div><!-- /.login-box -->

";
    }

    public function getTemplateName()
    {
        return "__string_template__7fbb540bdd58a03ae4a2145517d49655867072b09cd38aeee9ac18bc6366df2c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 62,  115 => 59,  111 => 58,  108 => 57,  102 => 54,  99 => 53,  97 => 52,  92 => 50,  86 => 47,  83 => 46,  80 => 45,  71 => 43,  66 => 42,  64 => 41,  60 => 40,  56 => 39,  51 => 37,  47 => 35,  44 => 34,  35 => 27,  32 => 26,  28 => 22,  26 => 24,  11 => 22,);
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
/* {% extends 'login_frame.twig' %}*/
/* */
/* {% form_theme form 'Form/bootstrap_3_horizontal_layout.html.twig' %}*/
/* */
/* {% block javascript %}*/
/* <script>*/
/* $(function() {*/
/*     $('#login_id').focus();*/
/* });*/
/* </script>*/
/* {% endblock javascript %}*/
/* */
/* {% block main %}*/
/* */
/*     <div class="login-box">*/
/*         {{ include('alert.twig') }}*/
/*         <div class="login-box-body">*/
/*             <p class="login-logo2"><img src="{{ app.config.admin_urlpath }}/assets/img/logo2.png" width="106"></p>*/
/*             <form name="form1" id="form1" method="post" action="{{ path(app.config.admin_route ~ '_login_check') }}">*/
/*                 {% if app.session.flashBag.has('eccube.admin.login.target.path') %}*/
/*                     {% for targetPath in app.session.flashBag.get('eccube.admin.login.target.path') %}*/
/*                         <input type="hidden" name="_target_path" value="{{ targetPath }}" />*/
/*                     {% endfor %}*/
/*                 {% endif %}*/
/*                 <div class="form-group has-feedback">*/
/*                     {{ form_widget(form.login_id, {'id': 'login_id', 'attr': {'size': 20, 'class': 'box25', 'placeholder': 'ログインID'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group has-feedback">*/
/*                     {{ form_widget(form.password, {'attr': {'size': 20, 'class': 'box25', 'placeholder': 'パスワード'}}) }}*/
/*                 </div>*/
/*                 {% if error %}*/
/*                 <div class="form-group">*/
/*                     <span class="text-danger">{{ error|trans|raw }}</span>*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 <p class="btn_area"><button type="submit" class="btn btn-primary btn-block btn-lg">ログイン</button></p>*/
/*                 <input type="hidden" name="_csrf_token" value="{{ csrf_token('authenticate') }}">*/
/*                 {{ form_rest(form) }}*/
/*             </form>*/
/*         </div><!-- /.login-box-body -->*/
/*         <p class="text-center"><small class="copyright">Copyright &copy; 2000-{{ "now"|date("Y") }} LOCKON CO.,LTD. All Rights Reserved.</small></p>*/
/*     </div><!-- /.login-box -->*/
/* */
/* {% endblock %}*/
/* */
