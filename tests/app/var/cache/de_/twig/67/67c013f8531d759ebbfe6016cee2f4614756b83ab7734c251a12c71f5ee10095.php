<?php

/* node_modules/es5-ext/error/custom.js */
class __TwigTemplate_1170150a0d85e5e6ba4e60993b5db0cb1912a1130659e4b538a9e50296a66b76 extends Twig_Template
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
        $__internal_3862de8e670a9b1cd3e81828f0707af6596f2f4a7b36727a4c0411ceda1d6ce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3862de8e670a9b1cd3e81828f0707af6596f2f4a7b36727a4c0411ceda1d6ce4->enter($__internal_3862de8e670a9b1cd3e81828f0707af6596f2f4a7b36727a4c0411ceda1d6ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/error/custom.js"));

        // line 1
        echo "\"use strict\";

var assign            = require(\"../object/assign\")
  , isObject          = require(\"../object/is-object\")
  , isValue           = require(\"../object/is-value\")
  , captureStackTrace = Error.captureStackTrace;

exports = module.exports = function (message /*, code, ext*/) {
\tvar err = new Error(message), code = arguments[1], ext = arguments[2];
\tif (!isValue(ext)) {
\t\tif (isObject(code)) {
\t\t\text = code;
\t\t\tcode = null;
\t\t}
\t}
\tif (isValue(ext)) assign(err, ext);
\tif (isValue(code)) err.code = code;
\tif (captureStackTrace) captureStackTrace(err, exports);
\treturn err;
};
";
        
        $__internal_3862de8e670a9b1cd3e81828f0707af6596f2f4a7b36727a4c0411ceda1d6ce4->leave($__internal_3862de8e670a9b1cd3e81828f0707af6596f2f4a7b36727a4c0411ceda1d6ce4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/error/custom.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var assign            = require(\"../object/assign\")
  , isObject          = require(\"../object/is-object\")
  , isValue           = require(\"../object/is-value\")
  , captureStackTrace = Error.captureStackTrace;

exports = module.exports = function (message /*, code, ext*/) {
\tvar err = new Error(message), code = arguments[1], ext = arguments[2];
\tif (!isValue(ext)) {
\t\tif (isObject(code)) {
\t\t\text = code;
\t\t\tcode = null;
\t\t}
\t}
\tif (isValue(ext)) assign(err, ext);
\tif (isValue(code)) err.code = code;
\tif (captureStackTrace) captureStackTrace(err, exports);
\treturn err;
};
", "node_modules/es5-ext/error/custom.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/error/custom.js");
    }
}
