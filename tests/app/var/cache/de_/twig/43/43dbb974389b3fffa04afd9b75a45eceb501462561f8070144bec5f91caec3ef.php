<?php

/* node_modules/babel-runtime/helpers/toArray.js */
class __TwigTemplate_4d363e9271a227b93e9840eebd5dc7c3504d6c705b2dff67ef4f2c5061693c2f extends Twig_Template
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
        $__internal_73f797f9f09520f3f3175ebc6d71f71bd80d409a643bc19557cc3f36729cca2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73f797f9f09520f3f3175ebc6d71f71bd80d409a643bc19557cc3f36729cca2b->enter($__internal_73f797f9f09520f3f3175ebc6d71f71bd80d409a643bc19557cc3f36729cca2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/toArray.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

var _from = require(\"../core-js/array/from\");

var _from2 = _interopRequireDefault(_from);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = function (arr) {
  return Array.isArray(arr) ? arr : (0, _from2.default)(arr);
};";
        
        $__internal_73f797f9f09520f3f3175ebc6d71f71bd80d409a643bc19557cc3f36729cca2b->leave($__internal_73f797f9f09520f3f3175ebc6d71f71bd80d409a643bc19557cc3f36729cca2b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/toArray.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;

var _from = require(\"../core-js/array/from\");

var _from2 = _interopRequireDefault(_from);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = function (arr) {
  return Array.isArray(arr) ? arr : (0, _from2.default)(arr);
};", "node_modules/babel-runtime/helpers/toArray.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/toArray.js");
    }
}
