<?php

/* node_modules/event-emitter/test/all-off.js */
class __TwigTemplate_49ca67c77392088e7aab37d40972c12b1b7f21717199c0313da405b1f50abc2b extends Twig_Template
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
        $__internal_5cc0b34170a2a9782f5d5da6e275796e45e5bff42582802759e13eac93515f4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cc0b34170a2a9782f5d5da6e275796e45e5bff42582802759e13eac93515f4e->enter($__internal_5cc0b34170a2a9782f5d5da6e275796e45e5bff42582802759e13eac93515f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/event-emitter/test/all-off.js"));

        // line 1
        echo "'use strict';

var ee = require('../');

module.exports = function (t, a) {
\tvar x, count, count2;

\tx = ee();
\tcount = 0;
\tcount2 = 0;
\tx.on('foo', function () {
\t\t++count;
\t});
\tx.on('foo', function () {
\t\t++count;
\t});
\tx.on('bar', function () {
\t\t++count2;
\t});
\tx.on('bar', function () {
\t\t++count2;
\t});
\tt(x, 'foo');
\tx.emit('foo');
\tx.emit('bar');
\ta(count, 0, \"All off: type\");
\ta(count2, 2, \"All off: ohter type\");

\tcount = 0;
\tcount2 = 0;
\tx.on('foo', function () {
\t\t++count;
\t});
\tx.on('foo', function () {
\t\t++count;
\t});
\tx.on('bar', function () {
\t\t++count2;
\t});
\tx.on('bar', function () {
\t\t++count2;
\t});
\tt(x);
\tx.emit('foo');
\tx.emit('bar');
\ta(count, 0, \"All off: type\");
\ta(count2, 0, \"All off: other type\");
};
";
        
        $__internal_5cc0b34170a2a9782f5d5da6e275796e45e5bff42582802759e13eac93515f4e->leave($__internal_5cc0b34170a2a9782f5d5da6e275796e45e5bff42582802759e13eac93515f4e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/event-emitter/test/all-off.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var ee = require('../');

module.exports = function (t, a) {
\tvar x, count, count2;

\tx = ee();
\tcount = 0;
\tcount2 = 0;
\tx.on('foo', function () {
\t\t++count;
\t});
\tx.on('foo', function () {
\t\t++count;
\t});
\tx.on('bar', function () {
\t\t++count2;
\t});
\tx.on('bar', function () {
\t\t++count2;
\t});
\tt(x, 'foo');
\tx.emit('foo');
\tx.emit('bar');
\ta(count, 0, \"All off: type\");
\ta(count2, 2, \"All off: ohter type\");

\tcount = 0;
\tcount2 = 0;
\tx.on('foo', function () {
\t\t++count;
\t});
\tx.on('foo', function () {
\t\t++count;
\t});
\tx.on('bar', function () {
\t\t++count2;
\t});
\tx.on('bar', function () {
\t\t++count2;
\t});
\tt(x);
\tx.emit('foo');
\tx.emit('bar');
\ta(count, 0, \"All off: type\");
\ta(count2, 0, \"All off: other type\");
};
", "node_modules/event-emitter/test/all-off.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/event-emitter/test/all-off.js");
    }
}
