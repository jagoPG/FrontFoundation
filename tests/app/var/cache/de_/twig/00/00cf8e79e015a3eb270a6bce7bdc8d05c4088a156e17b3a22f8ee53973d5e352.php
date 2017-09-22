<?php

/* node_modules/core-js/modules/_ie8-dom-define.js */
class __TwigTemplate_15cb3eb7ee9250658a6ac074116ed9b6633e58d30d2ef14a0cda81c7d948a4cc extends Twig_Template
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
        $__internal_711c35d081ed04462add7612ee493f7515164e8d35387111478df3bd75456bc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_711c35d081ed04462add7612ee493f7515164e8d35387111478df3bd75456bc3->enter($__internal_711c35d081ed04462add7612ee493f7515164e8d35387111478df3bd75456bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_ie8-dom-define.js"));

        // line 1
        echo "module.exports = !require('./_descriptors') && !require('./_fails')(function () {
  return Object.defineProperty(require('./_dom-create')('div'), 'a', { get: function () { return 7; } }).a != 7;
});
";
        
        $__internal_711c35d081ed04462add7612ee493f7515164e8d35387111478df3bd75456bc3->leave($__internal_711c35d081ed04462add7612ee493f7515164e8d35387111478df3bd75456bc3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_ie8-dom-define.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = !require('./_descriptors') && !require('./_fails')(function () {
  return Object.defineProperty(require('./_dom-create')('div'), 'a', { get: function () { return 7; } }).a != 7;
});
", "node_modules/core-js/modules/_ie8-dom-define.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_ie8-dom-define.js");
    }
}
