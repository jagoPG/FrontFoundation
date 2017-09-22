<?php

/* node_modules/core-js/library/fn/object/get-own-property-descriptor.js */
class __TwigTemplate_18f17c117ec966de3e723bf3b17dc8e09c3cd9b217598bc1ae7beac01c147cea extends Twig_Template
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
        $__internal_d3477ae01a3d27ba4484c2e7030ad0d46dc5e36827ed879e27856a0e6ad58c7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3477ae01a3d27ba4484c2e7030ad0d46dc5e36827ed879e27856a0e6ad58c7b->enter($__internal_d3477ae01a3d27ba4484c2e7030ad0d46dc5e36827ed879e27856a0e6ad58c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/object/get-own-property-descriptor.js"));

        // line 1
        echo "require('../../modules/es6.object.get-own-property-descriptor');
var \$Object = require('../../modules/_core').Object;
module.exports = function getOwnPropertyDescriptor(it, key) {
  return \$Object.getOwnPropertyDescriptor(it, key);
};
";
        
        $__internal_d3477ae01a3d27ba4484c2e7030ad0d46dc5e36827ed879e27856a0e6ad58c7b->leave($__internal_d3477ae01a3d27ba4484c2e7030ad0d46dc5e36827ed879e27856a0e6ad58c7b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/object/get-own-property-descriptor.js";
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
", "node_modules/core-js/library/fn/object/get-own-property-descriptor.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/object/get-own-property-descriptor.js");
    }
}
