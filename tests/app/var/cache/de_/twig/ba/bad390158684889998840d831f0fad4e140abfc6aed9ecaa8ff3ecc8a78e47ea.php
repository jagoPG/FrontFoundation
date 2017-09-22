<?php

/* node_modules/babel-runtime/helpers/slicedToArrayLoose.js */
class __TwigTemplate_9d96db90206854e0cd363a49b97fa21d09b53a4e7f7c798ad3ee32ed9c094a22 extends Twig_Template
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
        $__internal_360195a1417667cf5b07aae2f88b4b4f57797347faebeaddab884f58e6514a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_360195a1417667cf5b07aae2f88b4b4f57797347faebeaddab884f58e6514a59->enter($__internal_360195a1417667cf5b07aae2f88b4b4f57797347faebeaddab884f58e6514a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/slicedToArrayLoose.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

var _getIterator2 = require(\"../core-js/get-iterator\");

var _getIterator3 = _interopRequireDefault(_getIterator2);

var _isIterable2 = require(\"../core-js/is-iterable\");

var _isIterable3 = _interopRequireDefault(_isIterable2);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = function (arr, i) {
  if (Array.isArray(arr)) {
    return arr;
  } else if ((0, _isIterable3.default)(Object(arr))) {
    var _arr = [];

    for (var _iterator = (0, _getIterator3.default)(arr), _step; !(_step = _iterator.next()).done;) {
      _arr.push(_step.value);

      if (i && _arr.length === i) break;
    }

    return _arr;
  } else {
    throw new TypeError(\"Invalid attempt to destructure non-iterable instance\");
  }
};";
        
        $__internal_360195a1417667cf5b07aae2f88b4b4f57797347faebeaddab884f58e6514a59->leave($__internal_360195a1417667cf5b07aae2f88b4b4f57797347faebeaddab884f58e6514a59_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/slicedToArrayLoose.js";
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

var _isIterable2 = require(\"../core-js/is-iterable\");

var _isIterable3 = _interopRequireDefault(_isIterable2);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = function (arr, i) {
  if (Array.isArray(arr)) {
    return arr;
  } else if ((0, _isIterable3.default)(Object(arr))) {
    var _arr = [];

    for (var _iterator = (0, _getIterator3.default)(arr), _step; !(_step = _iterator.next()).done;) {
      _arr.push(_step.value);

      if (i && _arr.length === i) break;
    }

    return _arr;
  } else {
    throw new TypeError(\"Invalid attempt to destructure non-iterable instance\");
  }
};", "node_modules/babel-runtime/helpers/slicedToArrayLoose.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/slicedToArrayLoose.js");
    }
}
