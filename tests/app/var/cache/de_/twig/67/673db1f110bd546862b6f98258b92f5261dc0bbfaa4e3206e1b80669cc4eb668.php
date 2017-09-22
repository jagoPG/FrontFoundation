<?php

/* node_modules/is-callable/index.js */
class __TwigTemplate_95a46f396a2d05dad2af0f0f9fe36ec2b6d3a93747b675f255acbb25781a6eb1 extends Twig_Template
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
        $__internal_f40f77bb4813bfd41fbedbb0464bb4b01d8681eea632452e336ddefc3b028ceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f40f77bb4813bfd41fbedbb0464bb4b01d8681eea632452e336ddefc3b028ceb->enter($__internal_f40f77bb4813bfd41fbedbb0464bb4b01d8681eea632452e336ddefc3b028ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/is-callable/index.js"));

        // line 1
        echo "'use strict';

var fnToStr = Function.prototype.toString;

var constructorRegex = /^\\s*class /;
var isES6ClassFn = function isES6ClassFn(value) {
\ttry {
\t\tvar fnStr = fnToStr.call(value);
\t\tvar singleStripped = fnStr.replace(/\\/\\/.*\\n/g, '');
\t\tvar multiStripped = singleStripped.replace(/\\/\\*[.\\s\\S]*\\*\\//g, '');
\t\tvar spaceStripped = multiStripped.replace(/\\n/mg, ' ').replace(/ {2}/g, ' ');
\t\treturn constructorRegex.test(spaceStripped);
\t} catch (e) {
\t\treturn false; // not a function
\t}
};

var tryFunctionObject = function tryFunctionObject(value) {
\ttry {
\t\tif (isES6ClassFn(value)) { return false; }
\t\tfnToStr.call(value);
\t\treturn true;
\t} catch (e) {
\t\treturn false;
\t}
};
var toStr = Object.prototype.toString;
var fnClass = '[object Function]';
var genClass = '[object GeneratorFunction]';
var hasToStringTag = typeof Symbol === 'function' && typeof Symbol.toStringTag === 'symbol';

module.exports = function isCallable(value) {
\tif (!value) { return false; }
\tif (typeof value !== 'function' && typeof value !== 'object') { return false; }
\tif (hasToStringTag) { return tryFunctionObject(value); }
\tif (isES6ClassFn(value)) { return false; }
\tvar strClass = toStr.call(value);
\treturn strClass === fnClass || strClass === genClass;
};
";
        
        $__internal_f40f77bb4813bfd41fbedbb0464bb4b01d8681eea632452e336ddefc3b028ceb->leave($__internal_f40f77bb4813bfd41fbedbb0464bb4b01d8681eea632452e336ddefc3b028ceb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/is-callable/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var fnToStr = Function.prototype.toString;

var constructorRegex = /^\\s*class /;
var isES6ClassFn = function isES6ClassFn(value) {
\ttry {
\t\tvar fnStr = fnToStr.call(value);
\t\tvar singleStripped = fnStr.replace(/\\/\\/.*\\n/g, '');
\t\tvar multiStripped = singleStripped.replace(/\\/\\*[.\\s\\S]*\\*\\//g, '');
\t\tvar spaceStripped = multiStripped.replace(/\\n/mg, ' ').replace(/ {2}/g, ' ');
\t\treturn constructorRegex.test(spaceStripped);
\t} catch (e) {
\t\treturn false; // not a function
\t}
};

var tryFunctionObject = function tryFunctionObject(value) {
\ttry {
\t\tif (isES6ClassFn(value)) { return false; }
\t\tfnToStr.call(value);
\t\treturn true;
\t} catch (e) {
\t\treturn false;
\t}
};
var toStr = Object.prototype.toString;
var fnClass = '[object Function]';
var genClass = '[object GeneratorFunction]';
var hasToStringTag = typeof Symbol === 'function' && typeof Symbol.toStringTag === 'symbol';

module.exports = function isCallable(value) {
\tif (!value) { return false; }
\tif (typeof value !== 'function' && typeof value !== 'object') { return false; }
\tif (hasToStringTag) { return tryFunctionObject(value); }
\tif (isES6ClassFn(value)) { return false; }
\tvar strClass = toStr.call(value);
\treturn strClass === fnClass || strClass === genClass;
};
", "node_modules/is-callable/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/is-callable/index.js");
    }
}
