<?php

/* node_modules/core-js/modules/_array-includes.js */
class __TwigTemplate_391dd923ff693e8f60b5a3df5d1e08b7da4e291e374a44a60281561079648226 extends Twig_Template
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
        $__internal_005ea913349db858fb86fc1bf238a5b441c8d0d9fd8fb86cb1ce0f1e464ab6c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_005ea913349db858fb86fc1bf238a5b441c8d0d9fd8fb86cb1ce0f1e464ab6c8->enter($__internal_005ea913349db858fb86fc1bf238a5b441c8d0d9fd8fb86cb1ce0f1e464ab6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_array-includes.js"));

        // line 1
        echo "// false -> Array#indexOf
// true  -> Array#includes
var toIObject = require('./_to-iobject');
var toLength = require('./_to-length');
var toAbsoluteIndex = require('./_to-absolute-index');
module.exports = function (IS_INCLUDES) {
  return function (\$this, el, fromIndex) {
    var O = toIObject(\$this);
    var length = toLength(O.length);
    var index = toAbsoluteIndex(fromIndex, length);
    var value;
    // Array#includes uses SameValueZero equality algorithm
    // eslint-disable-next-line no-self-compare
    if (IS_INCLUDES && el != el) while (length > index) {
      value = O[index++];
      // eslint-disable-next-line no-self-compare
      if (value != value) return true;
    // Array#indexOf ignores holes, Array#includes - not
    } else for (;length > index; index++) if (IS_INCLUDES || index in O) {
      if (O[index] === el) return IS_INCLUDES || index || 0;
    } return !IS_INCLUDES && -1;
  };
};
";
        
        $__internal_005ea913349db858fb86fc1bf238a5b441c8d0d9fd8fb86cb1ce0f1e464ab6c8->leave($__internal_005ea913349db858fb86fc1bf238a5b441c8d0d9fd8fb86cb1ce0f1e464ab6c8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_array-includes.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// false -> Array#indexOf
// true  -> Array#includes
var toIObject = require('./_to-iobject');
var toLength = require('./_to-length');
var toAbsoluteIndex = require('./_to-absolute-index');
module.exports = function (IS_INCLUDES) {
  return function (\$this, el, fromIndex) {
    var O = toIObject(\$this);
    var length = toLength(O.length);
    var index = toAbsoluteIndex(fromIndex, length);
    var value;
    // Array#includes uses SameValueZero equality algorithm
    // eslint-disable-next-line no-self-compare
    if (IS_INCLUDES && el != el) while (length > index) {
      value = O[index++];
      // eslint-disable-next-line no-self-compare
      if (value != value) return true;
    // Array#indexOf ignores holes, Array#includes - not
    } else for (;length > index; index++) if (IS_INCLUDES || index in O) {
      if (O[index] === el) return IS_INCLUDES || index || 0;
    } return !IS_INCLUDES && -1;
  };
};
", "node_modules/core-js/modules/_array-includes.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_array-includes.js");
    }
}
