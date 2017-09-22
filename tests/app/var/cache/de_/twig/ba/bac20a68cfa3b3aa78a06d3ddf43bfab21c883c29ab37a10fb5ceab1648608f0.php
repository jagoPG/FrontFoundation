<?php

/* node_modules/core-js/library/fn/weak-map/from.js */
class __TwigTemplate_5e4906444f366bc534496e0e8d945fb48b228ccf0530090eafbaf183abab0d2c extends Twig_Template
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
        $__internal_c357f12c6dece533ea7c15431536ef93294d72c3f470a2202791ede25935435f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c357f12c6dece533ea7c15431536ef93294d72c3f470a2202791ede25935435f->enter($__internal_c357f12c6dece533ea7c15431536ef93294d72c3f470a2202791ede25935435f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/weak-map/from.js"));

        // line 1
        echo "'use strict';
require('../../modules/es6.weak-map');
require('../../modules/es7.weak-map.from');
var \$WeakMap = require('../../modules/_core').WeakMap;
var \$from = \$WeakMap.from;
module.exports = function from(source, mapFn, thisArg) {
  return \$from.call(typeof this === 'function' ? this : \$WeakMap, source, mapFn, thisArg);
};
";
        
        $__internal_c357f12c6dece533ea7c15431536ef93294d72c3f470a2202791ede25935435f->leave($__internal_c357f12c6dece533ea7c15431536ef93294d72c3f470a2202791ede25935435f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/weak-map/from.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
require('../../modules/es6.weak-map');
require('../../modules/es7.weak-map.from');
var \$WeakMap = require('../../modules/_core').WeakMap;
var \$from = \$WeakMap.from;
module.exports = function from(source, mapFn, thisArg) {
  return \$from.call(typeof this === 'function' ? this : \$WeakMap, source, mapFn, thisArg);
};
", "node_modules/core-js/library/fn/weak-map/from.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/weak-map/from.js");
    }
}
