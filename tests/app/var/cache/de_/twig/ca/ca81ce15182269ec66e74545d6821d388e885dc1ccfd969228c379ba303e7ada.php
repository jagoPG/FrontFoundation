<?php

/* node_modules/is-symbol/index.js */
class __TwigTemplate_95784a0bc29648882d24af5aacf4520754a1c8e4ab2e557b36790474a913ee5a extends Twig_Template
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
        $__internal_1c6b13162d9b988f80b738a5e02afec5cc757982208b79fa0356f9b50c3734f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c6b13162d9b988f80b738a5e02afec5cc757982208b79fa0356f9b50c3734f2->enter($__internal_1c6b13162d9b988f80b738a5e02afec5cc757982208b79fa0356f9b50c3734f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/is-symbol/index.js"));

        // line 1
        echo "'use strict';

var toStr = Object.prototype.toString;
var hasSymbols = typeof Symbol === 'function' && typeof Symbol() === 'symbol';

if (hasSymbols) {
\tvar symToStr = Symbol.prototype.toString;
\tvar symStringRegex = /^Symbol\\(.*\\)\$/;
\tvar isSymbolObject = function isSymbolObject(value) {
\t\tif (typeof value.valueOf() !== 'symbol') { return false; }
\t\treturn symStringRegex.test(symToStr.call(value));
\t};
\tmodule.exports = function isSymbol(value) {
\t\tif (typeof value === 'symbol') { return true; }
\t\tif (toStr.call(value) !== '[object Symbol]') { return false; }
\t\ttry {
\t\t\treturn isSymbolObject(value);
\t\t} catch (e) {
\t\t\treturn false;
\t\t}
\t};
} else {
\tmodule.exports = function isSymbol(value) {
\t\t// this environment does not support Symbols.
\t\treturn false;
\t};
}
";
        
        $__internal_1c6b13162d9b988f80b738a5e02afec5cc757982208b79fa0356f9b50c3734f2->leave($__internal_1c6b13162d9b988f80b738a5e02afec5cc757982208b79fa0356f9b50c3734f2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/is-symbol/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var toStr = Object.prototype.toString;
var hasSymbols = typeof Symbol === 'function' && typeof Symbol() === 'symbol';

if (hasSymbols) {
\tvar symToStr = Symbol.prototype.toString;
\tvar symStringRegex = /^Symbol\\(.*\\)\$/;
\tvar isSymbolObject = function isSymbolObject(value) {
\t\tif (typeof value.valueOf() !== 'symbol') { return false; }
\t\treturn symStringRegex.test(symToStr.call(value));
\t};
\tmodule.exports = function isSymbol(value) {
\t\tif (typeof value === 'symbol') { return true; }
\t\tif (toStr.call(value) !== '[object Symbol]') { return false; }
\t\ttry {
\t\t\treturn isSymbolObject(value);
\t\t} catch (e) {
\t\t\treturn false;
\t\t}
\t};
} else {
\tmodule.exports = function isSymbol(value) {
\t\t// this environment does not support Symbols.
\t\treturn false;
\t};
}
", "node_modules/is-symbol/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/is-symbol/index.js");
    }
}
