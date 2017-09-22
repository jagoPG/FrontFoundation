<?php

/* node_modules/regenerator-transform/src/meta.js */
class __TwigTemplate_17a59431dca0bd55a97189177dd4c24123eea5c278c1097832d80096fe6db74a extends Twig_Template
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
        $__internal_8bc847ff6af2dcf316a89ae22acfd19be2712f8a4c4d16a2fa99ad243c5b90f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bc847ff6af2dcf316a89ae22acfd19be2712f8a4c4d16a2fa99ad243c5b90f0->enter($__internal_8bc847ff6af2dcf316a89ae22acfd19be2712f8a4c4d16a2fa99ad243c5b90f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/regenerator-transform/src/meta.js"));

        // line 1
        echo "/**
 * Copyright (c) 2014, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * https://raw.github.com/facebook/regenerator/master/LICENSE file. An
 * additional grant of patent rights can be found in the PATENTS file in
 * the same directory.
 */

import assert from \"assert\";
let m = require(\"private\").makeAccessor();
import * as t from \"babel-types\";
let hasOwn = Object.prototype.hasOwnProperty;

function makePredicate(propertyName, knownTypes) {
  function onlyChildren(node) {
    t.assertNode(node);

    // Assume no side effects until we find out otherwise.
    let result = false;

    function check(child) {
      if (result) {
        // Do nothing.
      } else if (Array.isArray(child)) {
        child.some(check);
      } else if (t.isNode(child)) {
        assert.strictEqual(result, false);
        result = predicate(child);
      }
      return result;
    }

    let keys = t.VISITOR_KEYS[node.type];
    if (keys) {
      for (let i = 0; i < keys.length; i++) {
        let key = keys[i];
        let child = node[key];
        check(child);
      }
    }

    return result;
  }

  function predicate(node) {
    t.assertNode(node);

    let meta = m(node);
    if (hasOwn.call(meta, propertyName))
      return meta[propertyName];

    // Certain types are \"opaque,\" which means they have no side
    // effects or leaps and we don't care about their subexpressions.
    if (hasOwn.call(opaqueTypes, node.type))
      return meta[propertyName] = false;

    if (hasOwn.call(knownTypes, node.type))
      return meta[propertyName] = true;

    return meta[propertyName] = onlyChildren(node);
  }

  predicate.onlyChildren = onlyChildren;

  return predicate;
}

let opaqueTypes = {
  FunctionExpression: true,
  ArrowFunctionExpression: true
};

// These types potentially have side effects regardless of what side
// effects their subexpressions have.
let sideEffectTypes = {
  CallExpression: true, // Anything could happen!
  ForInStatement: true, // Modifies the key variable.
  UnaryExpression: true, // Think delete.
  BinaryExpression: true, // Might invoke .toString() or .valueOf().
  AssignmentExpression: true, // Side-effecting by definition.
  UpdateExpression: true, // Updates are essentially assignments.
  NewExpression: true // Similar to CallExpression.
};

// These types are the direct cause of all leaps in control flow.
let leapTypes = {
  YieldExpression: true,
  BreakStatement: true,
  ContinueStatement: true,
  ReturnStatement: true,
  ThrowStatement: true
};

// All leap types are also side effect types.
for (let type in leapTypes) {
  if (hasOwn.call(leapTypes, type)) {
    sideEffectTypes[type] = leapTypes[type];
  }
}

exports.hasSideEffects = makePredicate(\"hasSideEffects\", sideEffectTypes);
exports.containsLeap = makePredicate(\"containsLeap\", leapTypes);
";
        
        $__internal_8bc847ff6af2dcf316a89ae22acfd19be2712f8a4c4d16a2fa99ad243c5b90f0->leave($__internal_8bc847ff6af2dcf316a89ae22acfd19be2712f8a4c4d16a2fa99ad243c5b90f0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/regenerator-transform/src/meta.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Copyright (c) 2014, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * https://raw.github.com/facebook/regenerator/master/LICENSE file. An
 * additional grant of patent rights can be found in the PATENTS file in
 * the same directory.
 */

import assert from \"assert\";
let m = require(\"private\").makeAccessor();
import * as t from \"babel-types\";
let hasOwn = Object.prototype.hasOwnProperty;

function makePredicate(propertyName, knownTypes) {
  function onlyChildren(node) {
    t.assertNode(node);

    // Assume no side effects until we find out otherwise.
    let result = false;

    function check(child) {
      if (result) {
        // Do nothing.
      } else if (Array.isArray(child)) {
        child.some(check);
      } else if (t.isNode(child)) {
        assert.strictEqual(result, false);
        result = predicate(child);
      }
      return result;
    }

    let keys = t.VISITOR_KEYS[node.type];
    if (keys) {
      for (let i = 0; i < keys.length; i++) {
        let key = keys[i];
        let child = node[key];
        check(child);
      }
    }

    return result;
  }

  function predicate(node) {
    t.assertNode(node);

    let meta = m(node);
    if (hasOwn.call(meta, propertyName))
      return meta[propertyName];

    // Certain types are \"opaque,\" which means they have no side
    // effects or leaps and we don't care about their subexpressions.
    if (hasOwn.call(opaqueTypes, node.type))
      return meta[propertyName] = false;

    if (hasOwn.call(knownTypes, node.type))
      return meta[propertyName] = true;

    return meta[propertyName] = onlyChildren(node);
  }

  predicate.onlyChildren = onlyChildren;

  return predicate;
}

let opaqueTypes = {
  FunctionExpression: true,
  ArrowFunctionExpression: true
};

// These types potentially have side effects regardless of what side
// effects their subexpressions have.
let sideEffectTypes = {
  CallExpression: true, // Anything could happen!
  ForInStatement: true, // Modifies the key variable.
  UnaryExpression: true, // Think delete.
  BinaryExpression: true, // Might invoke .toString() or .valueOf().
  AssignmentExpression: true, // Side-effecting by definition.
  UpdateExpression: true, // Updates are essentially assignments.
  NewExpression: true // Similar to CallExpression.
};

// These types are the direct cause of all leaps in control flow.
let leapTypes = {
  YieldExpression: true,
  BreakStatement: true,
  ContinueStatement: true,
  ReturnStatement: true,
  ThrowStatement: true
};

// All leap types are also side effect types.
for (let type in leapTypes) {
  if (hasOwn.call(leapTypes, type)) {
    sideEffectTypes[type] = leapTypes[type];
  }
}

exports.hasSideEffects = makePredicate(\"hasSideEffects\", sideEffectTypes);
exports.containsLeap = makePredicate(\"containsLeap\", leapTypes);
", "node_modules/regenerator-transform/src/meta.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/regenerator-transform/src/meta.js");
    }
}
