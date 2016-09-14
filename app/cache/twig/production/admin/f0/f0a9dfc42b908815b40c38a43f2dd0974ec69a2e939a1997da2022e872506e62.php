<?php

/* __string_template__a9dda223ed8297cb6a7a3d0fd34e65de284442370e5e55023b84a7b6744863d0 */
class __TwigTemplate_df9cfb98b7bfb4df02c1817bac293103ac14ea940f84bb06c0340397079ce9d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__a9dda223ed8297cb6a7a3d0fd34e65de284442370e5e55023b84a7b6744863d0", 22);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
            'javascript' => array($this, 'block_javascript'),
            'main' => array($this, 'block_main'),
            '__internal_42bdd0d958576af125265e45a623f18c1b2b54446929963c077b87fed4d969ca' => array($this, 'block___internal_42bdd0d958576af125265e45a623f18c1b2b54446929963c077b87fed4d969ca'),
            '__internal_ce3a2e1a9fbe1edb1935b66fe78d698301de9c999000282350ed18da828559a8' => array($this, 'block___internal_ce3a2e1a9fbe1edb1935b66fe78d698301de9c999000282350ed18da828559a8'),
            'modal' => array($this, 'block_modal'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 24
        $context["menus"] = array(0 => "order", 1 => "order_edit");
        // line 29
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 30
        $this->env->getExtension('form')->renderer->setTheme((isset($context["searchCustomerModalForm"]) ? $context["searchCustomerModalForm"] : null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 31
        $this->env->getExtension('form')->renderer->setTheme((isset($context["searchProductModalForm"]) ? $context["searchProductModalForm"] : null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        echo "受注管理";
    }

    // line 27
    public function block_sub_title($context, array $blocks = array())
    {
        echo "受注登録・編集";
    }

    // line 33
    public function block_javascript($context, array $blocks = array())
    {
        // line 34
        echo "<script src=\"//ajaxzip3.github.io/ajaxzip3.js\" charset=\"UTF-8\"></script>
<script>
\$(function() {
    \$('#zip-search').click(function() {
        AjaxZip3.zip2addr('order[zip][zip01]', 'order[zip][zip02]', 'order[address][pref]', 'order[address][addr01]');
    });

    // 注文者情報をコピー
    \$('.copyCustomerToShippingButton').on('click', function() {
        var data = \$(this).data();
        var idx = data.idx;
        \$('#order_Shippings_' + idx + '_name_name01').val(\$('#order_name_name01').val());
        \$('#order_Shippings_' + idx + '_name_name02').val(\$('#order_name_name02').val());
        \$('#order_Shippings_' + idx + '_kana_kana01').val(\$('#order_kana_kana01').val());
        \$('#order_Shippings_' + idx + '_kana_kana02').val(\$('#order_kana_kana02').val());
        \$('#order_Shippings_' + idx + '_zip_zip01').val(\$('#order_zip_zip01').val());
        \$('#order_Shippings_' + idx + '_zip_zip02').val(\$('#order_zip_zip02').val());
        \$('#order_Shippings_' + idx + '_address_pref').val(\$('#order_address_pref').val());
        \$('#order_Shippings_' + idx + '_address_addr01').val(\$('#order_address_addr01').val());
        \$('#order_Shippings_' + idx + '_address_addr02').val(\$('#order_address_addr02').val());
        \$('#order_Shippings_' + idx + '_email').val(\$('#order_email').val());
        \$('#order_Shippings_' + idx + '_tel_tel01').val(\$('#order_tel_tel01').val());
        \$('#order_Shippings_' + idx + '_tel_tel02').val(\$('#order_tel_tel02').val());
        \$('#order_Shippings_' + idx + '_tel_tel03').val(\$('#order_tel_tel03').val());
        \$('#order_Shippings_' + idx + '_fax_fax01').val(\$('#order_fax_fax01').val());
        \$('#order_Shippings_' + idx + '_fax_fax02').val(\$('#order_fax_fax02').val());
        \$('#order_Shippings_' + idx + '_fax_fax03').val(\$('#order_fax_fax03').val());
        \$('#order_Shippings_' + idx + '_company_name').val(\$('#order_company_name').val());
    });
    // 会員検索
    \$('#searchCustomerModalButton').on('click', function() {
        var tbody = \$('#searchCustomerModalList tbody');
        tbody.children().remove();
        \$.ajax({
            type: 'POST',
            data: { 'search_word' : \$('#admin_search_customer_multi').val() },
            url: '";
        // line 70
        echo $this->env->getExtension('eccube')->getUrl("admin_order_search_customer");
        echo "',
            success: function(data) {
                for (var i = 0; i < data.length; i++) {
                    // モーダルウィンドウ内に結果を出力.
                    var tr = \$('<tr></tr>');
                    var id = \$('<td>' + data[i]['id'] + '</td>');
                    var name = \$('<td>' + data[i]['name'] + '</td>');
                    var tel = \$('<td>' + data[i]['tel'] + '</td>');
                    var select = \$('<td data-customer=\"' + data[i]['id'] + '\"><button type=\"button\" class=\"btn btn-default btn-sm\">決定</button></td>');
                    tr.append(id);
                    tr.append(name);
                    tr.append(tel);
                    tr.append(select);
                    tbody.append(tr);

                    // 決定ボタンに検索イベントを設定.
                    select.on('click', function() {
                        \$.ajax({
                            type: 'POST',
                            data: { 'id' : this.dataset.customer },
                            url: '";
        // line 90
        echo $this->env->getExtension('eccube')->getUrl("admin_order_search_customer_by_id");
        echo "',
                            success: function(data) {
                                // 顧客情報をフォームにセットする.
                                \$('#order_CustomerId').html(data['id']);
                                \$('#order_Customer').val(data['id']);
                                \$('#order_name_name01').val(data['name01']);
                                \$('#order_name_name02').val(data['name02']);
                                \$('#order_kana_kana01').val(data['kana01']);
                                \$('#order_kana_kana02').val(data['kana02']);
                                \$('#order_zip_zip01').val(data['zip01']);
                                \$('#order_zip_zip02').val(data['zip02']);
                                \$('#order_address_pref').val(data['pref']);
                                \$('#order_address_addr01').val(data['addr01']);
                                \$('#order_address_addr02').val(data['addr02']);
                                \$('#order_email').val(data['email']);
                                \$('#order_tel_tel01').val(data['tel01']);
                                \$('#order_tel_tel02').val(data['tel02']);
                                \$('#order_tel_tel03').val(data['tel03']);
                                \$('#order_fax_fax01').val(data['fax01']);
                                \$('#order_fax_fax02').val(data['fax02']);
                                \$('#order_fax_fax03').val(data['fax03']);
                                \$('#order_company_name').val(data['company_name']);
                                // モーダルを閉じる.
                                \$('#searchCustomerModal').modal('hide');
                            },
                            error: function() {
                                alert('search customer(by id) failed.');
                            }
                        });
                     });
                }
            },
            error: function() {
                alert('search customer failed.');
            }
        });
    });
    \$('#searchProductModal').on('show.bs.modal', function (event) {
        var button = \$(event.relatedTarget);
        var idx = button.data('idx');
        var modal = \$(this);
        modal.find('#searchProductModalButton').attr('data-idx', idx);
    });


    // 商品検索
    \$('#searchProductModalButton').on('click', function() {
        var tbody = \$('#searchProductModalList tbody');
        tbody.children().remove();

        var data = \$(this).data();
        shipment_idx = data.idx;
        shipmentItem_idx = \$('.shipment_item_idx' + shipment_idx).length;

        \$.ajax({
            type: 'POST',
            dataType: 'html',
            data: {
                'id' : \$('#admin_search_product_id').val(),
                'category_id' : \$('#admin_search_product_category_id').val()
            },
            url: '";
        // line 151
        echo $this->env->getExtension('eccube')->getUrl("admin_order_search_product");
        echo "',
            success: function(data) {
                // モーダルに結果を書き出し.
                \$('#searchProductModalList').html(data);
            },
            error: function() {
                alert('search product failed.');
            }
        });
    });

    // 受注明細行の行数カウンタ.
    // 受注登録・編集画面上でグローバルな変数.
    // search_product.twig/order_detail_prototype.twigで利用しています.
    order_details_count = '";
        // line 165
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "OrderDetails", array())), "html", null, true);
        echo "';

    // 項目数が多く、入力している項目によってEnter押下時に期待する動作が変わるので、いったん禁止
    \$(\"input\").on(\"keydown\", function(e) {
        if ((e.which && e.which === 13) || (e.keyCode && e.keyCode === 13)) {
            return false;
        } else {
            return true;
        }
    });

    \$(\".delete-item\").on(\"click\", function(){
        \$(this).parents(\".item_box\").remove();
        order_details_count--;

        onChangeOrderDetailCount(order_details_count);
    });

    var onChangeOrderDetailCount = function(order_details_count) {
        if (order_details_count == 1) {
            \$(\".delete-item\").attr(\"disabled\", \"disabled\");
        } else {
            \$(\".delete-item\").removeAttr(\"disabled\");
        }
    };

    onChangeOrderDetailCount();


    // 配送業者選択時にお届け時間を設定
    var times = ";
        // line 195
        echo (isset($context["shippingDeliveryTimes"]) ? $context["shippingDeliveryTimes"] : null);
        echo ";

    \$('.shipping-delivery').change(function(){
        var data = \$(this).data();
        setShippingDeliveryTime(\$(this).val(), data.idx);
    });

    function setShippingDeliveryTime(val, idx){
        var \$shippingDeliveryTime = \$('.shipping-delivery-time[data-idx=\"' + idx + '\"]');
        \$shippingDeliveryTime.find('option').remove();
        \$shippingDeliveryTime.append(\$('<option></option>').val('').text('指定なし'));

        if (typeof(times[val]) !== 'undefined') {
            for (var key in times[val]){
                text = times[val][key];
                \$shippingDeliveryTime.append(\$('<option></option>')
                    .val(key)
                    .text(text));
            }
        }
    }

});
var setModeAndSubmit = function(mode, keyname, keyid) {
    document.form1.modal.value = mode;
    if(keyname !== undefined && keyname !== \"\" && keyid !== undefined && keyid !== \"\") {
        document.form1[keyname].value = keyid;
    }
    document.form1.submit();
};

</script>
";
    }

    // line 229
    public function block_main($context, array $blocks = array())
    {
        // line 230
        echo "<div class=\"row\" id=\"aside_wrap\">
    <form name=\"form1\" method=\"post\" action=\"?\">
    <input type=\"hidden\" name=\"modal\" value=\"\">
    ";
        // line 233
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
        <div id=\"detail_wrap\" class=\"col-md-12\">
            <div class=\"col_inner\">
                <div id=\"number_info_box\" class=\"box no-header\">
                    <div id=\"number_info_box__body\" class=\"box-body\">
                        <div class=\"row\">
                            <div id=\"number_info_box__order_status\" class=\"col-sm-4\">
                                <h4>注文番号 <span class=\"number\">";
        // line 240
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "id", array()), "html", null, true);
        echo "</span></h4>
                                <div class=\"form-group\">
                                    ";
        // line 242
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "OrderStatus", array()), 'widget');
        echo "
                                    ";
        // line 243
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "OrderStatus", array()), 'errors');
        echo "
                                </div>
                                <div id=\"number_info_box__order_status_info\" class=\"small text-danger\">キャンセルの場合は在庫数を手動で戻してください</div>
                            </div>
                            <div class=\"col-sm-6 col-sm-offset-2\">
                                <p id=\"number_info_box__order_date\"><svg class=\"cb cb-clock\"> <use xlink:href=\"#cb-clock\" /></svg>受注日：";
        // line 248
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "order_date", array())) ? (twig_date_format_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "order_date", array()), "Y/m/d H:i:s")) : ("")), "html", null, true);
        echo "</p>
                                <p id=\"number_info_box__payment_date\"><svg class=\"cb cb-clock\"> <use xlink:href=\"#cb-clock\" /></svg>入金日：";
        // line 249
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "payment_date", array())) ? (twig_date_format_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "payment_date", array()), "Y/m/d H:i:s")) : ("")), "html", null, true);
        echo "</p>
                                <p id=\"number_info_box__commit_date\"><svg class=\"cb cb-clock\"> <use xlink:href=\"#cb-clock\" /></svg>発送日：";
        // line 250
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "commit_date", array())) ? (twig_date_format_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "commit_date", array()), "Y/m/d H:i:s")) : ("")), "html", null, true);
        echo "</p>
                                <p id=\"number_info_box__update_date\"><svg class=\"cb cb-clock\"> <use xlink:href=\"#cb-clock\" /></svg>更新日：";
        // line 251
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "update_date", array())) ? (twig_date_format_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "update_date", array()), "Y/m/d H:i:s")) : ("")), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
            <div id=\"customer_info_box\"  class=\"box accordion\">
                <div id=\"customer_info_box__toggle\" class=\"box-header toggle active\">
                    <h3 class=\"box-title\">注文者情報<svg class=\"cb cb-angle-down icon_down\"> <use xlink:href=\"#cb-angle-down\" /></svg></h3>
                </div><!-- /.box-header -->
                <div id=\"customer_info_box__body\" class=\"box-body accpanel\" style=\"display: block;\">
                    <div id=\"customer_info_list\" class=\"order_list form-horizontal\">
                        ";
        // line 263
        if (twig_test_empty($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "id", array()))) {
            // line 264
            echo "                        <div id=\"customer_info_list__button_search\" class=\"btn_area\">
                            <ul>
                                <li><a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#searchCustomerModal\">会員検索</a></li>
                            </ul>
                        </div>
                        ";
        }
        // line 270
        echo "                        <div id=\"customer_info_list__customer\" class=\"form-group\">
                            <div class=\"col-sm-3 col-lg-2\">会員ID</div>
                            <div class=\"col-sm-9 col-lg-10\">
                                <p id=\"order_CustomerId\">";
        // line 273
        echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Customer", array()), "vars", array()), "value", array()))) ? ("非会員") : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Customer", array()), "vars", array()), "value", array()))), "html", null, true);
        echo "</p>
                                ";
        // line 274
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Customer", array()), 'widget');
        echo "
                                ";
        // line 275
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Customer", array()), 'errors');
        echo "
                            </div>

                        </div>
                        <div id=\"customer_info_list__name\" class=\"form-group\">
                            ";
        // line 280
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'label');
        echo "
                            <div class=\"col-sm-9 col-lg-10 input_name form-inline\">
                                ";
        // line 282
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), "name01", array()), 'widget', array("attr" => array("placeholder" => "姓")));
        echo "
                                ";
        // line 283
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), "name02", array()), 'widget', array("attr" => array("placeholder" => "名")));
        echo "
                                ";
        // line 284
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), "name01", array()), 'errors');
        echo "
                                ";
        // line 285
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), "name02", array()), 'errors');
        echo "
                            </div>
                        </div>
                        <div id=\"customer_info_list__kana\" class=\"form-group\">
                            ";
        // line 289
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "kana", array()), 'label');
        echo "
                            <div class=\"col-sm-9 col-lg-10 input_name form-inline\">
                                ";
        // line 291
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "kana", array()), "kana01", array()), 'widget', array("attr" => array("placeholder" => "セイ")));
        echo "
                                ";
        // line 292
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "kana", array()), "kana02", array()), 'widget', array("attr" => array("placeholder" => "メイ")));
        echo "
                                ";
        // line 293
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "kana", array()), "kana01", array()), 'errors');
        echo "
                                ";
        // line 294
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "kana", array()), "kana02", array()), 'errors');
        echo "
                            </div>
                        </div>
                        ";
        // line 298
        echo "                        <div id=\"customer_info_list__address\" class=\"form-group\">
                            ";
        // line 299
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), 'label');
        echo "
                            <div id=\"customer_info_list__zip\" class=\"col-sm-9 col-lg-10 input_zip form-inline\">
                                〒";
        // line 301
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zip", array()), "zip01", array()), 'widget');
        echo "-";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zip", array()), "zip02", array()), 'widget');
        echo "
                                ";
        // line 302
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zip", array()), "zip01", array()), 'errors');
        echo "
                                ";
        // line 303
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zip", array()), "zip02", array()), 'errors');
        echo "
                                <span><button type=\"button\" id=\"zip-search\" class=\"btn btn-default btn-sm\">郵便番号から自動入力</button></span>
                            </div>
                        </div>
                        ";
        // line 308
        echo "                        <div class=\"form-group\">
                            <div id=\"customer_info_list__pref\" class=\"col-sm-offset-2 col-sm-9 col-lg-10 form-inline\">
                                ";
        // line 310
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "pref", array()), 'widget');
        echo "
                                ";
        // line 311
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "pref", array()), 'errors');
        echo "
                            </div>
                        </div>
                        ";
        // line 315
        echo "                        <div class=\"form-group\">
                            <div id=\"customer_info_list__addr01\" class=\"col-sm-offset-2 col-sm-9 col-lg-10\">
                                ";
        // line 317
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "addr01", array()), 'widget', array("attr" => array("placeholder" => "市区町村名（例：千代田区神田神保町）")));
        echo "
                                ";
        // line 318
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "addr01", array()), 'errors');
        echo "
                            </div>
                        </div>
                        ";
        // line 322
        echo "                        <div class=\"form-group\">
                            <div id=\"customer_info_list__addr02\" class=\"col-sm-offset-2 col-sm-9 col-lg-10\">
                                ";
        // line 324
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "addr02", array()), 'widget', array("attr" => array("placeholder" => "番地・ビル名（例：1-3-5）")));
        echo "
                                ";
        // line 325
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "addr02", array()), 'errors');
        echo "
                            </div>
                        </div>
                        ";
        // line 329
        echo "                        <div id=\"customer_info_list__email\" class=\"form-group\">
                            ";
        // line 330
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label');
        echo "
                            <div class=\"col-sm-9 col-lg-10\">
                                ";
        // line 332
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget');
        echo "
                                ";
        // line 333
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
        echo "
                            </div>
                        </div>
                        ";
        // line 337
        echo "                        <div id=\"customer_info_list__tel\" class=\"form-group\">
                            ";
        // line 338
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), 'label');
        echo "
                            <div class=\"col-sm-9 col-lg-10 input_tel form-inline\">
                                ";
        // line 340
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), "tel01", array()), 'widget');
        echo "-";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), "tel02", array()), 'widget');
        echo "-";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), "tel03", array()), 'widget');
        echo "
                                ";
        // line 341
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), "tel01", array()), 'errors');
        echo "
                                ";
        // line 342
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), "tel02", array()), 'errors');
        echo "
                                ";
        // line 343
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), "tel03", array()), 'errors');
        echo "
                            </div>
                        </div>
                        ";
        // line 347
        echo "                        <div id=\"customer_info_list__fax\" class=\"form-group\">
                            ";
        // line 348
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fax", array()), 'label');
        echo "
                            <div class=\"col-sm-9 col-lg-10 input_tel form-inline\">
                                ";
        // line 350
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fax", array()), "fax01", array()), 'widget');
        echo "-";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fax", array()), "fax02", array()), 'widget');
        echo "-";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fax", array()), "fax03", array()), 'widget');
        echo "
                                ";
        // line 351
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fax", array()), 'errors');
        echo "
                            </div>
                        </div>
                        ";
        // line 355
        echo "                        <div id=\"customer_info_list__company_name\" class=\"form-group\">
                            ";
        // line 356
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_name", array()), 'label');
        echo "
                            <div class=\"col-sm-9 col-lg-10\">
                                ";
        // line 358
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_name", array()), 'widget');
        echo "
                                ";
        // line 359
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_name", array()), 'errors');
        echo "
                            </div>
                        </div>
                        ";
        // line 363
        echo "                        <div id=\"customer_info_list__message\" class=\"form-group\">
                            ";
        // line 364
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array()), 'label');
        echo "
                            <div class=\"col-sm-9 col-lg-10\">
                                ";
        // line 366
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array()), 'widget', array("attr" => array("placeholder" => "3000文字まで入力可能")));
        echo "
                                ";
        // line 367
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array()), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

            <div id=\"product_info_box\" class=\"box accordion\">
                <div id=\"product_info_box__toggle\" class=\"box-header toggle active\">
                    <h3 class=\"box-title\">受注商品情報<svg class=\"cb cb-angle-down icon_down\"> <use xlink:href=\"#cb-angle-down\" /></svg></h3>
                </div><!-- /.box-header -->
                <div id=\"product_info_box__body\" class=\"box-body accpanel\" style=\"display: block;\">
                    <div id=\"product_info_list\" class=\"order_list\">
                        <div class=\"btn_area\">
                            <ul id=\"product_info_list__search_menu\">
                                ";
        // line 382
        if (($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "optionMultipleShipping", array()) != 1)) {
            // line 383
            echo "                                <li><a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#searchProductModal\">商品の追加</a></li>
                                ";
        }
        // line 385
        echo "                                <li><button type=\"submit\" class=\"btn btn-default\" name=\"mode\" value=\"calc\">計算結果の更新</button></li>
                            </ul>
                        </div>
                        <div class=\"tableish\"
                             id=\"order_detail_list\"
                             data-prototype=\"
                                ";
        // line 391
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_42bdd0d958576af125265e45a623f18c1b2b54446929963c077b87fed4d969ca", $context, $blocks));
        // line 393
        echo "\">

                            ";
        // line 395
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "OrderDetails", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["orderDetailForm"]) {
            // line 396
            echo "                                <div id=\"product_info_list__item--";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_box\">
                                    ";
            // line 397
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "Product", array()), 'widget');
            echo "
                                    ";
            // line 398
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "ProductClass", array()), 'widget');
            echo "
                                    <div id=\"product_info_list__item_detail--";
            // line 399
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_detail\">
                                        <div id=\"product_info_list__detail_name--";
            // line 400
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_name_area\">
                                            <strong id=\"product_info_list__product_name--";
            // line 401
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_name\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetailForm"], "vars", array()), "value", array()), "product_name", array()), "html", null, true);
            echo "</strong><br>
                                            <span id=\"product_info_list__product_code--";
            // line 402
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_id small\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetailForm"], "vars", array()), "value", array()), "product_code", array()), "html", null, true);
            echo "</span>
                                            <span id=\"product_info_list__class_category_name--";
            // line 403
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_pattern small\">
                                                ";
            // line 404
            if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetailForm"], "vars", array()), "value", array()), "class_category_name1", array()))) {
                // line 405
                echo "                                                / (
                                                    ";
                // line 406
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetailForm"], "vars", array()), "value", array()), "class_name1", array()), "html", null, true);
                echo "：
                                                    ";
                // line 407
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetailForm"], "vars", array()), "value", array()), "class_category_name1", array()), "html", null, true);
                echo "
                                                    ";
                // line 408
                if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetailForm"], "vars", array()), "value", array()), "class_category_name2", array()))) {
                    // line 409
                    echo "                                                        /
                                                        ";
                    // line 410
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetailForm"], "vars", array()), "value", array()), "class_name2", array()), "html", null, true);
                    echo "：
                                                        ";
                    // line 411
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetailForm"], "vars", array()), "value", array()), "class_category_name2", array()), "html", null, true);
                    echo "
                                                    ";
                }
                // line 413
                echo "                                                    )
                                                ";
            }
            // line 415
            echo "                                            </span>
                                        </div>
                                        <div class=\"row\">
                                            <div id=\"product_info_list__price--";
            // line 418
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"col-md-4 col-lg-3 form-group form-inline text-right\">
                                                <span class=\"input-group item_price col-xs-8 col-sm-6 col-md-12\">
                                                    ";
            // line 420
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "price", array()), 'widget');
            echo "
                                                    ";
            // line 421
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "price", array()), 'errors');
            echo "
                                                </span>
                                            </div>
                                            <div class=\"col-md-4 col-lg-3 form-group form-inline text-right\">
                                                <span id=\"product_info_list__quantity--";
            // line 425
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_quantity\">
                                                    ";
            // line 426
            if ($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "optionMultipleShipping", array())) {
                // line 427
                echo "                                                        数量：";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "quantity", array()), 'widget', array("read_only" => "readonly"));
                echo "
                                                    ";
            } else {
                // line 429
                echo "                                                        数量：";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "quantity", array()), 'widget');
                echo "
                                                    ";
            }
            // line 431
            echo "                                                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "quantity", array()), 'errors');
            echo "
                                                </span>
                                            </div>
                                            <div class=\"col-md-4 col-lg-3 form-group form-inline text-right\">
                                                <span id=\"product_info_list__tax_rate--";
            // line 435
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_tax\">
                                                    税率：
                                                    <span class=\"input-group\">
                                                    ";
            // line 438
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "tax_rate", array()), 'widget');
            echo "
                                                    ";
            // line 439
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "tax_rate", array()), 'errors');
            echo "
                                                    <span class=\"input-group-addon\">%</span>
                                                    </span>
                                                </span>
                                            </div>
                                            <div id=\"product_info_list__total_price--";
            // line 444
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"col-md-12 col-lg-3 item_subtotal text-right\">
                                                <span>小計：</span> ";
            // line 445
            echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetailForm"], "vars", array()), "value", array()), "total_price", array())), "html", null, true);
            echo "
                                            </div>
                                        </div>

                                    </div>
                                    ";
            // line 450
            if ($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "optionMultipleShipping", array())) {
                // line 451
                echo "                                    ";
            } else {
                // line 452
                echo "                                    <div id=\"product_info_list__button_multiple_shipping_delete--";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" class=\"icon_edit\">
                                        <button class=\"btn btn-default btn-sm delete-item\">削除</button>
                                    </div>
                                    ";
            }
            // line 456
            echo "                                </div><!-- /.item_box -->
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderDetailForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 458
        echo "                        </div>

                        <div id=\"product_info_result_box__sub_price\" class=\"row with-border2 no-margin text-right\">
                            <div class=\"col-lg-7 col-lg-offset-5\">
                                <dl id=\"product_info_result_box__body_sub_price\" class=\"dl-horizontal\">
                                    <dt id=\"product_info_result_box__subtotal\">小計：</dt>
                                    <dd>";
        // line 464
        echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "subtotal", array())), "html", null, true);
        echo "</dd>
                                    <dt id=\"product_info_result_box__discount\">値引き：</dt>
                                    <dd class=\"form-group form-inline\">
                                        ";
        // line 467
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "discount", array()), 'widget');
        echo "
                                        ";
        // line 468
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "discount", array()), 'errors');
        echo "
                                    </dd>
                                    <dt id=\"product_info_result_box__delivery_fee_total\">送料：</dt>
                                    <dd class=\"form-group form-inline\">
                                        ";
        // line 472
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delivery_fee_total", array()), 'widget');
        echo "
                                        ";
        // line 473
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delivery_fee_total", array()), 'errors');
        echo "
                                    </dd>
                                    <dt id=\"product_info_result_box__charge\">手数料：</dt>
                                    <dd class=\"form-group form-inline\">
                                        ";
        // line 477
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "charge", array()), 'widget');
        echo "
                                        ";
        // line 478
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "charge", array()), 'errors');
        echo "
                                    </dd>
                                </dl>
                            </div>
                        </div>

                        <div id=\"product_info_result_box__summary\" class=\"row with-border2 no-margin text-right  ta\">
                            <div class=\"col-lg-7 col-lg-offset-5\">
                                <dl id=\"product_info_result_box__body_summary\" class=\"dl-horizontal\">
                                    <dt id=\"product_info_result_box__total\">合計：</dt>
                                    <dd>";
        // line 488
        echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "total", array())), "html", null, true);
        echo "</dd>
                                    <dt id=\"product_info_result_box__payment_total\">お支払合計：</dt>
                                    <dd>";
        // line 490
        echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "payment_total", array())), "html", null, true);
        echo "</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 499
        echo "            <div id=\"payment_info_box\" class=\"box accordion\">
                <div id=\"payment_info_box__toggle\" class=\"box-header toggle active\">
                    <h3 class=\"box-title\">お支払情報<svg class=\"cb cb-angle-down icon_down\"> <use xlink:href=\"#cb-angle-down\" /></svg></h3>
                </div><!-- /.box-header -->
                <div id=\"payment_info_box__body\" class=\"box-body accpanel\" style=\"display: block;\">
                    <dl id=\"payment_info_box__payment_method\" class=\"dl-horizontal\">
                        <dt>お支払方法</dt>
                        <dd class=\"form-group form-inline\">
                            ";
        // line 507
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "payment_method", array()), "html", null, true);
        echo "<br/>
                            ";
        // line 508
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Payment", array()), 'widget');
        echo "
                            ";
        // line 509
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Payment", array()), 'errors');
        echo "
                            <p class=\"small\">お支払方法の変更に伴う手数料の変更は手動にてお願いします。</p>
                        </dd>
                    </dl>
                </div>
            </div>

            ";
        // line 517
        echo "            ";
        if ($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "optionMultipleShipping", array())) {
            // line 518
            echo "            <div id=\"shipping_info__button_new\"><button type=\"submit\" class=\"btn btn-default\" name=\"mode\" value=\"add_delivery\">お届け先を新規追加</button></div>
            ";
        }
        // line 520
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Shippings", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["shippingForm"]) {
            // line 521
            echo "            ";
            $context["shippingIndex"] = $this->getAttribute($context["loop"], "index0", array());
            // line 522
            echo "            <div id=\"shipping_info_box--";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"box accordion\">
                <div id=\"shipping_info_box__toggle--";
            // line 523
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"box-header toggle active\">
                    <h3 class=\"box-title\">お届け先情報";
            // line 524
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Shippings", array())) > 1)) {
                echo "(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo ")";
            }
            echo "<svg class=\"cb cb-angle-down icon_down\"> <use xlink:href=\"#cb-angle-down\" /></svg></h3>
                </div><!-- /.box-header -->
                    <div id=\"shipping_info_box__body--";
            // line 526
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"box-body accpanel\" style=\"display: block;\">
                    <div id=\"shipping_info_list--";
            // line 527
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"order_list\">
                        <div class=\"btn_area\">
                            <ul id=\"shipping_info_list__menu--";
            // line 529
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">
                                <li><a class=\"btn btn-default copyCustomerToShippingButton\" data-idx=\"";
            // line 530
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "\">注文者情報をコピー</a></li>
                                ";
            // line 531
            if ($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "optionMultipleShipping", array())) {
                // line 532
                echo "                                <li><a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#searchProductModal\" data-idx=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\">商品の追加</a></li>
                                ";
            }
            // line 534
            echo "                            </ul>
                        </div>

                        ";
            // line 537
            if ($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "optionMultipleShipping", array())) {
                // line 538
                echo "                        <div class=\"tableish\"
                             id=\"shipment_item_list";
                // line 539
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\"
                             data-prototype=\"
                             ";
                // line 541
                echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_ce3a2e1a9fbe1edb1935b66fe78d698301de9c999000282350ed18da828559a8", $context, $blocks));
                // line 543
                echo "\">

                        ";
                // line 545
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["shippingForm"], "ShipmentItems", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["shipmentItemForm"]) {
                    // line 546
                    echo "                            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "Product", array()), 'widget');
                    echo "
                            ";
                    // line 547
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "ProductClass", array()), 'widget');
                    echo "
                            <div id=\"shipment_item__id--";
                    // line 548
                    echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
                    echo "\" class=\"item_box shipment_item_idx";
                    echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
                    echo "\">
                                <div id=\"shipment_item__detail--";
                    // line 549
                    echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
                    echo "\" class=\"item_detail\">
                                    <div id=\"shipment_item__name_detail--";
                    // line 550
                    echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
                    echo "\" class=\"item_name_area\">
                                        <strong id=\"shipment_item__product_name--";
                    // line 551
                    echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
                    echo "\" class=\"item_name\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItemForm"], "vars", array()), "value", array()), "product_name", array()), "html", null, true);
                    echo "</strong><br>
                                        <span id=\"shipment_item__product_code--";
                    // line 552
                    echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
                    echo "\" class=\"item_id small\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItemForm"], "vars", array()), "value", array()), "product_code", array()), "html", null, true);
                    echo "</span>
                                            <span id=\"shipment_item__class_category_name--";
                    // line 553
                    echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
                    echo "\" class=\"item_pattern small\">
                                                ";
                    // line 554
                    if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItemForm"], "vars", array()), "value", array()), "class_category_name1", array()))) {
                        // line 555
                        echo "                                                    / (
                                                    ";
                        // line 556
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItemForm"], "vars", array()), "value", array()), "class_name1", array()), "html", null, true);
                        echo "：
                                                    ";
                        // line 557
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItemForm"], "vars", array()), "value", array()), "class_category_name1", array()), "html", null, true);
                        echo "
                                                    ";
                        // line 558
                        if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItemForm"], "vars", array()), "value", array()), "class_category_name2", array()))) {
                            // line 559
                            echo "                                                        /
                                                        ";
                            // line 560
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItemForm"], "vars", array()), "value", array()), "class_name2", array()), "html", null, true);
                            echo "：
                                                        ";
                            // line 561
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItemForm"], "vars", array()), "value", array()), "class_category_name2", array()), "html", null, true);
                            echo "
                                                    ";
                        }
                        // line 563
                        echo "                                                    )
                                                ";
                    }
                    // line 565
                    echo "                                            </span>
                                    </div>
                                    <div id=\"shipment_item__info_item--";
                    // line 567
                    echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
                    echo "\" class=\"row\">
                                        <div id=\"shipment_item__price--";
                    // line 568
                    echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
                    echo "\" class=\"col-md-4 col-lg-3 form-group form-inline text-right\">
                                            ";
                    // line 569
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "price", array()), 'widget', array("read_only" => "readonly"));
                    echo "
                                        </div>
                                        <div id=\"shipment_item__quantity--";
                    // line 571
                    echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
                    echo "\" class=\"col-md-4 col-lg-3 form-group form-inline text-right\">
                                            <span class=\"item_quantity\">
                                                数量：";
                    // line 573
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "quantity", array()), 'widget', array("attr" => array("class" => "shipment_quantity")));
                    echo "
                                                ";
                    // line 574
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "quantity", array()), 'errors');
                    echo "
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.item_box -->
                            ";
                    // line 580
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "itemidx", array()), 'widget');
                    echo "
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipmentItemForm'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 582
                echo "                            </div>
                        ";
            }
            // line 584
            echo "
                        <hr>
                        <div id=\"shipment_item_detail--";
            // line 586
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"form-horizontal\">
                            <div id=\"shipment_item_detail__name--";
            // line 587
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"form-group\">
                                ";
            // line 588
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "name", array()), 'label');
            echo "
                                <div class=\"col-sm-9 col-lg-10 input_name form-inline\">
                                    ";
            // line 590
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "name", array()), "name01", array()), 'widget', array("attr" => array("placeholder" => "姓")));
            echo "
                                    ";
            // line 591
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "name", array()), "name02", array()), 'widget', array("attr" => array("placeholder" => "名")));
            echo "
                                    ";
            // line 592
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "name", array()), "name01", array()), 'errors');
            echo "
                                    ";
            // line 593
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "name", array()), "name02", array()), 'errors');
            echo "
                                </div>
                            </div>
                            <div id=\"shipment_item_detail__kana--";
            // line 596
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"form-group\">
                                ";
            // line 597
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "kana", array()), 'label');
            echo "
                                <div class=\"col-sm-9 col-lg-10 input_name form-inline\">
                                    ";
            // line 599
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "kana", array()), "kana01", array()), 'widget', array("attr" => array("placeholder" => "セイ")));
            echo "
                                    ";
            // line 600
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "kana", array()), "kana02", array()), 'widget', array("attr" => array("placeholder" => "メイ")));
            echo "
                                    ";
            // line 601
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "kana", array()), "kana01", array()), 'errors');
            echo "
                                    ";
            // line 602
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "kana", array()), "kana02", array()), 'errors');
            echo "
                                </div>
                            </div>
                            <div id=\"shipment_item_detail__company_name--";
            // line 605
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"form-group\">
                                ";
            // line 606
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "company_name", array()), 'label');
            echo "
                                <div class=\"col-sm-9 col-lg-10\">
                                    ";
            // line 608
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "company_name", array()), 'widget');
            echo "
                                    ";
            // line 609
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "company_name", array()), 'errors');
            echo "
                                </div>
                            </div>
                            ";
            // line 613
            echo "                            <div id=\"shipment_item_detail__address--";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"form-group\">
                                ";
            // line 614
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "address", array()), 'label');
            echo "
                                <div id=\"shipment_item_detail__zip--";
            // line 615
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"col-sm-9 col-lg-10 input_zip form-inline\">
                                    〒";
            // line 616
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "zip", array()), "zip01", array()), 'widget');
            echo "-";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "zip", array()), "zip02", array()), 'widget');
            echo "
                                    ";
            // line 617
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "zip", array()), "zip01", array()), 'errors');
            echo "
                                    ";
            // line 618
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "zip", array()), "zip02", array()), 'errors');
            echo "
                                </div>
                            </div>
                            ";
            // line 622
            echo "                            <div class=\"form-group\">
                                <div id=\"shipment_item_detail__pref--";
            // line 623
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"col-sm-offset-2 col-sm-9 col-lg-10 form-inline\">
                                    ";
            // line 624
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "address", array()), "pref", array()), 'widget');
            echo "
                                    ";
            // line 625
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "address", array()), "pref", array()), 'errors');
            echo "
                                </div>
                            </div>
                            ";
            // line 629
            echo "                            <div class=\"form-group\">
                                <div id=\"shipment_item_detail__addr01--";
            // line 630
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"col-sm-offset-2 col-sm-9 col-lg-10\">
                                    ";
            // line 631
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "address", array()), "addr01", array()), 'widget', array("attr" => array("placeholder" => "市区町村名（例：千代田区神田神保町）")));
            echo "
                                    ";
            // line 632
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "address", array()), "addr01", array()), 'errors');
            echo "
                                </div>
                            </div>
                            ";
            // line 636
            echo "                            <div class=\"form-group\">
                                <div id=\"shipment_item_detail__addr02--";
            // line 637
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"col-sm-offset-2 col-sm-9 col-lg-10\">
                                    ";
            // line 638
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "address", array()), "addr02", array()), 'widget', array("attr" => array("placeholder" => "番地・ビル名（例：1-3-5）")));
            echo "
                                    ";
            // line 639
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "address", array()), "addr02", array()), 'errors');
            echo "
                                </div>
                            </div>
                            ";
            // line 643
            echo "                            <div id=\"shipment_item_detail__tel--";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"form-group\">
                                ";
            // line 644
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "tel", array()), 'label');
            echo "
                                <div class=\"col-sm-9 col-lg-10 input_tel form-inline\">
                                    ";
            // line 646
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "tel", array()), "tel01", array()), 'widget');
            echo "-";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "tel", array()), "tel02", array()), 'widget');
            echo "-";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "tel", array()), "tel03", array()), 'widget');
            echo "
                                    ";
            // line 647
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "tel", array()), "tel01", array()), 'errors');
            echo "
                                    ";
            // line 648
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "tel", array()), "tel02", array()), 'errors');
            echo "
                                    ";
            // line 649
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "tel", array()), "tel03", array()), 'errors');
            echo "
                                </div>
                            </div>
                            ";
            // line 653
            echo "                            <div id=\"shipment_item_detail__fax--";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"form-group\">
                                ";
            // line 654
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "fax", array()), 'label');
            echo "
                                <div class=\"col-sm-9 col-lg-10 input_tel form-inline\">
                                    ";
            // line 656
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "fax", array()), "fax01", array()), 'widget');
            echo "-";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "fax", array()), "fax02", array()), 'widget');
            echo "-";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "fax", array()), "fax03", array()), 'widget');
            echo "
                                    ";
            // line 657
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "fax", array()), 'errors');
            echo "
                                </div>
                            </div>
                            ";
            // line 661
            echo "                            <div id=\"shipment_item_detail__delivery--";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"form-group\">
                                ";
            // line 662
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "Delivery", array()), 'label');
            echo "
                                <div id=\"shipment_item_detail__delivery_name--";
            // line 663
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"col-sm-9 col-lg-10\">
                                    ";
            // line 664
            if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($context["shippingForm"], "vars", array()), "value", array()), "shipping_delivery_name", array()))) {
                // line 665
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shippingForm"], "vars", array()), "value", array()), "shipping_delivery_name", array()), "html", null, true);
                echo "<br/>
                                    ";
            }
            // line 667
            echo "                                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "Delivery", array()), 'widget', array("attr" => array("style" => "width:auto", "class" => "shipping-delivery", "data-idx" => $this->getAttribute($context["loop"], "index0", array()))));
            echo "
                                    ";
            // line 668
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "Delivery", array()), 'errors');
            echo "
                                </div>
                            </div>
                            ";
            // line 672
            echo "                            <div id=\"shipment_item_detail__delivery_time--";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"form-group\">
                                ";
            // line 673
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "DeliveryTime", array()), 'label');
            echo "
                                <div class=\"col-sm-9 col-lg-10\">
                                    ";
            // line 675
            if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($context["shippingForm"], "vars", array()), "value", array()), "shipping_delivery_time", array()))) {
                // line 676
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shippingForm"], "vars", array()), "value", array()), "shipping_delivery_time", array()), "html", null, true);
                echo "<br/>
                                    ";
            } else {
                // line 678
                echo "                                        指定なし
                                    ";
            }
            // line 680
            echo "                                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "DeliveryTime", array()), 'widget', array("attr" => array("style" => "width:auto", "class" => "shipping-delivery-time", "data-idx" => $this->getAttribute($context["loop"], "index0", array()))));
            echo "
                                    ";
            // line 681
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "DeliveryTime", array()), 'errors');
            echo "
                                </div>
                            </div>
                            ";
            // line 685
            echo "                            <div id=\"shipment_item_detail__shipping_delivery_date--";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"form-group\">
                                ";
            // line 686
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "shipping_delivery_date", array()), 'label');
            echo "
                                <div class=\"col-sm-9 col-lg-10\">
                                    ";
            // line 688
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "shipping_delivery_date", array()), 'widget');
            echo "
                                    ";
            // line 689
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "shipping_delivery_date", array()), 'errors');
            echo "
                                </div>
                            </div>
                            <div class=\"extra-form\">
                                ";
            // line 693
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "getIterator", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 694
                echo "                                    ";
                if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                    // line 695
                    echo "                                        ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'row');
                    echo "
                                    ";
                }
                // line 697
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 698
            echo "                            </div>
                        </div>
                    </div>
                </div><!-- /.box-body -->
           </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shippingForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 704
        echo "
            <div id=\"shop_info_box\" class=\"box\">
                <div id=\"shop_info_box__header\" class=\"box-header\">
                    <h3 class=\"box-title\">ショップ用メモ欄</h3>
                </div><!-- /.box-header -->
                <div id=\"shop_info_box__note\" class=\"box-body\">";
        // line 709
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "note", array()), 'widget');
        echo "</div>
            </div><!-- /.box -->

            <div id=\"detail__insert_button\" class=\"row btn_area\">
                <p class=\"col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 text-center\">
                    <button type=\"submit\" class=\"btn btn-primary btn-block btn-lg\" name=\"mode\" value=\"register\">受注情報を登録</button>
                </p>
                <!-- /.col -->
            </div>

            <div id=\"detail__back_button\" class=\"row hidden-xs hidden-sm\">
                <div class=\"col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 text-center btn_area\">
                    ";
        // line 721
        if ( !(null === (isset($context["id"]) ? $context["id"] : null))) {
            // line 722
            echo "                        <p><a href=\"";
            echo $this->env->getExtension('eccube')->getUrl("admin_order");
            echo "\">戻る</a></p>
                    ";
        }
        // line 724
        echo "                </div>
            </div>

        </div><!-- /.col -->

    </form>
