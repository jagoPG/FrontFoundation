<?php

/* node_modules/es6-map/test/valid-map.js */
class __TwigTemplate_d1ed6c31fe81d28e050859f0b4c5d3bcc97b609dbb5d62ed88d2239c2ea12d4b extends Twig_Template
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
        $__internal_0d268f710e976c5af3131824443d4bc9ee8c93fa9aff2df95bc4f834cbd5cfc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d268f710e976c5af3131824443d4bc9ee8c93fa9aff2df95bc4f834cbd5cfc9->enter($__internal_0d268f710e976c5af3131824443d4bc9ee8c93fa9aff2df95bc4f834cbd5cfc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-map/test/valid-map.js"));

        // line 1
        echo "'use strict';

var MapPoly = require('../polyfill');

module.exports = function (t, a) {
\tvar map;
\ta.throws(function () { t(undefined); }, TypeError, \"Undefined\");
\ta.throws(function () { t(null); }, TypeError, \"Null\");
\ta.throws(function () { t(true); }, TypeError, \"Primitive\");
\ta.throws(function () { t('raz'); }, TypeError, \"String\");
\ta.throws(function () { t({}); }, TypeError, \"Object\");
\ta.throws(function () { t([]); }, TypeError, \"Array\");
\tif (typeof Map !== 'undefined') {
\t\tmap = new Map();
\t\ta(t(map), map, \"Native\");
\t}
\tmap = new MapPoly();
\ta(t(map), map, \"Polyfill\");
};
";
        
        $__internal_0d268f710e976c5af3131824443d4bc9ee8c93fa9aff2df95bc4f834cbd5cfc9->leave($__internal_0d268f710e976c5af3131824443d4bc9ee8c93fa9aff2df95bc4f834cbd5cfc9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-map/test/valid-map.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var MapPoly = require('../polyfill');

module.exports = function (t, a) {
\tvar map;
\ta.throws(function () { t(undefined); }, TypeError, \"Undefined\");
\ta.throws(function () { t(null); }, TypeError, \"Null\");
\ta.throws(function () { t(true); }, TypeError, \"Primitive\");
\ta.throws(function () { t('raz'); }, TypeError, \"String\");
\ta.throws(function () { t({}); }, TypeError, \"Object\");
\ta.throws(function () { t([]); }, TypeError, \"Array\");
\tif (typeof Map !== 'undefined') {
\t\tmap = new Map();
\t\ta(t(map), map, \"Native\");
\t}
\tmap = new MapPoly();
\ta(t(map), map, \"Polyfill\");
};
", "node_modules/es6-map/test/valid-map.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-map/test/valid-map.js");
    }
}
