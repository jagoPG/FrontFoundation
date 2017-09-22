<?php

/* node_modules/core-js/library/modules/_set-collection-from.js */
class __TwigTemplate_3af6525d9116c2957c28ccff1dce7c294c84491cb6f095767066aad7b4515f69 extends Twig_Template
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
        $__internal_80b03b883aab77545722397e18b74c64e9ac326450aaa9c6858cd79f26edd3be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80b03b883aab77545722397e18b74c64e9ac326450aaa9c6858cd79f26edd3be->enter($__internal_80b03b883aab77545722397e18b74c64e9ac326450aaa9c6858cd79f26edd3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_set-collection-from.js"));

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
        
        $__internal_80b03b883aab77545722397e18b74c64e9ac326450aaa9c6858cd79f26edd3be->leave($__internal_80b03b883aab77545722397e18b74c64e9ac326450aaa9c6858cd79f26edd3be_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_set-collection-from.js";
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
", "node_modules/core-js/library/modules/_set-collection-from.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_set-collection-from.js");
    }
}
