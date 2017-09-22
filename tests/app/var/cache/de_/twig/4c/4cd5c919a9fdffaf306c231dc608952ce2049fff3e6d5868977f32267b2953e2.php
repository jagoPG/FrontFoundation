<?php

/* node_modules/babel-plugin-transform-es2015-object-super/lib/index.js */
class __TwigTemplate_18dfb6fe1b1aeea13baad25e7bbf3b172ec7260329d270db83cc4220621421c2 extends Twig_Template
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
        $__internal_c262f38cd61ed6846922c09cdef4e41d9f984a99993d282f819318842c743e54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c262f38cd61ed6846922c09cdef4e41d9f984a99993d282f819318842c743e54->enter($__internal_c262f38cd61ed6846922c09cdef4e41d9f984a99993d282f819318842c743e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-es2015-object-super/lib/index.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

var _getIterator2 = require(\"babel-runtime/core-js/get-iterator\");

var _getIterator3 = _interopRequireDefault(_getIterator2);

var _symbol = require(\"babel-runtime/core-js/symbol\");

var _symbol2 = _interopRequireDefault(_symbol);

exports.default = function (_ref) {
  var t = _ref.types;

  function Property(path, node, scope, getObjectRef, file) {
    var replaceSupers = new _babelHelperReplaceSupers2.default({
      getObjectRef: getObjectRef,
      methodNode: node,
      methodPath: path,
      isStatic: true,
      scope: scope,
      file: file
    });

    replaceSupers.replace();
  }

  var CONTAINS_SUPER = (0, _symbol2.default)();

  return {
    visitor: {
      Super: function Super(path) {
        var parentObj = path.findParent(function (path) {
          return path.isObjectExpression();
        });
        if (parentObj) parentObj.node[CONTAINS_SUPER] = true;
      },


      ObjectExpression: {
        exit: function exit(path, file) {
          if (!path.node[CONTAINS_SUPER]) return;

          var objectRef = void 0;
          var getObjectRef = function getObjectRef() {
            return objectRef = objectRef || path.scope.generateUidIdentifier(\"obj\");
          };

          var propPaths = path.get(\"properties\");
          for (var _iterator = propPaths, _isArray = Array.isArray(_iterator), _i = 0, _iterator = _isArray ? _iterator : (0, _getIterator3.default)(_iterator);;) {
            var _ref2;

            if (_isArray) {
              if (_i >= _iterator.length) break;
              _ref2 = _iterator[_i++];
            } else {
              _i = _iterator.next();
              if (_i.done) break;
              _ref2 = _i.value;
            }

            var propPath = _ref2;

            if (propPath.isObjectProperty()) propPath = propPath.get(\"value\");
            Property(propPath, propPath.node, path.scope, getObjectRef, file);
          }

          if (objectRef) {
            path.scope.push({ id: objectRef });
            path.replaceWith(t.assignmentExpression(\"=\", objectRef, path.node));
          }
        }
      }
    }
  };
};

var _babelHelperReplaceSupers = require(\"babel-helper-replace-supers\");

var _babelHelperReplaceSupers2 = _interopRequireDefault(_babelHelperReplaceSupers);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

module.exports = exports[\"default\"];";
        
        $__internal_c262f38cd61ed6846922c09cdef4e41d9f984a99993d282f819318842c743e54->leave($__internal_c262f38cd61ed6846922c09cdef4e41d9f984a99993d282f819318842c743e54_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-es2015-object-super/lib/index.js";
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

var _symbol = require(\"babel-runtime/core-js/symbol\");

var _symbol2 = _interopRequireDefault(_symbol);

exports.default = function (_ref) {
  var t = _ref.types;

  function Property(path, node, scope, getObjectRef, file) {
    var replaceSupers = new _babelHelperReplaceSupers2.default({
      getObjectRef: getObjectRef,
      methodNode: node,
      methodPath: path,
      isStatic: true,
      scope: scope,
      file: file
    });

    replaceSupers.replace();
  }

  var CONTAINS_SUPER = (0, _symbol2.default)();

  return {
    visitor: {
      Super: function Super(path) {
        var parentObj = path.findParent(function (path) {
          return path.isObjectExpression();
        });
        if (parentObj) parentObj.node[CONTAINS_SUPER] = true;
      },


      ObjectExpression: {
        exit: function exit(path, file) {
          if (!path.node[CONTAINS_SUPER]) return;

          var objectRef = void 0;
          var getObjectRef = function getObjectRef() {
            return objectRef = objectRef || path.scope.generateUidIdentifier(\"obj\");
          };

          var propPaths = path.get(\"properties\");
          for (var _iterator = propPaths, _isArray = Array.isArray(_iterator), _i = 0, _iterator = _isArray ? _iterator : (0, _getIterator3.default)(_iterator);;) {
            var _ref2;

            if (_isArray) {
              if (_i >= _iterator.length) break;
              _ref2 = _iterator[_i++];
            } else {
              _i = _iterator.next();
              if (_i.done) break;
              _ref2 = _i.value;
            }

            var propPath = _ref2;

            if (propPath.isObjectProperty()) propPath = propPath.get(\"value\");
            Property(propPath, propPath.node, path.scope, getObjectRef, file);
          }

          if (objectRef) {
            path.scope.push({ id: objectRef });
            path.replaceWith(t.assignmentExpression(\"=\", objectRef, path.node));
          }
        }
      }
    }
  };
};

var _babelHelperReplaceSupers = require(\"babel-helper-replace-supers\");

var _babelHelperReplaceSupers2 = _interopRequireDefault(_babelHelperReplaceSupers);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

module.exports = exports[\"default\"];", "node_modules/babel-plugin-transform-es2015-object-super/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-es2015-object-super/lib/index.js");
    }
}
