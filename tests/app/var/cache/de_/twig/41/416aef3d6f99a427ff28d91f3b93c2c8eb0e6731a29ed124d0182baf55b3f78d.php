<?php

/* node_modules/es6-set/is-set.js */
class __TwigTemplate_f09b392832b2646b7be6e6c52f5ec13fe191c0433bf984d2aa9ac15ec069c10f extends Twig_Template
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
        $__internal_2e173b0da85fb19ca5c642591a144d250e6083b71fdd3fb2b7d957352cfabb34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e173b0da85fb19ca5c642591a144d250e6083b71fdd3fb2b7d957352cfabb34->enter($__internal_2e173b0da85fb19ca5c642591a144d250e6083b71fdd3fb2b7d957352cfabb34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-set/is-set.js"));

        // line 1
        echo "'use strict';

var toString          = Object.prototype.toString
  , toStringTagSymbol = require('es6-symbol').toStringTag

  , id = '[object Set]'
  , Global = (typeof Set === 'undefined') ? null : Set;

module.exports = function (x) {
\treturn (x && ((Global && ((x instanceof Global) || (x === Global.prototype))) ||
\t\t\t(toString.call(x) === id) || (x[toStringTagSymbol] === 'Set'))) || false;
};
";
        
        $__internal_2e173b0da85fb19ca5c642591a144d250e6083b71fdd3fb2b7d957352cfabb34->leave($__internal_2e173b0da85fb19ca5c642591a144d250e6083b71fdd3fb2b7d957352cfabb34_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-set/is-set.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var toString          = Object.prototype.toString
  , toStringTagSymbol = require('es6-symbol').toStringTag

  , id = '[object Set]'
  , Global = (typeof Set === 'undefined') ? null : Set;

module.exports = function (x) {
\treturn (x && ((Global && ((x instanceof Global) || (x === Global.prototype))) ||
\t\t\t(toString.call(x) === id) || (x[toStringTagSymbol] === 'Set'))) || false;
};
", "node_modules/es6-set/is-set.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-set/is-set.js");
    }
}
