<?php

/* node_modules/es5-ext/array/#/copy-within/shim.js */
class __TwigTemplate_c3608c2a3e66471917d0faa9be3cc8bc3107fc5cb13cf244400d9e45b4b8b8e0 extends Twig_Template
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
        $__internal_9fb4704a25b0910b1f4e16e32fef64574d0cc83c5101847e86f889ee418b9559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fb4704a25b0910b1f4e16e32fef64574d0cc83c5101847e86f889ee418b9559->enter($__internal_9fb4704a25b0910b1f4e16e32fef64574d0cc83c5101847e86f889ee418b9559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/copy-within/shim.js"));

        // line 1
        echo "// Taken from: https://github.com/paulmillr/es6-shim/

\"use strict\";

var toInteger         = require(\"../../../number/to-integer\")
  , toPosInt          = require(\"../../../number/to-pos-integer\")
  , validValue        = require(\"../../../object/valid-value\")
  , objHasOwnProperty = Object.prototype.hasOwnProperty
  , max               = Math.max
  , min               = Math.min;

module.exports = function (target, start /*, end*/) {
\tvar arr = validValue(this)
\t  , end = arguments[2]
\t  , length = toPosInt(arr.length)
\t  , to
\t  , from
\t  , fin
\t  , count
\t  , direction;

\ttarget = toInteger(target);
\tstart = toInteger(start);
\tend = end === undefined ? length : toInteger(end);

\tto = target < 0 ? max(length + target, 0) : min(target, length);
\tfrom = start < 0 ? max(length + start, 0) : min(start, length);
\tfin = end < 0 ? max(length + end, 0) : min(end, length);
\tcount = min(fin - from, length - to);
\tdirection = 1;

\tif (from < to && to < from + count) {
\t\tdirection = -1;
\t\tfrom += count - 1;
\t\tto += count - 1;
\t}
\twhile (count > 0) {
\t\tif (objHasOwnProperty.call(arr, from)) arr[to] = arr[from];
\t\telse delete arr[from];
\t\tfrom += direction;
\t\tto += direction;
\t\tcount -= 1;
\t}
\treturn arr;
};
";
        
        $__internal_9fb4704a25b0910b1f4e16e32fef64574d0cc83c5101847e86f889ee418b9559->leave($__internal_9fb4704a25b0910b1f4e16e32fef64574d0cc83c5101847e86f889ee418b9559_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/copy-within/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Taken from: https://github.com/paulmillr/es6-shim/

\"use strict\";

var toInteger         = require(\"../../../number/to-integer\")
  , toPosInt          = require(\"../../../number/to-pos-integer\")
  , validValue        = require(\"../../../object/valid-value\")
  , objHasOwnProperty = Object.prototype.hasOwnProperty
  , max               = Math.max
  , min               = Math.min;

module.exports = function (target, start /*, end*/) {
\tvar arr = validValue(this)
\t  , end = arguments[2]
\t  , length = toPosInt(arr.length)
\t  , to
\t  , from
\t  , fin
\t  , count
\t  , direction;

\ttarget = toInteger(target);
\tstart = toInteger(start);
\tend = end === undefined ? length : toInteger(end);

\tto = target < 0 ? max(length + target, 0) : min(target, length);
\tfrom = start < 0 ? max(length + start, 0) : min(start, length);
\tfin = end < 0 ? max(length + end, 0) : min(end, length);
\tcount = min(fin - from, length - to);
\tdirection = 1;

\tif (from < to && to < from + count) {
\t\tdirection = -1;
\t\tfrom += count - 1;
\t\tto += count - 1;
\t}
\twhile (count > 0) {
\t\tif (objHasOwnProperty.call(arr, from)) arr[to] = arr[from];
\t\telse delete arr[from];
\t\tfrom += direction;
\t\tto += direction;
\t\tcount -= 1;
\t}
\treturn arr;
};
", "node_modules/es5-ext/array/#/copy-within/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/copy-within/shim.js");
    }
}
