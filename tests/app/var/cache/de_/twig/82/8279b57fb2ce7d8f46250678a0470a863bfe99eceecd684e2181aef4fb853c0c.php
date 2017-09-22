<?php

/* node_modules/core-js/modules/_iter-step.js */
class __TwigTemplate_c64e8da624da8920ed9c3cfd2cc6ff1caaab5c3ce79aa21648ec290cc8433344 extends Twig_Template
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
        $__internal_19c2e4e35c71f6c84c3ff0ccc74eedb8dafbe92848d26e4c255615eddde0bd2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19c2e4e35c71f6c84c3ff0ccc74eedb8dafbe92848d26e4c255615eddde0bd2b->enter($__internal_19c2e4e35c71f6c84c3ff0ccc74eedb8dafbe92848d26e4c255615eddde0bd2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_iter-step.js"));

        // line 1
        echo "module.exports = function (done, value) {
  return { value: value, done: !!done };
};
";
        
        $__internal_19c2e4e35c71f6c84c3ff0ccc74eedb8dafbe92848d26e4c255615eddde0bd2b->leave($__internal_19c2e4e35c71f6c84c3ff0ccc74eedb8dafbe92848d26e4c255615eddde0bd2b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_iter-step.js";
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
", "node_modules/core-js/modules/_iter-step.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_iter-step.js");
    }
}
