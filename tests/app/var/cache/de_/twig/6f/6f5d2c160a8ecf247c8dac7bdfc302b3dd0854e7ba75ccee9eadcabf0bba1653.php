<?php

/* node_modules/babel-plugin-transform-async-generator-functions/lib/index.js */
class __TwigTemplate_3c46d8936a9f5803f16ca12077115990d0207d0b101bee9de6243d389d0206dd extends Twig_Template
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
        $__internal_1fc13c6f269237eee11936a4a4a98c5cf6349c65268faf57f09066408acef884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fc13c6f269237eee11936a4a4a98c5cf6349c65268faf57f09066408acef884->enter($__internal_1fc13c6f269237eee11936a4a4a98c5cf6349c65268faf57f09066408acef884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-async-generator-functions/lib/index.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

exports.default = function (_ref) {
  var t = _ref.types;

  var yieldStarVisitor = {
    Function: function Function(path) {
      path.skip();
    },
    YieldExpression: function YieldExpression(_ref2, state) {
      var node = _ref2.node;

      if (!node.delegate) return;
      var callee = state.addHelper(\"asyncGeneratorDelegate\");
      node.argument = t.callExpression(callee, [t.callExpression(state.addHelper(\"asyncIterator\"), [node.argument]), t.memberExpression(state.addHelper(\"asyncGenerator\"), t.identifier(\"await\"))]);
    }
  };

  return {
    inherits: require(\"babel-plugin-syntax-async-generators\"),
    visitor: {
      Function: function Function(path, state) {
        if (!path.node.async || !path.node.generator) return;

        path.traverse(yieldStarVisitor, state);

        (0, _babelHelperRemapAsyncToGenerator2.default)(path, state.file, {
          wrapAsync: t.memberExpression(state.addHelper(\"asyncGenerator\"), t.identifier(\"wrap\")),
          wrapAwait: t.memberExpression(state.addHelper(\"asyncGenerator\"), t.identifier(\"await\"))
        });
      }
    }
  };
};

var _babelHelperRemapAsyncToGenerator = require(\"babel-helper-remap-async-to-generator\");

var _babelHelperRemapAsyncToGenerator2 = _interopRequireDefault(_babelHelperRemapAsyncToGenerator);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

module.exports = exports[\"default\"];";
        
        $__internal_1fc13c6f269237eee11936a4a4a98c5cf6349c65268faf57f09066408acef884->leave($__internal_1fc13c6f269237eee11936a4a4a98c5cf6349c65268faf57f09066408acef884_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-async-generator-functions/lib/index.js";
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

  var yieldStarVisitor = {
    Function: function Function(path) {
      path.skip();
    },
    YieldExpression: function YieldExpression(_ref2, state) {
      var node = _ref2.node;

      if (!node.delegate) return;
      var callee = state.addHelper(\"asyncGeneratorDelegate\");
      node.argument = t.callExpression(callee, [t.callExpression(state.addHelper(\"asyncIterator\"), [node.argument]), t.memberExpression(state.addHelper(\"asyncGenerator\"), t.identifier(\"await\"))]);
    }
  };

  return {
    inherits: require(\"babel-plugin-syntax-async-generators\"),
    visitor: {
      Function: function Function(path, state) {
        if (!path.node.async || !path.node.generator) return;

        path.traverse(yieldStarVisitor, state);

        (0, _babelHelperRemapAsyncToGenerator2.default)(path, state.file, {
          wrapAsync: t.memberExpression(state.addHelper(\"asyncGenerator\"), t.identifier(\"wrap\")),
          wrapAwait: t.memberExpression(state.addHelper(\"asyncGenerator\"), t.identifier(\"await\"))
        });
      }
    }
  };
};

var _babelHelperRemapAsyncToGenerator = require(\"babel-helper-remap-async-to-generator\");

var _babelHelperRemapAsyncToGenerator2 = _interopRequireDefault(_babelHelperRemapAsyncToGenerator);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

module.exports = exports[\"default\"];", "node_modules/babel-plugin-transform-async-generator-functions/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-async-generator-functions/lib/index.js");
    }
}
