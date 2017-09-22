<?php

/* node_modules/es5-ext/function/_define-length.js */
class __TwigTemplate_4d2757f3e2ab276883f870826010a36a28b559794fa424d5c235952e607c0d0c extends Twig_Template
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
        $__internal_2101f2c226ddb083c01e2e0fd660387383a9ee8c1c4bb28a62b2fe36940ab8a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2101f2c226ddb083c01e2e0fd660387383a9ee8c1c4bb28a62b2fe36940ab8a0->enter($__internal_2101f2c226ddb083c01e2e0fd660387383a9ee8c1c4bb28a62b2fe36940ab8a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/function/_define-length.js"));

        // line 1
        echo "\"use strict\";

var toPosInt = require(\"../number/to-pos-integer\");

var test = function (arg1, arg2) {
\treturn arg2;
};

var desc, defineProperty, generate, mixin;

try {
\tObject.defineProperty(test, \"length\", {
\t\tconfigurable: true,
\t\twritable: false,
\t\tenumerable: false,
\t\tvalue: 1
\t});
} catch (ignore) {}

if (test.length === 1) {
\t// ES6
\tdesc = { configurable: true, writable: false, enumerable: false };
\tdefineProperty = Object.defineProperty;
\tmodule.exports = function (fn, length) {
\t\tlength = toPosInt(length);
\t\tif (fn.length === length) return fn;
\t\tdesc.value = length;
\t\treturn defineProperty(fn, \"length\", desc);
\t};
} else {
\tmixin = require(\"../object/mixin\");
\tgenerate = (function () {
\t\tvar cache = [];
\t\treturn function (length) {
\t\t\tvar args, i = 0;
\t\t\tif (cache[length]) return cache[length];
\t\t\targs = [];
\t\t\twhile (length--) args.push(\"a\" + (++i).toString(36));
\t\t\t// eslint-disable-next-line no-new-func
\t\t\treturn new Function(
\t\t\t\t\"fn\",
\t\t\t\t\"return function (\" + args.join(\", \") + \") { return fn.apply(this, arguments); };\"
\t\t\t);
\t\t};
\t}());
\tmodule.exports = function (src, length) {
\t\tvar target;
\t\tlength = toPosInt(length);
\t\tif (src.length === length) return src;
\t\ttarget = generate(length)(src);
\t\ttry {
\t\t\tmixin(target, src);
\t\t} catch (ignore) {}
\t\treturn target;
\t};
}
";
        
        $__internal_2101f2c226ddb083c01e2e0fd660387383a9ee8c1c4bb28a62b2fe36940ab8a0->leave($__internal_2101f2c226ddb083c01e2e0fd660387383a9ee8c1c4bb28a62b2fe36940ab8a0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/function/_define-length.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var toPosInt = require(\"../number/to-pos-integer\");

var test = function (arg1, arg2) {
\treturn arg2;
};

var desc, defineProperty, generate, mixin;

try {
\tObject.defineProperty(test, \"length\", {
\t\tconfigurable: true,
\t\twritable: false,
\t\tenumerable: false,
\t\tvalue: 1
\t});
} catch (ignore) {}

if (test.length === 1) {
\t// ES6
\tdesc = { configurable: true, writable: false, enumerable: false };
\tdefineProperty = Object.defineProperty;
\tmodule.exports = function (fn, length) {
\t\tlength = toPosInt(length);
\t\tif (fn.length === length) return fn;
\t\tdesc.value = length;
\t\treturn defineProperty(fn, \"length\", desc);
\t};
} else {
\tmixin = require(\"../object/mixin\");
\tgenerate = (function () {
\t\tvar cache = [];
\t\treturn function (length) {
\t\t\tvar args, i = 0;
\t\t\tif (cache[length]) return cache[length];
\t\t\targs = [];
\t\t\twhile (length--) args.push(\"a\" + (++i).toString(36));
\t\t\t// eslint-disable-next-line no-new-func
\t\t\treturn new Function(
\t\t\t\t\"fn\",
\t\t\t\t\"return function (\" + args.join(\", \") + \") { return fn.apply(this, arguments); };\"
\t\t\t);
\t\t};
\t}());
\tmodule.exports = function (src, length) {
\t\tvar target;
\t\tlength = toPosInt(length);
\t\tif (src.length === length) return src;
\t\ttarget = generate(length)(src);
\t\ttry {
\t\t\tmixin(target, src);
\t\t} catch (ignore) {}
\t\treturn target;
\t};
}
", "node_modules/es5-ext/function/_define-length.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/function/_define-length.js");
    }
}
