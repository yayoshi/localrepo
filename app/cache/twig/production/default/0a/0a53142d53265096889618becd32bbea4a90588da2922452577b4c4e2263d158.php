<?php

/* __string_template__e8fef236e1179057ae6ecb99c0e71f49924a2c5fcc4d19fb080d03d5e799c9d1 */
class __TwigTemplate_b502728dc19ffe29ccec8386f72f3cc30de626260d8587b669ec1588e2145448 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__e8fef236e1179057ae6ecb99c0e71f49924a2c5fcc4d19fb080d03d5e799c9d1", 22);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    public function block_javascript($context, array $blocks = array())
    {
        // line 25
        echo "<script>
\$(function() {

    \$('.delivery').on('change', function() {
        \$('#shopping-form').attr('action', '";
        // line 29
        echo $this->env->getExtension('eccube')->getUrl("shopping_delivery");
        echo "').submit();
    });

    \$('.payment').on('change', function() {
        \$('#shopping-form').attr('action', '";
        // line 33
        echo $this->env->getExtension('eccube')->getUrl("shopping_payment");
        echo "').submit();
    });

    \$('.btn-shipping').click(function() {
        \$('#shopping-form').attr('action', \$(this).attr('href')).submit();
        \$('#shopping-form').attr('action', '";
        // line 38
        echo $this->env->getExtension('eccube')->getUrl("shopping_confirm");
        echo "');
        return false;
    });

    \$('.btn-shipping-edit').click(function() {
        \$('#shopping-form').attr('action', \$(this).attr('href')).submit();
        \$('#shopping-form').attr('action', '";
        // line 44
        echo $this->env->getExtension('eccube')->getUrl("shopping_confirm");
        echo "');
        return false;
    });

    \$('.btn-shipping-multiple').click(function() {
        \$('#shopping-form').attr('action', \$(this).attr('href')).submit();
        \$('#shopping-form').attr('action', '";
        // line 50
        echo $this->env->getExtension('eccube')->getUrl("shopping_confirm");
        echo "');
        return false;
    });

    ";
        // line 54
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") == false)) {
            // line 55
            echo "        var ref = [];
        var name = [];
        var input = [];
        var customerin = [];

        \$('#customer').click(function() {
            // ref = \$('.customer-name01');
            var edit = \$('.customer-edit');
            var hidden = \$('.customer-in');

            \$(edit).each(function(index) {
                ref[index] = \$(this);
            });
            \$(hidden).each(function(index) {
                customerin[index] = \$(this);
            });
            \$(ref).each(function(index) {
                name[index] = \$(this).text();
            });
            \$(name).each(function(index) {
                input[index] = \$('<input id=\"edit' + index + '\" type=\"text\" />').val(name[index]);
            });
            \$(input).each(function(index) {
                ref[index].empty().append(input[index]);
            });

            \$('#customer').prop(\"disabled\", true);
            \$('.mod-button').show();
        });

        \$('#customer-ok').click(function() {
            \$(ref).each(function(index) {
                var nameAfter = input[index].val();
                ref[index].empty().text(nameAfter);
                customerin[index].val(nameAfter);
                input[index].remove();
            });

            var postData = {};
            \$('.customer-in').each(function() {
                postData[\$(this).attr('name')] = \$(this).val();
            });

            \$.ajax({
                url: \"";
            // line 99
            echo $this->env->getExtension('eccube')->getUrl("shopping_customer");
            echo "\",
                type: 'POST',
                data: postData,
                dataType: 'json',
            }).done(function(){
            }).fail(function(){
                alert('更新に失敗しました。入力内容を確認してください。');
                \$(ref).each(function(index) {
                    ref[index].empty().text(name[index]);
                    input[index].remove();
                });
            });

            \$('#customer').prop(\"disabled\", false);
            \$('.mod-button').hide();
        });

        \$('#customer-cancel').click(function() {
            \$(ref).each(function(index) {
                ref[index].empty().text(name[index]);
                input[index].remove();
            });

            \$('#customer').prop(\"disabled\", false);
            \$('.mod-button').hide();
        });
    ";
        }
        // line 126
        echo "
});
</script>
";
    }

    // line 131
    public function block_main($context, array $blocks = array())
    {
        // line 132
        echo "    <h1 class=\"page-heading\">ご注文内容のご確認</h1>
    <div id=\"confirm_wrap\" class=\"container-fluid\">
        <div id=\"confirm_flow_box\" class=\"row\">
            <div id=\"confirm_flow_box__body\" class=\"col-md-12\">
                ";
        // line 136
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 137
            echo "                <div id=\"confirm_flow_box__flow_state\" class=\"flowline step3\">
                ";
        } else {
            // line 139
            echo "                <div id=\"confirm_flow_box__flow_state\" class=\"flowline step4\">
                ";
        }
        // line 141
        echo "                    <ul id=\"confirm_flow_box__flow_state_list\" class=\"clearfix\">
                    <li><span class=\"flow_number\">1</span><br>カートの商品</li>
                    ";
        // line 143
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 144
            echo "                        <li class=\"active\"><span class=\"flow_number\">2</span><br>ご注文内容確認</li>
                        <li><span class=\"flow_number\">3</span><br>完了</li>
                    ";
        } else {
            // line 147
            echo "                        <li><span class=\"flow_number\">2</span><br>お客様情報</li>
                        <li class=\"active\"><span class=\"flow_number\">3</span><br>ご注文内容確認</li>
                        <li><span class=\"flow_number\">4</span><br>完了</li>
                    ";
        }
        // line 151
        echo "                    </ul>
                </div>
                ";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "eccube.front.request.error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 154
            echo "                    <div id=\"confirm_flow_box__message\" class=\"message\">
                        <p class=\"errormsg bg-danger\">
                            <svg class=\"cb cb-warning\"><use xlink:href=\"#cb-warning\" /></svg>";
            // line 156
            echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["error"]), "html", null, true));
            echo "
                        </p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "            </div><!-- /.col -->
        </div><!-- /.row -->
        <form id=\"shopping-form\" method=\"post\" action=\"";
        // line 162
        echo $this->env->getExtension('eccube')->getUrl("shopping_confirm");
        echo "\">
            ";
        // line 163
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
            <div id=\"shopping_confirm\" class=\"row\">
                <div id=\"confirm_main\" class=\"col-sm-8\">
                    <div id=\"cart_box\" class=\"cart_item table\">
                        <div id=\"cart_box_list\" class=\"tbody\">
                            ";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "orderDetails", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["orderDetail"]) {
            // line 169
            echo "                            <div id=\"cart_box_list__item_box--";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_box tr\">
                                <div id=\"cart_box_list__item--";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"td table\">
                                    <div id=\"cart_box_list__photo--";
            // line 171
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_photo\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getNoImageProduct($this->getAttribute($this->getAttribute($context["orderDetail"], "product", array()), "MainListImage", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["orderDetail"], "productName", array()), "html", null, true);
            echo "\" /></div>
                                    <dl id=\"cart_box_list__detail--";
            // line 172
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_detail\">
                                        <dt id=\"cart_box_list__name--";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_name text-default\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["orderDetail"], "productName", array()), "html", null, true);
            echo "</dt>
                                        <dd id=\"cart_box_list__class_category--";
            // line 174
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_pattern small\">
                                            ";
            // line 175
            if ($this->getAttribute($this->getAttribute($context["orderDetail"], "productClass", array()), "classCategory1", array())) {
                // line 176
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetail"], "productClass", array()), "classCategory1", array()), "className", array()), "html", null, true);
                echo "：";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["orderDetail"], "productClass", array()), "classCategory1", array()), "html", null, true);
                echo "
                                            ";
            }
            // line 178
            echo "                                            ";
            if ($this->getAttribute($this->getAttribute($context["orderDetail"], "productClass", array()), "classCategory2", array())) {
                // line 179
                echo "                                                <br>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetail"], "productClass", array()), "classCategory2", array()), "className", array()), "html", null, true);
                echo "：";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["orderDetail"], "productClass", array()), "classCategory2", array()), "html", null, true);
                echo "
                                            ";
            }
            // line 181
            echo "                                        </dd>
                                        <dd id=\"cart_box_list__price--";
            // line 182
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_price\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute($context["orderDetail"], "priceIncTax", array())), "html", null, true);
            echo " × ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["orderDetail"], "quantity", array())), "html", null, true);
            echo "</dd>
                                        <dd id=\"cart_box_list__subtotal--";
            // line 183
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_subtotal\">小計：";
            echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute($context["orderDetail"], "totalPrice", array())), "html", null, true);
            echo "</dd>
                                    </dl>
                                </div>
                            </div><!--/item_box-->
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderDetail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo "                        </div>
                    </div><!--/cart_item-->
                    <p><a id=\"confirm_box__quantity_edit_button\" href=\"";
        // line 190
        echo $this->env->getExtension('eccube')->getUrl("cart");
        echo "\" class=\"btn btn-default btn-sm\">数量を変更または削除する</a></p>
                    <h2 class=\"heading02\">お客様情報</h2>
                    <div id=\"customer_detail_box\" class=\"column is-edit\">
                        <p id=\"customer_detail_box__customer_address\" class=\"address\"><span class=\"customer-edit customer-name01\">";
        // line 193
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "name01", array()), "html", null, true);
        echo "</span> <span class=\"customer-edit customer-name02\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "name02", array()), "html", null, true);
        echo "</span> 様<br>
                        〒<span class=\"customer-edit customer-zip01\">";
        // line 194
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "zip01", array()), "html", null, true);
        echo "</span>-<span class=\"customer-edit customer-zip02\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "zip02", array()), "html", null, true);
        echo "</span> <span class=\"customer-edit customer-pref\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "pref", array()), "html", null, true);
        echo "</span><span class=\"customer-edit customer-addr01\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "addr01", array()), "html", null, true);
        echo "</span><span class=\"customer-edit customer-addr02\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "addr02", array()), "html", null, true);
        echo "</span><br>
                        <span class=\"customer-edit customer-tel01\">";
        // line 195
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "tel01", array()), "html", null, true);
        echo "</span>-<span class=\"customer-edit customer-tel02\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "tel02", array()), "html", null, true);
        echo "</span>-<span class=\"customer-edit customer-tel03\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "tel03", array()), "html", null, true);
        echo "</span></p>
                        ";
        // line 196
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") == false)) {
            // line 197
            echo "                            <div class=\"customer-edit customer-email\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "email", array()), "html", null, true);
            echo "</div>
                            <div class=\"customer-edit customer-company_name\">";
            // line 198
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "companyName", array()), "html", null, true);
            echo "</div>
                            <div class=\"mod-button\" style=\"display:none;\">
                                <span id=\"customer-ok\"><button type=\"button\" class=\"btn btn-default btn-sm\">OK</button></span>
                                <span id=\"customer-cancel\"><button type=\"button\" class=\"btn btn-default btn-sm\">キャンセル</button></span>
                            </div>
                            <p class=\"btn_edit\"><button type=\"button\" id=\"customer\" class=\"btn btn-default btn-sm\">変更</button></p>
                            <input type=\"hidden\" id=\"customer-name01\" class=\"customer-in\" name=\"customer_name01\" value=\"";
            // line 204
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "name01", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" id=\"customer-name02\" class=\"customer-in\" name=\"customer_name02\" value=\"";
            // line 205
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "name02", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" id=\"customer-zip01\" class=\"customer-in\" name=\"customer_zip01\" value=\"";
            // line 206
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "zip01", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" id=\"customer-zip02\" class=\"customer-in\" name=\"customer_zip02\" value=\"";
            // line 207
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "zip02", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" id=\"customer-pref\" class=\"customer-in\" name=\"customer_pref\" value=\"";
            // line 208
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "pref", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" id=\"customer-addr01\" class=\"customer-in\" name=\"customer_addr01\" value=\"";
            // line 209
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "addr01", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" id=\"customer-addr02\" class=\"customer-in\" name=\"customer_addr02\" value=\"";
            // line 210
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "addr02", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" id=\"customer-tel01\" class=\"customer-in\" name=\"customer_tel01\" value=\"";
            // line 211
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "tel01", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" id=\"customer-tel02\" class=\"customer-in\" name=\"customer_tel02\" value=\"";
            // line 212
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "tel02", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" id=\"customer-tel03\" class=\"customer-in\" name=\"customer_tel03\" value=\"";
            // line 213
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "tel03", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" id=\"customer-email\" class=\"customer-in\" name=\"customer_email\" value=\"";
            // line 214
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "email", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" id=\"customer-company-name\" class=\"customer-in\" name=\"customer_company_name\" value=\"";
            // line 215
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "companyName", array()), "html", null, true);
            echo "\">
                        ";
        }
        // line 217
        echo "                    </div>

                    <h2 class=\"heading02\">配送情報</h2>
                    ";
        // line 220
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "shippings", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["shipping"]) {
            // line 221
            echo "                        ";
            $context["idx"] = $this->getAttribute($context["loop"], "index0", array());
            // line 222
            echo "                        <div id=\"shipping_confirm_box--";
            echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : null), "html", null, true);
            echo "\" class=\"column is-edit\">
                            <h3>お届け先";
            // line 223
            if ($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "multiple", array())) {
                echo "(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo ")";
            }
            echo "</h3>
                            <div id=\"shipping_confirm_box__body--";
            // line 224
            echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : null), "html", null, true);
            echo "\" class=\"cart_item table\">
                                <div id=\"shipping_confirm_box__list--";
            // line 225
            echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : null), "html", null, true);
            echo "\" class=\"tbody\">
                                ";
            // line 226
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["shipping"], "shipmentItems", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["shipmentItem"]) {
                // line 227
                echo "                                    <div id=\"shipping_confirm_box__item--";
                echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : null), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["shipmentItem"], "id", array()), "html", null, true);
                echo "\" class=\"item_box tr\">
                                        <div id=\"shipping_box__body_inner--";
                // line 228
                echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : null), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["shipmentItem"], "id", array()), "html", null, true);
                echo "\" class=\"td table\">
                                            <div id=\"shipping_box__photo--";
                // line 229
                echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : null), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["shipmentItem"], "id", array()), "html", null, true);
                echo "\" class=\"item_photo\"><img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getNoImageProduct($this->getAttribute($this->getAttribute($context["shipmentItem"], "product", array()), "MainListImage", array())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["shipmentItem"], "productName", array()), "html", null, true);
                echo "\" /></div>
                                            <dl id=\"shipping_box__detail--";
                // line 230
                echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : null), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["shipmentItem"], "id", array()), "html", null, true);
                echo "\" class=\"item_detail\">
                                                <dt id=\"shipping_box__name--";
                // line 231
                echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : null), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["shipmentItem"], "id", array()), "html", null, true);
                echo "\" class=\"item_name text-default\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["shipmentItem"], "productName", array()), "html", null, true);
                echo "</dt>
                                                <dd id=\"shipping_box__class_category--";
                // line 232
                echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : null), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["shipmentItem"], "id", array()), "html", null, true);
                echo "\" class=\"item_pattern small\">
                                                    ";
                // line 233
                if ($this->getAttribute($this->getAttribute($context["shipmentItem"], "productClass", array()), "classCategory1", array())) {
                    // line 234
                    echo "                                                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItem"], "productClass", array()), "classCategory1", array()), "className", array()), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["shipmentItem"], "productClass", array()), "classCategory1", array()), "html", null, true);
                    echo "
                                                    ";
                }
                // line 236
                echo "                                                    ";
                if ($this->getAttribute($this->getAttribute($context["shipmentItem"], "productClass", array()), "classCategory2", array())) {
                    // line 237
                    echo "                                                        <br>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItem"], "productClass", array()), "classCategory2", array()), "className", array()), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["shipmentItem"], "productClass", array()), "classCategory2", array()), "html", null, true);
                    echo "
                                                    ";
                }
                // line 239
                echo "                                                </dd>
                                                <dd id=\"shipping_box__price--";
                // line 240
                echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : null), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["shipmentItem"], "id", array()), "html", null, true);
                echo "\" class=\"item_price\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute($context["shipmentItem"], "priceIncTax", array())), "html", null, true);
                echo " × ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["shipmentItem"], "quantity", array())), "html", null, true);
                echo "</dd>
                                                <dd id=\"shipping_box__subtotal--";
                // line 241
                echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : null), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["shipmentItem"], "id", array()), "html", null, true);
                echo "\" class=\"item_subtotal\">小計：";
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute($context["shipmentItem"], "totalPrice", array())), "html", null, true);
                echo "</dd>
                                            </dl>
                                        </div>
                                    </div><!--/item_box-->
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipmentItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 246
            echo "                                </div>
                            </div>

                            <p id=\"shopping_confirm_box__shipping_address_detail--";
            // line 249
            echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : null), "html", null, true);
            echo "\" class=\"address\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["shipping"], "name01", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["shipping"], "name02", array()), "html", null, true);
            echo " 様<br>
                            〒";
            // line 250
            echo twig_escape_filter($this->env, $this->getAttribute($context["shipping"], "zip01", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["shipping"], "zip02", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["shipping"], "pref", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["shipping"], "addr01", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["shipping"], "addr02", array()), "html", null, true);
            echo "<br>
                            ";
            // line 251
            echo twig_escape_filter($this->env, $this->getAttribute($context["shipping"], "tel01", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["shipping"], "tel02", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["shipping"], "tel03", array()), "html", null, true);
            echo "</p>
                            <div id=\"shopping_confirm_box__shipping_delivery--";
            // line 252
            echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : null), "html", null, true);
            echo "\" class=\"form-inline form-group\">
                                <label>配送方法</label>
                                ";
            // line 254
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "shippings", array()), (isset($context["idx"]) ? $context["idx"] : null), array(), "array"), "delivery", array()), 'widget', array("attr" => array("class" => "delivery")));
            echo "
                                ";
            // line 255
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "shippings", array()), (isset($context["idx"]) ? $context["idx"] : null), array(), "array"), "delivery", array()), 'errors');
            echo "
                            </div>

                            <div id=\"shopping_confirm_box__shipping_delivery_date_time--";
            // line 258
            echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : null), "html", null, true);
            echo "\" class=\"form-inline form-group\">
                                <label>お届け日</label>
                                ";
            // line 260
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "shippings", array()), (isset($context["idx"]) ? $context["idx"] : null), array(), "array"), "shippingDeliveryDate", array()), 'widget');
            echo "<br class=\"sp\">
                                <label>お届け時間</label>
                                ";
            // line 262
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "shippings", array()), (isset($context["idx"]) ? $context["idx"] : null), array(), "array"), "deliveryTime", array()), 'widget');
            echo "
                            </div>
                            ";
            // line 264
            if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
                // line 265
                echo "                            <p id=\"shopping_confirm_box__edit_button--";
                echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : null), "html", null, true);
                echo "\" class=\"btn_edit\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("shopping_shipping_change", array("id" => $this->getAttribute($context["shipping"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default btn-sm btn-shipping\">変更</a></p>
                            ";
            } else {
                // line 267
                echo "                            <p id=\"shopping_confirm_box__edit_button--";
                echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : null), "html", null, true);
                echo "\" class=\"btn_edit\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("shopping_shipping_edit_change", array("id" => $this->getAttribute($context["shipping"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default btn-sm btn-shipping-edit\">変更</a></p>
                            ";
            }
            // line 269
            echo "                        </div>
                        ";
            // line 270
            if (($this->getAttribute($context["loop"], "last", array()) == false)) {
                echo "<hr>";
            }
            // line 271
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 272
        echo "                    ";
        if ($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "optionMultipleShipping", array())) {
            // line 273
            echo "                        <hr>
                        <div><a id=\"shopping_confirm_box__button_edit_multiple\"  href=\"";
            // line 274
            echo $this->env->getExtension('eccube')->getUrl("shopping_shipping_multiple_change");
            echo "\" class=\"btn btn-default btn-sm btn-shipping-multiple\">お届け先を追加する</a></div>
                    ";
        }
        // line 276
        echo "
                    <h2 class=\"heading02\">お支払方法</h2>
                    <div id=\"payment_list\" class=\"column\">
                        <div id=\"payment_list__body\" class=\"form-group\">
                            <ul id=\"payment_list__list\" class=\"payment_list\">
                            ";
        // line 281
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "payment", array()));
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 282
            echo "                            <li>
                                ";
            // line 283
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("attr" => array("class" => "payment")));
            echo "
                                ";
            // line 284
            if ( !(null === $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "payment", array()), "vars", array()), "choices", array()), $context["key"], array(), "array"), "data", array()), "payment_image", array()))) {
                // line 285
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "payment", array()), "vars", array()), "choices", array()), $context["key"], array(), "array"), "data", array()), "payment_image", array()), "html", null, true);
                echo "\">
                                ";
            }
            // line 287
            echo "                            </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 289
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "payment", array()), 'errors');
        echo "
                            </ul>
                        </div>
                    </div>
                    <h2 class=\"heading02\">お問い合わせ欄</h2>
                    <div id=\"contact_message\" class=\"column\">
                        ";
        // line 295
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array()), 'widget', array("attr" => array("placeholder" => "お問い合わせ事項がございましたら、こちらにご入力ください。(3000文字まで)", "rows" => "6")));
        echo "
                        ";
        // line 296
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array()), 'errors');
        echo "
                    </div>
                    <div class=\"extra-form column\">
                        ";
        // line 299
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 300
            echo "                            ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 301
                echo "                                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'row');
                echo "
                            ";
            }
            // line 303
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 304
        echo "                    </div>
                </div><!-- /.col -->

                <div id=\"confirm_side\" class=\"col-sm-4\">
                    <div id=\"summary_box__total_box\" class=\"total_box\">
                        <dl id=\"summary_box__subtotal\">
                            <dt>小計</dt>
                            <dd class=\"text-primary\">";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "subtotal", array())), "html", null, true);
        echo "</dd>
                        </dl>
                        <dl id=\"summary_box__quantity_price\">
                            <dt>手数料</dt>
                            <dd>";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "charge", array())), "html", null, true);
        echo "</dd>
                        </dl>
                        <dl id=\"summary_box__shipping_price\">
                            <dt>送料</dt>
                            <dd>";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "deliveryFeeTotal", array())), "html", null, true);
        echo "</dd>
                        </dl>
                        ";
        // line 321
        if (($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "discount", array()) > 0)) {
            // line 322
            echo "                        <dl id=\"summary_box__discount_price\">
                            <dt>値引き</dt>
                            <dd>";
            // line 324
            echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter((0 - $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "discount", array()))), "html", null, true);
            echo "</dd>
                        </dl>
                        ";
        }
        // line 327
        echo "                        <div id=\"summary_box__result\" class=\"total_amount\">
                            <p id=\"summary_box__total_amount\" class=\"total_price\">合計 <strong class=\"text-primary\">";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "total", array())), "html", null, true);
        echo "<span class=\"small\">税込</span></strong></p>
                            <p id=\"summary_box__confirm_button\"><button id=\"order-button\" type=\"submit\" class=\"btn btn-primary btn-block prevention-btn prevention-mask\">注文する</button></p>
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__e8fef236e1179057ae6ecb99c0e71f49924a2c5fcc4d19fb080d03d5e799c9d1";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  813 => 328,  810 => 327,  804 => 324,  800 => 322,  798 => 321,  793 => 319,  786 => 315,  779 => 311,  770 => 304,  764 => 303,  758 => 301,  755 => 300,  751 => 299,  745 => 296,  741 => 295,  731 => 289,  724 => 287,  716 => 285,  714 => 284,  710 => 283,  707 => 282,  703 => 281,  696 => 276,  691 => 274,  688 => 273,  685 => 272,  671 => 271,  667 => 270,  664 => 269,  656 => 267,  648 => 265,  646 => 264,  641 => 262,  636 => 260,  631 => 258,  625 => 255,  621 => 254,  616 => 252,  608 => 251,  598 => 250,  590 => 249,  585 => 246,  570 => 241,  560 => 240,  557 => 239,  549 => 237,  546 => 236,  538 => 234,  536 => 233,  530 => 232,  522 => 231,  516 => 230,  504 => 229,  498 => 228,  491 => 227,  487 => 226,  483 => 225,  479 => 224,  471 => 223,  466 => 222,  463 => 221,  446 => 220,  441 => 217,  436 => 215,  432 => 214,  428 => 213,  424 => 212,  420 => 211,  416 => 210,  412 => 209,  408 => 208,  404 => 207,  400 => 206,  396 => 205,  392 => 204,  383 => 198,  378 => 197,  376 => 196,  368 => 195,  356 => 194,  350 => 193,  344 => 190,  340 => 188,  319 => 183,  311 => 182,  308 => 181,  300 => 179,  297 => 178,  289 => 176,  287 => 175,  283 => 174,  277 => 173,  273 => 172,  263 => 171,  259 => 170,  254 => 169,  237 => 168,  229 => 163,  225 => 162,  221 => 160,  211 => 156,  207 => 154,  203 => 153,  199 => 151,  193 => 147,  188 => 144,  186 => 143,  182 => 141,  178 => 139,  174 => 137,  172 => 136,  166 => 132,  163 => 131,  156 => 126,  126 => 99,  80 => 55,  78 => 54,  71 => 50,  62 => 44,  53 => 38,  45 => 33,  38 => 29,  32 => 25,  29 => 24,  11 => 22,);
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
/* {% block javascript %}*/
/* <script>*/
/* $(function() {*/
/* */
/*     $('.delivery').on('change', function() {*/
/*         $('#shopping-form').attr('action', '{{ url("shopping_delivery") }}').submit();*/
/*     });*/
/* */
/*     $('.payment').on('change', function() {*/
/*         $('#shopping-form').attr('action', '{{ url("shopping_payment") }}').submit();*/
/*     });*/
/* */
/*     $('.btn-shipping').click(function() {*/
/*         $('#shopping-form').attr('action', $(this).attr('href')).submit();*/
/*         $('#shopping-form').attr('action', '{{ url("shopping_confirm") }}');*/
/*         return false;*/
/*     });*/
/* */
/*     $('.btn-shipping-edit').click(function() {*/
/*         $('#shopping-form').attr('action', $(this).attr('href')).submit();*/
/*         $('#shopping-form').attr('action', '{{ url("shopping_confirm") }}');*/
/*         return false;*/
/*     });*/
/* */
/*     $('.btn-shipping-multiple').click(function() {*/
/*         $('#shopping-form').attr('action', $(this).attr('href')).submit();*/
/*         $('#shopping-form').attr('action', '{{ url("shopping_confirm") }}');*/
/*         return false;*/
/*     });*/
/* */
/*     {% if is_granted('ROLE_USER') == false %}*/
/*         var ref = [];*/
/*         var name = [];*/
/*         var input = [];*/
/*         var customerin = [];*/
/* */
/*         $('#customer').click(function() {*/
/*             // ref = $('.customer-name01');*/
/*             var edit = $('.customer-edit');*/
/*             var hidden = $('.customer-in');*/
/* */
/*             $(edit).each(function(index) {*/
/*                 ref[index] = $(this);*/
/*             });*/
/*             $(hidden).each(function(index) {*/
/*                 customerin[index] = $(this);*/
/*             });*/
/*             $(ref).each(function(index) {*/
/*                 name[index] = $(this).text();*/
/*             });*/
/*             $(name).each(function(index) {*/
/*                 input[index] = $('<input id="edit' + index + '" type="text" />').val(name[index]);*/
/*             });*/
/*             $(input).each(function(index) {*/
/*                 ref[index].empty().append(input[index]);*/
/*             });*/
/* */
/*             $('#customer').prop("disabled", true);*/
/*             $('.mod-button').show();*/
/*         });*/
/* */
/*         $('#customer-ok').click(function() {*/
/*             $(ref).each(function(index) {*/
/*                 var nameAfter = input[index].val();*/
/*                 ref[index].empty().text(nameAfter);*/
/*                 customerin[index].val(nameAfter);*/
/*                 input[index].remove();*/
/*             });*/
/* */
/*             var postData = {};*/
/*             $('.customer-in').each(function() {*/
/*                 postData[$(this).attr('name')] = $(this).val();*/
/*             });*/
/* */
/*             $.ajax({*/
/*                 url: "{{ url('shopping_customer') }}",*/
/*                 type: 'POST',*/
/*                 data: postData,*/
/*                 dataType: 'json',*/
/*             }).done(function(){*/
/*             }).fail(function(){*/
/*                 alert('更新に失敗しました。入力内容を確認してください。');*/
/*                 $(ref).each(function(index) {*/
/*                     ref[index].empty().text(name[index]);*/
/*                     input[index].remove();*/
/*                 });*/
/*             });*/
/* */
/*             $('#customer').prop("disabled", false);*/
/*             $('.mod-button').hide();*/
/*         });*/
/* */
/*         $('#customer-cancel').click(function() {*/
/*             $(ref).each(function(index) {*/
/*                 ref[index].empty().text(name[index]);*/
/*                 input[index].remove();*/
/*             });*/
/* */
/*             $('#customer').prop("disabled", false);*/
/*             $('.mod-button').hide();*/
/*         });*/
/*     {% endif %}*/
/* */
/* });*/
/* </script>*/
/* {% endblock javascript %}*/
/* */
/* {% block main %}*/
/*     <h1 class="page-heading">ご注文内容のご確認</h1>*/
/*     <div id="confirm_wrap" class="container-fluid">*/
/*         <div id="confirm_flow_box" class="row">*/
/*             <div id="confirm_flow_box__body" class="col-md-12">*/
/*                 {% if is_granted('ROLE_USER') %}*/
/*                 <div id="confirm_flow_box__flow_state" class="flowline step3">*/
/*                 {% else %}*/
/*                 <div id="confirm_flow_box__flow_state" class="flowline step4">*/
/*                 {% endif %}*/
/*                     <ul id="confirm_flow_box__flow_state_list" class="clearfix">*/
/*                     <li><span class="flow_number">1</span><br>カートの商品</li>*/
/*                     {% if is_granted('ROLE_USER') %}*/
/*                         <li class="active"><span class="flow_number">2</span><br>ご注文内容確認</li>*/
/*                         <li><span class="flow_number">3</span><br>完了</li>*/
/*                     {% else %}*/
/*                         <li><span class="flow_number">2</span><br>お客様情報</li>*/
/*                         <li class="active"><span class="flow_number">3</span><br>ご注文内容確認</li>*/
/*                         <li><span class="flow_number">4</span><br>完了</li>*/
/*                     {% endif %}*/
/*                     </ul>*/
/*                 </div>*/
/*                 {% for error in app.session.flashbag.get('eccube.front.request.error')  %}*/
/*                     <div id="confirm_flow_box__message" class="message">*/
/*                         <p class="errormsg bg-danger">*/
/*                             <svg class="cb cb-warning"><use xlink:href="#cb-warning" /></svg>{{ error|trans|nl2br }}*/
/*                         </p>*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             </div><!-- /.col -->*/
/*         </div><!-- /.row -->*/
/*         <form id="shopping-form" method="post" action="{{ url('shopping_confirm') }}">*/
/*             {{ form_widget(form._token) }}*/
/*             <div id="shopping_confirm" class="row">*/
/*                 <div id="confirm_main" class="col-sm-8">*/
/*                     <div id="cart_box" class="cart_item table">*/
/*                         <div id="cart_box_list" class="tbody">*/
/*                             {% for orderDetail in Order.orderDetails %}*/
/*                             <div id="cart_box_list__item_box--{{ loop.index }}" class="item_box tr">*/
/*                                 <div id="cart_box_list__item--{{ loop.index }}" class="td table">*/
/*                                     <div id="cart_box_list__photo--{{ loop.index }}" class="item_photo"><img src="{{ app.config.image_save_urlpath }}/{{ orderDetail.product.MainListImage|no_image_product }}" alt="{{ orderDetail.productName }}" /></div>*/
/*                                     <dl id="cart_box_list__detail--{{ loop.index }}" class="item_detail">*/
/*                                         <dt id="cart_box_list__name--{{ loop.index }}" class="item_name text-default">{{ orderDetail.productName }}</dt>*/
/*                                         <dd id="cart_box_list__class_category--{{ loop.index }}" class="item_pattern small">*/
/*                                             {% if orderDetail.productClass.classCategory1 %}*/
/*                                                 {{ orderDetail.productClass.classCategory1.className }}：{{ orderDetail.productClass.classCategory1 }}*/
/*                                             {% endif %}*/
/*                                             {% if orderDetail.productClass.classCategory2 %}*/
/*                                                 <br>{{ orderDetail.productClass.classCategory2.className }}：{{ orderDetail.productClass.classCategory2 }}*/
/*                                             {% endif %}*/
/*                                         </dd>*/
/*                                         <dd id="cart_box_list__price--{{ loop.index }}" class="item_price">{{ orderDetail.priceIncTax|price }} × {{ orderDetail.quantity|number_format }}</dd>*/
/*                                         <dd id="cart_box_list__subtotal--{{ loop.index }}" class="item_subtotal">小計：{{ orderDetail.totalPrice|price }}</dd>*/
/*                                     </dl>*/
/*                                 </div>*/
/*                             </div><!--/item_box-->*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     </div><!--/cart_item-->*/
/*                     <p><a id="confirm_box__quantity_edit_button" href="{{ url('cart') }}" class="btn btn-default btn-sm">数量を変更または削除する</a></p>*/
/*                     <h2 class="heading02">お客様情報</h2>*/
/*                     <div id="customer_detail_box" class="column is-edit">*/
/*                         <p id="customer_detail_box__customer_address" class="address"><span class="customer-edit customer-name01">{{ Order.name01 }}</span> <span class="customer-edit customer-name02">{{ Order.name02 }}</span> 様<br>*/
/*                         〒<span class="customer-edit customer-zip01">{{ Order.zip01 }}</span>-<span class="customer-edit customer-zip02">{{ Order.zip02 }}</span> <span class="customer-edit customer-pref">{{ Order.pref }}</span><span class="customer-edit customer-addr01">{{ Order.addr01 }}</span><span class="customer-edit customer-addr02">{{ Order.addr02 }}</span><br>*/
/*                         <span class="customer-edit customer-tel01">{{ Order.tel01 }}</span>-<span class="customer-edit customer-tel02">{{ Order.tel02 }}</span>-<span class="customer-edit customer-tel03">{{ Order.tel03 }}</span></p>*/
/*                         {% if is_granted('ROLE_USER') == false %}*/
/*                             <div class="customer-edit customer-email">{{ Order.email }}</div>*/
/*                             <div class="customer-edit customer-company_name">{{ Order.companyName }}</div>*/
/*                             <div class="mod-button" style="display:none;">*/
/*                                 <span id="customer-ok"><button type="button" class="btn btn-default btn-sm">OK</button></span>*/
/*                                 <span id="customer-cancel"><button type="button" class="btn btn-default btn-sm">キャンセル</button></span>*/
/*                             </div>*/
/*                             <p class="btn_edit"><button type="button" id="customer" class="btn btn-default btn-sm">変更</button></p>*/
/*                             <input type="hidden" id="customer-name01" class="customer-in" name="customer_name01" value="{{ Order.name01 }}">*/
/*                             <input type="hidden" id="customer-name02" class="customer-in" name="customer_name02" value="{{ Order.name02 }}">*/
/*                             <input type="hidden" id="customer-zip01" class="customer-in" name="customer_zip01" value="{{ Order.zip01 }}">*/
/*                             <input type="hidden" id="customer-zip02" class="customer-in" name="customer_zip02" value="{{ Order.zip02 }}">*/
/*                             <input type="hidden" id="customer-pref" class="customer-in" name="customer_pref" value="{{ Order.pref }}">*/
/*                             <input type="hidden" id="customer-addr01" class="customer-in" name="customer_addr01" value="{{ Order.addr01 }}">*/
/*                             <input type="hidden" id="customer-addr02" class="customer-in" name="customer_addr02" value="{{ Order.addr02 }}">*/
/*                             <input type="hidden" id="customer-tel01" class="customer-in" name="customer_tel01" value="{{ Order.tel01 }}">*/
/*                             <input type="hidden" id="customer-tel02" class="customer-in" name="customer_tel02" value="{{ Order.tel02 }}">*/
/*                             <input type="hidden" id="customer-tel03" class="customer-in" name="customer_tel03" value="{{ Order.tel03 }}">*/
/*                             <input type="hidden" id="customer-email" class="customer-in" name="customer_email" value="{{ Order.email }}">*/
/*                             <input type="hidden" id="customer-company-name" class="customer-in" name="customer_company_name" value="{{ Order.companyName }}">*/
/*                         {% endif %}*/
/*                     </div>*/
/* */
/*                     <h2 class="heading02">配送情報</h2>*/
/*                     {% for shipping in Order.shippings %}*/
/*                         {% set idx = loop.index0 %}*/
/*                         <div id="shipping_confirm_box--{{ idx }}" class="column is-edit">*/
/*                             <h3>お届け先{% if Order.multiple %}({{ loop.index }}){% endif %}</h3>*/
/*                             <div id="shipping_confirm_box__body--{{ idx }}" class="cart_item table">*/
/*                                 <div id="shipping_confirm_box__list--{{ idx }}" class="tbody">*/
/*                                 {% for shipmentItem in shipping.shipmentItems %}*/
/*                                     <div id="shipping_confirm_box__item--{{ idx }}_{{ shipmentItem.id }}" class="item_box tr">*/
/*                                         <div id="shipping_box__body_inner--{{ idx }}_{{ shipmentItem.id }}" class="td table">*/
/*                                             <div id="shipping_box__photo--{{ idx }}_{{ shipmentItem.id }}" class="item_photo"><img src="{{ app.config.image_save_urlpath }}/{{ shipmentItem.product.MainListImage|no_image_product }}" alt="{{ shipmentItem.productName }}" /></div>*/
/*                                             <dl id="shipping_box__detail--{{ idx }}_{{ shipmentItem.id }}" class="item_detail">*/
/*                                                 <dt id="shipping_box__name--{{ idx }}_{{ shipmentItem.id }}" class="item_name text-default">{{ shipmentItem.productName }}</dt>*/
/*                                                 <dd id="shipping_box__class_category--{{ idx }}_{{ shipmentItem.id }}" class="item_pattern small">*/
/*                                                     {% if shipmentItem.productClass.classCategory1 %}*/
/*                                                         {{ shipmentItem.productClass.classCategory1.className }}：{{ shipmentItem.productClass.classCategory1 }}*/
/*                                                     {% endif %}*/
/*                                                     {% if shipmentItem.productClass.classCategory2 %}*/
/*                                                         <br>{{ shipmentItem.productClass.classCategory2.className }}：{{ shipmentItem.productClass.classCategory2 }}*/
/*                                                     {% endif %}*/
/*                                                 </dd>*/
/*                                                 <dd id="shipping_box__price--{{ idx }}_{{ shipmentItem.id }}" class="item_price">{{ shipmentItem.priceIncTax|price }} × {{ shipmentItem.quantity|number_format }}</dd>*/
/*                                                 <dd id="shipping_box__subtotal--{{ idx }}_{{ shipmentItem.id }}" class="item_subtotal">小計：{{ shipmentItem.totalPrice|price }}</dd>*/
/*                                             </dl>*/
/*                                         </div>*/
/*                                     </div><!--/item_box-->*/
/*                                 {% endfor %}*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <p id="shopping_confirm_box__shipping_address_detail--{{ idx }}" class="address">{{ shipping.name01 }} {{ shipping.name02 }} 様<br>*/
/*                             〒{{ shipping.zip01 }}-{{ shipping.zip02 }} {{ shipping.pref }}{{ shipping.addr01 }}{{ shipping.addr02 }}<br>*/
/*                             {{ shipping.tel01 }}-{{ shipping.tel02 }}-{{ shipping.tel03 }}</p>*/
/*                             <div id="shopping_confirm_box__shipping_delivery--{{ idx }}" class="form-inline form-group">*/
/*                                 <label>配送方法</label>*/
/*                                 {{ form_widget(form.shippings[idx].delivery, {'attr': {'class': 'delivery'}}) }}*/
/*                                 {{ form_errors(form.shippings[idx].delivery) }}*/
/*                             </div>*/
/* */
/*                             <div id="shopping_confirm_box__shipping_delivery_date_time--{{ idx }}" class="form-inline form-group">*/
/*                                 <label>お届け日</label>*/
/*                                 {{ form_widget(form.shippings[idx].shippingDeliveryDate) }}<br class="sp">*/
/*                                 <label>お届け時間</label>*/
/*                                 {{ form_widget(form.shippings[idx].deliveryTime) }}*/
/*                             </div>*/
/*                             {% if is_granted('ROLE_USER') %}*/
/*                             <p id="shopping_confirm_box__edit_button--{{ idx }}" class="btn_edit"><a href="{{ url('shopping_shipping_change', {'id': shipping.id}) }}" class="btn btn-default btn-sm btn-shipping">変更</a></p>*/
/*                             {% else %}*/
/*                             <p id="shopping_confirm_box__edit_button--{{ idx }}" class="btn_edit"><a href="{{ url('shopping_shipping_edit_change', {'id': shipping.id}) }}" class="btn btn-default btn-sm btn-shipping-edit">変更</a></p>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                         {% if loop.last == false%}<hr>{% endif %}*/
/*                     {% endfor %}*/
/*                     {% if BaseInfo.optionMultipleShipping %}*/
/*                         <hr>*/
/*                         <div><a id="shopping_confirm_box__button_edit_multiple"  href="{{ url('shopping_shipping_multiple_change') }}" class="btn btn-default btn-sm btn-shipping-multiple">お届け先を追加する</a></div>*/
/*                     {% endif %}*/
/* */
/*                     <h2 class="heading02">お支払方法</h2>*/
/*                     <div id="payment_list" class="column">*/
/*                         <div id="payment_list__body" class="form-group">*/
/*                             <ul id="payment_list__list" class="payment_list">*/
/*                             {% for key, child in form.payment %}*/
/*                             <li>*/
/*                                 {{ form_widget(child, {'attr': {'class': 'payment' }}) }}*/
/*                                 {% if form.payment.vars.choices[key].data.payment_image is not null %}*/
/*                                 <img src="{{ app.config.image_save_urlpath }}/{{ form.payment.vars.choices[key].data.payment_image }}">*/
/*                                 {% endif %}*/
/*                             </li>*/
/*                             {% endfor %}*/
/*                             {{ form_errors(form.payment) }}*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                     <h2 class="heading02">お問い合わせ欄</h2>*/
/*                     <div id="contact_message" class="column">*/
/*                         {{ form_widget(form.message, {'attr': {'placeholder': 'お問い合わせ事項がございましたら、こちらにご入力ください。(3000文字まで)', 'rows': '6'}}) }}*/
/*                         {{ form_errors(form.message) }}*/
/*                     </div>*/
/*                     <div class="extra-form column">*/
/*                         {% for f in form.getIterator %}*/
/*                             {% if f.vars.name matches '[^plg*]' %}*/
/*                                 {{ form_row(f) }}*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                 </div><!-- /.col -->*/
/* */
/*                 <div id="confirm_side" class="col-sm-4">*/
/*                     <div id="summary_box__total_box" class="total_box">*/
/*                         <dl id="summary_box__subtotal">*/
/*                             <dt>小計</dt>*/
/*                             <dd class="text-primary">{{ Order.subtotal|price }}</dd>*/
/*                         </dl>*/
/*                         <dl id="summary_box__quantity_price">*/
/*                             <dt>手数料</dt>*/
/*                             <dd>{{ Order.charge|price }}</dd>*/
/*                         </dl>*/
/*                         <dl id="summary_box__shipping_price">*/
/*                             <dt>送料</dt>*/
/*                             <dd>{{ Order.deliveryFeeTotal|price }}</dd>*/
/*                         </dl>*/
/*                         {% if Order.discount > 0 %}*/
/*                         <dl id="summary_box__discount_price">*/
/*                             <dt>値引き</dt>*/
/*                             <dd>{{ (0 - Order.discount)|price}}</dd>*/
/*                         </dl>*/
/*                         {% endif %}*/
/*                         <div id="summary_box__result" class="total_amount">*/
/*                             <p id="summary_box__total_amount" class="total_price">合計 <strong class="text-primary">{{ Order.total|price }}<span class="small">税込</span></strong></p>*/
/*                             <p id="summary_box__confirm_button"><button id="order-button" type="submit" class="btn btn-primary btn-block prevention-btn prevention-mask">注文する</button></p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div><!-- /.row -->*/
/*         </form>*/
/*     </div>*/
/* {% endblock %}*/
