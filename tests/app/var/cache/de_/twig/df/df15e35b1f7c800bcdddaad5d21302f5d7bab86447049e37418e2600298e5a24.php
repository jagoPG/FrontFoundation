<?php

/* node_modules/core-js/modules/_fails-is-regexp.js */
class __TwigTemplate_9d46cf5d7f4a3065236f09861a6430a863b5b760e3cfcd71341fc74bf9ef0be7 extends Twig_Template
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
        $__internal_7e2143cea5086d0aa9e2c6e0c48f839b49e32d45707864e66e2be7202ecc26c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e2143cea5086d0aa9e2c6e0c48f839b49e32d45707864e66e2be7202ecc26c7->enter($__internal_7e2143cea5086d0aa9e2c6e0c48f839b49e32d45707864e66e2be7202ecc26c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_fails-is-regexp.js"));

        // line 1
        echo "var MATCH = require('./_wks')('match');
module.exports = function (KEY) {
  var re = /./;
  try {
    '/./'[KEY](re);
  } catch (e) {
    try {
      re[MATCH] = false;
      return !'/./'[KEY](re);
    } catch (f) { /* empty */ }
  } return true;
};
";
        
        $__internal_7e2143cea5086d0aa9e2c6e0c48f839b49e32d45707864e66e2be7202ecc26c7->leave($__internal_7e2143cea5086d0aa9e2c6e0c48f839b49e32d45707864e66e2be7202ecc26c7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_fails-is-regexp.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var MATCH = require('./_wks')('match');
module.exports = function (KEY) {
  var re = /./;
  try {
    '/./'[KEY](re);
  } catch (e) {
    try {
      re[MATCH] = false;
      return !'/./'[KEY](re);
    } catch (f) { /* empty */ }
  } return true;
};
", "node_modules/core-js/modules/_fails-is-regexp.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_fails-is-regexp.js");
    }
}
