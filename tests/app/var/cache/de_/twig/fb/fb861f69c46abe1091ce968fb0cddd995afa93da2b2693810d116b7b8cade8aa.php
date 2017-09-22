<?php

/* node_modules/es6-set/test/primitive/index.js */
class __TwigTemplate_742749cb3f1c4afa829ab865d53cd8d9c0c9e70b87d17836e8505791855927ed extends Twig_Template
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
        $__internal_7cd40ee04691445029eef51fe1fc5dbcc9c238a9cfa8d9ec3ed1e4510c537f06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cd40ee04691445029eef51fe1fc5dbcc9c238a9cfa8d9ec3ed1e4510c537f06->enter($__internal_7cd40ee04691445029eef51fe1fc5dbcc9c238a9cfa8d9ec3ed1e4510c537f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-set/test/primitive/index.js"));

        // line 1
        echo "'use strict';

var aFrom       = require('es5-ext/array/from')
  , getIterator = require('es6-iterator/get')
  , toArray     = require('es5-ext/array/to-array');

module.exports = function (T, a) {
\tvar arr = ['raz', 'dwa', 'trzy'], set = new T(arr), x = 'other', y = 'other2'
\t  , i = 0, result = [];

\ta(set instanceof T, true, \"Set\");
\ta(set.size, 3, \"Size\");
\ta(set.has('raz'), true, \"Has: true\");
\ta(set.has(x), false, \"Has: false\");
\ta(set.add(x), set, \"Add: return\");
\ta(set.has(x), true, \"Add\");
\ta(set.size, 4, \"Add: Size\");
\ta(set.delete('else'), false, \"Delete: false\");
\ta(set.get('raz'), 'raz', \"Get\");

\tarr.push(x);
\tset.forEach(function () {
\t\tresult.push(aFrom(arguments));
\t\ta(this, y, \"ForEach: Context: #\" + i);
\t}, y);

\ta.deep(result.sort(function (a, b) {
\t\treturn a[0].localeCompare(b[0]);
\t}), arr.sort().map(function (val) { return [val, val, set]; }));

\ta.deep(toArray(set.entries()).sort(), [['dwa', 'dwa'], ['trzy', 'trzy'],
\t\t[x, x], ['raz', 'raz']].sort(), \"Entries\");
\ta.deep(toArray(set.keys()).sort(), ['dwa', 'trzy', x, 'raz'].sort(),
\t\t\"Keys\");
\ta.deep(toArray(set.values()).sort(), ['dwa', 'trzy', x, 'raz'].sort(),
\t\t\"Values\");
\ta.deep(toArray(getIterator(set)).sort(), ['dwa', 'trzy', x, 'raz'].sort(),
\t\t\"Iterator\");

\tset.clear();
\ta(set.size, 0, \"Clear: size\");
\ta(set.has('trzy'), false, \"Clear: has\");
\ta.deep(toArray(set.values()), [], \"Clear: Values\");

\ta.h1(\"Empty initialization\");
\tset = new T();
\tset.add('foo');
\ta(set.size, 1);
\ta(set.has('foo'), true);
};
";
        
        $__internal_7cd40ee04691445029eef51fe1fc5dbcc9c238a9cfa8d9ec3ed1e4510c537f06->leave($__internal_7cd40ee04691445029eef51fe1fc5dbcc9c238a9cfa8d9ec3ed1e4510c537f06_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-set/test/primitive/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var aFrom       = require('es5-ext/array/from')
  , getIterator = require('es6-iterator/get')
  , toArray     = require('es5-ext/array/to-array');

module.exports = function (T, a) {
\tvar arr = ['raz', 'dwa', 'trzy'], set = new T(arr), x = 'other', y = 'other2'
\t  , i = 0, result = [];

\ta(set instanceof T, true, \"Set\");
\ta(set.size, 3, \"Size\");
\ta(set.has('raz'), true, \"Has: true\");
\ta(set.has(x), false, \"Has: false\");
\ta(set.add(x), set, \"Add: return\");
\ta(set.has(x), true, \"Add\");
\ta(set.size, 4, \"Add: Size\");
\ta(set.delete('else'), false, \"Delete: false\");
\ta(set.get('raz'), 'raz', \"Get\");

\tarr.push(x);
\tset.forEach(function () {
\t\tresult.push(aFrom(arguments));
\t\ta(this, y, \"ForEach: Context: #\" + i);
\t}, y);

\ta.deep(result.sort(function (a, b) {
\t\treturn a[0].localeCompare(b[0]);
\t}), arr.sort().map(function (val) { return [val, val, set]; }));

\ta.deep(toArray(set.entries()).sort(), [['dwa', 'dwa'], ['trzy', 'trzy'],
\t\t[x, x], ['raz', 'raz']].sort(), \"Entries\");
\ta.deep(toArray(set.keys()).sort(), ['dwa', 'trzy', x, 'raz'].sort(),
\t\t\"Keys\");
\ta.deep(toArray(set.values()).sort(), ['dwa', 'trzy', x, 'raz'].sort(),
\t\t\"Values\");
\ta.deep(toArray(getIterator(set)).sort(), ['dwa', 'trzy', x, 'raz'].sort(),
\t\t\"Iterator\");

\tset.clear();
\ta(set.size, 0, \"Clear: size\");
\ta(set.has('trzy'), false, \"Clear: has\");
\ta.deep(toArray(set.values()), [], \"Clear: Values\");

\ta.h1(\"Empty initialization\");
\tset = new T();
\tset.add('foo');
\ta(set.size, 1);
\ta(set.has('foo'), true);
};
", "node_modules/es6-set/test/primitive/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-set/test/primitive/index.js");
    }
}
