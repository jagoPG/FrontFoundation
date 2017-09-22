<?php

/* node_modules/babel-plugin-syntax-exponentiation-operator/lib/index.js */
class __TwigTemplate_10e48ec7fda74a71a9f0d73667e26524be8cdb92dbc9ecb577e52bc57d6e92b6 extends Twig_Template
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
        $__internal_210be9cc88ff11e82a4898e95c3ea456f89345803ba31575f22dadfeed73d30f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_210be9cc88ff11e82a4898e95c3ea456f89345803ba31575f22dadfeed73d30f->enter($__internal_210be9cc88ff11e82a4898e95c3ea456f89345803ba31575f22dadfeed73d30f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-syntax-exponentiation-operator/lib/index.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

exports.default = function () {
  return {
    manipulateOptions: function manipulateOptions(opts, parserOpts) {
      parserOpts.plugins.push(\"exponentiationOperator\");
    }
  };
};

module.exports = exports[\"default\"];";
        
        $__internal_210be9cc88ff11e82a4898e95c3ea456f89345803ba31575f22dadfeed73d30f->leave($__internal_210be9cc88ff11e82a4898e95c3ea456f89345803ba31575f22dadfeed73d30f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-syntax-exponentiation-operator/lib/index.js";
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
      parserOpts.plugins.push(\"exponentiationOperator\");
    }
  };
};

module.exports = exports[\"default\"];", "node_modules/babel-plugin-syntax-exponentiation-operator/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-syntax-exponentiation-operator/lib/index.js");
    }
}
