<?php

/* @SaxulumWebProfilerProvider/Collector/db.html.twig */
class __TwigTemplate_21567121be248083f523bc69aa9c706f81d40ab36325982ef09c8dfd59874b45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@SaxulumWebProfilerProvider/Collector/db.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'queries' => array($this, 'block_queries'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb6ac23ab6b78ae2a6f5fa4eff9edffe515fe70f8bb3fd6eeb64ece999bfd3e0 = $this->env->getExtension("native_profiler");
        $__internal_cb6ac23ab6b78ae2a6f5fa4eff9edffe515fe70f8bb3fd6eeb64ece999bfd3e0->enter($__internal_cb6ac23ab6b78ae2a6f5fa4eff9edffe515fe70f8bb3fd6eeb64ece999bfd3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SaxulumWebProfilerProvider/Collector/db.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb6ac23ab6b78ae2a6f5fa4eff9edffe515fe70f8bb3fd6eeb64ece999bfd3e0->leave($__internal_cb6ac23ab6b78ae2a6f5fa4eff9edffe515fe70f8bb3fd6eeb64ece999bfd3e0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d51596d179c08a9a25214d13ca6d51abdfe1948a8888cc36bc608347ac1dc53c = $this->env->getExtension("native_profiler");
        $__internal_d51596d179c08a9a25214d13ca6d51abdfe1948a8888cc36bc608347ac1dc53c->enter($__internal_d51596d179c08a9a25214d13ca6d51abdfe1948a8888cc36bc608347ac1dc53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "    <img width=\"20\" height=\"28\" alt=\"Database\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC\" />
    <span class=\"sf-toolbar-status";
        // line 6
        if ((50 < $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array()))) {
            echo " sf-toolbar-status-yellow";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array()), "html", null, true);
        echo "</span>
    ";
        // line 7
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array()) > 0)) {
            // line 8
            echo "        <span class=\"sf-toolbar-info-piece-additional-detail\">in ";
            echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time", array()) * 1000)), "html", null, true);
            echo " ms</span>
    ";
        }
        // line 10
        echo "    ";
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "invalidEntityCount", array()) > 0)) {
            // line 11
            echo "        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status sf-toolbar-status-red\"> </span>
    ";
        }
        // line 13
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 14
        echo "    ";
        ob_start();
        // line 15
        echo "    <div class=\"sf-toolbar-info-piece\">
        <b>DB Queries</b>
        <span>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array()), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Query time</b>
        <span>";
        // line 21
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Invalid entities</b>
        <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 25
        echo ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "invalidEntityCount", array()) > 0)) ? ("red") : ("green"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "invalidEntityCount", array()), "html", null, true);
        echo "</span>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 28
        echo "    ";
        $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@SaxulumWebProfilerProvider/Collector/db.html.twig", 28)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
        
        $__internal_d51596d179c08a9a25214d13ca6d51abdfe1948a8888cc36bc608347ac1dc53c->leave($__internal_d51596d179c08a9a25214d13ca6d51abdfe1948a8888cc36bc608347ac1dc53c_prof);

    }

    // line 31
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dcf9529e636a97c34019b2da0300332ead6ebe56fdcfa5602a80316aa846839e = $this->env->getExtension("native_profiler");
        $__internal_dcf9529e636a97c34019b2da0300332ead6ebe56fdcfa5602a80316aa846839e->enter($__internal_dcf9529e636a97c34019b2da0300332ead6ebe56fdcfa5602a80316aa846839e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 32
        echo "    <span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==\" alt=\"\" /></span>
    <strong>Doctrine</strong>
    <span class=\"count\">
        <span>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array()), "html", null, true);
        echo "</span>
        <span>";
        // line 37
        echo twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
    </span>
