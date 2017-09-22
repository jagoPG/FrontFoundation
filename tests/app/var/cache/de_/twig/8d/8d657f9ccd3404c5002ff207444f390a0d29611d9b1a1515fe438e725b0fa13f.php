<?php

/* node_modules/babel-helper-explode-assignable-expression/lib/index.js */
class __TwigTemplate_5bea99a70a143a48176c7c00a6c8f43d24df4e8f0e5fa4c9629fe55a165e470d extends Twig_Template
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
        $__internal_9127b316ca6a1aec5417d7548e41ebdcf371cf1052e41d3d776bf39896c8134b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9127b316ca6a1aec5417d7548e41ebdcf371cf1052e41d3d776bf39896c8134b->enter($__internal_9127b316ca6a1aec5417d7548e41ebdcf371cf1052e41d3d776bf39896c8134b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-helper-explode-assignable-expression/lib/index.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

exports.default = function (node, nodes, file, scope, allowedSingleIdent) {
  var obj = void 0;
  if (t.isIdentifier(node) && allowedSingleIdent) {
    obj = node;
  } else {
    obj = getObjRef(node, nodes, file, scope);
  }

  var ref = void 0,
      uid = void 0;

  if (t.isIdentifier(node)) {
    ref = node;
    uid = obj;
  } else {
    var prop = getPropRef(node, nodes, file, scope);
    var computed = node.computed || t.isLiteral(prop);
    uid = ref = t.memberExpression(obj, prop, computed);
  }

  return {
    uid: uid,
    ref: ref
  };
};

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

function getObjRef(node, nodes, file, scope) {
  var ref = void 0;
  if (t.isSuper(node)) {
    return node;
  } else if (t.isIdentifier(node)) {
    if (scope.hasBinding(node.name)) {
      return node;
    } else {
      ref = node;
    }
  } else if (t.isMemberExpression(node)) {
    ref = node.object;

    if (t.isSuper(ref) || t.isIdentifier(ref) && scope.hasBinding(ref.name)) {
      return ref;
    }
  } else {
    throw new Error(\"We can't explode this node type \" + node.type);
  }

  var temp = scope.generateUidIdentifierBasedOnNode(ref);
  nodes.push(t.variableDeclaration(\"var\", [t.variableDeclarator(temp, ref)]));
  return temp;
}

function getPropRef(node, nodes, file, scope) {
  var prop = node.property;
  var key = t.toComputedKey(node, prop);
  if (t.isLiteral(key) && t.isPureish(key)) return key;

  var temp = scope.generateUidIdentifierBasedOnNode(prop);
  nodes.push(t.variableDeclaration(\"var\", [t.variableDeclarator(temp, prop)]));
  return temp;
}

module.exports = exports[\"default\"];";
        
        $__internal_9127b316ca6a1aec5417d7548e41ebdcf371cf1052e41d3d776bf39896c8134b->leave($__internal_9127b316ca6a1aec5417d7548e41ebdcf371cf1052e41d3d776bf39896c8134b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-helper-explode-assignable-expression/lib/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;

exports.default = function (node, nodes, file, scope, allowedSingleIdent) {
  var obj = void 0;
  if (t.isIdentifier(node) && allowedSingleIdent) {
    obj = node;
  } else {
    obj = getObjRef(node, nodes, file, scope);
  }

  var ref = void 0,
      uid = void 0;

  if (t.isIdentifier(node)) {
    ref = node;
    uid = obj;
  } else {
    var prop = getPropRef(node, nodes, file, scope);
    var computed = node.computed || t.isLiteral(prop);
    uid = ref = t.memberExpression(obj, prop, computed);
  }

  return {
    uid: uid,
    ref: ref
  };
};

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

function getObjRef(node, nodes, file, scope) {
  var ref = void 0;
  if (t.isSuper(node)) {
    return node;
  } else if (t.isIdentifier(node)) {
    if (scope.hasBinding(node.name)) {
      return node;
    } else {
      ref = node;
    }
  } else if (t.isMemberExpression(node)) {
    ref = node.object;

    if (t.isSuper(ref) || t.isIdentifier(ref) && scope.hasBinding(ref.name)) {
      return ref;
    }
  } else {
    throw new Error(\"We can't explode this node type \" + node.type);
  }

  var temp = scope.generateUidIdentifierBasedOnNode(ref);
  nodes.push(t.variableDeclaration(\"var\", [t.variableDeclarator(temp, ref)]));
  return temp;
}

function getPropRef(node, nodes, file, scope) {
  var prop = node.property;
  var key = t.toComputedKey(node, prop);
  if (t.isLiteral(key) && t.isPureish(key)) return key;

  var temp = scope.generateUidIdentifierBasedOnNode(prop);
  nodes.push(t.variableDeclaration(\"var\", [t.variableDeclarator(temp, prop)]));
  return temp;
}

module.exports = exports[\"default\"];", "node_modules/babel-helper-explode-assignable-expression/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-helper-explode-assignable-expression/lib/index.js");
    }
}
