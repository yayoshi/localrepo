<?php

/* Form/bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_3133c0966c97f086543730a805088d31d917f0a770c8a0a46084d0bfa6c65350 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstrap_3_horizontal_layout.html.twig", "Form/bootstrap_3_horizontal_layout.html.twig", 1);
        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
            'tel_widget' => array($this, 'block_tel_widget'),
            'zip_widget' => array($this, 'block_zip_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'money_widget' => array($this, 'block_money_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_errors($context, array $blocks = array())
    {
        // line 4
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 5
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert\">";
            }
            // line 6
            echo "    <ul class=\"list-unstyled\">";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 8
                echo "<p class=\"errormsg text-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["error"], "message", array())), "html", null, true);
                echo "</p>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "</ul>
    ";
            // line 11
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
    }

    // line 15
    public function block_tel_widget($context, array $blocks = array())
    {
        // line 16
        echo "<div class=\"form-group range\">";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 18
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("attr" => array("style" => "ime-mode: disabled;")));
            // line 19
            if (($this->getAttribute($context["loop"], "last", array()) == false)) {
                echo "&nbsp;-&nbsp;";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</div>";
    }

    // line 24
    public function block_zip_widget($context, array $blocks = array())
    {
        // line 25
        echo "<div class=\"form-group range\">";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 27
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("attr" => array("style" => "ime-mode: disabled;")));
            // line 28
            if (($this->getAttribute($context["loop"], "last", array()) == false)) {
                echo "&nbsp;-&nbsp;";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</div>";
    }

    // line 33
    public function block_radio_widget($context, array $blocks = array())
    {
        // line 34
        echo "<div class=\"radio-inline\">
        ";
        // line 35
        $this->displayParentBlock("radio_widget", $context, $blocks);
        echo "
    </div>";
    }

    // line 39
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 40
        echo "<div class=\"checkbox-inline\">
        ";
        // line 41
        $this->displayParentBlock("checkbox_widget", $context, $blocks);
        echo "
    </div>";
    }

    // line 45
    public function block_money_widget($context, array $blocks = array())
    {
        // line 46
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : (""))));
        // line 47
        echo "    ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()) == "notmoney")) {
            // line 48
            echo "    <div class=\"input-group\">";
            // line 49
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 50
            echo "</div>
    ";
        } else {
            // line 52
            echo "        ";
            $this->displayParentBlock("money_widget", $context, $blocks);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "Form/bootstrap_3_horizontal_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 52,  194 => 50,  192 => 49,  190 => 48,  187 => 47,  185 => 46,  182 => 45,  176 => 41,  173 => 40,  170 => 39,  164 => 35,  161 => 34,  158 => 33,  154 => 30,  138 => 28,  136 => 27,  119 => 26,  117 => 25,  114 => 24,  110 => 21,  94 => 19,  92 => 18,  75 => 17,  73 => 16,  70 => 15,  61 => 11,  58 => 10,  50 => 8,  46 => 7,  44 => 6,  38 => 5,  36 => 4,  33 => 3,  11 => 1,);
    }
}
/* {%- extends 'bootstrap_3_horizontal_layout.html.twig' -%}*/
/* */
/* {% block form_errors -%}*/
/*     {% if errors|length > 0 -%}*/
/*     {% if form.parent %}<span class="help-block">{% else %}<div class="alert">{% endif %}*/
/*     <ul class="list-unstyled">*/
/*         {%- for error in errors -%}*/
/*             <p class="errormsg text-danger">{{ error.message |trans }}</p>*/
/*         {%- endfor -%}*/
/*     </ul>*/
/*     {% if form.parent %}</span>{% else %}</div>{% endif %}*/
/*     {%- endif %}*/
/* {%- endblock form_errors %}*/
/* */
/* {%- block tel_widget -%}*/
/*     <div class="form-group range">*/
/*         {%- for child in form %}*/
/*             {{- form_widget(child, {'attr': {'style': 'ime-mode: disabled;'}} ) -}}*/
/*             {%- if loop.last == false%}&nbsp;-&nbsp;{% endif -%}*/
/*         {% endfor -%}*/
/*     </div>*/
/* {%- endblock tel_widget -%}*/
/* */
/* {%- block zip_widget -%}*/
/*     <div class="form-group range">*/
/*         {%- for child in form %}*/
/*             {{- form_widget(child, {'attr': {'style': 'ime-mode: disabled;'}} ) -}}*/
/*             {%- if loop.last == false%}&nbsp;-&nbsp;{% endif -%}*/
/*         {% endfor -%}*/
/*     </div>*/
/* {%- endblock zip_widget -%}*/
/* */
/* {% block radio_widget -%}*/
/*     <div class="radio-inline">*/
/*         {{ parent() }}*/
/*     </div>*/
/* {%- endblock radio_widget %}*/
/* */
/* {% block checkbox_widget -%}*/
/*     <div class="checkbox-inline">*/
/*         {{ parent() }}*/
/*     </div>*/
/* {%- endblock checkbox_widget %}*/
/* */
/* {% block money_widget -%}*/
/*     {% set attr = attr|merge({class: attr.class|default('')}) %}*/
/*     {% if attr.class == 'notmoney' %}*/
/*     <div class="input-group">*/
/*         {{- block('form_widget_simple') -}}*/
/*     </div>*/
/*     {% else %}*/
/*         {{ parent() }}*/
/*     {% endif %}*/
/* {%- endblock money_widget %}*/
/* */
/* */
