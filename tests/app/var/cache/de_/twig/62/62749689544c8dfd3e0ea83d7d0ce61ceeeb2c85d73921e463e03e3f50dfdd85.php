<?php

/* node_modules/core-js/fn/object/define-properties.js */
class __TwigTemplate_bc1f668854874042f32e1b4a354758f2a78b6e4ebc4fa1099846318212f85963 extends Twig_Template
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
        $__internal_0660721384734051c984346fbaf0c8e12cbb47cc152523cade4196b9ec3fa709 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0660721384734051c984346fbaf0c8e12cbb47cc152523cade4196b9ec3fa709->enter($__internal_0660721384734051c984346fbaf0c8e12cbb47cc152523cade4196b9ec3fa709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/object/define-properties.js"));

        // line 1
        echo "require('../../modules/es6.object.define-properties');
var \$Object = require('../../modules/_core').Object;
module.exports = function defineProperties(T, D) {
  return \$Object.defineProperties(T, D);
};
";
        
        $__internal_0660721384734051c984346fbaf0c8e12cbb47cc152523cade4196b9ec3fa709->leave($__internal_0660721384734051c984346fbaf0c8e12cbb47cc152523cade4196b9ec3fa709_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/object/define-properties.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.object.define-properties');
var \$Object = require('../../modules/_core').Object;
module.exports = function defineProperties(T, D) {
  return \$Object.defineProperties(T, D);
};
", "node_modules/core-js/fn/object/define-properties.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/object/define-properties.js");
    }
}
