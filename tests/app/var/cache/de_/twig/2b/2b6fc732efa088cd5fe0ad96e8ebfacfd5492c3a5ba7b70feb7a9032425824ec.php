<?php

/* node_modules/es6-map/is-map.js */
class __TwigTemplate_023674f6d74dd229d26c92ffa538dab4cdf69bdbed5a76b54d8cbc53faa44e3a extends Twig_Template
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
        $__internal_cf6a4ddeaa77395a808bdde0ebeaa86e2ad641619a4751ce8b55a1a739234bac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf6a4ddeaa77395a808bdde0ebeaa86e2ad641619a4751ce8b55a1a739234bac->enter($__internal_cf6a4ddeaa77395a808bdde0ebeaa86e2ad641619a4751ce8b55a1a739234bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-map/is-map.js"));

        // line 1
        echo "'use strict';

var toStringTagSymbol = require('es6-symbol').toStringTag

  , toString = Object.prototype.toString
  , id = '[object Map]'
  , Global = (typeof Map === 'undefined') ? null : Map;

module.exports = function (x) {
\treturn (x && ((Global && ((x instanceof Global) || (x === Global.prototype))) ||
\t\t\t(toString.call(x) === id) || (x[toStringTagSymbol] === 'Map'))) || false;
};
";
        
        $__internal_cf6a4ddeaa77395a808bdde0ebeaa86e2ad641619a4751ce8b55a1a739234bac->leave($__internal_cf6a4ddeaa77395a808bdde0ebeaa86e2ad641619a4751ce8b55a1a739234bac_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-map/is-map.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var toStringTagSymbol = require('es6-symbol').toStringTag

  , toString = Object.prototype.toString
  , id = '[object Map]'
  , Global = (typeof Map === 'undefined') ? null : Map;

module.exports = function (x) {
\treturn (x && ((Global && ((x instanceof Global) || (x === Global.prototype))) ||
\t\t\t(toString.call(x) === id) || (x[toStringTagSymbol] === 'Map'))) || false;
};
", "node_modules/es6-map/is-map.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-map/is-map.js");
    }
}
