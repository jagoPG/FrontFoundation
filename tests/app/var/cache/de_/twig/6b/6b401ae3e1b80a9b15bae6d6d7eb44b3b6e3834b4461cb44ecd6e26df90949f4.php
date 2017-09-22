<?php

/* node_modules/es6-iterator/test/array.js */
class __TwigTemplate_b8834afb84dc58a711129029f28b5d9b31c036b9a86606dd6e0e04102fd95327 extends Twig_Template
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
        $__internal_2735ffe73183813a45a8bfc03f6970aceed82845332600104ae956c5eed26d6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2735ffe73183813a45a8bfc03f6970aceed82845332600104ae956c5eed26d6d->enter($__internal_2735ffe73183813a45a8bfc03f6970aceed82845332600104ae956c5eed26d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-iterator/test/array.js"));

        // line 1
        echo "'use strict';

var iteratorSymbol = require('es6-symbol').iterator;

module.exports = function (T) {
\treturn {
\t\tValues: function (a) {
\t\t\tvar x = ['raz', 'dwa', 'trzy', 'cztery', 'pięć', 'sześć'], it;

\t\t\tit = new T(x);
\t\t\ta(it[iteratorSymbol](), it, \"@@iterator\");
\t\t\ta.deep(it.next(), { done: false, value: 'raz' }, \"#1\");
\t\t\ta.deep(it.next(), { done: false, value: 'dwa' }, \"#2\");
\t\t\tx.splice(1, 0, 'elo');
\t\t\ta.deep(it.next(), { done: false, value: 'dwa' }, \"Insert\");
\t\t\ta.deep(it.next(), { done: false, value: 'trzy' }, \"#3\");
\t\t\ta.deep(it.next(), { done: false, value: 'cztery' }, \"#4\");
\t\t\tx.pop();
\t\t\ta.deep(it.next(), { done: false, value: 'pięć' }, \"#5\");
\t\t\ta.deep(it.next(), { done: true, value: undefined }, \"End\");
\t\t},
\t\t\"Keys & Values\": function (a) {
\t\t\tvar x = ['raz', 'dwa', 'trzy', 'cztery', 'pięć', 'sześć'], it;

\t\t\tit = new T(x, 'key+value');
\t\t\ta(it[iteratorSymbol](), it, \"@@iterator\");
\t\t\ta.deep(it.next(), { done: false, value: [0, 'raz'] }, \"#1\");
\t\t\ta.deep(it.next(), { done: false, value: [1, 'dwa'] }, \"#2\");
\t\t\tx.splice(1, 0, 'elo');
\t\t\ta.deep(it.next(), { done: false, value: [2, 'dwa'] }, \"Insert\");
\t\t\ta.deep(it.next(), { done: false, value: [3, 'trzy'] }, \"#3\");
\t\t\ta.deep(it.next(), { done: false, value: [4, 'cztery'] }, \"#4\");
\t\t\tx.pop();
\t\t\ta.deep(it.next(), { done: false, value: [5, 'pięć'] }, \"#5\");
\t\t\ta.deep(it.next(), { done: true, value: undefined }, \"End\");
\t\t},
\t\tKeys: function (a) {
\t\t\tvar x = ['raz', 'dwa', 'trzy', 'cztery', 'pięć', 'sześć'], it;

\t\t\tit = new T(x, 'key');
\t\t\ta(it[iteratorSymbol](), it, \"@@iterator\");
\t\t\ta.deep(it.next(), { done: false, value: 0 }, \"#1\");
\t\t\ta.deep(it.next(), { done: false, value: 1 }, \"#2\");
\t\t\tx.splice(1, 0, 'elo');
\t\t\ta.deep(it.next(), { done: false, value: 2 }, \"Insert\");
\t\t\ta.deep(it.next(), { done: false, value: 3 }, \"#3\");
\t\t\ta.deep(it.next(), { done: false, value: 4 }, \"#4\");
\t\t\tx.pop();
\t\t\ta.deep(it.next(), { done: false, value: 5 }, \"#5\");
\t\t\ta.deep(it.next(), { done: true, value: undefined }, \"End\");
\t\t},
\t\tSparse: function (a) {
\t\t\tvar x = new Array(6), it;

\t\t\tx[2] = 'raz';
\t\t\tx[4] = 'dwa';
\t\t\tit = new T(x);
\t\t\ta.deep(it.next(), { done: false, value: undefined }, \"#1\");
\t\t\ta.deep(it.next(), { done: false, value: undefined }, \"#2\");
\t\t\ta.deep(it.next(), { done: false, value: 'raz' }, \"#3\");
\t\t\ta.deep(it.next(), { done: false, value: undefined }, \"#4\");
\t\t\ta.deep(it.next(), { done: false, value: 'dwa' }, \"#5\");
\t\t\ta.deep(it.next(), { done: false, value: undefined }, \"#6\");
\t\t\ta.deep(it.next(), { done: true, value: undefined }, \"End\");
\t\t}
\t};
};
";
        
        $__internal_2735ffe73183813a45a8bfc03f6970aceed82845332600104ae956c5eed26d6d->leave($__internal_2735ffe73183813a45a8bfc03f6970aceed82845332600104ae956c5eed26d6d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-iterator/test/array.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var iteratorSymbol = require('es6-symbol').iterator;

module.exports = function (T) {
\treturn {
\t\tValues: function (a) {
\t\t\tvar x = ['raz', 'dwa', 'trzy', 'cztery', 'pięć', 'sześć'], it;

\t\t\tit = new T(x);
\t\t\ta(it[iteratorSymbol](), it, \"@@iterator\");
\t\t\ta.deep(it.next(), { done: false, value: 'raz' }, \"#1\");
\t\t\ta.deep(it.next(), { done: false, value: 'dwa' }, \"#2\");
\t\t\tx.splice(1, 0, 'elo');
\t\t\ta.deep(it.next(), { done: false, value: 'dwa' }, \"Insert\");
\t\t\ta.deep(it.next(), { done: false, value: 'trzy' }, \"#3\");
\t\t\ta.deep(it.next(), { done: false, value: 'cztery' }, \"#4\");
\t\t\tx.pop();
\t\t\ta.deep(it.next(), { done: false, value: 'pięć' }, \"#5\");
\t\t\ta.deep(it.next(), { done: true, value: undefined }, \"End\");
\t\t},
\t\t\"Keys & Values\": function (a) {
\t\t\tvar x = ['raz', 'dwa', 'trzy', 'cztery', 'pięć', 'sześć'], it;

\t\t\tit = new T(x, 'key+value');
\t\t\ta(it[iteratorSymbol](), it, \"@@iterator\");
\t\t\ta.deep(it.next(), { done: false, value: [0, 'raz'] }, \"#1\");
\t\t\ta.deep(it.next(), { done: false, value: [1, 'dwa'] }, \"#2\");
\t\t\tx.splice(1, 0, 'elo');
\t\t\ta.deep(it.next(), { done: false, value: [2, 'dwa'] }, \"Insert\");
\t\t\ta.deep(it.next(), { done: false, value: [3, 'trzy'] }, \"#3\");
\t\t\ta.deep(it.next(), { done: false, value: [4, 'cztery'] }, \"#4\");
\t\t\tx.pop();
\t\t\ta.deep(it.next(), { done: false, value: [5, 'pięć'] }, \"#5\");
\t\t\ta.deep(it.next(), { done: true, value: undefined }, \"End\");
\t\t},
\t\tKeys: function (a) {
\t\t\tvar x = ['raz', 'dwa', 'trzy', 'cztery', 'pięć', 'sześć'], it;

\t\t\tit = new T(x, 'key');
\t\t\ta(it[iteratorSymbol](), it, \"@@iterator\");
\t\t\ta.deep(it.next(), { done: false, value: 0 }, \"#1\");
\t\t\ta.deep(it.next(), { done: false, value: 1 }, \"#2\");
\t\t\tx.splice(1, 0, 'elo');
\t\t\ta.deep(it.next(), { done: false, value: 2 }, \"Insert\");
\t\t\ta.deep(it.next(), { done: false, value: 3 }, \"#3\");
\t\t\ta.deep(it.next(), { done: false, value: 4 }, \"#4\");
\t\t\tx.pop();
\t\t\ta.deep(it.next(), { done: false, value: 5 }, \"#5\");
\t\t\ta.deep(it.next(), { done: true, value: undefined }, \"End\");
\t\t},
\t\tSparse: function (a) {
\t\t\tvar x = new Array(6), it;

\t\t\tx[2] = 'raz';
\t\t\tx[4] = 'dwa';
\t\t\tit = new T(x);
\t\t\ta.deep(it.next(), { done: false, value: undefined }, \"#1\");
\t\t\ta.deep(it.next(), { done: false, value: undefined }, \"#2\");
\t\t\ta.deep(it.next(), { done: false, value: 'raz' }, \"#3\");
\t\t\ta.deep(it.next(), { done: false, value: undefined }, \"#4\");
\t\t\ta.deep(it.next(), { done: false, value: 'dwa' }, \"#5\");
\t\t\ta.deep(it.next(), { done: false, value: undefined }, \"#6\");
\t\t\ta.deep(it.next(), { done: true, value: undefined }, \"End\");
\t\t}
\t};
};
", "node_modules/es6-iterator/test/array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-iterator/test/array.js");
    }
}
