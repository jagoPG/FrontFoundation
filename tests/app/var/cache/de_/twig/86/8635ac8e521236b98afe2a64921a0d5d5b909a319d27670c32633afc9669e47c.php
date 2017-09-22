<?php

/* node_modules/es5-ext/array/#/is-copy.js */
class __TwigTemplate_3573e0132b9e8c69fba69c2daad8ec278d1c4325da20680f03c08c38d3e6a7d2 extends Twig_Template
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
        $__internal_3673c8b0815b16d3b45a2fda9f4628891325b9c47ded0c9eb0dcf4c6f49354cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3673c8b0815b16d3b45a2fda9f4628891325b9c47ded0c9eb0dcf4c6f49354cf->enter($__internal_3673c8b0815b16d3b45a2fda9f4628891325b9c47ded0c9eb0dcf4c6f49354cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/is-copy.js"));

        // line 1
        echo "\"use strict\";

var toPosInt          = require(\"../../number/to-pos-integer\")
  , eq                = require(\"../../object/eq\")
  , value             = require(\"../../object/valid-value\")
  , objHasOwnProperty = Object.prototype.hasOwnProperty;

module.exports = function (other) {
\tvar i, length;
\tvalue(this);
\tvalue(other);
\tlength = toPosInt(this.length);
\tif (length !== toPosInt(other.length)) return false;
\tfor (i = 0; i < length; ++i) {
\t\tif (objHasOwnProperty.call(this, i) !== objHasOwnProperty.call(other, i)) {
\t\t\treturn false;
\t\t}
\t\tif (!eq(this[i], other[i])) return false;
\t}
\treturn true;
};
";
        
        $__internal_3673c8b0815b16d3b45a2fda9f4628891325b9c47ded0c9eb0dcf4c6f49354cf->leave($__internal_3673c8b0815b16d3b45a2fda9f4628891325b9c47ded0c9eb0dcf4c6f49354cf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/is-copy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var toPosInt          = require(\"../../number/to-pos-integer\")
  , eq                = require(\"../../object/eq\")
  , value             = require(\"../../object/valid-value\")
  , objHasOwnProperty = Object.prototype.hasOwnProperty;

module.exports = function (other) {
\tvar i, length;
\tvalue(this);
\tvalue(other);
\tlength = toPosInt(this.length);
\tif (length !== toPosInt(other.length)) return false;
\tfor (i = 0; i < length; ++i) {
\t\tif (objHasOwnProperty.call(this, i) !== objHasOwnProperty.call(other, i)) {
\t\t\treturn false;
\t\t}
\t\tif (!eq(this[i], other[i])) return false;
\t}
\treturn true;
};
", "node_modules/es5-ext/array/#/is-copy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/is-copy.js");
    }
}
