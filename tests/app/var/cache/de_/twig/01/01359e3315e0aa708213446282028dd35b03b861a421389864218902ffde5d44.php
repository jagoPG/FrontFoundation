<?php

/* node_modules/es6-weak-map/test/valid-weak-map.js */
class __TwigTemplate_be5075e366d6a518d903d1ddec9ac9b81927ca72c38f052bfe560e7bc2dad2eb extends Twig_Template
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
        $__internal_62071157629701e47a5b2f0c1b255330239958f1883eb79df77d0a4f6555ddf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62071157629701e47a5b2f0c1b255330239958f1883eb79df77d0a4f6555ddf1->enter($__internal_62071157629701e47a5b2f0c1b255330239958f1883eb79df77d0a4f6555ddf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-weak-map/test/valid-weak-map.js"));

        // line 1
        echo "'use strict';

var WeakMapPoly = require('../polyfill');

module.exports = function (t, a) {
\tvar map;
\ta.throws(function () { t(undefined); }, TypeError, \"Undefined\");
\ta.throws(function () { t(null); }, TypeError, \"Null\");
\ta.throws(function () { t(true); }, TypeError, \"Primitive\");
\ta.throws(function () { t('raz'); }, TypeError, \"String\");
\ta.throws(function () { t({}); }, TypeError, \"Object\");
\ta.throws(function () { t([]); }, TypeError, \"Array\");
\tif (typeof WeakMap !== 'undefined') {
\t\tmap = new WeakMap();
\t\ta(t(map), map, \"Native\");
\t}
\tmap = new WeakMapPoly();
\ta(t(map), map, \"Polyfill\");
};
";
        
        $__internal_62071157629701e47a5b2f0c1b255330239958f1883eb79df77d0a4f6555ddf1->leave($__internal_62071157629701e47a5b2f0c1b255330239958f1883eb79df77d0a4f6555ddf1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-weak-map/test/valid-weak-map.js";
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
\tvar map;
\ta.throws(function () { t(undefined); }, TypeError, \"Undefined\");
\ta.throws(function () { t(null); }, TypeError, \"Null\");
\ta.throws(function () { t(true); }, TypeError, \"Primitive\");
\ta.throws(function () { t('raz'); }, TypeError, \"String\");
\ta.throws(function () { t({}); }, TypeError, \"Object\");
\ta.throws(function () { t([]); }, TypeError, \"Array\");
\tif (typeof WeakMap !== 'undefined') {
\t\tmap = new WeakMap();
\t\ta(t(map), map, \"Native\");
\t}
\tmap = new WeakMapPoly();
\ta(t(map), map, \"Polyfill\");
};
", "node_modules/es6-weak-map/test/valid-weak-map.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-weak-map/test/valid-weak-map.js");
    }
}
