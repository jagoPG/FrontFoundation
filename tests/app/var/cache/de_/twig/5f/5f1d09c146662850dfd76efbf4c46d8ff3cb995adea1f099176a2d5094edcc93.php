<?php

/* node_modules/es5-ext/test/array/of/shim.js */
class __TwigTemplate_21ad1567f759fbd96cf02c042a66e75443ef31fa1d91b05d65afda37e679325c extends Twig_Template
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
        $__internal_186956e4fb04dbdb5044bb531f5813314e3392dfad6698a153d30b4ce0507582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_186956e4fb04dbdb5044bb531f5813314e3392dfad6698a153d30b4ce0507582->enter($__internal_186956e4fb04dbdb5044bb531f5813314e3392dfad6698a153d30b4ce0507582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/of/shim.js"));

        // line 1
        echo "/* eslint no-useless-call: \"off\" */
// Most tests taken from https://github.com/mathiasbynens/Array.of/blob/master/tests/tests.js
// Thanks @mathiasbynens

\"use strict\";

var defineProperty = Object.defineProperty;

module.exports = function (t, a) {
\tvar x = {}, testObject, MyType;

\ta.deep(t(), [], \"No arguments\");
\ta.deep(t(3), [3], \"One numeric argument\");
\ta.deep(t(3, \"raz\", null, x, undefined), [3, \"raz\", null, x, undefined], \"Many arguments\");

\ta(t.length, 0, \"Length\");

\ta.deep(t(\"abc\"), [\"abc\"], \"String\");
\ta.deep(t(undefined), [undefined], \"Undefined\");
\ta.deep(t(null), [null], \"Null\");
\ta.deep(t(false), [false], \"Boolean\");
\ta.deep(t(-Infinity), [-Infinity], \"Infinity\");
\ta.deep(t(-0), [-0], \"-0\");
\ta.deep(t(+0), [+0], \"+0\");
\ta.deep(t(1), [1], \"1\");
\ta.deep(t(1, 2, 3), [1, 2, 3], \"Numeric args\");
\ta.deep(t(Number(Infinity)), [Number(Infinity)], \"+Infinity\");
\ta.deep(
\t\tt({ 0: \"a\", 1: \"b\", 2: \"c\", length: 3 }),
\t\t[{ 0: \"a\", 1: \"b\", 2: \"c\", length: 3 }],
\t\t\"Array like\"
\t);
\ta.deep(
\t\tt(undefined, null, false, -Infinity, -0, +0, 1, 2, Number(Infinity)),
\t\t[undefined, null, false, -Infinity, -0, +0, 1, 2, Number(Infinity)],
\t\t\"Falsy arguments\"
\t);

\ta.h1(\"Null context\");
\ta.deep(t.call(null, \"abc\"), [\"abc\"], \"String\");
\ta.deep(t.call(null, undefined), [undefined], \"Undefined\");
\ta.deep(t.call(null, null), [null], \"Null\");
\ta.deep(t.call(null, false), [false], \"Boolean\");
\ta.deep(t.call(null, -Infinity), [-Infinity], \"-Infinity\");
\ta.deep(t.call(null, -0), [-0], \"-0\");
\ta.deep(t.call(null, +0), [+0], \"+0\");
\ta.deep(t.call(null, 1), [1], \"1\");
\ta.deep(t.call(null, 1, 2, 3), [1, 2, 3], \"Numeric\");
\ta.deep(t.call(null, Number(Infinity)), [Number(Infinity)], \"+Infinity\");
\ta.deep(
\t\tt.call(null, { 0: \"a\", 1: \"b\", 2: \"c\", length: 3 }),
\t\t[{ 0: \"a\", 1: \"b\", 2: \"c\", length: 3 }],
\t\t\"Array-like\"
\t);
\ta.deep(
\t\tt.call(null, undefined, null, false, -Infinity, -0, +0, 1, 2, Number(Infinity)),
\t\t[undefined, null, false, -Infinity, -0, +0, 1, 2, Number(Infinity)],
\t\t\"Falsy\"
\t);

\ta.h1(\"Other constructor context\");
\ta.deep(t.call(Object, 1, 2, 3), { 0: 1, 1: 2, 2: 3, length: 3 }, \"Many arguments\");

\ttestObject = Object(3);
\ttestObject[0] = 1;
\ttestObject[1] = 2;
\ttestObject[2] = 3;
\ttestObject.length = 3;
\ta.deep(t.call(Object, 1, 2, 3), testObject, \"Test object\");
\ta(t.call(Object).length, 0, \"No arguments\");
\ta.throws(
\t\tfunction () {
\t\t\tt.call(function () {
\t\t\t\treturn Object.freeze({});
\t\t\t});
\t\t},
\t\tTypeError,
\t\t\"Frozen instance\"
\t);

\t// Ensure no setters are called for the indexes
\tMyType = function () {};
\tdefineProperty(MyType.prototype, \"0\", {
\t\tset: function (x) {
\t\t\tthrow new Error(\"Setter called: \" + x);
\t\t}
\t});
\ta.deep(t.call(MyType, \"abc\"), { 0: \"abc\", length: 1 }, \"Define, not set\");
};
";
        
        $__internal_186956e4fb04dbdb5044bb531f5813314e3392dfad6698a153d30b4ce0507582->leave($__internal_186956e4fb04dbdb5044bb531f5813314e3392dfad6698a153d30b4ce0507582_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/of/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/* eslint no-useless-call: \"off\" */
// Most tests taken from https://github.com/mathiasbynens/Array.of/blob/master/tests/tests.js
// Thanks @mathiasbynens

\"use strict\";

var defineProperty = Object.defineProperty;

module.exports = function (t, a) {
\tvar x = {}, testObject, MyType;

\ta.deep(t(), [], \"No arguments\");
\ta.deep(t(3), [3], \"One numeric argument\");
\ta.deep(t(3, \"raz\", null, x, undefined), [3, \"raz\", null, x, undefined], \"Many arguments\");

\ta(t.length, 0, \"Length\");

\ta.deep(t(\"abc\"), [\"abc\"], \"String\");
\ta.deep(t(undefined), [undefined], \"Undefined\");
\ta.deep(t(null), [null], \"Null\");
\ta.deep(t(false), [false], \"Boolean\");
\ta.deep(t(-Infinity), [-Infinity], \"Infinity\");
\ta.deep(t(-0), [-0], \"-0\");
\ta.deep(t(+0), [+0], \"+0\");
\ta.deep(t(1), [1], \"1\");
\ta.deep(t(1, 2, 3), [1, 2, 3], \"Numeric args\");
\ta.deep(t(Number(Infinity)), [Number(Infinity)], \"+Infinity\");
\ta.deep(
\t\tt({ 0: \"a\", 1: \"b\", 2: \"c\", length: 3 }),
\t\t[{ 0: \"a\", 1: \"b\", 2: \"c\", length: 3 }],
\t\t\"Array like\"
\t);
\ta.deep(
\t\tt(undefined, null, false, -Infinity, -0, +0, 1, 2, Number(Infinity)),
\t\t[undefined, null, false, -Infinity, -0, +0, 1, 2, Number(Infinity)],
\t\t\"Falsy arguments\"
\t);

\ta.h1(\"Null context\");
\ta.deep(t.call(null, \"abc\"), [\"abc\"], \"String\");
\ta.deep(t.call(null, undefined), [undefined], \"Undefined\");
\ta.deep(t.call(null, null), [null], \"Null\");
\ta.deep(t.call(null, false), [false], \"Boolean\");
\ta.deep(t.call(null, -Infinity), [-Infinity], \"-Infinity\");
\ta.deep(t.call(null, -0), [-0], \"-0\");
\ta.deep(t.call(null, +0), [+0], \"+0\");
\ta.deep(t.call(null, 1), [1], \"1\");
\ta.deep(t.call(null, 1, 2, 3), [1, 2, 3], \"Numeric\");
\ta.deep(t.call(null, Number(Infinity)), [Number(Infinity)], \"+Infinity\");
\ta.deep(
\t\tt.call(null, { 0: \"a\", 1: \"b\", 2: \"c\", length: 3 }),
\t\t[{ 0: \"a\", 1: \"b\", 2: \"c\", length: 3 }],
\t\t\"Array-like\"
\t);
\ta.deep(
\t\tt.call(null, undefined, null, false, -Infinity, -0, +0, 1, 2, Number(Infinity)),
\t\t[undefined, null, false, -Infinity, -0, +0, 1, 2, Number(Infinity)],
\t\t\"Falsy\"
\t);

\ta.h1(\"Other constructor context\");
\ta.deep(t.call(Object, 1, 2, 3), { 0: 1, 1: 2, 2: 3, length: 3 }, \"Many arguments\");

\ttestObject = Object(3);
\ttestObject[0] = 1;
\ttestObject[1] = 2;
\ttestObject[2] = 3;
\ttestObject.length = 3;
\ta.deep(t.call(Object, 1, 2, 3), testObject, \"Test object\");
\ta(t.call(Object).length, 0, \"No arguments\");
\ta.throws(
\t\tfunction () {
\t\t\tt.call(function () {
\t\t\t\treturn Object.freeze({});
\t\t\t});
\t\t},
\t\tTypeError,
\t\t\"Frozen instance\"
\t);

\t// Ensure no setters are called for the indexes
\tMyType = function () {};
\tdefineProperty(MyType.prototype, \"0\", {
\t\tset: function (x) {
\t\t\tthrow new Error(\"Setter called: \" + x);
\t\t}
\t});
\ta.deep(t.call(MyType, \"abc\"), { 0: \"abc\", length: 1 }, \"Define, not set\");
};
", "node_modules/es5-ext/test/array/of/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/of/shim.js");
    }
}
