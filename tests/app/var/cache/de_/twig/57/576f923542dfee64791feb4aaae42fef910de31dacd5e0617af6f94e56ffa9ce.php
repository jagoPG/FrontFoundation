<?php

/* node_modules/string.prototype.trim/index.js */
class __TwigTemplate_69ad133b1c66ac0471578e68e3331bfbaa1e37e124dffc220c206240ca787e6b extends Twig_Template
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
        $__internal_2db9814bb37e65dd73162a49b987ec407ca7e176aeac9db3dec06919a8c07a15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2db9814bb37e65dd73162a49b987ec407ca7e176aeac9db3dec06919a8c07a15->enter($__internal_2db9814bb37e65dd73162a49b987ec407ca7e176aeac9db3dec06919a8c07a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/string.prototype.trim/index.js"));

        // line 1
        echo "'use strict';

var bind = require('function-bind');
var define = require('define-properties');

var implementation = require('./implementation');
var getPolyfill = require('./polyfill');
var shim = require('./shim');

var boundTrim = bind.call(Function.call, getPolyfill());

define(boundTrim, {
\tgetPolyfill: getPolyfill,
\timplementation: implementation,
\tshim: shim
});

module.exports = boundTrim;
";
        
        $__internal_2db9814bb37e65dd73162a49b987ec407ca7e176aeac9db3dec06919a8c07a15->leave($__internal_2db9814bb37e65dd73162a49b987ec407ca7e176aeac9db3dec06919a8c07a15_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/string.prototype.trim/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var bind = require('function-bind');
var define = require('define-properties');

var implementation = require('./implementation');
var getPolyfill = require('./polyfill');
var shim = require('./shim');

var boundTrim = bind.call(Function.call, getPolyfill());

define(boundTrim, {
\tgetPolyfill: getPolyfill,
\timplementation: implementation,
\tshim: shim
});

module.exports = boundTrim;
", "node_modules/string.prototype.trim/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/string.prototype.trim/index.js");
    }
}
