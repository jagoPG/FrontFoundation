<?php

/* node_modules/es6-weak-map/test/is-weak-map.js */
class __TwigTemplate_fbaa13c3de1a04e43261dbebc2362b33b3382de0abda54babe85acae3121297a extends Twig_Template
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
        $__internal_5a0bf225b221d6453453d9c4ac5d02528a565882406e1af580d98e26ef510a77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a0bf225b221d6453453d9c4ac5d02528a565882406e1af580d98e26ef510a77->enter($__internal_5a0bf225b221d6453453d9c4ac5d02528a565882406e1af580d98e26ef510a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-weak-map/test/is-weak-map.js"));

        // line 1
        echo "'use strict';

var WeakMapPoly = require('../polyfill');

module.exports = function (t, a) {
\ta(t(undefined), false, \"Undefined\");
\ta(t(null), false, \"Null\");
\ta(t(true), false, \"Primitive\");
\ta(t('raz'), false, \"String\");
\ta(t({}), false, \"Object\");
\ta(t([]), false, \"Array\");
\tif (typeof WeakMap !== 'undefined') {
\t\ta(t(new WeakMap()), true, \"Native\");
\t}
\ta(t(new WeakMapPoly()), true, \"Polyfill\");
};
";
        
        $__internal_5a0bf225b221d6453453d9c4ac5d02528a565882406e1af580d98e26ef510a77->leave($__internal_5a0bf225b221d6453453d9c4ac5d02528a565882406e1af580d98e26ef510a77_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-weak-map/test/is-weak-map.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var WeakMapPoly = require('../polyfill');

module.exports = function (t, a) {
\ta(t(undefined), false, \"Undefined\");
\ta(t(null), false, \"Null\");
\ta(t(true), false, \"Primitive\");
\ta(t('raz'), false, \"String\");
\ta(t({}), false, \"Object\");
\ta(t([]), false, \"Array\");
\tif (typeof WeakMap !== 'undefined') {
\t\ta(t(new WeakMap()), true, \"Native\");
\t}
\ta(t(new WeakMapPoly()), true, \"Polyfill\");
};
", "node_modules/es6-weak-map/test/is-weak-map.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-weak-map/test/is-weak-map.js");
    }
}
