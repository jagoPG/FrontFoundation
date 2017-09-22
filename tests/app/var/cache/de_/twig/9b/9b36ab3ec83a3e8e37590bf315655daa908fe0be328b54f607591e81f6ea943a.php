<?php

/* node_modules/es-abstract/test/diffOps.js */
class __TwigTemplate_b15dc91bdd17eea9e3778832b822f3a6cef8dea50eacd031f59b6cb6aee496eb extends Twig_Template
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
        $__internal_87ed78e669048bcfffe4387e830cbf2f5fc054de87a907b6bd788765ba874e05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87ed78e669048bcfffe4387e830cbf2f5fc054de87a907b6bd788765ba874e05->enter($__internal_87ed78e669048bcfffe4387e830cbf2f5fc054de87a907b6bd788765ba874e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es-abstract/test/diffOps.js"));

        // line 1
        echo "'use strict';

var keys = require('object-keys');
var forEach = require('foreach');

module.exports = function diffOperations(actual, expected) {
\tvar actualKeys = keys(actual);
\tvar expectedKeys = keys(expected);

\tvar extra = [];
\tvar missing = [];
\tforEach(actualKeys, function (op) {
\t\tif (!(op in expected)) {
\t\t\textra.push(op);
\t\t}
\t});
\tforEach(expectedKeys, function (op) {
\t\tif (!(op in actual)) {
\t\t\tmissing.push(op);
\t\t}
\t});

\treturn { missing: missing, extra: extra };
};
";
        
        $__internal_87ed78e669048bcfffe4387e830cbf2f5fc054de87a907b6bd788765ba874e05->leave($__internal_87ed78e669048bcfffe4387e830cbf2f5fc054de87a907b6bd788765ba874e05_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es-abstract/test/diffOps.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var keys = require('object-keys');
var forEach = require('foreach');

module.exports = function diffOperations(actual, expected) {
\tvar actualKeys = keys(actual);
\tvar expectedKeys = keys(expected);

\tvar extra = [];
\tvar missing = [];
\tforEach(actualKeys, function (op) {
\t\tif (!(op in expected)) {
\t\t\textra.push(op);
\t\t}
\t});
\tforEach(expectedKeys, function (op) {
\t\tif (!(op in actual)) {
\t\t\tmissing.push(op);
\t\t}
\t});

\treturn { missing: missing, extra: extra };
};
", "node_modules/es-abstract/test/diffOps.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es-abstract/test/diffOps.js");
    }
}
