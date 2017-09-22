<?php

/* node_modules/regenerator-transform/lib/hoist.js */
class __TwigTemplate_2a08b667f2756fc9034dade62902fe5ac5f2cd0b365c301b5230a2a6bc3cdc48 extends Twig_Template
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
        $__internal_cdc1482d0950a5711f52e9e9749b45085a70d0cfb0382482aa0fdb9e47e614d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdc1482d0950a5711f52e9e9749b45085a70d0cfb0382482aa0fdb9e47e614d9->enter($__internal_cdc1482d0950a5711f52e9e9749b45085a70d0cfb0382482aa0fdb9e47e614d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/regenerator-transform/lib/hoist.js"));

        // line 1
        echo "\"use strict\";

var _keys = require(\"babel-runtime/core-js/object/keys\");

var _keys2 = _interopRequireDefault(_keys);

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

var _util = require(\"./util\");

var util = _interopRequireWildcard(_util);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * Copyright (c) 2014, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * https://raw.github.com/facebook/regenerator/master/LICENSE file. An
 * additional grant of patent rights can be found in the PATENTS file in
 * the same directory.
 */

var hasOwn = Object.prototype.hasOwnProperty;

// The hoist function takes a FunctionExpression or FunctionDeclaration
// and replaces any Declaration nodes in its body with assignments, then
// returns a VariableDeclaration containing just the names of the removed
// declarations.
exports.hoist = function (funPath) {
  t.assertFunction(funPath.node);

  var vars = {};

  function varDeclToExpr(vdec, includeIdentifiers) {
    t.assertVariableDeclaration(vdec);
    // TODO assert.equal(vdec.kind, \"var\");
    var exprs = [];

    vdec.declarations.forEach(function (dec) {
      // Note: We duplicate 'dec.id' here to ensure that the variable declaration IDs don't
      // have the same 'loc' value, since that can make sourcemaps and retainLines behave poorly.
      vars[dec.id.name] = t.identifier(dec.id.name);

      if (dec.init) {
        exprs.push(t.assignmentExpression(\"=\", dec.id, dec.init));
      } else if (includeIdentifiers) {
        exprs.push(dec.id);
      }
    });

    if (exprs.length === 0) return null;

    if (exprs.length === 1) return exprs[0];

    return t.sequenceExpression(exprs);
  }

  funPath.get(\"body\").traverse({
    VariableDeclaration: {
      exit: function exit(path) {
        var expr = varDeclToExpr(path.node, false);
        if (expr === null) {
          path.remove();
        } else {
          // We don't need to traverse this expression any further because
          // there can't be any new declarations inside an expression.
          util.replaceWithOrRemove(path, t.expressionStatement(expr));
        }

        // Since the original node has been either removed or replaced,
        // avoid traversing it any further.
        path.skip();
      }
    },

    ForStatement: function ForStatement(path) {
      var init = path.node.init;
      if (t.isVariableDeclaration(init)) {
        util.replaceWithOrRemove(path.get(\"init\"), varDeclToExpr(init, false));
      }
    },

    ForXStatement: function ForXStatement(path) {
      var left = path.get(\"left\");
      if (left.isVariableDeclaration()) {
        util.replaceWithOrRemove(left, varDeclToExpr(left.node, true));
      }
    },

    FunctionDeclaration: function FunctionDeclaration(path) {
      var node = path.node;
      vars[node.id.name] = node.id;

      var assignment = t.expressionStatement(t.assignmentExpression(\"=\", node.id, t.functionExpression(node.id, node.params, node.body, node.generator, node.expression)));

      if (path.parentPath.isBlockStatement()) {
        // Insert the assignment form before the first statement in the
        // enclosing block.
        path.parentPath.unshiftContainer(\"body\", assignment);

        // Remove the function declaration now that we've inserted the
        // equivalent assignment form at the beginning of the block.
        path.remove();
      } else {
        // If the parent node is not a block statement, then we can just
        // replace the declaration with the equivalent assignment form
        // without worrying about hoisting it.
        util.replaceWithOrRemove(path, assignment);
      }

      // Don't hoist variables out of inner functions.
      path.skip();
    },

    FunctionExpression: function FunctionExpression(path) {
      // Don't descend into nested function expressions.
      path.skip();
    }
  });

  var paramNames = {};
  funPath.get(\"params\").forEach(function (paramPath) {
    var param = paramPath.node;
    if (t.isIdentifier(param)) {
      paramNames[param.name] = param;
    } else {
      // Variables declared by destructuring parameter patterns will be
      // harmlessly re-declared.
    }
  });

  var declarations = [];

  (0, _keys2.default)(vars).forEach(function (name) {
    if (!hasOwn.call(paramNames, name)) {
      declarations.push(t.variableDeclarator(vars[name], null));
    }
  });

  if (declarations.length === 0) {
    return null; // Be sure to handle this case!
  }

  return t.variableDeclaration(\"var\", declarations);
};";
        
        $__internal_cdc1482d0950a5711f52e9e9749b45085a70d0cfb0382482aa0fdb9e47e614d9->leave($__internal_cdc1482d0950a5711f52e9e9749b45085a70d0cfb0382482aa0fdb9e47e614d9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/regenerator-transform/lib/hoist.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var _keys = require(\"babel-runtime/core-js/object/keys\");

var _keys2 = _interopRequireDefault(_keys);

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

var _util = require(\"./util\");

var util = _interopRequireWildcard(_util);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * Copyright (c) 2014, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * https://raw.github.com/facebook/regenerator/master/LICENSE file. An
 * additional grant of patent rights can be found in the PATENTS file in
 * the same directory.
 */

var hasOwn = Object.prototype.hasOwnProperty;

// The hoist function takes a FunctionExpression or FunctionDeclaration
// and replaces any Declaration nodes in its body with assignments, then
// returns a VariableDeclaration containing just the names of the removed
// declarations.
exports.hoist = function (funPath) {
  t.assertFunction(funPath.node);

  var vars = {};

  function varDeclToExpr(vdec, includeIdentifiers) {
    t.assertVariableDeclaration(vdec);
    // TODO assert.equal(vdec.kind, \"var\");
    var exprs = [];

    vdec.declarations.forEach(function (dec) {
      // Note: We duplicate 'dec.id' here to ensure that the variable declaration IDs don't
      // have the same 'loc' value, since that can make sourcemaps and retainLines behave poorly.
      vars[dec.id.name] = t.identifier(dec.id.name);

      if (dec.init) {
        exprs.push(t.assignmentExpression(\"=\", dec.id, dec.init));
      } else if (includeIdentifiers) {
        exprs.push(dec.id);
      }
    });

    if (exprs.length === 0) return null;

    if (exprs.length === 1) return exprs[0];

    return t.sequenceExpression(exprs);
  }

  funPath.get(\"body\").traverse({
    VariableDeclaration: {
      exit: function exit(path) {
        var expr = varDeclToExpr(path.node, false);
        if (expr === null) {
          path.remove();
        } else {
          // We don't need to traverse this expression any further because
          // there can't be any new declarations inside an expression.
          util.replaceWithOrRemove(path, t.expressionStatement(expr));
        }

        // Since the original node has been either removed or replaced,
        // avoid traversing it any further.
        path.skip();
      }
    },

    ForStatement: function ForStatement(path) {
      var init = path.node.init;
      if (t.isVariableDeclaration(init)) {
        util.replaceWithOrRemove(path.get(\"init\"), varDeclToExpr(init, false));
      }
    },

    ForXStatement: function ForXStatement(path) {
      var left = path.get(\"left\");
      if (left.isVariableDeclaration()) {
        util.replaceWithOrRemove(left, varDeclToExpr(left.node, true));
      }
    },

    FunctionDeclaration: function FunctionDeclaration(path) {
      var node = path.node;
      vars[node.id.name] = node.id;

      var assignment = t.expressionStatement(t.assignmentExpression(\"=\", node.id, t.functionExpression(node.id, node.params, node.body, node.generator, node.expression)));

      if (path.parentPath.isBlockStatement()) {
        // Insert the assignment form before the first statement in the
        // enclosing block.
        path.parentPath.unshiftContainer(\"body\", assignment);

        // Remove the function declaration now that we've inserted the
        // equivalent assignment form at the beginning of the block.
        path.remove();
      } else {
        // If the parent node is not a block statement, then we can just
        // replace the declaration with the equivalent assignment form
        // without worrying about hoisting it.
        util.replaceWithOrRemove(path, assignment);
      }

      // Don't hoist variables out of inner functions.
      path.skip();
    },

    FunctionExpression: function FunctionExpression(path) {
      // Don't descend into nested function expressions.
      path.skip();
    }
  });

  var paramNames = {};
  funPath.get(\"params\").forEach(function (paramPath) {
    var param = paramPath.node;
    if (t.isIdentifier(param)) {
      paramNames[param.name] = param;
    } else {
      // Variables declared by destructuring parameter patterns will be
      // harmlessly re-declared.
    }
  });

  var declarations = [];

  (0, _keys2.default)(vars).forEach(function (name) {
    if (!hasOwn.call(paramNames, name)) {
      declarations.push(t.variableDeclarator(vars[name], null));
    }
  });

  if (declarations.length === 0) {
    return null; // Be sure to handle this case!
  }

  return t.variableDeclaration(\"var\", declarations);
};", "node_modules/regenerator-transform/lib/hoist.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/regenerator-transform/lib/hoist.js");
    }
}
