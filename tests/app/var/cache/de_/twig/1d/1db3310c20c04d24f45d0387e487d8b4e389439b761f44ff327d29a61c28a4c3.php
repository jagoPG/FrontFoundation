<?php

/* node_modules/core-js/library/modules/es6.set.js */
class __TwigTemplate_4033d96dad2c65ea2471cb64bc9bfd3e1e48ba832567d76e14edd48f289f292c extends Twig_Template
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
        $__internal_4842536ad69ce3761040d7ecad44b45196dcb0d96cc9961e7ee54e07a6b56af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4842536ad69ce3761040d7ecad44b45196dcb0d96cc9961e7ee54e07a6b56af0->enter($__internal_4842536ad69ce3761040d7ecad44b45196dcb0d96cc9961e7ee54e07a6b56af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.set.js"));

        // line 1
        echo "'use strict';
var strong = require('./_collection-strong');
var validate = require('./_validate-collection');
var SET = 'Set';

// 23.2 Set Objects
module.exports = require('./_collection')(SET, function (get) {
  return function Set() { return get(this, arguments.length > 0 ? arguments[0] : undefined); };
}, {
  // 23.2.3.1 Set.prototype.add(value)
  add: function add(value) {
    return strong.def(validate(this, SET), value = value === 0 ? 0 : value, value);
  }
}, strong);
";
        
        $__internal_4842536ad69ce3761040d7ecad44b45196dcb0d96cc9961e7ee54e07a6b56af0->leave($__internal_4842536ad69ce3761040d7ecad44b45196dcb0d96cc9961e7ee54e07a6b56af0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.set.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var strong = require('./_collection-strong');
var validate = require('./_validate-collection');
var SET = 'Set';

// 23.2 Set Objects
module.exports = require('./_collection')(SET, function (get) {
  return function Set() { return get(this, arguments.length > 0 ? arguments[0] : undefined); };
}, {
  // 23.2.3.1 Set.prototype.add(value)
  add: function add(value) {
    return strong.def(validate(this, SET), value = value === 0 ? 0 : value, value);
  }
}, strong);
", "node_modules/core-js/library/modules/es6.set.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.set.js");
    }
}
