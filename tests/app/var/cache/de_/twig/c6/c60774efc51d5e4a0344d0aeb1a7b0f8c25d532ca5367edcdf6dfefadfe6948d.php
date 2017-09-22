<?php

/* node_modules/babel-plugin-syntax-object-rest-spread/lib/index.js */
class __TwigTemplate_437c6e5c93c6d59411892107460bde0cdf542e26fd9ada71e07b0c97dbd9b2c8 extends Twig_Template
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
        $__internal_96303f2294eb4156394008624ff65d2db5a25da41eedb8d98ecfa125ca794fd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96303f2294eb4156394008624ff65d2db5a25da41eedb8d98ecfa125ca794fd1->enter($__internal_96303f2294eb4156394008624ff65d2db5a25da41eedb8d98ecfa125ca794fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-syntax-object-rest-spread/lib/index.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

exports.default = function () {
  return {
    manipulateOptions: function manipulateOptions(opts, parserOpts) {
      parserOpts.plugins.push(\"objectRestSpread\");
    }
  };
};

module.exports = exports[\"default\"];";
        
        $__internal_96303f2294eb4156394008624ff65d2db5a25da41eedb8d98ecfa125ca794fd1->leave($__internal_96303f2294eb4156394008624ff65d2db5a25da41eedb8d98ecfa125ca794fd1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-syntax-object-rest-spread/lib/index.js";
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
      parserOpts.plugins.push(\"objectRestSpread\");
    }
  };
};

module.exports = exports[\"default\"];", "node_modules/babel-plugin-syntax-object-rest-spread/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-syntax-object-rest-spread/lib/index.js");
    }
}
