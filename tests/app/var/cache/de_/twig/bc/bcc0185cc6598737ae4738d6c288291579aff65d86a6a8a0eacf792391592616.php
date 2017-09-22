<?php

/* node_modules/babel-traverse/lib/path/lib/virtual-types.js */
class __TwigTemplate_db129042877995423b1a376f07c9b0c5dde36bbafc001a3cdda38b912a85db2e extends Twig_Template
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
        $__internal_9334029cdc83beb9b72926e48801ee0f4bf8bf29246d93666182960fe6341fc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9334029cdc83beb9b72926e48801ee0f4bf8bf29246d93666182960fe6341fc7->enter($__internal_9334029cdc83beb9b72926e48801ee0f4bf8bf29246d93666182960fe6341fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-traverse/lib/path/lib/virtual-types.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;
exports.Flow = exports.Pure = exports.Generated = exports.User = exports.Var = exports.BlockScoped = exports.Referenced = exports.Scope = exports.Expression = exports.Statement = exports.BindingIdentifier = exports.ReferencedMemberExpression = exports.ReferencedIdentifier = undefined;

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

var ReferencedIdentifier = exports.ReferencedIdentifier = {
  types: [\"Identifier\", \"JSXIdentifier\"],
  checkPath: function checkPath(_ref, opts) {
    var node = _ref.node,
        parent = _ref.parent;

    if (!t.isIdentifier(node, opts) && !t.isJSXMemberExpression(parent, opts)) {
      if (t.isJSXIdentifier(node, opts)) {
        if (_babelTypes.react.isCompatTag(node.name)) return false;
      } else {
        return false;
      }
    }

    return t.isReferenced(node, parent);
  }
};

var ReferencedMemberExpression = exports.ReferencedMemberExpression = {
  types: [\"MemberExpression\"],
  checkPath: function checkPath(_ref2) {
    var node = _ref2.node,
        parent = _ref2.parent;

    return t.isMemberExpression(node) && t.isReferenced(node, parent);
  }
};

var BindingIdentifier = exports.BindingIdentifier = {
  types: [\"Identifier\"],
  checkPath: function checkPath(_ref3) {
    var node = _ref3.node,
        parent = _ref3.parent;

    return t.isIdentifier(node) && t.isBinding(node, parent);
  }
};

var Statement = exports.Statement = {
  types: [\"Statement\"],
  checkPath: function checkPath(_ref4) {
    var node = _ref4.node,
        parent = _ref4.parent;

    if (t.isStatement(node)) {
      if (t.isVariableDeclaration(node)) {
        if (t.isForXStatement(parent, { left: node })) return false;
        if (t.isForStatement(parent, { init: node })) return false;
      }

      return true;
    } else {
      return false;
    }
  }
};

var Expression = exports.Expression = {
  types: [\"Expression\"],
  checkPath: function checkPath(path) {
    if (path.isIdentifier()) {
      return path.isReferencedIdentifier();
    } else {
      return t.isExpression(path.node);
    }
  }
};

var Scope = exports.Scope = {
  types: [\"Scopable\"],
  checkPath: function checkPath(path) {
    return t.isScope(path.node, path.parent);
  }
};

var Referenced = exports.Referenced = {
  checkPath: function checkPath(path) {
    return t.isReferenced(path.node, path.parent);
  }
};

var BlockScoped = exports.BlockScoped = {
  checkPath: function checkPath(path) {
    return t.isBlockScoped(path.node);
  }
};

var Var = exports.Var = {
  types: [\"VariableDeclaration\"],
  checkPath: function checkPath(path) {
    return t.isVar(path.node);
  }
};

var User = exports.User = {
  checkPath: function checkPath(path) {
    return path.node && !!path.node.loc;
  }
};

var Generated = exports.Generated = {
  checkPath: function checkPath(path) {
    return !path.isUser();
  }
};

var Pure = exports.Pure = {
  checkPath: function checkPath(path, opts) {
    return path.scope.isPure(path.node, opts);
  }
};

var Flow = exports.Flow = {
  types: [\"Flow\", \"ImportDeclaration\", \"ExportDeclaration\", \"ImportSpecifier\"],
  checkPath: function checkPath(_ref5) {
    var node = _ref5.node;

    if (t.isFlow(node)) {
      return true;
    } else if (t.isImportDeclaration(node)) {
      return node.importKind === \"type\" || node.importKind === \"typeof\";
    } else if (t.isExportDeclaration(node)) {
      return node.exportKind === \"type\";
    } else if (t.isImportSpecifier(node)) {
      return node.importKind === \"type\" || node.importKind === \"typeof\";
    } else {
      return false;
    }
  }
};";
        
        $__internal_9334029cdc83beb9b72926e48801ee0f4bf8bf29246d93666182960fe6341fc7->leave($__internal_9334029cdc83beb9b72926e48801ee0f4bf8bf29246d93666182960fe6341fc7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-traverse/lib/path/lib/virtual-types.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;
exports.Flow = exports.Pure = exports.Generated = exports.User = exports.Var = exports.BlockScoped = exports.Referenced = exports.Scope = exports.Expression = exports.Statement = exports.BindingIdentifier = exports.ReferencedMemberExpression = exports.ReferencedIdentifier = undefined;

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

var ReferencedIdentifier = exports.ReferencedIdentifier = {
  types: [\"Identifier\", \"JSXIdentifier\"],
  checkPath: function checkPath(_ref, opts) {
    var node = _ref.node,
        parent = _ref.parent;

    if (!t.isIdentifier(node, opts) && !t.isJSXMemberExpression(parent, opts)) {
      if (t.isJSXIdentifier(node, opts)) {
        if (_babelTypes.react.isCompatTag(node.name)) return false;
      } else {
        return false;
      }
    }

    return t.isReferenced(node, parent);
  }
};

var ReferencedMemberExpression = exports.ReferencedMemberExpression = {
  types: [\"MemberExpression\"],
  checkPath: function checkPath(_ref2) {
    var node = _ref2.node,
        parent = _ref2.parent;

    return t.isMemberExpression(node) && t.isReferenced(node, parent);
  }
};

var BindingIdentifier = exports.BindingIdentifier = {
  types: [\"Identifier\"],
  checkPath: function checkPath(_ref3) {
    var node = _ref3.node,
        parent = _ref3.parent;

    return t.isIdentifier(node) && t.isBinding(node, parent);
  }
};

var Statement = exports.Statement = {
  types: [\"Statement\"],
  checkPath: function checkPath(_ref4) {
    var node = _ref4.node,
        parent = _ref4.parent;

    if (t.isStatement(node)) {
      if (t.isVariableDeclaration(node)) {
        if (t.isForXStatement(parent, { left: node })) return false;
        if (t.isForStatement(parent, { init: node })) return false;
      }

      return true;
    } else {
      return false;
    }
  }
};

var Expression = exports.Expression = {
  types: [\"Expression\"],
  checkPath: function checkPath(path) {
    if (path.isIdentifier()) {
      return path.isReferencedIdentifier();
    } else {
      return t.isExpression(path.node);
    }
  }
};

var Scope = exports.Scope = {
  types: [\"Scopable\"],
  checkPath: function checkPath(path) {
    return t.isScope(path.node, path.parent);
  }
};

var Referenced = exports.Referenced = {
  checkPath: function checkPath(path) {
    return t.isReferenced(path.node, path.parent);
  }
};

var BlockScoped = exports.BlockScoped = {
  checkPath: function checkPath(path) {
    return t.isBlockScoped(path.node);
  }
};

var Var = exports.Var = {
  types: [\"VariableDeclaration\"],
  checkPath: function checkPath(path) {
    return t.isVar(path.node);
  }
};

var User = exports.User = {
  checkPath: function checkPath(path) {
    return path.node && !!path.node.loc;
  }
};

var Generated = exports.Generated = {
  checkPath: function checkPath(path) {
    return !path.isUser();
  }
};

var Pure = exports.Pure = {
  checkPath: function checkPath(path, opts) {
    return path.scope.isPure(path.node, opts);
  }
};

var Flow = exports.Flow = {
  types: [\"Flow\", \"ImportDeclaration\", \"ExportDeclaration\", \"ImportSpecifier\"],
  checkPath: function checkPath(_ref5) {
    var node = _ref5.node;

    if (t.isFlow(node)) {
      return true;
    } else if (t.isImportDeclaration(node)) {
      return node.importKind === \"type\" || node.importKind === \"typeof\";
    } else if (t.isExportDeclaration(node)) {
      return node.exportKind === \"type\";
    } else if (t.isImportSpecifier(node)) {
      return node.importKind === \"type\" || node.importKind === \"typeof\";
    } else {
      return false;
    }
  }
};", "node_modules/babel-traverse/lib/path/lib/virtual-types.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-traverse/lib/path/lib/virtual-types.js");
    }
}
