<?php

/* node_modules/core-js/modules/es6.reflect.enumerate.js */
class __TwigTemplate_f15d683a9d30fc08548296de8f06a4b92d98e04d4fd07fa485e27db5abd15135 extends Twig_Template
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
        $__internal_b85f9a950e13c251b7cc68b596a30344704d7ae1d75990bff78dd16e1ca11ccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b85f9a950e13c251b7cc68b596a30344704d7ae1d75990bff78dd16e1ca11ccc->enter($__internal_b85f9a950e13c251b7cc68b596a30344704d7ae1d75990bff78dd16e1ca11ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.reflect.enumerate.js"));

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
        
        $__internal_b85f9a950e13c251b7cc68b596a30344704d7ae1d75990bff78dd16e1ca11ccc->leave($__internal_b85f9a950e13c251b7cc68b596a30344704d7ae1d75990bff78dd16e1ca11ccc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.reflect.enumerate.js";
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
", "node_modules/core-js/modules/es6.reflect.enumerate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.reflect.enumerate.js");
    }
}
