<?php

/* node_modules/core-js/modules/_create-property.js */
class __TwigTemplate_73ef6f47944ec9687796a974ac82236907afd7aadd9b1c6804d9109a9f0c9503 extends Twig_Template
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
        $__internal_a57d77a675d90ea3e43767e32fef08f4db73e129d57d74834787cd4fb16ea031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a57d77a675d90ea3e43767e32fef08f4db73e129d57d74834787cd4fb16ea031->enter($__internal_a57d77a675d90ea3e43767e32fef08f4db73e129d57d74834787cd4fb16ea031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_create-property.js"));

        // line 1
        echo "'use strict';
var \$defineProperty = require('./_object-dp');
var createDesc = require('./_property-desc');

module.exports = function (object, index, value) {
  if (index in object) \$defineProperty.f(object, index, createDesc(0, value));
  else object[index] = value;
};
";
        
        $__internal_a57d77a675d90ea3e43767e32fef08f4db73e129d57d74834787cd4fb16ea031->leave($__internal_a57d77a675d90ea3e43767e32fef08f4db73e129d57d74834787cd4fb16ea031_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_create-property.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var \$defineProperty = require('./_object-dp');
var createDesc = require('./_property-desc');

module.exports = function (object, index, value) {
  if (index in object) \$defineProperty.f(object, index, createDesc(0, value));
  else object[index] = value;
};
", "node_modules/core-js/modules/_create-property.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_create-property.js");
    }
}
