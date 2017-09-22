<?php

/* node_modules/core-js/modules/es6.array.sort.js */
class __TwigTemplate_9125d01356cf008041c575a0e6be8ff2e7d2bb827bd4815acc8ceeae051e37c5 extends Twig_Template
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
        $__internal_3be0b901369cd79fcada29458c2fb74b019a227f98f94cbce7d78892328700d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3be0b901369cd79fcada29458c2fb74b019a227f98f94cbce7d78892328700d9->enter($__internal_3be0b901369cd79fcada29458c2fb74b019a227f98f94cbce7d78892328700d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.array.sort.js"));

        // line 1
        echo "'use strict';
var \$export = require('./_export');
var aFunction = require('./_a-function');
var toObject = require('./_to-object');
var fails = require('./_fails');
var \$sort = [].sort;
var test = [1, 2, 3];

\$export(\$export.P + \$export.F * (fails(function () {
  // IE8-
  test.sort(undefined);
}) || !fails(function () {
  // V8 bug
  test.sort(null);
  // Old WebKit
}) || !require('./_strict-method')(\$sort)), 'Array', {
  // 22.1.3.25 Array.prototype.sort(comparefn)
  sort: function sort(comparefn) {
    return comparefn === undefined
      ? \$sort.call(toObject(this))
      : \$sort.call(toObject(this), aFunction(comparefn));
  }
});
";
        
        $__internal_3be0b901369cd79fcada29458c2fb74b019a227f98f94cbce7d78892328700d9->leave($__internal_3be0b901369cd79fcada29458c2fb74b019a227f98f94cbce7d78892328700d9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.array.sort.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var \$export = require('./_export');
var aFunction = require('./_a-function');
var toObject = require('./_to-object');
var fails = require('./_fails');
var \$sort = [].sort;
var test = [1, 2, 3];

\$export(\$export.P + \$export.F * (fails(function () {
  // IE8-
  test.sort(undefined);
}) || !fails(function () {
  // V8 bug
  test.sort(null);
  // Old WebKit
}) || !require('./_strict-method')(\$sort)), 'Array', {
  // 22.1.3.25 Array.prototype.sort(comparefn)
  sort: function sort(comparefn) {
    return comparefn === undefined
      ? \$sort.call(toObject(this))
      : \$sort.call(toObject(this), aFunction(comparefn));
  }
});
", "node_modules/core-js/modules/es6.array.sort.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.array.sort.js");
    }
}
