<?php

/* node_modules/babel-plugin-syntax-async-generators/lib/index.js */
class __TwigTemplate_16cdce5b18b64ef46b1ba73bb6386fe38d82dea26b27d6540762216e6e1dda34 extends Twig_Template
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
        $__internal_c9f3590c94a913e96612342969c02e1d7308e43e44b99abe155972dad664e7b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9f3590c94a913e96612342969c02e1d7308e43e44b99abe155972dad664e7b5->enter($__internal_c9f3590c94a913e96612342969c02e1d7308e43e44b99abe155972dad664e7b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-syntax-async-generators/lib/index.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

exports.default = function () {
  return {
    manipulateOptions: function manipulateOptions(opts, parserOpts) {
      parserOpts.plugins.push(\"asyncGenerators\");
    }
  };
};

module.exports = exports[\"default\"];";
        
        $__internal_c9f3590c94a913e96612342969c02e1d7308e43e44b99abe155972dad664e7b5->leave($__internal_c9f3590c94a913e96612342969c02e1d7308e43e44b99abe155972dad664e7b5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-syntax-async-generators/lib/index.js";
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
      parserOpts.plugins.push(\"asyncGenerators\");
    }
  };
};

module.exports = exports[\"default\"];", "node_modules/babel-plugin-syntax-async-generators/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-syntax-async-generators/lib/index.js");
    }
}
