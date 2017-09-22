<?php

/* node_modules/core-js/modules/_perform.js */
class __TwigTemplate_1b53fa6bf5bd2399cce67486854d3757aef258793a23ce0aa0331cab239f3b69 extends Twig_Template
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
        $__internal_7ad2546654e3e80629524933f17049bf09033dbc4d0d5287652eacefde21fc66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ad2546654e3e80629524933f17049bf09033dbc4d0d5287652eacefde21fc66->enter($__internal_7ad2546654e3e80629524933f17049bf09033dbc4d0d5287652eacefde21fc66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_perform.js"));

        // line 1
        echo "module.exports = function (exec) {
  try {
    return { e: false, v: exec() };
  } catch (e) {
    return { e: true, v: e };
  }
};
";
        
        $__internal_7ad2546654e3e80629524933f17049bf09033dbc4d0d5287652eacefde21fc66->leave($__internal_7ad2546654e3e80629524933f17049bf09033dbc4d0d5287652eacefde21fc66_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_perform.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = function (exec) {
  try {
    return { e: false, v: exec() };
  } catch (e) {
    return { e: true, v: e };
  }
};
", "node_modules/core-js/modules/_perform.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_perform.js");
    }
}
