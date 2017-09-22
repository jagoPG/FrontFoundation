<?php

/* node_modules/es6-iterator/test/is-iterable.js */
class __TwigTemplate_65732bcd9081ddfad51b861b9fc00cd3538d7a9c135b7023713662e565b635a0 extends Twig_Template
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
        $__internal_7bc965d02ef11f7897c7c31d79eaa46119ae98e91e93ccd4768fe3035079a315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bc965d02ef11f7897c7c31d79eaa46119ae98e91e93ccd4768fe3035079a315->enter($__internal_7bc965d02ef11f7897c7c31d79eaa46119ae98e91e93ccd4768fe3035079a315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-iterator/test/is-iterable.js"));

        // line 1
        echo "'use strict';

var iteratorSymbol = require('es6-symbol').iterator
  , Iterator       = require('../');

module.exports = function (t, a) {
\tvar iterator;
\ta(t(), false, \"Undefined\");
\ta(t(123), false, \"Number\");
\ta(t({}), false, \"Plain object\");
\ta(t({ length: 0 }), false, \"Array-like\");
\titerator = {};
\titerator[iteratorSymbol] = function () { return new Iterator([]); };
\ta(t(iterator), true, \"Iterator\");
\ta(t([]), true, \"Array\");
\ta(t('foo'), true, \"String\");
\ta(t(''), true, \"Empty string\");
\ta(t((function () { return arguments; }())), true, \"Arguments\");
};
";
        
        $__internal_7bc965d02ef11f7897c7c31d79eaa46119ae98e91e93ccd4768fe3035079a315->leave($__internal_7bc965d02ef11f7897c7c31d79eaa46119ae98e91e93ccd4768fe3035079a315_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-iterator/test/is-iterable.js";
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
\ta(t(), false, \"Undefined\");
\ta(t(123), false, \"Number\");
\ta(t({}), false, \"Plain object\");
\ta(t({ length: 0 }), false, \"Array-like\");
\titerator = {};
\titerator[iteratorSymbol] = function () { return new Iterator([]); };
\ta(t(iterator), true, \"Iterator\");
\ta(t([]), true, \"Array\");
\ta(t('foo'), true, \"String\");
\ta(t(''), true, \"Empty string\");
\ta(t((function () { return arguments; }())), true, \"Arguments\");
};
", "node_modules/es6-iterator/test/is-iterable.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-iterator/test/is-iterable.js");
    }
}
