<?php

/* node_modules/core-js/library/modules/_array-species-constructor.js */
class __TwigTemplate_f4671da25667b1bd577b557edcdf8088ffc1b35940b32a4e0c4ec709c515a65b extends Twig_Template
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
        $__internal_a397e2e2008ca8a07b4295ec2d255c0673f1d364c90a975a551f3f9316ff6ca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a397e2e2008ca8a07b4295ec2d255c0673f1d364c90a975a551f3f9316ff6ca2->enter($__internal_a397e2e2008ca8a07b4295ec2d255c0673f1d364c90a975a551f3f9316ff6ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_array-species-constructor.js"));

        // line 1
        echo "var isObject = require('./_is-object');
var isArray = require('./_is-array');
var SPECIES = require('./_wks')('species');

module.exports = function (original) {
  var C;
  if (isArray(original)) {
    C = original.constructor;
    // cross-realm fallback
    if (typeof C == 'function' && (C === Array || isArray(C.prototype))) C = undefined;
    if (isObject(C)) {
      C = C[SPECIES];
      if (C === null) C = undefined;
    }
  } return C === undefined ? Array : C;
};
";
        
        $__internal_a397e2e2008ca8a07b4295ec2d255c0673f1d364c90a975a551f3f9316ff6ca2->leave($__internal_a397e2e2008ca8a07b4295ec2d255c0673f1d364c90a975a551f3f9316ff6ca2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_array-species-constructor.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var isObject = require('./_is-object');
var isArray = require('./_is-array');
var SPECIES = require('./_wks')('species');

module.exports = function (original) {
  var C;
  if (isArray(original)) {
    C = original.constructor;
    // cross-realm fallback
    if (typeof C == 'function' && (C === Array || isArray(C.prototype))) C = undefined;
    if (isObject(C)) {
      C = C[SPECIES];
      if (C === null) C = undefined;
    }
  } return C === undefined ? Array : C;
};
", "node_modules/core-js/library/modules/_array-species-constructor.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_array-species-constructor.js");
    }
}
