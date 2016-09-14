<?php

/* Order/order_detail_prototype.twig */
class __TwigTemplate_fe37052d9603edd9dbed4e5689cca2c476eaa23055b1aaec7a3df26ea3e2fd85 extends Twig_Template
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
        // line 1
        echo "<div style=\"display: none\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["orderDetailForm"]) ? $context["orderDetailForm"] : null), "new", array()), 'widget');
        echo "
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["orderDetailForm"]) ? $context["orderDetailForm"] : null), "Product", array()), 'widget');
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["orderDetailForm"]) ? $context["orderDetailForm"] : null), "ProductClass", array()), 'widget');
        echo "
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["orderDetailForm"]) ? $context["orderDetailForm"] : null), "price", array()), 'widget', array("attr" => array("type" => "hidden")));
        echo "
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["orderDetailForm"]) ? $context["orderDetailForm"] : null), "quantity", array()), 'widget', array("attr" => array("type" => "hidden")));
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["orderDetailForm"]) ? $context["orderDetailForm"] : null), "tax_rate", array()), 'widget', array("attr" => array("type" => "hidden")));
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "Order/order_detail_prototype.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 7,  38 => 6,  34 => 5,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div style="display: none">*/
/*     {{ form_widget(orderDetailForm.new) }}*/
/*     {{ form_widget(orderDetailForm.Product) }}*/
/*     {{ form_widget(orderDetailForm.ProductClass) }}*/
/*     {{ form_widget(orderDetailForm.price, { 'attr': {'type': 'hidden'} }) }}*/
/*     {{ form_widget(orderDetailForm.quantity, { 'attr': {'type': 'hidden'} }) }}*/
/*     {{ form_widget(orderDetailForm.tax_rate, { 'attr': {'type': 'hidden'} }) }}*/
/* </div>*/
