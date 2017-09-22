<?php

/* node_modules/core-js/library/modules/_iter-step.js */
class __TwigTemplate_0af723f124ced5068a22031ab783bb76c024154b5c0e4a5bdda159ecbfb5c050 extends Twig_Template
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
        $__internal_20e26941caf3c8467182f32ffad55178960a6c52ce41adc8bfcb497e4ed82294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e26941caf3c8467182f32ffad55178960a6c52ce41adc8bfcb497e4ed82294->enter($__internal_20e26941caf3c8467182f32ffad55178960a6c52ce41adc8bfcb497e4ed82294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_iter-step.js"));

        // line 1
        echo "module.exports = function (done, value) {
  return { value: value, done: !!done };
};
";
        
        $__internal_20e26941caf3c8467182f32ffad55178960a6c52ce41adc8bfcb497e4ed82294->leave($__internal_20e26941caf3c8467182f32ffad55178960a6c52ce41adc8bfcb497e4ed82294_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_iter-step.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = function (done, value) {
  return { value: value, done: !!done };
};
", "node_modules/core-js/library/modules/_iter-step.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_iter-step.js");
    }
}
