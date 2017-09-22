<?php

/* node_modules/es5-ext/test/array/from/shim.js */
class __TwigTemplate_7f60c562d7606f060dc5d0fe6047a86380bf82a58a1c751b158feb74b53d17c9 extends Twig_Template
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
        $__internal_c73b7224fcb11b08716b776018dcd521092ebb61a8b89719b6f2cd68d10b69fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c73b7224fcb11b08716b776018dcd521092ebb61a8b89719b6f2cd68d10b69fb->enter($__internal_c73b7224fcb11b08716b776018dcd521092ebb61a8b89719b6f2cd68d10b69fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/from/shim.js"));

        // line 1
        echo "// Some tests taken from: https://github.com/mathiasbynens/Array.from/blob/master/tests/tests.js

\"use strict\";

module.exports = function (t, a) {
\tvar o = [1, 2, 3], MyType;
\ta.not(t(o), o, \"Array\");
\ta.deep(t(o), o, \"Array: same content\");
\ta.deep(t(\"12r3v\"), [\"1\", \"2\", \"r\", \"3\", \"v\"], \"String\");
\ta.deep(
\t\tt(
\t\t\t(function () {
\t\t\t\treturn arguments;
\t\t\t})(3, o, \"raz\")
\t\t),
\t\t[3, o, \"raz\"],
\t\t\"Arguments\"
\t);
\ta.deep(
\t\tt(
\t\t\t(function () {
\t\t\t\treturn arguments;
\t\t\t})(3)
\t\t),
\t\t[3],
\t\t\"Arguments with one numeric value\"
\t);

\ta.deep(t({ 0: \"raz\", 1: \"dwa\", length: 2 }), [\"raz\", \"dwa\"], \"Other\");

\ta.deep(
\t\tt(
\t\t\to,
\t\t\tfunction (val) {
\t\t\t\treturn (val + 2) * 10;
\t\t\t},
\t\t\t10
\t\t),
\t\t[30, 40, 50],
\t\t\"Mapping\"
\t);

\ta.throws(
\t\tfunction () {
\t\t\tt();
\t\t},
\t\tTypeError,
\t\t\"Undefined\"
\t);
\ta.deep(t(3), [], \"Primitive\");

\ta(t.length, 1, \"Length\");
\ta.deep(t({ length: 0 }), [], \"No values Array-like\");
\ta.deep(t({ length: -1 }), [], \"Invalid length Array-like\");
\ta.deep(t({ length: -Infinity }), [], \"Invalid length Array-like #2\");
\ta.throws(
\t\tfunction () {
\t\t\tt(undefined);
\t\t},
\t\tTypeError,
\t\t\"Undefined\"
\t);
\ta.throws(
\t\tfunction () {
\t\t\tt(null);
\t\t},
\t\tTypeError,
\t\t\"Null\"
\t);
\ta.deep(t(false), [], \"Boolean\");
\ta.deep(t(-Infinity), [], \"Inifity\");
\ta.deep(t(-0), [], \"-0\");
\ta.deep(t(+0), [], \"+0\");
\ta.deep(t(1), [], \"1\");
\ta.deep(t(Number(Infinity)), [], \"+Infinity\");
\ta.deep(t({}), [], \"Plain object\");
\ta.deep(t({ length: 1 }), [undefined], \"Sparse array-like\");
\ta.deep(
\t\tt({ 0: \"a\", 1: \"b\", length: 2 }, function (x) {
\t\t\treturn x + x;
\t\t}),
\t\t[\"aa\", \"bb\"],
\t\t\"Map\"
\t);
\ta.deep(
\t\tt(
\t\t\t{ 0: \"a\", 1: \"b\", length: 2 },
\t\t\tfunction () {
\t\t\t\treturn String(this);
\t\t\t},
\t\t\tundefined
\t\t),
\t\t[\"undefined\", \"undefined\"],
\t\t\"Map context\"
\t);
\ta.deep(
\t\tt(
\t\t\t{ 0: \"a\", 1: \"b\", length: 2 },
\t\t\tfunction () {
\t\t\t\treturn String(this);
\t\t\t},
\t\t\t\"x\"
\t\t),
\t\t[\"x\", \"x\"],
\t\t\"Map primitive context\"
\t);
\ta.throws(
\t\tfunction () {
\t\t\tt({}, \"foo\", \"x\");
\t\t},
\t\tTypeError,
\t\t\"Non callable for map\"
\t);

\ta.deep(t({ length: 1, 0: \"a\" }), [\"a\"], \"Null context\");

\ta(t({ __proto__: { 0: \"abc\", length: 1 } })[0], \"abc\", \"Values on prototype\");

\ta.throws(
\t\tfunction () {
\t\t\tt.call(function () {
\t\t\t\treturn Object.freeze({});
\t\t\t}, {});
\t\t},
\t\tTypeError,
\t\t\"Contructor producing freezed objects\"
\t);

\t// Ensure no setters are called for the indexes
\t// Ensure no setters are called for the indexes
\tMyType = function () {};
\tObject.defineProperty(MyType.prototype, \"0\", {
\t\tset: function (x) {
\t\t\tthrow new Error(\"Setter called: \" + x);
\t\t}
\t});
\ta.deep(t.call(MyType, { 0: \"abc\", length: 1 }), { 0: \"abc\", length: 1 }, \"Defined not set\");
};
";
        
        $__internal_c73b7224fcb11b08716b776018dcd521092ebb61a8b89719b6f2cd68d10b69fb->leave($__internal_c73b7224fcb11b08716b776018dcd521092ebb61a8b89719b6f2cd68d10b69fb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/from/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Some tests taken from: https://github.com/mathiasbynens/Array.from/blob/master/tests/tests.js

\"use strict\";

module.exports = function (t, a) {
\tvar o = [1, 2, 3], MyType;
\ta.not(t(o), o, \"Array\");
\ta.deep(t(o), o, \"Array: same content\");
\ta.deep(t(\"12r3v\"), [\"1\", \"2\", \"r\", \"3\", \"v\"], \"String\");
\ta.deep(
\t\tt(
\t\t\t(function () {
\t\t\t\treturn arguments;
\t\t\t})(3, o, \"raz\")
\t\t),
\t\t[3, o, \"raz\"],
\t\t\"Arguments\"
\t);
\ta.deep(
\t\tt(
\t\t\t(function () {
\t\t\t\treturn arguments;
\t\t\t})(3)
\t\t),
\t\t[3],
\t\t\"Arguments with one numeric value\"
\t);

\ta.deep(t({ 0: \"raz\", 1: \"dwa\", length: 2 }), [\"raz\", \"dwa\"], \"Other\");

\ta.deep(
\t\tt(
\t\t\to,
\t\t\tfunction (val) {
\t\t\t\treturn (val + 2) * 10;
\t\t\t},
\t\t\t10
\t\t),
\t\t[30, 40, 50],
\t\t\"Mapping\"
\t);

\ta.throws(
\t\tfunction () {
\t\t\tt();
\t\t},
\t\tTypeError,
\t\t\"Undefined\"
\t);
\ta.deep(t(3), [], \"Primitive\");

\ta(t.length, 1, \"Length\");
\ta.deep(t({ length: 0 }), [], \"No values Array-like\");
\ta.deep(t({ length: -1 }), [], \"Invalid length Array-like\");
\ta.deep(t({ length: -Infinity }), [], \"Invalid length Array-like #2\");
\ta.throws(
\t\tfunction () {
\t\t\tt(undefined);
\t\t},
\t\tTypeError,
\t\t\"Undefined\"
\t);
\ta.throws(
\t\tfunction () {
\t\t\tt(null);
\t\t},
\t\tTypeError,
\t\t\"Null\"
\t);
\ta.deep(t(false), [], \"Boolean\");
\ta.deep(t(-Infinity), [], \"Inifity\");
\ta.deep(t(-0), [], \"-0\");
\ta.deep(t(+0), [], \"+0\");
\ta.deep(t(1), [], \"1\");
\ta.deep(t(Number(Infinity)), [], \"+Infinity\");
\ta.deep(t({}), [], \"Plain object\");
\ta.deep(t({ length: 1 }), [undefined], \"Sparse array-like\");
\ta.deep(
\t\tt({ 0: \"a\", 1: \"b\", length: 2 }, function (x) {
\t\t\treturn x + x;
\t\t}),
\t\t[\"aa\", \"bb\"],
\t\t\"Map\"
\t);
\ta.deep(
\t\tt(
\t\t\t{ 0: \"a\", 1: \"b\", length: 2 },
\t\t\tfunction () {
\t\t\t\treturn String(this);
\t\t\t},
\t\t\tundefined
\t\t),
\t\t[\"undefined\", \"undefined\"],
\t\t\"Map context\"
\t);
\ta.deep(
\t\tt(
\t\t\t{ 0: \"a\", 1: \"b\", length: 2 },
\t\t\tfunction () {
\t\t\t\treturn String(this);
\t\t\t},
\t\t\t\"x\"
\t\t),
\t\t[\"x\", \"x\"],
\t\t\"Map primitive context\"
\t);
\ta.throws(
\t\tfunction () {
\t\t\tt({}, \"foo\", \"x\");
\t\t},
\t\tTypeError,
\t\t\"Non callable for map\"
\t);

\ta.deep(t({ length: 1, 0: \"a\" }), [\"a\"], \"Null context\");

\ta(t({ __proto__: { 0: \"abc\", length: 1 } })[0], \"abc\", \"Values on prototype\");

\ta.throws(
\t\tfunction () {
\t\t\tt.call(function () {
\t\t\t\treturn Object.freeze({});
\t\t\t}, {});
\t\t},
\t\tTypeError,
\t\t\"Contructor producing freezed objects\"
\t);

\t// Ensure no setters are called for the indexes
\t// Ensure no setters are called for the indexes
\tMyType = function () {};
\tObject.defineProperty(MyType.prototype, \"0\", {
\t\tset: function (x) {
\t\t\tthrow new Error(\"Setter called: \" + x);
\t\t}
\t});
\ta.deep(t.call(MyType, { 0: \"abc\", length: 1 }), { 0: \"abc\", length: 1 }, \"Defined not set\");
};
", "node_modules/es5-ext/test/array/from/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/from/shim.js");
    }
}
