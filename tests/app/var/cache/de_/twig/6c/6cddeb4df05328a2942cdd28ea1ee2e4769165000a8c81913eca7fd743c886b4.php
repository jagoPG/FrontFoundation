<?php

/* node_modules/babel-plugin-transform-es2015-block-scoped-functions/lib/index.js */
class __TwigTemplate_23f09334f35304f3a563b83213e098d0c6adddc25afed1be69a6c080dcf7cbe3 extends Twig_Template
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
        $__internal_73ff5fcb3aaf1a6ba65ec40a28b8956e453567d3ed7f340727eb046eb55a5994 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73ff5fcb3aaf1a6ba65ec40a28b8956e453567d3ed7f340727eb046eb55a5994->enter($__internal_73ff5fcb3aaf1a6ba65ec40a28b8956e453567d3ed7f340727eb046eb55a5994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-es2015-block-scoped-functions/lib/index.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

var _getIterator2 = require(\"babel-runtime/core-js/get-iterator\");

var _getIterator3 = _interopRequireDefault(_getIterator2);

exports.default = function (_ref) {
  var t = _ref.types;

  function statementList(key, path) {
    var paths = path.get(key);

    for (var _iterator = paths, _isArray = Array.isArray(_iterator), _i = 0, _iterator = _isArray ? _iterator : (0, _getIterator3.default)(_iterator);;) {
      var _ref2;

      if (_isArray) {
        if (_i >= _iterator.length) break;
        _ref2 = _iterator[_i++];
      } else {
        _i = _iterator.next();
        if (_i.done) break;
        _ref2 = _i.value;
      }

      var _path = _ref2;

      var func = _path.node;
      if (!_path.isFunctionDeclaration()) continue;

      var declar = t.variableDeclaration(\"let\", [t.variableDeclarator(func.id, t.toExpression(func))]);

      declar._blockHoist = 2;

      func.id = null;

      _path.replaceWith(declar);
    }
  }

  return {
    visitor: {
      BlockStatement: function BlockStatement(path) {
        var node = path.node,
            parent = path.parent;

        if (t.isFunction(parent, { body: node }) || t.isExportDeclaration(parent)) {
          return;
        }

        statementList(\"body\", path);
      },
      SwitchCase: function SwitchCase(path) {
        statementList(\"consequent\", path);
      }
    }
  };
};

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

module.exports = exports[\"default\"];";
        
        $__internal_73ff5fcb3aaf1a6ba65ec40a28b8956e453567d3ed7f340727eb046eb55a5994->leave($__internal_73ff5fcb3aaf1a6ba65ec40a28b8956e453567d3ed7f340727eb046eb55a5994_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-es2015-block-scoped-functions/lib/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;

var _getIterator2 = require(\"babel-runtime/core-js/get-iterator\");

var _getIterator3 = _interopRequireDefault(_getIterator2);

exports.default = function (_ref) {
  var t = _ref.types;

  function statementList(key, path) {
    var paths = path.get(key);

    for (var _iterator = paths, _isArray = Array.isArray(_iterator), _i = 0, _iterator = _isArray ? _iterator : (0, _getIterator3.default)(_iterator);;) {
      var _ref2;

      if (_isArray) {
        if (_i >= _iterator.length) break;
        _ref2 = _iterator[_i++];
      } else {
        _i = _iterator.next();
        if (_i.done) break;
        _ref2 = _i.value;
      }

      var _path = _ref2;

      var func = _path.node;
      if (!_path.isFunctionDeclaration()) continue;

      var declar = t.variableDeclaration(\"let\", [t.variableDeclarator(func.id, t.toExpression(func))]);

      declar._blockHoist = 2;

      func.id = null;

      _path.replaceWith(declar);
    }
  }

  return {
    visitor: {
      BlockStatement: function BlockStatement(path) {
        var node = path.node,
            parent = path.parent;

        if (t.isFunction(parent, { body: node }) || t.isExportDeclaration(parent)) {
          return;
        }

        statementList(\"body\", path);
      },
      SwitchCase: function SwitchCase(path) {
        statementList(\"consequent\", path);
      }
    }
  };
};

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

module.exports = exports[\"default\"];", "node_modules/babel-plugin-transform-es2015-block-scoped-functions/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-es2015-block-scoped-functions/lib/index.js");
    }
}
