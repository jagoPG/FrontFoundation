<?php

/* node_modules/es6-set/test/lib/primitive-iterator.js */
class __TwigTemplate_356c2490771c5599d84de0e8cd28fd0472df8961c99022199ca3ad095efae6a4 extends Twig_Template
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
        $__internal_23461f6262c6b7da9ab3cef8a9caace43f640faaf65952c44616cdc11b49d938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23461f6262c6b7da9ab3cef8a9caace43f640faaf65952c44616cdc11b49d938->enter($__internal_23461f6262c6b7da9ab3cef8a9caace43f640faaf65952c44616cdc11b49d938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-set/test/lib/primitive-iterator.js"));

        // line 1
        echo "'use strict';

var Set            = require('../../primitive')
  , toArray        = require('es5-ext/array/to-array')
  , iteratorSymbol = require('es6-symbol').iterator

  , compare, map;

compare = function (a, b) {
\tif (!a.value) return -1;
\tif (!b.value) return 1;
\treturn a.value.localeCompare(b.value);
};

map = function (arr) {
\treturn arr.sort().map(function (value) {
\t\treturn { done: false, value: value };
\t});
};

module.exports = function (T) {
\treturn {
\t\t\"\": function (a) {
\t\t\tvar arr = ['raz', 'dwa', 'trzy', 'cztery', 'pięć'], it, y, z
\t\t\t  , set = new Set(arr), result = [];

\t\t\tit = new T(set);
\t\t\ta(it[iteratorSymbol](), it, \"@@iterator\");
\t\t\ty = it.next();
\t\t\tresult.push(y);
\t\t\tz = it.next();
\t\t\ta.not(y, z, \"Recreate result\");
\t\t\tresult.push(z);
\t\t\tresult.push(it.next());
\t\t\tresult.push(it.next());
\t\t\tresult.push(it.next());
\t\t\ta.deep(result.sort(compare), map(arr));
\t\t\ta.deep(y = it.next(), { done: true, value: undefined }, \"End\");
\t\t\ta.not(y, it.next(), \"Recreate result on dead\");
\t\t},
\t\tEmited: function (a) {
\t\t\tvar arr = ['raz', 'dwa', 'trzy', 'cztery', 'pięć'], it
\t\t\t  , set = new Set(arr), result = [];

\t\t\tit = new T(set);
\t\t\tresult.push(it.next());
\t\t\tresult.push(it.next());
\t\t\tset.add('sześć');
\t\t\tarr.push('sześć');
\t\t\tresult.push(it.next());
\t\t\tset.delete('pięć');
\t\t\tarr.splice(4, 1);
\t\t\tresult.push(it.next());
\t\t\tresult.push(it.next());
\t\t\ta.deep(result.sort(compare), map(arr));
\t\t\ta.deep(it.next(), { done: true, value: undefined }, \"End\");
\t\t},
\t\t\"Emited #2\": function (a) {
\t\t\tvar arr = ['raz', 'dwa', 'trzy', 'cztery', 'pięć', 'sześć'], it
\t\t\t  , set = new Set(arr), result = [];

\t\t\tit = new T(set);
\t\t\tresult.push(it.next());
\t\t\tresult.push(it.next());
\t\t\tset.add('siedem');
\t\t\tset.delete('siedem');
\t\t\tresult.push(it.next());
\t\t\tresult.push(it.next());
\t\t\tset.delete('pięć');
\t\t\tarr.splice(4, 1);
\t\t\tresult.push(it.next());
\t\t\ta.deep(result.sort(compare), map(arr));
\t\t\ta.deep(it.next(), { done: true, value: undefined }, \"End\");
\t\t},
\t\t\"Emited: Clear #1\": function (a) {
\t\t\tvar arr = ['raz', 'dwa', 'trzy', 'cztery', 'pięć', 'sześć'], it
\t\t\t  , set = new Set(arr), result = [];

\t\t\tit = new T(set);
\t\t\tresult.push(it.next());
\t\t\tresult.push(it.next());
\t\t\tarr = ['raz', 'dwa'];
\t\t\tset.clear();
\t\t\ta.deep(result.sort(compare), map(arr));
\t\t\ta.deep(it.next(), { done: true, value: undefined }, \"End\");
\t\t},
\t\t\"Emited: Clear #2\": function (a) {
\t\t\tvar arr = ['raz', 'dwa', 'trzy', 'cztery', 'pięć', 'sześć'], it
\t\t\t  , set = new Set(arr), result = [];

\t\t\tit = new T(set);
\t\t\tresult.push(it.next());
\t\t\tresult.push(it.next());
\t\t\tset.clear();
\t\t\tset.add('foo');
\t\t\tset.add('bar');
\t\t\tarr = ['raz', 'dwa', 'foo', 'bar'];
\t\t\tresult.push(it.next());
\t\t\tresult.push(it.next());
\t\t\ta.deep(result.sort(compare), map(arr));
\t\t\ta.deep(it.next(), { done: true, value: undefined }, \"End\");
\t\t},
\t\tKinds: function (a) {
\t\t\tvar set = new Set(['raz', 'dwa']);

\t\t\ta.deep(toArray(new T(set)).sort(), ['raz', 'dwa'].sort(), \"Default\");
\t\t\ta.deep(toArray(new T(set, 'key+value')).sort(),
\t\t\t\t[['raz', 'raz'], ['dwa', 'dwa']].sort(), \"Key & Value\");
\t\t\ta.deep(toArray(new T(set, 'value')).sort(), ['raz', 'dwa'].sort(),
\t\t\t\t\"Other\");
\t\t}
\t};
};
";
        
        $__internal_23461f6262c6b7da9ab3cef8a9caace43f640faaf65952c44616cdc11b49d938->leave($__internal_23461f6262c6b7da9ab3cef8a9caace43f640faaf65952c44616cdc11b49d938_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-set/test/lib/primitive-iterator.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var Set            = require('../../primitive')
  , toArray        = require('es5-ext/array/to-array')
  , iteratorSymbol = require('es6-symbol').iterator

  , compare, map;

compare = function (a, b) {
\tif (!a.value) return -1;
\tif (!b.value) return 1;
\treturn a.value.localeCompare(b.value);
};

map = function (arr) {
\treturn arr.sort().map(function (value) {
\t\treturn { done: false, value: value };
\t});
};

module.exports = function (T) {
\treturn {
\t\t\"\": function (a) {
\t\t\tvar arr = ['raz', 'dwa', 'trzy', 'cztery', 'pięć'], it, y, z
\t\t\t  , set = new Set(arr), result = [];

\t\t\tit = new T(set);
\t\t\ta(it[iteratorSymbol](), it, \"@@iterator\");
\t\t\ty = it.next();
\t\t\tresult.push(y);
\t\t\tz = it.next();
\t\t\ta.not(y, z, \"Recreate result\");
\t\t\tresult.push(z);
\t\t\tresult.push(it.next());
\t\t\tresult.push(it.next());
\t\t\tresult.push(it.next());
\t\t\ta.deep(result.sort(compare), map(arr));
\t\t\ta.deep(y = it.next(), { done: true, value: undefined }, \"End\");
\t\t\ta.not(y, it.next(), \"Recreate result on dead\");
\t\t},
\t\tEmited: function (a) {
\t\t\tvar arr = ['raz', 'dwa', 'trzy', 'cztery', 'pięć'], it
\t\t\t  , set = new Set(arr), result = [];

\t\t\tit = new T(set);
\t\t\tresult.push(it.next());
\t\t\tresult.push(it.next());
\t\t\tset.add('sześć');
\t\t\tarr.push('sześć');
\t\t\tresult.push(it.next());
\t\t\tset.delete('pięć');
\t\t\tarr.splice(4, 1);
\t\t\tresult.push(it.next());
\t\t\tresult.push(it.next());
\t\t\ta.deep(result.sort(compare), map(arr));
\t\t\ta.deep(it.next(), { done: true, value: undefined }, \"End\");
\t\t},
\t\t\"Emited #2\": function (a) {
\t\t\tvar arr = ['raz', 'dwa', 'trzy', 'cztery', 'pięć', 'sześć'], it
\t\t\t  , set = new Set(arr), result = [];

\t\t\tit = new T(set);
\t\t\tresult.push(it.next());
\t\t\tresult.push(it.next());
\t\t\tset.add('siedem');
\t\t\tset.delete('siedem');
\t\t\tresult.push(it.next());
\t\t\tresult.push(it.next());
\t\t\tset.delete('pięć');
\t\t\tarr.splice(4, 1);
\t\t\tresult.push(it.next());
\t\t\ta.deep(result.sort(compare), map(arr));
\t\t\ta.deep(it.next(), { done: true, value: undefined }, \"End\");
\t\t},
\t\t\"Emited: Clear #1\": function (a) {
\t\t\tvar arr = ['raz', 'dwa', 'trzy', 'cztery', 'pięć', 'sześć'], it
\t\t\t  , set = new Set(arr), result = [];

\t\t\tit = new T(set);
\t\t\tresult.push(it.next());
\t\t\tresult.push(it.next());
\t\t\tarr = ['raz', 'dwa'];
\t\t\tset.clear();
\t\t\ta.deep(result.sort(compare), map(arr));
\t\t\ta.deep(it.next(), { done: true, value: undefined }, \"End\");
\t\t},
\t\t\"Emited: Clear #2\": function (a) {
\t\t\tvar arr = ['raz', 'dwa', 'trzy', 'cztery', 'pięć', 'sześć'], it
\t\t\t  , set = new Set(arr), result = [];

\t\t\tit = new T(set);
\t\t\tresult.push(it.next());
\t\t\tresult.push(it.next());
\t\t\tset.clear();
\t\t\tset.add('foo');
\t\t\tset.add('bar');
\t\t\tarr = ['raz', 'dwa', 'foo', 'bar'];
\t\t\tresult.push(it.next());
\t\t\tresult.push(it.next());
\t\t\ta.deep(result.sort(compare), map(arr));
\t\t\ta.deep(it.next(), { done: true, value: undefined }, \"End\");
\t\t},
\t\tKinds: function (a) {
\t\t\tvar set = new Set(['raz', 'dwa']);

\t\t\ta.deep(toArray(new T(set)).sort(), ['raz', 'dwa'].sort(), \"Default\");
\t\t\ta.deep(toArray(new T(set, 'key+value')).sort(),
\t\t\t\t[['raz', 'raz'], ['dwa', 'dwa']].sort(), \"Key & Value\");
\t\t\ta.deep(toArray(new T(set, 'value')).sort(), ['raz', 'dwa'].sort(),
\t\t\t\t\"Other\");
\t\t}
\t};
};
", "node_modules/es6-set/test/lib/primitive-iterator.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-set/test/lib/primitive-iterator.js");
    }
}
