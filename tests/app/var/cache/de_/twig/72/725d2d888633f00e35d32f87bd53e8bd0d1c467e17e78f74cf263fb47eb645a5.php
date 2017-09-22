<?php

/* node_modules/core-js/library/modules/_array-includes.js */
class __TwigTemplate_a5fd4fb3d73b165fc50f77ab64edd7722bcfce3581fd5e1a81a10ddfb51b6b0d extends Twig_Template
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
        $__internal_6edf99058c3ecde2f7ce47f4c3350a99f673d02e8131b32e030551f3b05bbbc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6edf99058c3ecde2f7ce47f4c3350a99f673d02e8131b32e030551f3b05bbbc8->enter($__internal_6edf99058c3ecde2f7ce47f4c3350a99f673d02e8131b32e030551f3b05bbbc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_array-includes.js"));

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
        
        $__internal_6edf99058c3ecde2f7ce47f4c3350a99f673d02e8131b32e030551f3b05bbbc8->leave($__internal_6edf99058c3ecde2f7ce47f4c3350a99f673d02e8131b32e030551f3b05bbbc8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_array-includes.js";
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
", "node_modules/core-js/library/modules/_array-includes.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_array-includes.js");
    }
}
