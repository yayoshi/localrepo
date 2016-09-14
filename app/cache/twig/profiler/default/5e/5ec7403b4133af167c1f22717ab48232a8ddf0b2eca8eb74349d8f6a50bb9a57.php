<?php

/* __string_template__9947ba5fbef65d966bf20dc769b83df967857de2ed819dac8a6d15cdc941ff8b */
class __TwigTemplate_f2fb07c330d50340d12eba1e96647dd1e0b96ad14550c1ad9543428c8d4f4f01 extends Twig_Template
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
        $__internal_71508d2945f64487d3d76a09629c3f47eb4634e5314e0c2ad43163384bd22a08 = $this->env->getExtension("native_profiler");
        $__internal_71508d2945f64487d3d76a09629c3f47eb4634e5314e0c2ad43163384bd22a08->enter($__internal_71508d2945f64487d3d76a09629c3f47eb4634e5314e0c2ad43163384bd22a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__9947ba5fbef65d966bf20dc769b83df967857de2ed819dac8a6d15cdc941ff8b"));

        // line 22
        echo "<div id=\"cart_area\">
    <p class=\"clearfix cart-trigger\"><a href=\"#cart\">
            <svg class=\"cb cb-shopping-cart\">
                <use xlink:href=\"#cb-shopping-cart\"/>
            </svg>
            <span class=\"badge\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Cart"]) ? $context["Cart"] : $this->getContext($context, "Cart")), "total_quantity", array()), "html", null, true);
        echo "</span>
            <svg class=\"cb cb-close\">
                <use xlink:href=\"#cb-close\"/>
            </svg>
        </a>
        <span class=\"cart_price pc\">合計 <span class=\"price\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Cart"]) ? $context["Cart"] : $this->getContext($context, "Cart")), "total_price", array())), "html", null, true);
        echo "</span></span></p>
    <div id=\"cart\" class=\"cart\">
        <div class=\"inner\">
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "eccube.front.cart.error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 36
            echo "                <div class=\"message\">
                    <p class=\"errormsg bg-danger\">
                        <svg class=\"cb cb-warning\"><use xlink:href=\"#cb-warning\" /></svg>";
            // line 38
            echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["error"]), "html", null, true));
            echo "
                    </p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Cart"]) ? $context["Cart"] : $this->getContext($context, "Cart")), "CartItems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["CartItem"]) {
            // line 43
            echo "                ";
            $context["ProductClass"] = $this->getAttribute($context["CartItem"], "Object", array());
            // line 44
            echo "                ";
            $context["Product"] = $this->getAttribute((isset($context["ProductClass"]) ? $context["ProductClass"] : $this->getContext($context, "ProductClass")), "Product", array());
            // line 45
            echo "                <div class=\"item_box clearfix\">
                    <div class=\"item_photo\"><img
                                src=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "config", array()), "image_save_urlpath", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getNoImageProduct($this->getAttribute((isset($context["Product"]) ? $context["Product"] : $this->getContext($context, "Product")), "MainListImage", array())), "html", null, true);
            echo "\"
                                alt=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Product"]) ? $context["Product"] : $this->getContext($context, "Product")), "name", array()), "html", null, true);
            echo "\"></div>
                    <dl class=\"item_detail\">
                        <dt class=\"item_name\">";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Product"]) ? $context["Product"] : $this->getContext($context, "Product")), "name", array()), "html", null, true);
            echo "</dt>
                        <dd class=\"item_pattern small\">";
            // line 52
            if ($this->getAttribute((isset($context["ProductClass"]) ? $context["ProductClass"] : $this->getContext($context, "ProductClass")), "ClassCategory1", array())) {
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ProductClass"]) ? $context["ProductClass"] : $this->getContext($context, "ProductClass")), "ClassCategory1", array()), "ClassName", array()), "html", null, true);
                echo "：";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ProductClass"]) ? $context["ProductClass"] : $this->getContext($context, "ProductClass")), "ClassCategory1", array()), "html", null, true);
                // line 54
                if ($this->getAttribute((isset($context["ProductClass"]) ? $context["ProductClass"] : $this->getContext($context, "ProductClass")), "ClassCategory2", array())) {
                    // line 55
                    echo "<br>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ProductClass"]) ? $context["ProductClass"] : $this->getContext($context, "ProductClass")), "ClassCategory2", array()), "ClassName", array()), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ProductClass"]) ? $context["ProductClass"] : $this->getContext($context, "ProductClass")), "ClassCategory2", array()), "html", null, true);
                }
            }
            // line 58
            echo "</dd>
                        <dd class=\"item_price\">";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute($context["CartItem"], "price", array())), "html", null, true);
            echo "<span class=\"small\">税込</span></dd>
                        <dd class=\"item_quantity form-group form-inline\">数量：";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["CartItem"], "quantity", array()), "html", null, true);
            echo "</dd>
                    </dl>
                </div><!--/item_box-->
                <p class=\"cart_price sp\">合計 <span class=\"price\">";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Cart"]) ? $context["Cart"] : $this->getContext($context, "Cart")), "total_price", array())), "html", null, true);
            echo "</span></p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['CartItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "            ";
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["Cart"]) ? $context["Cart"] : $this->getContext($context, "Cart")), "CartItems", array())) > 0)) {
            // line 66
            echo "
                <div class=\"btn_area\">
                    <ul>
                        <li>
                            <a href=\"";
            // line 70
            echo $this->env->getExtension('eccube')->getUrl("cart");
            echo "\" class=\"btn btn-primary\">カートへ進む</a>
                        </li>
                        <li>
                            <button type=\"button\" class=\"btn btn-default btn-sm cart-trigger\">キャンセル</button>
                        </li>
                    </ul>
                </div>
            ";
        } else {
            // line 78
            echo "                <div class=\"btn_area\">
                    <div class=\"message\">
                        <p class=\"errormsg bg-danger\" style=\"margin-bottom: 20px;\">
                            現在カート内に<br>商品はございません。
                        </p>
                    </div>
                </div>
            ";
        }
        // line 86
        echo "        </div>
    </div>
