<?php

/* node_modules/es5-ext/function/#/compose.js */
class __TwigTemplate_72d191a27fae76cb90d25bb899a61453416dc7e586fd39abf2f57dde93c40fd4 extends Twig_Template
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
        $__internal_57448b433f57869176c43d7f800d37405a7a6b8bae09bd6bcc3839da4a421c57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57448b433f57869176c43d7f800d37405a7a6b8bae09bd6bcc3839da4a421c57->enter($__internal_57448b433f57869176c43d7f800d37405a7a6b8bae09bd6bcc3839da4a421c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/function/#/compose.js"));

        // line 1
        echo "\"use strict\";

var callable = require(\"../../object/valid-callable\")
  , aFrom    = require(\"../../array/from\")
  , apply    = Function.prototype.apply
  , call     = Function.prototype.call
  , callFn   = function (arg, fn) {
\treturn call.call(fn, this, arg);
};

module.exports = function (fn /*, …fnn*/) {
\tvar fns, first;
\tif (!fn) callable(fn);
\tfns = [this].concat(aFrom(arguments));
\tfns.forEach(callable);
\tfns = fns.reverse();
\tfirst = fns[0];
\tfns = fns.slice(1);
\treturn function (argIgnored) {
\t\treturn fns.reduce(callFn, apply.call(first, this, arguments));
\t};
};
";
        
        $__internal_57448b433f57869176c43d7f800d37405a7a6b8bae09bd6bcc3839da4a421c57->leave($__internal_57448b433f57869176c43d7f800d37405a7a6b8bae09bd6bcc3839da4a421c57_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/function/#/compose.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var callable = require(\"../../object/valid-callable\")
  , aFrom    = require(\"../../array/from\")
  , apply    = Function.prototype.apply
  , call     = Function.prototype.call
  , callFn   = function (arg, fn) {
\treturn call.call(fn, this, arg);
};

module.exports = function (fn /*, …fnn*/) {
\tvar fns, first;
\tif (!fn) callable(fn);
\tfns = [this].concat(aFrom(arguments));
\tfns.forEach(callable);
\tfns = fns.reverse();
\tfirst = fns[0];
\tfns = fns.slice(1);
\treturn function (argIgnored) {
\t\treturn fns.reduce(callFn, apply.call(first, this, arguments));
\t};
};
", "node_modules/es5-ext/function/#/compose.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/function/#/compose.js");
    }
}
