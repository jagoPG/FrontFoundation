<?php

/* node_modules/core-js/library/fn/set/from.js */
class __TwigTemplate_41f8ae89c5d350fd87b0188852598a521138af23580a692b5c27040ec3413ede extends Twig_Template
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
        $__internal_68b50e5b28c1e28b1146e651308f698afe983f8f53d4f95b100506025f96efbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68b50e5b28c1e28b1146e651308f698afe983f8f53d4f95b100506025f96efbe->enter($__internal_68b50e5b28c1e28b1146e651308f698afe983f8f53d4f95b100506025f96efbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/set/from.js"));

        // line 1
        echo "'use strict';
require('../../modules/es6.set');
require('../../modules/es7.set.from');
var \$Set = require('../../modules/_core').Set;
var \$from = \$Set.from;
module.exports = function from(source, mapFn, thisArg) {
  return \$from.call(typeof this === 'function' ? this : \$Set, source, mapFn, thisArg);
};
";
        
        $__internal_68b50e5b28c1e28b1146e651308f698afe983f8f53d4f95b100506025f96efbe->leave($__internal_68b50e5b28c1e28b1146e651308f698afe983f8f53d4f95b100506025f96efbe_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/set/from.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
require('../../modules/es6.set');
require('../../modules/es7.set.from');
var \$Set = require('../../modules/_core').Set;
var \$from = \$Set.from;
module.exports = function from(source, mapFn, thisArg) {
  return \$from.call(typeof this === 'function' ? this : \$Set, source, mapFn, thisArg);
};
", "node_modules/core-js/library/fn/set/from.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/set/from.js");
    }
}
