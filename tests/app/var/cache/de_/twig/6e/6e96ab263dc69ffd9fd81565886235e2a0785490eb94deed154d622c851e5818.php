<?php

/* node_modules/es-abstract/es2016.js */
class __TwigTemplate_09e73348586ac2af2596721b12f6eda8d0c846631382a65688f2576a632cd597 extends Twig_Template
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
        $__internal_9ebbef0aa0c41094f35dcbf7df0be74676a7529b1796943d17c57179660875da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ebbef0aa0c41094f35dcbf7df0be74676a7529b1796943d17c57179660875da->enter($__internal_9ebbef0aa0c41094f35dcbf7df0be74676a7529b1796943d17c57179660875da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es-abstract/es2016.js"));

        // line 1
        echo "'use strict';

var ES2015 = require('./es2015');
var assign = require('./helpers/assign');

var ES2016 = assign(assign({}, ES2015), {
\t// https://github.com/tc39/ecma262/pull/60
\tSameValueNonNumber: function SameValueNonNumber(x, y) {
\t\tif (typeof x === 'number' || typeof x !== typeof y) {
\t\t\tthrow new TypeError('SameValueNonNumber requires two non-number values of the same type.');
\t\t}
\t\treturn this.SameValue(x, y);
\t}
});

module.exports = ES2016;
";
        
        $__internal_9ebbef0aa0c41094f35dcbf7df0be74676a7529b1796943d17c57179660875da->leave($__internal_9ebbef0aa0c41094f35dcbf7df0be74676a7529b1796943d17c57179660875da_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es-abstract/es2016.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var ES2015 = require('./es2015');
var assign = require('./helpers/assign');

var ES2016 = assign(assign({}, ES2015), {
\t// https://github.com/tc39/ecma262/pull/60
\tSameValueNonNumber: function SameValueNonNumber(x, y) {
\t\tif (typeof x === 'number' || typeof x !== typeof y) {
\t\t\tthrow new TypeError('SameValueNonNumber requires two non-number values of the same type.');
\t\t}
\t\treturn this.SameValue(x, y);
\t}
});

module.exports = ES2016;
", "node_modules/es-abstract/es2016.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es-abstract/es2016.js");
    }
}
