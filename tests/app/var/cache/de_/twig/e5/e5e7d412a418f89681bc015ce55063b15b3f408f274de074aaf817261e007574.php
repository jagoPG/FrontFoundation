<?php

/* node_modules/es5-ext/object/is-array-like.js */
class __TwigTemplate_4bc22c00cc3e7cd8fac994703f2a0dda8b89871a3ed5bc7a2d3f6552b2a99605 extends Twig_Template
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
        $__internal_ce2c432d658ce5537dc63d142f31e88e7e37ed0a326ddb30a52fea9c22ca07e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce2c432d658ce5537dc63d142f31e88e7e37ed0a326ddb30a52fea9c22ca07e6->enter($__internal_ce2c432d658ce5537dc63d142f31e88e7e37ed0a326ddb30a52fea9c22ca07e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/is-array-like.js"));

        // line 1
        echo "\"use strict\";

var isFunction = require(\"../function/is-function\")
  , isObject   = require(\"./is-object\")
  , isValue    = require(\"./is-value\");

module.exports = function (value) {
\treturn (
\t\t(isValue(value) &&
\t\t\ttypeof value.length === \"number\" &&
\t\t\t// Just checking ((typeof x === 'object') && (typeof x !== 'function'))
\t\t\t// won't work right for some cases, e.g.:
\t\t\t// type of instance of NodeList in Safari is a 'function'
\t\t\t((isObject(value) && !isFunction(value)) || typeof value === \"string\")) ||
\t\tfalse
\t);
};
";
        
        $__internal_ce2c432d658ce5537dc63d142f31e88e7e37ed0a326ddb30a52fea9c22ca07e6->leave($__internal_ce2c432d658ce5537dc63d142f31e88e7e37ed0a326ddb30a52fea9c22ca07e6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/is-array-like.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isFunction = require(\"../function/is-function\")
  , isObject   = require(\"./is-object\")
  , isValue    = require(\"./is-value\");

module.exports = function (value) {
\treturn (
\t\t(isValue(value) &&
\t\t\ttypeof value.length === \"number\" &&
\t\t\t// Just checking ((typeof x === 'object') && (typeof x !== 'function'))
\t\t\t// won't work right for some cases, e.g.:
\t\t\t// type of instance of NodeList in Safari is a 'function'
\t\t\t((isObject(value) && !isFunction(value)) || typeof value === \"string\")) ||
\t\tfalse
\t);
};
", "node_modules/es5-ext/object/is-array-like.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/is-array-like.js");
    }
}
