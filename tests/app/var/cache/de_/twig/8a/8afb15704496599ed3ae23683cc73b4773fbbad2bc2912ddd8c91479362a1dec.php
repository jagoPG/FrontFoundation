<?php

/* node_modules/core-js/library/modules/_object-assign.js */
class __TwigTemplate_f9e8c6b24d33a92fe44902d8761a92a76bbe2f5d1017730588222e6770f62490 extends Twig_Template
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
        $__internal_f664e4b4c4f469d36fa49a5c358cd594d6fca6da3f3586f2e1bac0f6b4c5877a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f664e4b4c4f469d36fa49a5c358cd594d6fca6da3f3586f2e1bac0f6b4c5877a->enter($__internal_f664e4b4c4f469d36fa49a5c358cd594d6fca6da3f3586f2e1bac0f6b4c5877a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_object-assign.js"));

        // line 1
        echo "'use strict';
// 19.1.2.1 Object.assign(target, source, ...)
var getKeys = require('./_object-keys');
var gOPS = require('./_object-gops');
var pIE = require('./_object-pie');
var toObject = require('./_to-object');
var IObject = require('./_iobject');
var \$assign = Object.assign;

// should work with symbols and should have deterministic property order (V8 bug)
module.exports = !\$assign || require('./_fails')(function () {
  var A = {};
  var B = {};
  // eslint-disable-next-line no-undef
  var S = Symbol();
  var K = 'abcdefghijklmnopqrst';
  A[S] = 7;
  K.split('').forEach(function (k) { B[k] = k; });
  return \$assign({}, A)[S] != 7 || Object.keys(\$assign({}, B)).join('') != K;
}) ? function assign(target, source) { // eslint-disable-line no-unused-vars
  var T = toObject(target);
  var aLen = arguments.length;
  var index = 1;
  var getSymbols = gOPS.f;
  var isEnum = pIE.f;
  while (aLen > index) {
    var S = IObject(arguments[index++]);
    var keys = getSymbols ? getKeys(S).concat(getSymbols(S)) : getKeys(S);
    var length = keys.length;
    var j = 0;
    var key;
    while (length > j) if (isEnum.call(S, key = keys[j++])) T[key] = S[key];
  } return T;
} : \$assign;
";
        
        $__internal_f664e4b4c4f469d36fa49a5c358cd594d6fca6da3f3586f2e1bac0f6b4c5877a->leave($__internal_f664e4b4c4f469d36fa49a5c358cd594d6fca6da3f3586f2e1bac0f6b4c5877a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_object-assign.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// 19.1.2.1 Object.assign(target, source, ...)
var getKeys = require('./_object-keys');
var gOPS = require('./_object-gops');
var pIE = require('./_object-pie');
var toObject = require('./_to-object');
var IObject = require('./_iobject');
var \$assign = Object.assign;

// should work with symbols and should have deterministic property order (V8 bug)
module.exports = !\$assign || require('./_fails')(function () {
  var A = {};
  var B = {};
  // eslint-disable-next-line no-undef
  var S = Symbol();
  var K = 'abcdefghijklmnopqrst';
  A[S] = 7;
  K.split('').forEach(function (k) { B[k] = k; });
  return \$assign({}, A)[S] != 7 || Object.keys(\$assign({}, B)).join('') != K;
}) ? function assign(target, source) { // eslint-disable-line no-unused-vars
  var T = toObject(target);
  var aLen = arguments.length;
  var index = 1;
  var getSymbols = gOPS.f;
  var isEnum = pIE.f;
  while (aLen > index) {
    var S = IObject(arguments[index++]);
    var keys = getSymbols ? getKeys(S).concat(getSymbols(S)) : getKeys(S);
    var length = keys.length;
    var j = 0;
    var key;
    while (length > j) if (isEnum.call(S, key = keys[j++])) T[key] = S[key];
  } return T;
} : \$assign;
", "node_modules/core-js/library/modules/_object-assign.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_object-assign.js");
    }
}
