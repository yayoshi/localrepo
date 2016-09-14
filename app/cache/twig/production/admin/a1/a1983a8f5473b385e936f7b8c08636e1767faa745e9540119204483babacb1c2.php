<?php

/* __string_template__6a2a975744738221975c95b6ae77d89af0f0986b1e283ac34a51e4055f3ddaf6 */
class __TwigTemplate_227d616c7ca2dd4c36ecf58acc8b7d4174e4cc96f6a77c0bd53f4ebfdb6fc0ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__6a2a975744738221975c95b6ae77d89af0f0986b1e283ac34a51e4055f3ddaf6", 22);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
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
        $context["menus"] = array(0 => "content", 1 => "page");
        // line 29
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 30
        $this->env->getExtension('form')->renderer->setTheme((isset($context["list_form"]) ? $context["list_form"] : null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        echo "コンテンツ管理";
    }

    // line 27
    public function block_sub_title($context, array $blocks = array())
    {
        echo "レイアウト管理";
    }

    // line 32
    public function block_javascript($context, array $blocks = array())
    {
        // line 33
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery.ui/jquery.ui.core.min.js\"></script>
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery.ui/jquery.ui.widget.min.js\"></script>
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery.ui/jquery.ui.mouse.min.js\"></script>
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery.ui/jquery.ui.sortable.min.js\"></script>
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/layout_design.js\"></script>
    <script>
        \$(function() {
            var page_id = '";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "id", array()), "html", null, true);
        echo "';
            if (page_id != '1') {
                \$('.anywhere').attr('disabled', true);
                \$('.anywhere:checked').each(function() {
                    \$(this).parents('.sort').children('input[type=hidden]').each(function() {
                        \$(this).remove();
                    });
                });
            }

            \$(\"#";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["list_form"]) ? $context["list_form"] : null), "layout", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\").on(\"change\", function() {
                var url = '";
        // line 51
        echo $this->env->getExtension('eccube')->getUrl("admin_content_layout_edit", array("id" => 9999));
        echo "';
                location.href = url.replace(9999, \$(this).val());
            });
        });
        function doPreview() {
            document.form1.action = \"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_content_layout_preview", array("id" => $this->getAttribute((isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "id", array()))), "html", null, true);
        echo "\";
            document.form1.target = \"_blank\";
            document.form1.submit();
        }
        function doRegister() {
            document.form1.action = \"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_content_layout_edit", array("id" => $this->getAttribute((isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "id", array()))), "html", null, true);
        echo "\";
            document.form1.target = \"_self\";
            document.form1.submit();
        }
    </script>
