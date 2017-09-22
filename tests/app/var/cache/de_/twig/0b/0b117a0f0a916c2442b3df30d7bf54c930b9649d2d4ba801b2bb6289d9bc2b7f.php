<?php

/* node_modules/indexof/index.js */
class __TwigTemplate_b0e7bbd7a43075e79df13e34cd94f9a45afecf2f94d8c288bea8a61d4293b399 extends Twig_Template
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
        $__internal_22db2ece6e76106c84be40b85db849d97688ae25532b1ac1a79a7fc4f49068cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22db2ece6e76106c84be40b85db849d97688ae25532b1ac1a79a7fc4f49068cb->enter($__internal_22db2ece6e76106c84be40b85db849d97688ae25532b1ac1a79a7fc4f49068cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/indexof/index.js"));

        // line 1
        echo "
var indexOf = [].indexOf;

module.exports = function(arr, obj){
  if (indexOf) return arr.indexOf(obj);
  for (var i = 0; i < arr.length; ++i) {
    if (arr[i] === obj) return i;
  }
  return -1;
};";
        
        $__internal_22db2ece6e76106c84be40b85db849d97688ae25532b1ac1a79a7fc4f49068cb->leave($__internal_22db2ece6e76106c84be40b85db849d97688ae25532b1ac1a79a7fc4f49068cb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/indexof/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
var indexOf = [].indexOf;

module.exports = function(arr, obj){
  if (indexOf) return arr.indexOf(obj);
  for (var i = 0; i < arr.length; ++i) {
    if (arr[i] === obj) return i;
  }
  return -1;
};", "node_modules/indexof/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/indexof/index.js");
    }
}
