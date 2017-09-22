<?php

/* node_modules/core-js/modules/_set-collection-from.js */
class __TwigTemplate_234e7c6e72a4b433bbbbf0d0d2ee41b140c5e357079a991e465049659977713c extends Twig_Template
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
        $__internal_9c74e5eba94a7c80f46cbb8d2a8730891c8378cfcdb49c67879c49a1e38e7d92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c74e5eba94a7c80f46cbb8d2a8730891c8378cfcdb49c67879c49a1e38e7d92->enter($__internal_9c74e5eba94a7c80f46cbb8d2a8730891c8378cfcdb49c67879c49a1e38e7d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_set-collection-from.js"));

        // line 1
        echo "'use strict';
// https://tc39.github.io/proposal-setmap-offrom/
var \$export = require('./_export');
var aFunction = require('./_a-function');
var ctx = require('./_ctx');
var forOf = require('./_for-of');

module.exports = function (COLLECTION) {
  \$export(\$export.S, COLLECTION, { from: function from(source /* , mapFn, thisArg */) {
    var mapFn = arguments[1];
    var mapping, A, n, cb;
    aFunction(this);
    mapping = mapFn !== undefined;
    if (mapping) aFunction(mapFn);
    if (source == undefined) return new this();
    A = [];
    if (mapping) {
      n = 0;
      cb = ctx(mapFn, arguments[2], 2);
      forOf(source, false, function (nextItem) {
        A.push(cb(nextItem, n++));
      });
    } else {
      forOf(source, false, A.push, A);
    }
    return new this(A);
  } });
};
";
        
        $__internal_9c74e5eba94a7c80f46cbb8d2a8730891c8378cfcdb49c67879c49a1e38e7d92->leave($__internal_9c74e5eba94a7c80f46cbb8d2a8730891c8378cfcdb49c67879c49a1e38e7d92_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_set-collection-from.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// https://tc39.github.io/proposal-setmap-offrom/
var \$export = require('./_export');
var aFunction = require('./_a-function');
var ctx = require('./_ctx');
var forOf = require('./_for-of');

module.exports = function (COLLECTION) {
  \$export(\$export.S, COLLECTION, { from: function from(source /* , mapFn, thisArg */) {
    var mapFn = arguments[1];
    var mapping, A, n, cb;
    aFunction(this);
    mapping = mapFn !== undefined;
    if (mapping) aFunction(mapFn);
    if (source == undefined) return new this();
    A = [];
    if (mapping) {
      n = 0;
      cb = ctx(mapFn, arguments[2], 2);
      forOf(source, false, function (nextItem) {
        A.push(cb(nextItem, n++));
      });
    } else {
      forOf(source, false, A.push, A);
    }
    return new this(A);
  } });
};
", "node_modules/core-js/modules/_set-collection-from.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_set-collection-from.js");
    }
}