";
    }

    // line 68
    public function block_main($context, array $blocks = array())
    {
        // line 69
        echo "    <form name=\"form1\" id=\"form1\" method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_content_layout_edit", array("id" => $this->getAttribute((isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "id", array()))), "html", null, true);
        echo "\">
        ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
        <div class=\"row\" id=\"aside_wrap\">
            <div id=\"detail_wrap\" class=\"col-md-9\">
                ";
        // line 74
        echo "                <div id=\"detail_box\" class=\"box\">
                    <div id=\"detail_box__menu\" class=\"box-header\">
                        ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["list_form"]) ? $context["list_form"] : null), "layout", array()), 'widget');
        echo "
                    </div>
                    <div id=\"detail_box__body\" class=\"box-body no-border row\">
                        <div id=\"detail_box__layout_box--left_column\" class=\"col-md-8\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered text-center design-layout\">
                                    <tbody>

                                    <tr>
                                        <td id=\"position_";
        // line 85
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\PageLayout::TARGET_ID_HEAD"), "html", null, true);
        echo "\" class=\"ui-sortable\" colspan=\"3\">
                                            ";
        // line 86
        $context["loop_index"] = 0;
        // line 87
        echo "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "HeadPosition", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 88
            echo "                                                <div id=\"detail_box__layout_item--";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "id", array()), "html", null, true);
            echo "\" class=\"sort";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo " first";
            }
            echo "\">
                                                    <input type=\"hidden\" class=\"name\" name=\"name_";
            // line 89
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "name", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"id\" name=\"id_";
            // line 90
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "id", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"target-id\" name=\"target_id_";
            // line 91
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["BlockPosition"], "target_id", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"top\" name=\"top_";
            // line 92
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["BlockPosition"], "block_row", array()), "html", null, true);
            echo "\" />
                                                    ";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "name", array()), "html", null, true);
            echo "
                                                    <label class=\"anywherecheck\">
                                                        (<input type=\"checkbox\" class=\"anywhere\" name=\"anywhere_";
            // line 95
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"1\" ";
            if (($this->getAttribute($context["BlockPosition"], "anywhere", array()) == 1)) {
                echo " checked=\"checked\"";
            }
            echo " />全ページ)
                                                    </label>
                                                </div>
                                                ";
            // line 98
            $context["loop_index"] = ((isset($context["loop_index"]) ? $context["loop_index"] : null) + 1);
            // line 99
            echo "                                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                                        </td>
                                    </tr>

                                    <tr>
                                        <td id=\"position_";
        // line 104
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\PageLayout::TARGET_ID_HEADER"), "html", null, true);
        echo "\" class=\"ui-sortable\" colspan=\"3\">
                                            ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "HeaderPosition", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 106
            echo "                                                <div id=\"detail_box__layout_item--";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "id", array()), "html", null, true);
            echo "\" class=\"sort";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo " first";
            }
            echo "\">
                                                    <input type=\"hidden\" class=\"name\" name=\"name_";
            // line 107
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "name", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"id\" name=\"id_";
            // line 108
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "id", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"target-id\" name=\"target_id_";
            // line 109
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["BlockPosition"], "target_id", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"top\" name=\"top_";
            // line 110
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["BlockPosition"], "block_row", array()), "html", null, true);
            echo "\" />
                                                    ";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "name", array()), "html", null, true);
            echo "
                                                    <label class=\"anywherecheck\">
                                                        (<input type=\"checkbox\" class=\"anywhere\" name=\"anywhere_";
            // line 113
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"1\" ";
            if (($this->getAttribute($context["BlockPosition"], "anywhere", array()) == 1)) {
                echo " checked=\"checked\"";
            }
            echo " />全ページ)
                                                    </label>
                                                </div>
                                                ";
            // line 116
            $context["loop_index"] = ((isset($context["loop_index"]) ? $context["loop_index"] : null) + 1);
            // line 117
            echo "                                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "                                        </td>
                                    </tr>

                                    <tr>
                                        <td id=\"position_";
        // line 122
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\PageLayout::TARGET_ID_CONTENTS_TOP"), "html", null, true);
        echo "\" class=\"ui-sortable\" colspan=\"3\">
                                            ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "ContentsTopPosition", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 124
            echo "                                                <div id=\"detail_box__layout_item--";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "id", array()), "html", null, true);
            echo "\" class=\"sort";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo " first";
            }
            echo "\">
                                                    <input type=\"hidden\" class=\"name\" name=\"name_";
            // line 125
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "name", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"id\" name=\"id_";
            // line 126
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "id", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"target-id\" name=\"target_id_";
            // line 127
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["BlockPosition"], "target_id", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"top\" name=\"top_";
            // line 128
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["BlockPosition"], "block_row", array()), "html", null, true);
            echo "\" />
                                                    ";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "name", array()), "html", null, true);
            echo "
                                                    <label class=\"anywherecheck\">
                                                        (<input type=\"checkbox\" class=\"anywhere\" name=\"anywhere_";
            // line 131
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"1\" ";
            if (($this->getAttribute($context["BlockPosition"], "anywhere", array()) == 1)) {
                echo " checked=\"checked\"";
            }
            echo " />全ページ)
                                                    </label>
                                                </div>
                                                ";
            // line 134
            $context["loop_index"] = ((isset($context["loop_index"]) ? $context["loop_index"] : null) + 1);
            // line 135
            echo "                                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "                                        </td>
                                    </tr>

                                    <tr>
                                        <td id=\"position_";
        // line 140
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\PageLayout::TARGET_ID_SIDE_LEFT"), "html", null, true);
        echo "\" class=\"ui-sortable\" rowspan=\"3\">
                                            ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "SideLeftPosition", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 142
            echo "                                                <div id=\"detail_box__layout_item--";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "id", array()), "html", null, true);
            echo "\" class=\"sort";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo " first";
            }
            echo "\">
                                                    <input type=\"hidden\" class=\"name\" name=\"name_";
            // line 143
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "name", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"id\" name=\"id_";
            // line 144
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "id", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"target-id\" name=\"target_id_";
            // line 145
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["BlockPosition"], "target_id", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"top\" name=\"top_";
            // line 146
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["BlockPosition"], "block_row", array()), "html", null, true);
            echo "\" />
                                                    ";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "name", array()), "html", null, true);
            echo "
                                                    <label class=\"anywherecheck\">
                                                        (<input type=\"checkbox\" class=\"anywhere\" name=\"anywhere_";
            // line 149
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"1\" ";
            if (($this->getAttribute($context["BlockPosition"], "anywhere", array()) == 1)) {
                echo " checked=\"checked\"";
            }
            echo " />全ページ)
                                                    </label>
                                                </div>
                                                ";
            // line 152
            $context["loop_index"] = ((isset($context["loop_index"]) ? $context["loop_index"] : null) + 1);
            // line 153
            echo "                                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "                                        </td>
                                        <td id=\"position_";
        // line 155
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\PageLayout::TARGET_ID_MAIN_TOP"), "html", null, true);
        echo "\" class=\"ui-sortable\">
                                            ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "MainTopPosition", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 157
            echo "                                                <div id=\"detail_box__layout_item--";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "id", array()), "html", null, true);
            echo "\" class=\"sort";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo " first";
            }
            echo "\">
                                                    <input type=\"hidden\" class=\"name\" name=\"name_";
            // line 158
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "name", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"id\" name=\"id_";
            // line 159
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "id", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"target-id\" name=\"target_id_";
            // line 160
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["BlockPosition"], "target_id", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"top\" name=\"top_";
            // line 161
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["BlockPosition"], "block_row", array()), "html", null, true);
            echo "\" />
                                                    ";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "name", array()), "html", null, true);
            echo "
                                                    <label class=\"anywherecheck\">
                                                        (<input type=\"checkbox\" class=\"anywhere\" name=\"anywhere_";
            // line 164
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"1\" ";
            if (($this->getAttribute($context["BlockPosition"], "anywhere", array()) == 1)) {
                echo " checked=\"checked\"";
            }
            echo " />全ページ)
                                                    </label>
                                                </div>
                                                ";
            // line 167
            $context["loop_index"] = ((isset($context["loop_index"]) ? $context["loop_index"] : null) + 1);
            // line 168
            echo "                                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "                                        </td>
                                        <td id=\"position_";
        // line 170
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\PageLayout::TARGET_ID_SIDE_RIGHT"), "html", null, true);
        echo "\" class=\"ui-sortable\" rowspan=\"3\">
                                            ";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "SideRightPosition", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 172
            echo "                                                <div id=\"detail_box__layout_item--";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "id", array()), "html", null, true);
            echo "\" class=\"sort";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo " first";
            }
            echo "\">
                                                    <input type=\"hidden\" class=\"name\" name=\"name_";
            // line 173
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "name", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"id\" name=\"id_";
            // line 174
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "id", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"target-id\" name=\"target_id_";
            // line 175
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["BlockPosition"], "target_id", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"top\" name=\"top_";
            // line 176
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["BlockPosition"], "block_row", array()), "html", null, true);
            echo "\" />
                                                    ";
            // line 177
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "name", array()), "html", null, true);
            echo "
                                                    <label class=\"anywherecheck\">
                                                        (<input type=\"checkbox\" class=\"anywhere\" name=\"anywhere_";
            // line 179
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"1\" ";
            if (($this->getAttribute($context["BlockPosition"], "anywhere", array()) == 1)) {
                echo " checked=\"checked\"";
            }
            echo " />全ページ)
                                                    </label>
                                                </div>
                                                ";
            // line 182
            $context["loop_index"] = ((isset($context["loop_index"]) ? $context["loop_index"] : null) + 1);
            // line 183
            echo "                                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        echo "                                        </td>
                                    </tr>

                                    <tr id=\"detail_box__layout_item_main_text\">
                                        <td>
                                            Main
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id=\"position_";
        // line 194
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\PageLayout::TARGET_ID_MAIN_BOTTOM"), "html", null, true);
        echo "\" class=\"ui-sortable\">
                                            ";
        // line 195
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "MainBottomPosition", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 196
            echo "                                                <div id=\"detail_box__layout_item--";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "id", array()), "html", null, true);
            echo "\" class=\"sort";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo " first";
            }
            echo "\">
                                                    <input type=\"hidden\" class=\"name\" name=\"name_";
            // line 197
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "name", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"id\" name=\"id_";
            // line 198
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "id", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"target-id\" name=\"target_id_";
            // line 199
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["BlockPosition"], "target_id", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"top\" name=\"top_";
            // line 200
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["BlockPosition"], "block_row", array()), "html", null, true);
            echo "\" />
                                                    ";
            // line 201
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "name", array()), "html", null, true);
            echo "
                                                    <label class=\"anywherecheck\">
                                                        (<input type=\"checkbox\" class=\"anywhere\" name=\"anywhere_";
            // line 203
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"1\" ";
            if (($this->getAttribute($context["BlockPosition"], "anywhere", array()) == 1)) {
                echo " checked=\"checked\"";
            }
            echo " />全ページ)
                                                    </label>
                                                </div>
                                                ";
            // line 206
            $context["loop_index"] = ((isset($context["loop_index"]) ? $context["loop_index"] : null) + 1);
            // line 207
            echo "                                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        echo "                                        </td>
                                    </tr>

                                    <tr>
                                        <td id=\"position_";
        // line 212
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\PageLayout::TARGET_ID_CONTENTS_BOTTOM"), "html", null, true);
        echo "\" class=\"ui-sortable\" colspan=\"3\">
                                            ";
        // line 213
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "ContentsBottomPosition", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 214
            echo "                                                <div id=\"detail_box__layout_item--";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "id", array()), "html", null, true);
            echo "\" class=\"sort";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo " first";
            }
            echo "\">
                                                    <input type=\"hidden\" class=\"name\" name=\"name_";
            // line 215
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "name", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"id\" name=\"id_";
            // line 216
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "id", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"target-id\" name=\"target_id_";
            // line 217
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["BlockPosition"], "target_id", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"top\" name=\"top_";
            // line 218
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["BlockPosition"], "block_row", array()), "html", null, true);
            echo "\" />
                                                    ";
            // line 219
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "name", array()), "html", null, true);
            echo "
                                                    <label class=\"anywherecheck\">
                                                        (<input type=\"checkbox\" class=\"anywhere\" name=\"anywhere_";
            // line 221
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"1\" ";
            if (($this->getAttribute($context["BlockPosition"], "anywhere", array()) == 1)) {
                echo " checked=\"checked\"";
            }
            echo " />全ページ)
                                                    </label>
                                                </div>
                                                ";
            // line 224
            $context["loop_index"] = ((isset($context["loop_index"]) ? $context["loop_index"] : null) + 1);
            // line 225
            echo "                                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 226
        echo "                                        </td>
                                    </tr>

                                    <tr>
                                        <td id=\"position_";
        // line 230
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\PageLayout::TARGET_ID_FOOTER"), "html", null, true);
        echo "\" class=\"ui-sortable\" colspan=\"3\">
                                            ";
        // line 231
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "FooterPosition", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 232
            echo "                                                <div id=\"detail_box__layout_item--";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "id", array()), "html", null, true);
            echo "\" class=\"sort";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo " first";
            }
            echo "\">
                                                    <input type=\"hidden\" class=\"name\" name=\"name_";
            // line 233
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "name", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"id\" name=\"id_";
            // line 234
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "id", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"target-id\" name=\"target_id_";
            // line 235
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["BlockPosition"], "target_id", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"top\" name=\"top_";
            // line 236
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["BlockPosition"], "block_row", array()), "html", null, true);
            echo "\" />
                                                    ";
            // line 237
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "name", array()), "html", null, true);
            echo "
                                                    <label class=\"anywherecheck\">
                                                        (<input type=\"checkbox\" class=\"anywhere\" name=\"anywhere_";
            // line 239
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"1\" ";
            if (($this->getAttribute($context["BlockPosition"], "anywhere", array()) == 1)) {
                echo " checked=\"checked\"";
            }
            echo " />全ページ)
                                                    </label>
                                                </div>
                                                ";
            // line 242
            $context["loop_index"] = ((isset($context["loop_index"]) ? $context["loop_index"] : null) + 1);
            // line 243
            echo "                                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 244
        echo "                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                            ";
        // line 251
        echo "                        </div>
                        <div id=\"detail_box__layout_box--right_column\" class=\"col-md-4\">
                            <div class=\"\">
                                <table class=\"table table-bordered text-center design-layout\">
                                    <tbody>
                                    <tr>
                                        <td id=\"position_";
        // line 257
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\PageLayout::TARGET_ID_UNUSED"), "html", null, true);
        echo "\" class=\"ui-sortable\">
                                            ";
        // line 258
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "UnusedPosition", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 259
            echo "                                                <div id=\"detail_box__layout_item--";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "id", array()), "html", null, true);
            echo "\" class=\"sort";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo " first";
            }
            echo "\">
                                                    <input type=\"hidden\" class=\"name\" name=\"name_";
            // line 260
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "name", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"id\" name=\"id_";
            // line 261
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "id", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"target-id\" name=\"target_id_";
            // line 262
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["BlockPosition"], "target_id", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"top\" name=\"top_";
            // line 263
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["BlockPosition"], "block_row", array()), "html", null, true);
            echo "\" />
                                                    ";
            // line 264
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "name", array()), "html", null, true);
            echo "
                                                    <label class=\"anywherecheck\">
                                                        (<input type=\"checkbox\" class=\"anywhere\" name=\"anywhere_";
            // line 266
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"1\" ";
            if (($this->getAttribute($context["BlockPosition"], "anywhere", array()) == 1)) {
                echo " checked=\"checked\"";
            }
            echo " />全ページ)
                                                    </label>
                                                </div>
                                                ";
            // line 269
            $context["loop_index"] = ((isset($context["loop_index"]) ? $context["loop_index"] : null) + 1);
            // line 270
            echo "                                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 271
        echo "                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- /.col -->
                    </div>
                    <div id=\"detail_box__footer\" class=\"row\">
                        <div id=\"detail_box__back_button\" class=\"col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 text-center btn_area2\">
                            <p><a href=\"";
        // line 280
        echo $this->env->getExtension('eccube')->getUrl("admin_content_page");
        echo "\">戻る</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"common_box\" class=\"col-md-3\">
                <div class=\"col_inner\">
                    <div id=\"common_button_box\" class=\"box no-header\">
                        <div id=\"common_button_box__body\" class=\"box-body\">
                            <div id=\"common_button_box__insert_button\" class=\"row text-center\">
                                <div class=\"col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0\">
                                    <button class=\"btn btn-primary btn-block btn-lg\" onclick=\"doRegister();\">登録</button>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                    <div id=\"preview_box\" class=\"box\">
                        <div id=\"preview_box__preview_button\" class=\"box-header\">
                            ";
        // line 298
        $context["disabled"] = true;
        // line 299
        echo "                            ";
        if (((((((((((($this->getAttribute((isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "url", array()) != "entry_activate") && ($this->getAttribute(        // line 300
(isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "url", array()) != "shopping")) && ($this->getAttribute(        // line 301
(isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "url", array()) != "shopping_shipping")) && ($this->getAttribute(        // line 302
(isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "url", array()) != "shopping_shipping_multiple")) && ($this->getAttribute(        // line 303
(isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "url", array()) != "shopping_complete")) && ($this->getAttribute(        // line 304
(isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "url", array()) != "shopping_login")) && ($this->getAttribute(        // line 305
(isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "url", array()) != "shopping_nonmember")) && ($this->getAttribute(        // line 306
(isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "url", array()) != "shopping_shipping_edit")) && ($this->getAttribute(        // line 307
(isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "url", array()) != "shopping_shipping_multiple_edit")) && ($this->getAttribute(        // line 308
(isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "url", array()) != "shopping_error")) && ($this->getAttribute(        // line 309
(isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "url", array()) != "forgot_reset"))) {
            // line 311
            echo "                            ";
            $context["disabled"] = false;
            // line 312
            echo "                            ";
        }
        // line 313
        echo "                            <button  class=\"btn btn-default btn-block btn-sm\" ";
        if ((($this->getAttribute($this->getAttribute((isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "DeviceType", array()), "id", array()) != twig_constant("Eccube\\Entity\\Master\\DeviceType::DEVICE_TYPE_PC")) || (isset($context["disabled"]) ? $context["disabled"] : null))) {
            echo "disabled";
        }
        echo " onclick=\"doPreview();\">
                                プレビュー
                            </button>
                        </div><!-- /.box-header -->
                    </div>

                </div>
            </div><!-- /.col -->
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "__string_template__6a2a975744738221975c95b6ae77d89af0f0986b1e283ac34a51e4055f3ddaf6";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1119 => 313,  1116 => 312,  1113 => 311,  1111 => 309,  1110 => 308,  1109 => 307,  1108 => 306,  1107 => 305,  1106 => 304,  1105 => 303,  1104 => 302,  1103 => 301,  1102 => 300,  1100 => 299,  1098 => 298,  1077 => 280,  1066 => 271,  1052 => 270,  1050 => 269,  1040 => 266,  1035 => 264,  1029 => 263,  1023 => 262,  1017 => 261,  1011 => 260,  1002 => 259,  985 => 258,  981 => 257,  973 => 251,  965 => 244,  951 => 243,  949 => 242,  939 => 239,  934 => 237,  928 => 236,  922 => 235,  916 => 234,  910 => 233,  901 => 232,  884 => 231,  880 => 230,  874 => 226,  860 => 225,  858 => 224,  848 => 221,  843 => 219,  837 => 218,  831 => 217,  825 => 216,  819 => 215,  810 => 214,  793 => 213,  789 => 212,  783 => 208,  769 => 207,  767 => 206,  757 => 203,  752 => 201,  746 => 200,  740 => 199,  734 => 198,  728 => 197,  719 => 196,  702 => 195,  698 => 194,  686 => 184,  672 => 183,  670 => 182,  660 => 179,  655 => 177,  649 => 176,  643 => 175,  637 => 174,  631 => 173,  622 => 172,  605 => 171,  601 => 170,  598 => 169,  584 => 168,  582 => 167,  572 => 164,  567 => 162,  561 => 161,  555 => 160,  549 => 159,  543 => 158,  534 => 157,  517 => 156,  513 => 155,  510 => 154,  496 => 153,  494 => 152,  484 => 149,  479 => 147,  473 => 146,  467 => 145,  461 => 144,  455 => 143,  446 => 142,  429 => 141,  425 => 140,  419 => 136,  405 => 135,  403 => 134,  393 => 131,  388 => 129,  382 => 128,  376 => 127,  370 => 126,  364 => 125,  355 => 124,  338 => 123,  334 => 122,  328 => 118,  314 => 117,  312 => 116,  302 => 113,  297 => 111,  291 => 110,  285 => 109,  279 => 108,  273 => 107,  264 => 106,  247 => 105,  243 => 104,  237 => 100,  223 => 99,  221 => 98,  211 => 95,  206 => 93,  200 => 92,  194 => 91,  188 => 90,  182 => 89,  173 => 88,  155 => 87,  153 => 86,  149 => 85,  137 => 76,  133 => 74,  127 => 70,  122 => 69,  119 => 68,  109 => 61,  101 => 56,  93 => 51,  89 => 50,  76 => 40,  70 => 37,  66 => 36,  62 => 35,  58 => 34,  53 => 33,  50 => 32,  44 => 27,  38 => 26,  34 => 22,  32 => 30,  30 => 29,  28 => 24,  11 => 22,);
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
/* {% set menus = ['content', 'page'] %}*/
/* */
/* {% block title %}コンテンツ管理{% endblock %}*/
/* {% block sub_title %}レイアウト管理{% endblock %}*/
/* */
/* {% form_theme form 'Form/bootstrap_3_horizontal_layout.html.twig' %}*/
/* {% form_theme list_form 'Form/bootstrap_3_horizontal_layout.html.twig' %}*/
/* */
/* {% block javascript %}*/
/*     <script src="{{ app.config.admin_urlpath }}/assets/js/vendor/jquery.ui/jquery.ui.core.min.js"></script>*/
/*     <script src="{{ app.config.admin_urlpath }}/assets/js/vendor/jquery.ui/jquery.ui.widget.min.js"></script>*/
/*     <script src="{{ app.config.admin_urlpath }}/assets/js/vendor/jquery.ui/jquery.ui.mouse.min.js"></script>*/
/*     <script src="{{ app.config.admin_urlpath }}/assets/js/vendor/jquery.ui/jquery.ui.sortable.min.js"></script>*/
/*     <script src="{{ app.config.admin_urlpath }}/assets/js/layout_design.js"></script>*/
/*     <script>*/
/*         $(function() {*/
/*             var page_id = '{{ TargetPageLayout.id }}';*/
/*             if (page_id != '1') {*/
/*                 $('.anywhere').attr('disabled', true);*/
/*                 $('.anywhere:checked').each(function() {*/
/*                     $(this).parents('.sort').children('input[type=hidden]').each(function() {*/
/*                         $(this).remove();*/
/*                     });*/
/*                 });*/
/*             }*/
/* */
/*             $("#{{ list_form.layout.vars.id }}").on("change", function() {*/
/*                 var url = '{{ url('admin_content_layout_edit', { id : 9999 }) }}';*/
/*                 location.href = url.replace(9999, $(this).val());*/
/*             });*/
/*         });*/
/*         function doPreview() {*/
/*             document.form1.action = "{{ url('admin_content_layout_preview', {id: TargetPageLayout.id}) }}";*/
/*             document.form1.target = "_blank";*/
/*             document.form1.submit();*/
/*         }*/
/*         function doRegister() {*/
/*             document.form1.action = "{{ url('admin_content_layout_edit', {id: TargetPageLayout.id}) }}";*/
/*             document.form1.target = "_self";*/
/*             document.form1.submit();*/
/*         }*/
/*     </script>*/
/* {% endblock javascript %}*/
/* */
/* {% block main %}*/
/*     <form name="form1" id="form1" method="post" action="{{ url('admin_content_layout_edit', {id: TargetPageLayout.id}) }}">*/
/*         {{ form_widget(form._token) }}*/
/*         <div class="row" id="aside_wrap">*/
/*             <div id="detail_wrap" class="col-md-9">*/
/*                 {# ▼レイアウトここから #}*/
/*                 <div id="detail_box" class="box">*/
/*                     <div id="detail_box__menu" class="box-header">*/
/*                         {{ form_widget(list_form.layout) }}*/
/*                     </div>*/
/*                     <div id="detail_box__body" class="box-body no-border row">*/
/*                         <div id="detail_box__layout_box--left_column" class="col-md-8">*/
/*                             <div class="table-responsive">*/
/*                                 <table class="table table-bordered text-center design-layout">*/
/*                                     <tbody>*/
/* */
/*                                     <tr>*/
/*                                         <td id="position_{{ constant('Eccube\\Entity\\PageLayout::TARGET_ID_HEAD') }}" class="ui-sortable" colspan="3">*/
/*                                             {% set loop_index = 0 %}*/
/*                                             {% for BlockPosition in TargetPageLayout.HeadPosition %}*/
/*                                                 <div id="detail_box__layout_item--{{ BlockPosition.Block.id }}" class="sort{% if loop.first %} first{% endif %}">*/
/*                                                     <input type="hidden" class="name" name="name_{{ loop_index }}" value="{{ BlockPosition.Block.name}}" />*/
/*                                                     <input type="hidden" class="id" name="id_{{ loop_index }}" value="{{ BlockPosition.Block.id }}" />*/
/*                                                     <input type="hidden" class="target-id" name="target_id_{{ loop_index }}" value="{{ BlockPosition.target_id }}" />*/
/*                                                     <input type="hidden" class="top" name="top_{{ loop_index }}" value="{{ BlockPosition.block_row }}" />*/
/*                                                     {{ BlockPosition.Block.name }}*/
/*                                                     <label class="anywherecheck">*/
/*                                                         (<input type="checkbox" class="anywhere" name="anywhere_{{ loop_index }}" value="1" {% if BlockPosition.anywhere == 1 %} checked="checked"{% endif %} />全ページ)*/
/*                                                     </label>*/
/*                                                 </div>*/
/*                                                 {% set loop_index = loop_index + 1 %}*/
/*                                             {% endfor %}*/
/*                                         </td>*/
/*                                     </tr>*/
/* */
/*                                     <tr>*/
/*                                         <td id="position_{{ constant('Eccube\\Entity\\PageLayout::TARGET_ID_HEADER') }}" class="ui-sortable" colspan="3">*/
/*                                             {% for BlockPosition in TargetPageLayout.HeaderPosition %}*/
/*                                                 <div id="detail_box__layout_item--{{ BlockPosition.Block.id }}" class="sort{% if loop.first %} first{% endif %}">*/
/*                                                     <input type="hidden" class="name" name="name_{{ loop_index }}" value="{{ BlockPosition.Block.name}}" />*/
/*                                                     <input type="hidden" class="id" name="id_{{ loop_index }}" value="{{ BlockPosition.Block.id }}" />*/
/*                                                     <input type="hidden" class="target-id" name="target_id_{{ loop_index }}" value="{{ BlockPosition.target_id }}" />*/
/*                                                     <input type="hidden" class="top" name="top_{{ loop_index }}" value="{{ BlockPosition.block_row }}" />*/
/*                                                     {{ BlockPosition.Block.name }}*/
/*                                                     <label class="anywherecheck">*/
/*                                                         (<input type="checkbox" class="anywhere" name="anywhere_{{ loop_index }}" value="1" {% if BlockPosition.anywhere == 1 %} checked="checked"{% endif %} />全ページ)*/
/*                                                     </label>*/
/*                                                 </div>*/
/*                                                 {% set loop_index = loop_index + 1 %}*/
/*                                             {% endfor %}*/
/*                                         </td>*/
/*                                     </tr>*/
/* */
/*                                     <tr>*/
/*                                         <td id="position_{{ constant('Eccube\\Entity\\PageLayout::TARGET_ID_CONTENTS_TOP') }}" class="ui-sortable" colspan="3">*/
/*                                             {% for BlockPosition in TargetPageLayout.ContentsTopPosition %}*/
/*                                                 <div id="detail_box__layout_item--{{ BlockPosition.Block.id }}" class="sort{% if loop.first %} first{% endif %}">*/
/*                                                     <input type="hidden" class="name" name="name_{{ loop_index }}" value="{{ BlockPosition.Block.name}}" />*/
/*                                                     <input type="hidden" class="id" name="id_{{ loop_index }}" value="{{ BlockPosition.Block.id }}" />*/
/*                                                     <input type="hidden" class="target-id" name="target_id_{{ loop_index }}" value="{{ BlockPosition.target_id }}" />*/
/*                                                     <input type="hidden" class="top" name="top_{{ loop_index }}" value="{{ BlockPosition.block_row }}" />*/
/*                                                     {{ BlockPosition.Block.name }}*/
/*                                                     <label class="anywherecheck">*/
/*                                                         (<input type="checkbox" class="anywhere" name="anywhere_{{ loop_index }}" value="1" {% if BlockPosition.anywhere == 1 %} checked="checked"{% endif %} />全ページ)*/
/*                                                     </label>*/
/*                                                 </div>*/
/*                                                 {% set loop_index = loop_index + 1 %}*/
/*                                             {% endfor %}*/
/*                                         </td>*/
/*                                     </tr>*/
/* */
/*                                     <tr>*/
/*                                         <td id="position_{{ constant('Eccube\\Entity\\PageLayout::TARGET_ID_SIDE_LEFT') }}" class="ui-sortable" rowspan="3">*/
/*                                             {% for BlockPosition in TargetPageLayout.SideLeftPosition %}*/
/*                                                 <div id="detail_box__layout_item--{{ BlockPosition.Block.id }}" class="sort{% if loop.first %} first{% endif %}">*/
/*                                                     <input type="hidden" class="name" name="name_{{ loop_index }}" value="{{ BlockPosition.Block.name}}" />*/
/*                                                     <input type="hidden" class="id" name="id_{{ loop_index }}" value="{{ BlockPosition.Block.id }}" />*/
/*                                                     <input type="hidden" class="target-id" name="target_id_{{ loop_index }}" value="{{ BlockPosition.target_id }}" />*/
/*                                                     <input type="hidden" class="top" name="top_{{ loop_index }}" value="{{ BlockPosition.block_row }}" />*/
/*                                                     {{ BlockPosition.Block.name }}*/
/*                                                     <label class="anywherecheck">*/
/*                                                         (<input type="checkbox" class="anywhere" name="anywhere_{{ loop_index }}" value="1" {% if BlockPosition.anywhere == 1 %} checked="checked"{% endif %} />全ページ)*/
/*                                                     </label>*/
/*                                                 </div>*/
/*                                                 {% set loop_index = loop_index + 1 %}*/
/*                                             {% endfor %}*/
/*                                         </td>*/
/*                                         <td id="position_{{ constant('Eccube\\Entity\\PageLayout::TARGET_ID_MAIN_TOP') }}" class="ui-sortable">*/
/*                                             {% for BlockPosition in TargetPageLayout.MainTopPosition %}*/
/*                                                 <div id="detail_box__layout_item--{{ BlockPosition.Block.id }}" class="sort{% if loop.first %} first{% endif %}">*/
/*                                                     <input type="hidden" class="name" name="name_{{ loop_index }}" value="{{ BlockPosition.Block.name}}" />*/
/*                                                     <input type="hidden" class="id" name="id_{{ loop_index }}" value="{{ BlockPosition.Block.id }}" />*/
/*                                                     <input type="hidden" class="target-id" name="target_id_{{ loop_index }}" value="{{ BlockPosition.target_id }}" />*/
/*                                                     <input type="hidden" class="top" name="top_{{ loop_index }}" value="{{ BlockPosition.block_row }}" />*/
/*                                                     {{ BlockPosition.Block.name }}*/
/*                                                     <label class="anywherecheck">*/
/*                                                         (<input type="checkbox" class="anywhere" name="anywhere_{{ loop_index }}" value="1" {% if BlockPosition.anywhere == 1 %} checked="checked"{% endif %} />全ページ)*/
/*                                                     </label>*/
/*                                                 </div>*/
/*                                                 {% set loop_index = loop_index + 1 %}*/
/*                                             {% endfor %}*/
/*                                         </td>*/
/*                                         <td id="position_{{ constant('Eccube\\Entity\\PageLayout::TARGET_ID_SIDE_RIGHT') }}" class="ui-sortable" rowspan="3">*/
/*                                             {% for BlockPosition in TargetPageLayout.SideRightPosition %}*/
/*                                                 <div id="detail_box__layout_item--{{ BlockPosition.Block.id }}" class="sort{% if loop.first %} first{% endif %}">*/
/*                                                     <input type="hidden" class="name" name="name_{{ loop_index }}" value="{{ BlockPosition.Block.name}}" />*/
/*                                                     <input type="hidden" class="id" name="id_{{ loop_index }}" value="{{ BlockPosition.Block.id }}" />*/
/*                                                     <input type="hidden" class="target-id" name="target_id_{{ loop_index }}" value="{{ BlockPosition.target_id }}" />*/
/*                                                     <input type="hidden" class="top" name="top_{{ loop_index }}" value="{{ BlockPosition.block_row }}" />*/
/*                                                     {{ BlockPosition.Block.name }}*/
/*                                                     <label class="anywherecheck">*/
/*                                                         (<input type="checkbox" class="anywhere" name="anywhere_{{ loop_index }}" value="1" {% if BlockPosition.anywhere == 1 %} checked="checked"{% endif %} />全ページ)*/
/*                                                     </label>*/
/*                                                 </div>*/
/*                                                 {% set loop_index = loop_index + 1 %}*/
/*                                             {% endfor %}*/
/*                                         </td>*/
/*                                     </tr>*/
/* */
/*                                     <tr id="detail_box__layout_item_main_text">*/
/*                                         <td>*/
/*                                             Main*/
/*                                         </td>*/
/*                                     </tr>*/
/* */
/*                                     <tr>*/
/*                                         <td id="position_{{ constant('Eccube\\Entity\\PageLayout::TARGET_ID_MAIN_BOTTOM') }}" class="ui-sortable">*/
/*                                             {% for BlockPosition in TargetPageLayout.MainBottomPosition %}*/
/*                                                 <div id="detail_box__layout_item--{{ BlockPosition.Block.id }}" class="sort{% if loop.first %} first{% endif %}">*/
/*                                                     <input type="hidden" class="name" name="name_{{ loop_index }}" value="{{ BlockPosition.Block.name}}" />*/
/*                                                     <input type="hidden" class="id" name="id_{{ loop_index }}" value="{{ BlockPosition.Block.id }}" />*/
/*                                                     <input type="hidden" class="target-id" name="target_id_{{ loop_index }}" value="{{ BlockPosition.target_id }}" />*/
/*                                                     <input type="hidden" class="top" name="top_{{ loop_index }}" value="{{ BlockPosition.block_row }}" />*/
/*                                                     {{ BlockPosition.Block.name }}*/
/*                                                     <label class="anywherecheck">*/
/*                                                         (<input type="checkbox" class="anywhere" name="anywhere_{{ loop_index }}" value="1" {% if BlockPosition.anywhere == 1 %} checked="checked"{% endif %} />全ページ)*/
/*                                                     </label>*/
/*                                                 </div>*/
/*                                                 {% set loop_index = loop_index + 1 %}*/
/*                                             {% endfor %}*/
/*                                         </td>*/
/*                                     </tr>*/
/* */
/*                                     <tr>*/
/*                                         <td id="position_{{ constant('Eccube\\Entity\\PageLayout::TARGET_ID_CONTENTS_BOTTOM') }}" class="ui-sortable" colspan="3">*/
/*                                             {% for BlockPosition in TargetPageLayout.ContentsBottomPosition %}*/
/*                                                 <div id="detail_box__layout_item--{{ BlockPosition.Block.id }}" class="sort{% if loop.first %} first{% endif %}">*/
/*                                                     <input type="hidden" class="name" name="name_{{ loop_index }}" value="{{ BlockPosition.Block.name}}" />*/
/*                                                     <input type="hidden" class="id" name="id_{{ loop_index }}" value="{{ BlockPosition.Block.id }}" />*/
/*                                                     <input type="hidden" class="target-id" name="target_id_{{ loop_index }}" value="{{ BlockPosition.target_id }}" />*/
/*                                                     <input type="hidden" class="top" name="top_{{ loop_index }}" value="{{ BlockPosition.block_row }}" />*/
/*                                                     {{ BlockPosition.Block.name }}*/
/*                                                     <label class="anywherecheck">*/
/*                                                         (<input type="checkbox" class="anywhere" name="anywhere_{{ loop_index }}" value="1" {% if BlockPosition.anywhere == 1 %} checked="checked"{% endif %} />全ページ)*/
/*                                                     </label>*/
/*                                                 </div>*/
/*                                                 {% set loop_index = loop_index + 1 %}*/
/*                                             {% endfor %}*/
/*                                         </td>*/
/*                                     </tr>*/
/* */
/*                                     <tr>*/
/*                                         <td id="position_{{ constant('Eccube\\Entity\\PageLayout::TARGET_ID_FOOTER') }}" class="ui-sortable" colspan="3">*/
/*                                             {% for BlockPosition in TargetPageLayout.FooterPosition %}*/
/*                                                 <div id="detail_box__layout_item--{{ BlockPosition.Block.id }}" class="sort{% if loop.first %} first{% endif %}">*/
/*                                                     <input type="hidden" class="name" name="name_{{ loop_index }}" value="{{ BlockPosition.Block.name}}" />*/
/*                                                     <input type="hidden" class="id" name="id_{{ loop_index }}" value="{{ BlockPosition.Block.id }}" />*/
/*                                                     <input type="hidden" class="target-id" name="target_id_{{ loop_index }}" value="{{ BlockPosition.target_id }}" />*/
/*                                                     <input type="hidden" class="top" name="top_{{ loop_index }}" value="{{ BlockPosition.block_row }}" />*/
/*                                                     {{ BlockPosition.Block.name }}*/
/*                                                     <label class="anywherecheck">*/
/*                                                         (<input type="checkbox" class="anywhere" name="anywhere_{{ loop_index }}" value="1" {% if BlockPosition.anywhere == 1 %} checked="checked"{% endif %} />全ページ)*/
/*                                                     </label>*/
/*                                                 </div>*/
/*                                                 {% set loop_index = loop_index + 1 %}*/
/*                                             {% endfor %}*/
/*                                         </td>*/
/*                                     </tr>*/
/* */
/*                                     </tbody>*/
/*                                 </table>*/
/*                             </div>*/
/*                             {# ▲レイアウトここまで #}*/
/*                         </div>*/
/*                         <div id="detail_box__layout_box--right_column" class="col-md-4">*/
/*                             <div class="">*/
/*                                 <table class="table table-bordered text-center design-layout">*/
/*                                     <tbody>*/
/*                                     <tr>*/
/*                                         <td id="position_{{ constant('Eccube\\Entity\\PageLayout::TARGET_ID_UNUSED') }}" class="ui-sortable">*/
/*                                             {% for BlockPosition in TargetPageLayout.UnusedPosition %}*/
/*                                                 <div id="detail_box__layout_item--{{ BlockPosition.Block.id }}" class="sort{% if loop.first %} first{% endif %}">*/
/*                                                     <input type="hidden" class="name" name="name_{{ loop_index }}" value="{{ BlockPosition.Block.name}}" />*/
/*                                                     <input type="hidden" class="id" name="id_{{ loop_index }}" value="{{ BlockPosition.Block.id }}" />*/
/*                                                     <input type="hidden" class="target-id" name="target_id_{{ loop_index }}" value="{{ BlockPosition.target_id }}" />*/
/*                                                     <input type="hidden" class="top" name="top_{{ loop_index }}" value="{{ BlockPosition.block_row }}" />*/
/*                                                     {{ BlockPosition.Block.name }}*/
/*                                                     <label class="anywherecheck">*/
/*                                                         (<input type="checkbox" class="anywhere" name="anywhere_{{ loop_index }}" value="1" {% if BlockPosition.anywhere == 1 %} checked="checked"{% endif %} />全ページ)*/
/*                                                     </label>*/
/*                                                 </div>*/
/*                                                 {% set loop_index = loop_index + 1 %}*/
/*                                             {% endfor %}*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                     </tbody>*/
/*                                 </table>*/
/*                             </div>*/
/*                         </div><!-- /.col -->*/
/*                     </div>*/
/*                     <div id="detail_box__footer" class="row">*/
/*                         <div id="detail_box__back_button" class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 text-center btn_area2">*/
/*                             <p><a href="{{ url('admin_content_page') }}">戻る</a></p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div id="common_box" class="col-md-3">*/
/*                 <div class="col_inner">*/
/*                     <div id="common_button_box" class="box no-header">*/
/*                         <div id="common_button_box__body" class="box-body">*/
/*                             <div id="common_button_box__insert_button" class="row text-center">*/
/*                                 <div class="col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0">*/
/*                                     <button class="btn btn-primary btn-block btn-lg" onclick="doRegister();">登録</button>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div><!-- /.box-body -->*/
/*                     </div><!-- /.box -->*/
/*                     <div id="preview_box" class="box">*/
/*                         <div id="preview_box__preview_button" class="box-header">*/
/*                             {% set disabled = true %}*/
/*                             {%  if TargetPageLayout.url != 'entry_activate' and */
/*                                    TargetPageLayout.url != 'shopping' and*/
/*                                    TargetPageLayout.url != 'shopping_shipping' and*/
/*                                    TargetPageLayout.url != 'shopping_shipping_multiple' and*/
/*                                    TargetPageLayout.url != 'shopping_complete' and*/
/*                                    TargetPageLayout.url != 'shopping_login' and */
/*                                    TargetPageLayout.url != 'shopping_nonmember' and*/
/*                                    TargetPageLayout.url != 'shopping_shipping_edit' and*/
/*                                    TargetPageLayout.url != 'shopping_shipping_multiple_edit' and*/
/*                                    TargetPageLayout.url != 'shopping_error' and*/
/*                                    TargetPageLayout.url != 'forgot_reset'*/
/*                             %}*/
/*                             {% set disabled = false %}*/
/*                             {% endif %}*/
/*                             <button  class="btn btn-default btn-block btn-sm" {% if TargetPageLayout.DeviceType.id != constant('Eccube\\Entity\\Master\\DeviceType::DEVICE_TYPE_PC') or disabled %}disabled{% endif %} onclick="doPreview();">*/
/*                                 プレビュー*/
/*                             </button>*/
/*                         </div><!-- /.box-header -->*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </div><!-- /.col -->*/
/*         </div>*/
/*     </form>*/
/* {% endblock %}*/
/* */
