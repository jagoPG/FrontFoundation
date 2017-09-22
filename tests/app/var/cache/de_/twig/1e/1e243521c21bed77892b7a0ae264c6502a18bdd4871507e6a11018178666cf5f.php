<?php

/* node_modules/babel-plugin-transform-es2015-typeof-symbol/lib/index.js */
class __TwigTemplate_76893503c99e0203cfc6337944cc44fefe3fcbf4863f4be29084d356c825dc22 extends Twig_Template
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
        $__internal_aa4b148c63c852ef230946caa26f03ee9c59a79feaf3880a180e5a7a250a3f8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa4b148c63c852ef230946caa26f03ee9c59a79feaf3880a180e5a7a250a3f8d->enter($__internal_aa4b148c63c852ef230946caa26f03ee9c59a79feaf3880a180e5a7a250a3f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-es2015-typeof-symbol/lib/index.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

var _symbol = require(\"babel-runtime/core-js/symbol\");

var _symbol2 = _interopRequireDefault(_symbol);

exports.default = function (_ref) {
  var t = _ref.types;

  var IGNORE = (0, _symbol2.default)();

  return {
    visitor: {
      Scope: function Scope(_ref2) {
        var scope = _ref2.scope;

        if (!scope.getBinding(\"Symbol\")) {
          return;
        }

        scope.rename(\"Symbol\");
      },
      UnaryExpression: function UnaryExpression(path) {
        var node = path.node,
            parent = path.parent;

        if (node[IGNORE]) return;
        if (path.find(function (path) {
          return path.node && !!path.node._generated;
        })) return;

        if (path.parentPath.isBinaryExpression() && t.EQUALITY_BINARY_OPERATORS.indexOf(parent.operator) >= 0) {
          var opposite = path.getOpposite();
          if (opposite.isLiteral() && opposite.node.value !== \"symbol\" && opposite.node.value !== \"object\") {
            return;
          }
        }

        if (node.operator === \"typeof\") {
          var call = t.callExpression(this.addHelper(\"typeof\"), [node.argument]);
          if (path.get(\"argument\").isIdentifier()) {
            var undefLiteral = t.stringLiteral(\"undefined\");
            var unary = t.unaryExpression(\"typeof\", node.argument);
            unary[IGNORE] = true;
            path.replaceWith(t.conditionalExpression(t.binaryExpression(\"===\", unary, undefLiteral), undefLiteral, call));
          } else {
            path.replaceWith(call);
          }
        }
      }
    }
  };
};

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

module.exports = exports[\"default\"];";
        
        $__internal_aa4b148c63c852ef230946caa26f03ee9c59a79feaf3880a180e5a7a250a3f8d->leave($__internal_aa4b148c63c852ef230946caa26f03ee9c59a79feaf3880a180e5a7a250a3f8d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-es2015-typeof-symbol/lib/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;

var _symbol = require(\"babel-runtime/core-js/symbol\");

var _symbol2 = _interopRequireDefault(_symbol);

exports.default = function (_ref) {
  var t = _ref.types;

  var IGNORE = (0, _symbol2.default)();

  return {
    visitor: {
      Scope: function Scope(_ref2) {
        var scope = _ref2.scope;

        if (!scope.getBinding(\"Symbol\")) {
          return;
        }

        scope.rename(\"Symbol\");
      },
      UnaryExpression: function UnaryExpression(path) {
        var node = path.node,
            parent = path.parent;

        if (node[IGNORE]) return;
        if (path.find(function (path) {
          return path.node && !!path.node._generated;
        })) return;

        if (path.parentPath.isBinaryExpression() && t.EQUALITY_BINARY_OPERATORS.indexOf(parent.operator) >= 0) {
          var opposite = path.getOpposite();
          if (opposite.isLiteral() && opposite.node.value !== \"symbol\" && opposite.node.value !== \"object\") {
            return;
          }
        }

        if (node.operator === \"typeof\") {
          var call = t.callExpression(this.addHelper(\"typeof\"), [node.argument]);
          if (path.get(\"argument\").isIdentifier()) {
            var undefLiteral = t.stringLiteral(\"undefined\");
            var unary = t.unaryExpression(\"typeof\", node.argument);
            unary[IGNORE] = true;
            path.replaceWith(t.conditionalExpression(t.binaryExpression(\"===\", unary, undefLiteral), undefLiteral, call));
          } else {
            path.replaceWith(call);
          }
        }
      }
    }
  };
};

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

module.exports = exports[\"default\"];", "node_modules/babel-plugin-transform-es2015-typeof-symbol/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-es2015-typeof-symbol/lib/index.js");
    }
}
