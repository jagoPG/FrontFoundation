<?php

/* node_modules/es6-set/test/polyfill.js */
class __TwigTemplate_ce17c394f34fbbaae6536bc04e7468df8678defe679560d5f4eb17b6eae6075a extends Twig_Template
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
        $__internal_2634fa68c8298ede0dfdaf63062b697350f8cb8e337e872e5604333144867b58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2634fa68c8298ede0dfdaf63062b697350f8cb8e337e872e5604333144867b58->enter($__internal_2634fa68c8298ede0dfdaf63062b697350f8cb8e337e872e5604333144867b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-set/test/polyfill.js"));

        // line 1
        echo "'use strict';

var aFrom   = require('es5-ext/array/from')
  , toArray = require('es5-ext/array/to-array');

module.exports = function (T, a) {
\tvar arr = ['raz', 'dwa', 'trzy'], set = new T(arr), x = {}, y = {}, i = 0;

\ta(set instanceof T, true, \"Set\");
\ta(set.size, 3, \"Size\");
\ta(set.has('raz'), true, \"Has: true\");
\ta(set.has(x), false, \"Has: false\");
\ta(set.add(x), set, \"Add: return\");
\ta(set.has(x), true, \"Add\");
\ta(set.size, 4, \"Add: Size\");
\ta(set.delete({}), false, \"Delete: false\");

\tarr.push(x);
\tset.forEach(function () {
\t\ta.deep(aFrom(arguments), [arr[i], arr[i], set],
\t\t\t\"ForEach: Arguments:  #\" + i);
\t\ta(this, y, \"ForEach: Context: #\" + i);
\t\tif (i === 0) {
\t\t\ta(set.delete('raz'), true, \"Delete: true\");
\t\t\ta(set.has('raz'), false, \"Delete\");
\t\t\ta(set.size, 3, \"Delete: size\");
\t\t\tset.add('cztery');
\t\t\tarr.push('cztery');
\t\t}
\t\ti++;
\t}, y);
\tarr.splice(0, 1);

\ta.deep(toArray(set.entries()), [['dwa', 'dwa'], ['trzy', 'trzy'], [x, x],
\t\t['cztery', 'cztery']], \"Entries\");
\ta.deep(toArray(set.keys()), ['dwa', 'trzy', x, 'cztery'], \"Keys\");
\ta.deep(toArray(set.values()), ['dwa', 'trzy', x, 'cztery'], \"Values\");
\ta.deep(toArray(set), ['dwa', 'trzy', x, 'cztery'], \"Iterator\");

\tset.clear();
\ta(set.size, 0, \"Clear: size\");
\ta(set.has('trzy'), false, \"Clear: has\");
\ta.deep(toArray(set), [], \"Clear: Values\");

\ta.h1(\"Empty initialization\");
\tset = new T();
\tset.add('foo');
\ta(set.size, 1);
\ta(set.has('foo'), true);
};
";
        
        $__internal_2634fa68c8298ede0dfdaf63062b697350f8cb8e337e872e5604333144867b58->leave($__internal_2634fa68c8298ede0dfdaf63062b697350f8cb8e337e872e5604333144867b58_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-set/test/polyfill.js";
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
\tvar arr = ['raz', 'dwa', 'trzy'], set = new T(arr), x = {}, y = {}, i = 0;

\ta(set instanceof T, true, \"Set\");
\ta(set.size, 3, \"Size\");
\ta(set.has('raz'), true, \"Has: true\");
\ta(set.has(x), false, \"Has: false\");
\ta(set.add(x), set, \"Add: return\");
\ta(set.has(x), true, \"Add\");
\ta(set.size, 4, \"Add: Size\");
\ta(set.delete({}), false, \"Delete: false\");

\tarr.push(x);
\tset.forEach(function () {
\t\ta.deep(aFrom(arguments), [arr[i], arr[i], set],
\t\t\t\"ForEach: Arguments:  #\" + i);
\t\ta(this, y, \"ForEach: Context: #\" + i);
\t\tif (i === 0) {
\t\t\ta(set.delete('raz'), true, \"Delete: true\");
\t\t\ta(set.has('raz'), false, \"Delete\");
\t\t\ta(set.size, 3, \"Delete: size\");
\t\t\tset.add('cztery');
\t\t\tarr.push('cztery');
\t\t}
\t\ti++;
\t}, y);
\tarr.splice(0, 1);

\ta.deep(toArray(set.entries()), [['dwa', 'dwa'], ['trzy', 'trzy'], [x, x],
\t\t['cztery', 'cztery']], \"Entries\");
\ta.deep(toArray(set.keys()), ['dwa', 'trzy', x, 'cztery'], \"Keys\");
\ta.deep(toArray(set.values()), ['dwa', 'trzy', x, 'cztery'], \"Values\");
\ta.deep(toArray(set), ['dwa', 'trzy', x, 'cztery'], \"Iterator\");

\tset.clear();
\ta(set.size, 0, \"Clear: size\");
\ta(set.has('trzy'), false, \"Clear: has\");
\ta.deep(toArray(set), [], \"Clear: Values\");

\ta.h1(\"Empty initialization\");
\tset = new T();
\tset.add('foo');
\ta(set.size, 1);
\ta(set.has('foo'), true);
};
", "node_modules/es6-set/test/polyfill.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-set/test/polyfill.js");
    }
}
