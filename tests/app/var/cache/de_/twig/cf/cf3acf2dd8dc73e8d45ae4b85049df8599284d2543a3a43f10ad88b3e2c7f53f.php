<?php

/* node_modules/babel-runtime/helpers/defineEnumerableProperties.js */
class __TwigTemplate_4bb4254023cb4b4ee2dcb12581aad7ef970a51ac431b2a727bb47ecc37f299f9 extends Twig_Template
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
        $__internal_9f03503ff8f12c9a88ecc11f885b32f3f570af22e051f56ea71ca9b2784eeb00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f03503ff8f12c9a88ecc11f885b32f3f570af22e051f56ea71ca9b2784eeb00->enter($__internal_9f03503ff8f12c9a88ecc11f885b32f3f570af22e051f56ea71ca9b2784eeb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/defineEnumerableProperties.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

var _defineProperty = require(\"../core-js/object/define-property\");

var _defineProperty2 = _interopRequireDefault(_defineProperty);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = function (obj, descs) {
  for (var key in descs) {
    var desc = descs[key];
    desc.configurable = desc.enumerable = true;
    if (\"value\" in desc) desc.writable = true;
    (0, _defineProperty2.default)(obj, key, desc);
  }

  return obj;
};";
        
        $__internal_9f03503ff8f12c9a88ecc11f885b32f3f570af22e051f56ea71ca9b2784eeb00->leave($__internal_9f03503ff8f12c9a88ecc11f885b32f3f570af22e051f56ea71ca9b2784eeb00_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/defineEnumerableProperties.js";
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

exports.default = function (obj, descs) {
  for (var key in descs) {
    var desc = descs[key];
    desc.configurable = desc.enumerable = true;
    if (\"value\" in desc) desc.writable = true;
    (0, _defineProperty2.default)(obj, key, desc);
  }

  return obj;
};", "node_modules/babel-runtime/helpers/defineEnumerableProperties.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/defineEnumerableProperties.js");
    }
}
