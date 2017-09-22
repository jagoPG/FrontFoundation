<?php

/* node_modules/es5-ext/array/#/e-last-index-of.js */
class __TwigTemplate_e7875d7e24a0c2c0de3a1c033544bad0fcacea9eeb459e09f888c0198d18ec1e extends Twig_Template
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
        $__internal_3f4857c19260e1b346653c9ebd5d9b9cf59f1337fc2d2c4f52efbee38c41de5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f4857c19260e1b346653c9ebd5d9b9cf59f1337fc2d2c4f52efbee38c41de5e->enter($__internal_3f4857c19260e1b346653c9ebd5d9b9cf59f1337fc2d2c4f52efbee38c41de5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/e-last-index-of.js"));

        // line 1
        echo "\"use strict\";

var numberIsNaN       = require(\"../../number/is-nan\")
  , toPosInt          = require(\"../../number/to-pos-integer\")
  , value             = require(\"../../object/valid-value\")
  , lastIndexOf       = Array.prototype.lastIndexOf
  , objHasOwnProperty = Object.prototype.hasOwnProperty
  , abs               = Math.abs
  , floor             = Math.floor;

module.exports = function (searchElement /*, fromIndex*/) {
\tvar i, fromIndex, val;
\tif (!numberIsNaN(searchElement)) {
\t\t// Jslint: ignore
\t\treturn lastIndexOf.apply(this, arguments);
\t}

\tvalue(this);
\tfromIndex = arguments[1];
\tif (isNaN(fromIndex)) fromIndex = toPosInt(this.length) - 1;
\telse if (fromIndex >= 0) fromIndex = floor(fromIndex);
\telse fromIndex = toPosInt(this.length) - floor(abs(fromIndex));

\tfor (i = fromIndex; i >= 0; --i) {
\t\tif (objHasOwnProperty.call(this, i)) {
\t\t\tval = this[i];
\t\t\tif (numberIsNaN(val)) return i; // Jslint: ignore
\t\t}
\t}
\treturn -1;
};
";
        
        $__internal_3f4857c19260e1b346653c9ebd5d9b9cf59f1337fc2d2c4f52efbee38c41de5e->leave($__internal_3f4857c19260e1b346653c9ebd5d9b9cf59f1337fc2d2c4f52efbee38c41de5e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/e-last-index-of.js";
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
  , lastIndexOf       = Array.prototype.lastIndexOf
  , objHasOwnProperty = Object.prototype.hasOwnProperty
  , abs               = Math.abs
  , floor             = Math.floor;

module.exports = function (searchElement /*, fromIndex*/) {
\tvar i, fromIndex, val;
\tif (!numberIsNaN(searchElement)) {
\t\t// Jslint: ignore
\t\treturn lastIndexOf.apply(this, arguments);
\t}

\tvalue(this);
\tfromIndex = arguments[1];
\tif (isNaN(fromIndex)) fromIndex = toPosInt(this.length) - 1;
\telse if (fromIndex >= 0) fromIndex = floor(fromIndex);
\telse fromIndex = toPosInt(this.length) - floor(abs(fromIndex));

\tfor (i = fromIndex; i >= 0; --i) {
\t\tif (objHasOwnProperty.call(this, i)) {
\t\t\tval = this[i];
\t\t\tif (numberIsNaN(val)) return i; // Jslint: ignore
\t\t}
\t}
\treturn -1;
};
", "node_modules/es5-ext/array/#/e-last-index-of.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/e-last-index-of.js");
    }
}
