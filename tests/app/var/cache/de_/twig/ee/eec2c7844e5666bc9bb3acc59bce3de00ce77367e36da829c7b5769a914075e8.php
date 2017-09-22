<?php

/* node_modules/babel-runtime/helpers/slicedToArray.js */
class __TwigTemplate_13839e77744a53c37f7970d181409599b9d50a3a2c43c5cf86673f8fa4dd5e54 extends Twig_Template
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
        $__internal_608d3ad00bafc68c1bc51a1bd52232439c3482d6d398d81c1b332e9219f6cc30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_608d3ad00bafc68c1bc51a1bd52232439c3482d6d398d81c1b332e9219f6cc30->enter($__internal_608d3ad00bafc68c1bc51a1bd52232439c3482d6d398d81c1b332e9219f6cc30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/slicedToArray.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

var _isIterable2 = require(\"../core-js/is-iterable\");

var _isIterable3 = _interopRequireDefault(_isIterable2);

var _getIterator2 = require(\"../core-js/get-iterator\");

var _getIterator3 = _interopRequireDefault(_getIterator2);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = function () {
  function sliceIterator(arr, i) {
    var _arr = [];
    var _n = true;
    var _d = false;
    var _e = undefined;

    try {
      for (var _i = (0, _getIterator3.default)(arr), _s; !(_n = (_s = _i.next()).done); _n = true) {
        _arr.push(_s.value);

        if (i && _arr.length === i) break;
      }
    } catch (err) {
      _d = true;
      _e = err;
    } finally {
      try {
        if (!_n && _i[\"return\"]) _i[\"return\"]();
      } finally {
        if (_d) throw _e;
      }
    }

    return _arr;
  }

  return function (arr, i) {
    if (Array.isArray(arr)) {
      return arr;
    } else if ((0, _isIterable3.default)(Object(arr))) {
      return sliceIterator(arr, i);
    } else {
      throw new TypeError(\"Invalid attempt to destructure non-iterable instance\");
    }
  };
}();";
        
        $__internal_608d3ad00bafc68c1bc51a1bd52232439c3482d6d398d81c1b332e9219f6cc30->leave($__internal_608d3ad00bafc68c1bc51a1bd52232439c3482d6d398d81c1b332e9219f6cc30_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/slicedToArray.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;

var _isIterable2 = require(\"../core-js/is-iterable\");

var _isIterable3 = _interopRequireDefault(_isIterable2);

var _getIterator2 = require(\"../core-js/get-iterator\");

var _getIterator3 = _interopRequireDefault(_getIterator2);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = function () {
  function sliceIterator(arr, i) {
    var _arr = [];
    var _n = true;
    var _d = false;
    var _e = undefined;

    try {
      for (var _i = (0, _getIterator3.default)(arr), _s; !(_n = (_s = _i.next()).done); _n = true) {
        _arr.push(_s.value);

        if (i && _arr.length === i) break;
      }
    } catch (err) {
      _d = true;
      _e = err;
    } finally {
      try {
        if (!_n && _i[\"return\"]) _i[\"return\"]();
      } finally {
        if (_d) throw _e;
      }
    }

    return _arr;
  }

  return function (arr, i) {
    if (Array.isArray(arr)) {
      return arr;
    } else if ((0, _isIterable3.default)(Object(arr))) {
      return sliceIterator(arr, i);
    } else {
      throw new TypeError(\"Invalid attempt to destructure non-iterable instance\");
    }
  };
}();", "node_modules/babel-runtime/helpers/slicedToArray.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/slicedToArray.js");
    }
}
