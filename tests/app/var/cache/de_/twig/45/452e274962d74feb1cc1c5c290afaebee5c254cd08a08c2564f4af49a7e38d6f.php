<?php

/* node_modules/babel-plugin-transform-es2015-classes/lib/lib/memoise-decorators.js */
class __TwigTemplate_8e106dbcd0e660f1a6ed4d39d213bb43306dfbcd8693797b440b6fd95378dd36 extends Twig_Template
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
        $__internal_275771dbe4b6b153cc28212c9f3182c223dc53662cac99f26ce229a9df15ca1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_275771dbe4b6b153cc28212c9f3182c223dc53662cac99f26ce229a9df15ca1e->enter($__internal_275771dbe4b6b153cc28212c9f3182c223dc53662cac99f26ce229a9df15ca1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-es2015-classes/lib/lib/memoise-decorators.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

var _getIterator2 = require(\"babel-runtime/core-js/get-iterator\");

var _getIterator3 = _interopRequireDefault(_getIterator2);

exports.default = function (decorators, scope) {
  for (var _iterator = decorators, _isArray = Array.isArray(_iterator), _i = 0, _iterator = _isArray ? _iterator : (0, _getIterator3.default)(_iterator);;) {
    var _ref;

    if (_isArray) {
      if (_i >= _iterator.length) break;
      _ref = _iterator[_i++];
    } else {
      _i = _iterator.next();
      if (_i.done) break;
      _ref = _i.value;
    }

    var decorator = _ref;

    var expression = decorator.expression;
    if (!t.isMemberExpression(expression)) continue;

    var temp = scope.maybeGenerateMemoised(expression.object);
    var ref = void 0;

    var nodes = [];

    if (temp) {
      ref = temp;
      nodes.push(t.assignmentExpression(\"=\", temp, expression.object));
    } else {
      ref = expression.object;
    }

    nodes.push(t.callExpression(t.memberExpression(t.memberExpression(ref, expression.property, expression.computed), t.identifier(\"bind\")), [ref]));

    if (nodes.length === 1) {
      decorator.expression = nodes[0];
    } else {
      decorator.expression = t.sequenceExpression(nodes);
    }
  }

  return decorators;
};

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

module.exports = exports[\"default\"];";
        
        $__internal_275771dbe4b6b153cc28212c9f3182c223dc53662cac99f26ce229a9df15ca1e->leave($__internal_275771dbe4b6b153cc28212c9f3182c223dc53662cac99f26ce229a9df15ca1e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-es2015-classes/lib/lib/memoise-decorators.js";
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

exports.default = function (decorators, scope) {
  for (var _iterator = decorators, _isArray = Array.isArray(_iterator), _i = 0, _iterator = _isArray ? _iterator : (0, _getIterator3.default)(_iterator);;) {
    var _ref;

    if (_isArray) {
      if (_i >= _iterator.length) break;
      _ref = _iterator[_i++];
    } else {
      _i = _iterator.next();
      if (_i.done) break;
      _ref = _i.value;
    }

    var decorator = _ref;

    var expression = decorator.expression;
    if (!t.isMemberExpression(expression)) continue;

    var temp = scope.maybeGenerateMemoised(expression.object);
    var ref = void 0;

    var nodes = [];

    if (temp) {
      ref = temp;
      nodes.push(t.assignmentExpression(\"=\", temp, expression.object));
    } else {
      ref = expression.object;
    }

    nodes.push(t.callExpression(t.memberExpression(t.memberExpression(ref, expression.property, expression.computed), t.identifier(\"bind\")), [ref]));

    if (nodes.length === 1) {
      decorator.expression = nodes[0];
    } else {
      decorator.expression = t.sequenceExpression(nodes);
    }
  }

  return decorators;
};

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

module.exports = exports[\"default\"];", "node_modules/babel-plugin-transform-es2015-classes/lib/lib/memoise-decorators.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-es2015-classes/lib/lib/memoise-decorators.js");
    }
}
