<?php

/* node_modules/core-js/modules/_redefine.js */
class __TwigTemplate_1ebb8b0bea463da1a0c762652bbebf180ac17a2a86404af5dbbb8b92b648a09f extends Twig_Template
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
        $__internal_7f59293553fca5cd240b943d5ef23d4c11ce50f2e9db8a85bcf8eb7774e44017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f59293553fca5cd240b943d5ef23d4c11ce50f2e9db8a85bcf8eb7774e44017->enter($__internal_7f59293553fca5cd240b943d5ef23d4c11ce50f2e9db8a85bcf8eb7774e44017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_redefine.js"));

        // line 1
        echo "var global = require('./_global');
var hide = require('./_hide');
var has = require('./_has');
var SRC = require('./_uid')('src');
var TO_STRING = 'toString';
var \$toString = Function[TO_STRING];
var TPL = ('' + \$toString).split(TO_STRING);

require('./_core').inspectSource = function (it) {
  return \$toString.call(it);
};

(module.exports = function (O, key, val, safe) {
  var isFunction = typeof val == 'function';
  if (isFunction) has(val, 'name') || hide(val, 'name', key);
  if (O[key] === val) return;
  if (isFunction) has(val, SRC) || hide(val, SRC, O[key] ? '' + O[key] : TPL.join(String(key)));
  if (O === global) {
    O[key] = val;
  } else if (!safe) {
    delete O[key];
    hide(O, key, val);
  } else if (O[key]) {
    O[key] = val;
  } else {
    hide(O, key, val);
  }
// add fake Function#toString for correct work wrapped methods / constructors with methods like LoDash isNative
})(Function.prototype, TO_STRING, function toString() {
  return typeof this == 'function' && this[SRC] || \$toString.call(this);
});
";
        
        $__internal_7f59293553fca5cd240b943d5ef23d4c11ce50f2e9db8a85bcf8eb7774e44017->leave($__internal_7f59293553fca5cd240b943d5ef23d4c11ce50f2e9db8a85bcf8eb7774e44017_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_redefine.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var global = require('./_global');
var hide = require('./_hide');
var has = require('./_has');
var SRC = require('./_uid')('src');
var TO_STRING = 'toString';
var \$toString = Function[TO_STRING];
var TPL = ('' + \$toString).split(TO_STRING);

require('./_core').inspectSource = function (it) {
  return \$toString.call(it);
};

(module.exports = function (O, key, val, safe) {
  var isFunction = typeof val == 'function';
  if (isFunction) has(val, 'name') || hide(val, 'name', key);
  if (O[key] === val) return;
  if (isFunction) has(val, SRC) || hide(val, SRC, O[key] ? '' + O[key] : TPL.join(String(key)));
  if (O === global) {
    O[key] = val;
  } else if (!safe) {
    delete O[key];
    hide(O, key, val);
  } else if (O[key]) {
    O[key] = val;
  } else {
    hide(O, key, val);
  }
// add fake Function#toString for correct work wrapped methods / constructors with methods like LoDash isNative
})(Function.prototype, TO_STRING, function toString() {
  return typeof this == 'function' && this[SRC] || \$toString.call(this);
});
", "node_modules/core-js/modules/_redefine.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_redefine.js");
    }
}
