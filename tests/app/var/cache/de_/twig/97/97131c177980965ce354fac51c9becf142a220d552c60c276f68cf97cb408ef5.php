<?php

/* node_modules/babel-helper-builder-binary-assignment-operator-visitor/lib/index.js */
class __TwigTemplate_72099988094751c0773a18daa33ba6c92c29d038acce33bad6e93d2cea4ead4a extends Twig_Template
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
        $__internal_e475df46d742bcadddd60fa62b837ed5f0df69ec861090dc792fb557b2d214bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e475df46d742bcadddd60fa62b837ed5f0df69ec861090dc792fb557b2d214bb->enter($__internal_e475df46d742bcadddd60fa62b837ed5f0df69ec861090dc792fb557b2d214bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-helper-builder-binary-assignment-operator-visitor/lib/index.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

exports.default = function (opts) {
  var visitor = {};

  function isAssignment(node) {
    return node && node.operator === opts.operator + \"=\";
  }

  function buildAssignment(left, right) {
    return t.assignmentExpression(\"=\", left, right);
  }

  visitor.ExpressionStatement = function (path, file) {
    if (path.isCompletionRecord()) return;

    var expr = path.node.expression;
    if (!isAssignment(expr)) return;

    var nodes = [];
    var exploded = (0, _babelHelperExplodeAssignableExpression2.default)(expr.left, nodes, file, path.scope, true);

    nodes.push(t.expressionStatement(buildAssignment(exploded.ref, opts.build(exploded.uid, expr.right))));

    path.replaceWithMultiple(nodes);
  };

  visitor.AssignmentExpression = function (path, file) {
    var node = path.node,
        scope = path.scope;

    if (!isAssignment(node)) return;

    var nodes = [];
    var exploded = (0, _babelHelperExplodeAssignableExpression2.default)(node.left, nodes, file, scope);
    nodes.push(buildAssignment(exploded.ref, opts.build(exploded.uid, node.right)));
    path.replaceWithMultiple(nodes);
  };

  visitor.BinaryExpression = function (path) {
    var node = path.node;

    if (node.operator === opts.operator) {
      path.replaceWith(opts.build(node.left, node.right));
    }
  };

  return visitor;
};

var _babelHelperExplodeAssignableExpression = require(\"babel-helper-explode-assignable-expression\");

var _babelHelperExplodeAssignableExpression2 = _interopRequireDefault(_babelHelperExplodeAssignableExpression);

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

module.exports = exports[\"default\"];";
        
        $__internal_e475df46d742bcadddd60fa62b837ed5f0df69ec861090dc792fb557b2d214bb->leave($__internal_e475df46d742bcadddd60fa62b837ed5f0df69ec861090dc792fb557b2d214bb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-helper-builder-binary-assignment-operator-visitor/lib/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;

exports.default = function (opts) {
  var visitor = {};

  function isAssignment(node) {
    return node && node.operator === opts.operator + \"=\";
  }

  function buildAssignment(left, right) {
    return t.assignmentExpression(\"=\", left, right);
  }

  visitor.ExpressionStatement = function (path, file) {
    if (path.isCompletionRecord()) return;

    var expr = path.node.expression;
    if (!isAssignment(expr)) return;

    var nodes = [];
    var exploded = (0, _babelHelperExplodeAssignableExpression2.default)(expr.left, nodes, file, path.scope, true);

    nodes.push(t.expressionStatement(buildAssignment(exploded.ref, opts.build(exploded.uid, expr.right))));

    path.replaceWithMultiple(nodes);
  };

  visitor.AssignmentExpression = function (path, file) {
    var node = path.node,
        scope = path.scope;

    if (!isAssignment(node)) return;

    var nodes = [];
    var exploded = (0, _babelHelperExplodeAssignableExpression2.default)(node.left, nodes, file, scope);
    nodes.push(buildAssignment(exploded.ref, opts.build(exploded.uid, node.right)));
    path.replaceWithMultiple(nodes);
  };

  visitor.BinaryExpression = function (path) {
    var node = path.node;

    if (node.operator === opts.operator) {
      path.replaceWith(opts.build(node.left, node.right));
    }
  };

  return visitor;
};

var _babelHelperExplodeAssignableExpression = require(\"babel-helper-explode-assignable-expression\");

var _babelHelperExplodeAssignableExpression2 = _interopRequireDefault(_babelHelperExplodeAssignableExpression);

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

module.exports = exports[\"default\"];", "node_modules/babel-helper-builder-binary-assignment-operator-visitor/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-helper-builder-binary-assignment-operator-visitor/lib/index.js");
    }
}
