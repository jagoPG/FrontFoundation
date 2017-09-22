<?php

/* node_modules/core-js/library/modules/_create-property.js */
class __TwigTemplate_97855f55da7f8386715c8a97166c9e6f21a504a8a2755a2b1be1ed69592bb647 extends Twig_Template
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
        $__internal_13edeb777556f276b5e4ac0f8a2826bcc37f1ea2ab90db8cb578ddfb4e1aa347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13edeb777556f276b5e4ac0f8a2826bcc37f1ea2ab90db8cb578ddfb4e1aa347->enter($__internal_13edeb777556f276b5e4ac0f8a2826bcc37f1ea2ab90db8cb578ddfb4e1aa347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_create-property.js"));

        // line 1
        echo "'use strict';
var \$defineProperty = require('./_object-dp');
var createDesc = require('./_property-desc');

module.exports = function (object, index, value) {
  if (index in object) \$defineProperty.f(object, index, createDesc(0, value));
  else object[index] = value;
};
";
        
        $__internal_13edeb777556f276b5e4ac0f8a2826bcc37f1ea2ab90db8cb578ddfb4e1aa347->leave($__internal_13edeb777556f276b5e4ac0f8a2826bcc37f1ea2ab90db8cb578ddfb4e1aa347_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_create-property.js";
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
", "node_modules/core-js/library/modules/_create-property.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_create-property.js");
    }
}
