<?php

/* __string_template__41d55d1cec3f57704e6d76ed5f503ce251f593a4da7c46e365d096100a56f255 */
class __TwigTemplate_a30960396e7c823bdd3aef5c926f25c8a9ecad530e86da8f1b1481f7e8471e6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__41d55d1cec3f57704e6d76ed5f503ce251f593a4da7c46e365d096100a56f255", 22);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
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
        // line 24
        $context["menus"] = array(0 => "order", 1 => "order_master");
        // line 29
        $this->env->getExtension('form')->renderer->setTheme((isset($context["searchForm"]) ? $context["searchForm"] : null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
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
        echo "受注マスター";
    }

    // line 31
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 32
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/css/bootstrap-datetimepicker.min.css\">
";
    }

    // line 35
    public function block_javascript($context, array $blocks = array())
    {
        // line 36
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/moment.min.js\"></script>
<script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/moment-ja.js\"></script>
<script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/bootstrap-datetimepicker.min.js\"></script>
<script>
  \$(function() {

    var inputDate = document.createElement('input');
    inputDate.setAttribute('type', 'date');
    if (inputDate.type !== 'date') {
      \$('input[id\$=_date_start]').datetimepicker({
        locale: 'ja',
        format: 'YYYY-MM-DD',
        useCurrent: false,
        showTodayButton: true
      });

      \$('input[id\$=_date_end]').datetimepicker({
        locale: 'ja',
        format: 'YYYY-MM-DD',
        useCurrent: false,
        showTodayButton: true
      });
    }


    // 登録チェックボックス
    \$('#check-all').click(function() {
      var checkall = \$('#check-all').prop('checked');
      if (checkall) {
        \$('input[id^=check-]').prop('checked', true);
        } else {
        \$('input[id^=check-]').prop('checked', false);
      }
    });

    \$('#dropmenu ul a').click(function(event) {
      event.preventDefault();
      var href = \$(this).attr('href');
      var isChecked = false;
      \$('input[id^=check-]').each(function() {
        var check = \$(this).prop('checked');
        if (check) {
          isChecked = true;
        }
      });
      if (!isChecked) {
        alert(\"チェックボックスが選択されていません\");
        return false;
      }
      \$('#dropdown-form').attr('action', href).submit();
    });

    // フォーム値を確認し、アコーディオンを制御
    // 値あり : 開く / 値なし : 閉じる
    (function(\$, f) {
        //フォームがないページは処理キャンセル
        var \$ac = \$(\".accpanel\");
        if (!\$ac) {
            return false
        }

        //フォーム内全項目取得
        var c = f();
        if (c.formState()) {
            if (\$ac.css(\"display\") == \"none\") {
                \$ac.parent('li').addClass(\"active\");
                \$ac.slideDown(0);
            }
        } else {
            \$ac.parent('li').removeClass(\"active\");
            \$ac.slideUp(0);
        }
    })(\$, formPropStateSubscriber);
});
</script>
";
    }

    // line 113
    public function block_main($context, array $blocks = array())
    {
        // line 114
        echo "<!--検索条件設定テーブルここから-->
<div id=\"search_wrap\" class=\"search-box\">
  <form name=\"search_form\" id=\"search_form\" method=\"post\" action=\"";
        // line 116
        echo $this->env->getExtension('eccube')->getUrl("admin_order");
        echo "\">
    ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "_token", array()), 'widget');
        echo "
    <div id=\"search_box_main\" class=\"row\">
      <div id=\"search_box_main__body\" class=\"col-md-12 accordion\">
        ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "multi", array()), 'widget', array("attr" => array("placeholder" => "受注ID・購入者名・購入者会社名", "class" => "input_search")));
        echo "

        <a href=\"#\" class=\"toggle";
        // line 122
        if ((isset($context["active"]) ? $context["active"] : null)) {
            echo " active";
        }
        echo "\">
          <svg class=\"cb cb-minus\"> <use xlink:href=\"#cb-minus\"/></svg> <svg class=\"cb cb-minus\"> <use xlink:href=\"#cb-minus\"/></svg>
        </a>
        <div id=\"search_box_main__body_toggle\" class=\"search-box-inner accpanel\" ";
        // line 125
        if ((isset($context["active"]) ? $context["active"] : null)) {
            echo " style=\"display: block;\"";
        }
        echo ">
          <div class=\"row\">
            <div id=\"search_box_main__body_inner\" class=\"col-sm-12 col-lg-10 col-lg-offset-1 search\">

              <div class=\"row\">
                <div class=\"col-md-6\">
                  <div id=\"search_box_main__status\" class=\"form-group\">
                    <label>対応状況</label>
                    ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "status", array()), 'widget');
        echo "
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div id=\"search_box_main__name\" class=\"form-group\">
                    <label>お名前</label>
                    ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "name", array()), 'widget');
        echo "
                  </div>
                </div>
              </div><!-- /.row -->
              <div class=\"row\">
                <div class=\"col-md-6\">
                  <div id=\"search_box_main__kana\" class=\"form-group\">
                    <label>お名前(フリガナ)</label>
                    ";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "kana", array()), 'widget');
        echo "
                    ";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "kana", array()), 'errors');
        echo "
                  </div>
                </div>
                <div id=\"search_box_main__email\" class=\"col-md-6\">
                  <label>メールアドレス</label>
                  <div class=\"form-group\">
                    ";
        // line 154
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "email", array()), 'widget');
        echo "
                    ";
        // line 155
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "email", array()), 'errors');
        echo "
                  </div>
                </div>
              </div><!-- /.row -->

              <div class=\"row\">
                <div class=\"col-sm-6\">
                  <div id=\"search_box_main__tel\" class=\"form-group\">
                    <label>電話番号</label>
                    ";
        // line 164
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "tel", array()), 'widget');
        echo "
                    ";
        // line 165
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "tel", array()), 'errors');
        echo "
                  </div>
                </div>
                <div class=\"col-xs-6\">
                  <div id=\"search_box_main__sex\" class=\"form-group\">
                    <label>性別</label>
                    ";
        // line 171
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "sex", array()), 'widget');
        echo "
                  </div>
                </div>
              </div><!-- /.row -->

              <div class=\"row\">
                <div class=\"col-sm-12\">
                  <div id=\"search_box_main__payment\" class=\"form-group\">
                    <label>支払方法</label>
                    <div>
                      ";
        // line 181
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "payment", array()), 'widget');
        echo "
                    </div>
                  </div>
                </div>
              </div><!-- /.row -->

              <div class=\"row\">
                <div id=\"search_box_main__order_date\" class=\"col-sm-6\">
                  <label>受注日</label>
                  <div class=\"form-group range\">
                    ";
        // line 191
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "order_date_start", array()), 'widget', array("attr" => array("class" => "input_cal")));
        echo " ～ ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "order_date_end", array()), 'widget', array("attr" => array("class" => "input_cal")));
        echo "
                  </div>
                </div>
                <div id=\"search_box_main__payment_date\" class=\"col-sm-6\">
                  <label>入金日</label>
                  <div class=\"form-group range\">
                    ";
        // line 197
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "payment_date_start", array()), 'widget', array("attr" => array("class" => "input_cal")));
        echo " ～ ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "payment_date_end", array()), 'widget', array("attr" => array("class" => "input_cal")));
        echo "
                  </div>
                </div>
              </div><!-- /.row -->

              <div class=\"row\">
                <div id=\"search_box_main__commit_date\" class=\"col-sm-6\">
                  <label>発送日</label>
                  <div class=\"form-group range\">
                    ";
        // line 206
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "commit_date_start", array()), 'widget', array("attr" => array("class" => "input_cal")));
        echo " ～ ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "commit_date_end", array()), 'widget', array("attr" => array("class" => "input_cal")));
        echo "
                  </div>
                </div>
                <div id=\"search_box_main__update_date\" class=\"col-sm-6\">
                  <label>更新日</label>
                  <div class=\"form-group range\">
                    ";
        // line 212
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "update_date_start", array()), 'widget', array("attr" => array("class" => "input_cal")));
        echo " ～ ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "update_date_end", array()), 'widget', array("attr" => array("class" => "input_cal")));
        echo "
                  </div>
                </div>
              </div><!-- /.row -->

              <div class=\"row\">
                <div class=\"col-sm-6\">
                  <div id=\"search_box_main__payment_total\" class=\"form-group range\">
                    <label>購入金額</label>
                    ";
        // line 221
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "payment_total_start", array()), 'widget');
        echo " ～ ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "payment_total_end", array()), 'widget');
        echo "
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div id=\"search_box_main__buy_product_name\" class=\"form-group\">
                    <label>購入商品名</label>
                    ";
        // line 227
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "buy_product_name", array()), 'widget');
        echo "
                  </div>
                </div>
                  <div class=\"extra-form col-md-12\">
                      ";
        // line 231
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 232
            echo "                          ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 233
                echo "                            <div class=\"form-group\">
                              ";
                // line 234
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'label');
                echo "
                              ";
                // line 235
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'widget');
                echo "
                              ";
                // line 236
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'errors');
                echo "
                            </div>
                          ";
            }
            // line 239
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        echo "                  </div>

              </div><!-- /.row -->
              <div id=\"search_box_main__clear\" class=\"row\">
                <div class=\"col-sm-12\">
                  <p class=\"text-center\"><a href=\"#\" class=\"search-clear\">検索条件をクリア</a></p>
                </div>
              </div><!-- /.row -->
            </div>
          </div>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <div id=\"search_box_footer\" class=\"row btn_area\">
      <div id=\"search_box_footer__button_area\" class=\"col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 text-center\">
        <button type=\"submit\" class=\"btn btn-primary btn-block btn-lg\">
          検索する <svg class=\"cb cb-angle-right\"> <use xlink:href=\"#cb-angle-right\" /></svg>
        </button>
      </div>
      <!-- /.col -->
    </div>
  </form>
