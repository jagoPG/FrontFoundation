<?php

/* node_modules/core-js/fn/weak-set/from.js */
class __TwigTemplate_18b90c791fad6c0ad414fc3fdcb4220bf43da6780f48f268a890cc8c500a89d9 extends Twig_Template
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
        $__internal_c9d8c68c205d5b7afefa568cd55b12a687ba53632c94817199178188b066749c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9d8c68c205d5b7afefa568cd55b12a687ba53632c94817199178188b066749c->enter($__internal_c9d8c68c205d5b7afefa568cd55b12a687ba53632c94817199178188b066749c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/weak-set/from.js"));

        // line 1
        echo "'use strict';
require('../../modules/es6.weak-set');
require('../../modules/es7.weak-set.from');
var \$WeakSet = require('../../modules/_core').WeakSet;
var \$from = \$WeakSet.from;
module.exports = function from(source, mapFn, thisArg) {
  return \$from.call(typeof this === 'function' ? this : \$WeakSet, source, mapFn, thisArg);
};
";
        
        $__internal_c9d8c68c205d5b7afefa568cd55b12a687ba53632c94817199178188b066749c->leave($__internal_c9d8c68c205d5b7afefa568cd55b12a687ba53632c94817199178188b066749c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/weak-set/from.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
require('../../modules/es6.weak-set');
require('../../modules/es7.weak-set.from');
var \$WeakSet = require('../../modules/_core').WeakSet;
var \$from = \$WeakSet.from;
module.exports = function from(source, mapFn, thisArg) {
  return \$from.call(typeof this === 'function' ? this : \$WeakSet, source, mapFn, thisArg);
};
", "node_modules/core-js/fn/weak-set/from.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/weak-set/from.js");
    }
}
