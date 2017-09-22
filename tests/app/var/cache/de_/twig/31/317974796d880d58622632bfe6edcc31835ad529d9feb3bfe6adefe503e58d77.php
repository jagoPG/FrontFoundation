<?php

/* node_modules/deep-equal/lib/is_arguments.js */
class __TwigTemplate_d04320ed353431d206750a31577d024ce3e677b91418b97fd5d3b9869e727161 extends Twig_Template
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
        $__internal_20fc6e5db4e30c122c451c29fdf1e1a04482ea1b1a7dc6e1e187084fafffd3a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20fc6e5db4e30c122c451c29fdf1e1a04482ea1b1a7dc6e1e187084fafffd3a2->enter($__internal_20fc6e5db4e30c122c451c29fdf1e1a04482ea1b1a7dc6e1e187084fafffd3a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/deep-equal/lib/is_arguments.js"));

        // line 1
        echo "var supportsArgumentsClass = (function(){
  return Object.prototype.toString.call(arguments)
})() == '[object Arguments]';

exports = module.exports = supportsArgumentsClass ? supported : unsupported;

exports.supported = supported;
function supported(object) {
  return Object.prototype.toString.call(object) == '[object Arguments]';
};

exports.unsupported = unsupported;
function unsupported(object){
  return object &&
    typeof object == 'object' &&
    typeof object.length == 'number' &&
    Object.prototype.hasOwnProperty.call(object, 'callee') &&
    !Object.prototype.propertyIsEnumerable.call(object, 'callee') ||
    false;
};
";
        
        $__internal_20fc6e5db4e30c122c451c29fdf1e1a04482ea1b1a7dc6e1e187084fafffd3a2->leave($__internal_20fc6e5db4e30c122c451c29fdf1e1a04482ea1b1a7dc6e1e187084fafffd3a2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/deep-equal/lib/is_arguments.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var supportsArgumentsClass = (function(){
  return Object.prototype.toString.call(arguments)
})() == '[object Arguments]';

exports = module.exports = supportsArgumentsClass ? supported : unsupported;

exports.supported = supported;
function supported(object) {
  return Object.prototype.toString.call(object) == '[object Arguments]';
};

exports.unsupported = unsupported;
function unsupported(object){
  return object &&
    typeof object == 'object' &&
    typeof object.length == 'number' &&
    Object.prototype.hasOwnProperty.call(object, 'callee') &&
    !Object.prototype.propertyIsEnumerable.call(object, 'callee') ||
    false;
};
", "node_modules/deep-equal/lib/is_arguments.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/deep-equal/lib/is_arguments.js");
    }
}
