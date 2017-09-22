<?php

/* node_modules/es5-ext/array/#/for-each-right.js */
class __TwigTemplate_20181d5ba52c72b6287ade067c5e64aba3187dcbb698e71d13688c5b43906e4f extends Twig_Template
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
        $__internal_1120090526f5609116bd43149f112e7c5deced22d5cd1a0977edee8f4d195e43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1120090526f5609116bd43149f112e7c5deced22d5cd1a0977edee8f4d195e43->enter($__internal_1120090526f5609116bd43149f112e7c5deced22d5cd1a0977edee8f4d195e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/for-each-right.js"));

        // line 1
        echo "\"use strict\";

var toPosInt          = require(\"../../number/to-pos-integer\")
  , callable          = require(\"../../object/valid-callable\")
  , value             = require(\"../../object/valid-value\")
  , objHasOwnProperty = Object.prototype.hasOwnProperty
  , call              = Function.prototype.call;

module.exports = function (cb /*, thisArg*/) {
\tvar i, self, thisArg;

\tself = Object(value(this));
\tcallable(cb);
\tthisArg = arguments[1];

\tfor (i = toPosInt(self.length) - 1; i >= 0; --i) {
\t\tif (objHasOwnProperty.call(self, i)) call.call(cb, thisArg, self[i], i, self);
\t}
};
";
        
        $__internal_1120090526f5609116bd43149f112e7c5deced22d5cd1a0977edee8f4d195e43->leave($__internal_1120090526f5609116bd43149f112e7c5deced22d5cd1a0977edee8f4d195e43_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/for-each-right.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var toPosInt          = require(\"../../number/to-pos-integer\")
  , callable          = require(\"../../object/valid-callable\")
  , value             = require(\"../../object/valid-value\")
  , objHasOwnProperty = Object.prototype.hasOwnProperty
  , call              = Function.prototype.call;

module.exports = function (cb /*, thisArg*/) {
\tvar i, self, thisArg;

\tself = Object(value(this));
\tcallable(cb);
\tthisArg = arguments[1];

\tfor (i = toPosInt(self.length) - 1; i >= 0; --i) {
\t\tif (objHasOwnProperty.call(self, i)) call.call(cb, thisArg, self[i], i, self);
\t}
};
", "node_modules/es5-ext/array/#/for-each-right.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/for-each-right.js");
    }
}
