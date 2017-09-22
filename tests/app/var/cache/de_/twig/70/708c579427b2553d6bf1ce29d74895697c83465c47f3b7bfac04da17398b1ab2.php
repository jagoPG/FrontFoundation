<?php

/* node_modules/babel-types/lib/validators.js */
class __TwigTemplate_96275645974e471777ae69ba2d877fd0e1d28fc4b21e337128fc6bb463bb8592 extends Twig_Template
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
        $__internal_c220e6abe8ff9c8a64a5ee87208adcb8d220449ca872ebe817be2da694838e53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c220e6abe8ff9c8a64a5ee87208adcb8d220449ca872ebe817be2da694838e53->enter($__internal_c220e6abe8ff9c8a64a5ee87208adcb8d220449ca872ebe817be2da694838e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-types/lib/validators.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

var _keys = require(\"babel-runtime/core-js/object/keys\");

var _keys2 = _interopRequireDefault(_keys);

var _typeof2 = require(\"babel-runtime/helpers/typeof\");

var _typeof3 = _interopRequireDefault(_typeof2);

var _getIterator2 = require(\"babel-runtime/core-js/get-iterator\");

var _getIterator3 = _interopRequireDefault(_getIterator2);

exports.isBinding = isBinding;
exports.isReferenced = isReferenced;
exports.isValidIdentifier = isValidIdentifier;
exports.isLet = isLet;
exports.isBlockScoped = isBlockScoped;
exports.isVar = isVar;
exports.isSpecifierDefault = isSpecifierDefault;
exports.isScope = isScope;
exports.isImmutable = isImmutable;
exports.isNodesEquivalent = isNodesEquivalent;

var _retrievers = require(\"./retrievers\");

var _esutils = require(\"esutils\");

var _esutils2 = _interopRequireDefault(_esutils);

var _index = require(\"./index\");

var t = _interopRequireWildcard(_index);

var _constants = require(\"./constants\");

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function isBinding(node, parent) {
  var keys = _retrievers.getBindingIdentifiers.keys[parent.type];
  if (keys) {
    for (var i = 0; i < keys.length; i++) {
      var key = keys[i];
      var val = parent[key];
      if (Array.isArray(val)) {
        if (val.indexOf(node) >= 0) return true;
      } else {
        if (val === node) return true;
      }
    }
  }

  return false;
}

function isReferenced(node, parent) {
  switch (parent.type) {
    case \"BindExpression\":
      return parent.object === node || parent.callee === node;

    case \"MemberExpression\":
    case \"JSXMemberExpression\":
      if (parent.property === node && parent.computed) {
        return true;
      } else if (parent.object === node) {
        return true;
      } else {
        return false;
      }

    case \"MetaProperty\":
      return false;

    case \"ObjectProperty\":
      if (parent.key === node) {
        return parent.computed;
      }

    case \"VariableDeclarator\":
      return parent.id !== node;

    case \"ArrowFunctionExpression\":
    case \"FunctionDeclaration\":
    case \"FunctionExpression\":
      for (var _iterator = parent.params, _isArray = Array.isArray(_iterator), _i = 0, _iterator = _isArray ? _iterator : (0, _getIterator3.default)(_iterator);;) {
        var _ref;

        if (_isArray) {
          if (_i >= _iterator.length) break;
          _ref = _iterator[_i++];
        } else {
          _i = _iterator.next();
          if (_i.done) break;
          _ref = _i.value;
        }

        var param = _ref;

        if (param === node) return false;
      }

      return parent.id !== node;

    case \"ExportSpecifier\":
      if (parent.source) {
        return false;
      } else {
        return parent.local === node;
      }

    case \"ExportNamespaceSpecifier\":
    case \"ExportDefaultSpecifier\":
      return false;

    case \"JSXAttribute\":
      return parent.name !== node;

    case \"ClassProperty\":
      if (parent.key === node) {
        return parent.computed;
      } else {
        return parent.value === node;
      }

    case \"ImportDefaultSpecifier\":
    case \"ImportNamespaceSpecifier\":
    case \"ImportSpecifier\":
      return false;

    case \"ClassDeclaration\":
    case \"ClassExpression\":
      return parent.id !== node;

    case \"ClassMethod\":
    case \"ObjectMethod\":
      return parent.key === node && parent.computed;

    case \"LabeledStatement\":
      return false;

    case \"CatchClause\":
      return parent.param !== node;

    case \"RestElement\":
      return false;

    case \"AssignmentExpression\":
      return parent.right === node;

    case \"AssignmentPattern\":
      return parent.right === node;

    case \"ObjectPattern\":
    case \"ArrayPattern\":
      return false;
  }

  return true;
}

function isValidIdentifier(name) {
  if (typeof name !== \"string\" || _esutils2.default.keyword.isReservedWordES6(name, true)) {
    return false;
  } else if (name === \"await\") {
    return false;
  } else {
    return _esutils2.default.keyword.isIdentifierNameES6(name);
  }
}

function isLet(node) {
  return t.isVariableDeclaration(node) && (node.kind !== \"var\" || node[_constants.BLOCK_SCOPED_SYMBOL]);
}

function isBlockScoped(node) {
  return t.isFunctionDeclaration(node) || t.isClassDeclaration(node) || t.isLet(node);
}

function isVar(node) {
  return t.isVariableDeclaration(node, { kind: \"var\" }) && !node[_constants.BLOCK_SCOPED_SYMBOL];
}

function isSpecifierDefault(specifier) {
  return t.isImportDefaultSpecifier(specifier) || t.isIdentifier(specifier.imported || specifier.exported, { name: \"default\" });
}

function isScope(node, parent) {
  if (t.isBlockStatement(node) && t.isFunction(parent, { body: node })) {
    return false;
  }

  return t.isScopable(node);
}

function isImmutable(node) {
  if (t.isType(node.type, \"Immutable\")) return true;

  if (t.isIdentifier(node)) {
    if (node.name === \"undefined\") {
      return true;
    } else {
      return false;
    }
  }

  return false;
}

function isNodesEquivalent(a, b) {
  if ((typeof a === \"undefined\" ? \"undefined\" : (0, _typeof3.default)(a)) !== \"object\" || (typeof a === \"undefined\" ? \"undefined\" : (0, _typeof3.default)(a)) !== \"object\" || a == null || b == null) {
    return a === b;
  }

  if (a.type !== b.type) {
    return false;
  }

  var fields = (0, _keys2.default)(t.NODE_FIELDS[a.type] || a.type);

  for (var _iterator2 = fields, _isArray2 = Array.isArray(_iterator2), _i2 = 0, _iterator2 = _isArray2 ? _iterator2 : (0, _getIterator3.default)(_iterator2);;) {
    var _ref2;

    if (_isArray2) {
      if (_i2 >= _iterator2.length) break;
      _ref2 = _iterator2[_i2++];
    } else {
      _i2 = _iterator2.next();
      if (_i2.done) break;
      _ref2 = _i2.value;
    }

    var field = _ref2;

    if ((0, _typeof3.default)(a[field]) !== (0, _typeof3.default)(b[field])) {
      return false;
    }

    if (Array.isArray(a[field])) {
      if (!Array.isArray(b[field])) {
        return false;
      }
      if (a[field].length !== b[field].length) {
        return false;
      }

      for (var i = 0; i < a[field].length; i++) {
        if (!isNodesEquivalent(a[field][i], b[field][i])) {
          return false;
        }
      }
      continue;
    }

    if (!isNodesEquivalent(a[field], b[field])) {
      return false;
    }
  }

  return true;
}";
        
        $__internal_c220e6abe8ff9c8a64a5ee87208adcb8d220449ca872ebe817be2da694838e53->leave($__internal_c220e6abe8ff9c8a64a5ee87208adcb8d220449ca872ebe817be2da694838e53_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-types/lib/validators.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;

var _keys = require(\"babel-runtime/core-js/object/keys\");

var _keys2 = _interopRequireDefault(_keys);

var _typeof2 = require(\"babel-runtime/helpers/typeof\");

var _typeof3 = _interopRequireDefault(_typeof2);

var _getIterator2 = require(\"babel-runtime/core-js/get-iterator\");

var _getIterator3 = _interopRequireDefault(_getIterator2);

exports.isBinding = isBinding;
exports.isReferenced = isReferenced;
exports.isValidIdentifier = isValidIdentifier;
exports.isLet = isLet;
exports.isBlockScoped = isBlockScoped;
exports.isVar = isVar;
exports.isSpecifierDefault = isSpecifierDefault;
exports.isScope = isScope;
exports.isImmutable = isImmutable;
exports.isNodesEquivalent = isNodesEquivalent;

var _retrievers = require(\"./retrievers\");

var _esutils = require(\"esutils\");

var _esutils2 = _interopRequireDefault(_esutils);

var _index = require(\"./index\");

var t = _interopRequireWildcard(_index);

var _constants = require(\"./constants\");

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function isBinding(node, parent) {
  var keys = _retrievers.getBindingIdentifiers.keys[parent.type];
  if (keys) {
    for (var i = 0; i < keys.length; i++) {
      var key = keys[i];
      var val = parent[key];
      if (Array.isArray(val)) {
        if (val.indexOf(node) >= 0) return true;
      } else {
        if (val === node) return true;
      }
    }
  }

  return false;
}

function isReferenced(node, parent) {
  switch (parent.type) {
    case \"BindExpression\":
      return parent.object === node || parent.callee === node;

    case \"MemberExpression\":
    case \"JSXMemberExpression\":
      if (parent.property === node && parent.computed) {
        return true;
      } else if (parent.object === node) {
        return true;
      } else {
        return false;
      }

    case \"MetaProperty\":
      return false;

    case \"ObjectProperty\":
      if (parent.key === node) {
        return parent.computed;
      }

    case \"VariableDeclarator\":
      return parent.id !== node;

    case \"ArrowFunctionExpression\":
    case \"FunctionDeclaration\":
    case \"FunctionExpression\":
      for (var _iterator = parent.params, _isArray = Array.isArray(_iterator), _i = 0, _iterator = _isArray ? _iterator : (0, _getIterator3.default)(_iterator);;) {
        var _ref;

        if (_isArray) {
          if (_i >= _iterator.length) break;
          _ref = _iterator[_i++];
        } else {
          _i = _iterator.next();
          if (_i.done) break;
          _ref = _i.value;
        }

        var param = _ref;

        if (param === node) return false;
      }

      return parent.id !== node;

    case \"ExportSpecifier\":
      if (parent.source) {
        return false;
      } else {
        return parent.local === node;
      }

    case \"ExportNamespaceSpecifier\":
    case \"ExportDefaultSpecifier\":
      return false;

    case \"JSXAttribute\":
      return parent.name !== node;

    case \"ClassProperty\":
      if (parent.key === node) {
        return parent.computed;
      } else {
        return parent.value === node;
      }

    case \"ImportDefaultSpecifier\":
    case \"ImportNamespaceSpecifier\":
    case \"ImportSpecifier\":
      return false;

    case \"ClassDeclaration\":
    case \"ClassExpression\":
      return parent.id !== node;

    case \"ClassMethod\":
    case \"ObjectMethod\":
      return parent.key === node && parent.computed;

    case \"LabeledStatement\":
      return false;

    case \"CatchClause\":
      return parent.param !== node;

    case \"RestElement\":
      return false;

    case \"AssignmentExpression\":
      return parent.right === node;

    case \"AssignmentPattern\":
      return parent.right === node;

    case \"ObjectPattern\":
    case \"ArrayPattern\":
      return false;
  }

  return true;
}

function isValidIdentifier(name) {
  if (typeof name !== \"string\" || _esutils2.default.keyword.isReservedWordES6(name, true)) {
    return false;
  } else if (name === \"await\") {
    return false;
  } else {
    return _esutils2.default.keyword.isIdentifierNameES6(name);
  }
}

function isLet(node) {
  return t.isVariableDeclaration(node) && (node.kind !== \"var\" || node[_constants.BLOCK_SCOPED_SYMBOL]);
}

function isBlockScoped(node) {
  return t.isFunctionDeclaration(node) || t.isClassDeclaration(node) || t.isLet(node);
}

function isVar(node) {
  return t.isVariableDeclaration(node, { kind: \"var\" }) && !node[_constants.BLOCK_SCOPED_SYMBOL];
}

function isSpecifierDefault(specifier) {
  return t.isImportDefaultSpecifier(specifier) || t.isIdentifier(specifier.imported || specifier.exported, { name: \"default\" });
}

function isScope(node, parent) {
  if (t.isBlockStatement(node) && t.isFunction(parent, { body: node })) {
    return false;
  }

  return t.isScopable(node);
}

function isImmutable(node) {
  if (t.isType(node.type, \"Immutable\")) return true;

  if (t.isIdentifier(node)) {
    if (node.name === \"undefined\") {
      return true;
    } else {
      return false;
    }
  }

  return false;
}

function isNodesEquivalent(a, b) {
  if ((typeof a === \"undefined\" ? \"undefined\" : (0, _typeof3.default)(a)) !== \"object\" || (typeof a === \"undefined\" ? \"undefined\" : (0, _typeof3.default)(a)) !== \"object\" || a == null || b == null) {
    return a === b;
  }

  if (a.type !== b.type) {
    return false;
  }

  var fields = (0, _keys2.default)(t.NODE_FIELDS[a.type] || a.type);

  for (var _iterator2 = fields, _isArray2 = Array.isArray(_iterator2), _i2 = 0, _iterator2 = _isArray2 ? _iterator2 : (0, _getIterator3.default)(_iterator2);;) {
    var _ref2;

    if (_isArray2) {
      if (_i2 >= _iterator2.length) break;
      _ref2 = _iterator2[_i2++];
    } else {
      _i2 = _iterator2.next();
      if (_i2.done) break;
      _ref2 = _i2.value;
    }

    var field = _ref2;

    if ((0, _typeof3.default)(a[field]) !== (0, _typeof3.default)(b[field])) {
      return false;
    }

    if (Array.isArray(a[field])) {
      if (!Array.isArray(b[field])) {
        return false;
      }
      if (a[field].length !== b[field].length) {
        return false;
      }

      for (var i = 0; i < a[field].length; i++) {
        if (!isNodesEquivalent(a[field][i], b[field][i])) {
          return false;
        }
      }
      continue;
    }

    if (!isNodesEquivalent(a[field], b[field])) {
      return false;
    }
  }

  return true;
}", "node_modules/babel-types/lib/validators.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-types/lib/validators.js");
    }
}
