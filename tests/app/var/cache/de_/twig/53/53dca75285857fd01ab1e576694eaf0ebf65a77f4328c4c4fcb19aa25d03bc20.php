<?php

/* node_modules/es6-map/test/primitive/index.js */
class __TwigTemplate_720e72eb49660a8db7961154014152e9b5d27af22410d4ac72561e0f9640f2f6 extends Twig_Template
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
        $__internal_f3e8eefd563ee3f82a9cf3e243d731865ef14b89cbfcd307d9bbbb112ba0099c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e8eefd563ee3f82a9cf3e243d731865ef14b89cbfcd307d9bbbb112ba0099c->enter($__internal_f3e8eefd563ee3f82a9cf3e243d731865ef14b89cbfcd307d9bbbb112ba0099c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-map/test/primitive/index.js"));

        // line 1
        echo "'use strict';

var aFrom       = require('es5-ext/array/from')
  , getIterator = require('es6-iterator/get')
  , toArray     = require('es5-ext/array/to-array');

module.exports = function (T, a) {
\tvar arr = [['raz', 'one'], ['dwa', 'two'], ['trzy', 'three']]
\t  , map = new T(arr), x = 'other', y = 'other2'
\t  , i = 0, result = [];

\ta(map instanceof T, true, \"Map\");
\ta(map.size, 3, \"Size\");
\ta(map.get('raz'), 'one', \"Get: contained\");
\ta(map.get(x), undefined, \"Get: not contained\");
\ta(map.has('raz'), true, \"Has: true\");
\ta(map.has(x), false, \"Has: false\");
\ta(map.set(x, y), map, \"Add: return\");
\ta(map.has(x), true, \"Add\");
\ta(map.size, 4, \"Add: Size\");
\tmap.set('dwa', x);
\ta(map.get('dwa'), x, \"Overwrite: get\");
\ta(map.size, 4, \"Overwrite: size\");

\ta(map.delete('else'), false, \"Delete: false\");

\tarr.push([x, y]);
\tarr[1][1] = x;
\tmap.forEach(function () {
\t\tresult.push(aFrom(arguments));
\t\ta(this, y, \"ForEach: Context: #\" + i);
\t}, y);

\ta.deep(result.sort(function (a, b) {
\t\treturn String([a[1], a[0]]).localeCompare([b[1], b[0]]);
\t}), arr.sort().map(function (val) { return [val[1], val[0], map]; }),
\t\t\"ForEach: Arguments\");

\ta.deep(toArray(map.entries()).sort(), [['dwa', x], ['trzy', 'three'],
\t\t[x, y], ['raz', 'one']].sort(), \"Entries\");
\ta.deep(toArray(map.keys()).sort(), ['dwa', 'trzy', x, 'raz'].sort(),
\t\t\"Keys\");
\ta.deep(toArray(map.values()).sort(), [x, 'three', y, 'one'].sort(),
\t\t\"Values\");
\ta.deep(toArray(getIterator(map)).sort(), [['dwa', x], ['trzy', 'three'],
\t\t[x, y], ['raz', 'one']].sort(),
\t\t\"Iterator\");

\tmap.clear();
\ta(map.size, 0, \"Clear: size\");
\ta(map.has('trzy'), false, \"Clear: has\");
\ta.deep(toArray(map.values()), [], \"Clear: Values\");

\ta.h1(\"Empty initialization\");
\tmap = new T();
\tmap.set('foo', 'bar');
\ta(map.size, 1);
\ta(map.get('foo'), 'bar');
};
";
        
        $__internal_f3e8eefd563ee3f82a9cf3e243d731865ef14b89cbfcd307d9bbbb112ba0099c->leave($__internal_f3e8eefd563ee3f82a9cf3e243d731865ef14b89cbfcd307d9bbbb112ba0099c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-map/test/primitive/index.js";
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
\tvar arr = [['raz', 'one'], ['dwa', 'two'], ['trzy', 'three']]
\t  , map = new T(arr), x = 'other', y = 'other2'
\t  , i = 0, result = [];

\ta(map instanceof T, true, \"Map\");
\ta(map.size, 3, \"Size\");
\ta(map.get('raz'), 'one', \"Get: contained\");
\ta(map.get(x), undefined, \"Get: not contained\");
\ta(map.has('raz'), true, \"Has: true\");
\ta(map.has(x), false, \"Has: false\");
\ta(map.set(x, y), map, \"Add: return\");
\ta(map.has(x), true, \"Add\");
\ta(map.size, 4, \"Add: Size\");
\tmap.set('dwa', x);
\ta(map.get('dwa'), x, \"Overwrite: get\");
\ta(map.size, 4, \"Overwrite: size\");

\ta(map.delete('else'), false, \"Delete: false\");

\tarr.push([x, y]);
\tarr[1][1] = x;
\tmap.forEach(function () {
\t\tresult.push(aFrom(arguments));
\t\ta(this, y, \"ForEach: Context: #\" + i);
\t}, y);

\ta.deep(result.sort(function (a, b) {
\t\treturn String([a[1], a[0]]).localeCompare([b[1], b[0]]);
\t}), arr.sort().map(function (val) { return [val[1], val[0], map]; }),
\t\t\"ForEach: Arguments\");

\ta.deep(toArray(map.entries()).sort(), [['dwa', x], ['trzy', 'three'],
\t\t[x, y], ['raz', 'one']].sort(), \"Entries\");
\ta.deep(toArray(map.keys()).sort(), ['dwa', 'trzy', x, 'raz'].sort(),
\t\t\"Keys\");
\ta.deep(toArray(map.values()).sort(), [x, 'three', y, 'one'].sort(),
\t\t\"Values\");
\ta.deep(toArray(getIterator(map)).sort(), [['dwa', x], ['trzy', 'three'],
\t\t[x, y], ['raz', 'one']].sort(),
\t\t\"Iterator\");

\tmap.clear();
\ta(map.size, 0, \"Clear: size\");
\ta(map.has('trzy'), false, \"Clear: has\");
\ta.deep(toArray(map.values()), [], \"Clear: Values\");

\ta.h1(\"Empty initialization\");
\tmap = new T();
\tmap.set('foo', 'bar');
\ta(map.size, 1);
\ta(map.get('foo'), 'bar');
};
", "node_modules/es6-map/test/primitive/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-map/test/primitive/index.js");
    }
}
