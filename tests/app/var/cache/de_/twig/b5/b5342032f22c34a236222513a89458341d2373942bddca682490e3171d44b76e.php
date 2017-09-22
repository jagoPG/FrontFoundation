<?php

/* node_modules/es5-ext/test/string/#/code-point-at/shim.js */
class __TwigTemplate_85c07c6e766776fa9e9885ba0262f829a2b1e72b0304ba6dabc3c556206e5588 extends Twig_Template
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
        $__internal_85b2a4c235b9d66fc82b2b5a24587808fba200357aa7def275ddd2be5f86eae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85b2a4c235b9d66fc82b2b5a24587808fba200357aa7def275ddd2be5f86eae0->enter($__internal_85b2a4c235b9d66fc82b2b5a24587808fba200357aa7def275ddd2be5f86eae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/string/#/code-point-at/shim.js"));

        // line 1
        echo "/* eslint no-useless-call: \"off\" */

// Taken from: https://github.com/mathiasbynens/String.prototype.codePointAt
//             /blob/master/tests/tests.js

\"use strict\";

module.exports = function (t, a) {
\ta(t.length, 1, \"Length\");

\t// String that starts with a BMP symbol
\ta(t.call(\"abc\\uD834\\uDF06def\", \"\"), 0x61);
\ta(t.call(\"abc\\uD834\\uDF06def\", \"_\"), 0x61);
\ta(t.call(\"abc\\uD834\\uDF06def\"), 0x61);
\ta(t.call(\"abc\\uD834\\uDF06def\", -Infinity), undefined);
\ta(t.call(\"abc\\uD834\\uDF06def\", -1), undefined);
\ta(t.call(\"abc\\uD834\\uDF06def\", -0), 0x61);
\ta(t.call(\"abc\\uD834\\uDF06def\", 0), 0x61);
\ta(t.call(\"abc\\uD834\\uDF06def\", 3), 0x1d306);
\ta(t.call(\"abc\\uD834\\uDF06def\", 4), 0xdf06);
\ta(t.call(\"abc\\uD834\\uDF06def\", 5), 0x64);
\ta(t.call(\"abc\\uD834\\uDF06def\", 42), undefined);
\ta(t.call(\"abc\\uD834\\uDF06def\", Infinity), undefined);
\ta(t.call(\"abc\\uD834\\uDF06def\", Infinity), undefined);
\ta(t.call(\"abc\\uD834\\uDF06def\", NaN), 0x61);
\ta(t.call(\"abc\\uD834\\uDF06def\", false), 0x61);
\ta(t.call(\"abc\\uD834\\uDF06def\", null), 0x61);
\ta(t.call(\"abc\\uD834\\uDF06def\", undefined), 0x61);

\t// String that starts with an astral symbol
\ta(t.call(\"\\uD834\\uDF06def\", \"\"), 0x1d306);
\ta(t.call(\"\\uD834\\uDF06def\", \"1\"), 0xdf06);
\ta(t.call(\"\\uD834\\uDF06def\", \"_\"), 0x1d306);
\ta(t.call(\"\\uD834\\uDF06def\"), 0x1d306);
\ta(t.call(\"\\uD834\\uDF06def\", -1), undefined);
\ta(t.call(\"\\uD834\\uDF06def\", -0), 0x1d306);
\ta(t.call(\"\\uD834\\uDF06def\", 0), 0x1d306);
\ta(t.call(\"\\uD834\\uDF06def\", 1), 0xdf06);
\ta(t.call(\"\\uD834\\uDF06def\", 42), undefined);
\ta(t.call(\"\\uD834\\uDF06def\", false), 0x1d306);
\ta(t.call(\"\\uD834\\uDF06def\", null), 0x1d306);
\ta(t.call(\"\\uD834\\uDF06def\", undefined), 0x1d306);

\t// Lone high surrogates
\ta(t.call(\"\\uD834abc\", \"\"), 0xd834);
\ta(t.call(\"\\uD834abc\", \"_\"), 0xd834);
\ta(t.call(\"\\uD834abc\"), 0xd834);
\ta(t.call(\"\\uD834abc\", -1), undefined);
\ta(t.call(\"\\uD834abc\", -0), 0xd834);
\ta(t.call(\"\\uD834abc\", 0), 0xd834);
\ta(t.call(\"\\uD834abc\", false), 0xd834);
\ta(t.call(\"\\uD834abc\", NaN), 0xd834);
\ta(t.call(\"\\uD834abc\", null), 0xd834);
\ta(t.call(\"\\uD834abc\", undefined), 0xd834);

\t// Lone low surrogates
\ta(t.call(\"\\uDF06abc\", \"\"), 0xdf06);
\ta(t.call(\"\\uDF06abc\", \"_\"), 0xdf06);
\ta(t.call(\"\\uDF06abc\"), 0xdf06);
\ta(t.call(\"\\uDF06abc\", -1), undefined);
\ta(t.call(\"\\uDF06abc\", -0), 0xdf06);
\ta(t.call(\"\\uDF06abc\", 0), 0xdf06);
\ta(t.call(\"\\uDF06abc\", false), 0xdf06);
\ta(t.call(\"\\uDF06abc\", NaN), 0xdf06);
\ta(t.call(\"\\uDF06abc\", null), 0xdf06);
\ta(t.call(\"\\uDF06abc\", undefined), 0xdf06);

\ta.throws(function () {
\t\tt.call(undefined);
\t}, TypeError);
\ta.throws(function () {
\t\tt.call(undefined, 4);
\t}, TypeError);
\ta.throws(function () {
\t\tt.call(null);
\t}, TypeError);
\ta.throws(function () {
\t\tt.call(null, 4);
\t}, TypeError);
\ta(t.call(42, 0), 0x34);
\ta(t.call(42, 1), 0x32);
\ta(
\t\tt.call(
\t\t\t{
\t\t\t\ttoString: function () {
\t\t\t\t\treturn \"abc\";
\t\t\t\t}
\t\t\t},
\t\t\t2
\t\t),
\t\t0x63
\t);

\ta.throws(function () {
\t\tt.apply(undefined);
\t}, TypeError);
\ta.throws(function () {
\t\tt.apply(undefined, [4]);
\t}, TypeError);
\ta.throws(function () {
\t\tt.apply(null);
\t}, TypeError);
\ta.throws(function () {
\t\tt.apply(null, [4]);
\t}, TypeError);
\ta(t.apply(42, [0]), 0x34);
\ta(t.apply(42, [1]), 0x32);
\ta(
\t\tt.apply(
\t\t\t{
\t\t\t\ttoString: function () {
\t\t\t\t\treturn \"abc\";
\t\t\t\t}
\t\t\t},
\t\t\t[2]
\t\t),
\t\t0x63
\t);
};
";
        
        $__internal_85b2a4c235b9d66fc82b2b5a24587808fba200357aa7def275ddd2be5f86eae0->leave($__internal_85b2a4c235b9d66fc82b2b5a24587808fba200357aa7def275ddd2be5f86eae0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/string/#/code-point-at/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/* eslint no-useless-call: \"off\" */

// Taken from: https://github.com/mathiasbynens/String.prototype.codePointAt
//             /blob/master/tests/tests.js

\"use strict\";

module.exports = function (t, a) {
\ta(t.length, 1, \"Length\");

\t// String that starts with a BMP symbol
\ta(t.call(\"abc\\uD834\\uDF06def\", \"\"), 0x61);
\ta(t.call(\"abc\\uD834\\uDF06def\", \"_\"), 0x61);
\ta(t.call(\"abc\\uD834\\uDF06def\"), 0x61);
\ta(t.call(\"abc\\uD834\\uDF06def\", -Infinity), undefined);
\ta(t.call(\"abc\\uD834\\uDF06def\", -1), undefined);
\ta(t.call(\"abc\\uD834\\uDF06def\", -0), 0x61);
\ta(t.call(\"abc\\uD834\\uDF06def\", 0), 0x61);
\ta(t.call(\"abc\\uD834\\uDF06def\", 3), 0x1d306);
\ta(t.call(\"abc\\uD834\\uDF06def\", 4), 0xdf06);
\ta(t.call(\"abc\\uD834\\uDF06def\", 5), 0x64);
\ta(t.call(\"abc\\uD834\\uDF06def\", 42), undefined);
\ta(t.call(\"abc\\uD834\\uDF06def\", Infinity), undefined);
\ta(t.call(\"abc\\uD834\\uDF06def\", Infinity), undefined);
\ta(t.call(\"abc\\uD834\\uDF06def\", NaN), 0x61);
\ta(t.call(\"abc\\uD834\\uDF06def\", false), 0x61);
\ta(t.call(\"abc\\uD834\\uDF06def\", null), 0x61);
\ta(t.call(\"abc\\uD834\\uDF06def\", undefined), 0x61);

\t// String that starts with an astral symbol
\ta(t.call(\"\\uD834\\uDF06def\", \"\"), 0x1d306);
\ta(t.call(\"\\uD834\\uDF06def\", \"1\"), 0xdf06);
\ta(t.call(\"\\uD834\\uDF06def\", \"_\"), 0x1d306);
\ta(t.call(\"\\uD834\\uDF06def\"), 0x1d306);
\ta(t.call(\"\\uD834\\uDF06def\", -1), undefined);
\ta(t.call(\"\\uD834\\uDF06def\", -0), 0x1d306);
\ta(t.call(\"\\uD834\\uDF06def\", 0), 0x1d306);
\ta(t.call(\"\\uD834\\uDF06def\", 1), 0xdf06);
\ta(t.call(\"\\uD834\\uDF06def\", 42), undefined);
\ta(t.call(\"\\uD834\\uDF06def\", false), 0x1d306);
\ta(t.call(\"\\uD834\\uDF06def\", null), 0x1d306);
\ta(t.call(\"\\uD834\\uDF06def\", undefined), 0x1d306);

\t// Lone high surrogates
\ta(t.call(\"\\uD834abc\", \"\"), 0xd834);
\ta(t.call(\"\\uD834abc\", \"_\"), 0xd834);
\ta(t.call(\"\\uD834abc\"), 0xd834);
\ta(t.call(\"\\uD834abc\", -1), undefined);
\ta(t.call(\"\\uD834abc\", -0), 0xd834);
\ta(t.call(\"\\uD834abc\", 0), 0xd834);
\ta(t.call(\"\\uD834abc\", false), 0xd834);
\ta(t.call(\"\\uD834abc\", NaN), 0xd834);
\ta(t.call(\"\\uD834abc\", null), 0xd834);
\ta(t.call(\"\\uD834abc\", undefined), 0xd834);

\t// Lone low surrogates
\ta(t.call(\"\\uDF06abc\", \"\"), 0xdf06);
\ta(t.call(\"\\uDF06abc\", \"_\"), 0xdf06);
\ta(t.call(\"\\uDF06abc\"), 0xdf06);
\ta(t.call(\"\\uDF06abc\", -1), undefined);
\ta(t.call(\"\\uDF06abc\", -0), 0xdf06);
\ta(t.call(\"\\uDF06abc\", 0), 0xdf06);
\ta(t.call(\"\\uDF06abc\", false), 0xdf06);
\ta(t.call(\"\\uDF06abc\", NaN), 0xdf06);
\ta(t.call(\"\\uDF06abc\", null), 0xdf06);
\ta(t.call(\"\\uDF06abc\", undefined), 0xdf06);

\ta.throws(function () {
\t\tt.call(undefined);
\t}, TypeError);
\ta.throws(function () {
\t\tt.call(undefined, 4);
\t}, TypeError);
\ta.throws(function () {
\t\tt.call(null);
\t}, TypeError);
\ta.throws(function () {
\t\tt.call(null, 4);
\t}, TypeError);
\ta(t.call(42, 0), 0x34);
\ta(t.call(42, 1), 0x32);
\ta(
\t\tt.call(
\t\t\t{
\t\t\t\ttoString: function () {
\t\t\t\t\treturn \"abc\";
\t\t\t\t}
\t\t\t},
\t\t\t2
\t\t),
\t\t0x63
\t);

\ta.throws(function () {
\t\tt.apply(undefined);
\t}, TypeError);
\ta.throws(function () {
\t\tt.apply(undefined, [4]);
\t}, TypeError);
\ta.throws(function () {
\t\tt.apply(null);
\t}, TypeError);
\ta.throws(function () {
\t\tt.apply(null, [4]);
\t}, TypeError);
\ta(t.apply(42, [0]), 0x34);
\ta(t.apply(42, [1]), 0x32);
\ta(
\t\tt.apply(
\t\t\t{
\t\t\t\ttoString: function () {
\t\t\t\t\treturn \"abc\";
\t\t\t\t}
\t\t\t},
\t\t\t[2]
\t\t),
\t\t0x63
\t);
};
", "node_modules/es5-ext/test/string/#/code-point-at/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/string/#/code-point-at/shim.js");
    }
}
