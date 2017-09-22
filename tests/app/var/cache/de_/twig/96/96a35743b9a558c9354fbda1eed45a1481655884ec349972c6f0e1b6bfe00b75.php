<?php

/* node_modules/es6-iterator/is-iterable.js */
class __TwigTemplate_3604c6a9545b3eebd6fa88dbc570db801897bb9e473282238fd8735cd4233239 extends Twig_Template
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
        $__internal_43d0d945a829cb2c1ff768e5d94e30649f7a9db45b1094ce656c3bd345ae2c25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43d0d945a829cb2c1ff768e5d94e30649f7a9db45b1094ce656c3bd345ae2c25->enter($__internal_43d0d945a829cb2c1ff768e5d94e30649f7a9db45b1094ce656c3bd345ae2c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-iterator/is-iterable.js"));

        // line 1
        echo "'use strict';

var isArguments    = require('es5-ext/function/is-arguments')
  , isString       = require('es5-ext/string/is-string')
  , iteratorSymbol = require('es6-symbol').iterator

  , isArray = Array.isArray;

module.exports = function (value) {
\tif (value == null) return false;
\tif (isArray(value)) return true;
\tif (isString(value)) return true;
\tif (isArguments(value)) return true;
\treturn (typeof value[iteratorSymbol] === 'function');
};
";
        
        $__internal_43d0d945a829cb2c1ff768e5d94e30649f7a9db45b1094ce656c3bd345ae2c25->leave($__internal_43d0d945a829cb2c1ff768e5d94e30649f7a9db45b1094ce656c3bd345ae2c25_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-iterator/is-iterable.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var isArguments    = require('es5-ext/function/is-arguments')
  , isString       = require('es5-ext/string/is-string')
  , iteratorSymbol = require('es6-symbol').iterator

  , isArray = Array.isArray;

module.exports = function (value) {
\tif (value == null) return false;
\tif (isArray(value)) return true;
\tif (isString(value)) return true;
\tif (isArguments(value)) return true;
\treturn (typeof value[iteratorSymbol] === 'function');
};
", "node_modules/es6-iterator/is-iterable.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-iterator/is-iterable.js");
    }
}
