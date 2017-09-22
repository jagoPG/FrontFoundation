<?php

/* node_modules/es5-ext/array/of/shim.js */
class __TwigTemplate_36909e556e03dce97964032f3cbc5a72e35006563c4b347108e514197afb7521 extends Twig_Template
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
        $__internal_a4dc9392b1155a15676b7e88914d3ab1332a329e23cea735277c89d2d5e7019c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4dc9392b1155a15676b7e88914d3ab1332a329e23cea735277c89d2d5e7019c->enter($__internal_a4dc9392b1155a15676b7e88914d3ab1332a329e23cea735277c89d2d5e7019c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/of/shim.js"));

        // line 1
        echo "\"use strict\";

var isFunction     = require(\"../../function/is-function\")
  , slice          = Array.prototype.slice
  , defineProperty = Object.defineProperty
  , desc           = { configurable: true, enumerable: true, writable: true, value: null };

module.exports = function (/* …items*/) {
\tvar result, i, length;
\tif (!this || this === Array || !isFunction(this)) return slice.call(arguments);
\tresult = new this(length = arguments.length);
\tfor (i = 0; i < length; ++i) {
\t\tdesc.value = arguments[i];
\t\tdefineProperty(result, i, desc);
\t}
\tdesc.value = null;
\tresult.length = length;
\treturn result;
};
";
        
        $__internal_a4dc9392b1155a15676b7e88914d3ab1332a329e23cea735277c89d2d5e7019c->leave($__internal_a4dc9392b1155a15676b7e88914d3ab1332a329e23cea735277c89d2d5e7019c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/of/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isFunction     = require(\"../../function/is-function\")
  , slice          = Array.prototype.slice
  , defineProperty = Object.defineProperty
  , desc           = { configurable: true, enumerable: true, writable: true, value: null };

module.exports = function (/* …items*/) {
\tvar result, i, length;
\tif (!this || this === Array || !isFunction(this)) return slice.call(arguments);
\tresult = new this(length = arguments.length);
\tfor (i = 0; i < length; ++i) {
\t\tdesc.value = arguments[i];
\t\tdefineProperty(result, i, desc);
\t}
\tdesc.value = null;
\tresult.length = length;
\treturn result;
};
", "node_modules/es5-ext/array/of/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/of/shim.js");
    }
}
