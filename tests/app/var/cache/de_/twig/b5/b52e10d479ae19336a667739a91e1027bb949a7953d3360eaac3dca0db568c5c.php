<?php

/* node_modules/event-emitter/test/has-listeners.js */
class __TwigTemplate_4a470289b3f7859b7d4c9332523b18358ff2cad1c20844befac2f64ffeaa8d35 extends Twig_Template
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
        $__internal_212107ca5ae4e048051cbd024f7818558b65c502eb9876460233f2166ab526b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_212107ca5ae4e048051cbd024f7818558b65c502eb9876460233f2166ab526b6->enter($__internal_212107ca5ae4e048051cbd024f7818558b65c502eb9876460233f2166ab526b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/event-emitter/test/has-listeners.js"));

        // line 1
        echo "'use strict';

var ee = require('../');

module.exports = function (t) {
\tvar x, y;
\treturn {
\t\tAny: function (a) {
\t\t\ta(t(true), false, \"Primitive\");
\t\t\ta(t({ events: [] }), false, \"Other object\");
\t\t\ta(t(x = ee()), false, \"Emitter: empty\");

\t\t\tx.on('test', y = function () {});
\t\t\ta(t(x), true, \"Emitter: full\");
\t\t\tx.off('test', y);
\t\t\ta(t(x), false, \"Emitter: empty but touched\");
\t\t\tx.once('test', y = function () {});
\t\t\ta(t(x), true, \"Emitter: full: Once\");
\t\t\tx.off('test', y);
\t\t\ta(t(x), false, \"Emitter: empty but touched by once\");
\t\t},
\t\tSpecific: function (a) {
\t\t\ta(t(true, 'test'), false, \"Primitive\");
\t\t\ta(t({ events: [] }, 'test'), false, \"Other object\");
\t\t\ta(t(x = ee(), 'test'), false, \"Emitter: empty\");

\t\t\tx.on('test', y = function () {});
\t\t\ta(t(x, 'test'), true, \"Emitter: full\");
\t\t\ta(t(x, 'foo'), false, \"Emitter: full, other event\");
\t\t\tx.off('test', y);
\t\t\ta(t(x, 'test'), false, \"Emitter: empty but touched\");
\t\t\ta(t(x, 'foo'), false, \"Emitter: empty but touched, other event\");

\t\t\tx.once('test', y = function () {});
\t\t\ta(t(x, 'test'), true, \"Emitter: full: Once\");
\t\t\ta(t(x, 'foo'), false, \"Emitter: full: Once,  other event\");
\t\t\tx.off('test', y);
\t\t\ta(t(x, 'test'), false, \"Emitter: empty but touched by once\");
\t\t\ta(t(x, 'foo'), false, \"Emitter: empty but touched by once, other event\");
\t\t}
\t};
};
";
        
        $__internal_212107ca5ae4e048051cbd024f7818558b65c502eb9876460233f2166ab526b6->leave($__internal_212107ca5ae4e048051cbd024f7818558b65c502eb9876460233f2166ab526b6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/event-emitter/test/has-listeners.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var ee = require('../');

module.exports = function (t) {
\tvar x, y;
\treturn {
\t\tAny: function (a) {
\t\t\ta(t(true), false, \"Primitive\");
\t\t\ta(t({ events: [] }), false, \"Other object\");
\t\t\ta(t(x = ee()), false, \"Emitter: empty\");

\t\t\tx.on('test', y = function () {});
\t\t\ta(t(x), true, \"Emitter: full\");
\t\t\tx.off('test', y);
\t\t\ta(t(x), false, \"Emitter: empty but touched\");
\t\t\tx.once('test', y = function () {});
\t\t\ta(t(x), true, \"Emitter: full: Once\");
\t\t\tx.off('test', y);
\t\t\ta(t(x), false, \"Emitter: empty but touched by once\");
\t\t},
\t\tSpecific: function (a) {
\t\t\ta(t(true, 'test'), false, \"Primitive\");
\t\t\ta(t({ events: [] }, 'test'), false, \"Other object\");
\t\t\ta(t(x = ee(), 'test'), false, \"Emitter: empty\");

\t\t\tx.on('test', y = function () {});
\t\t\ta(t(x, 'test'), true, \"Emitter: full\");
\t\t\ta(t(x, 'foo'), false, \"Emitter: full, other event\");
\t\t\tx.off('test', y);
\t\t\ta(t(x, 'test'), false, \"Emitter: empty but touched\");
\t\t\ta(t(x, 'foo'), false, \"Emitter: empty but touched, other event\");

\t\t\tx.once('test', y = function () {});
\t\t\ta(t(x, 'test'), true, \"Emitter: full: Once\");
\t\t\ta(t(x, 'foo'), false, \"Emitter: full: Once,  other event\");
\t\t\tx.off('test', y);
\t\t\ta(t(x, 'test'), false, \"Emitter: empty but touched by once\");
\t\t\ta(t(x, 'foo'), false, \"Emitter: empty but touched by once, other event\");
\t\t}
\t};
};
", "node_modules/event-emitter/test/has-listeners.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/event-emitter/test/has-listeners.js");
    }
}
