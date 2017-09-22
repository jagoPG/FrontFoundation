<?php

/* node_modules/es5-ext/math/fround/shim.js */
class __TwigTemplate_b489e9809dd9f94f5c068846d4117d7ede8fa5919e4d25936145bec934fc891b extends Twig_Template
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
        $__internal_66bfcb50695ce519f367188781aceef93a7cc0f8fbeadfbdf073526169746490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66bfcb50695ce519f367188781aceef93a7cc0f8fbeadfbdf073526169746490->enter($__internal_66bfcb50695ce519f367188781aceef93a7cc0f8fbeadfbdf073526169746490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/fround/shim.js"));

        // line 1
        echo "/* global Float32Array */

// Credit: https://github.com/paulmillr/es6-shim/blob/master/es6-shim.js

\"use strict\";

var toFloat32;

if (typeof Float32Array === \"undefined\") {
\ttoFloat32 = (function () {
\t\tvar pack   = require(\"../_pack-ieee754\")
\t\t  , unpack = require(\"../_unpack-ieee754\");

\t\treturn function (value) {
\t\t\treturn unpack(pack(value, 8, 23), 8, 23);
\t\t};
\t}());
} else {
\ttoFloat32 = (function () {
\t\tvar float32Array = new Float32Array(1);
\t\treturn function (num) {
\t\t\tfloat32Array[0] = num;
\t\t\treturn float32Array[0];
\t\t};
\t}());
}

module.exports = function (value) {
\tif (isNaN(value)) return NaN;
\tvalue = Number(value);
\tif (value === 0) return value;
\tif (!isFinite(value)) return value;

\treturn toFloat32(value);
};
";
        
        $__internal_66bfcb50695ce519f367188781aceef93a7cc0f8fbeadfbdf073526169746490->leave($__internal_66bfcb50695ce519f367188781aceef93a7cc0f8fbeadfbdf073526169746490_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/fround/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/* global Float32Array */

// Credit: https://github.com/paulmillr/es6-shim/blob/master/es6-shim.js

\"use strict\";

var toFloat32;

if (typeof Float32Array === \"undefined\") {
\ttoFloat32 = (function () {
\t\tvar pack   = require(\"../_pack-ieee754\")
\t\t  , unpack = require(\"../_unpack-ieee754\");

\t\treturn function (value) {
\t\t\treturn unpack(pack(value, 8, 23), 8, 23);
\t\t};
\t}());
} else {
\ttoFloat32 = (function () {
\t\tvar float32Array = new Float32Array(1);
\t\treturn function (num) {
\t\t\tfloat32Array[0] = num;
\t\t\treturn float32Array[0];
\t\t};
\t}());
}

module.exports = function (value) {
\tif (isNaN(value)) return NaN;
\tvalue = Number(value);
\tif (value === 0) return value;
\tif (!isFinite(value)) return value;

\treturn toFloat32(value);
};
", "node_modules/es5-ext/math/fround/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/fround/shim.js");
    }
}
