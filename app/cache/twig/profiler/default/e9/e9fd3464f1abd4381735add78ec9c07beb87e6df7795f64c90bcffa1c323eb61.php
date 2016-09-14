<?php

/* Block/logo.twig */
class __TwigTemplate_e11a516a0d8673c14c4c2e525a99803ec7abeb59a0e96eb6c39b2c711bd157ba extends Twig_Template
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
        $__internal_c039ac06221c794446b818df2b93d44ef8b7288d311dd821b607b19c13e6ab58 = $this->env->getExtension("native_profiler");
        $__internal_c039ac06221c794446b818df2b93d44ef8b7288d311dd821b607b19c13e6ab58->enter($__internal_c039ac06221c794446b818df2b93d44ef8b7288d311dd821b607b19c13e6ab58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Block/logo.twig"));

        // line 22
        echo "             <div class=\"header_logo_area\">
                <p class=\"copy\">くらしを楽しむライフスタイルグッズ</p>
                <h1 class=\"header_logo\"><a href=\"";
        // line 24
        echo $this->env->getExtension('eccube')->getUrl("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : $this->getContext($context, "BaseInfo")), "shop_name", array()), "html", null, true);
        echo "</a></h1>
            </div>
";
        
        $__internal_c039ac06221c794446b818df2b93d44ef8b7288d311dd821b607b19c13e6ab58->leave($__internal_c039ac06221c794446b818df2b93d44ef8b7288d311dd821b607b19c13e6ab58_prof);

    }

    public function getTemplateName()
    {
        return "Block/logo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 24,  22 => 22,);
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
/*              <div class="header_logo_area">*/
/*                 <p class="copy">くらしを楽しむライフスタイルグッズ</p>*/
/*                 <h1 class="header_logo"><a href="{{ url('homepage') }}">{{ BaseInfo.shop_name }}</a></h1>*/
/*             </div>*/
/* */
