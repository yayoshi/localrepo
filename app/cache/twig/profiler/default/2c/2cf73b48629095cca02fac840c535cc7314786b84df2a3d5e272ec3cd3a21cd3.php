<?php

/* __string_template__6a03eb172dec9ea88ee649f70258380f26aa524550bcba382385396b8110e649 */
class __TwigTemplate_cf0d431c79664e5ba6442599595ff46edc55f9d683552df4566836714e7c4c16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__6a03eb172dec9ea88ee649f70258380f26aa524550bcba382385396b8110e649", 22);
        $this->blocks = array(
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
        $__internal_cc1dfd09e3af129655e9b887eda3dcf50a583cac57bf49b2db4736572a41664a = $this->env->getExtension("native_profiler");
        $__internal_cc1dfd09e3af129655e9b887eda3dcf50a583cac57bf49b2db4736572a41664a->enter($__internal_cc1dfd09e3af129655e9b887eda3dcf50a583cac57bf49b2db4736572a41664a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__6a03eb172dec9ea88ee649f70258380f26aa524550bcba382385396b8110e649"));

        // line 24
        $context["body_class"] = "product_page";
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc1dfd09e3af129655e9b887eda3dcf50a583cac57bf49b2db4736572a41664a->leave($__internal_cc1dfd09e3af129655e9b887eda3dcf50a583cac57bf49b2db4736572a41664a_prof);

    }

    // line 26
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_c37b1e9475c23f52c498de834c8d454ca46f8f28c865854a211e2fdefb613465 = $this->env->getExtension("native_profiler");
        $__internal_c37b1e9475c23f52c498de834c8d454ca46f8f28c865854a211e2fdefb613465->enter($__internal_c37b1e9475c23f52c498de834c8d454ca46f8f28c865854a211e2fdefb613465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 27
        echo "<script>
    eccube.classCategories = ";
        // line 28
        echo twig_jsonencode_filter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : $this->getContext($context, "Product")), "class_categories", array()));
        echo ";

    // 規格2に選択肢を割り当てる。
    function fnSetClassCategories(form, classcat_id2_selected) {
        var \$form = \$(form);
        var product_id = \$form.find('input[name=product_id]').val();
        var \$sele1 = \$form.find('select[name=classcategory_id1]');
        var \$sele2 = \$form.find('select[name=classcategory_id2]');
        eccube.setClassCategories(\$form, product_id, \$sele1, \$sele2, classcat_id2_selected);
    }

    ";
        // line 39
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classcategory_id2", array(), "any", true, true)) {
            // line 40
            echo "    fnSetClassCategories(
            document.form1, ";
            // line 41
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classcategory_id2", array()), "vars", array()), "value", array()));
            echo "
    );
    ";
        }
        // line 44
        echo "</script>

<script>
\$(function(){
    \$('.carousel').slick({
        infinite: false,
        speed: 300,
        prevArrow:'<button type=\"button\" class=\"slick-prev\"><span class=\"angle-circle\"><svg class=\"cb cb-angle-right\"><use xlink:href=\"#cb-angle-right\" /></svg></span></button>',
        nextArrow:'<button type=\"button\" class=\"slick-next\"><span class=\"angle-circle\"><svg class=\"cb cb-angle-right\"><use xlink:href=\"#cb-angle-right\" /></svg></span></button>',
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            }
        ]
    });

    \$('.slides').slick({
        dots: true,
        arrows: false,
        speed: 300,
        customPaging: function(slider, i) {
            return '<button class=\"thumbnail\">' + \$(slider.\$slides[i]).find('img').prop('outerHTML') + '</button>';
        }
    });

    \$('#favorite').click(function() {
        \$('#mode').val('add_favorite');
    });

});
</script>

