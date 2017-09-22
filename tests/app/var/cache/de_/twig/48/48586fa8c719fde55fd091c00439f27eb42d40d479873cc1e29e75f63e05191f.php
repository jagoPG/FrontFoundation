<?php

/* node_modules/babel-runtime/helpers/possibleConstructorReturn.js */
class __TwigTemplate_4836580e48d9e31b31b1c392cfe7e2ed60bedfd7c1b65c977465c3cab5b7e3c3 extends Twig_Template
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
        $__internal_35e007cd19d19e24cd413aae367164097f9a8d28e3e9bb618c21495656cd7055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35e007cd19d19e24cd413aae367164097f9a8d28e3e9bb618c21495656cd7055->enter($__internal_35e007cd19d19e24cd413aae367164097f9a8d28e3e9bb618c21495656cd7055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/possibleConstructorReturn.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

var _typeof2 = require(\"../helpers/typeof\");

var _typeof3 = _interopRequireDefault(_typeof2);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = function (self, call) {
  if (!self) {
    throw new ReferenceError(\"this hasn't been initialised - super() hasn't been called\");
  }

  return call && ((typeof call === \"undefined\" ? \"undefined\" : (0, _typeof3.default)(call)) === \"object\" || typeof call === \"function\") ? call : self;
};";
        
        $__internal_35e007cd19d19e24cd413aae367164097f9a8d28e3e9bb618c21495656cd7055->leave($__internal_35e007cd19d19e24cd413aae367164097f9a8d28e3e9bb618c21495656cd7055_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/possibleConstructorReturn.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;

var _typeof2 = require(\"../helpers/typeof\");

var _typeof3 = _interopRequireDefault(_typeof2);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = function (self, call) {
  if (!self) {
    throw new ReferenceError(\"this hasn't been initialised - super() hasn't been called\");
  }

  return call && ((typeof call === \"undefined\" ? \"undefined\" : (0, _typeof3.default)(call)) === \"object\" || typeof call === \"function\") ? call : self;
};", "node_modules/babel-runtime/helpers/possibleConstructorReturn.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/possibleConstructorReturn.js");
    }
}
