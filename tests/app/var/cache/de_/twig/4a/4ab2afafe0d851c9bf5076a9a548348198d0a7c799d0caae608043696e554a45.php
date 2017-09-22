<?php

/* node_modules/es5-ext/array/#/e-index-of.js */
class __TwigTemplate_d998b0a57a300f4daee4aad6a97a630d104ffd4cb19866636317492fda66b9f8 extends Twig_Template
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
        $__internal_be6e9366cdf93261df600016b570a678e3a08f5544cc3458365f5fccb9ec36ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be6e9366cdf93261df600016b570a678e3a08f5544cc3458365f5fccb9ec36ee->enter($__internal_be6e9366cdf93261df600016b570a678e3a08f5544cc3458365f5fccb9ec36ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/e-index-of.js"));

        // line 1
        echo "\"use strict\";

var numberIsNaN       = require(\"../../number/is-nan\")
  , toPosInt          = require(\"../../number/to-pos-integer\")
  , value             = require(\"../../object/valid-value\")
  , indexOf           = Array.prototype.indexOf
  , objHasOwnProperty = Object.prototype.hasOwnProperty
  , abs               = Math.abs
  , floor             = Math.floor;

module.exports = function (searchElement /*, fromIndex*/) {
\tvar i, length, fromIndex, val;
\tif (!numberIsNaN(searchElement)) return indexOf.apply(this, arguments);

\tlength = toPosInt(value(this).length);
\tfromIndex = arguments[1];
\tif (isNaN(fromIndex)) fromIndex = 0;
\telse if (fromIndex >= 0) fromIndex = floor(fromIndex);
\telse fromIndex = toPosInt(this.length) - floor(abs(fromIndex));

\tfor (i = fromIndex; i < length; ++i) {
\t\tif (objHasOwnProperty.call(this, i)) {
\t\t\tval = this[i];
\t\t\tif (numberIsNaN(val)) return i; // Jslint: ignore
\t\t}
\t}
\treturn -1;
};
";
        
        $__internal_be6e9366cdf93261df600016b570a678e3a08f5544cc3458365f5fccb9ec36ee->leave($__internal_be6e9366cdf93261df600016b570a678e3a08f5544cc3458365f5fccb9ec36ee_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/e-index-of.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var numberIsNaN       = require(\"../../number/is-nan\")
  , toPosInt          = require(\"../../number/to-pos-integer\")
  , value             = require(\"../../object/valid-value\")
  , indexOf           = Array.prototype.indexOf
  , objHasOwnProperty = Object.prototype.hasOwnProperty
  , abs               = Math.abs
  , floor             = Math.floor;

module.exports = function (searchElement /*, fromIndex*/) {
\tvar i, length, fromIndex, val;
\tif (!numberIsNaN(searchElement)) return indexOf.apply(this, arguments);

\tlength = toPosInt(value(this).length);
\tfromIndex = arguments[1];
\tif (isNaN(fromIndex)) fromIndex = 0;
\telse if (fromIndex >= 0) fromIndex = floor(fromIndex);
\telse fromIndex = toPosInt(this.length) - floor(abs(fromIndex));

\tfor (i = fromIndex; i < length; ++i) {
\t\tif (objHasOwnProperty.call(this, i)) {
\t\t\tval = this[i];
\t\t\tif (numberIsNaN(val)) return i; // Jslint: ignore
\t\t}
\t}
\treturn -1;
};
", "node_modules/es5-ext/array/#/e-index-of.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/e-index-of.js");
    }
}
