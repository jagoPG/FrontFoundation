<?php

/* node_modules/es6-set/test/is-implemented.js */
class __TwigTemplate_eb85e625fe511d03be4248ceceeabc20dc10fdc85ac42962b06372cf0152bff3 extends Twig_Template
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
        $__internal_b658d47dcca64197cbb4dddaef0cfb6dfafb74dad948c633151845eddd92ef5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b658d47dcca64197cbb4dddaef0cfb6dfafb74dad948c633151845eddd92ef5c->enter($__internal_b658d47dcca64197cbb4dddaef0cfb6dfafb74dad948c633151845eddd92ef5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-set/test/is-implemented.js"));

        // line 1
        echo "'use strict';

var global   = require('es5-ext/global')
  , polyfill = require('../polyfill');

module.exports = function (t, a) {
\tvar cache;
\ta(typeof t(), 'boolean');
\tcache = global.Set;
\tglobal.Set = polyfill;
\ta(t(), true);
\tif (cache === undefined) delete global.Set;
\telse global.Set = cache;
};
";
        
        $__internal_b658d47dcca64197cbb4dddaef0cfb6dfafb74dad948c633151845eddd92ef5c->leave($__internal_b658d47dcca64197cbb4dddaef0cfb6dfafb74dad948c633151845eddd92ef5c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-set/test/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var global   = require('es5-ext/global')
  , polyfill = require('../polyfill');

module.exports = function (t, a) {
\tvar cache;
\ta(typeof t(), 'boolean');
\tcache = global.Set;
\tglobal.Set = polyfill;
\ta(t(), true);
\tif (cache === undefined) delete global.Set;
\telse global.Set = cache;
};
", "node_modules/es6-set/test/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-set/test/is-implemented.js");
    }
}
