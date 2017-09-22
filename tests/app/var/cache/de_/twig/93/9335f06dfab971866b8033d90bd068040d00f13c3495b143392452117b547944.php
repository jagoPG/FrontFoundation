<?php

/* node_modules/es6-iterator/test/index.js */
class __TwigTemplate_80a1494e4ad2f26b47dd4e521a88e5cde13316c4c3cefca6cc47a1f930806c93 extends Twig_Template
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
        $__internal_5ec52a3be48225020d40b212f052ca0adbc231b2f034efb5bed1259f66ad130a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ec52a3be48225020d40b212f052ca0adbc231b2f034efb5bed1259f66ad130a->enter($__internal_5ec52a3be48225020d40b212f052ca0adbc231b2f034efb5bed1259f66ad130a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-iterator/test/index.js"));

        // line 1
        echo "'use strict';

var ee             = require('event-emitter')
  , iteratorSymbol = require('es6-symbol').iterator;

module.exports = function (T) {
\treturn {
\t\t\"\": function (a) {
\t\t\tvar x = ['raz', 'dwa', 'trzy', 'cztery', 'pięć'], it, y, z;

\t\t\tit = new T(x);
\t\t\ta(it[iteratorSymbol](), it, \"@@iterator\");
\t\t\ty = it.next();
\t\t\ta.deep(y, { done: false, value: 'raz' }, \"#1\");
\t\t\tz = it.next();
\t\t\ta.not(y, z, \"Recreate result\");
\t\t\ta.deep(z, { done: false, value: 'dwa' }, \"#2\");
\t\t\ta.deep(it.next(), { done: false, value: 'trzy' }, \"#3\");
\t\t\ta.deep(it.next(), { done: false, value: 'cztery' }, \"#4\");
\t\t\ta.deep(it.next(), { done: false, value: 'pięć' }, \"#5\");
\t\t\ta.deep(y = it.next(), { done: true, value: undefined }, \"End\");
\t\t\ta.not(y, it.next(), \"Recreate result on dead\");
\t\t},
\t\tEmited: function (a) {
\t\t\tvar x = ['raz', 'dwa', 'trzy', 'cztery', 'pięć'], y, it;

\t\t\ty = ee();
\t\t\tit = new T(x, y);
\t\t\ta.deep(it.next(), { done: false, value: 'raz' }, \"#1\");
\t\t\ta.deep(it.next(), { done: false, value: 'dwa' }, \"#2\");
\t\t\ty.emit('_add', x.push('sześć') - 1);
\t\t\ta.deep(it.next(), { done: false, value: 'trzy' }, \"#3\");
\t\t\tx.splice(1, 0, 'półtora');
\t\t\ty.emit('_add', 1);
\t\t\ta.deep(it.next(), { done: false, value: 'półtora' }, \"Insert\");
\t\t\tx.splice(5, 1);
\t\t\ty.emit('_delete', 5);
\t\t\ta.deep(it.next(), { done: false, value: 'cztery' }, \"#4\");
\t\t\ta.deep(it.next(), { done: false, value: 'sześć' }, \"#5\");
\t\t\ta.deep(it.next(), { done: true, value: undefined }, \"End\");
\t\t},
\t\t\"Emited #2\": function (a) {
\t\t\tvar x = ['raz', 'dwa', 'trzy', 'cztery', 'pięć', 'sześć'], y, it;

\t\t\ty = ee();
\t\t\tit = new T(x, y);
\t\t\ta.deep(it.next(), { done: false, value: 'raz' }, \"#1\");
\t\t\ta.deep(it.next(), { done: false, value: 'dwa' }, \"#2\");
\t\t\tx.splice(1, 0, 'półtora');
\t\t\ty.emit('_add', 1);
\t\t\tx.splice(1, 0, '1.25');
\t\t\ty.emit('_add', 1);
\t\t\tx.splice(0, 1);
\t\t\ty.emit('_delete', 0);
\t\t\ta.deep(it.next(), { done: false, value: 'półtora' }, \"Insert\");
\t\t\ta.deep(it.next(), { done: false, value: '1.25' }, \"Insert #2\");
\t\t\ta.deep(it.next(), { done: false, value: 'trzy' }, \"#3\");
\t\t\ta.deep(it.next(), { done: false, value: 'cztery' }, \"#4\");
\t\t\tx.splice(5, 1);
\t\t\ty.emit('_delete', 5);
\t\t\ta.deep(it.next(), { done: false, value: 'sześć' }, \"#5\");
\t\t\ta.deep(it.next(), { done: true, value: undefined }, \"End\");
\t\t},
\t\t\"Emited: Clear #1\": function (a) {
\t\t\tvar x = ['raz', 'dwa', 'trzy', 'cztery', 'pięć', 'sześć'], y, it;

\t\t\ty = ee();
\t\t\tit = new T(x, y);
\t\t\ta.deep(it.next(), { done: false, value: 'raz' }, \"#1\");
\t\t\ta.deep(it.next(), { done: false, value: 'dwa' }, \"#2\");
\t\t\tx.length = 0;
\t\t\ty.emit('_clear');
\t\t\ta.deep(it.next(), { done: true, value: undefined }, \"End\");
\t\t},
\t\t\"Emited: Clear #2\": function (a) {
\t\t\tvar x = ['raz', 'dwa', 'trzy', 'cztery', 'pięć', 'sześć'], y, it;

\t\t\ty = ee();
\t\t\tit = new T(x, y);
\t\t\ta.deep(it.next(), { done: false, value: 'raz' }, \"#1\");
\t\t\ta.deep(it.next(), { done: false, value: 'dwa' }, \"#2\");
\t\t\tx.length = 0;
\t\t\ty.emit('_clear');
\t\t\tx.push('foo');
\t\t\tx.push('bar');
\t\t\ta.deep(it.next(), { done: false, value: 'foo' }, \"#3\");
\t\t\ta.deep(it.next(), { done: false, value: 'bar' }, \"#4\");
\t\t\tx.splice(1, 0, 'półtora');
\t\t\ty.emit('_add', 1);
\t\t\tx.splice(1, 0, '1.25');
\t\t\ty.emit('_add', 1);
\t\t\tx.splice(0, 1);
\t\t\ty.emit('_delete', 0);
\t\t\ta.deep(it.next(), { done: false, value: 'półtora' }, \"Insert\");
\t\t\ta.deep(it.next(), { done: false, value: '1.25' }, \"Insert #2\");
\t\t\ta.deep(it.next(), { done: true, value: undefined }, \"End\");
\t\t}
\t};
};
";
        
        $__internal_5ec52a3be48225020d40b212f052ca0adbc231b2f034efb5bed1259f66ad130a->leave($__internal_5ec52a3be48225020d40b212f052ca0adbc231b2f034efb5bed1259f66ad130a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-iterator/test/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var ee             = require('event-emitter')
  , iteratorSymbol = require('es6-symbol').iterator;

module.exports = function (T) {
\treturn {
\t\t\"\": function (a) {
\t\t\tvar x = ['raz', 'dwa', 'trzy', 'cztery', 'pięć'], it, y, z;

\t\t\tit = new T(x);
\t\t\ta(it[iteratorSymbol](), it, \"@@iterator\");
\t\t\ty = it.next();
\t\t\ta.deep(y, { done: false, value: 'raz' }, \"#1\");
\t\t\tz = it.next();
\t\t\ta.not(y, z, \"Recreate result\");
\t\t\ta.deep(z, { done: false, value: 'dwa' }, \"#2\");
\t\t\ta.deep(it.next(), { done: false, value: 'trzy' }, \"#3\");
\t\t\ta.deep(it.next(), { done: false, value: 'cztery' }, \"#4\");
\t\t\ta.deep(it.next(), { done: false, value: 'pięć' }, \"#5\");
\t\t\ta.deep(y = it.next(), { done: true, value: undefined }, \"End\");
\t\t\ta.not(y, it.next(), \"Recreate result on dead\");
\t\t},
\t\tEmited: function (a) {
\t\t\tvar x = ['raz', 'dwa', 'trzy', 'cztery', 'pięć'], y, it;

\t\t\ty = ee();
\t\t\tit = new T(x, y);
\t\t\ta.deep(it.next(), { done: false, value: 'raz' }, \"#1\");
\t\t\ta.deep(it.next(), { done: false, value: 'dwa' }, \"#2\");
\t\t\ty.emit('_add', x.push('sześć') - 1);
\t\t\ta.deep(it.next(), { done: false, value: 'trzy' }, \"#3\");
\t\t\tx.splice(1, 0, 'półtora');
\t\t\ty.emit('_add', 1);
\t\t\ta.deep(it.next(), { done: false, value: 'półtora' }, \"Insert\");
\t\t\tx.splice(5, 1);
\t\t\ty.emit('_delete', 5);
\t\t\ta.deep(it.next(), { done: false, value: 'cztery' }, \"#4\");
\t\t\ta.deep(it.next(), { done: false, value: 'sześć' }, \"#5\");
\t\t\ta.deep(it.next(), { done: true, value: undefined }, \"End\");
\t\t},
\t\t\"Emited #2\": function (a) {
\t\t\tvar x = ['raz', 'dwa', 'trzy', 'cztery', 'pięć', 'sześć'], y, it;

\t\t\ty = ee();
\t\t\tit = new T(x, y);
\t\t\ta.deep(it.next(), { done: false, value: 'raz' }, \"#1\");
\t\t\ta.deep(it.next(), { done: false, value: 'dwa' }, \"#2\");
\t\t\tx.splice(1, 0, 'półtora');
\t\t\ty.emit('_add', 1);
\t\t\tx.splice(1, 0, '1.25');
\t\t\ty.emit('_add', 1);
\t\t\tx.splice(0, 1);
\t\t\ty.emit('_delete', 0);
\t\t\ta.deep(it.next(), { done: false, value: 'półtora' }, \"Insert\");
\t\t\ta.deep(it.next(), { done: false, value: '1.25' }, \"Insert #2\");
\t\t\ta.deep(it.next(), { done: false, value: 'trzy' }, \"#3\");
\t\t\ta.deep(it.next(), { done: false, value: 'cztery' }, \"#4\");
\t\t\tx.splice(5, 1);
\t\t\ty.emit('_delete', 5);
\t\t\ta.deep(it.next(), { done: false, value: 'sześć' }, \"#5\");
\t\t\ta.deep(it.next(), { done: true, value: undefined }, \"End\");
\t\t},
\t\t\"Emited: Clear #1\": function (a) {
\t\t\tvar x = ['raz', 'dwa', 'trzy', 'cztery', 'pięć', 'sześć'], y, it;

\t\t\ty = ee();
\t\t\tit = new T(x, y);
\t\t\ta.deep(it.next(), { done: false, value: 'raz' }, \"#1\");
\t\t\ta.deep(it.next(), { done: false, value: 'dwa' }, \"#2\");
\t\t\tx.length = 0;
\t\t\ty.emit('_clear');
\t\t\ta.deep(it.next(), { done: true, value: undefined }, \"End\");
\t\t},
\t\t\"Emited: Clear #2\": function (a) {
\t\t\tvar x = ['raz', 'dwa', 'trzy', 'cztery', 'pięć', 'sześć'], y, it;

\t\t\ty = ee();
\t\t\tit = new T(x, y);
\t\t\ta.deep(it.next(), { done: false, value: 'raz' }, \"#1\");
\t\t\ta.deep(it.next(), { done: false, value: 'dwa' }, \"#2\");
\t\t\tx.length = 0;
\t\t\ty.emit('_clear');
\t\t\tx.push('foo');
\t\t\tx.push('bar');
\t\t\ta.deep(it.next(), { done: false, value: 'foo' }, \"#3\");
\t\t\ta.deep(it.next(), { done: false, value: 'bar' }, \"#4\");
\t\t\tx.splice(1, 0, 'półtora');
\t\t\ty.emit('_add', 1);
\t\t\tx.splice(1, 0, '1.25');
\t\t\ty.emit('_add', 1);
\t\t\tx.splice(0, 1);
\t\t\ty.emit('_delete', 0);
\t\t\ta.deep(it.next(), { done: false, value: 'półtora' }, \"Insert\");
\t\t\ta.deep(it.next(), { done: false, value: '1.25' }, \"Insert #2\");
\t\t\ta.deep(it.next(), { done: true, value: undefined }, \"End\");
\t\t}
\t};
};
", "node_modules/es6-iterator/test/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-iterator/test/index.js");
    }
}
