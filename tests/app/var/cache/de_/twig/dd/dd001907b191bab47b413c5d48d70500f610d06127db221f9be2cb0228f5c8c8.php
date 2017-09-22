<?php

/* node_modules/es6-set/test/valid-set.js */
class __TwigTemplate_c627a4e6020cbf9f31fc743223eb589adee5ad412ddd2de9c0490d1e537afd12 extends Twig_Template
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
        $__internal_34d766e161252e2f3c4e0b30bea680dae40e4d75ea539eb32e4a26238096e1d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34d766e161252e2f3c4e0b30bea680dae40e4d75ea539eb32e4a26238096e1d0->enter($__internal_34d766e161252e2f3c4e0b30bea680dae40e4d75ea539eb32e4a26238096e1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-set/test/valid-set.js"));

        // line 1
        echo "'use strict';

var SetPoly = require('../polyfill');

module.exports = function (t, a) {
\tvar set;
\ta.throws(function () { t(undefined); }, TypeError, \"Undefined\");
\ta.throws(function () { t(null); }, TypeError, \"Null\");
\ta.throws(function () { t(true); }, TypeError, \"Primitive\");
\ta.throws(function () { t('raz'); }, TypeError, \"String\");
\ta.throws(function () { t({}); }, TypeError, \"Object\");
\ta.throws(function () { t([]); }, TypeError, \"Array\");
\tif (typeof Set !== 'undefined') {
\t\tset = new Set();
\t\ta(t(set), set, \"Native\");
\t}
\tset = new SetPoly();
\ta(t(set), set, \"Polyfill\");
};
";
        
        $__internal_34d766e161252e2f3c4e0b30bea680dae40e4d75ea539eb32e4a26238096e1d0->leave($__internal_34d766e161252e2f3c4e0b30bea680dae40e4d75ea539eb32e4a26238096e1d0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-set/test/valid-set.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var SetPoly = require('../polyfill');

module.exports = function (t, a) {
\tvar set;
\ta.throws(function () { t(undefined); }, TypeError, \"Undefined\");
\ta.throws(function () { t(null); }, TypeError, \"Null\");
\ta.throws(function () { t(true); }, TypeError, \"Primitive\");
\ta.throws(function () { t('raz'); }, TypeError, \"String\");
\ta.throws(function () { t({}); }, TypeError, \"Object\");
\ta.throws(function () { t([]); }, TypeError, \"Array\");
\tif (typeof Set !== 'undefined') {
\t\tset = new Set();
\t\ta(t(set), set, \"Native\");
\t}
\tset = new SetPoly();
\ta(t(set), set, \"Polyfill\");
};
", "node_modules/es6-set/test/valid-set.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-set/test/valid-set.js");
    }
}
