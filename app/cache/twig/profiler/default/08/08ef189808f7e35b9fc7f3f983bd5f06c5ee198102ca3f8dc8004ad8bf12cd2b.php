<?php

/* pagination.twig */
class __TwigTemplate_f2fd33a93e88d4b1c56dd17bc7f6567d0898be1bbc86e6c99421b5546b5d7621 extends Twig_Template
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
        $__internal_b557445159131012ffae45702de4a2771f5464159a19ed445286e8e02b34310e = $this->env->getExtension("native_profiler");
        $__internal_b557445159131012ffae45702de4a2771f5464159a19ed445286e8e02b34310e->enter($__internal_b557445159131012ffae45702de4a2771f5464159a19ed445286e8e02b34310e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pagination.twig"));

        // line 22
        if (($this->getAttribute((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")), "pageCount", array()) > 1)) {
            // line 23
            echo "<div id=\"pagination_wrap\" class=\"pagination\">
    <ul>
        ";
            // line 25
            if ($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "previous", array(), "any", true, true)) {
                // line 26
                echo "            <li class=\"pagenation__item-previous\">
                <a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("pageno" => $this->getAttribute((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")), "previous", array())))), "html", null, true);
                echo "\"
                   aria-label=\"Previous\"><span aria-hidden=\"true\">前へ</span></a>
            </li>
        ";
            }
            // line 31
            echo "
        ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")), "pagesInRange", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 33
                echo "            ";
                if (($context["page"] == $this->getAttribute((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")), "current", array()))) {
                    // line 34
                    echo "                <li class=\"pagenation__item active\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("pageno" => $context["page"]))), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo " </a></li>
            ";
                } else {
                    // line 36
                    echo "                <li class=\"pagenation__item\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("pageno" => $context["page"]))), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo " </a></li>
            ";
                }
                // line 38
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "
        ";
            // line 40
            if ($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "next", array(), "any", true, true)) {
                // line 41
                echo "            <li class=\"pagenation__item-next\">
                <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("pageno" => $this->getAttribute((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")), "next", array())))), "html", null, true);
                echo "\"
                   aria-label=\"Next\"><span aria-hidden=\"true\">次へ</span></a>
            </li>
        ";
            }
            // line 46
            echo "    </ul>
</div>
";
        }
        
        $__internal_b557445159131012ffae45702de4a2771f5464159a19ed445286e8e02b34310e->leave($__internal_b557445159131012ffae45702de4a2771f5464159a19ed445286e8e02b34310e_prof);

    }

    public function getTemplateName()
    {
        return "pagination.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 46,  80 => 42,  77 => 41,  75 => 40,  72 => 39,  66 => 38,  58 => 36,  50 => 34,  47 => 33,  43 => 32,  40 => 31,  33 => 27,  30 => 26,  28 => 25,  24 => 23,  22 => 22,);
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
/* {% if pages.pageCount > 1 %}*/
/* <div id="pagination_wrap" class="pagination">*/
/*     <ul>*/
/*         {% if pages.previous is defined %}*/
/*             <li class="pagenation__item-previous">*/
/*                 <a href="{{ path(app.request.attributes.get('_route'), app.request.query.all|merge({'pageno': pages.previous})) }}"*/
/*                    aria-label="Previous"><span aria-hidden="true">前へ</span></a>*/
/*             </li>*/
/*         {% endif %}*/
/* */
/*         {% for page in pages.pagesInRange %}*/
/*             {% if page == pages.current %}*/
/*                 <li class="pagenation__item active"><a href="{{ path(app.request.attributes.get('_route'), app.request.query.all|merge({'pageno': page})) }}"> {{ page }} </a></li>*/
/*             {% else %}*/
/*                 <li class="pagenation__item"><a href="{{ path(app.request.attributes.get('_route'), app.request.query.all|merge({'pageno': page})) }}"> {{ page }} </a></li>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/* */
/*         {% if pages.next is defined %}*/
/*             <li class="pagenation__item-next">*/
/*                 <a href="{{ path(app.request.attributes.get('_route'), app.request.query.all|merge({'pageno': pages.next})) }}"*/
/*                    aria-label="Next"><span aria-hidden="true">次へ</span></a>*/
/*             </li>*/
/*         {% endif %}*/
/*     </ul>*/
/* </div>*/
/* {% endif %}*/
/* */