</div>
";
    }

    // line 391
    public function block___internal_42bdd0d958576af125265e45a623f18c1b2b54446929963c077b87fed4d969ca($context, array $blocks = array())
    {
        // line 392
        echo "                                     ";
        echo twig_include($this->env, $context, "Order/order_detail_prototype.twig", array("orderDetailForm" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "OrderDetails", array()), "vars", array()), "prototype", array())));
        echo "
                                ";
    }

    // line 541
    public function block___internal_ce3a2e1a9fbe1edb1935b66fe78d698301de9c999000282350ed18da828559a8($context, array $blocks = array())
    {
        // line 542
        echo "                                     ";
        echo twig_include($this->env, $context, "Order/shipment_item_prototype.twig", array("shipmentItemForm" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["shippingForm"]) ? $context["shippingForm"] : null), "ShipmentItems", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
    }

    // line 733
    public function block_modal($context, array $blocks = array())
    {
        // line 734
        echo "
";
        // line 736
        echo "<div class=\"modal fade\" id=\"searchCustomerModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div id=\"search_customer_modal_box\" class=\"modal-content\">
            <div id=\"search_customer_modal_box__header\" class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span class=\"modal-close\" aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">会員検索</h4>
            </div>
            <div id=\"search_customer_modal_box__body\" class=\"modal-body\">
                <div class=\"form-group\">
                    ";
        // line 745
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchCustomerModalForm"]) ? $context["searchCustomerModalForm"] : null), "multi", array()), 'widget', array("attr" => array("placeholder" => "会員ID・メールアドレス・お名前")));
        echo "
                </div>
                <div class=\"extra-form form-group\">
                    ";
        // line 748
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["searchCustomerModalForm"]) ? $context["searchCustomerModalForm"] : null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 749
            echo "                        ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 750
                echo "                            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'label');
                echo "
                            ";
                // line 751
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'widget');
                echo "
                            ";
                // line 752
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'errors');
                echo "
                        ";
            }
            // line 754
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 755
        echo "                </div>
                <div id=\"search_customer_modal_box__button_search\" class=\"form-group\">
                    <button type=\"button\" id=\"searchCustomerModalButton\" class=\"btn btn-primary\" >検索</button>
                </div>
                <div id=\"search_customer_modal_box__body_inner\" class=\"form-group\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-striped\" id=\"searchCustomerModalList\">
                            <thead >
                            <tr id=\"search_customer_modal_box__body_inner_header\">
                                <th>会員ID</th>
                                <th>お名前(カナ)</th>
                                <th>電話番号</th>
                                <th>決定</th>
                            </tr>
                            </thead>
                            <tbody id=\"search_customer_modal_box__body_inner_body\">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 781
        echo "<div class=\"modal fade\" id=\"searchProductModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div id=\"search_product_modal_box\" class=\"modal-content\">
            <div id=\"search_product_modal_box__header\" class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span class=\"modal-close\" aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">商品検索</h4>
            </div>
            <div id=\"search_product_modal_box__body\" class=\"modal-body\">
                <div id=\"search_product_modal_box__id\" class=\"form-group\">
                    ";
        // line 790
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchProductModalForm"]) ? $context["searchProductModalForm"] : null), "id", array()), 'widget', array("attr" => array("placeholder" => "商品名・ID・コード")));
        echo "
                </div>
                <div id=\"search_product_modal_box__category_id\" class=\"form-group\">
                    ";
        // line 793
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchProductModalForm"]) ? $context["searchProductModalForm"] : null), "category_id", array()), 'widget');
        echo "
                </div>
                <div class=\"extra-form form-group\">
                    ";
        // line 796
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["searchProductModalForm"]) ? $context["searchProductModalForm"] : null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 797
            echo "                        ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 798
                echo "                            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'label');
                echo "
                            ";
                // line 799
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'widget');
                echo "
                            ";
                // line 800
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'errors');
                echo "
                        ";
            }
            // line 802
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 803
        echo "                </div>
                <div id=\"search_product_modal_box__button_search\" class=\"form-group\">
                    <button type=\"button\" id=\"searchProductModalButton\" class=\"btn btn-primary\">検索</button>
                </div>
                <div class=\"form-group\" id=\"searchProductModalList\">
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__a9dda223ed8297cb6a7a3d0fd34e65de284442370e5e55023b84a7b6744863d0";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1644 => 803,  1638 => 802,  1633 => 800,  1629 => 799,  1624 => 798,  1621 => 797,  1617 => 796,  1611 => 793,  1605 => 790,  1594 => 781,  1567 => 755,  1561 => 754,  1556 => 752,  1552 => 751,  1547 => 750,  1544 => 749,  1540 => 748,  1534 => 745,  1523 => 736,  1520 => 734,  1517 => 733,  1510 => 542,  1507 => 541,  1500 => 392,  1497 => 391,  1486 => 724,  1480 => 722,  1478 => 721,  1463 => 709,  1456 => 704,  1437 => 698,  1431 => 697,  1425 => 695,  1422 => 694,  1418 => 693,  1411 => 689,  1407 => 688,  1402 => 686,  1397 => 685,  1391 => 681,  1386 => 680,  1382 => 678,  1376 => 676,  1374 => 675,  1369 => 673,  1364 => 672,  1358 => 668,  1353 => 667,  1347 => 665,  1345 => 664,  1341 => 663,  1337 => 662,  1332 => 661,  1326 => 657,  1318 => 656,  1313 => 654,  1308 => 653,  1302 => 649,  1298 => 648,  1294 => 647,  1286 => 646,  1281 => 644,  1276 => 643,  1270 => 639,  1266 => 638,  1262 => 637,  1259 => 636,  1253 => 632,  1249 => 631,  1245 => 630,  1242 => 629,  1236 => 625,  1232 => 624,  1228 => 623,  1225 => 622,  1219 => 618,  1215 => 617,  1209 => 616,  1205 => 615,  1201 => 614,  1196 => 613,  1190 => 609,  1186 => 608,  1181 => 606,  1177 => 605,  1171 => 602,  1167 => 601,  1163 => 600,  1159 => 599,  1154 => 597,  1150 => 596,  1144 => 593,  1140 => 592,  1136 => 591,  1132 => 590,  1127 => 588,  1123 => 587,  1119 => 586,  1115 => 584,  1111 => 582,  1103 => 580,  1094 => 574,  1090 => 573,  1085 => 571,  1080 => 569,  1076 => 568,  1072 => 567,  1068 => 565,  1064 => 563,  1059 => 561,  1055 => 560,  1052 => 559,  1050 => 558,  1046 => 557,  1042 => 556,  1039 => 555,  1037 => 554,  1033 => 553,  1027 => 552,  1021 => 551,  1017 => 550,  1013 => 549,  1007 => 548,  1003 => 547,  998 => 546,  994 => 545,  990 => 543,  988 => 541,  983 => 539,  980 => 538,  978 => 537,  973 => 534,  967 => 532,  965 => 531,  961 => 530,  957 => 529,  952 => 527,  948 => 526,  939 => 524,  935 => 523,  930 => 522,  927 => 521,  909 => 520,  905 => 518,  902 => 517,  892 => 509,  888 => 508,  884 => 507,  874 => 499,  863 => 490,  858 => 488,  845 => 478,  841 => 477,  834 => 473,  830 => 472,  823 => 468,  819 => 467,  813 => 464,  805 => 458,  790 => 456,  782 => 452,  779 => 451,  777 => 450,  769 => 445,  765 => 444,  757 => 439,  753 => 438,  747 => 435,  739 => 431,  733 => 429,  727 => 427,  725 => 426,  721 => 425,  714 => 421,  710 => 420,  705 => 418,  700 => 415,  696 => 413,  691 => 411,  687 => 410,  684 => 409,  682 => 408,  678 => 407,  674 => 406,  671 => 405,  669 => 404,  665 => 403,  659 => 402,  653 => 401,  649 => 400,  645 => 399,  641 => 398,  637 => 397,  632 => 396,  615 => 395,  611 => 393,  609 => 391,  601 => 385,  597 => 383,  595 => 382,  577 => 367,  573 => 366,  568 => 364,  565 => 363,  559 => 359,  555 => 358,  550 => 356,  547 => 355,  541 => 351,  533 => 350,  528 => 348,  525 => 347,  519 => 343,  515 => 342,  511 => 341,  503 => 340,  498 => 338,  495 => 337,  489 => 333,  485 => 332,  480 => 330,  477 => 329,  471 => 325,  467 => 324,  463 => 322,  457 => 318,  453 => 317,  449 => 315,  443 => 311,  439 => 310,  435 => 308,  428 => 303,  424 => 302,  418 => 301,  413 => 299,  410 => 298,  404 => 294,  400 => 293,  396 => 292,  392 => 291,  387 => 289,  380 => 285,  376 => 284,  372 => 283,  368 => 282,  363 => 280,  355 => 275,  351 => 274,  347 => 273,  342 => 270,  334 => 264,  332 => 263,  317 => 251,  313 => 250,  309 => 249,  305 => 248,  297 => 243,  293 => 242,  288 => 240,  278 => 233,  273 => 230,  270 => 229,  233 => 195,  200 => 165,  183 => 151,  119 => 90,  96 => 70,  58 => 34,  55 => 33,  49 => 27,  43 => 26,  39 => 22,  37 => 31,  35 => 30,  33 => 29,  31 => 24,  11 => 22,);
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
/* {% set menus = ['order', 'order_edit'] %}*/
/* */
/* {% block title %}受注管理{% endblock %}*/
/* {% block sub_title %}受注登録・編集{% endblock %}*/
/* */
/* {% form_theme form 'Form/bootstrap_3_horizontal_layout.html.twig' %}*/
/* {% form_theme searchCustomerModalForm 'Form/bootstrap_3_horizontal_layout.html.twig' %}*/
/* {% form_theme searchProductModalForm 'Form/bootstrap_3_horizontal_layout.html.twig' %}*/
/* */
/* {% block javascript %}*/
/* <script src="//ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>*/
/* <script>*/
/* $(function() {*/
/*     $('#zip-search').click(function() {*/
/*         AjaxZip3.zip2addr('order[zip][zip01]', 'order[zip][zip02]', 'order[address][pref]', 'order[address][addr01]');*/
/*     });*/
/* */
/*     // 注文者情報をコピー*/
/*     $('.copyCustomerToShippingButton').on('click', function() {*/
/*         var data = $(this).data();*/
/*         var idx = data.idx;*/
/*         $('#order_Shippings_' + idx + '_name_name01').val($('#order_name_name01').val());*/
/*         $('#order_Shippings_' + idx + '_name_name02').val($('#order_name_name02').val());*/
/*         $('#order_Shippings_' + idx + '_kana_kana01').val($('#order_kana_kana01').val());*/
/*         $('#order_Shippings_' + idx + '_kana_kana02').val($('#order_kana_kana02').val());*/
/*         $('#order_Shippings_' + idx + '_zip_zip01').val($('#order_zip_zip01').val());*/
/*         $('#order_Shippings_' + idx + '_zip_zip02').val($('#order_zip_zip02').val());*/
/*         $('#order_Shippings_' + idx + '_address_pref').val($('#order_address_pref').val());*/
/*         $('#order_Shippings_' + idx + '_address_addr01').val($('#order_address_addr01').val());*/
/*         $('#order_Shippings_' + idx + '_address_addr02').val($('#order_address_addr02').val());*/
/*         $('#order_Shippings_' + idx + '_email').val($('#order_email').val());*/
/*         $('#order_Shippings_' + idx + '_tel_tel01').val($('#order_tel_tel01').val());*/
/*         $('#order_Shippings_' + idx + '_tel_tel02').val($('#order_tel_tel02').val());*/
/*         $('#order_Shippings_' + idx + '_tel_tel03').val($('#order_tel_tel03').val());*/
/*         $('#order_Shippings_' + idx + '_fax_fax01').val($('#order_fax_fax01').val());*/
/*         $('#order_Shippings_' + idx + '_fax_fax02').val($('#order_fax_fax02').val());*/
/*         $('#order_Shippings_' + idx + '_fax_fax03').val($('#order_fax_fax03').val());*/
/*         $('#order_Shippings_' + idx + '_company_name').val($('#order_company_name').val());*/
/*     });*/
/*     // 会員検索*/
/*     $('#searchCustomerModalButton').on('click', function() {*/
/*         var tbody = $('#searchCustomerModalList tbody');*/
/*         tbody.children().remove();*/
/*         $.ajax({*/
/*             type: 'POST',*/
/*             data: { 'search_word' : $('#admin_search_customer_multi').val() },*/
/*             url: '{{ url('admin_order_search_customer') }}',*/
/*             success: function(data) {*/
/*                 for (var i = 0; i < data.length; i++) {*/
/*                     // モーダルウィンドウ内に結果を出力.*/
/*                     var tr = $('<tr></tr>');*/
/*                     var id = $('<td>' + data[i]['id'] + '</td>');*/
/*                     var name = $('<td>' + data[i]['name'] + '</td>');*/
/*                     var tel = $('<td>' + data[i]['tel'] + '</td>');*/
/*                     var select = $('<td data-customer="' + data[i]['id'] + '"><button type="button" class="btn btn-default btn-sm">決定</button></td>');*/
/*                     tr.append(id);*/
/*                     tr.append(name);*/
/*                     tr.append(tel);*/
/*                     tr.append(select);*/
/*                     tbody.append(tr);*/
/* */
/*                     // 決定ボタンに検索イベントを設定.*/
/*                     select.on('click', function() {*/
/*                         $.ajax({*/
/*                             type: 'POST',*/
/*                             data: { 'id' : this.dataset.customer },*/
/*                             url: '{{ url('admin_order_search_customer_by_id') }}',*/
/*                             success: function(data) {*/
/*                                 // 顧客情報をフォームにセットする.*/
/*                                 $('#order_CustomerId').html(data['id']);*/
/*                                 $('#order_Customer').val(data['id']);*/
/*                                 $('#order_name_name01').val(data['name01']);*/
/*                                 $('#order_name_name02').val(data['name02']);*/
/*                                 $('#order_kana_kana01').val(data['kana01']);*/
/*                                 $('#order_kana_kana02').val(data['kana02']);*/
/*                                 $('#order_zip_zip01').val(data['zip01']);*/
/*                                 $('#order_zip_zip02').val(data['zip02']);*/
/*                                 $('#order_address_pref').val(data['pref']);*/
/*                                 $('#order_address_addr01').val(data['addr01']);*/
/*                                 $('#order_address_addr02').val(data['addr02']);*/
/*                                 $('#order_email').val(data['email']);*/
/*                                 $('#order_tel_tel01').val(data['tel01']);*/
/*                                 $('#order_tel_tel02').val(data['tel02']);*/
/*                                 $('#order_tel_tel03').val(data['tel03']);*/
/*                                 $('#order_fax_fax01').val(data['fax01']);*/
/*                                 $('#order_fax_fax02').val(data['fax02']);*/
/*                                 $('#order_fax_fax03').val(data['fax03']);*/
/*                                 $('#order_company_name').val(data['company_name']);*/
/*                                 // モーダルを閉じる.*/
/*                                 $('#searchCustomerModal').modal('hide');*/
/*                             },*/
/*                             error: function() {*/
/*                                 alert('search customer(by id) failed.');*/
/*                             }*/
/*                         });*/
/*                      });*/
/*                 }*/
/*             },*/
/*             error: function() {*/
/*                 alert('search customer failed.');*/
/*             }*/
/*         });*/
/*     });*/
/*     $('#searchProductModal').on('show.bs.modal', function (event) {*/
/*         var button = $(event.relatedTarget);*/
/*         var idx = button.data('idx');*/
/*         var modal = $(this);*/
/*         modal.find('#searchProductModalButton').attr('data-idx', idx);*/
/*     });*/
/* */
/* */
/*     // 商品検索*/
/*     $('#searchProductModalButton').on('click', function() {*/
/*         var tbody = $('#searchProductModalList tbody');*/
/*         tbody.children().remove();*/
/* */
/*         var data = $(this).data();*/
/*         shipment_idx = data.idx;*/
/*         shipmentItem_idx = $('.shipment_item_idx' + shipment_idx).length;*/
/* */
/*         $.ajax({*/
/*             type: 'POST',*/
/*             dataType: 'html',*/
/*             data: {*/
/*                 'id' : $('#admin_search_product_id').val(),*/
/*                 'category_id' : $('#admin_search_product_category_id').val()*/
/*             },*/
/*             url: '{{ url('admin_order_search_product') }}',*/
/*             success: function(data) {*/
/*                 // モーダルに結果を書き出し.*/
/*                 $('#searchProductModalList').html(data);*/
/*             },*/
/*             error: function() {*/
/*                 alert('search product failed.');*/
/*             }*/
/*         });*/
/*     });*/
/* */
/*     // 受注明細行の行数カウンタ.*/
/*     // 受注登録・編集画面上でグローバルな変数.*/
/*     // search_product.twig/order_detail_prototype.twigで利用しています.*/
/*     order_details_count = '{{ form.OrderDetails|length }}';*/
/* */
/*     // 項目数が多く、入力している項目によってEnter押下時に期待する動作が変わるので、いったん禁止*/
/*     $("input").on("keydown", function(e) {*/
/*         if ((e.which && e.which === 13) || (e.keyCode && e.keyCode === 13)) {*/
/*             return false;*/
/*         } else {*/
/*             return true;*/
/*         }*/
/*     });*/
/* */
/*     $(".delete-item").on("click", function(){*/
/*         $(this).parents(".item_box").remove();*/
/*         order_details_count--;*/
/* */
/*         onChangeOrderDetailCount(order_details_count);*/
/*     });*/
/* */
/*     var onChangeOrderDetailCount = function(order_details_count) {*/
/*         if (order_details_count == 1) {*/
/*             $(".delete-item").attr("disabled", "disabled");*/
/*         } else {*/
/*             $(".delete-item").removeAttr("disabled");*/
/*         }*/
/*     };*/
/* */
/*     onChangeOrderDetailCount();*/
/* */
/* */
/*     // 配送業者選択時にお届け時間を設定*/
/*     var times = {{ shippingDeliveryTimes|raw }};*/
/* */
/*     $('.shipping-delivery').change(function(){*/
/*         var data = $(this).data();*/
/*         setShippingDeliveryTime($(this).val(), data.idx);*/
/*     });*/
/* */
/*     function setShippingDeliveryTime(val, idx){*/
/*         var $shippingDeliveryTime = $('.shipping-delivery-time[data-idx="' + idx + '"]');*/
/*         $shippingDeliveryTime.find('option').remove();*/
/*         $shippingDeliveryTime.append($('<option></option>').val('').text('指定なし'));*/
/* */
/*         if (typeof(times[val]) !== 'undefined') {*/
/*             for (var key in times[val]){*/
/*                 text = times[val][key];*/
/*                 $shippingDeliveryTime.append($('<option></option>')*/
/*                     .val(key)*/
/*                     .text(text));*/
/*             }*/
/*         }*/
/*     }*/
/* */
/* });*/
/* var setModeAndSubmit = function(mode, keyname, keyid) {*/
/*     document.form1.modal.value = mode;*/
/*     if(keyname !== undefined && keyname !== "" && keyid !== undefined && keyid !== "") {*/
/*         document.form1[keyname].value = keyid;*/
/*     }*/
/*     document.form1.submit();*/
/* };*/
/* */
/* </script>*/
/* {% endblock javascript %}*/
/* */
/* {% block main %}*/
/* <div class="row" id="aside_wrap">*/
/*     <form name="form1" method="post" action="?">*/
/*     <input type="hidden" name="modal" value="">*/
/*     {{ form_widget(form._token) }}*/
/*         <div id="detail_wrap" class="col-md-12">*/
/*             <div class="col_inner">*/
/*                 <div id="number_info_box" class="box no-header">*/
/*                     <div id="number_info_box__body" class="box-body">*/
/*                         <div class="row">*/
/*                             <div id="number_info_box__order_status" class="col-sm-4">*/
/*                                 <h4>注文番号 <span class="number">{{ Order.id }}</span></h4>*/
/*                                 <div class="form-group">*/
/*                                     {{ form_widget(form.OrderStatus) }}*/
/*                                     {{ form_errors(form.OrderStatus) }}*/
/*                                 </div>*/
/*                                 <div id="number_info_box__order_status_info" class="small text-danger">キャンセルの場合は在庫数を手動で戻してください</div>*/
/*                             </div>*/
/*                             <div class="col-sm-6 col-sm-offset-2">*/
/*                                 <p id="number_info_box__order_date"><svg class="cb cb-clock"> <use xlink:href="#cb-clock" /></svg>受注日：{{ Order.order_date ? Order.order_date |date("Y/m/d H:i:s") : '' }}</p>*/
/*                                 <p id="number_info_box__payment_date"><svg class="cb cb-clock"> <use xlink:href="#cb-clock" /></svg>入金日：{{ Order.payment_date ? Order.payment_date|date("Y/m/d H:i:s") : '' }}</p>*/
/*                                 <p id="number_info_box__commit_date"><svg class="cb cb-clock"> <use xlink:href="#cb-clock" /></svg>発送日：{{ Order.commit_date ? Order.commit_date|date("Y/m/d H:i:s") : '' }}</p>*/
/*                                 <p id="number_info_box__update_date"><svg class="cb cb-clock"> <use xlink:href="#cb-clock" /></svg>更新日：{{ Order.update_date ? Order.update_date|date("Y/m/d H:i:s") : '' }}</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div><!-- /.box-body -->*/
/*                 </div><!-- /.box -->*/
/*             </div>*/
/*             <div id="customer_info_box"  class="box accordion">*/
/*                 <div id="customer_info_box__toggle" class="box-header toggle active">*/
/*                     <h3 class="box-title">注文者情報<svg class="cb cb-angle-down icon_down"> <use xlink:href="#cb-angle-down" /></svg></h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 <div id="customer_info_box__body" class="box-body accpanel" style="display: block;">*/
/*                     <div id="customer_info_list" class="order_list form-horizontal">*/
/*                         {% if Order.id is empty %}*/
/*                         <div id="customer_info_list__button_search" class="btn_area">*/
/*                             <ul>*/
/*                                 <li><a class="btn btn-default" data-toggle="modal" data-target="#searchCustomerModal">会員検索</a></li>*/
/*                             </ul>*/
/*                         </div>*/
/*                         {% endif %}*/
/*                         <div id="customer_info_list__customer" class="form-group">*/
/*                             <div class="col-sm-3 col-lg-2">会員ID</div>*/
/*                             <div class="col-sm-9 col-lg-10">*/
/*                                 <p id="order_CustomerId">{{ form.Customer.vars.value is empty ? '非会員' :  form.Customer.vars.value }}</p>*/
/*                                 {{ form_widget(form.Customer) }}*/
/*                                 {{ form_errors(form.Customer) }}*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                         <div id="customer_info_list__name" class="form-group">*/
/*                             {{ form_label(form.name) }}*/
/*                             <div class="col-sm-9 col-lg-10 input_name form-inline">*/
/*                                 {{ form_widget(form.name.name01, { attr : { placeholder: '姓' }}) }}*/
/*                                 {{ form_widget(form.name.name02, { attr : { placeholder: '名' }}) }}*/
/*                                 {{ form_errors(form.name.name01) }}*/
/*                                 {{ form_errors(form.name.name02) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div id="customer_info_list__kana" class="form-group">*/
/*                             {{ form_label(form.kana) }}*/
/*                             <div class="col-sm-9 col-lg-10 input_name form-inline">*/
/*                                 {{ form_widget(form.kana.kana01, { attr : { placeholder : 'セイ' }}) }}*/
/*                                 {{ form_widget(form.kana.kana02, { attr : { placeholder : 'メイ' }}) }}*/
/*                                 {{ form_errors(form.kana.kana01) }}*/
/*                                 {{ form_errors(form.kana.kana02) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         {# 住所：郵便番号 #}*/
/*                         <div id="customer_info_list__address" class="form-group">*/
/*                             {{ form_label(form.address) }}*/
/*                             <div id="customer_info_list__zip" class="col-sm-9 col-lg-10 input_zip form-inline">*/
/*                                 〒{{ form_widget(form.zip.zip01) }}-{{ form_widget(form.zip.zip02) }}*/
/*                                 {{ form_errors(form.zip.zip01) }}*/
/*                                 {{ form_errors(form.zip.zip02) }}*/
/*                                 <span><button type="button" id="zip-search" class="btn btn-default btn-sm">郵便番号から自動入力</button></span>*/
/*                             </div>*/
/*                         </div>*/
/*                         {# 住所：都道府県 #}*/
/*                         <div class="form-group">*/
/*                             <div id="customer_info_list__pref" class="col-sm-offset-2 col-sm-9 col-lg-10 form-inline">*/
/*                                 {{ form_widget(form.address.pref) }}*/
/*                                 {{ form_errors(form.address.pref) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         {# 住所：住所1 #}*/
/*                         <div class="form-group">*/
/*                             <div id="customer_info_list__addr01" class="col-sm-offset-2 col-sm-9 col-lg-10">*/
/*                                 {{ form_widget(form.address.addr01, { attr : { placeholder : '市区町村名（例：千代田区神田神保町）'}} ) }}*/
/*                                 {{ form_errors(form.address.addr01) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         {# 住所：住所2 #}*/
/*                         <div class="form-group">*/
/*                             <div id="customer_info_list__addr02" class="col-sm-offset-2 col-sm-9 col-lg-10">*/
/*                                 {{ form_widget(form.address.addr02, { attr : { placeholder : '番地・ビル名（例：1-3-5）' }}) }}*/
/*                                 {{ form_errors(form.address.addr02) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         {# メールアドレス #}*/
/*                         <div id="customer_info_list__email" class="form-group">*/
/*                             {{ form_label(form.email) }}*/
/*                             <div class="col-sm-9 col-lg-10">*/
/*                                 {{ form_widget(form.email) }}*/
/*                                 {{ form_errors(form.email) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         {# 電話番号 #}*/
/*                         <div id="customer_info_list__tel" class="form-group">*/
/*                             {{ form_label(form.tel) }}*/
/*                             <div class="col-sm-9 col-lg-10 input_tel form-inline">*/
/*                                 {{ form_widget(form.tel.tel01) }}-{{ form_widget(form.tel.tel02) }}-{{ form_widget(form.tel.tel03) }}*/
/*                                 {{ form_errors(form.tel.tel01) }}*/
/*                                 {{ form_errors(form.tel.tel02) }}*/
/*                                 {{ form_errors(form.tel.tel03) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         {# FAX番号 #}*/
/*                         <div id="customer_info_list__fax" class="form-group">*/
/*                             {{ form_label(form.fax) }}*/
/*                             <div class="col-sm-9 col-lg-10 input_tel form-inline">*/
/*                                 {{ form_widget(form.fax.fax01) }}-{{ form_widget(form.fax.fax02) }}-{{ form_widget(form.fax.fax03) }}*/
/*                                 {{ form_errors(form.fax) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         {# 会社名 #}*/
/*                         <div id="customer_info_list__company_name" class="form-group">*/
/*                             {{ form_label(form.company_name) }}*/
/*                             <div class="col-sm-9 col-lg-10">*/
/*                                 {{ form_widget(form.company_name) }}*/
/*                                 {{ form_errors(form.company_name) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         {# 注文時お問い合わせ #}*/
/*                         <div id="customer_info_list__message" class="form-group">*/
/*                             {{ form_label(form.message) }}*/
/*                             <div class="col-sm-9 col-lg-10">*/
/*                                 {{ form_widget(form.message, { attr : { placeholder : '3000文字まで入力可能' }}) }}*/
/*                                 {{ form_errors(form.message) }}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div><!-- /.box-body -->*/
/*             </div><!-- /.box -->*/
/* */
/*             <div id="product_info_box" class="box accordion">*/
/*                 <div id="product_info_box__toggle" class="box-header toggle active">*/
/*                     <h3 class="box-title">受注商品情報<svg class="cb cb-angle-down icon_down"> <use xlink:href="#cb-angle-down" /></svg></h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 <div id="product_info_box__body" class="box-body accpanel" style="display: block;">*/
/*                     <div id="product_info_list" class="order_list">*/
/*                         <div class="btn_area">*/
/*                             <ul id="product_info_list__search_menu">*/
/*                                 {% if BaseInfo.optionMultipleShipping != 1 %}*/
/*                                 <li><a class="btn btn-default" data-toggle="modal" data-target="#searchProductModal">商品の追加</a></li>*/
/*                                 {% endif %}*/
/*                                 <li><button type="submit" class="btn btn-default" name="mode" value="calc">計算結果の更新</button></li>*/
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="tableish"*/
/*                              id="order_detail_list"*/
/*                              data-prototype="*/
/*                                 {% filter escape %}*/
/*                                      {{ include('Order/order_detail_prototype.twig', { 'orderDetailForm': form.OrderDetails.vars.prototype }) }}*/
/*                                 {% endfilter %}">*/
/* */
/*                             {% for orderDetailForm in form.OrderDetails %}*/
/*                                 <div id="product_info_list__item--{{ loop.index }}" class="item_box">*/
/*                                     {{ form_widget(orderDetailForm.Product) }}*/
/*                                     {{ form_widget(orderDetailForm.ProductClass) }}*/
/*                                     <div id="product_info_list__item_detail--{{ loop.index }}" class="item_detail">*/
/*                                         <div id="product_info_list__detail_name--{{ loop.index }}" class="item_name_area">*/
/*                                             <strong id="product_info_list__product_name--{{ loop.index }}" class="item_name">{{ orderDetailForm.vars.value.product_name }}</strong><br>*/
/*                                             <span id="product_info_list__product_code--{{ loop.index }}" class="item_id small">{{ orderDetailForm.vars.value.product_code }}</span>*/
/*                                             <span id="product_info_list__class_category_name--{{ loop.index }}" class="item_pattern small">*/
/*                                                 {% if orderDetailForm.vars.value.class_category_name1 is not empty %}*/
/*                                                 / (*/
/*                                                     {{ orderDetailForm.vars.value.class_name1 }}：*/
/*                                                     {{ orderDetailForm.vars.value.class_category_name1 }}*/
/*                                                     {% if orderDetailForm.vars.value.class_category_name2 is not empty %}*/
/*                                                         /*/
/*                                                         {{ orderDetailForm.vars.value.class_name2 }}：*/
/*                                                         {{ orderDetailForm.vars.value.class_category_name2 }}*/
/*                                                     {% endif %}*/
/*                                                     )*/
/*                                                 {% endif %}*/
/*                                             </span>*/
/*                                         </div>*/
/*                                         <div class="row">*/
/*                                             <div id="product_info_list__price--{{ loop.index }}" class="col-md-4 col-lg-3 form-group form-inline text-right">*/
/*                                                 <span class="input-group item_price col-xs-8 col-sm-6 col-md-12">*/
/*                                                     {{ form_widget(orderDetailForm.price) }}*/
/*                                                     {{ form_errors(orderDetailForm.price) }}*/
/*                                                 </span>*/
/*                                             </div>*/
/*                                             <div class="col-md-4 col-lg-3 form-group form-inline text-right">*/
/*                                                 <span id="product_info_list__quantity--{{ loop.index }}" class="item_quantity">*/
/*                                                     {% if BaseInfo.optionMultipleShipping %}*/
/*                                                         数量：{{ form_widget(orderDetailForm.quantity, {'read_only': 'readonly'}) }}*/
/*                                                     {% else %}*/
/*                                                         数量：{{ form_widget(orderDetailForm.quantity) }}*/
/*                                                     {% endif %}*/
/*                                                     {{ form_errors(orderDetailForm.quantity) }}*/
/*                                                 </span>*/
/*                                             </div>*/
/*                                             <div class="col-md-4 col-lg-3 form-group form-inline text-right">*/
/*                                                 <span id="product_info_list__tax_rate--{{ loop.index }}" class="item_tax">*/
/*                                                     税率：*/
/*                                                     <span class="input-group">*/
/*                                                     {{ form_widget(orderDetailForm.tax_rate) }}*/
/*                                                     {{ form_errors(orderDetailForm.tax_rate) }}*/
/*                                                     <span class="input-group-addon">%</span>*/
/*                                                     </span>*/
/*                                                 </span>*/
/*                                             </div>*/
/*                                             <div id="product_info_list__total_price--{{ loop.index }}" class="col-md-12 col-lg-3 item_subtotal text-right">*/
/*                                                 <span>小計：</span> {{ orderDetailForm.vars.value.total_price|price }}*/
/*                                             </div>*/
/*                                         </div>*/
/* */
/*                                     </div>*/
/*                                     {% if BaseInfo.optionMultipleShipping %}*/
/*                                     {% else %}*/
/*                                     <div id="product_info_list__button_multiple_shipping_delete--{{ loop.index }}" class="icon_edit">*/
/*                                         <button class="btn btn-default btn-sm delete-item">削除</button>*/
/*                                     </div>*/
/*                                     {% endif %}*/
/*                                 </div><!-- /.item_box -->*/
/*                             {% endfor %}*/
/*                         </div>*/
/* */
/*                         <div id="product_info_result_box__sub_price" class="row with-border2 no-margin text-right">*/
/*                             <div class="col-lg-7 col-lg-offset-5">*/
/*                                 <dl id="product_info_result_box__body_sub_price" class="dl-horizontal">*/
/*                                     <dt id="product_info_result_box__subtotal">小計：</dt>*/
/*                                     <dd>{{ Order.subtotal|price }}</dd>*/
/*                                     <dt id="product_info_result_box__discount">値引き：</dt>*/
/*                                     <dd class="form-group form-inline">*/
/*                                         {{ form_widget(form.discount) }}*/
/*                                         {{ form_errors(form.discount) }}*/
/*                                     </dd>*/
/*                                     <dt id="product_info_result_box__delivery_fee_total">送料：</dt>*/
/*                                     <dd class="form-group form-inline">*/
/*                                         {{ form_widget(form.delivery_fee_total) }}*/
/*                                         {{ form_errors(form.delivery_fee_total) }}*/
/*                                     </dd>*/
/*                                     <dt id="product_info_result_box__charge">手数料：</dt>*/
/*                                     <dd class="form-group form-inline">*/
/*                                         {{ form_widget(form.charge) }}*/
/*                                         {{ form_errors(form.charge) }}*/
/*                                     </dd>*/
/*                                 </dl>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div id="product_info_result_box__summary" class="row with-border2 no-margin text-right  ta">*/
/*                             <div class="col-lg-7 col-lg-offset-5">*/
/*                                 <dl id="product_info_result_box__body_summary" class="dl-horizontal">*/
/*                                     <dt id="product_info_result_box__total">合計：</dt>*/
/*                                     <dd>{{ Order.total|price }}</dd>*/
/*                                     <dt id="product_info_result_box__payment_total">お支払合計：</dt>*/
/*                                     <dd>{{ Order.payment_total|price }}</dd>*/
/*                                 </dl>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             {# お支払情報 #}*/
/*             <div id="payment_info_box" class="box accordion">*/
/*                 <div id="payment_info_box__toggle" class="box-header toggle active">*/
/*                     <h3 class="box-title">お支払情報<svg class="cb cb-angle-down icon_down"> <use xlink:href="#cb-angle-down" /></svg></h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 <div id="payment_info_box__body" class="box-body accpanel" style="display: block;">*/
/*                     <dl id="payment_info_box__payment_method" class="dl-horizontal">*/
/*                         <dt>お支払方法</dt>*/
/*                         <dd class="form-group form-inline">*/
/*                             {{ form.vars.value.payment_method }}<br/>*/
/*                             {{ form_widget(form.Payment) }}*/
/*                             {{ form_errors(form.Payment) }}*/
/*                             <p class="small">お支払方法の変更に伴う手数料の変更は手動にてお願いします。</p>*/
/*                         </dd>*/
/*                     </dl>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             {# お届け先情報 #}*/
/*             {% if BaseInfo.optionMultipleShipping %}*/
/*             <div id="shipping_info__button_new"><button type="submit" class="btn btn-default" name="mode" value="add_delivery">お届け先を新規追加</button></div>*/
/*             {% endif %}*/
/*             {% for shippingForm in form.Shippings %}*/
/*             {% set shippingIndex = loop.index0 %}*/
/*             <div id="shipping_info_box--{{ loop.index }}" class="box accordion">*/
/*                 <div id="shipping_info_box__toggle--{{ loop.index }}" class="box-header toggle active">*/
/*                     <h3 class="box-title">お届け先情報{% if form.Shippings|length > 1 %}({{ loop.index }}){% endif %}<svg class="cb cb-angle-down icon_down"> <use xlink:href="#cb-angle-down" /></svg></h3>*/
/*                 </div><!-- /.box-header -->*/
/*                     <div id="shipping_info_box__body--{{ loop.index }}" class="box-body accpanel" style="display: block;">*/
/*                     <div id="shipping_info_list--{{ loop.index }}" class="order_list">*/
/*                         <div class="btn_area">*/
/*                             <ul id="shipping_info_list__menu--{{ loop.index }}">*/
/*                                 <li><a class="btn btn-default copyCustomerToShippingButton" data-idx="{{ loop.index0 }}">注文者情報をコピー</a></li>*/
/*                                 {% if BaseInfo.optionMultipleShipping %}*/
/*                                 <li><a class="btn btn-default" data-toggle="modal" data-target="#searchProductModal" data-idx="{{ loop.index0 }}">商品の追加</a></li>*/
/*                                 {% endif %}*/
/*                             </ul>*/
/*                         </div>*/
/* */
/*                         {% if BaseInfo.optionMultipleShipping %}*/
/*                         <div class="tableish"*/
/*                              id="shipment_item_list{{ loop.index0 }}"*/
/*                              data-prototype="*/
/*                              {% filter escape %}*/
/*                                      {{ include('Order/shipment_item_prototype.twig', { 'shipmentItemForm': shippingForm.ShipmentItems.vars.prototype }) }}*/
/*                              {% endfilter %}">*/
/* */
/*                         {% for shipmentItemForm in shippingForm.ShipmentItems %}*/
/*                             {{ form_widget(shipmentItemForm.Product) }}*/
/*                             {{ form_widget(shipmentItemForm.ProductClass) }}*/
/*                             <div id="shipment_item__id--{{ shippingIndex }}" class="item_box shipment_item_idx{{ shippingIndex }}">*/
/*                                 <div id="shipment_item__detail--{{ shippingIndex }}" class="item_detail">*/
/*                                     <div id="shipment_item__name_detail--{{ shippingIndex }}" class="item_name_area">*/
/*                                         <strong id="shipment_item__product_name--{{ shippingIndex }}" class="item_name">{{ shipmentItemForm.vars.value.product_name }}</strong><br>*/
/*                                         <span id="shipment_item__product_code--{{ shippingIndex }}" class="item_id small">{{ shipmentItemForm.vars.value.product_code }}</span>*/
/*                                             <span id="shipment_item__class_category_name--{{ shippingIndex }}" class="item_pattern small">*/
/*                                                 {% if shipmentItemForm.vars.value.class_category_name1 is not empty %}*/
/*                                                     / (*/
/*                                                     {{ shipmentItemForm.vars.value.class_name1 }}：*/
/*                                                     {{ shipmentItemForm.vars.value.class_category_name1 }}*/
/*                                                     {% if shipmentItemForm.vars.value.class_category_name2 is not empty %}*/
/*                                                         /*/
/*                                                         {{ shipmentItemForm.vars.value.class_name2 }}：*/
/*                                                         {{ shipmentItemForm.vars.value.class_category_name2 }}*/
/*                                                     {% endif %}*/
/*                                                     )*/
/*                                                 {% endif %}*/
/*                                             </span>*/
/*                                     </div>*/
/*                                     <div id="shipment_item__info_item--{{ shippingIndex }}" class="row">*/
/*                                         <div id="shipment_item__price--{{ shippingIndex }}" class="col-md-4 col-lg-3 form-group form-inline text-right">*/
/*                                             {{ form_widget(shipmentItemForm.price, {'read_only': 'readonly'}) }}*/
/*                                         </div>*/
/*                                         <div id="shipment_item__quantity--{{ shippingIndex }}" class="col-md-4 col-lg-3 form-group form-inline text-right">*/
/*                                             <span class="item_quantity">*/
/*                                                 数量：{{ form_widget(shipmentItemForm.quantity, {'attr': {'class': 'shipment_quantity'}}) }}*/
/*                                                 {{ form_errors(shipmentItemForm.quantity) }}*/
/*                                             </span>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div><!-- /.item_box -->*/
/*                             {{ form_widget(shipmentItemForm.itemidx) }}*/
/*                         {% endfor %}*/
/*                             </div>*/
/*                         {% endif %}*/
/* */
/*                         <hr>*/
/*                         <div id="shipment_item_detail--{{ loop.index }}" class="form-horizontal">*/
/*                             <div id="shipment_item_detail__name--{{ loop.index }}" class="form-group">*/
/*                                 {{ form_label(shippingForm.name) }}*/
/*                                 <div class="col-sm-9 col-lg-10 input_name form-inline">*/
/*                                     {{ form_widget(shippingForm.name.name01, { attr : { placeholder: '姓' }}) }}*/
/*                                     {{ form_widget(shippingForm.name.name02, { attr : { placeholder: '名' }}) }}*/
/*                                     {{ form_errors(shippingForm.name.name01) }}*/
/*                                     {{ form_errors(shippingForm.name.name02) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div id="shipment_item_detail__kana--{{ loop.index }}" class="form-group">*/
/*                                 {{ form_label(shippingForm.kana) }}*/
/*                                 <div class="col-sm-9 col-lg-10 input_name form-inline">*/
/*                                     {{ form_widget(shippingForm.kana.kana01, { attr : { placeholder : 'セイ' }}) }}*/
/*                                     {{ form_widget(shippingForm.kana.kana02, { attr : { placeholder : 'メイ' }}) }}*/
/*                                     {{ form_errors(shippingForm.kana.kana01) }}*/
/*                                     {{ form_errors(shippingForm.kana.kana02) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div id="shipment_item_detail__company_name--{{ loop.index }}" class="form-group">*/
/*                                 {{ form_label(shippingForm.company_name) }}*/
/*                                 <div class="col-sm-9 col-lg-10">*/
/*                                     {{ form_widget(shippingForm.company_name) }}*/
/*                                     {{ form_errors(shippingForm.company_name) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                             {# 住所：郵便番号 #}*/
/*                             <div id="shipment_item_detail__address--{{ loop.index }}" class="form-group">*/
/*                                 {{ form_label(shippingForm.address) }}*/
/*                                 <div id="shipment_item_detail__zip--{{ loop.index }}" class="col-sm-9 col-lg-10 input_zip form-inline">*/
/*                                     〒{{ form_widget(shippingForm.zip.zip01) }}-{{ form_widget(shippingForm.zip.zip02) }}*/
/*                                     {{ form_errors(shippingForm.zip.zip01) }}*/
/*                                     {{ form_errors(shippingForm.zip.zip02) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                             {# 住所：都道府県 #}*/
/*                             <div class="form-group">*/
/*                                 <div id="shipment_item_detail__pref--{{ loop.index }}" class="col-sm-offset-2 col-sm-9 col-lg-10 form-inline">*/
/*                                     {{ form_widget(shippingForm.address.pref) }}*/
/*                                     {{ form_errors(shippingForm.address.pref) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                             {# 住所：住所1 #}*/
/*                             <div class="form-group">*/
/*                                 <div id="shipment_item_detail__addr01--{{ loop.index }}" class="col-sm-offset-2 col-sm-9 col-lg-10">*/
/*                                     {{ form_widget(shippingForm.address.addr01, { attr : { placeholder : '市区町村名（例：千代田区神田神保町）'}} ) }}*/
/*                                     {{ form_errors(shippingForm.address.addr01) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                             {# 住所：住所2 #}*/
/*                             <div class="form-group">*/
/*                                 <div id="shipment_item_detail__addr02--{{ loop.index }}" class="col-sm-offset-2 col-sm-9 col-lg-10">*/
/*                                     {{ form_widget(shippingForm.address.addr02, { attr : { placeholder : '番地・ビル名（例：1-3-5）' }}) }}*/
/*                                     {{ form_errors(shippingForm.address.addr02) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                             {# 電話番号 #}*/
/*                             <div id="shipment_item_detail__tel--{{ loop.index }}" class="form-group">*/
/*                                 {{ form_label(shippingForm.tel) }}*/
/*                                 <div class="col-sm-9 col-lg-10 input_tel form-inline">*/
/*                                     {{ form_widget(shippingForm.tel.tel01) }}-{{ form_widget(shippingForm.tel.tel02) }}-{{ form_widget(shippingForm.tel.tel03) }}*/
/*                                     {{ form_errors(shippingForm.tel.tel01) }}*/
/*                                     {{ form_errors(shippingForm.tel.tel02) }}*/
/*                                     {{ form_errors(shippingForm.tel.tel03) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                             {# FAX番号 #}*/
/*                             <div id="shipment_item_detail__fax--{{ loop.index }}" class="form-group">*/
/*                                 {{ form_label(shippingForm.fax) }}*/
/*                                 <div class="col-sm-9 col-lg-10 input_tel form-inline">*/
/*                                     {{ form_widget(shippingForm.fax.fax01) }}-{{ form_widget(shippingForm.fax.fax02) }}-{{ form_widget(shippingForm.fax.fax03) }}*/
/*                                     {{ form_errors(shippingForm.fax) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                             {# 配送業者 #}*/
/*                             <div id="shipment_item_detail__delivery--{{ loop.index }}" class="form-group">*/
/*                                 {{ form_label(shippingForm.Delivery) }}*/
/*                                 <div id="shipment_item_detail__delivery_name--{{ loop.index }}" class="col-sm-9 col-lg-10">*/
/*                                     {% if shippingForm.vars.value.shipping_delivery_name is not empty %}*/
/*                                     {{ shippingForm.vars.value.shipping_delivery_name }}<br/>*/
/*                                     {% endif %}*/
/*                                     {{ form_widget(shippingForm.Delivery, {'attr': {'style': 'width:auto', 'class': 'shipping-delivery', 'data-idx': loop.index0}}) }}*/
/*                                     {{ form_errors(shippingForm.Delivery) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                             {# お届け時間 #}*/
/*                             <div id="shipment_item_detail__delivery_time--{{ loop.index }}" class="form-group">*/
/*                                 {{ form_label(shippingForm.DeliveryTime) }}*/
/*                                 <div class="col-sm-9 col-lg-10">*/
/*                                     {% if shippingForm.vars.value.shipping_delivery_time is not empty %}*/
/*                                     {{ shippingForm.vars.value.shipping_delivery_time }}<br/>*/
/*                                     {% else %}*/
/*                                         指定なし*/
/*                                     {% endif %}*/
/*                                     {{ form_widget(shippingForm.DeliveryTime, {'attr': {'style': 'width:auto', 'class': 'shipping-delivery-time', 'data-idx': loop.index0}}) }}*/
/*                                     {{ form_errors(shippingForm.DeliveryTime) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                             {# お届け日 #}*/
/*                             <div id="shipment_item_detail__shipping_delivery_date--{{ loop.index }}" class="form-group">*/
/*                                 {{ form_label(shippingForm.shipping_delivery_date) }}*/
/*                                 <div class="col-sm-9 col-lg-10">*/
/*                                     {{ form_widget(shippingForm.shipping_delivery_date) }}*/
/*                                     {{ form_errors(shippingForm.shipping_delivery_date) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="extra-form">*/
/*                                 {% for f in form.getIterator %}*/
/*                                     {% if f.vars.name matches '[^plg*]' %}*/
/*                                         {{ form_row(f) }}*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div><!-- /.box-body -->*/
/*            </div>*/
/*             {% endfor %}*/
/* */
/*             <div id="shop_info_box" class="box">*/
/*                 <div id="shop_info_box__header" class="box-header">*/
/*                     <h3 class="box-title">ショップ用メモ欄</h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 <div id="shop_info_box__note" class="box-body">{{ form_widget(form.note) }}</div>*/
/*             </div><!-- /.box -->*/
/* */
/*             <div id="detail__insert_button" class="row btn_area">*/
/*                 <p class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 text-center">*/
/*                     <button type="submit" class="btn btn-primary btn-block btn-lg" name="mode" value="register">受注情報を登録</button>*/
/*                 </p>*/
/*                 <!-- /.col -->*/
/*             </div>*/
/* */
/*             <div id="detail__back_button" class="row hidden-xs hidden-sm">*/
/*                 <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 text-center btn_area">*/
/*                     {% if id is not null %}*/
/*                         <p><a href="{{ url('admin_order') }}">戻る</a></p>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div><!-- /.col -->*/
/* */
/*     </form>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block modal %}*/
/* */
/* {# 会員検索モーダル #}*/
/* <div class="modal fade" id="searchCustomerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*     <div class="modal-dialog modal-lg">*/
/*         <div id="search_customer_modal_box" class="modal-content">*/
/*             <div id="search_customer_modal_box__header" class="modal-header">*/
/*                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="modal-close" aria-hidden="true">&times;</span></button>*/
/*                 <h4 class="modal-title" id="myModalLabel">会員検索</h4>*/
/*             </div>*/
/*             <div id="search_customer_modal_box__body" class="modal-body">*/
/*                 <div class="form-group">*/
/*                     {{ form_widget(searchCustomerModalForm.multi, { attr : { placeholder : '会員ID・メールアドレス・お名前' } } ) }}*/
/*                 </div>*/
/*                 <div class="extra-form form-group">*/
/*                     {% for f in searchCustomerModalForm.getIterator %}*/
/*                         {% if f.vars.name matches '[^plg*]' %}*/
/*                             {{ form_label(f) }}*/
/*                             {{ form_widget(f) }}*/
/*                             {{ form_errors(f) }}*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 </div>*/
/*                 <div id="search_customer_modal_box__button_search" class="form-group">*/
/*                     <button type="button" id="searchCustomerModalButton" class="btn btn-primary" >検索</button>*/
/*                 </div>*/
/*                 <div id="search_customer_modal_box__body_inner" class="form-group">*/
/*                     <div class="table-responsive">*/
/*                         <table class="table table-striped" id="searchCustomerModalList">*/
/*                             <thead >*/
/*                             <tr id="search_customer_modal_box__body_inner_header">*/
/*                                 <th>会員ID</th>*/
/*                                 <th>お名前(カナ)</th>*/
/*                                 <th>電話番号</th>*/
/*                                 <th>決定</th>*/
/*                             </tr>*/
/*                             </thead>*/
/*                             <tbody id="search_customer_modal_box__body_inner_body">*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* {# 商品検索モーダル #}*/
/* <div class="modal fade" id="searchProductModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*     <div class="modal-dialog modal-lg">*/
/*         <div id="search_product_modal_box" class="modal-content">*/
/*             <div id="search_product_modal_box__header" class="modal-header">*/
/*                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="modal-close" aria-hidden="true">&times;</span></button>*/
/*                 <h4 class="modal-title" id="myModalLabel">商品検索</h4>*/
/*             </div>*/
/*             <div id="search_product_modal_box__body" class="modal-body">*/
/*                 <div id="search_product_modal_box__id" class="form-group">*/
/*                     {{ form_widget(searchProductModalForm.id, { attr : { placeholder : '商品名・ID・コード' } } ) }}*/
/*                 </div>*/
/*                 <div id="search_product_modal_box__category_id" class="form-group">*/
/*                     {{ form_widget(searchProductModalForm.category_id) }}*/
/*                 </div>*/
/*                 <div class="extra-form form-group">*/
/*                     {% for f in searchProductModalForm.getIterator %}*/
/*                         {% if f.vars.name matches '[^plg*]' %}*/
/*                             {{ form_label(f) }}*/
/*                             {{ form_widget(f) }}*/
/*                             {{ form_errors(f) }}*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 </div>*/
/*                 <div id="search_product_modal_box__button_search" class="form-group">*/
/*                     <button type="button" id="searchProductModalButton" class="btn btn-primary">検索</button>*/
/*                 </div>*/
/*                 <div class="form-group" id="searchProductModalList">*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
