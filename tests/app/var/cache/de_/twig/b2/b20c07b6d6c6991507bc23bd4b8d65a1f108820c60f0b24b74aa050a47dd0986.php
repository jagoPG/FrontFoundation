<?php

/* node_modules/es6-map/test/is-map.js */
class __TwigTemplate_de09ed7dc518b6ea5a8395f93822c64b8d2fc4a11cc9b98d21c9ca4a0902a163 extends Twig_Template
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
        $__internal_74fd88c1f7298f30f29af7541b3a6dc49af10468c3c13a8f08f654438156157a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74fd88c1f7298f30f29af7541b3a6dc49af10468c3c13a8f08f654438156157a->enter($__internal_74fd88c1f7298f30f29af7541b3a6dc49af10468c3c13a8f08f654438156157a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-map/test/is-map.js"));

        // line 1
        echo "'use strict';

var MapPoly = require('../polyfill');

module.exports = function (t, a) {
\ta(t(undefined), false, \"Undefined\");
\ta(t(null), false, \"Null\");
\ta(t(true), false, \"Primitive\");
\ta(t('raz'), false, \"String\");
\ta(t({}), false, \"Object\");
\ta(t([]), false, \"Array\");
\tif (typeof Map !== 'undefined') {
\t\ta(t(new Map()), true, \"Native\");
\t}
\ta(t(new MapPoly()), true, \"Polyfill\");
};
";
        
        $__internal_74fd88c1f7298f30f29af7541b3a6dc49af10468c3c13a8f08f654438156157a->leave($__internal_74fd88c1f7298f30f29af7541b3a6dc49af10468c3c13a8f08f654438156157a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-map/test/is-map.js";
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
\ta(t(undefined), false, \"Undefined\");
\ta(t(null), false, \"Null\");
\ta(t(true), false, \"Primitive\");
\ta(t('raz'), false, \"String\");
\ta(t({}), false, \"Object\");
\ta(t([]), false, \"Array\");
\tif (typeof Map !== 'undefined') {
\t\ta(t(new Map()), true, \"Native\");
\t}
\ta(t(new MapPoly()), true, \"Polyfill\");
};
", "node_modules/es6-map/test/is-map.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-map/test/is-map.js");
    }
}
