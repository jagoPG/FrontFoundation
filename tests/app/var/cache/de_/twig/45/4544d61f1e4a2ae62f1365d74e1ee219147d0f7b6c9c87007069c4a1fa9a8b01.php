<?php

/* node_modules/es6-symbol/test/is-symbol.js */
class __TwigTemplate_8a53f4052e5a19bb6cd16db4d6f82ac3dfd4d87155743b1e06f5d7e407fd3c7f extends Twig_Template
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
        $__internal_d5bdad24a9219950e3ab8a408cbbf3857c48eea52b0a1f8829486d9b54a374a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5bdad24a9219950e3ab8a408cbbf3857c48eea52b0a1f8829486d9b54a374a6->enter($__internal_d5bdad24a9219950e3ab8a408cbbf3857c48eea52b0a1f8829486d9b54a374a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-symbol/test/is-symbol.js"));

        // line 1
        echo "'use strict';

var SymbolPoly = require('../polyfill');

module.exports = function (t, a) {
\ta(t(undefined), false, \"Undefined\");
\ta(t(null), false, \"Null\");
\ta(t(true), false, \"Primitive\");
\ta(t('raz'), false, \"String\");
\ta(t({}), false, \"Object\");
\ta(t([]), false, \"Array\");
\tif (typeof Symbol !== 'undefined') {
\t\ta(t(Symbol()), true, \"Native\");
\t}
\ta(t(SymbolPoly()), true, \"Polyfill\");
};
";
        
        $__internal_d5bdad24a9219950e3ab8a408cbbf3857c48eea52b0a1f8829486d9b54a374a6->leave($__internal_d5bdad24a9219950e3ab8a408cbbf3857c48eea52b0a1f8829486d9b54a374a6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-symbol/test/is-symbol.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var SymbolPoly = require('../polyfill');

module.exports = function (t, a) {
\ta(t(undefined), false, \"Undefined\");
\ta(t(null), false, \"Null\");
\ta(t(true), false, \"Primitive\");
\ta(t('raz'), false, \"String\");
\ta(t({}), false, \"Object\");
\ta(t([]), false, \"Array\");
\tif (typeof Symbol !== 'undefined') {
\t\ta(t(Symbol()), true, \"Native\");
\t}
\ta(t(SymbolPoly()), true, \"Polyfill\");
};
", "node_modules/es6-symbol/test/is-symbol.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-symbol/test/is-symbol.js");
    }
}
