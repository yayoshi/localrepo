<?php

/* __string_template__bdce0a8854326c931d64c58d7ab2d2937e879111300d571d9efd6a486788826a */
class __TwigTemplate_2998cae7f889dc07447b87f29f4e3094ac01a369bcd61434c18a1c4008da5005 extends Twig_Template
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
        $__internal_89c7fa8246269ebd32ce357ee4440ad29d0b0aa1c8e9bab86cca6b11dba39943 = $this->env->getExtension("native_profiler");
        $__internal_89c7fa8246269ebd32ce357ee4440ad29d0b0aa1c8e9bab86cca6b11dba39943->enter($__internal_89c7fa8246269ebd32ce357ee4440ad29d0b0aa1c8e9bab86cca6b11dba39943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__bdce0a8854326c931d64c58d7ab2d2937e879111300d571d9efd6a486788826a"));

        // line 36
        echo "
<nav id=\"category\" class=\"drawer_block pc\">
    <ul class=\"category-nav\">
    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Categories"]) ? $context["Categories"] : $this->getContext($context, "Categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
            // line 40
            echo "        ";
            echo $this->getAttribute($this, "tree", array(0 => $context["Category"]), "method");
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    </ul> <!-- category-nav -->
</nav>
";
        
        $__internal_89c7fa8246269ebd32ce357ee4440ad29d0b0aa1c8e9bab86cca6b11dba39943->leave($__internal_89c7fa8246269ebd32ce357ee4440ad29d0b0aa1c8e9bab86cca6b11dba39943_prof);

    }

    // line 22
    public function gettree($__Category__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "Category" => $__Category__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_2f2a2a6858211c123c81c4310fd42318aaf1a9f92c89ac9c342f5affc757536c = $this->env->getExtension("native_profiler");
            $__internal_2f2a2a6858211c123c81c4310fd42318aaf1a9f92c89ac9c342f5affc757536c->enter($__internal_2f2a2a6858211c123c81c4310fd42318aaf1a9f92c89ac9c342f5affc757536c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "tree"));

            // line 23
            echo "    <li>
        <a href=\"";
            // line 24
            echo $this->env->getExtension('eccube')->getUrl("product_list");
            echo "?category_id=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Category"]) ? $context["Category"] : $this->getContext($context, "Category")), "id", array()), "html", null, true);
            echo "\">
            ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Category"]) ? $context["Category"] : $this->getContext($context, "Category")), "name", array()), "html", null, true);
            echo "
        </a>
        ";
            // line 27
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["Category"]) ? $context["Category"] : $this->getContext($context, "Category")), "children", array())) > 0)) {
                // line 28
                echo "            <ul>
            ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Category"]) ? $context["Category"] : $this->getContext($context, "Category")), "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["ChildCategory"]) {
                    // line 30
                    echo "                    ";
                    echo $this->getAttribute($this, "tree", array(0 => $context["ChildCategory"]), "method");
                    echo "
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ChildCategory'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "            </ul>
        ";
            }
            // line 34
            echo "    </li>
";
            
            $__internal_2f2a2a6858211c123c81c4310fd42318aaf1a9f92c89ac9c342f5affc757536c->leave($__internal_2f2a2a6858211c123c81c4310fd42318aaf1a9f92c89ac9c342f5affc757536c_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "__string_template__bdce0a8854326c931d64c58d7ab2d2937e879111300d571d9efd6a486788826a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 34,  96 => 32,  87 => 30,  83 => 29,  80 => 28,  78 => 27,  73 => 25,  67 => 24,  64 => 23,  49 => 22,  40 => 42,  31 => 40,  27 => 39,  22 => 36,);
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
/* {% macro tree(Category) %}*/
/*     <li>*/
/*         <a href="{{ url('product_list') }}?category_id={{ Category.id }}">*/
/*             {{ Category.name }}*/
/*         </a>*/
/*         {% if Category.children|length > 0 %}*/
/*             <ul>*/
/*             {% for ChildCategory in Category.children %}*/
/*                     {{ _self.tree(ChildCategory) }}*/
/*             {% endfor %}*/
/*             </ul>*/
/*         {% endif %}*/
/*     </li>*/
/* {% endmacro %}*/
/* */
/* <nav id="category" class="drawer_block pc">*/
/*     <ul class="category-nav">*/
/*     {% for Category in Categories %}*/
/*         {{ _self.tree(Category) }}*/
/*     {% endfor %}*/
/*     </ul> <!-- category-nav -->*/
/* </nav>*/
/* */
