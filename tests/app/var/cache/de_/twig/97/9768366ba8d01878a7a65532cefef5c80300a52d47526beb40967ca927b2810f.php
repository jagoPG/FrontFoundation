<?php

/* node_modules/core-js/library/modules/es6.reflect.enumerate.js */
class __TwigTemplate_773ccb2799c74596a75b7f37b50c4e5d01a67163ab51823143fa8acebb54d1d4 extends Twig_Template
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
        $__internal_2d67aafe448e2a5f95c4ebf1dcf2a43337a0c1e5b19797c45913ca0c5ce593df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d67aafe448e2a5f95c4ebf1dcf2a43337a0c1e5b19797c45913ca0c5ce593df->enter($__internal_2d67aafe448e2a5f95c4ebf1dcf2a43337a0c1e5b19797c45913ca0c5ce593df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.reflect.enumerate.js"));

        // line 1
        echo "'use strict';
// 26.1.5 Reflect.enumerate(target)
var \$export = require('./_export');
var anObject = require('./_an-object');
var Enumerate = function (iterated) {
  this._t = anObject(iterated); // target
  this._i = 0;                  // next index
  var keys = this._k = [];      // keys
  var key;
  for (key in iterated) keys.push(key);
};
require('./_iter-create')(Enumerate, 'Object', function () {
  var that = this;
  var keys = that._k;
  var key;
  do {
    if (that._i >= keys.length) return { value: undefined, done: true };
  } while (!((key = keys[that._i++]) in that._t));
  return { value: key, done: false };
});

\$export(\$export.S, 'Reflect', {
  enumerate: function enumerate(target) {
    return new Enumerate(target);
  }
});
";
        
        $__internal_2d67aafe448e2a5f95c4ebf1dcf2a43337a0c1e5b19797c45913ca0c5ce593df->leave($__internal_2d67aafe448e2a5f95c4ebf1dcf2a43337a0c1e5b19797c45913ca0c5ce593df_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.reflect.enumerate.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// 26.1.5 Reflect.enumerate(target)
var \$export = require('./_export');
var anObject = require('./_an-object');
var Enumerate = function (iterated) {
  this._t = anObject(iterated); // target
  this._i = 0;                  // next index
  var keys = this._k = [];      // keys
  var key;
  for (key in iterated) keys.push(key);
};
require('./_iter-create')(Enumerate, 'Object', function () {
  var that = this;
  var keys = that._k;
  var key;
  do {
    if (that._i >= keys.length) return { value: undefined, done: true };
  } while (!((key = keys[that._i++]) in that._t));
  return { value: key, done: false };
});

\$export(\$export.S, 'Reflect', {
  enumerate: function enumerate(target) {
    return new Enumerate(target);
  }
});
", "node_modules/core-js/library/modules/es6.reflect.enumerate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.reflect.enumerate.js");
    }
}
