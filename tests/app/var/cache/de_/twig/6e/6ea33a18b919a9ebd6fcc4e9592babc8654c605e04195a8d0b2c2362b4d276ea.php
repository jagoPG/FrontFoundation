<?php

/* node_modules/babel-runtime/helpers/interopRequireWildcard.js */
class __TwigTemplate_eae08e3a6707c3958496a0a56d51c88c9c83ca978b3c1dd1813700cbabd85514 extends Twig_Template
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
        $__internal_bf9f02e05fa40096cd01e6de9c3f0b3c9e45798121db0aa8f66e0a98e5c31749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf9f02e05fa40096cd01e6de9c3f0b3c9e45798121db0aa8f66e0a98e5c31749->enter($__internal_bf9f02e05fa40096cd01e6de9c3f0b3c9e45798121db0aa8f66e0a98e5c31749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/interopRequireWildcard.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

exports.default = function (obj) {
  if (obj && obj.__esModule) {
    return obj;
  } else {
    var newObj = {};

    if (obj != null) {
      for (var key in obj) {
        if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key];
      }
    }

    newObj.default = obj;
    return newObj;
  }
};";
        
        $__internal_bf9f02e05fa40096cd01e6de9c3f0b3c9e45798121db0aa8f66e0a98e5c31749->leave($__internal_bf9f02e05fa40096cd01e6de9c3f0b3c9e45798121db0aa8f66e0a98e5c31749_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/interopRequireWildcard.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;

exports.default = function (obj) {
  if (obj && obj.__esModule) {
    return obj;
  } else {
    var newObj = {};

    if (obj != null) {
      for (var key in obj) {
        if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key];
      }
    }

    newObj.default = obj;
    return newObj;
  }
};", "node_modules/babel-runtime/helpers/interopRequireWildcard.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/interopRequireWildcard.js");
    }
}
