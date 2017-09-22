<?php

/* node_modules/es6-set/test/ext/filter.js */
class __TwigTemplate_c8c703ce5a33abfdb155bd25310c60e9fac30929b86e218cda2d2b052279e033 extends Twig_Template
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
        $__internal_a79bde9d6c53097e83559a9e43f8b4fa8e5cee283d4be8552887d77ce7a1b469 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a79bde9d6c53097e83559a9e43f8b4fa8e5cee283d4be8552887d77ce7a1b469->enter($__internal_a79bde9d6c53097e83559a9e43f8b4fa8e5cee283d4be8552887d77ce7a1b469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-set/test/ext/filter.js"));

        // line 1
        echo "'use strict';

var aFrom = require('es5-ext/array/from')

  , Set = require('../../');

module.exports = function (t, a) {
\ta.deep(aFrom(t.call(new Set(), Boolean)), [], \"Empty set\");
\ta.deep(aFrom(t.call(new Set([2, 3, 4]), Boolean)), [2, 3, 4], \"All true\");
\ta.deep(aFrom(t.call(new Set([0, false, 4]), Boolean)), [4], \"Some false\");
\ta.deep(aFrom(t.call(new Set([0, false, null]), Boolean)), [], \"All false\");
};
";
        
        $__internal_a79bde9d6c53097e83559a9e43f8b4fa8e5cee283d4be8552887d77ce7a1b469->leave($__internal_a79bde9d6c53097e83559a9e43f8b4fa8e5cee283d4be8552887d77ce7a1b469_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-set/test/ext/filter.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var aFrom = require('es5-ext/array/from')

  , Set = require('../../');

module.exports = function (t, a) {
\ta.deep(aFrom(t.call(new Set(), Boolean)), [], \"Empty set\");
\ta.deep(aFrom(t.call(new Set([2, 3, 4]), Boolean)), [2, 3, 4], \"All true\");
\ta.deep(aFrom(t.call(new Set([0, false, 4]), Boolean)), [4], \"Some false\");
\ta.deep(aFrom(t.call(new Set([0, false, null]), Boolean)), [], \"All false\");
};
", "node_modules/es6-set/test/ext/filter.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-set/test/ext/filter.js");
    }
}
