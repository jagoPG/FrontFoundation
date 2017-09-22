<?php

/* node_modules/babel-plugin-transform-exponentiation-operator/lib/index.js */
class __TwigTemplate_d547b872125f11f686d1ca6dd368f2f78e8189b53c64bc4c8f14855bc9bd17fd extends Twig_Template
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
        $__internal_9b82e935d52e716e2da8f8d86c95558bc67c921254fa7c1d799cf12248cd0358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b82e935d52e716e2da8f8d86c95558bc67c921254fa7c1d799cf12248cd0358->enter($__internal_9b82e935d52e716e2da8f8d86c95558bc67c921254fa7c1d799cf12248cd0358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-exponentiation-operator/lib/index.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

exports.default = function (_ref) {
  var t = _ref.types;

  return {
    inherits: require(\"babel-plugin-syntax-exponentiation-operator\"),

    visitor: (0, _babelHelperBuilderBinaryAssignmentOperatorVisitor2.default)({
      operator: \"**\",

      build: function build(left, right) {
        return t.callExpression(t.memberExpression(t.identifier(\"Math\"), t.identifier(\"pow\")), [left, right]);
      }
    })
  };
};

var _babelHelperBuilderBinaryAssignmentOperatorVisitor = require(\"babel-helper-builder-binary-assignment-operator-visitor\");

var _babelHelperBuilderBinaryAssignmentOperatorVisitor2 = _interopRequireDefault(_babelHelperBuilderBinaryAssignmentOperatorVisitor);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

module.exports = exports[\"default\"];";
        
        $__internal_9b82e935d52e716e2da8f8d86c95558bc67c921254fa7c1d799cf12248cd0358->leave($__internal_9b82e935d52e716e2da8f8d86c95558bc67c921254fa7c1d799cf12248cd0358_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-exponentiation-operator/lib/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;

exports.default = function (_ref) {
  var t = _ref.types;

  return {
    inherits: require(\"babel-plugin-syntax-exponentiation-operator\"),

    visitor: (0, _babelHelperBuilderBinaryAssignmentOperatorVisitor2.default)({
      operator: \"**\",

      build: function build(left, right) {
        return t.callExpression(t.memberExpression(t.identifier(\"Math\"), t.identifier(\"pow\")), [left, right]);
      }
    })
  };
};

var _babelHelperBuilderBinaryAssignmentOperatorVisitor = require(\"babel-helper-builder-binary-assignment-operator-visitor\");

var _babelHelperBuilderBinaryAssignmentOperatorVisitor2 = _interopRequireDefault(_babelHelperBuilderBinaryAssignmentOperatorVisitor);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

module.exports = exports[\"default\"];", "node_modules/babel-plugin-transform-exponentiation-operator/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-exponentiation-operator/lib/index.js");
    }
}
