<?php

/* node_modules/babel-plugin-syntax-trailing-function-commas/lib/index.js */
class __TwigTemplate_f08abb0be9ac712c5b805e91dfbd3fc117586e89df58b8de63295aa44e507954 extends Twig_Template
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
        $__internal_c50bab973f3a3883778c55e2c225e9b34a9dec9a3f9e4dd258c62dcfadd11fb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c50bab973f3a3883778c55e2c225e9b34a9dec9a3f9e4dd258c62dcfadd11fb3->enter($__internal_c50bab973f3a3883778c55e2c225e9b34a9dec9a3f9e4dd258c62dcfadd11fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-syntax-trailing-function-commas/lib/index.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

exports.default = function () {
  return {
    manipulateOptions: function manipulateOptions(opts, parserOpts) {
      parserOpts.plugins.push(\"trailingFunctionCommas\");
    }
  };
};

module.exports = exports[\"default\"];";
        
        $__internal_c50bab973f3a3883778c55e2c225e9b34a9dec9a3f9e4dd258c62dcfadd11fb3->leave($__internal_c50bab973f3a3883778c55e2c225e9b34a9dec9a3f9e4dd258c62dcfadd11fb3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-syntax-trailing-function-commas/lib/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;

exports.default = function () {
  return {
    manipulateOptions: function manipulateOptions(opts, parserOpts) {
      parserOpts.plugins.push(\"trailingFunctionCommas\");
    }
  };
};

module.exports = exports[\"default\"];", "node_modules/babel-plugin-syntax-trailing-function-commas/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-syntax-trailing-function-commas/lib/index.js");
    }
}
