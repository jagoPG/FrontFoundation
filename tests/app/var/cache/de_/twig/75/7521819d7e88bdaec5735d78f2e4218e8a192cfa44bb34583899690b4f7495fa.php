<?php

/* node_modules/is-regex/index.js */
class __TwigTemplate_9c91f10b9905e66e15e0c00a23114fbc686bc5a0c2eae10f54c46d8373cfb6e1 extends Twig_Template
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
        $__internal_cf66973b0521f30ad0c708540577c1fa8873a74386ec6cbe200c5244fe74a7d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf66973b0521f30ad0c708540577c1fa8873a74386ec6cbe200c5244fe74a7d4->enter($__internal_cf66973b0521f30ad0c708540577c1fa8873a74386ec6cbe200c5244fe74a7d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/is-regex/index.js"));

        // line 1
        echo "'use strict';

var has = require('has');
var regexExec = RegExp.prototype.exec;
var gOPD = Object.getOwnPropertyDescriptor;

var tryRegexExecCall = function tryRegexExec(value) {
\ttry {
\t\tvar lastIndex = value.lastIndex;
\t\tvalue.lastIndex = 0;

\t\tregexExec.call(value);
\t\treturn true;
\t} catch (e) {
\t\treturn false;
\t} finally {
\t\tvalue.lastIndex = lastIndex;
\t}
};
var toStr = Object.prototype.toString;
var regexClass = '[object RegExp]';
var hasToStringTag = typeof Symbol === 'function' && typeof Symbol.toStringTag === 'symbol';

module.exports = function isRegex(value) {
\tif (!value || typeof value !== 'object') {
\t\treturn false;
\t}
\tif (!hasToStringTag) {
\t\treturn toStr.call(value) === regexClass;
\t}

\tvar descriptor = gOPD(value, 'lastIndex');
\tvar hasLastIndexDataProperty = descriptor && has(descriptor, 'value');
\tif (!hasLastIndexDataProperty) {
\t\treturn false;
\t}

\treturn tryRegexExecCall(value);
};
";
        
        $__internal_cf66973b0521f30ad0c708540577c1fa8873a74386ec6cbe200c5244fe74a7d4->leave($__internal_cf66973b0521f30ad0c708540577c1fa8873a74386ec6cbe200c5244fe74a7d4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/is-regex/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var has = require('has');
var regexExec = RegExp.prototype.exec;
var gOPD = Object.getOwnPropertyDescriptor;

var tryRegexExecCall = function tryRegexExec(value) {
\ttry {
\t\tvar lastIndex = value.lastIndex;
\t\tvalue.lastIndex = 0;

\t\tregexExec.call(value);
\t\treturn true;
\t} catch (e) {
\t\treturn false;
\t} finally {
\t\tvalue.lastIndex = lastIndex;
\t}
};
var toStr = Object.prototype.toString;
var regexClass = '[object RegExp]';
var hasToStringTag = typeof Symbol === 'function' && typeof Symbol.toStringTag === 'symbol';

module.exports = function isRegex(value) {
\tif (!value || typeof value !== 'object') {
\t\treturn false;
\t}
\tif (!hasToStringTag) {
\t\treturn toStr.call(value) === regexClass;
\t}

\tvar descriptor = gOPD(value, 'lastIndex');
\tvar hasLastIndexDataProperty = descriptor && has(descriptor, 'value');
\tif (!hasLastIndexDataProperty) {
\t\treturn false;
\t}

\treturn tryRegexExecCall(value);
};
", "node_modules/is-regex/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/is-regex/index.js");
    }
}