</span>
";
        
        $__internal_dcf9529e636a97c34019b2da0300332ead6ebe56fdcfa5602a80316aa846839e->leave($__internal_dcf9529e636a97c34019b2da0300332ead6ebe56fdcfa5602a80316aa846839e_prof);

    }

    // line 42
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1a0d5ff449d8fb1c2fa734e7c917160f9deda5c1eb9376b1ba27a37d538f2ad0 = $this->env->getExtension("native_profiler");
        $__internal_1a0d5ff449d8fb1c2fa734e7c917160f9deda5c1eb9376b1ba27a37d538f2ad0->enter($__internal_1a0d5ff449d8fb1c2fa734e7c917160f9deda5c1eb9376b1ba27a37d538f2ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 43
        echo "    ";
        $this->displayBlock("queries", $context, $blocks);
        echo "
";
        
        $__internal_1a0d5ff449d8fb1c2fa734e7c917160f9deda5c1eb9376b1ba27a37d538f2ad0->leave($__internal_1a0d5ff449d8fb1c2fa734e7c917160f9deda5c1eb9376b1ba27a37d538f2ad0_prof);

    }

    // line 46
    public function block_queries($context, array $blocks = array())
    {
        $__internal_3cce5986c33311921a54b6b1c21b6495368f50b130d52c0123980d9014b61f8a = $this->env->getExtension("native_profiler");
        $__internal_3cce5986c33311921a54b6b1c21b6495368f50b130d52c0123980d9014b61f8a->enter($__internal_3cce5986c33311921a54b6b1c21b6495368f50b130d52c0123980d9014b61f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "queries"));

        // line 47
        echo "    <h2>Queries</h2>

    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "queries", array()));
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
        foreach ($context['_seq'] as $context["connection"] => $context["queries"]) {
            // line 50
            echo "        <h3>Connection <em>";
            echo twig_escape_filter($this->env, $context["connection"], "html", null, true);
            echo "</em></h3>
        ";
            // line 51
            if (twig_test_empty($context["queries"])) {
                // line 52
                echo "            <p>
                <em>No queries.</em>
            </p>
        ";
            } else {
                // line 56
                echo "            <p>
                <button type=\"button\" class=\"sf-button\" onclick=\"expandAllQueries(this);\" data-action=\"expand\">
                    <span class=\"border-l\">
                        <span class=\"border-r\">
                            <span class=\"btn-bg\">Expand all queries</span>
                        </span>
                    </span>
                </button>
            </p>
            <ul class=\"alt\" id=\"queriesPlaceholder-";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                ";
                // line 66
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["queries"]);
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
                foreach ($context['_seq'] as $context["i"] => $context["query"]) {
                    // line 67
                    echo "                    <li class=\"";
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $context["i"]), "html", null, true);
                    echo "\" data-extra-info=\"";
                    echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($context["query"], "executionMS", array()) * 1000)), "html", null, true);
                    echo "\" data-target-id=\"";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">
                        <div style=\"margin-top: 4px\" id=\"queryNo-";
                    // line 68
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\">
                            <div class=\"query-section\" data-state=\"collapsed\" onclick=\"return expandQuery(this);\" title=\"Expand query\" data-target-id=\"code-";
                    // line 69
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" style=\"cursor: pointer;\">
                                <img alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display: inline;\" />
                                <img alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display: none;\" />
                                <span style=\"display: none\">Shrink query</span>
                                <span id=\"smallcode-";
                    // line 73
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\">
                                    ";
                    // line 74
                    echo $this->env->getExtension('doctrine_extension')->minifyQuery($this->getAttribute($context["query"], "sql", array()));
                    echo "
                                </span>
                            </div>
                            <code id=\"code-";
                    // line 77
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\">
                                ";
                    // line 78
                    echo SqlFormatter::format($this->getAttribute($context["query"], "sql", array()), $context["i"], $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()));
                    echo "
                            </code>
                            <span id=\"original-query-";
                    // line 80
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" style=\"display: none;\">
                                ";
                    // line 81
                    echo $this->env->getExtension('doctrine_extension')->replaceQueryParameters($this->getAttribute($context["query"], "sql", array()), $this->getAttribute($context["query"], "params", array()));
                    echo "
                            </span>
                            <small>
                                <strong>Parameters</strong>: ";
                    // line 84
                    echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($context["query"], "params", array())), "html", null, true);
                    echo " <br />
                                [<span id=\"expandParams-";
                    // line 85
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" onclick=\"javascript:toggleRunnableQuery(this);\" target-data-id=\"original-query-";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" style=\"cursor: pointer;\">Display runnable query</span>]<br/>
                                <strong>Time</strong>: ";
                    // line 86
                    echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($context["query"], "executionMS", array()) * 1000)), "html", null, true);
                    echo " ms
                            </small>
                        </div>
                    </li>
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
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['query'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 91
                echo "            </ul>
        ";
            }
            // line 93
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['connection'], $context['queries'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "
    <h2>Database Connections</h2>

    ";
        // line 97
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "connections", array())) {
            // line 98
            echo "        ";
            $this->loadTemplate("@WebProfiler/Profiler/table.html.twig", "@SaxulumWebProfilerProvider/Collector/db.html.twig", 98)->display(array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "connections", array())));
            // line 99
            echo "    ";
        } else {
            // line 100
            echo "        <p>
            <em>No connections.</em>
        </p>
    ";
        }
        // line 104
        echo "
    <h2>Entity Managers</h2>

    ";
        // line 107
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "managers", array())) {
            // line 108
            echo "        ";
            $this->loadTemplate("@WebProfiler/Profiler/table.html.twig", "@SaxulumWebProfilerProvider/Collector/db.html.twig", 108)->display(array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "managers", array())));
            // line 109
            echo "    ";
        } else {
            // line 110
            echo "        <p>
            <em>No entity managers.</em>
        </p>
    ";
        }
        // line 114
        echo "
    <h2>Mapping</h2>

    ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "entities", array()));
        foreach ($context['_seq'] as $context["manager"] => $context["classes"]) {
            // line 118
            echo "        <h3>Manager <em>";
            echo twig_escape_filter($this->env, $context["manager"], "html", null, true);
            echo "</em></h3>
        ";
            // line 119
            if (twig_test_empty($context["classes"])) {
                // line 120
                echo "            <p><em>No loaded entities.</em></p>
        ";
            } else {
                // line 122
                echo "            <table>
                <thead>
                <tr>
                    <th scope=\"col\">Class</th>
                    <th scope=\"col\">Mapping errors</th>
                </tr>
                </thead>
                <tbody>
                ";
                // line 130
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["classes"]);
                foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                    // line 131
                    echo "                    <tr>
                        <td>";
                    // line 132
                    echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                    echo "</td>
                        <td>
                            ";
                    // line 134
                    if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "mappingErrors", array(), "any", false, true), $context["manager"], array(), "array", false, true), $context["class"], array(), "array", true, true)) {
                        // line 135
                        echo "                                <ul>
                                    ";
                        // line 136
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "mappingErrors", array()), $context["manager"], array(), "array"), $context["class"], array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                            // line 137
                            echo "                                        <li>";
                            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                            echo "</li>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 139
                        echo "                                </ul>
                            ";
                    } else {
                        // line 141
                        echo "                                Valid
                            ";
                    }
                    // line 143
                    echo "                        </td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 146
                echo "                </tbody>
            </table>
        ";
            }
            // line 149
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['manager'], $context['classes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "
    <script type=\"text/javascript\">//<![CDATA[
        function explain(link) {
            \"use strict\";

            var imgs = link.children,
                    target = link.getAttribute('data-target-id');

            Sfjs.toggle(target, imgs[0], imgs[1])
                    .load(
                    target,
                    link.href,
                    null,
                    function(xhr, el) {
                        el.innerHTML = 'An error occurred while loading the details';
                        Sfjs.removeClass(el, 'loading');
                    }
            );

            return false;
        }

        function expandAllQueries(button) {
            var queries = document.getElementsByClassName('query-section'),
                    i = queries.length,
                    action = button.getAttribute('data-action');

            if (action == 'expand') {
                button.getElementsByClassName('btn-bg')[0].innerHTML = 'Collapse all queries';

                while (i--) {
                    if (queries[i].getAttribute('data-state') == 'collapsed') {
                        expandQuery(queries[i]);
                    }
                }
            } else {
                button.getElementsByClassName('btn-bg')[0].innerHTML = 'Expand all queries';

                while (i--) {
                    if (queries[i].getAttribute('data-state') == 'expanded') {
                        expandQuery(queries[i]);
                    }
                }
            }

            button.setAttribute('data-action', action == 'expand' ? 'collapse' : 'expand');
        }

        function expandQuery(link) {
            var sections = link.children,
                    target = link.getAttribute('data-target-id'),
                    targetId = target.replace('code', ''),
                    queriesParameters = document.getElementById('original-query' + targetId);

            if (queriesParameters.style.display != 'none') {
                queriesParameters.style.display = 'none';
                document.getElementById('small' + target).style.display = 'inline';
                document.getElementById('expandParams' + targetId).innerHTML = 'Display runnable query';
            }

            if (document.getElementById('small' + target).style.display != 'none') {
                document.getElementById('small' + target).style.display = 'none';
                document.getElementById(target).style.display = 'inline';

                sections[0].style.display = 'none';
                sections[1].style.display = 'inline';
                sections[2].style.display = 'inline';

                link.setAttribute('data-state', 'expanded');
            } else {
                document.getElementById('small' + target).style.display = 'inline';
                document.getElementById(target).style.display = 'none';

                sections[0].style.display = 'inline';
                sections[1].style.display = 'none';
                sections[2].style.display = 'none';

                link.setAttribute('data-state', 'collapsed');
            }

            return false;
        }

        function toggleRunnableQuery(target) {
            var targetId = target.getAttribute('target-data-id').replace('original-query', ''),
                    targetElement = document.getElementById(target.getAttribute('target-data-id')),
                    elem;

            if (targetElement.style.display != 'block') {
                targetElement.style.display = 'block';
                target.innerHTML = 'Hide runnable query';

                document.getElementById('smallcode' + targetId).style.display = 'none';
                document.getElementById('code' + targetId).style.display = 'none';

                elem = document.getElementById('code' + targetId).parentElement.children[0];

                elem.children[0].style.display = 'inline';
                elem.children[1].style.display = 'none';
                elem.children[2].style.display = 'none';

            } else {
                targetElement.style.display = 'none';
                target.innerHTML = 'Display runnable query';

                document.getElementById('smallcode' + targetId).style.display = 'inline';
            }
        }

        //]]></script>

    <style>
        h3 {
            margin-bottom: 0px;
        }

        code {
            display: none;
        }

        code pre {
            padding: 5px;
        }
    </style>
";
        
        $__internal_3cce5986c33311921a54b6b1c21b6495368f50b130d52c0123980d9014b61f8a->leave($__internal_3cce5986c33311921a54b6b1c21b6495368f50b130d52c0123980d9014b61f8a_prof);

    }

    public function getTemplateName()
    {
        return "@SaxulumWebProfilerProvider/Collector/db.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 150,  456 => 149,  451 => 146,  443 => 143,  439 => 141,  435 => 139,  426 => 137,  422 => 136,  419 => 135,  417 => 134,  412 => 132,  409 => 131,  405 => 130,  395 => 122,  391 => 120,  389 => 119,  384 => 118,  380 => 117,  375 => 114,  369 => 110,  366 => 109,  363 => 108,  361 => 107,  356 => 104,  350 => 100,  347 => 99,  344 => 98,  342 => 97,  337 => 94,  323 => 93,  319 => 91,  300 => 86,  290 => 85,  286 => 84,  280 => 81,  274 => 80,  269 => 78,  263 => 77,  257 => 74,  251 => 73,  242 => 69,  236 => 68,  227 => 67,  210 => 66,  206 => 65,  195 => 56,  189 => 52,  187 => 51,  182 => 50,  165 => 49,  161 => 47,  155 => 46,  145 => 43,  139 => 42,  128 => 37,  124 => 36,  118 => 32,  112 => 31,  104 => 28,  96 => 25,  89 => 21,  82 => 17,  78 => 15,  75 => 14,  72 => 13,  68 => 11,  65 => 10,  59 => 8,  57 => 7,  49 => 6,  46 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}*/
/*     {% set icon %}*/
/*     <img width="20" height="28" alt="Database" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC" />*/
/*     <span class="sf-toolbar-status{% if 50 < collector.querycount %} sf-toolbar-status-yellow{% endif %}">{{ collector.querycount }}</span>*/
/*     {% if collector.querycount > 0 %}*/
/*         <span class="sf-toolbar-info-piece-additional-detail">in {{ '%0.2f'|format(collector.time * 1000) }} ms</span>*/
/*     {% endif %}*/
/*     {% if collector.invalidEntityCount > 0 %}*/
/*         <span class="sf-toolbar-info-piece-additional sf-toolbar-status sf-toolbar-status-red"> </span>*/
/*     {% endif %}*/
/*     {% endset %}*/
/*     {% set text %}*/
/*     <div class="sf-toolbar-info-piece">*/
/*         <b>DB Queries</b>*/
/*         <span>{{ collector.querycount }}</span>*/
/*     </div>*/
/*     <div class="sf-toolbar-info-piece">*/
/*         <b>Query time</b>*/
/*         <span>{{ '%0.2f'|format(collector.time * 1000) }} ms</span>*/
/*     </div>*/
/*     <div class="sf-toolbar-info-piece">*/
/*         <b>Invalid entities</b>*/
/*         <span class="sf-toolbar-status sf-toolbar-status-{{ collector.invalidEntityCount > 0 ? 'red' : 'green' }}">{{ collector.invalidEntityCount }}</span>*/
/*     </div>*/
/*     {% endset %}*/
/*     {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': profiler_url } %}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label">*/
/*     <span class="icon"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==" alt="" /></span>*/
/*     <strong>Doctrine</strong>*/
/*     <span class="count">*/
/*         <span>{{ collector.querycount }}</span>*/
/*         <span>{{ '%0.0f'|format(collector.time * 1000) }} ms</span>*/
/*     </span>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ block('queries') }}*/
/* {% endblock %}*/
/* */
/* {% block queries %}*/
/*     <h2>Queries</h2>*/
/* */
/*     {% for connection, queries in collector.queries %}*/
/*         <h3>Connection <em>{{ connection }}</em></h3>*/
/*         {% if queries is empty %}*/
/*             <p>*/
/*                 <em>No queries.</em>*/
/*             </p>*/
/*         {% else %}*/
/*             <p>*/
/*                 <button type="button" class="sf-button" onclick="expandAllQueries(this);" data-action="expand">*/
/*                     <span class="border-l">*/
/*                         <span class="border-r">*/
/*                             <span class="btn-bg">Expand all queries</span>*/
/*                         </span>*/
/*                     </span>*/
/*                 </button>*/
/*             </p>*/
/*             <ul class="alt" id="queriesPlaceholder-{{ loop.index }}">*/
/*                 {% for i, query in queries %}*/
/*                     <li class="{{ cycle(['odd', 'even'], i) }}" data-extra-info="{{ '%0.2f'|format(query.executionMS * 1000) }}" data-target-id="{{ i }}">*/
/*                         <div style="margin-top: 4px" id="queryNo-{{ i }}-{{ loop.parent.loop.index }}">*/
/*                             <div class="query-section" data-state="collapsed" onclick="return expandQuery(this);" title="Expand query" data-target-id="code-{{ i }}-{{ loop.parent.loop.index }}" style="cursor: pointer;">*/
/*                                 <img alt="+" src="data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7" style="display: inline;" />*/
/*                                 <img alt="-" src="data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=" style="display: none;" />*/
/*                                 <span style="display: none">Shrink query</span>*/
/*                                 <span id="smallcode-{{ i }}-{{ loop.parent.loop.index }}">*/
/*                                     {{ query.sql|doctrine_minify_query|raw }}*/
/*                                 </span>*/
/*                             </div>*/
/*                             <code id="code-{{ i }}-{{ loop.parent.loop.index }}">*/
/*                                 {{ query.sql|doctrine_pretty_query(i, loop.parent.loop.index)|raw }}*/
/*                             </code>*/
/*                             <span id="original-query-{{ i }}-{{ loop.parent.loop.index }}" style="display: none;">*/
/*                                 {{ query.sql|doctrine_replace_query_parameters(query.params)|raw }}*/
/*                             </span>*/
/*                             <small>*/
/*                                 <strong>Parameters</strong>: {{ query.params|json_encode }} <br />*/
/*                                 [<span id="expandParams-{{ i }}-{{ loop.parent.loop.index }}" onclick="javascript:toggleRunnableQuery(this);" target-data-id="original-query-{{ i }}-{{ loop.parent.loop.index }}" style="cursor: pointer;">Display runnable query</span>]<br/>*/
/*                                 <strong>Time</strong>: {{ '%0.2f'|format(query.executionMS * 1000) }} ms*/
/*                             </small>*/
/*                         </div>*/
/*                     </li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* */
/*     <h2>Database Connections</h2>*/
/* */
/*     {% if collector.connections %}*/
/*         {% include '@WebProfiler/Profiler/table.html.twig' with {data: collector.connections} only %}*/
/*     {% else %}*/
/*         <p>*/
/*             <em>No connections.</em>*/
/*         </p>*/
/*     {% endif %}*/
/* */
/*     <h2>Entity Managers</h2>*/
/* */
/*     {% if collector.managers %}*/
/*         {% include '@WebProfiler/Profiler/table.html.twig' with {data: collector.managers} only %}*/
/*     {% else %}*/
/*         <p>*/
/*             <em>No entity managers.</em>*/
/*         </p>*/
/*     {% endif %}*/
/* */
/*     <h2>Mapping</h2>*/
/* */
/*     {% for manager, classes in collector.entities %}*/
/*         <h3>Manager <em>{{ manager }}</em></h3>*/
/*         {% if classes is empty %}*/
/*             <p><em>No loaded entities.</em></p>*/
/*         {% else %}*/
/*             <table>*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th scope="col">Class</th>*/
/*                     <th scope="col">Mapping errors</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for class in classes %}*/
/*                     <tr>*/
/*                         <td>{{ class }}</td>*/
/*                         <td>*/
/*                             {% if collector.mappingErrors[manager][class] is defined %}*/
/*                                 <ul>*/
/*                                     {% for error in collector.mappingErrors[manager][class] %}*/
/*                                         <li>{{ error }}</li>*/
/*                                     {% endfor %}*/
/*                                 </ul>*/
/*                             {% else %}*/
/*                                 Valid*/
/*                             {% endif %}*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* */
/*     <script type="text/javascript">//<![CDATA[*/
/*         function explain(link) {*/
/*             "use strict";*/
/* */
/*             var imgs = link.children,*/
/*                     target = link.getAttribute('data-target-id');*/
/* */
/*             Sfjs.toggle(target, imgs[0], imgs[1])*/
/*                     .load(*/
/*                     target,*/
/*                     link.href,*/
/*                     null,*/
/*                     function(xhr, el) {*/
/*                         el.innerHTML = 'An error occurred while loading the details';*/
/*                         Sfjs.removeClass(el, 'loading');*/
/*                     }*/
/*             );*/
/* */
/*             return false;*/
/*         }*/
/* */
/*         function expandAllQueries(button) {*/
/*             var queries = document.getElementsByClassName('query-section'),*/
/*                     i = queries.length,*/
/*                     action = button.getAttribute('data-action');*/
/* */
/*             if (action == 'expand') {*/
/*                 button.getElementsByClassName('btn-bg')[0].innerHTML = 'Collapse all queries';*/
/* */
/*                 while (i--) {*/
/*                     if (queries[i].getAttribute('data-state') == 'collapsed') {*/
/*                         expandQuery(queries[i]);*/
/*                     }*/
/*                 }*/
/*             } else {*/
/*                 button.getElementsByClassName('btn-bg')[0].innerHTML = 'Expand all queries';*/
/* */
/*                 while (i--) {*/
/*                     if (queries[i].getAttribute('data-state') == 'expanded') {*/
/*                         expandQuery(queries[i]);*/
/*                     }*/
/*                 }*/
/*             }*/
/* */
/*             button.setAttribute('data-action', action == 'expand' ? 'collapse' : 'expand');*/
/*         }*/
/* */
/*         function expandQuery(link) {*/
/*             var sections = link.children,*/
/*                     target = link.getAttribute('data-target-id'),*/
/*                     targetId = target.replace('code', ''),*/
/*                     queriesParameters = document.getElementById('original-query' + targetId);*/
/* */
/*             if (queriesParameters.style.display != 'none') {*/
/*                 queriesParameters.style.display = 'none';*/
/*                 document.getElementById('small' + target).style.display = 'inline';*/
/*                 document.getElementById('expandParams' + targetId).innerHTML = 'Display runnable query';*/
/*             }*/
/* */
/*             if (document.getElementById('small' + target).style.display != 'none') {*/
/*                 document.getElementById('small' + target).style.display = 'none';*/
/*                 document.getElementById(target).style.display = 'inline';*/
/* */
/*                 sections[0].style.display = 'none';*/
/*                 sections[1].style.display = 'inline';*/
/*                 sections[2].style.display = 'inline';*/
/* */
/*                 link.setAttribute('data-state', 'expanded');*/
/*             } else {*/
/*                 document.getElementById('small' + target).style.display = 'inline';*/
/*                 document.getElementById(target).style.display = 'none';*/
/* */
/*                 sections[0].style.display = 'inline';*/
/*                 sections[1].style.display = 'none';*/
/*                 sections[2].style.display = 'none';*/
/* */
/*                 link.setAttribute('data-state', 'collapsed');*/
/*             }*/
/* */
/*             return false;*/
/*         }*/
/* */
/*         function toggleRunnableQuery(target) {*/
/*             var targetId = target.getAttribute('target-data-id').replace('original-query', ''),*/
/*                     targetElement = document.getElementById(target.getAttribute('target-data-id')),*/
/*                     elem;*/
/* */
/*             if (targetElement.style.display != 'block') {*/
/*                 targetElement.style.display = 'block';*/
/*                 target.innerHTML = 'Hide runnable query';*/
/* */
/*                 document.getElementById('smallcode' + targetId).style.display = 'none';*/
/*                 document.getElementById('code' + targetId).style.display = 'none';*/
/* */
/*                 elem = document.getElementById('code' + targetId).parentElement.children[0];*/
/* */
/*                 elem.children[0].style.display = 'inline';*/
/*                 elem.children[1].style.display = 'none';*/
/*                 elem.children[2].style.display = 'none';*/
/* */
/*             } else {*/
/*                 targetElement.style.display = 'none';*/
/*                 target.innerHTML = 'Display runnable query';*/
/* */
/*                 document.getElementById('smallcode' + targetId).style.display = 'inline';*/
/*             }*/
/*         }*/
/* */
/*         //]]></script>*/
/* */
/*     <style>*/
/*         h3 {*/
/*             margin-bottom: 0px;*/
/*         }*/
/* */
/*         code {*/
/*             display: none;*/
/*         }*/
/* */
/*         code pre {*/
/*             padding: 5px;*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
/* */
