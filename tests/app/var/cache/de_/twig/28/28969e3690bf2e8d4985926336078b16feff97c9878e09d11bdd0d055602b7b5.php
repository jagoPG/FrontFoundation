<?php

/* node_modules/babel-plugin-transform-es2015-classes/lib/loose.js */
class __TwigTemplate_ca3ea222d6c8170fafa47db2765495d554b3842933c7b1540c2f5b5047afb5bc extends Twig_Template
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
        $__internal_80233edcbfb5bc0e6f82344600e145bb9f7b9c4d4047537e3290c109a16c8c8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80233edcbfb5bc0e6f82344600e145bb9f7b9c4d4047537e3290c109a16c8c8e->enter($__internal_80233edcbfb5bc0e6f82344600e145bb9f7b9c4d4047537e3290c109a16c8c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-es2015-classes/lib/loose.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

var _classCallCheck2 = require(\"babel-runtime/helpers/classCallCheck\");

var _classCallCheck3 = _interopRequireDefault(_classCallCheck2);

var _possibleConstructorReturn2 = require(\"babel-runtime/helpers/possibleConstructorReturn\");

var _possibleConstructorReturn3 = _interopRequireDefault(_possibleConstructorReturn2);

var _inherits2 = require(\"babel-runtime/helpers/inherits\");

var _inherits3 = _interopRequireDefault(_inherits2);

var _babelHelperFunctionName = require(\"babel-helper-function-name\");

var _babelHelperFunctionName2 = _interopRequireDefault(_babelHelperFunctionName);

var _vanilla = require(\"./vanilla\");

var _vanilla2 = _interopRequireDefault(_vanilla);

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var LooseClassTransformer = function (_VanillaTransformer) {
  (0, _inherits3.default)(LooseClassTransformer, _VanillaTransformer);

  function LooseClassTransformer() {
    (0, _classCallCheck3.default)(this, LooseClassTransformer);

    var _this = (0, _possibleConstructorReturn3.default)(this, _VanillaTransformer.apply(this, arguments));

    _this.isLoose = true;
    return _this;
  }

  LooseClassTransformer.prototype._processMethod = function _processMethod(node, scope) {
    if (!node.decorators) {

      var classRef = this.classRef;
      if (!node.static) classRef = t.memberExpression(classRef, t.identifier(\"prototype\"));
      var methodName = t.memberExpression(classRef, node.key, node.computed || t.isLiteral(node.key));

      var func = t.functionExpression(null, node.params, node.body, node.generator, node.async);
      func.returnType = node.returnType;
      var key = t.toComputedKey(node, node.key);
      if (t.isStringLiteral(key)) {
        func = (0, _babelHelperFunctionName2.default)({
          node: func,
          id: key,
          scope: scope
        });
      }

      var expr = t.expressionStatement(t.assignmentExpression(\"=\", methodName, func));
      t.inheritsComments(expr, node);
      this.body.push(expr);
      return true;
    }
  };

  return LooseClassTransformer;
}(_vanilla2.default);

exports.default = LooseClassTransformer;
module.exports = exports[\"default\"];";
        
        $__internal_80233edcbfb5bc0e6f82344600e145bb9f7b9c4d4047537e3290c109a16c8c8e->leave($__internal_80233edcbfb5bc0e6f82344600e145bb9f7b9c4d4047537e3290c109a16c8c8e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-es2015-classes/lib/loose.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;

var _classCallCheck2 = require(\"babel-runtime/helpers/classCallCheck\");

var _classCallCheck3 = _interopRequireDefault(_classCallCheck2);

var _possibleConstructorReturn2 = require(\"babel-runtime/helpers/possibleConstructorReturn\");

var _possibleConstructorReturn3 = _interopRequireDefault(_possibleConstructorReturn2);

var _inherits2 = require(\"babel-runtime/helpers/inherits\");

var _inherits3 = _interopRequireDefault(_inherits2);

var _babelHelperFunctionName = require(\"babel-helper-function-name\");

var _babelHelperFunctionName2 = _interopRequireDefault(_babelHelperFunctionName);

var _vanilla = require(\"./vanilla\");

var _vanilla2 = _interopRequireDefault(_vanilla);

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var LooseClassTransformer = function (_VanillaTransformer) {
  (0, _inherits3.default)(LooseClassTransformer, _VanillaTransformer);

  function LooseClassTransformer() {
    (0, _classCallCheck3.default)(this, LooseClassTransformer);

    var _this = (0, _possibleConstructorReturn3.default)(this, _VanillaTransformer.apply(this, arguments));

    _this.isLoose = true;
    return _this;
  }

  LooseClassTransformer.prototype._processMethod = function _processMethod(node, scope) {
    if (!node.decorators) {

      var classRef = this.classRef;
      if (!node.static) classRef = t.memberExpression(classRef, t.identifier(\"prototype\"));
      var methodName = t.memberExpression(classRef, node.key, node.computed || t.isLiteral(node.key));

      var func = t.functionExpression(null, node.params, node.body, node.generator, node.async);
      func.returnType = node.returnType;
      var key = t.toComputedKey(node, node.key);
      if (t.isStringLiteral(key)) {
        func = (0, _babelHelperFunctionName2.default)({
          node: func,
          id: key,
          scope: scope
        });
      }

      var expr = t.expressionStatement(t.assignmentExpression(\"=\", methodName, func));
      t.inheritsComments(expr, node);
      this.body.push(expr);
      return true;
    }
  };

  return LooseClassTransformer;
}(_vanilla2.default);

exports.default = LooseClassTransformer;
module.exports = exports[\"default\"];", "node_modules/babel-plugin-transform-es2015-classes/lib/loose.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-es2015-classes/lib/loose.js");
    }
}
