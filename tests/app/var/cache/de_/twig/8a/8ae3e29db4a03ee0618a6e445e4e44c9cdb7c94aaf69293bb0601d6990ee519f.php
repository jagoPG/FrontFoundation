<?php

/* node_modules/babel-runtime/helpers/defaults.js */
class __TwigTemplate_5018a0858a9014ef253d3a5e114770baf59a5f603e7dcbe4cda5fbc1041b8b71 extends Twig_Template
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
        $__internal_a826f7441b13b7fd7362634d0c53aab795fe91d4e26ad2bf77aea662d1bdd779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a826f7441b13b7fd7362634d0c53aab795fe91d4e26ad2bf77aea662d1bdd779->enter($__internal_a826f7441b13b7fd7362634d0c53aab795fe91d4e26ad2bf77aea662d1bdd779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/defaults.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

var _defineProperty = require(\"../core-js/object/define-property\");

var _defineProperty2 = _interopRequireDefault(_defineProperty);

var _getOwnPropertyDescriptor = require(\"../core-js/object/get-own-property-descriptor\");

var _getOwnPropertyDescriptor2 = _interopRequireDefault(_getOwnPropertyDescriptor);

var _getOwnPropertyNames = require(\"../core-js/object/get-own-property-names\");

var _getOwnPropertyNames2 = _interopRequireDefault(_getOwnPropertyNames);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = function (obj, defaults) {
  var keys = (0, _getOwnPropertyNames2.default)(defaults);

  for (var i = 0; i < keys.length; i++) {
    var key = keys[i];
    var value = (0, _getOwnPropertyDescriptor2.default)(defaults, key);

    if (value && value.configurable && obj[key] === undefined) {
      (0, _defineProperty2.default)(obj, key, value);
    }
  }

  return obj;
};";
        
        $__internal_a826f7441b13b7fd7362634d0c53aab795fe91d4e26ad2bf77aea662d1bdd779->leave($__internal_a826f7441b13b7fd7362634d0c53aab795fe91d4e26ad2bf77aea662d1bdd779_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/defaults.js";
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

var _getOwnPropertyDescriptor = require(\"../core-js/object/get-own-property-descriptor\");

var _getOwnPropertyDescriptor2 = _interopRequireDefault(_getOwnPropertyDescriptor);

var _getOwnPropertyNames = require(\"../core-js/object/get-own-property-names\");

var _getOwnPropertyNames2 = _interopRequireDefault(_getOwnPropertyNames);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = function (obj, defaults) {
  var keys = (0, _getOwnPropertyNames2.default)(defaults);

  for (var i = 0; i < keys.length; i++) {
    var key = keys[i];
    var value = (0, _getOwnPropertyDescriptor2.default)(defaults, key);

    if (value && value.configurable && obj[key] === undefined) {
      (0, _defineProperty2.default)(obj, key, value);
    }
  }

  return obj;
};", "node_modules/babel-runtime/helpers/defaults.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/defaults.js");
    }
}
