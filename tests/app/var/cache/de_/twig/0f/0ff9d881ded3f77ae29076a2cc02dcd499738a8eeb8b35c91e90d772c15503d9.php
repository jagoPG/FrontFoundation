<?php

/* node_modules/core-js/modules/_array-species-constructor.js */
class __TwigTemplate_d11a69a3871b4e660178978c13cc61d5bd6ac1117b49c7c36f11c64589362fc2 extends Twig_Template
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
        $__internal_592456634450de19bbfa7cd6d6916c07eec4175446241d298410c1cf098d0445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_592456634450de19bbfa7cd6d6916c07eec4175446241d298410c1cf098d0445->enter($__internal_592456634450de19bbfa7cd6d6916c07eec4175446241d298410c1cf098d0445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_array-species-constructor.js"));

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
        
        $__internal_592456634450de19bbfa7cd6d6916c07eec4175446241d298410c1cf098d0445->leave($__internal_592456634450de19bbfa7cd6d6916c07eec4175446241d298410c1cf098d0445_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_array-species-constructor.js";
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
", "node_modules/core-js/modules/_array-species-constructor.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_array-species-constructor.js");
    }
}
