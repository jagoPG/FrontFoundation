<?php

/* node_modules/core-js/modules/_object-assign.js */
class __TwigTemplate_ba9518241ece6829550f0786f74f1fc942a5acdab88fbe630f61aa2f5b6e82b6 extends Twig_Template
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
        $__internal_6a75575ca6b401172d13f4f43681fdbee3cddd953ff878ea75bbcef8a7eccbd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a75575ca6b401172d13f4f43681fdbee3cddd953ff878ea75bbcef8a7eccbd7->enter($__internal_6a75575ca6b401172d13f4f43681fdbee3cddd953ff878ea75bbcef8a7eccbd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_object-assign.js"));

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
        
        $__internal_6a75575ca6b401172d13f4f43681fdbee3cddd953ff878ea75bbcef8a7eccbd7->leave($__internal_6a75575ca6b401172d13f4f43681fdbee3cddd953ff878ea75bbcef8a7eccbd7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_object-assign.js";
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
", "node_modules/core-js/modules/_object-assign.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_object-assign.js");
    }
}