";
        
        $__internal_c37b1e9475c23f52c498de834c8d454ca46f8f28c865854a211e2fdefb613465->leave($__internal_c37b1e9475c23f52c498de834c8d454ca46f8f28c865854a211e2fdefb613465_prof);

    }

    // line 84
    public function block_main($context, array $blocks = array())
    {
        $__internal_b7951fa116face2c39218ed60e44175a90cf95198d406ab6b0ed1f1114132725 = $this->env->getExtension("native_profiler");
        $__internal_b7951fa116face2c39218ed60e44175a90cf95198d406ab6b0ed1f1114132725->enter($__internal_b7951fa116face2c39218ed60e44175a90cf95198d406ab6b0ed1f1114132725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 85
        echo "    ";
        // line 98
        echo "
    <!-- ▼item_detail▼ -->
    <div id=\"item_detail\">
        <div id=\"detail_wrap\" class=\"row\">
            <!--★画像★-->
            <div id=\"item_photo_area\" class=\"col-sm-6\">
                <div id=\"detail_image_box__slides\" class=\"slides\">
                    ";
        // line 105
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["Product"]) ? $context["Product"] : $this->getContext($context, "Product")), "ProductImage", array())) > 0)) {
            // line 106
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Product"]) ? $context["Product"] : $this->getContext($context, "Product")), "ProductImage", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["ProductImage"]) {
                // line 107
                echo "                        <div id=\"detail_image_box__item--";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "config", array()), "image_save_urlpath", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getNoImageProduct($context["ProductImage"]), "html", null, true);
                echo "\"/></div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductImage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "                    ";
        } else {
            // line 110
            echo "                        <div id=\"detail_image_box__item\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "config", array()), "image_save_urlpath", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getNoImageProduct(""), "html", null, true);
            echo "\"/></div>
                    ";
        }
        // line 112
        echo "                </div>
            </div>

            <section id=\"item_detail_area\" class=\"col-sm-6\">

                <!--★商品名★-->
                <h3 id=\"detail_description_box__name\" class=\"item_name\">";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Product"]) ? $context["Product"] : $this->getContext($context, "Product")), "name", array()), "html", null, true);
        echo "</h3>
                <div id=\"detail_description_box__body\" class=\"item_detail\">

                    ";
        // line 121
        if ( !twig_test_empty($this->getAttribute((isset($context["Product"]) ? $context["Product"] : $this->getContext($context, "Product")), "ProductTag", array()))) {
            // line 122
            echo "                        <!--▼商品タグ-->
                        <div id=\"product_tag_box\" class=\"product_tag\">
                            ";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Product"]) ? $context["Product"] : $this->getContext($context, "Product")), "ProductTag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ProductTag"]) {
                // line 125
                echo "                                <span id=\"product_tag_box__product_tag--";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ProductTag"], "Tag", array()), "id", array()), "html", null, true);
                echo "\" class=\"product_tag_list\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ProductTag"], "Tag", array()), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductTag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "                        </div>
                        <hr>
                        <!--▲商品タグ-->
                    ";
        }
        // line 131
        echo "
                    <!--★通常価格★-->
                    ";
        // line 133
        if ($this->getAttribute((isset($context["Product"]) ? $context["Product"] : $this->getContext($context, "Product")), "hasProductClass", array())) {
            // line 134
            if (( !(null === $this->getAttribute((isset($context["Product"]) ? $context["Product"] : $this->getContext($context, "Product")), "getPrice01Min", array())) && ($this->getAttribute((isset($context["Product"]) ? $context["Product"] : $this->getContext($context, "Product")), "getPrice01Min", array()) == $this->getAttribute((isset($context["Product"]) ? $context["Product"] : $this->getContext($context, "Product")), "getPrice01Max", array())))) {
                // line 135
                echo "                        <p id=\"detail_description_box__class_normal_price\" class=\"normal_price\"> 通常価格：<span class=\"price01_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : $this->getContext($context, "Product")), "getPrice01IncTaxMin", array())), "html", null, true);
                echo "</span> <span class=\"small\">税込</span></p>
                        ";
            } elseif (( !(null === $this->getAttribute(            // line 136
(isset($context["Product"]) ? $context["Product"] : $this->getContext($context, "Product")), "getPrice01Min", array())) &&  !(null === $this->getAttribute((isset($context["Product"]) ? $context["Product"] : $this->getContext($context, "Product")), "getPrice01Max", array())))) {
                // line 137
                echo "                        <p id=\"detail_description_box__class_normal_range_price\" class=\"normal_price\"> 通常価格：<span class=\"price01_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : $this->getContext($context, "Product")), "getPrice01IncTaxMin", array())), "html", null, true);
                echo "</span> ～ <span class=\"price01_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : $this->getContext($context, "Product")), "getPrice01IncTaxMax", array())), "html", null, true);
                echo "</span> <span class=\"small\">税込</span></p>
                        ";
            }
            // line 139
            echo "                    ";
        } else {
            // line 140
            if ( !(null === $this->getAttribute((isset($context["Product"]) ? $context["Product"] : $this->getContext($context, "Product")), "getPrice01Max", array()))) {
                // line 141
                echo "                        <p id=\"detail_description_box__normal_price\" class=\"normal_price\"> 通常価格：<span class=\"price01_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : $this->getContext($context, "Product")), "getPrice01IncTaxMin", array())), "html", null, true);
                echo "</span> <span class=\"small\">税込</span></p>
                        ";
            }
            // line 143
            echo "                    ";
        }
        // line 145
        echo "<!--★販売価格★-->
                    ";
        // line 146
        if ($this->getAttribute((isset($context["Product"]) ? $context["Product"] : $this->getContext($context, "Product")), "hasProductClass", array())) {
            // line 147
            if (($this->getAttribute((isset($context["Product"]) ? $context["Product"] : $this->getContext($context, "Product")), "getPrice02Min", array()) == $this->getAttribute((isset($context["Product"]) ? $context["Product"] : $this->getContext($context, "Product")), "getPrice02Max", array()))) {
                // line 148
                echo "                        <p id=\"detail_description_box__class_sale_price\" class=\"sale_price text-primary\"> <span class=\"price02_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : $this->getContext($context, "Product")), "getPrice02IncTaxMin", array())), "html", null, true);
                echo "</span> <span class=\"small\">税込</span></p>
                        ";
            } else {
                // line 150
                echo "                        <p id=\"detail_description_box__class_range_sale_price\" class=\"sale_price text-primary\"> <span class=\"price02_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : $this->getContext($context, "Product")), "getPrice02IncTaxMin", array())), "html", null, true);
                echo "</span> ～ <span class=\"price02_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : $this->getContext($context, "Product")), "getPrice02IncTaxMax", array())), "html", null, true);
                echo "</span> <span class=\"small\">税込</span></p>
                        ";
            }
            // line 152
            echo "                    ";
        } else {
            // line 153
            echo "<p id=\"detail_description_box__sale_price\" class=\"sale_price text-primary\"> <span class=\"price02_default\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : $this->getContext($context, "Product")), "getPrice02IncTaxMin", array())), "html", null, true);
            echo "</span> <span class=\"small\">税込</span></p>
                    ";
        }
        // line 156
        echo "<!--▼商品コード-->
                    <p id=\"detail_description_box__item_range_code\" class=\"item_code\">商品コード： <span id=\"item_code_default\">
                        ";
        // line 158
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Product"]) ? $context["Product"] : $this->getContext($context, "Product")), "code_min", array()), "html", null, true);
        echo "
                        ";
        // line 159
        if (($this->getAttribute((isset($context["Product"]) ? $context["Product"] : $this->getContext($context, "Product")), "code_min", array()) != $this->getAttribute((isset($context["Product"]) ? $context["Product"] : $this->getContext($context, "Product")), "code_max", array()))) {
            echo " ～ ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Product"]) ? $context["Product"] : $this->getContext($context, "Product")), "code_max", array()), "html", null, true);
        }
        // line 160
        echo "                        </span> </p>
                    <!--▲商品コード-->

                    <!-- ▼関連カテゴリ▼ -->
                    <div id=\"relative_category_box\" class=\"relative_cat\">
                        <p>関連カテゴリ</p>
                          ";
        // line 166
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Product"]) ? $context["Product"] : $this->getContext($context, "Product")), "ProductCategories", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["ProductCategory"]) {
            // line 167
            echo "                        <ol id=\"relative_category_box__relative_category--";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ProductCategory"], "product_id", array()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">
                            ";
            // line 168
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["ProductCategory"], "Category", array()), "path", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
                // line 169
                echo "                            <li><a id=\"relative_category_box__relative_category--";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ProductCategory"], "product_id", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "id", array()), "html", null, true);
                echo "\" href=\"";
                echo $this->env->getExtension('eccube')->getUrl("product_list");
                echo "?category_id=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "name", array()), "html", null, true);
                echo "</a></li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "                        </ol>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "                    </div>
                    <!-- ▲関連カテゴリ▲ -->

                    <form action=\"?\" method=\"post\" id=\"form1\" name=\"form1\">
                        <!--▼買い物かご-->
                        <div id=\"detail_cart_box\" class=\"cart_area\">
                            ";
        // line 179
        if ($this->getAttribute((isset($context["Product"]) ? $context["Product"] : $this->getContext($context, "Product")), "stock_find", array())) {
            // line 180
            echo "
                                ";
            // line 182
            echo "                                ";
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classcategory_id1", array(), "any", true, true)) {
                // line 183
                echo "                                <ul id=\"detail_cart_box__cart_class_category_id\" class=\"classcategory_list\">
                                    ";
                // line 185
                echo "                                    <li>
                                        ";
                // line 186
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classcategory_id1", array()), 'widget');
                echo "
                                        ";
                // line 187
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classcategory_id1", array()), 'errors');
                echo "
                                    </li>
                                    ";
                // line 190
                echo "                                    ";
                if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classcategory_id2", array(), "any", true, true)) {
                    // line 191
                    echo "                                        <li>
                                            ";
                    // line 192
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classcategory_id2", array()), 'widget');
                    echo "
                                            ";
                    // line 193
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classcategory_id2", array()), 'errors');
                    echo "
                                        </li>
                                     ";
                }
                // line 196
                echo "                                </ul>
                                ";
            }
            // line 198
            echo "
                                ";
            // line 200
            echo "                                <dl id=\"detail_cart_box__cart_quantity\" class=\"quantity\">
                                    <dt>数量</dt>
                                    <dd>
                                        ";
            // line 203
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantity", array()), 'widget');
            echo "
                                        ";
            // line 204
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantity", array()), 'errors');
            echo "
                                    </dd>
                                </dl>

                                <div class=\"extra-form\">
                                    ";
            // line 209
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "getIterator", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 210
                echo "                                        ";
                if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                    // line 211
                    echo "                                            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'row');
                    echo "
                                        ";
                }
                // line 213
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 214
            echo "                                </div>

                                ";
            // line 217
            echo "                                <div id=\"detail_cart_box__button_area\" class=\"btn_area\">
                                    <ul id=\"detail_cart_box__insert_button\" class=\"row\">
                                        <li class=\"col-xs-12 col-sm-8\"><button type=\"submit\" id=\"cart\" class=\"btn btn-primary btn-block prevention-btn prevention-mask\">カートに入れる</button></li>
                                    </ul>
                                    ";
            // line 221
            if (($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : $this->getContext($context, "BaseInfo")), "option_favorite_product", array()) == 1)) {
                // line 222
                echo "                                    <ul id=\"detail_cart_box__favorite_button\" class=\"row\">
                                        ";
                // line 223
                if (((isset($context["is_favorite"]) ? $context["is_favorite"] : $this->getContext($context, "is_favorite")) == false)) {
                    // line 224
                    echo "                                            <li class=\"col-xs-12 col-sm-8\"><button type=\"submit\" id=\"favorite\" class=\"btn btn-info btn-block prevention-btn prevention-mask\">お気に入りに追加</button></li>
                                        ";
                } else {
                    // line 226
                    echo "                                            <li class=\"col-xs-12 col-sm-8\"><button type=\"submit\" id=\"favorite\" class=\"btn btn-info btn-block\" disabled=\"disabled\">お気に入りに追加済みです</button></li>
                                        ";
                }
                // line 228
                echo "                                    </ul>
                                    ";
            }
            // line 230
            echo "                                </div>
                            ";
        } else {
            // line 232
            echo "                                ";
            // line 233
            echo "                                <div id=\"detail_cart_box__button_area\" class=\"btn_area\">
                                    <ul class=\"row\">
                                        <li class=\"col-xs-12 col-sm-8\"><button type=\"button\" class=\"btn btn-default btn-block\" disabled=\"disabled\">ただいま品切れ中です</button></li>
                                    </ul>
                                </div>
                            ";
        }
        // line 239
        echo "                        </div>
                        <!--▲買い物かご-->
                        ";
        // line 241
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                    </form>

                    <!--★商品説明★-->
                    <p id=\"detail_not_stock_box__description_detail\" class=\"item_comment\">";
        // line 245
        echo nl2br($this->getAttribute((isset($context["Product"]) ? $context["Product"] : $this->getContext($context, "Product")), "description_detail", array()));
        echo "</p>

                </div>
                <!-- /.item_detail -->

            </section>
            <!--詳細ここまで-->
        </div>

        ";
        // line 255
        echo "        ";
        if ($this->getAttribute((isset($context["Product"]) ? $context["Product"] : $this->getContext($context, "Product")), "freearea", array())) {
            // line 256
            echo "        <div id=\"sub_area\" class=\"row\">
            <div class=\"col-sm-10 col-sm-offset-1\">
                <div id=\"detail_free_box__freearea\" class=\"freearea\">";
            // line 258
            echo twig_include($this->env, $context, twig_template_from_string($this->env, $this->getAttribute((isset($context["Product"]) ? $context["Product"] : $this->getContext($context, "Product")), "freearea", array())));
            echo "</div>
            </div>
        </div>
        ";
        }
        // line 262
        echo "    </div>
    <!-- ▲item_detail▲ -->
