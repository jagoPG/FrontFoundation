<?php

/* node_modules/es6-map/test/polyfill.js */
class __TwigTemplate_56ea7ad53095318bdf6e78e3d83b6e3dfee11c2ce5140b20f3219d4be64fe298 extends Twig_Template
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
        $__internal_e63cb1973f0c68b188f2300929716fca109d3374cb1d4cdc02531574bf0d1832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e63cb1973f0c68b188f2300929716fca109d3374cb1d4cdc02531574bf0d1832->enter($__internal_e63cb1973f0c68b188f2300929716fca109d3374cb1d4cdc02531574bf0d1832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-map/test/polyfill.js"));

        // line 1
        echo "'use strict';

var aFrom   = require('es5-ext/array/from')
  , toArray = require('es5-ext/array/to-array');

module.exports = function (T, a) {
\tvar arr = [['raz', 'one'], ['dwa', 'two'], ['trzy', 'three']]
\t  , map = new T(arr), x = {}, y = {}, i = 0;

\ta(map instanceof T, true, \"Map\");
\ta(map.size, 3, \"Size\");
\ta(map.get('raz'), 'one', \"Get: contained\");
\ta(map.get(x), undefined, \"Get: not contained\");
\ta(map.has('raz'), true, \"Has: contained\");
\ta(map.has(x), false, \"Has: not contained\");
\ta(map.set(x, y), map, \"Set: return\");
\ta(map.has(x), true, \"Set: has\");
\ta(map.get(x), y, \"Set: get\");
\ta(map.size, 4, \"Set: Size\");
\tmap.set('dwa', x);
\ta(map.get('dwa'), x, \"Overwrite: get\");
\ta(map.size, 4, \"Overwrite: size\");

\ta(map.delete({}), false, \"Delete: false\");

\tarr.push([x, y]);
\tarr[1][1] = x;
\tmap.forEach(function () {
\t\ta.deep(aFrom(arguments), [arr[i][1], arr[i][0], map],
\t\t\t\"ForEach: Arguments:  #\" + i);
\t\ta(this, y, \"ForEach: Context: #\" + i);
\t\tif (i === 0) {
\t\t\ta(map.delete('raz'), true, \"Delete: true\");
\t\t\ta(map.has('raz'), false, \"Delete\");
\t\t\ta(map.size, 3, \"Delete: size\");
\t\t\tmap.set('cztery', 'four');
\t\t\tarr.push(['cztery', 'four']);
\t\t}
\t\ti++;
\t}, y);
\tarr.splice(0, 1);

\ta.deep(toArray(map.entries()), [['dwa', x], ['trzy', 'three'], [x, y],
\t\t['cztery', 'four']], \"Entries\");
\ta.deep(toArray(map.keys()), ['dwa', 'trzy', x, 'cztery'], \"Keys\");
\ta.deep(toArray(map.values()), [x, 'three', y, 'four'], \"Values\");
\ta.deep(toArray(map), [['dwa', x], ['trzy', 'three'], [x, y],
\t\t['cztery', 'four']], \"Iterator\");

\tmap.clear();
\ta(map.size, 0, \"Clear: size\");
\ta(map.has('trzy'), false, \"Clear: has\");
\ta.deep(toArray(map), [], \"Clear: Values\");

\ta.h1(\"Empty initialization\");
\tmap = new T();
\tmap.set('foo', 'bar');
\ta(map.size, 1);
\ta(map.get('foo'), 'bar');
};
";
        
        $__internal_e63cb1973f0c68b188f2300929716fca109d3374cb1d4cdc02531574bf0d1832->leave($__internal_e63cb1973f0c68b188f2300929716fca109d3374cb1d4cdc02531574bf0d1832_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-map/test/polyfill.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var aFrom   = require('es5-ext/array/from')
  , toArray = require('es5-ext/array/to-array');

module.exports = function (T, a) {
\tvar arr = [['raz', 'one'], ['dwa', 'two'], ['trzy', 'three']]
\t  , map = new T(arr), x = {}, y = {}, i = 0;

\ta(map instanceof T, true, \"Map\");
\ta(map.size, 3, \"Size\");
\ta(map.get('raz'), 'one', \"Get: contained\");
\ta(map.get(x), undefined, \"Get: not contained\");
\ta(map.has('raz'), true, \"Has: contained\");
\ta(map.has(x), false, \"Has: not contained\");
\ta(map.set(x, y), map, \"Set: return\");
\ta(map.has(x), true, \"Set: has\");
\ta(map.get(x), y, \"Set: get\");
\ta(map.size, 4, \"Set: Size\");
\tmap.set('dwa', x);
\ta(map.get('dwa'), x, \"Overwrite: get\");
\ta(map.size, 4, \"Overwrite: size\");

\ta(map.delete({}), false, \"Delete: false\");

\tarr.push([x, y]);
\tarr[1][1] = x;
\tmap.forEach(function () {
\t\ta.deep(aFrom(arguments), [arr[i][1], arr[i][0], map],
\t\t\t\"ForEach: Arguments:  #\" + i);
\t\ta(this, y, \"ForEach: Context: #\" + i);
\t\tif (i === 0) {
\t\t\ta(map.delete('raz'), true, \"Delete: true\");
\t\t\ta(map.has('raz'), false, \"Delete\");
\t\t\ta(map.size, 3, \"Delete: size\");
\t\t\tmap.set('cztery', 'four');
\t\t\tarr.push(['cztery', 'four']);
\t\t}
\t\ti++;
\t}, y);
\tarr.splice(0, 1);

\ta.deep(toArray(map.entries()), [['dwa', x], ['trzy', 'three'], [x, y],
\t\t['cztery', 'four']], \"Entries\");
\ta.deep(toArray(map.keys()), ['dwa', 'trzy', x, 'cztery'], \"Keys\");
\ta.deep(toArray(map.values()), [x, 'three', y, 'four'], \"Values\");
\ta.deep(toArray(map), [['dwa', x], ['trzy', 'three'], [x, y],
\t\t['cztery', 'four']], \"Iterator\");

\tmap.clear();
\ta(map.size, 0, \"Clear: size\");
\ta(map.has('trzy'), false, \"Clear: has\");
\ta.deep(toArray(map), [], \"Clear: Values\");

\ta.h1(\"Empty initialization\");
\tmap = new T();
\tmap.set('foo', 'bar');
\ta(map.size, 1);
\ta(map.get('foo'), 'bar');
};
", "node_modules/es6-map/test/polyfill.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-map/test/polyfill.js");
    }
}
