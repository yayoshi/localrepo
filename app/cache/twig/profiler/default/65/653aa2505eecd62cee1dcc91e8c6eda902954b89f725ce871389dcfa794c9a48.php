<?php

/* __string_template__6862c5821d93e02807d493648028e68b0c549fcd1af31aa6436cb74d6c56c7d9 */
class __TwigTemplate_a446a8963080946825260429e06ae87e2a6f91edf837621a08a55bc0288dae0c extends Twig_Template
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
        $__internal_44e6f5212206dd76144d19cef0a397c77e681cd7f96cd2c23d4b5eca637826ec = $this->env->getExtension("native_profiler");
        $__internal_44e6f5212206dd76144d19cef0a397c77e681cd7f96cd2c23d4b5eca637826ec->enter($__internal_44e6f5212206dd76144d19cef0a397c77e681cd7f96cd2c23d4b5eca637826ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__6862c5821d93e02807d493648028e68b0c549fcd1af31aa6436cb74d6c56c7d9"));

        // line 22
        echo "<div class=\"drawer_block pc header_bottom_area\">
    <div id=\"search\" class=\"search\">
        <form method=\"get\" id=\"searchform\" action=\"";
        // line 24
        echo $this->env->getExtension('eccube')->getPath("product_list");
        echo "\">
            <div class=\"search_inner\">
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category_id", array()), 'widget');
        echo "
                <div class=\"input_search clearfix\">
                    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("placeholder" => "キーワードを入力")));
        echo "
                    <button type=\"submit\" class=\"bt_search\"><svg class=\"cb cb-search\"><use xlink:href=\"#cb-search\" /></svg></button>
                </div>
            </div>
            <div class=\"extra-form\">
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 34
            echo "                    ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 35
                echo "                        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'label');
                echo "
                        ";
                // line 36
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'widget');
                echo "
                        ";
                // line 37
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'errors');
                echo "
                    ";
            }
            // line 39
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </div>
        </form>
    </div>
</div>";
        
        $__internal_44e6f5212206dd76144d19cef0a397c77e681cd7f96cd2c23d4b5eca637826ec->leave($__internal_44e6f5212206dd76144d19cef0a397c77e681cd7f96cd2c23d4b5eca637826ec_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__6862c5821d93e02807d493648028e68b0c549fcd1af31aa6436cb74d6c56c7d9";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 40,  65 => 39,  60 => 37,  56 => 36,  51 => 35,  48 => 34,  44 => 33,  36 => 28,  31 => 26,  26 => 24,  22 => 22,);
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
/* <div class="drawer_block pc header_bottom_area">*/
/*     <div id="search" class="search">*/
/*         <form method="get" id="searchform" action="{{ path('product_list') }}">*/
/*             <div class="search_inner">*/
/*                 {{ form_widget(form.category_id) }}*/
/*                 <div class="input_search clearfix">*/
/*                     {{ form_widget(form.name, {'attr': { 'placeholder' : "キーワードを入力" }} ) }}*/
/*                     <button type="submit" class="bt_search"><svg class="cb cb-search"><use xlink:href="#cb-search" /></svg></button>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="extra-form">*/
/*                 {% for f in form.getIterator %}*/
/*                     {% if f.vars.name matches '[^plg*]' %}*/
/*                         {{ form_label(f) }}*/
/*                         {{ form_widget(f) }}*/
/*                         {{ form_errors(f) }}*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* </div>*/
