<?php

/* node_modules/babel-plugin-transform-es2015-parameters/lib/index.js */
class __TwigTemplate_381ed2021c6e00f22d87497f9d6178548f72e22a85a7355597ca3a0be72d2e9d extends Twig_Template
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
        $__internal_36902deba77f1b3dbc015222d503a8bf5e94927cf34c0cf818b64778a8bcd0f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36902deba77f1b3dbc015222d503a8bf5e94927cf34c0cf818b64778a8bcd0f2->enter($__internal_36902deba77f1b3dbc015222d503a8bf5e94927cf34c0cf818b64778a8bcd0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-es2015-parameters/lib/index.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

var _getIterator2 = require(\"babel-runtime/core-js/get-iterator\");

var _getIterator3 = _interopRequireDefault(_getIterator2);

exports.default = function () {
  return {
    visitor: _babelTraverse.visitors.merge([{
      ArrowFunctionExpression: function ArrowFunctionExpression(path) {
        var params = path.get(\"params\");
        for (var _iterator = params, _isArray = Array.isArray(_iterator), _i = 0, _iterator = _isArray ? _iterator : (0, _getIterator3.default)(_iterator);;) {
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

          if (param.isRestElement() || param.isAssignmentPattern()) {
            path.arrowFunctionToShadowed();
            break;
          }
        }
      }
    }, destructuring.visitor, rest.visitor, def.visitor])
  };
};

var _babelTraverse = require(\"babel-traverse\");

var _destructuring = require(\"./destructuring\");

var destructuring = _interopRequireWildcard(_destructuring);

var _default = require(\"./default\");

var def = _interopRequireWildcard(_default);

var _rest = require(\"./rest\");

var rest = _interopRequireWildcard(_rest);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

module.exports = exports[\"default\"];";
        
        $__internal_36902deba77f1b3dbc015222d503a8bf5e94927cf34c0cf818b64778a8bcd0f2->leave($__internal_36902deba77f1b3dbc015222d503a8bf5e94927cf34c0cf818b64778a8bcd0f2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-es2015-parameters/lib/index.js";
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

exports.default = function () {
  return {
    visitor: _babelTraverse.visitors.merge([{
      ArrowFunctionExpression: function ArrowFunctionExpression(path) {
        var params = path.get(\"params\");
        for (var _iterator = params, _isArray = Array.isArray(_iterator), _i = 0, _iterator = _isArray ? _iterator : (0, _getIterator3.default)(_iterator);;) {
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

          if (param.isRestElement() || param.isAssignmentPattern()) {
            path.arrowFunctionToShadowed();
            break;
          }
        }
      }
    }, destructuring.visitor, rest.visitor, def.visitor])
  };
};

var _babelTraverse = require(\"babel-traverse\");

var _destructuring = require(\"./destructuring\");

var destructuring = _interopRequireWildcard(_destructuring);

var _default = require(\"./default\");

var def = _interopRequireWildcard(_default);

var _rest = require(\"./rest\");

var rest = _interopRequireWildcard(_rest);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

module.exports = exports[\"default\"];", "node_modules/babel-plugin-transform-es2015-parameters/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-es2015-parameters/lib/index.js");
    }
}
