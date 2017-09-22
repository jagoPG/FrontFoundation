<?php

/* node_modules/babel-plugin-transform-es2015-classes/lib/index.js */
class __TwigTemplate_8b0859ea975bb6a7765387e07999dc40e3b9875838e4ff8f29bf3dfd2355e886 extends Twig_Template
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
        $__internal_3e752656d3db09ce47d5b8f41db3c33b6c0b054378059484da09c4cdd9d4e5e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e752656d3db09ce47d5b8f41db3c33b6c0b054378059484da09c4cdd9d4e5e1->enter($__internal_3e752656d3db09ce47d5b8f41db3c33b6c0b054378059484da09c4cdd9d4e5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-es2015-classes/lib/index.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

var _symbol = require(\"babel-runtime/core-js/symbol\");

var _symbol2 = _interopRequireDefault(_symbol);

exports.default = function (_ref) {
  var t = _ref.types;

  var VISITED = (0, _symbol2.default)();

  return {
    visitor: {
      ExportDefaultDeclaration: function ExportDefaultDeclaration(path) {
        if (!path.get(\"declaration\").isClassDeclaration()) return;

        var node = path.node;

        var ref = node.declaration.id || path.scope.generateUidIdentifier(\"class\");
        node.declaration.id = ref;

        path.replaceWith(node.declaration);
        path.insertAfter(t.exportDefaultDeclaration(ref));
      },
      ClassDeclaration: function ClassDeclaration(path) {
        var node = path.node;


        var ref = node.id || path.scope.generateUidIdentifier(\"class\");

        path.replaceWith(t.variableDeclaration(\"let\", [t.variableDeclarator(ref, t.toExpression(node))]));
      },
      ClassExpression: function ClassExpression(path, state) {
        var node = path.node;

        if (node[VISITED]) return;

        var inferred = (0, _babelHelperFunctionName2.default)(path);
        if (inferred && inferred !== node) return path.replaceWith(inferred);

        node[VISITED] = true;

        var Constructor = _vanilla2.default;
        if (state.opts.loose) Constructor = _loose2.default;

        path.replaceWith(new Constructor(path, state.file).run());
      }
    }
  };
};

var _loose = require(\"./loose\");

var _loose2 = _interopRequireDefault(_loose);

var _vanilla = require(\"./vanilla\");

var _vanilla2 = _interopRequireDefault(_vanilla);

var _babelHelperFunctionName = require(\"babel-helper-function-name\");

var _babelHelperFunctionName2 = _interopRequireDefault(_babelHelperFunctionName);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

module.exports = exports[\"default\"];";
        
        $__internal_3e752656d3db09ce47d5b8f41db3c33b6c0b054378059484da09c4cdd9d4e5e1->leave($__internal_3e752656d3db09ce47d5b8f41db3c33b6c0b054378059484da09c4cdd9d4e5e1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-es2015-classes/lib/index.js";
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

  var VISITED = (0, _symbol2.default)();

  return {
    visitor: {
      ExportDefaultDeclaration: function ExportDefaultDeclaration(path) {
        if (!path.get(\"declaration\").isClassDeclaration()) return;

        var node = path.node;

        var ref = node.declaration.id || path.scope.generateUidIdentifier(\"class\");
        node.declaration.id = ref;

        path.replaceWith(node.declaration);
        path.insertAfter(t.exportDefaultDeclaration(ref));
      },
      ClassDeclaration: function ClassDeclaration(path) {
        var node = path.node;


        var ref = node.id || path.scope.generateUidIdentifier(\"class\");

        path.replaceWith(t.variableDeclaration(\"let\", [t.variableDeclarator(ref, t.toExpression(node))]));
      },
      ClassExpression: function ClassExpression(path, state) {
        var node = path.node;

        if (node[VISITED]) return;

        var inferred = (0, _babelHelperFunctionName2.default)(path);
        if (inferred && inferred !== node) return path.replaceWith(inferred);

        node[VISITED] = true;

        var Constructor = _vanilla2.default;
        if (state.opts.loose) Constructor = _loose2.default;

        path.replaceWith(new Constructor(path, state.file).run());
      }
    }
  };
};

var _loose = require(\"./loose\");

var _loose2 = _interopRequireDefault(_loose);

var _vanilla = require(\"./vanilla\");

var _vanilla2 = _interopRequireDefault(_vanilla);

var _babelHelperFunctionName = require(\"babel-helper-function-name\");

var _babelHelperFunctionName2 = _interopRequireDefault(_babelHelperFunctionName);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

module.exports = exports[\"default\"];", "node_modules/babel-plugin-transform-es2015-classes/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-es2015-classes/lib/index.js");
    }
}
