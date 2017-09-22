<?php

/* node_modules/core-js/modules/es6.set.js */
class __TwigTemplate_b31a8094ed17c6f5b01cbd7d2c41e846af9a3a01060e3fd1daaa2581a3b5aff6 extends Twig_Template
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
        $__internal_2b2ee2635332b091f03634c286ba6dd1dc8332d3064173118dbf38906a466228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b2ee2635332b091f03634c286ba6dd1dc8332d3064173118dbf38906a466228->enter($__internal_2b2ee2635332b091f03634c286ba6dd1dc8332d3064173118dbf38906a466228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.set.js"));

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
        
        $__internal_2b2ee2635332b091f03634c286ba6dd1dc8332d3064173118dbf38906a466228->leave($__internal_2b2ee2635332b091f03634c286ba6dd1dc8332d3064173118dbf38906a466228_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.set.js";
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
", "node_modules/core-js/modules/es6.set.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.set.js");
    }
}