</div>";
        
        $__internal_71508d2945f64487d3d76a09629c3f47eb4634e5314e0c2ad43163384bd22a08->leave($__internal_71508d2945f64487d3d76a09629c3f47eb4634e5314e0c2ad43163384bd22a08_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__9947ba5fbef65d966bf20dc769b83df967857de2ed819dac8a6d15cdc941ff8b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 86,  147 => 78,  136 => 70,  130 => 66,  127 => 65,  119 => 63,  113 => 60,  109 => 59,  106 => 58,  99 => 55,  97 => 54,  93 => 53,  91 => 52,  87 => 50,  82 => 48,  76 => 47,  72 => 45,  69 => 44,  66 => 43,  61 => 42,  51 => 38,  47 => 36,  43 => 35,  37 => 32,  29 => 27,  22 => 22,);
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
/* <div id="cart_area">*/
/*     <p class="clearfix cart-trigger"><a href="#cart">*/
/*             <svg class="cb cb-shopping-cart">*/
/*                 <use xlink:href="#cb-shopping-cart"/>*/
/*             </svg>*/
/*             <span class="badge">{{ Cart.total_quantity }}</span>*/
/*             <svg class="cb cb-close">*/
/*                 <use xlink:href="#cb-close"/>*/
/*             </svg>*/
/*         </a>*/
/*         <span class="cart_price pc">合計 <span class="price">{{ Cart.total_price|price }}</span></span></p>*/
/*     <div id="cart" class="cart">*/
/*         <div class="inner">*/
/*             {% for error in app.session.flashbag.get('eccube.front.cart.error')  %}*/
/*                 <div class="message">*/
/*                     <p class="errormsg bg-danger">*/
/*                         <svg class="cb cb-warning"><use xlink:href="#cb-warning" /></svg>{{ error|trans|nl2br }}*/
/*                     </p>*/
/*                 </div>*/
/*             {% endfor %}*/
/*             {% for CartItem in Cart.CartItems %}*/
/*                 {% set ProductClass = CartItem.Object %}*/
/*                 {% set Product = ProductClass.Product %}*/
/*                 <div class="item_box clearfix">*/
/*                     <div class="item_photo"><img*/
/*                                 src="{{ app.config.image_save_urlpath }}/{{ Product.MainListImage|no_image_product }}"*/
/*                                 alt="{{ Product.name }}"></div>*/
/*                     <dl class="item_detail">*/
/*                         <dt class="item_name">{{ Product.name }}</dt>*/
/*                         <dd class="item_pattern small">*/
/*                             {%- if ProductClass.ClassCategory1 -%}*/
/*                                 {{ ProductClass.ClassCategory1.ClassName }}：{{ ProductClass.ClassCategory1 }}*/
/*                                 {%- if ProductClass.ClassCategory2 -%}*/
/*                                     <br>{{ ProductClass.ClassCategory2.ClassName }}：{{ ProductClass.ClassCategory2 }}*/
/*                                 {%- endif -%}*/
/*                             {%- endif -%}*/
/*                         </dd>*/
/*                         <dd class="item_price">{{ CartItem.price|price }}<span class="small">税込</span></dd>*/
/*                         <dd class="item_quantity form-group form-inline">数量：{{ CartItem.quantity }}</dd>*/
/*                     </dl>*/
/*                 </div><!--/item_box-->*/
/*                 <p class="cart_price sp">合計 <span class="price">{{ Cart.total_price|price }}</span></p>*/
/*             {% endfor %}*/
/*             {% if Cart.CartItems|length > 0 %}*/
/* */
/*                 <div class="btn_area">*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ url('cart') }}" class="btn btn-primary">カートへ進む</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <button type="button" class="btn btn-default btn-sm cart-trigger">キャンセル</button>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*             {% else %}*/
/*                 <div class="btn_area">*/
/*                     <div class="message">*/
/*                         <p class="errormsg bg-danger" style="margin-bottom: 20px;">*/
/*                             現在カート内に<br>商品はございません。*/
/*                         </p>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
