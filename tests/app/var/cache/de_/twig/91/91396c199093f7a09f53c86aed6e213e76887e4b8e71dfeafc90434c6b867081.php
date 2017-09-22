<?php

/* node_modules/babel-types/lib/retrievers.js */
class __TwigTemplate_fe7d94d8e127e52a02edc58b6deb990e0759655d9948de39fe524fdfe831bcdd extends Twig_Template
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
        $__internal_f856e307e463779b177f135b2c5c5763a9c84d774fabbb934d782c86d4b32a97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f856e307e463779b177f135b2c5c5763a9c84d774fabbb934d782c86d4b32a97->enter($__internal_f856e307e463779b177f135b2c5c5763a9c84d774fabbb934d782c86d4b32a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-types/lib/retrievers.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

var _create = require(\"babel-runtime/core-js/object/create\");

var _create2 = _interopRequireDefault(_create);

exports.getBindingIdentifiers = getBindingIdentifiers;
exports.getOuterBindingIdentifiers = getOuterBindingIdentifiers;

var _index = require(\"./index\");

var t = _interopRequireWildcard(_index);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function getBindingIdentifiers(node, duplicates, outerOnly) {
  var search = [].concat(node);
  var ids = (0, _create2.default)(null);

  while (search.length) {
    var id = search.shift();
    if (!id) continue;

    var keys = t.getBindingIdentifiers.keys[id.type];

    if (t.isIdentifier(id)) {
      if (duplicates) {
        var _ids = ids[id.name] = ids[id.name] || [];
        _ids.push(id);
      } else {
        ids[id.name] = id;
      }
      continue;
    }

    if (t.isExportDeclaration(id)) {
      if (t.isDeclaration(id.declaration)) {
        search.push(id.declaration);
      }
      continue;
    }

    if (outerOnly) {
      if (t.isFunctionDeclaration(id)) {
        search.push(id.id);
        continue;
      }

      if (t.isFunctionExpression(id)) {
        continue;
      }
    }

    if (keys) {
      for (var i = 0; i < keys.length; i++) {
        var key = keys[i];
        if (id[key]) {
          search = search.concat(id[key]);
        }
      }
    }
  }

  return ids;
}

getBindingIdentifiers.keys = {
  DeclareClass: [\"id\"],
  DeclareFunction: [\"id\"],
  DeclareModule: [\"id\"],
  DeclareVariable: [\"id\"],
  InterfaceDeclaration: [\"id\"],
  TypeAlias: [\"id\"],
  OpaqueType: [\"id\"],

  CatchClause: [\"param\"],
  LabeledStatement: [\"label\"],
  UnaryExpression: [\"argument\"],
  AssignmentExpression: [\"left\"],

  ImportSpecifier: [\"local\"],
  ImportNamespaceSpecifier: [\"local\"],
  ImportDefaultSpecifier: [\"local\"],
  ImportDeclaration: [\"specifiers\"],

  ExportSpecifier: [\"exported\"],
  ExportNamespaceSpecifier: [\"exported\"],
  ExportDefaultSpecifier: [\"exported\"],

  FunctionDeclaration: [\"id\", \"params\"],
  FunctionExpression: [\"id\", \"params\"],

  ClassDeclaration: [\"id\"],
  ClassExpression: [\"id\"],

  RestElement: [\"argument\"],
  UpdateExpression: [\"argument\"],

  RestProperty: [\"argument\"],
  ObjectProperty: [\"value\"],

  AssignmentPattern: [\"left\"],
  ArrayPattern: [\"elements\"],
  ObjectPattern: [\"properties\"],

  VariableDeclaration: [\"declarations\"],
  VariableDeclarator: [\"id\"]
};

function getOuterBindingIdentifiers(node, duplicates) {
  return getBindingIdentifiers(node, duplicates, true);
}";
        
        $__internal_f856e307e463779b177f135b2c5c5763a9c84d774fabbb934d782c86d4b32a97->leave($__internal_f856e307e463779b177f135b2c5c5763a9c84d774fabbb934d782c86d4b32a97_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-types/lib/retrievers.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;

var _create = require(\"babel-runtime/core-js/object/create\");

var _create2 = _interopRequireDefault(_create);

exports.getBindingIdentifiers = getBindingIdentifiers;
exports.getOuterBindingIdentifiers = getOuterBindingIdentifiers;

var _index = require(\"./index\");

var t = _interopRequireWildcard(_index);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function getBindingIdentifiers(node, duplicates, outerOnly) {
  var search = [].concat(node);
  var ids = (0, _create2.default)(null);

  while (search.length) {
    var id = search.shift();
    if (!id) continue;

    var keys = t.getBindingIdentifiers.keys[id.type];

    if (t.isIdentifier(id)) {
      if (duplicates) {
        var _ids = ids[id.name] = ids[id.name] || [];
        _ids.push(id);
      } else {
        ids[id.name] = id;
      }
      continue;
    }

    if (t.isExportDeclaration(id)) {
      if (t.isDeclaration(id.declaration)) {
        search.push(id.declaration);
      }
      continue;
    }

    if (outerOnly) {
      if (t.isFunctionDeclaration(id)) {
        search.push(id.id);
        continue;
      }

      if (t.isFunctionExpression(id)) {
        continue;
      }
    }

    if (keys) {
      for (var i = 0; i < keys.length; i++) {
        var key = keys[i];
        if (id[key]) {
          search = search.concat(id[key]);
        }
      }
    }
  }

  return ids;
}

getBindingIdentifiers.keys = {
  DeclareClass: [\"id\"],
  DeclareFunction: [\"id\"],
  DeclareModule: [\"id\"],
  DeclareVariable: [\"id\"],
  InterfaceDeclaration: [\"id\"],
  TypeAlias: [\"id\"],
  OpaqueType: [\"id\"],

  CatchClause: [\"param\"],
  LabeledStatement: [\"label\"],
  UnaryExpression: [\"argument\"],
  AssignmentExpression: [\"left\"],

  ImportSpecifier: [\"local\"],
  ImportNamespaceSpecifier: [\"local\"],
  ImportDefaultSpecifier: [\"local\"],
  ImportDeclaration: [\"specifiers\"],

  ExportSpecifier: [\"exported\"],
  ExportNamespaceSpecifier: [\"exported\"],
  ExportDefaultSpecifier: [\"exported\"],

  FunctionDeclaration: [\"id\", \"params\"],
  FunctionExpression: [\"id\", \"params\"],

  ClassDeclaration: [\"id\"],
  ClassExpression: [\"id\"],

  RestElement: [\"argument\"],
  UpdateExpression: [\"argument\"],

  RestProperty: [\"argument\"],
  ObjectProperty: [\"value\"],

  AssignmentPattern: [\"left\"],
  ArrayPattern: [\"elements\"],
  ObjectPattern: [\"properties\"],

  VariableDeclaration: [\"declarations\"],
  VariableDeclarator: [\"id\"]
};

function getOuterBindingIdentifiers(node, duplicates) {
  return getBindingIdentifiers(node, duplicates, true);
}", "node_modules/babel-types/lib/retrievers.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-types/lib/retrievers.js");
    }
}
