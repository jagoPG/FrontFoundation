<?php

/* node_modules/babel-helper-bindify-decorators/lib/index.js */
class __TwigTemplate_e81da146e2398968bbae2ac1ca140c6b23cb2c04aaaf568a7cb9619f9fd7bbe3 extends Twig_Template
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
        $__internal_21915b8fbf9e01356c3d6cb12faf431412241a72830d3db6d51c53b5e82ec83c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21915b8fbf9e01356c3d6cb12faf431412241a72830d3db6d51c53b5e82ec83c->enter($__internal_21915b8fbf9e01356c3d6cb12faf431412241a72830d3db6d51c53b5e82ec83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-helper-bindify-decorators/lib/index.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

var _getIterator2 = require(\"babel-runtime/core-js/get-iterator\");

var _getIterator3 = _interopRequireDefault(_getIterator2);

exports.default = bindifyDecorators;

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function bindifyDecorators(decorators) {
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

    var decoratorPath = _ref;

    var decorator = decoratorPath.node;
    var expression = decorator.expression;
    if (!t.isMemberExpression(expression)) continue;

    var temp = decoratorPath.scope.maybeGenerateMemoised(expression.object);
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
}
module.exports = exports[\"default\"];";
        
        $__internal_21915b8fbf9e01356c3d6cb12faf431412241a72830d3db6d51c53b5e82ec83c->leave($__internal_21915b8fbf9e01356c3d6cb12faf431412241a72830d3db6d51c53b5e82ec83c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-helper-bindify-decorators/lib/index.js";
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

exports.default = bindifyDecorators;

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function bindifyDecorators(decorators) {
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

    var decoratorPath = _ref;

    var decorator = decoratorPath.node;
    var expression = decorator.expression;
    if (!t.isMemberExpression(expression)) continue;

    var temp = decoratorPath.scope.maybeGenerateMemoised(expression.object);
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
}
module.exports = exports[\"default\"];", "node_modules/babel-helper-bindify-decorators/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-helper-bindify-decorators/lib/index.js");
    }
}
