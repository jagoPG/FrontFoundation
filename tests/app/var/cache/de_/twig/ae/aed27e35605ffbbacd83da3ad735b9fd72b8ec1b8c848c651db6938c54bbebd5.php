<?php

/* node_modules/babel-plugin-syntax-async-functions/lib/index.js */
class __TwigTemplate_2b190d0e6fb78af5409baf22181183aa95f62ff8ecca863d3e6baa370055f967 extends Twig_Template
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
        $__internal_f46e3bc3d2fb294b421a545b8248de3824af71d46b031e88a754e818e8055a97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f46e3bc3d2fb294b421a545b8248de3824af71d46b031e88a754e818e8055a97->enter($__internal_f46e3bc3d2fb294b421a545b8248de3824af71d46b031e88a754e818e8055a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-syntax-async-functions/lib/index.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

exports.default = function () {
  return {
    manipulateOptions: function manipulateOptions(opts, parserOpts) {
      parserOpts.plugins.push(\"asyncFunctions\");
    }
  };
};

module.exports = exports[\"default\"];";
        
        $__internal_f46e3bc3d2fb294b421a545b8248de3824af71d46b031e88a754e818e8055a97->leave($__internal_f46e3bc3d2fb294b421a545b8248de3824af71d46b031e88a754e818e8055a97_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-syntax-async-functions/lib/index.js";
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
      parserOpts.plugins.push(\"asyncFunctions\");
    }
  };
};

module.exports = exports[\"default\"];", "node_modules/babel-plugin-syntax-async-functions/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-syntax-async-functions/lib/index.js");
    }
}
