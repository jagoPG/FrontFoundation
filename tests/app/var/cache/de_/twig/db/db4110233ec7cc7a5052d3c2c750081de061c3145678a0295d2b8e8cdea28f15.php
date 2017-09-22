<?php

/* node_modules/es5-ext/function/#/curry.js */
class __TwigTemplate_7cdcf6b63637b9e249f39c0004751ae7d918d4432d4d8b219455adf8408d960e extends Twig_Template
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
        $__internal_9e919b09408ee0e7d55eed57f8b1cb6487877b3b6b0b0a66801516f3011d9e4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e919b09408ee0e7d55eed57f8b1cb6487877b3b6b0b0a66801516f3011d9e4c->enter($__internal_9e919b09408ee0e7d55eed57f8b1cb6487877b3b6b0b0a66801516f3011d9e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/function/#/curry.js"));

        // line 1
        echo "\"use strict\";

var toPosInt     = require(\"../../number/to-pos-integer\")
  , callable     = require(\"../../object/valid-callable\")
  , defineLength = require(\"../_define-length\")

  , slice = Array.prototype.slice, apply = Function.prototype.apply
  , curry;

curry = function self (fn, length, preArgs) {
\treturn defineLength(function () {
\t\tvar args = preArgs
\t\t\t\t? preArgs.concat(slice.call(arguments, 0, length - preArgs.length))
\t\t\t\t: slice.call(arguments, 0, length);
\t\treturn args.length === length ? apply.call(fn, this, args)
\t\t\t\t: self(fn, length, args);
\t}, preArgs ? length - preArgs.length : length);
};

module.exports = function (/* Length*/) {
\tvar length = arguments[0];
\treturn curry(callable(this),
\t\tisNaN(length) ? toPosInt(this.length) : toPosInt(length));
};
";
        
        $__internal_9e919b09408ee0e7d55eed57f8b1cb6487877b3b6b0b0a66801516f3011d9e4c->leave($__internal_9e919b09408ee0e7d55eed57f8b1cb6487877b3b6b0b0a66801516f3011d9e4c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/function/#/curry.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var toPosInt     = require(\"../../number/to-pos-integer\")
  , callable     = require(\"../../object/valid-callable\")
  , defineLength = require(\"../_define-length\")

  , slice = Array.prototype.slice, apply = Function.prototype.apply
  , curry;

curry = function self (fn, length, preArgs) {
\treturn defineLength(function () {
\t\tvar args = preArgs
\t\t\t\t? preArgs.concat(slice.call(arguments, 0, length - preArgs.length))
\t\t\t\t: slice.call(arguments, 0, length);
\t\treturn args.length === length ? apply.call(fn, this, args)
\t\t\t\t: self(fn, length, args);
\t}, preArgs ? length - preArgs.length : length);
};

module.exports = function (/* Length*/) {
\tvar length = arguments[0];
\treturn curry(callable(this),
\t\tisNaN(length) ? toPosInt(this.length) : toPosInt(length));
};
", "node_modules/es5-ext/function/#/curry.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/function/#/curry.js");
    }
}
