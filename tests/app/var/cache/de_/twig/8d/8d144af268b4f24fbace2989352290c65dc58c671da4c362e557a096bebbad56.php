<?php

/* node_modules/es6-symbol/test/validate-symbol.js */
class __TwigTemplate_26d42f3ae966f490754ae2bf9fe8d77ca680689f96cb6d572c3fee2a16689b5d extends Twig_Template
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
        $__internal_23fd4e8ac9e3e21c0ec7be450a954621ce9e32087705525bb96fae96ef25b251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23fd4e8ac9e3e21c0ec7be450a954621ce9e32087705525bb96fae96ef25b251->enter($__internal_23fd4e8ac9e3e21c0ec7be450a954621ce9e32087705525bb96fae96ef25b251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-symbol/test/validate-symbol.js"));

        // line 1
        echo "'use strict';

var SymbolPoly = require('../polyfill');

module.exports = function (t, a) {
\tvar symbol;
\ta.throws(function () { t(undefined); }, TypeError, \"Undefined\");
\ta.throws(function () { t(null); }, TypeError, \"Null\");
\ta.throws(function () { t(true); }, TypeError, \"Primitive\");
\ta.throws(function () { t('raz'); }, TypeError, \"String\");
\ta.throws(function () { t({}); }, TypeError, \"Object\");
\ta.throws(function () { t([]); }, TypeError, \"Array\");
\tif (typeof Symbol !== 'undefined') {
\t\tsymbol = Symbol();
\t\ta(t(symbol), symbol, \"Native\");
\t}
\tsymbol = SymbolPoly();
\ta(t(symbol), symbol, \"Polyfill\");
};
";
        
        $__internal_23fd4e8ac9e3e21c0ec7be450a954621ce9e32087705525bb96fae96ef25b251->leave($__internal_23fd4e8ac9e3e21c0ec7be450a954621ce9e32087705525bb96fae96ef25b251_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-symbol/test/validate-symbol.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var SymbolPoly = require('../polyfill');

module.exports = function (t, a) {
\tvar symbol;
\ta.throws(function () { t(undefined); }, TypeError, \"Undefined\");
\ta.throws(function () { t(null); }, TypeError, \"Null\");
\ta.throws(function () { t(true); }, TypeError, \"Primitive\");
\ta.throws(function () { t('raz'); }, TypeError, \"String\");
\ta.throws(function () { t({}); }, TypeError, \"Object\");
\ta.throws(function () { t([]); }, TypeError, \"Array\");
\tif (typeof Symbol !== 'undefined') {
\t\tsymbol = Symbol();
\t\ta(t(symbol), symbol, \"Native\");
\t}
\tsymbol = SymbolPoly();
\ta(t(symbol), symbol, \"Polyfill\");
};
", "node_modules/es6-symbol/test/validate-symbol.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-symbol/test/validate-symbol.js");
    }
}
