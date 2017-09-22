<?php

/* node_modules/babel-plugin-syntax-decorators/lib/index.js */
class __TwigTemplate_3ce89685b09aad7c8c91fc31bfeebe55ea590ceb8db481272dc6af00062c5037 extends Twig_Template
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
        $__internal_4a01d102733939678485414854844f11b19f7ecd6cfada0634ff022b66fde3ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a01d102733939678485414854844f11b19f7ecd6cfada0634ff022b66fde3ff->enter($__internal_4a01d102733939678485414854844f11b19f7ecd6cfada0634ff022b66fde3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-syntax-decorators/lib/index.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

exports.default = function () {
  return {
    manipulateOptions: function manipulateOptions(opts, parserOpts) {
      parserOpts.plugins.push(\"decorators\");
    }
  };
};

module.exports = exports[\"default\"];";
        
        $__internal_4a01d102733939678485414854844f11b19f7ecd6cfada0634ff022b66fde3ff->leave($__internal_4a01d102733939678485414854844f11b19f7ecd6cfada0634ff022b66fde3ff_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-syntax-decorators/lib/index.js";
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
      parserOpts.plugins.push(\"decorators\");
    }
  };
};

module.exports = exports[\"default\"];", "node_modules/babel-plugin-syntax-decorators/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-syntax-decorators/lib/index.js");
    }
}
