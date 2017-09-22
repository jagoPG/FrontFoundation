<?php

/* node_modules/es6-symbol/test/is-implemented.js */
class __TwigTemplate_d1edfb2b608c59edb8c77b05a5915efaef385cc1dcfd731ddf1e43961c94bfa2 extends Twig_Template
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
        $__internal_8d92f45707289ab9cb2910deeecda2f02f647ce5f419736a73a0e837e521bd1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d92f45707289ab9cb2910deeecda2f02f647ce5f419736a73a0e837e521bd1c->enter($__internal_8d92f45707289ab9cb2910deeecda2f02f647ce5f419736a73a0e837e521bd1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-symbol/test/is-implemented.js"));

        // line 1
        echo "'use strict';

var global   = require('es5-ext/global')
  , polyfill = require('../polyfill');

module.exports = function (t, a) {
\tvar cache;
\ta(typeof t(), 'boolean');
\tcache = global.Symbol;
\tglobal.Symbol = polyfill;
\ta(t(), true);
\tif (cache === undefined) delete global.Symbol;
\telse global.Symbol = cache;
};
";
        
        $__internal_8d92f45707289ab9cb2910deeecda2f02f647ce5f419736a73a0e837e521bd1c->leave($__internal_8d92f45707289ab9cb2910deeecda2f02f647ce5f419736a73a0e837e521bd1c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-symbol/test/is-implemented.js";
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
\tcache = global.Symbol;
\tglobal.Symbol = polyfill;
\ta(t(), true);
\tif (cache === undefined) delete global.Symbol;
\telse global.Symbol = cache;
};
", "node_modules/es6-symbol/test/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-symbol/test/is-implemented.js");
    }
}
