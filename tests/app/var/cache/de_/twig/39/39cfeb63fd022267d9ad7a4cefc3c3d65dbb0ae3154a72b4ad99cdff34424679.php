<?php

/* node_modules/es5-ext/test/string/from-code-point/shim.js */
class __TwigTemplate_3828b56e085455094e64256ab796984623fdc0edbcee01d76d9fb99ac9632207 extends Twig_Template
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
        $__internal_d746845705cbadaf4e7a7fce3a98fab1d6263db0305b89dae74f088d4cf454ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d746845705cbadaf4e7a7fce3a98fab1d6263db0305b89dae74f088d4cf454ee->enter($__internal_d746845705cbadaf4e7a7fce3a98fab1d6263db0305b89dae74f088d4cf454ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/string/from-code-point/shim.js"));

        // line 1
        echo "// Taken from: https://github.com/mathiasbynens/String.fromCodePoint/blob/master
//             /tests/tests.js

\"use strict\";

var pow = Math.pow;

module.exports = function (t, a) {
\tvar counter, result;

\ta(t.length, 1, \"Length\");
\ta(String.propertyIsEnumerable(\"fromCodePoint\"), false, \"Not enumerable\");

\ta(t(\"\"), \"\\0\", \"Empty string\");
\ta(t(), \"\", \"No arguments\");
\ta(t(-0), \"\\0\", \"-0\");
\ta(t(0), \"\\0\", \"0\");
\ta(t(0x1D306), \"\\uD834\\uDF06\", \"Unicode\");
\ta(t(0x1D306, 0x61, 0x1D307), \"\\uD834\\uDF06a\\uD834\\uDF07\", \"Complex unicode\");
\ta(t(0x61, 0x62, 0x1D307), \"ab\\uD834\\uDF07\", \"Complex\");
\ta(t(false), \"\\0\", \"false\");
\ta(t(null), \"\\0\", \"null\");

\ta.throws(function () {
 t(\"_\");
}, RangeError, \"_\");
\ta.throws(function () {
 t(Infinity);
}, RangeError, \"Infinity\");
\ta.throws(function () {
 t(-Infinity);
}, RangeError, \"-Infinity\");
\ta.throws(function () {
 t(-1);
}, RangeError, \"-1\");
\ta.throws(function () {
 t(0x10FFFF + 1);
}, RangeError, \"Range error #1\");
\ta.throws(function () {
 t(3.14);
}, RangeError, \"Range error #2\");
\ta.throws(function () {
 t(3e-2);
}, RangeError, \"Range error #3\");
\ta.throws(function () {
 t(-Infinity);
}, RangeError, \"Range error #4\");
\ta.throws(function () {
 t(Number(Infinity));
}, RangeError, \"Range error #5\");
\ta.throws(function () {
 t(NaN);
}, RangeError, \"Range error #6\");
\ta.throws(function () {
 t(undefined);
}, RangeError, \"Range error #7\");
\ta.throws(function () {
 t({});
}, RangeError, \"Range error #8\");
\ta.throws(function () {
 t(/re/);
}, RangeError, \"Range error #9\");

\tcounter = pow(2, 15) * 3 / 2;
\tresult = [];
\twhile (--counter >= 0) result.push(0); // One code unit per symbol
\tt.apply(null, result); // Must not throw

\tcounter = pow(2, 15) * 3 / 2;
\tresult = [];
\twhile (--counter >= 0) result.push(0xFFFF + 1); // Two code units per symbol
\tt.apply(null, result); // Must not throw
};
";
        
        $__internal_d746845705cbadaf4e7a7fce3a98fab1d6263db0305b89dae74f088d4cf454ee->leave($__internal_d746845705cbadaf4e7a7fce3a98fab1d6263db0305b89dae74f088d4cf454ee_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/string/from-code-point/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Taken from: https://github.com/mathiasbynens/String.fromCodePoint/blob/master
//             /tests/tests.js

\"use strict\";

var pow = Math.pow;

module.exports = function (t, a) {
\tvar counter, result;

\ta(t.length, 1, \"Length\");
\ta(String.propertyIsEnumerable(\"fromCodePoint\"), false, \"Not enumerable\");

\ta(t(\"\"), \"\\0\", \"Empty string\");
\ta(t(), \"\", \"No arguments\");
\ta(t(-0), \"\\0\", \"-0\");
\ta(t(0), \"\\0\", \"0\");
\ta(t(0x1D306), \"\\uD834\\uDF06\", \"Unicode\");
\ta(t(0x1D306, 0x61, 0x1D307), \"\\uD834\\uDF06a\\uD834\\uDF07\", \"Complex unicode\");
\ta(t(0x61, 0x62, 0x1D307), \"ab\\uD834\\uDF07\", \"Complex\");
\ta(t(false), \"\\0\", \"false\");
\ta(t(null), \"\\0\", \"null\");

\ta.throws(function () {
 t(\"_\");
}, RangeError, \"_\");
\ta.throws(function () {
 t(Infinity);
}, RangeError, \"Infinity\");
\ta.throws(function () {
 t(-Infinity);
}, RangeError, \"-Infinity\");
\ta.throws(function () {
 t(-1);
}, RangeError, \"-1\");
\ta.throws(function () {
 t(0x10FFFF + 1);
}, RangeError, \"Range error #1\");
\ta.throws(function () {
 t(3.14);
}, RangeError, \"Range error #2\");
\ta.throws(function () {
 t(3e-2);
}, RangeError, \"Range error #3\");
\ta.throws(function () {
 t(-Infinity);
}, RangeError, \"Range error #4\");
\ta.throws(function () {
 t(Number(Infinity));
}, RangeError, \"Range error #5\");
\ta.throws(function () {
 t(NaN);
}, RangeError, \"Range error #6\");
\ta.throws(function () {
 t(undefined);
}, RangeError, \"Range error #7\");
\ta.throws(function () {
 t({});
}, RangeError, \"Range error #8\");
\ta.throws(function () {
 t(/re/);
}, RangeError, \"Range error #9\");

\tcounter = pow(2, 15) * 3 / 2;
\tresult = [];
\twhile (--counter >= 0) result.push(0); // One code unit per symbol
\tt.apply(null, result); // Must not throw

\tcounter = pow(2, 15) * 3 / 2;
\tresult = [];
\twhile (--counter >= 0) result.push(0xFFFF + 1); // Two code units per symbol
\tt.apply(null, result); // Must not throw
};
", "node_modules/es5-ext/test/string/from-code-point/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/string/from-code-point/shim.js");
    }
}
