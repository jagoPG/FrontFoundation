<?php

/* node_modules/core-js/modules/es6.array.last-index-of.js */
class __TwigTemplate_b6f95ee48f98f57ccc0ed36e0e909d6d937691dc364593717e4dcb87fb510f1b extends Twig_Template
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
        $__internal_3e1c24e8fe2b802d6985cdc963d012466de3aaac41134030246cb80de98dea95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e1c24e8fe2b802d6985cdc963d012466de3aaac41134030246cb80de98dea95->enter($__internal_3e1c24e8fe2b802d6985cdc963d012466de3aaac41134030246cb80de98dea95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.array.last-index-of.js"));

        // line 1
        echo "'use strict';
var \$export = require('./_export');
var toIObject = require('./_to-iobject');
var toInteger = require('./_to-integer');
var toLength = require('./_to-length');
var \$native = [].lastIndexOf;
var NEGATIVE_ZERO = !!\$native && 1 / [1].lastIndexOf(1, -0) < 0;

\$export(\$export.P + \$export.F * (NEGATIVE_ZERO || !require('./_strict-method')(\$native)), 'Array', {
  // 22.1.3.14 / 15.4.4.15 Array.prototype.lastIndexOf(searchElement [, fromIndex])
  lastIndexOf: function lastIndexOf(searchElement /* , fromIndex = @[*-1] */) {
    // convert -0 to +0
    if (NEGATIVE_ZERO) return \$native.apply(this, arguments) || 0;
    var O = toIObject(this);
    var length = toLength(O.length);
    var index = length - 1;
    if (arguments.length > 1) index = Math.min(index, toInteger(arguments[1]));
    if (index < 0) index = length + index;
    for (;index >= 0; index--) if (index in O) if (O[index] === searchElement) return index || 0;
    return -1;
  }
});
";
        
        $__internal_3e1c24e8fe2b802d6985cdc963d012466de3aaac41134030246cb80de98dea95->leave($__internal_3e1c24e8fe2b802d6985cdc963d012466de3aaac41134030246cb80de98dea95_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.array.last-index-of.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var \$export = require('./_export');
var toIObject = require('./_to-iobject');
var toInteger = require('./_to-integer');
var toLength = require('./_to-length');
var \$native = [].lastIndexOf;
var NEGATIVE_ZERO = !!\$native && 1 / [1].lastIndexOf(1, -0) < 0;

\$export(\$export.P + \$export.F * (NEGATIVE_ZERO || !require('./_strict-method')(\$native)), 'Array', {
  // 22.1.3.14 / 15.4.4.15 Array.prototype.lastIndexOf(searchElement [, fromIndex])
  lastIndexOf: function lastIndexOf(searchElement /* , fromIndex = @[*-1] */) {
    // convert -0 to +0
    if (NEGATIVE_ZERO) return \$native.apply(this, arguments) || 0;
    var O = toIObject(this);
    var length = toLength(O.length);
    var index = length - 1;
    if (arguments.length > 1) index = Math.min(index, toInteger(arguments[1]));
    if (index < 0) index = length + index;
    for (;index >= 0; index--) if (index in O) if (O[index] === searchElement) return index || 0;
    return -1;
  }
});
", "node_modules/core-js/modules/es6.array.last-index-of.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.array.last-index-of.js");
    }
}
