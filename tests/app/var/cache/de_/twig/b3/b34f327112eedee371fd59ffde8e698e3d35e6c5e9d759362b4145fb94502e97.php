<?php

/* node_modules/es5-ext/object/compare.js */
class __TwigTemplate_d63e458b14f41e8f44493128f2de3eb4795e0b8d65818ea376803eb28b6257a3 extends Twig_Template
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
        $__internal_e80a35664fd80a0022595e1062d5f1245b20eee8ff04326a7f9224f5ca757f3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e80a35664fd80a0022595e1062d5f1245b20eee8ff04326a7f9224f5ca757f3d->enter($__internal_e80a35664fd80a0022595e1062d5f1245b20eee8ff04326a7f9224f5ca757f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/compare.js"));

        // line 1
        echo "\"use strict\";

var strCompare = require(\"../string/#/case-insensitive-compare\")
  , isObject   = require(\"./is-object\")
  , isValue    = require(\"./is-value\")
  , numIsNaN   = require(\"../number/is-nan\")
  , resolve
  , typeMap;

typeMap = {
\tundefined: 0,
\tobject: 1,
\tboolean: 2,
\tstring: 3,
\tnumber: 4
};

resolve = function (a) {
\tif (isObject(a)) {
\t\tif (typeof a.valueOf !== \"function\") return NaN;
\t\ta = a.valueOf();
\t\tif (isObject(a)) {
\t\t\tif (typeof a.toString !== \"function\") return NaN;
\t\t\ta = a.toString();
\t\t\tif (typeof a !== \"string\") return NaN;
\t\t}
\t}
\treturn a;
};

module.exports = function (val1, val2) {
\tif (val1 === val2) return 0; // Same

\tval1 = resolve(val1);
\tval2 = resolve(val2);
\t// eslint-disable-next-line eqeqeq
\tif (val1 == val2) return typeMap[typeof val1] - typeMap[typeof val2];
\tif (!isValue(val1)) return -1;
\tif (!isValue(val2)) return 1;
\tif (typeof val1 === \"string\" || typeof val2 === \"string\") {
\t\treturn strCompare.call(val1, val2);
\t}
\tif (numIsNaN(val1) && numIsNaN(val2)) return 0; // Jslint: ignore
\treturn Number(val1) - Number(val2);
};
";
        
        $__internal_e80a35664fd80a0022595e1062d5f1245b20eee8ff04326a7f9224f5ca757f3d->leave($__internal_e80a35664fd80a0022595e1062d5f1245b20eee8ff04326a7f9224f5ca757f3d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/compare.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var strCompare = require(\"../string/#/case-insensitive-compare\")
  , isObject   = require(\"./is-object\")
  , isValue    = require(\"./is-value\")
  , numIsNaN   = require(\"../number/is-nan\")
  , resolve
  , typeMap;

typeMap = {
\tundefined: 0,
\tobject: 1,
\tboolean: 2,
\tstring: 3,
\tnumber: 4
};

resolve = function (a) {
\tif (isObject(a)) {
\t\tif (typeof a.valueOf !== \"function\") return NaN;
\t\ta = a.valueOf();
\t\tif (isObject(a)) {
\t\t\tif (typeof a.toString !== \"function\") return NaN;
\t\t\ta = a.toString();
\t\t\tif (typeof a !== \"string\") return NaN;
\t\t}
\t}
\treturn a;
};

module.exports = function (val1, val2) {
\tif (val1 === val2) return 0; // Same

\tval1 = resolve(val1);
\tval2 = resolve(val2);
\t// eslint-disable-next-line eqeqeq
\tif (val1 == val2) return typeMap[typeof val1] - typeMap[typeof val2];
\tif (!isValue(val1)) return -1;
\tif (!isValue(val2)) return 1;
\tif (typeof val1 === \"string\" || typeof val2 === \"string\") {
\t\treturn strCompare.call(val1, val2);
\t}
\tif (numIsNaN(val1) && numIsNaN(val2)) return 0; // Jslint: ignore
\treturn Number(val1) - Number(val2);
};
", "node_modules/es5-ext/object/compare.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/compare.js");
    }
}
