<?php

/* node_modules/event-emitter/test/emit-error.js */
class __TwigTemplate_d14a16a87c6d9d2afcd6cf83066f89f0ec624223d34f6b5352af062f4b61eaee extends Twig_Template
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
        $__internal_b1a93cb182284fcf0ac290931b709c8401b4a2bf39c2a15755ed2d413c86658a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1a93cb182284fcf0ac290931b709c8401b4a2bf39c2a15755ed2d413c86658a->enter($__internal_b1a93cb182284fcf0ac290931b709c8401b4a2bf39c2a15755ed2d413c86658a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/event-emitter/test/emit-error.js"));

        // line 1
        echo "'use strict';

var customError = require('es5-ext/error/custom')
  , ee          = require('../');

module.exports = function (t, a) {
\tvar x, error = customError('Some error', 'ERROR_TEST'), emitted;

\tx = ee();
\ta.throws(function () { t.call(x, error); }, 'ERROR_TEST');
\tx.on('error', function (err) { emitted = err; });
\tt.call(x, error);
\ta(emitted, error);
};
";
        
        $__internal_b1a93cb182284fcf0ac290931b709c8401b4a2bf39c2a15755ed2d413c86658a->leave($__internal_b1a93cb182284fcf0ac290931b709c8401b4a2bf39c2a15755ed2d413c86658a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/event-emitter/test/emit-error.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var customError = require('es5-ext/error/custom')
  , ee          = require('../');

module.exports = function (t, a) {
\tvar x, error = customError('Some error', 'ERROR_TEST'), emitted;

\tx = ee();
\ta.throws(function () { t.call(x, error); }, 'ERROR_TEST');
\tx.on('error', function (err) { emitted = err; });
\tt.call(x, error);
\ta(emitted, error);
};
", "node_modules/event-emitter/test/emit-error.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/event-emitter/test/emit-error.js");
    }
}