</div>
<!--検索条件設定テーブルここまで-->

";
        // line 266
        if ((isset($context["pagination"]) ? $context["pagination"] : null)) {
            // line 267
            echo "    <div id=\"result_list\" class=\"row\">
        <div class=\"col-md-12\">
            <div id=\"result_list_main\" class=\"box\">
                ";
            // line 270
            if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "totalItemCount", array()) > 0)) {
                // line 271
                echo "                <div id=\"result_list_main__header\" class=\"box-header with-arrow\">
                    <h3 class=\"box-title\">検索結果 <span class=\"normal\"><strong>";
                // line 272
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "totalItemCount", array()), "html", null, true);
                echo " 件</strong> が該当しました</span></h3>
                </div><!-- /.box-header -->
                <div id=\"result_list_main__body\" class=\"box-body\">
                    <div id=\"result_list_main__menu\" class=\"row\">
                        <div class=\"col-md-12\">
                            <ul class=\"sort-dd\">
                                <li id=\"result_list_main__pagemax_menu\" class=\"dropdown\">
                                    ";
                // line 279
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["pageMaxis"]) ? $context["pageMaxis"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["pageMax"]) {
                    if (($this->getAttribute($context["pageMax"], "name", array()) == (isset($context["page_count"]) ? $context["page_count"] : null))) {
                        // line 280
                        echo "                                        <a id=\"result_list_main__pagemax_menu_toggle\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["pageMax"], "name", array()));
                        echo "件<svg class=\"cb cb-angle-down icon_down\"> <use xlink:href=\"#cb-angle-down\" /></svg></a>
                                        <ul class=\"dropdown-menu\">
                                    ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageMax'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 283
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["pageMaxis"]) ? $context["pageMaxis"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["pageMax"]) {
                    if (($this->getAttribute($context["pageMax"], "name", array()) != (isset($context["page_count"]) ? $context["page_count"] : null))) {
                        // line 284
                        echo "                                            <li><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPath("admin_order_page", array("page_no" => 1, "page_count" => $this->getAttribute($context["pageMax"], "name", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["pageMax"], "name", array()));
                        echo "件</a></li>
                                    ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageMax'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 286
                echo "                                        </ul>
                                </li>
                                <li id=\"result_list_main__csv_menu\" class=\"dropdown\">
                                    <a id=\"result_list_main__csv_menu_toggle\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">CSVダウンロード<svg class=\"cb cb-angle-down icon_down\"> <use xlink:href=\"#cb-angle-down\" /></svg></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
                // line 291
                echo $this->env->getExtension('eccube')->getUrl("admin_order_export_order");
                echo "\">受注CSVダウンロード</a></li>
                                        <li><a href=\"";
                // line 292
                echo $this->env->getExtension('eccube')->getUrl("admin_order_export_shipping");
                echo "\">配送CSVダウンロード</a></li>
                                        <li><a href=\"";
                // line 293
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_setting_shop_csv", array("id" => twig_constant("\\Eccube\\Entity\\Master\\CsvType::CSV_TYPE_ORDER"))), "html", null, true);
                echo "\">受注CSV出力項目設定</a></li>
                                        <li><a href=\"";
                // line 294
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_setting_shop_csv", array("id" => twig_constant("\\Eccube\\Entity\\Master\\CsvType::CSV_TYPE_SHIPPING"))), "html", null, true);
                echo "\">配送CSV出力項目設定</a></li>
                                    </ul>
                                </li>
                                <li id=\"dropmenu\" class=\"dropdown\">
                                    <a id=\"result_list_main__other_menu_toggle\"class=\"dropdown-toggle\" data-toggle=\"dropdown\">その他<svg class=\"cb cb-angle-down icon_down\"> <use xlink:href=\"#cb-angle-down\" /></svg></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
                // line 300
                echo $this->env->getExtension('eccube')->getUrl("admin_order_mail_all");
                echo "\">メール一括通知</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <form id=\"dropdown-form\">
                    <div id=\"result_list_main__list\" class=\"table_list\">
                        <div id=\"result_list_main__list_body\" class=\"table-responsive with-border\">
                            <table class=\"table table-striped\">
                                <thead>
                                    <tr id=\"result_list_main__header\">
                                        <th class=\"text-center\"><input type=\"checkbox\" id=\"check-all\"></th>
                                        <th id=\"result_list_main__header_order_date\">受注日</th>
                                        <th id=\"result_list_main__header_id\">注文番号</th>
                                        <th id=\"result_list_main__header_name\">お名前</th>
                                        <th id=\"result_list_main__header_payment_method\">支払方法</th>
                                        <th id=\"result_list_main__header_payment_total\">購入金額(円)</th>
                                        <th id=\"result_list_main__header_commit_date\">発送日</th>
                                        <th id=\"result_list_main__header_order_status\">対応状況</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                            ";
                // line 324
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["Order"]) {
                    // line 325
                    echo "                                    <tr id=\"result_list_main__item--";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "\">
                                        <td id=\"result_list_main__id_check--";
                    // line 326
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "\" class=\"text-center\"><input type=\"checkbox\" id=\"check-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "\" name=\"ids";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "\"></td>
                                        <td id=\"result_list_main__order_date--";
                    // line 327
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getDateFormatFilter($this->getAttribute($context["Order"], "order_date", array())), "html", null, true);
                    echo "</td>
                                        <td id=\"result_list_main__id--";
                    // line 328
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_order_edit", array("id" => $this->getAttribute($context["Order"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "</a></td>
                                        <td id=\"result_list_main__name--";
                    // line 329
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "name01", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "name02", array()), "html", null, true);
                    echo "</td>
                                        <td id=\"result_list_main__payment_method--";
                    // line 330
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "payment_method", array()), "html", null, true);
                    echo "</td>
                                        <td id=\"result_list_main__payment_total--";
                    // line 331
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "\" class=\"text-right\">";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["Order"], "payment_total", array())), "html", null, true);
                    echo "</td>
                                        <td id=\"result_list_main__commit_date--";
                    // line 332
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getDateFormatFilter($this->getAttribute($context["Order"], "commit_date", array())), "html", null, true);
                    echo "</td>
                                        <td id=\"result_list_main__order_status--";
                    // line 333
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "OrderStatus", array()), "html", null, true);
                    echo "</td>
                                        <td id=\"result_list_main__item_menu_box--";
                    // line 334
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "\" class=\"icon_edit\">
                                            <div id=\"result_list_main__item_menu--";
                    // line 335
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "\" class=\"dropdown\">
                                                <a id=\"result_list_main__item_menu_toggle--";
                    // line 336
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><svg class=\"cb cb-ellipsis-h\"> <use xlink:href=\"#cb-ellipsis-h\" /></svg></a>
                                                <ul id=\"result_list_main_item_menu--";
                    // line 337
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "\" class=\"dropdown-menu dropdown-menu-right\">
                                                <li><a href=\"";
                    // line 338
                    echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_order_edit", array("id" => $this->getAttribute($context["Order"], "id", array()))), "html", null, true);
                    echo "\">編集</a></li>
                                                <li><a href=\"";
                    // line 339
                    echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_order_delete", array("id" => $this->getAttribute($context["Order"], "id", array()))), "html", null, true);
                    echo "\" ";
                    echo $this->env->getExtension('eccube')->getCsrfTokenForAnchor();
                    echo " data-method=\"delete\" data-message=\"この受注情報を削除してもよろしいですか？\">削除</a></li>
                                                <li><a href=\"";
                    // line 340
                    echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_order_mail", array("id" => $this->getAttribute($context["Order"], "id", array()))), "html", null, true);
                    echo "\">メール通知</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Order'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 346
                echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                    </form>
                </div><!-- /.box-body -->
                ";
                // line 352
                if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "totalItemCount", array()) > 0)) {
                    // line 353
                    echo "                    ";
                    $this->loadTemplate("pager.twig", "__string_template__41d55d1cec3f57704e6d76ed5f503ce251f593a4da7c46e365d096100a56f255", 353)->display(array_merge($context, array("pages" => $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "paginationData", array()), "routes" => "admin_order_page")));
                    // line 354
                    echo "                ";
                }
                // line 355
                echo "                ";
            } else {
                // line 356
                echo "                <div class=\"box-header with-arrow\">
                    <h3 class=\"box-title\">検索条件に該当するデータがありませんでした。</h3>
                </div><!-- /.box-header -->
                ";
            }
            // line 360
            echo "            </div><!-- /.box -->
        </div><!-- /.col -->
    </div>

