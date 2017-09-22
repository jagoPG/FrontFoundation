<?php

/* node_modules/babel-runtime/helpers/createClass.js */
class __TwigTemplate_a32fa600645503f84c1577a04f55b1e490eed784324bd48b490d3b73e74e7144 extends Twig_Template
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
        $__internal_72d251d84999de7a249d7af10924c907687542583417957dd7d0a21bb1cb603d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72d251d84999de7a249d7af10924c907687542583417957dd7d0a21bb1cb603d->enter($__internal_72d251d84999de7a249d7af10924c907687542583417957dd7d0a21bb1cb603d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/createClass.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

var _defineProperty = require(\"../core-js/object/define-property\");

var _defineProperty2 = _interopRequireDefault(_defineProperty);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = function () {
  function defineProperties(target, props) {
    for (var i = 0; i < props.length; i++) {
      var descriptor = props[i];
      descriptor.enumerable = descriptor.enumerable || false;
      descriptor.configurable = true;
      if (\"value\" in descriptor) descriptor.writable = true;
      (0, _defineProperty2.default)(target, descriptor.key, descriptor);
    }
  }

  return function (Constructor, protoProps, staticProps) {
    if (protoProps) defineProperties(Constructor.prototype, protoProps);
    if (staticProps) defineProperties(Constructor, staticProps);
    return Constructor;
  };
}();";
        
        $__internal_72d251d84999de7a249d7af10924c907687542583417957dd7d0a21bb1cb603d->leave($__internal_72d251d84999de7a249d7af10924c907687542583417957dd7d0a21bb1cb603d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/createClass.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;

var _defineProperty = require(\"../core-js/object/define-property\");

var _defineProperty2 = _interopRequireDefault(_defineProperty);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = function () {
  function defineProperties(target, props) {
    for (var i = 0; i < props.length; i++) {
      var descriptor = props[i];
      descriptor.enumerable = descriptor.enumerable || false;
      descriptor.configurable = true;
      if (\"value\" in descriptor) descriptor.writable = true;
      (0, _defineProperty2.default)(target, descriptor.key, descriptor);
    }
  }

  return function (Constructor, protoProps, staticProps) {
    if (protoProps) defineProperties(Constructor.prototype, protoProps);
    if (staticProps) defineProperties(Constructor, staticProps);
    return Constructor;
  };
}();", "node_modules/babel-runtime/helpers/createClass.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/createClass.js");
    }
}
