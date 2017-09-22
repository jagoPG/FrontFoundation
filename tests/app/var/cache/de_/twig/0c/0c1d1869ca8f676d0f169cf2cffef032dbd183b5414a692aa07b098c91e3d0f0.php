<?php

/* node_modules/babel-plugin-syntax-class-properties/lib/index.js */
class __TwigTemplate_fb2b1b7ea05bdf567aa381e29e1cdc848dcb95faf7bf420a6cd108a176e2a47b extends Twig_Template
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
        $__internal_b21b7e5f26bbe82e2470b4dc70dffe69d43c23208e9480148b38d683ac83147b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b21b7e5f26bbe82e2470b4dc70dffe69d43c23208e9480148b38d683ac83147b->enter($__internal_b21b7e5f26bbe82e2470b4dc70dffe69d43c23208e9480148b38d683ac83147b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-syntax-class-properties/lib/index.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

exports.default = function () {
  return {
    manipulateOptions: function manipulateOptions(opts, parserOpts) {
      parserOpts.plugins.push(\"classProperties\");
    }
  };
};

module.exports = exports[\"default\"];";
        
        $__internal_b21b7e5f26bbe82e2470b4dc70dffe69d43c23208e9480148b38d683ac83147b->leave($__internal_b21b7e5f26bbe82e2470b4dc70dffe69d43c23208e9480148b38d683ac83147b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-syntax-class-properties/lib/index.js";
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
      parserOpts.plugins.push(\"classProperties\");
    }
  };
};

module.exports = exports[\"default\"];", "node_modules/babel-plugin-syntax-class-properties/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-syntax-class-properties/lib/index.js");
    }
}
