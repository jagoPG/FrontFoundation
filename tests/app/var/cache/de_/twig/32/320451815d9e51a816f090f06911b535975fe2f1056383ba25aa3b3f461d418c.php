<?php

/* node_modules/core-js/modules/es6.regexp.to-string.js */
class __TwigTemplate_26b22209e795f887b5b772bee63f47158d13f27b4b1a93886381ecfd0e361973 extends Twig_Template
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
        $__internal_c234db0f6fa904f8d2ed3bea9bd83a4d115d2edcba7a42344dce4b38e680a29e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c234db0f6fa904f8d2ed3bea9bd83a4d115d2edcba7a42344dce4b38e680a29e->enter($__internal_c234db0f6fa904f8d2ed3bea9bd83a4d115d2edcba7a42344dce4b38e680a29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.regexp.to-string.js"));

        // line 1
        echo "'use strict';
require('./es6.regexp.flags');
var anObject = require('./_an-object');
var \$flags = require('./_flags');
var DESCRIPTORS = require('./_descriptors');
var TO_STRING = 'toString';
var \$toString = /./[TO_STRING];

var define = function (fn) {
  require('./_redefine')(RegExp.prototype, TO_STRING, fn, true);
};

// 21.2.5.14 RegExp.prototype.toString()
if (require('./_fails')(function () { return \$toString.call({ source: 'a', flags: 'b' }) != '/a/b'; })) {
  define(function toString() {
    var R = anObject(this);
    return '/'.concat(R.source, '/',
      'flags' in R ? R.flags : !DESCRIPTORS && R instanceof RegExp ? \$flags.call(R) : undefined);
  });
// FF44- RegExp#toString has a wrong name
} else if (\$toString.name != TO_STRING) {
  define(function toString() {
    return \$toString.call(this);
  });
}
";
        
        $__internal_c234db0f6fa904f8d2ed3bea9bd83a4d115d2edcba7a42344dce4b38e680a29e->leave($__internal_c234db0f6fa904f8d2ed3bea9bd83a4d115d2edcba7a42344dce4b38e680a29e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.regexp.to-string.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
require('./es6.regexp.flags');
var anObject = require('./_an-object');
var \$flags = require('./_flags');
var DESCRIPTORS = require('./_descriptors');
var TO_STRING = 'toString';
var \$toString = /./[TO_STRING];

var define = function (fn) {
  require('./_redefine')(RegExp.prototype, TO_STRING, fn, true);
};

// 21.2.5.14 RegExp.prototype.toString()
if (require('./_fails')(function () { return \$toString.call({ source: 'a', flags: 'b' }) != '/a/b'; })) {
  define(function toString() {
    var R = anObject(this);
    return '/'.concat(R.source, '/',
      'flags' in R ? R.flags : !DESCRIPTORS && R instanceof RegExp ? \$flags.call(R) : undefined);
  });
// FF44- RegExp#toString has a wrong name
} else if (\$toString.name != TO_STRING) {
  define(function toString() {
    return \$toString.call(this);
  });
}
", "node_modules/core-js/modules/es6.regexp.to-string.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.regexp.to-string.js");
    }
}
