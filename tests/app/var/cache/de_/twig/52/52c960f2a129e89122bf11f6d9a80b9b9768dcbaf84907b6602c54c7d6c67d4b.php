<?php

/* node_modules/babel-runtime/helpers/objectWithoutProperties.js */
class __TwigTemplate_dd774ff0a74e65c673ba4f7851a14c4437dcc2e09f5175ffdf8d7894812e8957 extends Twig_Template
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
        $__internal_24cd48004f5f9a200d6c0e184edac9ac018548ab729750426396d98217704eb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24cd48004f5f9a200d6c0e184edac9ac018548ab729750426396d98217704eb2->enter($__internal_24cd48004f5f9a200d6c0e184edac9ac018548ab729750426396d98217704eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/objectWithoutProperties.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

exports.default = function (obj, keys) {
  var target = {};

  for (var i in obj) {
    if (keys.indexOf(i) >= 0) continue;
    if (!Object.prototype.hasOwnProperty.call(obj, i)) continue;
    target[i] = obj[i];
  }

  return target;
};";
        
        $__internal_24cd48004f5f9a200d6c0e184edac9ac018548ab729750426396d98217704eb2->leave($__internal_24cd48004f5f9a200d6c0e184edac9ac018548ab729750426396d98217704eb2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/objectWithoutProperties.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;

exports.default = function (obj, keys) {
  var target = {};

  for (var i in obj) {
    if (keys.indexOf(i) >= 0) continue;
    if (!Object.prototype.hasOwnProperty.call(obj, i)) continue;
    target[i] = obj[i];
  }

  return target;
};", "node_modules/babel-runtime/helpers/objectWithoutProperties.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/objectWithoutProperties.js");
    }
}
