<?php

/* node_modules/babel-runtime/helpers/asyncIterator.js */
class __TwigTemplate_b4662385f0e6e3ee57de2be4fac7e1329669d953c691c01113ed0e7f9671571f extends Twig_Template
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
        $__internal_e076aa416666d5b9bc724700455356a936dd678b14bbafd5f7b0b7cacacac241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e076aa416666d5b9bc724700455356a936dd678b14bbafd5f7b0b7cacacac241->enter($__internal_e076aa416666d5b9bc724700455356a936dd678b14bbafd5f7b0b7cacacac241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/asyncIterator.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

var _getIterator2 = require(\"../core-js/get-iterator\");

var _getIterator3 = _interopRequireDefault(_getIterator2);

var _iterator = require(\"../core-js/symbol/iterator\");

var _iterator2 = _interopRequireDefault(_iterator);

var _symbol = require(\"../core-js/symbol\");

var _symbol2 = _interopRequireDefault(_symbol);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = function (iterable) {
  if (typeof _symbol2.default === \"function\") {
    if (_symbol2.default.asyncIterator) {
      var method = iterable[_symbol2.default.asyncIterator];
      if (method != null) return method.call(iterable);
    }

    if (_iterator2.default) {
      return (0, _getIterator3.default)(iterable);
    }
  }

  throw new TypeError(\"Object is not async iterable\");
};";
        
        $__internal_e076aa416666d5b9bc724700455356a936dd678b14bbafd5f7b0b7cacacac241->leave($__internal_e076aa416666d5b9bc724700455356a936dd678b14bbafd5f7b0b7cacacac241_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/asyncIterator.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;

var _getIterator2 = require(\"../core-js/get-iterator\");

var _getIterator3 = _interopRequireDefault(_getIterator2);

var _iterator = require(\"../core-js/symbol/iterator\");

var _iterator2 = _interopRequireDefault(_iterator);

var _symbol = require(\"../core-js/symbol\");

var _symbol2 = _interopRequireDefault(_symbol);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = function (iterable) {
  if (typeof _symbol2.default === \"function\") {
    if (_symbol2.default.asyncIterator) {
      var method = iterable[_symbol2.default.asyncIterator];
      if (method != null) return method.call(iterable);
    }

    if (_iterator2.default) {
      return (0, _getIterator3.default)(iterable);
    }
  }

  throw new TypeError(\"Object is not async iterable\");
};", "node_modules/babel-runtime/helpers/asyncIterator.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/asyncIterator.js");
    }
}
