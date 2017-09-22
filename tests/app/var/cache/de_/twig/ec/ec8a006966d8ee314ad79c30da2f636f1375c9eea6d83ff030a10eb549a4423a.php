<?php

/* node_modules/core-js/fn/weak-set/of.js */
class __TwigTemplate_b81eff121aedcf8f2847d56bbb51165e18ac51b5ba1a536aa39772dc69440e53 extends Twig_Template
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
        $__internal_2f6a6cb1c37b004761d19cbd1dee29dcdec8d33c94570064759f3d09843aa070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f6a6cb1c37b004761d19cbd1dee29dcdec8d33c94570064759f3d09843aa070->enter($__internal_2f6a6cb1c37b004761d19cbd1dee29dcdec8d33c94570064759f3d09843aa070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/weak-set/of.js"));

        // line 1
        echo "'use strict';
require('../../modules/es6.weak-set');
require('../../modules/es7.weak-set.of');
var \$WeakSet = require('../../modules/_core').WeakSet;
var \$of = \$WeakSet.of;
module.exports = function of() {
  return \$of.apply(typeof this === 'function' ? this : \$WeakSet, arguments);
};
";
        
        $__internal_2f6a6cb1c37b004761d19cbd1dee29dcdec8d33c94570064759f3d09843aa070->leave($__internal_2f6a6cb1c37b004761d19cbd1dee29dcdec8d33c94570064759f3d09843aa070_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/weak-set/of.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
require('../../modules/es6.weak-set');
require('../../modules/es7.weak-set.of');
var \$WeakSet = require('../../modules/_core').WeakSet;
var \$of = \$WeakSet.of;
module.exports = function of() {
  return \$of.apply(typeof this === 'function' ? this : \$WeakSet, arguments);
};
", "node_modules/core-js/fn/weak-set/of.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/weak-set/of.js");
    }
}