";
        
        $__internal_b7951fa116face2c39218ed60e44175a90cf95198d406ab6b0ed1f1114132725->leave($__internal_b7951fa116face2c39218ed60e44175a90cf95198d406ab6b0ed1f1114132725_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__6a03eb172dec9ea88ee649f70258380f26aa524550bcba382385396b8110e649";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  568 => 262,  561 => 258,  557 => 256,  554 => 255,  542 => 245,  535 => 241,  531 => 239,  523 => 233,  521 => 232,  517 => 230,  513 => 228,  509 => 226,  505 => 224,  503 => 223,  500 => 222,  498 => 221,  492 => 217,  488 => 214,  482 => 213,  476 => 211,  473 => 210,  469 => 209,  461 => 204,  457 => 203,  452 => 200,  449 => 198,  445 => 196,  439 => 193,  435 => 192,  432 => 191,  429 => 190,  424 => 187,  420 => 186,  417 => 185,  414 => 183,  411 => 182,  408 => 180,  406 => 179,  398 => 173,  383 => 171,  356 => 169,  339 => 168,  332 => 167,  315 => 166,  307 => 160,  302 => 159,  298 => 158,  294 => 156,  288 => 153,  285 => 152,  277 => 150,  271 => 148,  269 => 147,  267 => 146,  264 => 145,  261 => 143,  255 => 141,  253 => 140,  250 => 139,  242 => 137,  240 => 136,  235 => 135,  233 => 134,  231 => 133,  227 => 131,  221 => 127,  210 => 125,  206 => 124,  202 => 122,  200 => 121,  194 => 118,  186 => 112,  178 => 110,  175 => 109,  154 => 107,  136 => 106,  134 => 105,  125 => 98,  123 => 85,  117 => 84,  72 => 44,  66 => 41,  63 => 40,  61 => 39,  47 => 28,  44 => 27,  38 => 26,  31 => 22,  29 => 24,  11 => 22,);
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
/* {% set body_class = 'product_page' %}*/
/* */
/* {% block javascript %}*/
/* <script>*/
/*     eccube.classCategories = {{ Product.class_categories|json_encode|raw }};*/
/* */
/*     // 規格2に選択肢を割り当てる。*/
/*     function fnSetClassCategories(form, classcat_id2_selected) {*/
/*         var $form = $(form);*/
/*         var product_id = $form.find('input[name=product_id]').val();*/
/*         var $sele1 = $form.find('select[name=classcategory_id1]');*/
/*         var $sele2 = $form.find('select[name=classcategory_id2]');*/
/*         eccube.setClassCategories($form, product_id, $sele1, $sele2, classcat_id2_selected);*/
/*     }*/
/* */
/*     {% if form.classcategory_id2 is defined %}*/
/*     fnSetClassCategories(*/
/*             document.form1, {{ form.classcategory_id2.vars.value|json_encode|raw }}*/
/*     );*/
/*     {% endif %}*/
/* </script>*/
/* */
/* <script>*/
/* $(function(){*/
/*     $('.carousel').slick({*/
/*         infinite: false,*/
/*         speed: 300,*/
/*         prevArrow:'<button type="button" class="slick-prev"><span class="angle-circle"><svg class="cb cb-angle-right"><use xlink:href="#cb-angle-right" /></svg></span></button>',*/
/*         nextArrow:'<button type="button" class="slick-next"><span class="angle-circle"><svg class="cb cb-angle-right"><use xlink:href="#cb-angle-right" /></svg></span></button>',*/
/*         slidesToShow: 4,*/
/*         slidesToScroll: 4,*/
/*         responsive: [*/
/*             {*/
/*                 breakpoint: 768,*/
/*                 settings: {*/
/*                     slidesToShow: 3,*/
/*                     slidesToScroll: 3*/
/*                 }*/
/*             }*/
/*         ]*/
/*     });*/
/* */
/*     $('.slides').slick({*/
/*         dots: true,*/
/*         arrows: false,*/
/*         speed: 300,*/
/*         customPaging: function(slider, i) {*/
/*             return '<button class="thumbnail">' + $(slider.$slides[i]).find('img').prop('outerHTML') + '</button>';*/
/*         }*/
/*     });*/
/* */
/*     $('#favorite').click(function() {*/
/*         $('#mode').val('add_favorite');*/
/*     });*/
/* */
/* });*/
/* </script>*/
/* */
/* {% endblock %}*/
/* */
/* {% block main %}*/
/*     {# todo ブロック化}*/
/*     <div id="topicpath" class="row">*/
/*         {% for ProductCategory in Product.ProductCategories %}*/
/*         <ol>*/
/*             <li><a href="{{ url('product_list') }}">全商品</a></li>*/
/*             {% for Category in ProductCategory.Category.path %}*/
/*                 <li><a href="{{ url('product_list') }}?category_id={{ Category.id }}">{{ Category.name }}</a></li>*/
/*             {% endfor %}*/
/*             <li>{{ Product.name }}</li>*/
/*         </ol>*/
/*         {% endfor %}*/
/*     </div>*/
/*     #}*/
/* */
/*     <!-- ▼item_detail▼ -->*/
/*     <div id="item_detail">*/
/*         <div id="detail_wrap" class="row">*/
/*             <!--★画像★-->*/
/*             <div id="item_photo_area" class="col-sm-6">*/
/*                 <div id="detail_image_box__slides" class="slides">*/
/*                     {% if Product.ProductImage|length > 0 %}*/
/*                         {% for ProductImage in Product.ProductImage %}*/
/*                         <div id="detail_image_box__item--{{ loop.index }}"><img src="{{ app.config.image_save_urlpath }}/{{ ProductImage|no_image_product }}"/></div>*/
/*                         {% endfor %}*/
/*                     {% else %}*/
/*                         <div id="detail_image_box__item"><img src="{{ app.config.image_save_urlpath }}/{{ ''|no_image_product }}"/></div>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <section id="item_detail_area" class="col-sm-6">*/
/* */
/*                 <!--★商品名★-->*/
/*                 <h3 id="detail_description_box__name" class="item_name">{{ Product.name }}</h3>*/
/*                 <div id="detail_description_box__body" class="item_detail">*/
/* */
/*                     {% if Product.ProductTag is not empty %}*/
/*                         <!--▼商品タグ-->*/
/*                         <div id="product_tag_box" class="product_tag">*/
/*                             {% for ProductTag in Product.ProductTag %}*/
/*                                 <span id="product_tag_box__product_tag--{{ ProductTag.Tag.id }}" class="product_tag_list">{{ ProductTag.Tag }}</span>*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                         <hr>*/
/*                         <!--▲商品タグ-->*/
/*                     {% endif %}*/
/* */
/*                     <!--★通常価格★-->*/
/*                     {% if Product.hasProductClass -%}*/
/*                         {% if Product.getPrice01Min is not null and Product.getPrice01Min == Product.getPrice01Max %}*/
/*                         <p id="detail_description_box__class_normal_price" class="normal_price"> 通常価格：<span class="price01_default">{{ Product.getPrice01IncTaxMin|price }}</span> <span class="small">税込</span></p>*/
/*                         {% elseif Product.getPrice01Min is not null and Product.getPrice01Max is not null %}*/
/*                         <p id="detail_description_box__class_normal_range_price" class="normal_price"> 通常価格：<span class="price01_default">{{ Product.getPrice01IncTaxMin|price }}</span> ～ <span class="price01_default">{{ Product.getPrice01IncTaxMax|price }}</span> <span class="small">税込</span></p>*/
/*                         {% endif %}*/
/*                     {% else -%}*/
/*                         {% if Product.getPrice01Max is not null %}*/
/*                         <p id="detail_description_box__normal_price" class="normal_price"> 通常価格：<span class="price01_default">{{ Product.getPrice01IncTaxMin|price }}</span> <span class="small">税込</span></p>*/
/*                         {% endif %}*/
/*                     {% endif -%}*/
/* */
/*                     <!--★販売価格★-->*/
/*                     {% if Product.hasProductClass -%}*/
/*                         {% if Product.getPrice02Min == Product.getPrice02Max %}*/
/*                         <p id="detail_description_box__class_sale_price" class="sale_price text-primary"> <span class="price02_default">{{ Product.getPrice02IncTaxMin|price }}</span> <span class="small">税込</span></p>*/
/*                         {% else %}*/
/*                         <p id="detail_description_box__class_range_sale_price" class="sale_price text-primary"> <span class="price02_default">{{ Product.getPrice02IncTaxMin|price }}</span> ～ <span class="price02_default">{{ Product.getPrice02IncTaxMax|price }}</span> <span class="small">税込</span></p>*/
/*                         {% endif %}*/
/*                     {% else -%}*/
/*                         <p id="detail_description_box__sale_price" class="sale_price text-primary"> <span class="price02_default">{{ Product.getPrice02IncTaxMin|price }}</span> <span class="small">税込</span></p>*/
/*                     {% endif -%}*/
/* */
/*                     <!--▼商品コード-->*/
/*                     <p id="detail_description_box__item_range_code" class="item_code">商品コード： <span id="item_code_default">*/
/*                         {{ Product.code_min }}*/
/*                         {% if Product.code_min != Product.code_max %} ～ {{ Product.code_max }}{% endif %}*/
/*                         </span> </p>*/
/*                     <!--▲商品コード-->*/
/* */
/*                     <!-- ▼関連カテゴリ▼ -->*/
/*                     <div id="relative_category_box" class="relative_cat">*/
/*                         <p>関連カテゴリ</p>*/
/*                           {% for ProductCategory in Product.ProductCategories %}*/
/*                         <ol id="relative_category_box__relative_category--{{ ProductCategory.product_id }}_{{ loop.index }}">*/
/*                             {% for Category in ProductCategory.Category.path %}*/
/*                             <li><a id="relative_category_box__relative_category--{{ ProductCategory.product_id }}_{{ loop.parent.loop.index }}_{{ Category.id }}" href="{{ url('product_list') }}?category_id={{ Category.id }}">{{ Category.name }}</a></li>*/
/*                             {% endfor %}*/
/*                         </ol>*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                     <!-- ▲関連カテゴリ▲ -->*/
/* */
/*                     <form action="?" method="post" id="form1" name="form1">*/
/*                         <!--▼買い物かご-->*/
/*                         <div id="detail_cart_box" class="cart_area">*/
/*                             {% if Product.stock_find %}*/
/* */
/*                                 {# 規格 #}*/
/*                                 {% if form.classcategory_id1 is defined %}*/
/*                                 <ul id="detail_cart_box__cart_class_category_id" class="classcategory_list">*/
/*                                     {# 規格1 #}*/
/*                                     <li>*/
/*                                         {{ form_widget(form.classcategory_id1) }}*/
/*                                         {{ form_errors(form.classcategory_id1) }}*/
/*                                     </li>*/
/*                                     {# 規格2 #}*/
/*                                     {% if form.classcategory_id2 is defined %}*/
/*                                         <li>*/
/*                                             {{ form_widget(form.classcategory_id2) }}*/
/*                                             {{ form_errors(form.classcategory_id2) }}*/
/*                                         </li>*/
/*                                      {% endif %}*/
/*                                 </ul>*/
/*                                 {% endif %}*/
/* */
/*                                 {# 数量 #}*/
/*                                 <dl id="detail_cart_box__cart_quantity" class="quantity">*/
/*                                     <dt>数量</dt>*/
/*                                     <dd>*/
/*                                         {{ form_widget(form.quantity) }}*/
/*                                         {{ form_errors(form.quantity) }}*/
/*                                     </dd>*/
/*                                 </dl>*/
/* */
/*                                 <div class="extra-form">*/
/*                                     {% for f in form.getIterator %}*/
/*                                         {% if f.vars.name matches '[^plg*]' %}*/
/*                                             {{ form_row(f) }}*/
/*                                         {% endif %}*/
/*                                     {% endfor %}*/
/*                                 </div>*/
/* */
/*                                 {# カートボタン #}*/
/*                                 <div id="detail_cart_box__button_area" class="btn_area">*/
/*                                     <ul id="detail_cart_box__insert_button" class="row">*/
/*                                         <li class="col-xs-12 col-sm-8"><button type="submit" id="cart" class="btn btn-primary btn-block prevention-btn prevention-mask">カートに入れる</button></li>*/
/*                                     </ul>*/
/*                                     {% if BaseInfo.option_favorite_product == 1 %}*/
/*                                     <ul id="detail_cart_box__favorite_button" class="row">*/
/*                                         {% if is_favorite == false %}*/
/*                                             <li class="col-xs-12 col-sm-8"><button type="submit" id="favorite" class="btn btn-info btn-block prevention-btn prevention-mask">お気に入りに追加</button></li>*/
/*                                         {% else %}*/
/*                                             <li class="col-xs-12 col-sm-8"><button type="submit" id="favorite" class="btn btn-info btn-block" disabled="disabled">お気に入りに追加済みです</button></li>*/
/*                                         {% endif %}*/
/*                                     </ul>*/
/*                                     {% endif %}*/
/*                                 </div>*/
/*                             {% else %}*/
/*                                 {# 在庫がない場合は品切れボタンのみ表示 #}*/
/*                                 <div id="detail_cart_box__button_area" class="btn_area">*/
/*                                     <ul class="row">*/
/*                                         <li class="col-xs-12 col-sm-8"><button type="button" class="btn btn-default btn-block" disabled="disabled">ただいま品切れ中です</button></li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                         <!--▲買い物かご-->*/
/*                         {{ form_rest(form) }}*/
/*                     </form>*/
/* */
/*                     <!--★商品説明★-->*/
/*                     <p id="detail_not_stock_box__description_detail" class="item_comment">{{ Product.description_detail|raw|nl2br }}</p>*/
/* */
/*                 </div>*/
/*                 <!-- /.item_detail -->*/
/* */
/*             </section>*/
/*             <!--詳細ここまで-->*/
/*         </div>*/
/* */
/*         {# フリーエリア #}*/
/*         {% if Product.freearea %}*/
/*         <div id="sub_area" class="row">*/
/*             <div class="col-sm-10 col-sm-offset-1">*/
/*                 <div id="detail_free_box__freearea" class="freearea">{{ include(template_from_string(Product.freearea)) }}</div>*/
/*             </div>*/
/*         </div>*/
/*         {% endif %}*/
/*     </div>*/
/*     <!-- ▲item_detail▲ -->*/
/* {% endblock %}*/
/* */
