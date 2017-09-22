<?php

/* node_modules/es5-ext/function/#/partial.js */
class __TwigTemplate_885d793b63e62c3cbed0a007c261186e8ab513b31ef8b50eba53ea352c3a01e2 extends Twig_Template
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
        $__internal_1bf51940a9524d316dd4129cad95d4db079f24124046daafe17735ea32588508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bf51940a9524d316dd4129cad95d4db079f24124046daafe17735ea32588508->enter($__internal_1bf51940a9524d316dd4129cad95d4db079f24124046daafe17735ea32588508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/function/#/partial.js"));

        // line 1
        echo "\"use strict\";

var callable     = require(\"../../object/valid-callable\")
  , aFrom        = require(\"../../array/from\")
  , defineLength = require(\"../_define-length\")

  , apply = Function.prototype.apply;

module.exports = function (/* …args*/) {
\tvar fn = callable(this)
\t  , args = aFrom(arguments);

\treturn defineLength(function () {
\t\treturn apply.call(fn, this, args.concat(aFrom(arguments)));
\t}, fn.length - args.length);
};
";
        
        $__internal_1bf51940a9524d316dd4129cad95d4db079f24124046daafe17735ea32588508->leave($__internal_1bf51940a9524d316dd4129cad95d4db079f24124046daafe17735ea32588508_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/function/#/partial.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var callable     = require(\"../../object/valid-callable\")
  , aFrom        = require(\"../../array/from\")
  , defineLength = require(\"../_define-length\")

  , apply = Function.prototype.apply;

module.exports = function (/* …args*/) {
\tvar fn = callable(this)
\t  , args = aFrom(arguments);

\treturn defineLength(function () {
\t\treturn apply.call(fn, this, args.concat(aFrom(arguments)));
\t}, fn.length - args.length);
};
", "node_modules/es5-ext/function/#/partial.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/function/#/partial.js");
    }
}
