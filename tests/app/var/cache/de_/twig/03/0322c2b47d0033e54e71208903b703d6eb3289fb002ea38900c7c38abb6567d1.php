<?php

/* node_modules/babel-plugin-transform-es2015-literals/lib/index.js */
class __TwigTemplate_28381aadc53fad567966ed8ac84a862263b49dcfbd87764455c2518e36aa0042 extends Twig_Template
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
        $__internal_9589d60fd8da7b4109f0e9dd40ff4e0138961c91558b145bcedeecca4daaecc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9589d60fd8da7b4109f0e9dd40ff4e0138961c91558b145bcedeecca4daaecc9->enter($__internal_9589d60fd8da7b4109f0e9dd40ff4e0138961c91558b145bcedeecca4daaecc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-es2015-literals/lib/index.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

exports.default = function () {
  return {
    visitor: {
      NumericLiteral: function NumericLiteral(_ref) {
        var node = _ref.node;

        if (node.extra && /^0[ob]/i.test(node.extra.raw)) {
          node.extra = undefined;
        }
      },
      StringLiteral: function StringLiteral(_ref2) {
        var node = _ref2.node;

        if (node.extra && /\\\\[u]/gi.test(node.extra.raw)) {
          node.extra = undefined;
        }
      }
    }
  };
};

module.exports = exports[\"default\"];";
        
        $__internal_9589d60fd8da7b4109f0e9dd40ff4e0138961c91558b145bcedeecca4daaecc9->leave($__internal_9589d60fd8da7b4109f0e9dd40ff4e0138961c91558b145bcedeecca4daaecc9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-es2015-literals/lib/index.js";
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
    visitor: {
      NumericLiteral: function NumericLiteral(_ref) {
        var node = _ref.node;

        if (node.extra && /^0[ob]/i.test(node.extra.raw)) {
          node.extra = undefined;
        }
      },
      StringLiteral: function StringLiteral(_ref2) {
        var node = _ref2.node;

        if (node.extra && /\\\\[u]/gi.test(node.extra.raw)) {
          node.extra = undefined;
        }
      }
    }
  };
};

module.exports = exports[\"default\"];", "node_modules/babel-plugin-transform-es2015-literals/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-es2015-literals/lib/index.js");
    }
}
