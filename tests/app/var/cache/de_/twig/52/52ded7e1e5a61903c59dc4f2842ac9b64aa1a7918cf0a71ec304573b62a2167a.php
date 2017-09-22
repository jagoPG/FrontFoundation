<?php

/* node_modules/babel-helper-explode-class/lib/index.js */
class __TwigTemplate_bc32e92c0eedcb286e16878d3593d3bec796f36e861aff3267f1022105bed7d6 extends Twig_Template
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
        $__internal_28c1ecc51ab88a657f5e4e4986c96e40f469eff2d00b77fb3fed588eba8679f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28c1ecc51ab88a657f5e4e4986c96e40f469eff2d00b77fb3fed588eba8679f6->enter($__internal_28c1ecc51ab88a657f5e4e4986c96e40f469eff2d00b77fb3fed588eba8679f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-helper-explode-class/lib/index.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

var _getIterator2 = require(\"babel-runtime/core-js/get-iterator\");

var _getIterator3 = _interopRequireDefault(_getIterator2);

exports.default = function (classPath) {
  classPath.assertClass();

  var memoisedExpressions = [];

  function maybeMemoise(path) {
    if (!path.node || path.isPure()) return;

    var uid = classPath.scope.generateDeclaredUidIdentifier();
    memoisedExpressions.push(t.assignmentExpression(\"=\", uid, path.node));
    path.replaceWith(uid);
  }

  function memoiseDecorators(paths) {
    if (!Array.isArray(paths) || !paths.length) return;

    paths = paths.reverse();

    (0, _babelHelperBindifyDecorators2.default)(paths);

    for (var _iterator = paths, _isArray = Array.isArray(_iterator), _i = 0, _iterator = _isArray ? _iterator : (0, _getIterator3.default)(_iterator);;) {
      var _ref;

      if (_isArray) {
        if (_i >= _iterator.length) break;
        _ref = _iterator[_i++];
      } else {
        _i = _iterator.next();
        if (_i.done) break;
        _ref = _i.value;
      }

      var path = _ref;

      maybeMemoise(path);
    }
  }

  maybeMemoise(classPath.get(\"superClass\"));
  memoiseDecorators(classPath.get(\"decorators\"), true);

  var methods = classPath.get(\"body.body\");
  for (var _iterator2 = methods, _isArray2 = Array.isArray(_iterator2), _i2 = 0, _iterator2 = _isArray2 ? _iterator2 : (0, _getIterator3.default)(_iterator2);;) {
    var _ref2;

    if (_isArray2) {
      if (_i2 >= _iterator2.length) break;
      _ref2 = _iterator2[_i2++];
    } else {
      _i2 = _iterator2.next();
      if (_i2.done) break;
      _ref2 = _i2.value;
    }

    var methodPath = _ref2;

    if (methodPath.is(\"computed\")) {
      maybeMemoise(methodPath.get(\"key\"));
    }

    if (methodPath.has(\"decorators\")) {
      memoiseDecorators(classPath.get(\"decorators\"));
    }
  }

  if (memoisedExpressions) {
    classPath.insertBefore(memoisedExpressions.map(function (expr) {
      return t.expressionStatement(expr);
    }));
  }
};

var _babelHelperBindifyDecorators = require(\"babel-helper-bindify-decorators\");

var _babelHelperBindifyDecorators2 = _interopRequireDefault(_babelHelperBindifyDecorators);

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

module.exports = exports[\"default\"];";
        
        $__internal_28c1ecc51ab88a657f5e4e4986c96e40f469eff2d00b77fb3fed588eba8679f6->leave($__internal_28c1ecc51ab88a657f5e4e4986c96e40f469eff2d00b77fb3fed588eba8679f6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-helper-explode-class/lib/index.js";
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

exports.default = function (classPath) {
  classPath.assertClass();

  var memoisedExpressions = [];

  function maybeMemoise(path) {
    if (!path.node || path.isPure()) return;

    var uid = classPath.scope.generateDeclaredUidIdentifier();
    memoisedExpressions.push(t.assignmentExpression(\"=\", uid, path.node));
    path.replaceWith(uid);
  }

  function memoiseDecorators(paths) {
    if (!Array.isArray(paths) || !paths.length) return;

    paths = paths.reverse();

    (0, _babelHelperBindifyDecorators2.default)(paths);

    for (var _iterator = paths, _isArray = Array.isArray(_iterator), _i = 0, _iterator = _isArray ? _iterator : (0, _getIterator3.default)(_iterator);;) {
      var _ref;

      if (_isArray) {
        if (_i >= _iterator.length) break;
        _ref = _iterator[_i++];
      } else {
        _i = _iterator.next();
        if (_i.done) break;
        _ref = _i.value;
      }

      var path = _ref;

      maybeMemoise(path);
    }
  }

  maybeMemoise(classPath.get(\"superClass\"));
  memoiseDecorators(classPath.get(\"decorators\"), true);

  var methods = classPath.get(\"body.body\");
  for (var _iterator2 = methods, _isArray2 = Array.isArray(_iterator2), _i2 = 0, _iterator2 = _isArray2 ? _iterator2 : (0, _getIterator3.default)(_iterator2);;) {
    var _ref2;

    if (_isArray2) {
      if (_i2 >= _iterator2.length) break;
      _ref2 = _iterator2[_i2++];
    } else {
      _i2 = _iterator2.next();
      if (_i2.done) break;
      _ref2 = _i2.value;
    }

    var methodPath = _ref2;

    if (methodPath.is(\"computed\")) {
      maybeMemoise(methodPath.get(\"key\"));
    }

    if (methodPath.has(\"decorators\")) {
      memoiseDecorators(classPath.get(\"decorators\"));
    }
  }

  if (memoisedExpressions) {
    classPath.insertBefore(memoisedExpressions.map(function (expr) {
      return t.expressionStatement(expr);
    }));
  }
};

var _babelHelperBindifyDecorators = require(\"babel-helper-bindify-decorators\");

var _babelHelperBindifyDecorators2 = _interopRequireDefault(_babelHelperBindifyDecorators);

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

module.exports = exports[\"default\"];", "node_modules/babel-helper-explode-class/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-helper-explode-class/lib/index.js");
    }
}
