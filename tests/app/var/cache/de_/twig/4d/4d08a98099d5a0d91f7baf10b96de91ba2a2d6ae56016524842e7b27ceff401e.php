<?php

/* node_modules/es6-iterator/test/get.js */
class __TwigTemplate_8b74c1fcc07e141c255ad8a3b6f80ed01d1ef57c5191ff621482fcc99e93c8d4 extends Twig_Template
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
        $__internal_4fc1b1d7af878d36f359553edf3340b1775e8122175d7e976ec573781ec976d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fc1b1d7af878d36f359553edf3340b1775e8122175d7e976ec573781ec976d1->enter($__internal_4fc1b1d7af878d36f359553edf3340b1775e8122175d7e976ec573781ec976d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-iterator/test/get.js"));

        // line 1
        echo "'use strict';

var iteratorSymbol = require('es6-symbol').iterator
  , Iterator       = require('../');

module.exports = function (t, a) {
\tvar iterator;
\ta.throws(function () { t(); }, TypeError, \"Null\");
\ta.throws(function () { t({}); }, TypeError, \"Plain object\");
\ta.throws(function () { t({ length: 0 }); }, TypeError, \"Array-like\");
\titerator = {};
\titerator[iteratorSymbol] = function () { return new Iterator([]); };
\ta(t(iterator) instanceof Iterator, true, \"Iterator\");
\ta(String(t([])), '[object Array Iterator]', \" Array\");
\ta(String(t((function () { return arguments; }()))), '[object Array Iterator]', \" Arguments\");
\ta(String(t('foo')), '[object String Iterator]', \"String\");
};
";
        
        $__internal_4fc1b1d7af878d36f359553edf3340b1775e8122175d7e976ec573781ec976d1->leave($__internal_4fc1b1d7af878d36f359553edf3340b1775e8122175d7e976ec573781ec976d1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-iterator/test/get.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var iteratorSymbol = require('es6-symbol').iterator
  , Iterator       = require('../');

module.exports = function (t, a) {
\tvar iterator;
\ta.throws(function () { t(); }, TypeError, \"Null\");
\ta.throws(function () { t({}); }, TypeError, \"Plain object\");
\ta.throws(function () { t({ length: 0 }); }, TypeError, \"Array-like\");
\titerator = {};
\titerator[iteratorSymbol] = function () { return new Iterator([]); };
\ta(t(iterator) instanceof Iterator, true, \"Iterator\");
\ta(String(t([])), '[object Array Iterator]', \" Array\");
\ta(String(t((function () { return arguments; }()))), '[object Array Iterator]', \" Arguments\");
\ta(String(t('foo')), '[object String Iterator]', \"String\");
};
", "node_modules/es6-iterator/test/get.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-iterator/test/get.js");
    }
}
