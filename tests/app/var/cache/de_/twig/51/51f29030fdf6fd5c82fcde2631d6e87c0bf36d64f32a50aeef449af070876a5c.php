<?php

/* node_modules/core-js/fn/object/get-own-property-descriptor.js */
class __TwigTemplate_a74c5fffd70ac5757f2452376dc74ad9aa22ba465aed99ef09f88a1c8871430b extends Twig_Template
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
        $__internal_978f05b78f9c23ce4d58bfb07ed66a6e483818af31742dff96c8e318f4fc954b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_978f05b78f9c23ce4d58bfb07ed66a6e483818af31742dff96c8e318f4fc954b->enter($__internal_978f05b78f9c23ce4d58bfb07ed66a6e483818af31742dff96c8e318f4fc954b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/object/get-own-property-descriptor.js"));

        // line 1
        echo "require('../../modules/es6.object.get-own-property-descriptor');
var \$Object = require('../../modules/_core').Object;
module.exports = function getOwnPropertyDescriptor(it, key) {
  return \$Object.getOwnPropertyDescriptor(it, key);
};
";
        
        $__internal_978f05b78f9c23ce4d58bfb07ed66a6e483818af31742dff96c8e318f4fc954b->leave($__internal_978f05b78f9c23ce4d58bfb07ed66a6e483818af31742dff96c8e318f4fc954b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/object/get-own-property-descriptor.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.object.get-own-property-descriptor');
var \$Object = require('../../modules/_core').Object;
module.exports = function getOwnPropertyDescriptor(it, key) {
  return \$Object.getOwnPropertyDescriptor(it, key);
};
", "node_modules/core-js/fn/object/get-own-property-descriptor.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/object/get-own-property-descriptor.js");
    }
}
