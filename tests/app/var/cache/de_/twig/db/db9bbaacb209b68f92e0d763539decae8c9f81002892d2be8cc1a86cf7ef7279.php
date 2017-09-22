<?php

/* node_modules/string.prototype.trim/test/index.js */
class __TwigTemplate_8504c6ce264ca335f57a0d4394a836d2eb84daf310e6d091847870972984a621 extends Twig_Template
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
        $__internal_782870ab3dd3c27a0cb0e40260603eb4f350c2557c1edb33dae631de7e4b3d3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_782870ab3dd3c27a0cb0e40260603eb4f350c2557c1edb33dae631de7e4b3d3a->enter($__internal_782870ab3dd3c27a0cb0e40260603eb4f350c2557c1edb33dae631de7e4b3d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/string.prototype.trim/test/index.js"));

        // line 1
        echo "'use strict';

var trim = require('../');
var test = require('tape');
var runTests = require('./tests');

test('as a function', function (t) {
\tt.test('bad array/this value', function (st) {
\t\tst.throws(function () { trim(undefined, 'a'); }, TypeError, 'undefined is not an object');
\t\tst.throws(function () { trim(null, 'a'); }, TypeError, 'null is not an object');
\t\tst.end();
\t});

\trunTests(trim, t);

\tt.end();
});
";
        
        $__internal_782870ab3dd3c27a0cb0e40260603eb4f350c2557c1edb33dae631de7e4b3d3a->leave($__internal_782870ab3dd3c27a0cb0e40260603eb4f350c2557c1edb33dae631de7e4b3d3a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/string.prototype.trim/test/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var trim = require('../');
var test = require('tape');
var runTests = require('./tests');

test('as a function', function (t) {
\tt.test('bad array/this value', function (st) {
\t\tst.throws(function () { trim(undefined, 'a'); }, TypeError, 'undefined is not an object');
\t\tst.throws(function () { trim(null, 'a'); }, TypeError, 'null is not an object');
\t\tst.end();
\t});

\trunTests(trim, t);

\tt.end();
});
", "node_modules/string.prototype.trim/test/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/string.prototype.trim/test/index.js");
    }
}