";
        }
        // line 365
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__41d55d1cec3f57704e6d76ed5f503ce251f593a4da7c46e365d096100a56f255";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  652 => 365,  645 => 360,  639 => 356,  636 => 355,  633 => 354,  630 => 353,  628 => 352,  620 => 346,  608 => 340,  602 => 339,  598 => 338,  594 => 337,  590 => 336,  586 => 335,  582 => 334,  576 => 333,  570 => 332,  564 => 331,  558 => 330,  550 => 329,  542 => 328,  536 => 327,  526 => 326,  521 => 325,  517 => 324,  490 => 300,  481 => 294,  477 => 293,  473 => 292,  469 => 291,  462 => 286,  450 => 284,  444 => 283,  433 => 280,  428 => 279,  418 => 272,  415 => 271,  413 => 270,  408 => 267,  406 => 266,  378 => 240,  372 => 239,  366 => 236,  362 => 235,  358 => 234,  355 => 233,  352 => 232,  348 => 231,  341 => 227,  330 => 221,  316 => 212,  305 => 206,  291 => 197,  280 => 191,  267 => 181,  254 => 171,  245 => 165,  241 => 164,  229 => 155,  225 => 154,  216 => 148,  212 => 147,  201 => 139,  192 => 133,  179 => 125,  171 => 122,  166 => 120,  160 => 117,  156 => 116,  152 => 114,  149 => 113,  71 => 38,  67 => 37,  62 => 36,  59 => 35,  52 => 32,  49 => 31,  43 => 27,  37 => 26,  33 => 22,  31 => 29,  29 => 24,  11 => 22,);
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
/* {% set menus = ['order', 'order_master'] %}*/
/* */
/* {% block title %}受注管理{% endblock %}*/
/* {% block sub_title %}受注マスター{% endblock %}*/
/* */
/* {% form_theme searchForm 'Form/bootstrap_3_horizontal_layout.html.twig' %}*/
/* */
/* {% block stylesheet %}*/
/* <link rel="stylesheet" href="{{ app.config.admin_urlpath }}/assets/css/bootstrap-datetimepicker.min.css">*/
/* {% endblock stylesheet %}*/
/* */
/* {% block javascript %}*/
/* <script src="{{ app.config.admin_urlpath }}/assets/js/vendor/moment.min.js"></script>*/
/* <script src="{{ app.config.admin_urlpath }}/assets/js/vendor/moment-ja.js"></script>*/
/* <script src="{{ app.config.admin_urlpath }}/assets/js/vendor/bootstrap-datetimepicker.min.js"></script>*/
/* <script>*/
/*   $(function() {*/
/* */
/*     var inputDate = document.createElement('input');*/
/*     inputDate.setAttribute('type', 'date');*/
/*     if (inputDate.type !== 'date') {*/
/*       $('input[id$=_date_start]').datetimepicker({*/
/*         locale: 'ja',*/
/*         format: 'YYYY-MM-DD',*/
/*         useCurrent: false,*/
/*         showTodayButton: true*/
/*       });*/
/* */
/*       $('input[id$=_date_end]').datetimepicker({*/
/*         locale: 'ja',*/
/*         format: 'YYYY-MM-DD',*/
/*         useCurrent: false,*/
/*         showTodayButton: true*/
/*       });*/
/*     }*/
/* */
/* */
/*     // 登録チェックボックス*/
/*     $('#check-all').click(function() {*/
/*       var checkall = $('#check-all').prop('checked');*/
/*       if (checkall) {*/
/*         $('input[id^=check-]').prop('checked', true);*/
/*         } else {*/
/*         $('input[id^=check-]').prop('checked', false);*/
/*       }*/
/*     });*/
/* */
/*     $('#dropmenu ul a').click(function(event) {*/
/*       event.preventDefault();*/
/*       var href = $(this).attr('href');*/
/*       var isChecked = false;*/
/*       $('input[id^=check-]').each(function() {*/
/*         var check = $(this).prop('checked');*/
/*         if (check) {*/
/*           isChecked = true;*/
/*         }*/
/*       });*/
/*       if (!isChecked) {*/
/*         alert("チェックボックスが選択されていません");*/
/*         return false;*/
/*       }*/
/*       $('#dropdown-form').attr('action', href).submit();*/
/*     });*/
/* */
/*     // フォーム値を確認し、アコーディオンを制御*/
/*     // 値あり : 開く / 値なし : 閉じる*/
/*     (function($, f) {*/
/*         //フォームがないページは処理キャンセル*/
/*         var $ac = $(".accpanel");*/
/*         if (!$ac) {*/
/*             return false*/
/*         }*/
/* */
/*         //フォーム内全項目取得*/
/*         var c = f();*/
/*         if (c.formState()) {*/
/*             if ($ac.css("display") == "none") {*/
/*                 $ac.parent('li').addClass("active");*/
/*                 $ac.slideDown(0);*/
/*             }*/
/*         } else {*/
/*             $ac.parent('li').removeClass("active");*/
/*             $ac.slideUp(0);*/
/*         }*/
/*     })($, formPropStateSubscriber);*/
/* });*/
/* </script>*/
/* {% endblock javascript %}*/
/* */
/* {% block main %}*/
/* <!--検索条件設定テーブルここから-->*/
/* <div id="search_wrap" class="search-box">*/
/*   <form name="search_form" id="search_form" method="post" action="{{ url('admin_order') }}">*/
/*     {{ form_widget(searchForm._token) }}*/
/*     <div id="search_box_main" class="row">*/
/*       <div id="search_box_main__body" class="col-md-12 accordion">*/
/*         {{ form_widget(searchForm.multi, { attr: { placeholder: '受注ID・購入者名・購入者会社名', class : 'input_search' } } ) }}*/
/* */
/*         <a href="#" class="toggle{% if active %} active{% endif %}">*/
/*           <svg class="cb cb-minus"> <use xlink:href="#cb-minus"/></svg> <svg class="cb cb-minus"> <use xlink:href="#cb-minus"/></svg>*/
/*         </a>*/
/*         <div id="search_box_main__body_toggle" class="search-box-inner accpanel" {% if active %} style="display: block;"{% endif %}>*/
/*           <div class="row">*/
/*             <div id="search_box_main__body_inner" class="col-sm-12 col-lg-10 col-lg-offset-1 search">*/
/* */
/*               <div class="row">*/
/*                 <div class="col-md-6">*/
/*                   <div id="search_box_main__status" class="form-group">*/
/*                     <label>対応状況</label>*/
/*                     {{ form_widget(searchForm.status) }}*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/*                   <div id="search_box_main__name" class="form-group">*/
/*                     <label>お名前</label>*/
/*                     {{ form_widget(searchForm.name) }}*/
/*                   </div>*/
/*                 </div>*/
/*               </div><!-- /.row -->*/
/*               <div class="row">*/
/*                 <div class="col-md-6">*/
/*                   <div id="search_box_main__kana" class="form-group">*/
/*                     <label>お名前(フリガナ)</label>*/
/*                     {{ form_widget(searchForm.kana) }}*/
/*                     {{ form_errors(searchForm.kana) }}*/
/*                   </div>*/
/*                 </div>*/
/*                 <div id="search_box_main__email" class="col-md-6">*/
/*                   <label>メールアドレス</label>*/
/*                   <div class="form-group">*/
/*                     {{ form_widget(searchForm.email) }}*/
/*                     {{ form_errors(searchForm.email) }}*/
/*                   </div>*/
/*                 </div>*/
/*               </div><!-- /.row -->*/
/* */
/*               <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                   <div id="search_box_main__tel" class="form-group">*/
/*                     <label>電話番号</label>*/
/*                     {{ form_widget(searchForm.tel) }}*/
/*                     {{ form_errors(searchForm.tel) }}*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="col-xs-6">*/
/*                   <div id="search_box_main__sex" class="form-group">*/
/*                     <label>性別</label>*/
/*                     {{ form_widget(searchForm.sex) }}*/
/*                   </div>*/
/*                 </div>*/
/*               </div><!-- /.row -->*/
/* */
/*               <div class="row">*/
/*                 <div class="col-sm-12">*/
/*                   <div id="search_box_main__payment" class="form-group">*/
/*                     <label>支払方法</label>*/
/*                     <div>*/
/*                       {{ form_widget(searchForm.payment) }}*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </div><!-- /.row -->*/
/* */
/*               <div class="row">*/
/*                 <div id="search_box_main__order_date" class="col-sm-6">*/
/*                   <label>受注日</label>*/
/*                   <div class="form-group range">*/
/*                     {{ form_widget(searchForm.order_date_start, {'attr': {'class': 'input_cal'}}) }} ～ {{ form_widget(searchForm.order_date_end, {'attr': {'class': 'input_cal'}}) }}*/
/*                   </div>*/
/*                 </div>*/
/*                 <div id="search_box_main__payment_date" class="col-sm-6">*/
/*                   <label>入金日</label>*/
/*                   <div class="form-group range">*/
/*                     {{ form_widget(searchForm.payment_date_start, {'attr': {'class': 'input_cal'}}) }} ～ {{ form_widget(searchForm.payment_date_end, {'attr': {'class': 'input_cal'}}) }}*/
/*                   </div>*/
/*                 </div>*/
/*               </div><!-- /.row -->*/
/* */
/*               <div class="row">*/
/*                 <div id="search_box_main__commit_date" class="col-sm-6">*/
/*                   <label>発送日</label>*/
/*                   <div class="form-group range">*/
/*                     {{ form_widget(searchForm.commit_date_start, {'attr': {'class': 'input_cal'}}) }} ～ {{ form_widget(searchForm.commit_date_end, {'attr': {'class': 'input_cal'}}) }}*/
/*                   </div>*/
/*                 </div>*/
/*                 <div id="search_box_main__update_date" class="col-sm-6">*/
/*                   <label>更新日</label>*/
/*                   <div class="form-group range">*/
/*                     {{ form_widget(searchForm.update_date_start, {'attr': {'class': 'input_cal'}}) }} ～ {{ form_widget(searchForm.update_date_end, {'attr': {'class': 'input_cal'}}) }}*/
/*                   </div>*/
/*                 </div>*/
/*               </div><!-- /.row -->*/
/* */
/*               <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                   <div id="search_box_main__payment_total" class="form-group range">*/
/*                     <label>購入金額</label>*/
/*                     {{ form_widget(searchForm.payment_total_start) }} ～ {{ form_widget(searchForm.payment_total_end) }}*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/*                   <div id="search_box_main__buy_product_name" class="form-group">*/
/*                     <label>購入商品名</label>*/
/*                     {{ form_widget(searchForm.buy_product_name) }}*/
/*                   </div>*/
/*                 </div>*/
/*                   <div class="extra-form col-md-12">*/
/*                       {% for f in searchForm.getIterator %}*/
/*                           {% if f.vars.name matches '[^plg*]' %}*/
/*                             <div class="form-group">*/
/*                               {{ form_label(f) }}*/
/*                               {{ form_widget(f) }}*/
/*                               {{ form_errors(f) }}*/
/*                             </div>*/
/*                           {% endif %}*/
/*                       {% endfor %}*/
/*                   </div>*/
/* */
/*               </div><!-- /.row -->*/
/*               <div id="search_box_main__clear" class="row">*/
/*                 <div class="col-sm-12">*/
/*                   <p class="text-center"><a href="#" class="search-clear">検索条件をクリア</a></p>*/
/*                 </div>*/
/*               </div><!-- /.row -->*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <!-- /.col -->*/
/*     </div>*/
/*     <div id="search_box_footer" class="row btn_area">*/
/*       <div id="search_box_footer__button_area" class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 text-center">*/
/*         <button type="submit" class="btn btn-primary btn-block btn-lg">*/
/*           検索する <svg class="cb cb-angle-right"> <use xlink:href="#cb-angle-right" /></svg>*/
/*         </button>*/
/*       </div>*/
/*       <!-- /.col -->*/
/*     </div>*/
/*   </form>*/
/* </div>*/
/* <!--検索条件設定テーブルここまで-->*/
/* */
/* {% if pagination %}*/
/*     <div id="result_list" class="row">*/
/*         <div class="col-md-12">*/
/*             <div id="result_list_main" class="box">*/
/*                 {% if pagination.totalItemCount > 0 %}*/
/*                 <div id="result_list_main__header" class="box-header with-arrow">*/
/*                     <h3 class="box-title">検索結果 <span class="normal"><strong>{{ pagination.totalItemCount }} 件</strong> が該当しました</span></h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 <div id="result_list_main__body" class="box-body">*/
/*                     <div id="result_list_main__menu" class="row">*/
/*                         <div class="col-md-12">*/
/*                             <ul class="sort-dd">*/
/*                                 <li id="result_list_main__pagemax_menu" class="dropdown">*/
/*                                     {% for pageMax in pageMaxis if pageMax.name == page_count %}*/
/*                                         <a id="result_list_main__pagemax_menu_toggle" class="dropdown-toggle" data-toggle="dropdown">{{ pageMax.name|e }}件<svg class="cb cb-angle-down icon_down"> <use xlink:href="#cb-angle-down" /></svg></a>*/
/*                                         <ul class="dropdown-menu">*/
/*                                     {% endfor %}*/
/*                                     {% for pageMax in pageMaxis if pageMax.name != page_count %}*/
/*                                             <li><a href="{{ path('admin_order_page', {'page_no': 1, 'page_count': pageMax.name}) }}">{{ pageMax.name|e }}件</a></li>*/
/*                                     {% endfor %}*/
/*                                         </ul>*/
/*                                 </li>*/
/*                                 <li id="result_list_main__csv_menu" class="dropdown">*/
/*                                     <a id="result_list_main__csv_menu_toggle" class="dropdown-toggle" data-toggle="dropdown">CSVダウンロード<svg class="cb cb-angle-down icon_down"> <use xlink:href="#cb-angle-down" /></svg></a>*/
/*                                     <ul class="dropdown-menu">*/
/*                                         <li><a href="{{ url('admin_order_export_order') }}">受注CSVダウンロード</a></li>*/
/*                                         <li><a href="{{ url('admin_order_export_shipping') }}">配送CSVダウンロード</a></li>*/
/*                                         <li><a href="{{ url('admin_setting_shop_csv', { id : constant('\\Eccube\\Entity\\Master\\CsvType::CSV_TYPE_ORDER') }) }}">受注CSV出力項目設定</a></li>*/
/*                                         <li><a href="{{ url('admin_setting_shop_csv', { id : constant('\\Eccube\\Entity\\Master\\CsvType::CSV_TYPE_SHIPPING') }) }}">配送CSV出力項目設定</a></li>*/
/*                                     </ul>*/
/*                                 </li>*/
/*                                 <li id="dropmenu" class="dropdown">*/
/*                                     <a id="result_list_main__other_menu_toggle"class="dropdown-toggle" data-toggle="dropdown">その他<svg class="cb cb-angle-down icon_down"> <use xlink:href="#cb-angle-down" /></svg></a>*/
/*                                     <ul class="dropdown-menu">*/
/*                                         <li><a href="{{ url('admin_order_mail_all') }}">メール一括通知</a></li>*/
/*                                     </ul>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                     <form id="dropdown-form">*/
/*                     <div id="result_list_main__list" class="table_list">*/
/*                         <div id="result_list_main__list_body" class="table-responsive with-border">*/
/*                             <table class="table table-striped">*/
/*                                 <thead>*/
/*                                     <tr id="result_list_main__header">*/
/*                                         <th class="text-center"><input type="checkbox" id="check-all"></th>*/
/*                                         <th id="result_list_main__header_order_date">受注日</th>*/
/*                                         <th id="result_list_main__header_id">注文番号</th>*/
/*                                         <th id="result_list_main__header_name">お名前</th>*/
/*                                         <th id="result_list_main__header_payment_method">支払方法</th>*/
/*                                         <th id="result_list_main__header_payment_total">購入金額(円)</th>*/
/*                                         <th id="result_list_main__header_commit_date">発送日</th>*/
/*                                         <th id="result_list_main__header_order_status">対応状況</th>*/
/*                                         <th>&nbsp;</th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                             {% for Order in pagination %}*/
/*                                     <tr id="result_list_main__item--{{ Order.id }}">*/
/*                                         <td id="result_list_main__id_check--{{ Order.id }}" class="text-center"><input type="checkbox" id="check-{{ Order.id }}" data-id="{{ Order.id }}" name="ids{{ Order.id }}"></td>*/
/*                                         <td id="result_list_main__order_date--{{ Order.id }}">{{ Order.order_date|date_format }}</td>*/
/*                                         <td id="result_list_main__id--{{ Order.id }}"><a href="{{ url('admin_order_edit', { id : Order.id }) }}">{{ Order.id }}</a></td>*/
/*                                         <td id="result_list_main__name--{{ Order.id }}">{{ Order.name01 }} {{ Order.name02 }}</td>*/
/*                                         <td id="result_list_main__payment_method--{{ Order.id }}">{{ Order.payment_method }}</td>*/
/*                                         <td id="result_list_main__payment_total--{{ Order.id }}" class="text-right">{{ Order.payment_total|number_format }}</td>*/
/*                                         <td id="result_list_main__commit_date--{{ Order.id }}">{{ Order.commit_date|date_format }}</td>*/
/*                                         <td id="result_list_main__order_status--{{ Order.id }}">{{ Order.OrderStatus }}</td>*/
/*                                         <td id="result_list_main__item_menu_box--{{ Order.id }}" class="icon_edit">*/
/*                                             <div id="result_list_main__item_menu--{{ Order.id }}" class="dropdown">*/
/*                                                 <a id="result_list_main__item_menu_toggle--{{ Order.id }}" class="dropdown-toggle" data-toggle="dropdown"><svg class="cb cb-ellipsis-h"> <use xlink:href="#cb-ellipsis-h" /></svg></a>*/
/*                                                 <ul id="result_list_main_item_menu--{{ Order.id }}" class="dropdown-menu dropdown-menu-right">*/
/*                                                 <li><a href="{{ url('admin_order_edit', { id : Order.id }) }}">編集</a></li>*/
/*                                                 <li><a href="{{ url('admin_order_delete', { id : Order.id }) }}" {{ csrf_token_for_anchor() }} data-method="delete" data-message="この受注情報を削除してもよろしいですか？">削除</a></li>*/
/*                                                 <li><a href="{{ url('admin_order_mail', { id : Order.id }) }}">メール通知</a></li>*/
/*                                                 </ul>*/
/*                                             </div>*/
/*                                         </td>*/
/*                                     </tr>*/
/*                             {% endfor %}*/
/*                                 </tbody>*/
/*                             </table>*/
/*                         </div>*/
/*                     </div>*/
/*                     </form>*/
/*                 </div><!-- /.box-body -->*/
/*                 {% if pagination.totalItemCount > 0 %}*/
/*                     {% include "pager.twig" with { 'pages' : pagination.paginationData, 'routes' : 'admin_order_page' } %}*/
/*                 {% endif %}*/
/*                 {% else %}*/
/*                 <div class="box-header with-arrow">*/
/*                     <h3 class="box-title">検索条件に該当するデータがありませんでした。</h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 {% endif %}*/
/*             </div><!-- /.box -->*/
/*         </div><!-- /.col -->*/
/*     </div>*/
/* */
/* {% endif %}*/
/* */
/* {% endblock %}*/
/* */
