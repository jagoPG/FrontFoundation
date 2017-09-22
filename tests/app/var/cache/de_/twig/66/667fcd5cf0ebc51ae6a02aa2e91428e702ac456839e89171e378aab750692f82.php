<?php

/* node_modules/es6-set/test/is-set.js */
class __TwigTemplate_7cd3ac77771d64ee6b5976cae1b8934f87decca8cdeb14459ac6d9c8e2cdb86d extends Twig_Template
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
        $__internal_2a390d0b6c42e7577f8456f3ee00e2c9ed068d0d9e70336c575b6d8632197720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a390d0b6c42e7577f8456f3ee00e2c9ed068d0d9e70336c575b6d8632197720->enter($__internal_2a390d0b6c42e7577f8456f3ee00e2c9ed068d0d9e70336c575b6d8632197720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-set/test/is-set.js"));

        // line 1
        echo "'use strict';

var SetPoly = require('../polyfill');

module.exports = function (t, a) {
\ta(t(undefined), false, \"Undefined\");
\ta(t(null), false, \"Null\");
\ta(t(true), false, \"Primitive\");
\ta(t('raz'), false, \"String\");
\ta(t({}), false, \"Object\");
\ta(t([]), false, \"Array\");
\tif (typeof Set !== 'undefined') {
\t\ta(t(new Set()), true, \"Native\");
\t}
\ta(t(new SetPoly()), true, \"Polyfill\");
};
";
        
        $__internal_2a390d0b6c42e7577f8456f3ee00e2c9ed068d0d9e70336c575b6d8632197720->leave($__internal_2a390d0b6c42e7577f8456f3ee00e2c9ed068d0d9e70336c575b6d8632197720_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-set/test/is-set.js";
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
\ta(t(undefined), false, \"Undefined\");
\ta(t(null), false, \"Null\");
\ta(t(true), false, \"Primitive\");
\ta(t('raz'), false, \"String\");
\ta(t({}), false, \"Object\");
\ta(t([]), false, \"Array\");
\tif (typeof Set !== 'undefined') {
\t\ta(t(new Set()), true, \"Native\");
\t}
\ta(t(new SetPoly()), true, \"Polyfill\");
};
", "node_modules/es6-set/test/is-set.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-set/test/is-set.js");
    }
}
