<?php

/* node_modules/es6-map/test/lib/primitive-iterator.js */
class __TwigTemplate_1d06d9ec1b5a44da5feef6c95c3c55582c113b8d1d38eb12c4fee8b8f5ca5665 extends Twig_Template
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
        $__internal_d2729b7c3d674244b0d1aa059208aed16627553ebbdbc10dc6cb69c945338e05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2729b7c3d674244b0d1aa059208aed16627553ebbdbc10dc6cb69c945338e05->enter($__internal_d2729b7c3d674244b0d1aa059208aed16627553ebbdbc10dc6cb69c945338e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-map/test/lib/primitive-iterator.js"));

        // line 1
        echo "'use strict';

var iteratorSymbol = require('es6-symbol').iterator
  , toArray        = require('es5-ext/array/to-array')
  , Map            = require('../../primitive')

  , compare, mapToResults;

compare = function (a, b) {
\tif (!a.value) return -1;
\tif (!b.value) return 1;
\treturn a.value[0].localeCompare(b.value[0]);
};

mapToResults = function (arr) {
\treturn arr.sort().map(function (value) {
\t\treturn { done: false, value: value };
\t});
};

module.exports = function (T) {
\treturn {
\t\t\"\": function (a) {
\t\t\tvar arr, it, y, z, map, result = [];

\t\t\tarr = [['raz', 'one'], ['dwa', 'two'], ['trzy', 'three'],
\t\t\t\t['cztery', 'four'], ['pięć', 'five']];
\t\t\tmap = new Map(arr);

\t\t\tit = new T(map);
\t\t\ta(it[iteratorSymbol](), it, \"@@iterator\");
\t\t\ty = it.next();
\t\t\tresult.push(y);
\t\t\tz = it.next();
\t\t\ta.not(y, z, \"Recreate result\");
\t\t\tresult.push(z);
\t\t\tresult.push(it.next());
\t\t\tresult.push(it.next());
\t\t\tresult.push(it.next());
\t\t\ta.deep(result.sort(compare), mapToResults(arr));
\t\t\ta.deep(y = it.next(), { done: true, value: undefined }, \"End\");
\t\t\ta.not(y, it.next(), \"Recreate result on dead\");
\t\t},
\t\tEmited: function (a) {
\t\t\tvar arr, it, map, result = [];

\t\t\tarr = [['raz', 'one'], ['dwa', 'two'], ['trzy', 'three'],
\t\t\t\t['cztery', 'four'], ['pięć', 'five']];
\t\t\tmap = new Map(arr);

\t\t\tit = new T(map);
\t\t\tresult.push(it.next());
\t\t\tresult.push(it.next());
\t\t\tmap.set('sześć', 'six');
\t\t\tarr.push(['sześć', 'six']);
\t\t\tresult.push(it.next());
\t\t\tmap.delete('pięć');
\t\t\tarr.splice(4, 1);
\t\t\tresult.push(it.next());
\t\t\tresult.push(it.next());
\t\t\ta.deep(result.sort(compare), mapToResults(arr));
\t\t\ta.deep(it.next(), { done: true, value: undefined }, \"End\");
\t\t},
\t\t\"Emited #2\": function (a) {
\t\t\tvar arr, it, map, result = [];

\t\t\tarr = [['raz', 'one'], ['dwa', 'two'], ['trzy', 'three'],
\t\t\t\t['cztery', 'four'], ['pięć', 'five'], ['sześć', 'six']];
\t\t\tmap = new Map(arr);

\t\t\tit = new T(map);
\t\t\tresult.push(it.next());
\t\t\tresult.push(it.next());
\t\t\tmap.set('siedem', 'seven');
\t\t\tmap.delete('siedem');
\t\t\tresult.push(it.next());
\t\t\tresult.push(it.next());
\t\t\tmap.delete('pięć');
\t\t\tarr.splice(4, 1);
\t\t\tresult.push(it.next());
\t\t\ta.deep(result.sort(compare), mapToResults(arr));
\t\t\ta.deep(it.next(), { done: true, value: undefined }, \"End\");
\t\t},
\t\t\"Emited: Clear #1\": function (a) {
\t\t\tvar arr, it, map, result = [];

\t\t\tarr = [['raz', 'one'], ['dwa', 'two'], ['trzy', 'three'],
\t\t\t\t['cztery', 'four'], ['pięć', 'five'], ['sześć', 'six']];
\t\t\tmap = new Map(arr);

\t\t\tit = new T(map);
\t\t\tresult.push(it.next());
\t\t\tresult.push(it.next());
\t\t\tarr = [['raz', 'one'], ['dwa', 'two']];
\t\t\tmap.clear();
\t\t\ta.deep(result.sort(compare), mapToResults(arr));
\t\t\ta.deep(it.next(), { done: true, value: undefined }, \"End\");
\t\t},
\t\t\"Emited: Clear #2\": function (a) {
\t\t\tvar arr, it, map, result = [];

\t\t\tarr = [['raz', 'one'], ['dwa', 'two'], ['trzy', 'three'],
\t\t\t\t['cztery', 'four'], ['pięć', 'five'], ['sześć', 'six']];
\t\t\tmap = new Map(arr);

\t\t\tit = new T(map);
\t\t\tresult.push(it.next());
\t\t\tresult.push(it.next());
\t\t\tmap.clear();
\t\t\tmap.set('foo', 'bru');
\t\t\tmap.set('bar', 'far');
\t\t\tarr = [['raz', 'one'], ['dwa', 'two'], ['foo', 'bru'], ['bar', 'far']];
\t\t\tresult.push(it.next());
\t\t\tresult.push(it.next());
\t\t\ta.deep(result.sort(compare), mapToResults(arr));
\t\t\ta.deep(it.next(), { done: true, value: undefined }, \"End\");
\t\t},
\t\tKinds: function (a) {
\t\t\tvar arr = [['raz', 'one'], ['dwa', 'two']], map = new Map(arr);

\t\t\ta.deep(toArray(new T(map)).sort(), arr.sort(), \"Default\");
\t\t\ta.deep(toArray(new T(map, 'key+value')).sort(), arr.sort(),
\t\t\t\t\"Key + Value\");
\t\t\ta.deep(toArray(new T(map, 'value')).sort(), ['one', 'two'].sort(),
\t\t\t\t\"Value\");
\t\t\ta.deep(toArray(new T(map, 'key')).sort(), ['raz', 'dwa'].sort(),
\t\t\t\t\"Key\");
\t\t}
\t};
};
";
        
        $__internal_d2729b7c3d674244b0d1aa059208aed16627553ebbdbc10dc6cb69c945338e05->leave($__internal_d2729b7c3d674244b0d1aa059208aed16627553ebbdbc10dc6cb69c945338e05_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-map/test/lib/primitive-iterator.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var iteratorSymbol = require('es6-symbol').iterator
  , toArray        = require('es5-ext/array/to-array')
  , Map            = require('../../primitive')

  , compare, mapToResults;

compare = function (a, b) {
\tif (!a.value) return -1;
\tif (!b.value) return 1;
\treturn a.value[0].localeCompare(b.value[0]);
};

mapToResults = function (arr) {
\treturn arr.sort().map(function (value) {
\t\treturn { done: false, value: value };
\t});
};

module.exports = function (T) {
\treturn {
\t\t\"\": function (a) {
\t\t\tvar arr, it, y, z, map, result = [];

\t\t\tarr = [['raz', 'one'], ['dwa', 'two'], ['trzy', 'three'],
\t\t\t\t['cztery', 'four'], ['pięć', 'five']];
\t\t\tmap = new Map(arr);

\t\t\tit = new T(map);
\t\t\ta(it[iteratorSymbol](), it, \"@@iterator\");
\t\t\ty = it.next();
\t\t\tresult.push(y);
\t\t\tz = it.next();
\t\t\ta.not(y, z, \"Recreate result\");
\t\t\tresult.push(z);
\t\t\tresult.push(it.next());
\t\t\tresult.push(it.next());
\t\t\tresult.push(it.next());
\t\t\ta.deep(result.sort(compare), mapToResults(arr));
\t\t\ta.deep(y = it.next(), { done: true, value: undefined }, \"End\");
\t\t\ta.not(y, it.next(), \"Recreate result on dead\");
\t\t},
\t\tEmited: function (a) {
\t\t\tvar arr, it, map, result = [];

\t\t\tarr = [['raz', 'one'], ['dwa', 'two'], ['trzy', 'three'],
\t\t\t\t['cztery', 'four'], ['pięć', 'five']];
\t\t\tmap = new Map(arr);

\t\t\tit = new T(map);
\t\t\tresult.push(it.next());
\t\t\tresult.push(it.next());
\t\t\tmap.set('sześć', 'six');
\t\t\tarr.push(['sześć', 'six']);
\t\t\tresult.push(it.next());
\t\t\tmap.delete('pięć');
\t\t\tarr.splice(4, 1);
\t\t\tresult.push(it.next());
\t\t\tresult.push(it.next());
\t\t\ta.deep(result.sort(compare), mapToResults(arr));
\t\t\ta.deep(it.next(), { done: true, value: undefined }, \"End\");
\t\t},
\t\t\"Emited #2\": function (a) {
\t\t\tvar arr, it, map, result = [];

\t\t\tarr = [['raz', 'one'], ['dwa', 'two'], ['trzy', 'three'],
\t\t\t\t['cztery', 'four'], ['pięć', 'five'], ['sześć', 'six']];
\t\t\tmap = new Map(arr);

\t\t\tit = new T(map);
\t\t\tresult.push(it.next());
\t\t\tresult.push(it.next());
\t\t\tmap.set('siedem', 'seven');
\t\t\tmap.delete('siedem');
\t\t\tresult.push(it.next());
\t\t\tresult.push(it.next());
\t\t\tmap.delete('pięć');
\t\t\tarr.splice(4, 1);
\t\t\tresult.push(it.next());
\t\t\ta.deep(result.sort(compare), mapToResults(arr));
\t\t\ta.deep(it.next(), { done: true, value: undefined }, \"End\");
\t\t},
\t\t\"Emited: Clear #1\": function (a) {
\t\t\tvar arr, it, map, result = [];

\t\t\tarr = [['raz', 'one'], ['dwa', 'two'], ['trzy', 'three'],
\t\t\t\t['cztery', 'four'], ['pięć', 'five'], ['sześć', 'six']];
\t\t\tmap = new Map(arr);

\t\t\tit = new T(map);
\t\t\tresult.push(it.next());
\t\t\tresult.push(it.next());
\t\t\tarr = [['raz', 'one'], ['dwa', 'two']];
\t\t\tmap.clear();
\t\t\ta.deep(result.sort(compare), mapToResults(arr));
\t\t\ta.deep(it.next(), { done: true, value: undefined }, \"End\");
\t\t},
\t\t\"Emited: Clear #2\": function (a) {
\t\t\tvar arr, it, map, result = [];

\t\t\tarr = [['raz', 'one'], ['dwa', 'two'], ['trzy', 'three'],
\t\t\t\t['cztery', 'four'], ['pięć', 'five'], ['sześć', 'six']];
\t\t\tmap = new Map(arr);

\t\t\tit = new T(map);
\t\t\tresult.push(it.next());
\t\t\tresult.push(it.next());
\t\t\tmap.clear();
\t\t\tmap.set('foo', 'bru');
\t\t\tmap.set('bar', 'far');
\t\t\tarr = [['raz', 'one'], ['dwa', 'two'], ['foo', 'bru'], ['bar', 'far']];
\t\t\tresult.push(it.next());
\t\t\tresult.push(it.next());
\t\t\ta.deep(result.sort(compare), mapToResults(arr));
\t\t\ta.deep(it.next(), { done: true, value: undefined }, \"End\");
\t\t},
\t\tKinds: function (a) {
\t\t\tvar arr = [['raz', 'one'], ['dwa', 'two']], map = new Map(arr);

\t\t\ta.deep(toArray(new T(map)).sort(), arr.sort(), \"Default\");
\t\t\ta.deep(toArray(new T(map, 'key+value')).sort(), arr.sort(),
\t\t\t\t\"Key + Value\");
\t\t\ta.deep(toArray(new T(map, 'value')).sort(), ['one', 'two'].sort(),
\t\t\t\t\"Value\");
\t\t\ta.deep(toArray(new T(map, 'key')).sort(), ['raz', 'dwa'].sort(),
\t\t\t\t\"Key\");
\t\t}
\t};
};
", "node_modules/es6-map/test/lib/primitive-iterator.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-map/test/lib/primitive-iterator.js");
    }
}
