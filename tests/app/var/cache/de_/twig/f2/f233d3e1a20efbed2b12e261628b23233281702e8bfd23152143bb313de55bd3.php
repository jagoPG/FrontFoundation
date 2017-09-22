<?php

/* node_modules/es5-ext/test/string/#/at.js */
class __TwigTemplate_d1c006cee3e2f8918adaf3d024eef8db0dbbf166b37e7a4fa5eef0b778ffc63f extends Twig_Template
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
        $__internal_0a8eba57885b60f5ffa6721faf1e0ed673b5e0b66f874b1686f63e719c29c260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a8eba57885b60f5ffa6721faf1e0ed673b5e0b66f874b1686f63e719c29c260->enter($__internal_0a8eba57885b60f5ffa6721faf1e0ed673b5e0b66f874b1686f63e719c29c260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/string/#/at.js"));

        // line 1
        echo "/* eslint no-useless-call: \"off\" */
// See tests at https://github.com/mathiasbynens/String.prototype.at

\"use strict\";

module.exports = function (t, a) {
\ta(t.length, 1, \"Length\");

\ta.h1(\"BMP\");
\ta(t.call(\"abc\\uD834\\uDF06def\", -Infinity), \"\", \"-Infinity\");
\ta(t.call(\"abc\\uD834\\uDF06def\", -1), \"\", \"-1\");
\ta(t.call(\"abc\\uD834\\uDF06def\", -0), \"a\", \"-0\");
\ta(t.call(\"abc\\uD834\\uDF06def\", +0), \"a\", \"+0\");
\ta(t.call(\"abc\\uD834\\uDF06def\", 1), \"b\", \"1\");
\ta(t.call(\"abc\\uD834\\uDF06def\", 3), \"\\uD834\\uDF06\", \"3\");
\ta(t.call(\"abc\\uD834\\uDF06def\", 4), \"\\uDF06\", \"4\");
\ta(t.call(\"abc\\uD834\\uDF06def\", 5), \"d\", \"5\");
\ta(t.call(\"abc\\uD834\\uDF06def\", 42), \"\", \"42\");
\ta(t.call(\"abc\\uD834\\uDF06def\", Number(Infinity)), \"\", \"+Infinity\");
\ta(t.call(\"abc\\uD834\\uDF06def\", null), \"a\", \"null\");
\ta(t.call(\"abc\\uD834\\uDF06def\", undefined), \"a\", \"undefined\");
\ta(t.call(\"abc\\uD834\\uDF06def\"), \"a\", \"No argument\");
\ta(t.call(\"abc\\uD834\\uDF06def\", false), \"a\", \"false\");
\ta(t.call(\"abc\\uD834\\uDF06def\", NaN), \"a\", \"NaN\");
\ta(t.call(\"abc\\uD834\\uDF06def\", \"\"), \"a\", \"Empty string\");
\ta(t.call(\"abc\\uD834\\uDF06def\", \"_\"), \"a\", \"_\");
\ta(t.call(\"abc\\uD834\\uDF06def\", \"1\"), \"b\", \"'1'\");
\ta(t.call(\"abc\\uD834\\uDF06def\", []), \"a\", \"[]\");
\ta(t.call(\"abc\\uD834\\uDF06def\", {}), \"a\", \"{}\");
\ta(t.call(\"abc\\uD834\\uDF06def\", -0.9), \"a\", \"-0.9\");
\ta(t.call(\"abc\\uD834\\uDF06def\", 1.9), \"b\", \"1.9\");
\ta(t.call(\"abc\\uD834\\uDF06def\", 7.9), \"f\", \"7.9\");
\ta(t.call(\"abc\\uD834\\uDF06def\", Math.pow(2, 32)), \"\", \"Big number\");

\ta.h1(\"Astral symbol\");
\ta(t.call(\"\\uD834\\uDF06def\", -Infinity), \"\", \"-Infinity\");
\ta(t.call(\"\\uD834\\uDF06def\", -1), \"\", \"-1\");
\ta(t.call(\"\\uD834\\uDF06def\", -0), \"\\uD834\\uDF06\", \"-0\");
\ta(t.call(\"\\uD834\\uDF06def\", +0), \"\\uD834\\uDF06\", \"+0\");
\ta(t.call(\"\\uD834\\uDF06def\", 1), \"\\uDF06\", \"1\");
\ta(t.call(\"\\uD834\\uDF06def\", 2), \"d\", \"2\");
\ta(t.call(\"\\uD834\\uDF06def\", 3), \"e\", \"3\");
\ta(t.call(\"\\uD834\\uDF06def\", 4), \"f\", \"4\");
\ta(t.call(\"\\uD834\\uDF06def\", 42), \"\", \"42\");
\ta(t.call(\"\\uD834\\uDF06def\", Number(Infinity)), \"\", \"+Infinity\");
\ta(t.call(\"\\uD834\\uDF06def\", null), \"\\uD834\\uDF06\", \"null\");
\ta(t.call(\"\\uD834\\uDF06def\", undefined), \"\\uD834\\uDF06\", \"undefined\");
\ta(t.call(\"\\uD834\\uDF06def\"), \"\\uD834\\uDF06\", \"No arguments\");
\ta(t.call(\"\\uD834\\uDF06def\", false), \"\\uD834\\uDF06\", \"false\");
\ta(t.call(\"\\uD834\\uDF06def\", NaN), \"\\uD834\\uDF06\", \"NaN\");
\ta(t.call(\"\\uD834\\uDF06def\", \"\"), \"\\uD834\\uDF06\", \"Empty string\");
\ta(t.call(\"\\uD834\\uDF06def\", \"_\"), \"\\uD834\\uDF06\", \"_\");
\ta(t.call(\"\\uD834\\uDF06def\", \"1\"), \"\\uDF06\", \"'1'\");

\ta.h1(\"Lone high surrogates\");
\ta(t.call(\"\\uD834abc\", -Infinity), \"\", \"-Infinity\");
\ta(t.call(\"\\uD834abc\", -1), \"\", \"-1\");
\ta(t.call(\"\\uD834abc\", -0), \"\\uD834\", \"-0\");
\ta(t.call(\"\\uD834abc\", +0), \"\\uD834\", \"+0\");
\ta(t.call(\"\\uD834abc\", 1), \"a\", \"1\");
\ta(t.call(\"\\uD834abc\", 42), \"\", \"42\");
\ta(t.call(\"\\uD834abc\", Number(Infinity)), \"\", \"Infinity\");
\ta(t.call(\"\\uD834abc\", null), \"\\uD834\", \"null\");
\ta(t.call(\"\\uD834abc\", undefined), \"\\uD834\", \"undefined\");
\ta(t.call(\"\\uD834abc\"), \"\\uD834\", \"No arguments\");
\ta(t.call(\"\\uD834abc\", false), \"\\uD834\", \"false\");
\ta(t.call(\"\\uD834abc\", NaN), \"\\uD834\", \"NaN\");
\ta(t.call(\"\\uD834abc\", \"\"), \"\\uD834\", \"Empty string\");
\ta(t.call(\"\\uD834abc\", \"_\"), \"\\uD834\", \"_\");
\ta(t.call(\"\\uD834abc\", \"1\"), \"a\", \"'a'\");

\ta.h1(\"Lone low surrogates\");
\ta(t.call(\"\\uDF06abc\", -Infinity), \"\", \"-Infinity\");
\ta(t.call(\"\\uDF06abc\", -1), \"\", \"-1\");
\ta(t.call(\"\\uDF06abc\", -0), \"\\uDF06\", \"-0\");
\ta(t.call(\"\\uDF06abc\", +0), \"\\uDF06\", \"+0\");
\ta(t.call(\"\\uDF06abc\", 1), \"a\", \"1\");
\ta(t.call(\"\\uDF06abc\", 42), \"\", \"42\");
\ta(t.call(\"\\uDF06abc\", Number(Infinity)), \"\", \"+Infinity\");
\ta(t.call(\"\\uDF06abc\", null), \"\\uDF06\", \"null\");
\ta(t.call(\"\\uDF06abc\", undefined), \"\\uDF06\", \"undefined\");
\ta(t.call(\"\\uDF06abc\"), \"\\uDF06\", \"No arguments\");
\ta(t.call(\"\\uDF06abc\", false), \"\\uDF06\", \"false\");
\ta(t.call(\"\\uDF06abc\", NaN), \"\\uDF06\", \"NaN\");
\ta(t.call(\"\\uDF06abc\", \"\"), \"\\uDF06\", \"Empty string\");
\ta(t.call(\"\\uDF06abc\", \"_\"), \"\\uDF06\", \"_\");
\ta(t.call(\"\\uDF06abc\", \"1\"), \"a\", \"'1'\");

\ta.h1(\"Context\");
\ta.throws(
\t\tfunction () {
\t\t\tt.call(undefined);
\t\t},
\t\tTypeError,
\t\t\"Undefined\"
\t);
\ta.throws(
\t\tfunction () {
\t\t\tt.call(undefined, 4);
\t\t},
\t\tTypeError,
\t\t\"Undefined + argument\"
\t);
\ta.throws(
\t\tfunction () {
\t\t\tt.call(null);
\t\t},
\t\tTypeError,
\t\t\"Null\"
\t);
\ta.throws(
\t\tfunction () {
\t\t\tt.call(null, 4);
\t\t},
\t\tTypeError,
\t\t\"Null + argument\"
\t);
\ta(t.call(42, 0), \"4\", \"Number #1\");
\ta(t.call(42, 1), \"2\", \"Number #2\");
\ta(
\t\tt.call(
\t\t\t{
\t\t\t\ttoString: function () {
\t\t\t\t\treturn \"abc\";
\t\t\t\t}
\t\t\t},
\t\t\t2
\t\t),
\t\t\"c\",
\t\t\"Object\"
\t);
};
";
        
        $__internal_0a8eba57885b60f5ffa6721faf1e0ed673b5e0b66f874b1686f63e719c29c260->leave($__internal_0a8eba57885b60f5ffa6721faf1e0ed673b5e0b66f874b1686f63e719c29c260_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/string/#/at.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/* eslint no-useless-call: \"off\" */
// See tests at https://github.com/mathiasbynens/String.prototype.at

\"use strict\";

module.exports = function (t, a) {
\ta(t.length, 1, \"Length\");

\ta.h1(\"BMP\");
\ta(t.call(\"abc\\uD834\\uDF06def\", -Infinity), \"\", \"-Infinity\");
\ta(t.call(\"abc\\uD834\\uDF06def\", -1), \"\", \"-1\");
\ta(t.call(\"abc\\uD834\\uDF06def\", -0), \"a\", \"-0\");
\ta(t.call(\"abc\\uD834\\uDF06def\", +0), \"a\", \"+0\");
\ta(t.call(\"abc\\uD834\\uDF06def\", 1), \"b\", \"1\");
\ta(t.call(\"abc\\uD834\\uDF06def\", 3), \"\\uD834\\uDF06\", \"3\");
\ta(t.call(\"abc\\uD834\\uDF06def\", 4), \"\\uDF06\", \"4\");
\ta(t.call(\"abc\\uD834\\uDF06def\", 5), \"d\", \"5\");
\ta(t.call(\"abc\\uD834\\uDF06def\", 42), \"\", \"42\");
\ta(t.call(\"abc\\uD834\\uDF06def\", Number(Infinity)), \"\", \"+Infinity\");
\ta(t.call(\"abc\\uD834\\uDF06def\", null), \"a\", \"null\");
\ta(t.call(\"abc\\uD834\\uDF06def\", undefined), \"a\", \"undefined\");
\ta(t.call(\"abc\\uD834\\uDF06def\"), \"a\", \"No argument\");
\ta(t.call(\"abc\\uD834\\uDF06def\", false), \"a\", \"false\");
\ta(t.call(\"abc\\uD834\\uDF06def\", NaN), \"a\", \"NaN\");
\ta(t.call(\"abc\\uD834\\uDF06def\", \"\"), \"a\", \"Empty string\");
\ta(t.call(\"abc\\uD834\\uDF06def\", \"_\"), \"a\", \"_\");
\ta(t.call(\"abc\\uD834\\uDF06def\", \"1\"), \"b\", \"'1'\");
\ta(t.call(\"abc\\uD834\\uDF06def\", []), \"a\", \"[]\");
\ta(t.call(\"abc\\uD834\\uDF06def\", {}), \"a\", \"{}\");
\ta(t.call(\"abc\\uD834\\uDF06def\", -0.9), \"a\", \"-0.9\");
\ta(t.call(\"abc\\uD834\\uDF06def\", 1.9), \"b\", \"1.9\");
\ta(t.call(\"abc\\uD834\\uDF06def\", 7.9), \"f\", \"7.9\");
\ta(t.call(\"abc\\uD834\\uDF06def\", Math.pow(2, 32)), \"\", \"Big number\");

\ta.h1(\"Astral symbol\");
\ta(t.call(\"\\uD834\\uDF06def\", -Infinity), \"\", \"-Infinity\");
\ta(t.call(\"\\uD834\\uDF06def\", -1), \"\", \"-1\");
\ta(t.call(\"\\uD834\\uDF06def\", -0), \"\\uD834\\uDF06\", \"-0\");
\ta(t.call(\"\\uD834\\uDF06def\", +0), \"\\uD834\\uDF06\", \"+0\");
\ta(t.call(\"\\uD834\\uDF06def\", 1), \"\\uDF06\", \"1\");
\ta(t.call(\"\\uD834\\uDF06def\", 2), \"d\", \"2\");
\ta(t.call(\"\\uD834\\uDF06def\", 3), \"e\", \"3\");
\ta(t.call(\"\\uD834\\uDF06def\", 4), \"f\", \"4\");
\ta(t.call(\"\\uD834\\uDF06def\", 42), \"\", \"42\");
\ta(t.call(\"\\uD834\\uDF06def\", Number(Infinity)), \"\", \"+Infinity\");
\ta(t.call(\"\\uD834\\uDF06def\", null), \"\\uD834\\uDF06\", \"null\");
\ta(t.call(\"\\uD834\\uDF06def\", undefined), \"\\uD834\\uDF06\", \"undefined\");
\ta(t.call(\"\\uD834\\uDF06def\"), \"\\uD834\\uDF06\", \"No arguments\");
\ta(t.call(\"\\uD834\\uDF06def\", false), \"\\uD834\\uDF06\", \"false\");
\ta(t.call(\"\\uD834\\uDF06def\", NaN), \"\\uD834\\uDF06\", \"NaN\");
\ta(t.call(\"\\uD834\\uDF06def\", \"\"), \"\\uD834\\uDF06\", \"Empty string\");
\ta(t.call(\"\\uD834\\uDF06def\", \"_\"), \"\\uD834\\uDF06\", \"_\");
\ta(t.call(\"\\uD834\\uDF06def\", \"1\"), \"\\uDF06\", \"'1'\");

\ta.h1(\"Lone high surrogates\");
\ta(t.call(\"\\uD834abc\", -Infinity), \"\", \"-Infinity\");
\ta(t.call(\"\\uD834abc\", -1), \"\", \"-1\");
\ta(t.call(\"\\uD834abc\", -0), \"\\uD834\", \"-0\");
\ta(t.call(\"\\uD834abc\", +0), \"\\uD834\", \"+0\");
\ta(t.call(\"\\uD834abc\", 1), \"a\", \"1\");
\ta(t.call(\"\\uD834abc\", 42), \"\", \"42\");
\ta(t.call(\"\\uD834abc\", Number(Infinity)), \"\", \"Infinity\");
\ta(t.call(\"\\uD834abc\", null), \"\\uD834\", \"null\");
\ta(t.call(\"\\uD834abc\", undefined), \"\\uD834\", \"undefined\");
\ta(t.call(\"\\uD834abc\"), \"\\uD834\", \"No arguments\");
\ta(t.call(\"\\uD834abc\", false), \"\\uD834\", \"false\");
\ta(t.call(\"\\uD834abc\", NaN), \"\\uD834\", \"NaN\");
\ta(t.call(\"\\uD834abc\", \"\"), \"\\uD834\", \"Empty string\");
\ta(t.call(\"\\uD834abc\", \"_\"), \"\\uD834\", \"_\");
\ta(t.call(\"\\uD834abc\", \"1\"), \"a\", \"'a'\");

\ta.h1(\"Lone low surrogates\");
\ta(t.call(\"\\uDF06abc\", -Infinity), \"\", \"-Infinity\");
\ta(t.call(\"\\uDF06abc\", -1), \"\", \"-1\");
\ta(t.call(\"\\uDF06abc\", -0), \"\\uDF06\", \"-0\");
\ta(t.call(\"\\uDF06abc\", +0), \"\\uDF06\", \"+0\");
\ta(t.call(\"\\uDF06abc\", 1), \"a\", \"1\");
\ta(t.call(\"\\uDF06abc\", 42), \"\", \"42\");
\ta(t.call(\"\\uDF06abc\", Number(Infinity)), \"\", \"+Infinity\");
\ta(t.call(\"\\uDF06abc\", null), \"\\uDF06\", \"null\");
\ta(t.call(\"\\uDF06abc\", undefined), \"\\uDF06\", \"undefined\");
\ta(t.call(\"\\uDF06abc\"), \"\\uDF06\", \"No arguments\");
\ta(t.call(\"\\uDF06abc\", false), \"\\uDF06\", \"false\");
\ta(t.call(\"\\uDF06abc\", NaN), \"\\uDF06\", \"NaN\");
\ta(t.call(\"\\uDF06abc\", \"\"), \"\\uDF06\", \"Empty string\");
\ta(t.call(\"\\uDF06abc\", \"_\"), \"\\uDF06\", \"_\");
\ta(t.call(\"\\uDF06abc\", \"1\"), \"a\", \"'1'\");

\ta.h1(\"Context\");
\ta.throws(
\t\tfunction () {
\t\t\tt.call(undefined);
\t\t},
\t\tTypeError,
\t\t\"Undefined\"
\t);
\ta.throws(
\t\tfunction () {
\t\t\tt.call(undefined, 4);
\t\t},
\t\tTypeError,
\t\t\"Undefined + argument\"
\t);
\ta.throws(
\t\tfunction () {
\t\t\tt.call(null);
\t\t},
\t\tTypeError,
\t\t\"Null\"
\t);
\ta.throws(
\t\tfunction () {
\t\t\tt.call(null, 4);
\t\t},
\t\tTypeError,
\t\t\"Null + argument\"
\t);
\ta(t.call(42, 0), \"4\", \"Number #1\");
\ta(t.call(42, 1), \"2\", \"Number #2\");
\ta(
\t\tt.call(
\t\t\t{
\t\t\t\ttoString: function () {
\t\t\t\t\treturn \"abc\";
\t\t\t\t}
\t\t\t},
\t\t\t2
\t\t),
\t\t\"c\",
\t\t\"Object\"
\t);
};
", "node_modules/es5-ext/test/string/#/at.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/string/#/at.js");
    }
}
