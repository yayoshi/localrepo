<?php

/* __string_template__a3b75441ea6ada570db2be1daa12da9f400cecf8d615c18d7a9f2fb4701b0da0 */
class __TwigTemplate_9da27fb4f6e674a1ceba9b06b8af2bea9b56c2a80f52aa32b8f66be1e7549d3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__a3b75441ea6ada570db2be1daa12da9f400cecf8d615c18d7a9f2fb4701b0da0", 22);
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
        $context["menus"] = array(0 => "product", 1 => "product_master");
        // line 29
        $this->env->getExtension('form')->renderer->setTheme((isset($context["searchForm"]) ? $context["searchForm"] : null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        echo "商品管理";
    }

    // line 27
    public function block_sub_title($context, array $blocks = array())
    {
        echo "商品マスター";
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
<script>
    function fnConfirm(action) {
        document.search_form.action = action;
        document.search_form.submit();
    }
    function fnCopy(action) {
        if (confirm('この商品情報を複製しても宜しいですか？')) {
            document.search_form.action = action;
            document.search_form.submit();
        }
    }
</script>
";
    }

    // line 97
    public function block_main($context, array $blocks = array())
    {
        // line 98
        echo "            <!--検索条件設定テーブルここから-->
            <div id=\"search_wrap\" class=\"search-box\">
                <form name=\"search_form\" id=\"search_form\" method=\"post\" action=\"";
        // line 100
        echo $this->env->getExtension('eccube')->getUrl("admin_product");
        echo "\">
                \t";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "_token", array()), 'widget');
        echo "
                    <div id=\"search_box\" class=\"row\">
                        <div class=\"col-md-12 accordion\">

                            ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "id", array()), 'widget', array("attr" => array("placeholder" => "商品名・ID・コード", "class" => "input_search")));
        echo "

                            <a id=\"search_box__toggle\" href=\"#\" class=\"toggle";
        // line 107
        if ((isset($context["active"]) ? $context["active"] : null)) {
            echo " active";
        }
        echo "\">
                                <svg class=\"cb cb-minus\"> <use xlink:href=\"#cb-minus\"/></svg> <svg class=\"cb cb-minus\"> <use xlink:href=\"#cb-minus\"/></svg>
                            </a>
                            <div id=\"search_box___body\" class=\"search-box-inner accpanel\" ";
        // line 110
        if ((isset($context["active"]) ? $context["active"] : null)) {
            echo " style=\"display: block;\"";
        }
        echo ">
                                <div class=\"row\">
                                    <div id=\"search_box__body_inner\" class=\"col-sm-12 col-lg-10 col-lg-offset-1 search\">

                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <div id=\"search_box__category_id\" class=\"form-group\">
                                                    <label>カテゴリ</label>
                                                    ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "category_id", array()), 'widget');
        echo "
                                                </div>
                                            </div>
                                            <div id=\"search_box__status\" class=\"col-md-6\">
                                                <label>種別</label>
                                                <div class=\"form-group\">
                                                    ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "status", array()), 'widget');
        echo "
                                                </div>
                                            </div>
                                        </div><!-- /.row -->

                                        <div class=\"row\">
                                            <div id=\"search_box__create_date\" class=\"col-sm-6\">
                                                <label>登録日</label>
                                                <div class=\"form-group range\">
                                                    ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "create_date_start", array()), 'widget', array("attr" => array("class" => "input_cal")));
        echo " ～ ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "create_date_end", array()), 'widget', array("attr" => array("class" => "input_cal")));
        echo "
                                                </div>
                                            </div>
                                            <div id=\"search_box__update_date\" class=\"col-sm-6\">
                                                <label>更新日</label>
                                                <div class=\"form-group range\">
                                                    ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "update_date_start", array()), 'widget', array("attr" => array("class" => "input_cal")));
        echo " ～ ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "update_date_end", array()), 'widget', array("attr" => array("class" => "input_cal")));
        echo "
                                                </div>
                                            </div>
                                            <div class=\"extra-form col-md-12\">
                                                ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 144
            echo "                                                    ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 145
                echo "                                                        <div class=\"form-group\">
                                                            ";
                // line 146
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'label');
                echo "
                                                            ";
                // line 147
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'widget');
                echo "
                                                            ";
                // line 148
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'errors');
                echo "
                                                        </div>
                                                    ";
            }
            // line 151
            echo "                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "                                            <div class=\"col-sm-6\">
                                                ";
        // line 153
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["searchForm"]) ? $context["searchForm"] : null), 'rest');
        echo "
                                            </div>
                                        </div><!-- /.row -->
                                        <div id=\"search_box_inner__footer\" class=\"row\">
                                            <div id=\"search_box__clear_button\" class=\"col-sm-12\">
                                                <p class=\"text-center\"><a href=\"#\" class=\"search-clear\">検索条件をクリア</a></p>
                                            </div>
                                        </div><!-- /.row -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <div id=\"search_box__footer\" class=\"row btn_area\">
                        <div id=\"search_box__search_button\" class=\"col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 text-center\">
                            <button class=\"btn btn-primary btn-block btn-lg\" onclick=\"eccube.fnFormModeSubmit('search_form', 'search', '', ''); return false;\">
                                検索する <svg class=\"cb cb-angle-right\"><use xlink:href=\"#cb-angle-right\"></svg>
                            </button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!--検索条件設定テーブルここまで-->

        ";
        // line 179
        if ((isset($context["pagination"]) ? $context["pagination"] : null)) {
            // line 180
            echo "            <div id=\"result_list\" class=\"row\">
                <div class=\"col-md-12\">
                    <div id=\"result_list_main\" class=\"box\">
                        ";
            // line 183
            if ((twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : null)) > 0)) {
                // line 184
                echo "                        <div id=\"result_list__header\" class=\"box-header with-arrow\">
                            <h3 class=\"box-title\">検索結果 <span class=\"normal\"><strong>";
                // line 185
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "totalItemCount", array()), "html", null, true);
                echo " 件</strong> が該当しました</span></h3>
                        </div><!-- /.box-header -->
                        <div id=\"result_list__body\" class=\"box-body no-padding\">
                            <div id=\"result_list__menu\" class=\"row\">
                                <div class=\"col-md-6\">
                                    <ul id=\"result_list__status_menu\" class=\"link-with-bar\">
                                    <li>
                                        ";
                // line 192
                if ((null === (isset($context["page_status"]) ? $context["page_status"] : null))) {
                    // line 193
                    echo "                                        <a>すべて</a>
                                        ";
                } else {
                    // line 195
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPath("admin_product_page", array("page_no" => (isset($context["page_no"]) ? $context["page_no"] : null))), "html", null, true);
                    echo "\">すべて</a>
                                        ";
                }
                // line 197
                echo "                                    </li>
                                    ";
                // line 198
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["disps"]) ? $context["disps"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["disp"]) {
                    // line 199
                    echo "                                      <li>
                                      ";
                    // line 200
                    if (((isset($context["page_status"]) ? $context["page_status"] : null) == $this->getAttribute($context["disp"], "id", array()))) {
                        // line 201
                        echo "                                      <a>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["disp"], "name", array()));
                        echo "</a>
                                      ";
                    } else {
                        // line 203
                        echo "                                      <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPath("admin_product_page", array("page_no" => (isset($context["page_no"]) ? $context["page_no"] : null), "status" => $this->getAttribute($context["disp"], "id", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["disp"], "name", array()));
                        echo "</a>
                                      ";
                    }
                    // line 205
                    echo "                                      </li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['disp'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 207
                echo "                                      <li>
                                      ";
                // line 208
                if (((isset($context["page_status"]) ? $context["page_status"] : null) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_product_stock_status", array()))) {
                    // line 209
                    echo "                                          <a>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator", array()), "trans", array(0 => "admin.product.search.stock"), "method"), "html", null, true);
                    echo "</a>
                                      ";
                } else {
                    // line 211
                    echo "                                          <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPath("admin_product_page", array("page_no" => (isset($context["page_no"]) ? $context["page_no"] : null), "status" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_product_stock_status", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator", array()), "trans", array(0 => "admin.product.search.stock"), "method"), "html", null, true);
                    echo "</a>
                                      ";
                }
                // line 213
                echo "                                      </li>
                                    </ul>
                                </div>
                                <div class=\"col-md-6\">
                                    <ul class=\"sort-dd\">
                                    <li id=\"result_list__pagemax_menu\" class=\"dropdown\">
                                        ";
                // line 219
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["pageMaxis"]) ? $context["pageMaxis"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["pageMax"]) {
                    if (($this->getAttribute($context["pageMax"], "name", array()) == (isset($context["page_count"]) ? $context["page_count"] : null))) {
                        // line 220
                        echo "                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["pageMax"], "name", array()));
                        echo "件<svg class=\"cb cb-angle-down icon_down\"><use xlink:href=\"#cb-angle-down\"></svg></a>
                                            <ul class=\"dropdown-menu\">
                                        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageMax'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 223
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["pageMaxis"]) ? $context["pageMaxis"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["pageMax"]) {
                    if (($this->getAttribute($context["pageMax"], "name", array()) != (isset($context["page_count"]) ? $context["page_count"] : null))) {
                        // line 224
                        echo "                                                <li><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPath("admin_product_page", array("page_no" => 1, "page_count" => $this->getAttribute($context["pageMax"], "name", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["pageMax"], "name", array()));
                        echo "件</a></li>
                                        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageMax'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 226
                echo "                                            </ul>
                                    </li>
                                    <li id=\"result_list__csv_menu\" class=\"dropdown\">
                                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">CSVダウンロード<svg class=\"cb cb-angle-down icon_down\"><use xlink:href=\"#cb-angle-down\"></svg></a>
                                        <ul class=\"dropdown-menu\">
                                            <li><a href=\"";
                // line 231
                echo $this->env->getExtension('eccube')->getUrl("admin_product_export");
                echo "\">CSVダウンロード</a></li>
                                            <li><a href=\"";
                // line 232
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_setting_shop_csv", array("id" => twig_constant("\\Eccube\\Entity\\Master\\CsvType::CSV_TYPE_PRODUCT"))), "html", null, true);
                echo "\">出力項目設定</a></li>
                                        </ul>
                                    </li>
                                    </ul>
                                </div>
                            </div>
                            <div id=\"result_list__list\" class=\"item_list\">
                                <div class=\"tableish tableish-striped\">

                                    ";
                // line 241
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
                    // line 242
                    echo "                                        <div id=\"result_list__item--";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
                    echo "\" class=\"item_box tr\">
                                            <div id=\"result_list__id--";
                    // line 243
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
                    echo "\" class=\"item_id td\">
                                                ";
                    // line 244
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
                    echo "
                                            </div>
                                            <div id=\"result_list__image--";
                    // line 246
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
                    echo "\" class=\"item_photo td\">
                                                <a href=\"";
                    // line 247
                    echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_product_product_edit", array("id" => $this->getAttribute($context["Product"], "id", array()))), "html", null, true);
                    echo "\">
                                                \t<img src=\"";
                    // line 248
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getNoImageProduct($this->getAttribute($context["Product"], "mainFileName", array())), "html", null, true);
                    echo "\" />
                                                </a>
                                            </div>
                                            <div id=\"result_list__name--";
                    // line 251
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
                    echo "\" class=\"item_detail td\">
                                                <a href=\"";
                    // line 252
                    echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_product_product_edit", array("id" => $this->getAttribute($context["Product"], "id", array()))), "html", null, true);
                    echo "\">
                                                    ";
                    // line 253
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "name", array()), "html", null, true);
                    echo "
                                                </a><br>
                                                <span  id=\"result_list__code--";
                    // line 255
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
                    echo "\">
                                                    ";
                    // line 256
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "code_min", array()), "html", null, true);
                    echo "
                                                    ";
                    // line 257
                    if (($this->getAttribute($context["Product"], "code_min", array()) != $this->getAttribute($context["Product"], "code_max", array()))) {
                        echo " ～ ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "code_max", array()), "html", null, true);
                        echo "
                                                    ";
                    }
                    // line 259
                    echo "                                                </span>
                                            </div>
                                            <div id=\"result_list__item_menu_box--";
                    // line 261
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
                    echo "\"class=\"icon_edit td\">
                                                <div id=\"result_list__item_menu_toggle--";
                    // line 262
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
                    echo "\" class=\"dropdown\">
                                                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><svg class=\"cb cb-ellipsis-h\"><use xlink:href=\"#cb-ellipsis-h\"></svg></a>
                                                    <ul id=\"result_list__item_menu--";
                    // line 264
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
                    echo "\" class=\"dropdown-menu dropdown-menu-right\">
                                                    <li><a href=\"";
                    // line 265
                    echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_product_product_class", array("id" => $this->getAttribute($context["Product"], "id", array()))), "html", null, true);
                    echo "\">規格</a></li>
                                                    <li><a href=\"";
                    // line 266
                    echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_product_product_display", array("id" => $this->getAttribute($context["Product"], "id", array()))), "html", null, true);
                    echo "\" target=\"_blank\">確認</a></li>
                                                    <li><a href=\"";
                    // line 267
                    echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_product_product_copy", array("id" => $this->getAttribute($context["Product"], "id", array()))), "html", null, true);
                    echo "\" ";
                    echo $this->env->getExtension('eccube')->getCsrfTokenForAnchor();
                    echo " data-method=\"post\" data-message=\"商品情報を複製してもよろしいですか？\">複製</a></li>
                                                    <li><a href=\"";
                    // line 268
                    echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_product_product_delete", array("id" => $this->getAttribute($context["Product"], "id", array()))), "html", null, true);
                    echo "\" ";
                    echo $this->env->getExtension('eccube')->getCsrfTokenForAnchor();
                    echo " data-method=\"delete\" data-message=\"商品情報を削除してもよろしいですか？\">削除</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- /.item_box -->
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 274
                echo "                                </div>
                            </div>
                        </div><!-- /.box-body -->
                        ";
                // line 277
                if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "totalItemCount", array()) > 0)) {
                    // line 278
                    echo "                            ";
                    $this->loadTemplate("pager.twig", "__string_template__a3b75441ea6ada570db2be1daa12da9f400cecf8d615c18d7a9f2fb4701b0da0", 278)->display(array_merge($context, array("pages" => $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "paginationData", array()), "routes" => "admin_product_page")));
                    // line 279
                    echo "                        ";
                }
                // line 280
                echo "                        ";
            } else {
                // line 281
                echo "                        <div id=\"result_list__header\" class=\"box-header with-arrow\">
                            <h3 class=\"box-title\">検索条件に該当するデータがありませんでした。</h3>
                        </div><!-- /.box-header -->
                        <div class=\"box-body no-padding\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <ul class=\"link-with-bar\">
                                        <li>
                                            ";
                // line 289
                if ((null === (isset($context["page_status"]) ? $context["page_status"] : null))) {
                    // line 290
                    echo "                                                <a>すべて</a>
                                            ";
                } else {
                    // line 292
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPath("admin_product_page", array("page_no" => (isset($context["page_no"]) ? $context["page_no"] : null))), "html", null, true);
                    echo "\">すべて</a>
                                            ";
                }
                // line 294
                echo "                                        </li>
                                        ";
                // line 295
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["disps"]) ? $context["disps"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["disp"]) {
                    // line 296
                    echo "                                            <li>
                                                ";
                    // line 297
                    if (((isset($context["page_status"]) ? $context["page_status"] : null) == $this->getAttribute($context["disp"], "id", array()))) {
                        // line 298
                        echo "                                                    <a>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["disp"], "name", array()));
                        echo "</a>
                                                ";
                    } else {
                        // line 300
                        echo "                                                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPath("admin_product_page", array("page_no" => (isset($context["page_no"]) ? $context["page_no"] : null), "status" => $this->getAttribute($context["disp"], "id", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["disp"], "name", array()));
                        echo "</a>
                                                ";
                    }
                    // line 302
                    echo "                                            </li>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['disp'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 304
                echo "                                        <li>
                                            ";
                // line 305
                if (((isset($context["page_status"]) ? $context["page_status"] : null) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_product_stock_status", array()))) {
                    // line 306
                    echo "                                                <a>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator", array()), "trans", array(0 => "admin.product.search.stock"), "method"), "html", null, true);
                    echo "</a>
                                            ";
                } else {
                    // line 308
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPath("admin_product_page", array("page_no" => (isset($context["page_no"]) ? $context["page_no"] : null), "status" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_product_stock_status", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator", array()), "trans", array(0 => "admin.product.search.stock"), "method"), "html", null, true);
                    echo "</a>
                                            ";
                }
                // line 310
                echo "                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                        ";
            }
            // line 316
            echo "                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div>

        ";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__a3b75441ea6ada570db2be1daa12da9f400cecf8d615c18d7a9f2fb4701b0da0";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  636 => 316,  628 => 310,  620 => 308,  614 => 306,  612 => 305,  609 => 304,  602 => 302,  594 => 300,  588 => 298,  586 => 297,  583 => 296,  579 => 295,  576 => 294,  570 => 292,  566 => 290,  564 => 289,  554 => 281,  551 => 280,  548 => 279,  545 => 278,  543 => 277,  538 => 274,  524 => 268,  518 => 267,  514 => 266,  510 => 265,  506 => 264,  501 => 262,  497 => 261,  493 => 259,  486 => 257,  482 => 256,  478 => 255,  473 => 253,  469 => 252,  465 => 251,  457 => 248,  453 => 247,  449 => 246,  444 => 244,  440 => 243,  435 => 242,  431 => 241,  419 => 232,  415 => 231,  408 => 226,  396 => 224,  390 => 223,  379 => 220,  374 => 219,  366 => 213,  358 => 211,  352 => 209,  350 => 208,  347 => 207,  340 => 205,  332 => 203,  326 => 201,  324 => 200,  321 => 199,  317 => 198,  314 => 197,  308 => 195,  304 => 193,  302 => 192,  292 => 185,  289 => 184,  287 => 183,  282 => 180,  280 => 179,  251 => 153,  248 => 152,  242 => 151,  236 => 148,  232 => 147,  228 => 146,  225 => 145,  222 => 144,  218 => 143,  209 => 139,  198 => 133,  186 => 124,  177 => 118,  164 => 110,  156 => 107,  151 => 105,  144 => 101,  140 => 100,  136 => 98,  133 => 97,  71 => 38,  67 => 37,  62 => 36,  59 => 35,  52 => 32,  49 => 31,  43 => 27,  37 => 26,  33 => 22,  31 => 29,  29 => 24,  11 => 22,);
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
/* {% set menus = ['product', 'product_master'] %}*/
/* */
/* {% block title %}商品管理{% endblock %}*/
/* {% block sub_title %}商品マスター{% endblock %}*/
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
/* $(function() {*/
/* */
/*     var inputDate = document.createElement('input');*/
/*     inputDate.setAttribute('type', 'date');*/
/*     if (inputDate.type !== 'date') {*/
/*         $('input[id$=_date_start]').datetimepicker({*/
/*             locale: 'ja',*/
/*             format: 'YYYY-MM-DD',*/
/*             useCurrent: false,*/
/*             showTodayButton: true*/
/*         });*/
/* */
/*         $('input[id$=_date_end]').datetimepicker({*/
/*             locale: 'ja',*/
/*             format: 'YYYY-MM-DD',*/
/*             useCurrent: false,*/
/*             showTodayButton: true*/
/*         });*/
/*     }*/
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
/* <script>*/
/*     function fnConfirm(action) {*/
/*         document.search_form.action = action;*/
/*         document.search_form.submit();*/
/*     }*/
/*     function fnCopy(action) {*/
/*         if (confirm('この商品情報を複製しても宜しいですか？')) {*/
/*             document.search_form.action = action;*/
/*             document.search_form.submit();*/
/*         }*/
/*     }*/
/* </script>*/
/* {% endblock javascript %}*/
/* */
/* {% block main %}*/
/*             <!--検索条件設定テーブルここから-->*/
/*             <div id="search_wrap" class="search-box">*/
/*                 <form name="search_form" id="search_form" method="post" action="{{ url('admin_product') }}">*/
/*                 	{{ form_widget(searchForm._token) }}*/
/*                     <div id="search_box" class="row">*/
/*                         <div class="col-md-12 accordion">*/
/* */
/*                             {{ form_widget(searchForm.id, { attr: { placeholder: '商品名・ID・コード', class : 'input_search' } } ) }}*/
/* */
/*                             <a id="search_box__toggle" href="#" class="toggle{% if active %} active{% endif %}">*/
/*                                 <svg class="cb cb-minus"> <use xlink:href="#cb-minus"/></svg> <svg class="cb cb-minus"> <use xlink:href="#cb-minus"/></svg>*/
/*                             </a>*/
/*                             <div id="search_box___body" class="search-box-inner accpanel" {% if active %} style="display: block;"{% endif %}>*/
/*                                 <div class="row">*/
/*                                     <div id="search_box__body_inner" class="col-sm-12 col-lg-10 col-lg-offset-1 search">*/
/* */
/*                                         <div class="row">*/
/*                                             <div class="col-md-6">*/
/*                                                 <div id="search_box__category_id" class="form-group">*/
/*                                                     <label>カテゴリ</label>*/
/*                                                     {{ form_widget(searchForm.category_id) }}*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div id="search_box__status" class="col-md-6">*/
/*                                                 <label>種別</label>*/
/*                                                 <div class="form-group">*/
/*                                                     {{ form_widget(searchForm.status) }}*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div><!-- /.row -->*/
/* */
/*                                         <div class="row">*/
/*                                             <div id="search_box__create_date" class="col-sm-6">*/
/*                                                 <label>登録日</label>*/
/*                                                 <div class="form-group range">*/
/*                                                     {{ form_widget(searchForm.create_date_start, {'attr': {'class': 'input_cal'}}) }} ～ {{ form_widget(searchForm.create_date_end, {'attr': {'class': 'input_cal'}}) }}*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div id="search_box__update_date" class="col-sm-6">*/
/*                                                 <label>更新日</label>*/
/*                                                 <div class="form-group range">*/
/*                                                     {{ form_widget(searchForm.update_date_start, {'attr': {'class': 'input_cal'}}) }} ～ {{ form_widget(searchForm.update_date_end, {'attr': {'class': 'input_cal'}}) }}*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="extra-form col-md-12">*/
/*                                                 {% for f in searchForm.getIterator %}*/
/*                                                     {% if f.vars.name matches '[^plg*]' %}*/
/*                                                         <div class="form-group">*/
/*                                                             {{ form_label(f) }}*/
/*                                                             {{ form_widget(f) }}*/
/*                                                             {{ form_errors(f) }}*/
/*                                                         </div>*/
/*                                                     {% endif %}*/
/*                                                 {% endfor %}*/
/*                                             <div class="col-sm-6">*/
/*                                                 {{ form_rest(searchForm) }}*/
/*                                             </div>*/
/*                                         </div><!-- /.row -->*/
/*                                         <div id="search_box_inner__footer" class="row">*/
/*                                             <div id="search_box__clear_button" class="col-sm-12">*/
/*                                                 <p class="text-center"><a href="#" class="search-clear">検索条件をクリア</a></p>*/
/*                                             </div>*/
/*                                         </div><!-- /.row -->*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <!-- /.col -->*/
/*                     </div>*/
/*                     <div id="search_box__footer" class="row btn_area">*/
/*                         <div id="search_box__search_button" class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 text-center">*/
/*                             <button class="btn btn-primary btn-block btn-lg" onclick="eccube.fnFormModeSubmit('search_form', 'search', '', ''); return false;">*/
/*                                 検索する <svg class="cb cb-angle-right"><use xlink:href="#cb-angle-right"></svg>*/
/*                             </button>*/
/*                         </div>*/
/*                         <!-- /.col -->*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*             <!--検索条件設定テーブルここまで-->*/
/* */
/*         {% if pagination %}*/
/*             <div id="result_list" class="row">*/
/*                 <div class="col-md-12">*/
/*                     <div id="result_list_main" class="box">*/
/*                         {% if pagination|length > 0 %}*/
/*                         <div id="result_list__header" class="box-header with-arrow">*/
/*                             <h3 class="box-title">検索結果 <span class="normal"><strong>{{ pagination.totalItemCount }} 件</strong> が該当しました</span></h3>*/
/*                         </div><!-- /.box-header -->*/
/*                         <div id="result_list__body" class="box-body no-padding">*/
/*                             <div id="result_list__menu" class="row">*/
/*                                 <div class="col-md-6">*/
/*                                     <ul id="result_list__status_menu" class="link-with-bar">*/
/*                                     <li>*/
/*                                         {% if page_status is null %}*/
/*                                         <a>すべて</a>*/
/*                                         {% else %}*/
/*                                         <a href="{{ path('admin_product_page', {'page_no': page_no} ) }}">すべて</a>*/
/*                                         {% endif %}*/
/*                                     </li>*/
/*                                     {% for disp in disps %}*/
/*                                       <li>*/
/*                                       {% if page_status == disp.id %}*/
/*                                       <a>{{ disp.name|e }}</a>*/
/*                                       {% else %}*/
/*                                       <a href="{{ path('admin_product_page', {'page_no': page_no, 'status': disp.id} ) }}">{{ disp.name|e }}</a>*/
/*                                       {% endif %}*/
/*                                       </li>*/
/*                                     {% endfor %}*/
/*                                       <li>*/
/*                                       {% if page_status == app.config.admin_product_stock_status %}*/
/*                                           <a>{{ app.translator.trans('admin.product.search.stock') }}</a>*/
/*                                       {% else %}*/
/*                                           <a href="{{ path('admin_product_page', {'page_no': page_no, 'status': app.config.admin_product_stock_status} ) }}">{{ app.translator.trans('admin.product.search.stock') }}</a>*/
/*                                       {% endif %}*/
/*                                       </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                                 <div class="col-md-6">*/
/*                                     <ul class="sort-dd">*/
/*                                     <li id="result_list__pagemax_menu" class="dropdown">*/
/*                                         {% for pageMax in pageMaxis if pageMax.name == page_count %}*/
/*                                             <a class="dropdown-toggle" data-toggle="dropdown">{{ pageMax.name|e }}件<svg class="cb cb-angle-down icon_down"><use xlink:href="#cb-angle-down"></svg></a>*/
/*                                             <ul class="dropdown-menu">*/
/*                                         {% endfor %}*/
/*                                         {% for pageMax in pageMaxis if pageMax.name != page_count %}*/
/*                                                 <li><a href="{{ path('admin_product_page', {'page_no': 1, 'page_count': pageMax.name}) }}">{{ pageMax.name|e }}件</a></li>*/
/*                                         {% endfor %}*/
/*                                             </ul>*/
/*                                     </li>*/
/*                                     <li id="result_list__csv_menu" class="dropdown">*/
/*                                         <a class="dropdown-toggle" data-toggle="dropdown">CSVダウンロード<svg class="cb cb-angle-down icon_down"><use xlink:href="#cb-angle-down"></svg></a>*/
/*                                         <ul class="dropdown-menu">*/
/*                                             <li><a href="{{ url('admin_product_export') }}">CSVダウンロード</a></li>*/
/*                                             <li><a href="{{ url('admin_setting_shop_csv', { id : constant('\\Eccube\\Entity\\Master\\CsvType::CSV_TYPE_PRODUCT') }) }}">出力項目設定</a></li>*/
/*                                         </ul>*/
/*                                     </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div id="result_list__list" class="item_list">*/
/*                                 <div class="tableish tableish-striped">*/
/* */
/*                                     {% for Product in pagination %}*/
/*                                         <div id="result_list__item--{{ Product.id }}" class="item_box tr">*/
/*                                             <div id="result_list__id--{{ Product.id }}" class="item_id td">*/
/*                                                 {{Product.id}}*/
/*                                             </div>*/
/*                                             <div id="result_list__image--{{ Product.id }}" class="item_photo td">*/
/*                                                 <a href="{{ url('admin_product_product_edit', { id : Product.id }) }}">*/
/*                                                 	<img src="{{ app.config.image_save_urlpath }}/{{ Product.mainFileName|no_image_product }}" />*/
/*                                                 </a>*/
/*                                             </div>*/
/*                                             <div id="result_list__name--{{ Product.id }}" class="item_detail td">*/
/*                                                 <a href="{{ url('admin_product_product_edit', { id : Product.id }) }}">*/
/*                                                     {{ Product.name }}*/
/*                                                 </a><br>*/
/*                                                 <span  id="result_list__code--{{ Product.id }}">*/
/*                                                     {{ Product.code_min }}*/
/*                                                     {% if Product.code_min != Product.code_max %} ～ {{ Product.code_max }}*/
/*                                                     {% endif %}*/
/*                                                 </span>*/
/*                                             </div>*/
/*                                             <div id="result_list__item_menu_box--{{ Product.id }}"class="icon_edit td">*/
/*                                                 <div id="result_list__item_menu_toggle--{{ Product.id }}" class="dropdown">*/
/*                                                     <a class="dropdown-toggle" data-toggle="dropdown"><svg class="cb cb-ellipsis-h"><use xlink:href="#cb-ellipsis-h"></svg></a>*/
/*                                                     <ul id="result_list__item_menu--{{ Product.id }}" class="dropdown-menu dropdown-menu-right">*/
/*                                                     <li><a href="{{ url('admin_product_product_class', { id : Product.id }) }}">規格</a></li>*/
/*                                                     <li><a href="{{ url('admin_product_product_display', {'id' : Product.id}) }}" target="_blank">確認</a></li>*/
/*                                                     <li><a href="{{ url('admin_product_product_copy', {'id' : Product.id}) }}" {{ csrf_token_for_anchor() }} data-method="post" data-message="商品情報を複製してもよろしいですか？">複製</a></li>*/
/*                                                     <li><a href="{{ url('admin_product_product_delete', {'id' : Product.id}) }}" {{ csrf_token_for_anchor() }} data-method="delete" data-message="商品情報を削除してもよろしいですか？">削除</a></li>*/
/*                                                     </ul>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div><!-- /.item_box -->*/
/*                                     {% endfor %}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div><!-- /.box-body -->*/
/*                         {% if pagination.totalItemCount > 0 %}*/
/*                             {% include "pager.twig" with { 'pages' : pagination.paginationData, 'routes' : 'admin_product_page' } %}*/
/*                         {% endif %}*/
/*                         {% else %}*/
/*                         <div id="result_list__header" class="box-header with-arrow">*/
/*                             <h3 class="box-title">検索条件に該当するデータがありませんでした。</h3>*/
/*                         </div><!-- /.box-header -->*/
/*                         <div class="box-body no-padding">*/
/*                             <div class="row">*/
/*                                 <div class="col-md-6">*/
/*                                     <ul class="link-with-bar">*/
/*                                         <li>*/
/*                                             {% if page_status is null %}*/
/*                                                 <a>すべて</a>*/
/*                                             {% else %}*/
/*                                                 <a href="{{ path('admin_product_page', {'page_no': page_no} ) }}">すべて</a>*/
/*                                             {% endif %}*/
/*                                         </li>*/
/*                                         {% for disp in disps %}*/
/*                                             <li>*/
/*                                                 {% if page_status == disp.id %}*/
/*                                                     <a>{{ disp.name|e }}</a>*/
/*                                                 {% else %}*/
/*                                                     <a href="{{ path('admin_product_page', {'page_no': page_no, 'status': disp.id} ) }}">{{ disp.name|e }}</a>*/
/*                                                 {% endif %}*/
/*                                             </li>*/
/*                                         {% endfor %}*/
/*                                         <li>*/
/*                                             {% if page_status == app.config.admin_product_stock_status %}*/
/*                                                 <a>{{ app.translator.trans('admin.product.search.stock') }}</a>*/
/*                                             {% else %}*/
/*                                                 <a href="{{ path('admin_product_page', {'page_no': page_no, 'status': app.config.admin_product_stock_status} ) }}">{{ app.translator.trans('admin.product.search.stock') }}</a>*/
/*                                             {% endif %}*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div><!-- /.box-body -->*/
/*                         {% endif %}*/
/*                     </div><!-- /.box -->*/
/*                 </div><!-- /.col -->*/
/*             </div>*/
/* */
/*         {% endif %}*/
/* {% endblock %}*/
/* */
