<?php

/* node_modules/es6-iterator/test/for-of.js */
class __TwigTemplate_6aee46626647999b4c8133659fe21580442ef2a94e24660a766cc79ef195e693 extends Twig_Template
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
        $__internal_79b1b9ab494e792129d0d131a160c6a4178d1556edd29ef3a9507b63a0e7742e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79b1b9ab494e792129d0d131a160c6a4178d1556edd29ef3a9507b63a0e7742e->enter($__internal_79b1b9ab494e792129d0d131a160c6a4178d1556edd29ef3a9507b63a0e7742e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-iterator/test/for-of.js"));

        // line 1
        echo "'use strict';

var ArrayIterator = require('../array')

  , slice = Array.prototype.slice;

module.exports = function (t, a) {
\tvar i = 0, x = ['raz', 'dwa', 'trzy'], y = {}, called = 0;
\tt(x, function () {
\t\ta.deep(slice.call(arguments, 0, 1), [x[i]], \"Array \" + i + \"#\");
\t\ta(this, y, \"Array: context:  \" + (i++) + \"#\");
\t}, y);
\ti = 0;
\tt((function () { return arguments; }('raz', 'dwa', 'trzy')), function () {
\t\ta.deep(slice.call(arguments, 0, 1), [x[i]], \"Arguments\" + i + \"#\");
\t\ta(this, y, \"Arguments: context:  \" + (i++) + \"#\");
\t}, y);
\ti = 0;
\tt(x = 'foo', function () {
\t\ta.deep(slice.call(arguments, 0, 1), [x[i]], \"String \" + i + \"#\");
\t\ta(this, y, \"Regular String: context:  \" + (i++) + \"#\");
\t}, y);
\ti = 0;
\tx = ['r', '💩', 'z'];
\tt('r💩z', function () {
\t\ta.deep(slice.call(arguments, 0, 1), [x[i]], \"String \" + i + \"#\");
\t\ta(this, y, \"Unicode String: context:  \" + (i++) + \"#\");
\t}, y);
\ti = 0;
\tt(new ArrayIterator(x), function () {
\t\ta.deep(slice.call(arguments, 0, 1), [x[i]], \"Iterator \" + i + \"#\");
\t\ta(this, y, \"Iterator: context:  \" + (i++) + \"#\");
\t}, y);

\tt(x = ['raz', 'dwa', 'trzy'], function (value, doBreak) {
\t\t++called;
\t\treturn doBreak();
\t});
\ta(called, 1, \"Break\");
};
";
        
        $__internal_79b1b9ab494e792129d0d131a160c6a4178d1556edd29ef3a9507b63a0e7742e->leave($__internal_79b1b9ab494e792129d0d131a160c6a4178d1556edd29ef3a9507b63a0e7742e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-iterator/test/for-of.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var ArrayIterator = require('../array')

  , slice = Array.prototype.slice;

module.exports = function (t, a) {
\tvar i = 0, x = ['raz', 'dwa', 'trzy'], y = {}, called = 0;
\tt(x, function () {
\t\ta.deep(slice.call(arguments, 0, 1), [x[i]], \"Array \" + i + \"#\");
\t\ta(this, y, \"Array: context:  \" + (i++) + \"#\");
\t}, y);
\ti = 0;
\tt((function () { return arguments; }('raz', 'dwa', 'trzy')), function () {
\t\ta.deep(slice.call(arguments, 0, 1), [x[i]], \"Arguments\" + i + \"#\");
\t\ta(this, y, \"Arguments: context:  \" + (i++) + \"#\");
\t}, y);
\ti = 0;
\tt(x = 'foo', function () {
\t\ta.deep(slice.call(arguments, 0, 1), [x[i]], \"String \" + i + \"#\");
\t\ta(this, y, \"Regular String: context:  \" + (i++) + \"#\");
\t}, y);
\ti = 0;
\tx = ['r', '💩', 'z'];
\tt('r💩z', function () {
\t\ta.deep(slice.call(arguments, 0, 1), [x[i]], \"String \" + i + \"#\");
\t\ta(this, y, \"Unicode String: context:  \" + (i++) + \"#\");
\t}, y);
\ti = 0;
\tt(new ArrayIterator(x), function () {
\t\ta.deep(slice.call(arguments, 0, 1), [x[i]], \"Iterator \" + i + \"#\");
\t\ta(this, y, \"Iterator: context:  \" + (i++) + \"#\");
\t}, y);

\tt(x = ['raz', 'dwa', 'trzy'], function (value, doBreak) {
\t\t++called;
\t\treturn doBreak();
\t});
\ta(called, 1, \"Break\");
};
", "node_modules/es6-iterator/test/for-of.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-iterator/test/for-of.js");
    }
}
