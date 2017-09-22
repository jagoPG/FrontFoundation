<?php

/* node_modules/es5-ext/test/object/ensure-array.js */
class __TwigTemplate_eed0dcfc7b6c478c3245eba9eaa49adf231b8c4a5cc9a55c07d2e5f3e359da7b extends Twig_Template
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
        $__internal_a39b59a8402cfb6387fed1515fe81ef30b33bf9d3d0341b8444db235476511c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a39b59a8402cfb6387fed1515fe81ef30b33bf9d3d0341b8444db235476511c9->enter($__internal_a39b59a8402cfb6387fed1515fe81ef30b33bf9d3d0341b8444db235476511c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/ensure-array.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar arr = [];
\ta(t(arr), arr, \"Array\");
\ta(t(\"\"), \"\", \"String\");
\tvar args = (function () {
\t\treturn arguments;
\t}());
\ta(t(args), args, \"Arguments\");
\tvar arrayLike = { length: 0 };
\ta(t(arrayLike), arrayLike, \"Array like\");
\ta.throws(
\t\tfunction () {
\t\t\tt(function () {});
\t\t},
\t\tTypeError,
\t\t\"Function\"
\t);
\ta.throws(
\t\tfunction () {
\t\t\tt({});
\t\t},
\t\tTypeError,
\t\t\"Plain object\"
\t);
\ta.throws(
\t\tfunction () {
\t\t\tt(/raz/);
\t\t},
\t\tTypeError,
\t\t\"Regexp\"
\t);
\ta.throws(
\t\tfunction () {
\t\t\tt();
\t\t},
\t\tTypeError,
\t\t\"No argument\"
\t);
\ta.throws(
\t\tfunction () {
\t\t\tt(null);
\t\t},
\t\tTypeError,
\t\t\"Null\"
\t);
\ta.throws(
\t\tfunction () {
\t\t\tt(undefined);
\t\t},
\t\tTypeError,
\t\t\"Undefined\"
\t);
};
";
        
        $__internal_a39b59a8402cfb6387fed1515fe81ef30b33bf9d3d0341b8444db235476511c9->leave($__internal_a39b59a8402cfb6387fed1515fe81ef30b33bf9d3d0341b8444db235476511c9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/ensure-array.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar arr = [];
\ta(t(arr), arr, \"Array\");
\ta(t(\"\"), \"\", \"String\");
\tvar args = (function () {
\t\treturn arguments;
\t}());
\ta(t(args), args, \"Arguments\");
\tvar arrayLike = { length: 0 };
\ta(t(arrayLike), arrayLike, \"Array like\");
\ta.throws(
\t\tfunction () {
\t\t\tt(function () {});
\t\t},
\t\tTypeError,
\t\t\"Function\"
\t);
\ta.throws(
\t\tfunction () {
\t\t\tt({});
\t\t},
\t\tTypeError,
\t\t\"Plain object\"
\t);
\ta.throws(
\t\tfunction () {
\t\t\tt(/raz/);
\t\t},
\t\tTypeError,
\t\t\"Regexp\"
\t);
\ta.throws(
\t\tfunction () {
\t\t\tt();
\t\t},
\t\tTypeError,
\t\t\"No argument\"
\t);
\ta.throws(
\t\tfunction () {
\t\t\tt(null);
\t\t},
\t\tTypeError,
\t\t\"Null\"
\t);
\ta.throws(
\t\tfunction () {
\t\t\tt(undefined);
\t\t},
\t\tTypeError,
\t\t\"Undefined\"
\t);
};
", "node_modules/es5-ext/test/object/ensure-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/ensure-array.js");
    }
}
