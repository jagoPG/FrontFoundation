<?php

/* node_modules/core-js/modules/es6.weak-set.js */
class __TwigTemplate_735b65d2716bab80bde5f9fbebee9c7f4e4ddf7cb91e0a8703cf243ce895d5b6 extends Twig_Template
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
        $__internal_e0c8a04846d77b04f90ce13a67ea03bf51252e32f0746cf5cfc11934188f17b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0c8a04846d77b04f90ce13a67ea03bf51252e32f0746cf5cfc11934188f17b1->enter($__internal_e0c8a04846d77b04f90ce13a67ea03bf51252e32f0746cf5cfc11934188f17b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.weak-set.js"));

        // line 1
        echo "'use strict';
var weak = require('./_collection-weak');
var validate = require('./_validate-collection');
var WEAK_SET = 'WeakSet';

// 23.4 WeakSet Objects
require('./_collection')(WEAK_SET, function (get) {
  return function WeakSet() { return get(this, arguments.length > 0 ? arguments[0] : undefined); };
}, {
  // 23.4.3.1 WeakSet.prototype.add(value)
  add: function add(value) {
    return weak.def(validate(this, WEAK_SET), value, true);
  }
}, weak, false, true);
";
        
        $__internal_e0c8a04846d77b04f90ce13a67ea03bf51252e32f0746cf5cfc11934188f17b1->leave($__internal_e0c8a04846d77b04f90ce13a67ea03bf51252e32f0746cf5cfc11934188f17b1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.weak-set.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var weak = require('./_collection-weak');
var validate = require('./_validate-collection');
var WEAK_SET = 'WeakSet';

// 23.4 WeakSet Objects
require('./_collection')(WEAK_SET, function (get) {
  return function WeakSet() { return get(this, arguments.length > 0 ? arguments[0] : undefined); };
}, {
  // 23.4.3.1 WeakSet.prototype.add(value)
  add: function add(value) {
    return weak.def(validate(this, WEAK_SET), value, true);
  }
}, weak, false, true);
", "node_modules/core-js/modules/es6.weak-set.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.weak-set.js");
    }
}
