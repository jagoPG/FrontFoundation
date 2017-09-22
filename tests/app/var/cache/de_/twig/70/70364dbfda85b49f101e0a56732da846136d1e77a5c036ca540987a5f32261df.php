<?php

/* node_modules/babel-runtime/helpers/instanceof.js */
class __TwigTemplate_68357d913f406f1b87e85989da423d10b32fcd0e3a38f4498a8b6fc11ce248a5 extends Twig_Template
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
        $__internal_e644c7d4e3fe62f746a9fcebb001d772519eb0293a923e550dea16057fd728dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e644c7d4e3fe62f746a9fcebb001d772519eb0293a923e550dea16057fd728dd->enter($__internal_e644c7d4e3fe62f746a9fcebb001d772519eb0293a923e550dea16057fd728dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/instanceof.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

var _hasInstance = require(\"../core-js/symbol/has-instance\");

var _hasInstance2 = _interopRequireDefault(_hasInstance);

var _symbol = require(\"../core-js/symbol\");

var _symbol2 = _interopRequireDefault(_symbol);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = function (left, right) {
  if (right != null && typeof _symbol2.default !== \"undefined\" && right[_hasInstance2.default]) {
    return right[_hasInstance2.default](left);
  } else {
    return left instanceof right;
  }
};";
        
        $__internal_e644c7d4e3fe62f746a9fcebb001d772519eb0293a923e550dea16057fd728dd->leave($__internal_e644c7d4e3fe62f746a9fcebb001d772519eb0293a923e550dea16057fd728dd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/instanceof.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;

var _hasInstance = require(\"../core-js/symbol/has-instance\");

var _hasInstance2 = _interopRequireDefault(_hasInstance);

var _symbol = require(\"../core-js/symbol\");

var _symbol2 = _interopRequireDefault(_symbol);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = function (left, right) {
  if (right != null && typeof _symbol2.default !== \"undefined\" && right[_hasInstance2.default]) {
    return right[_hasInstance2.default](left);
  } else {
    return left instanceof right;
  }
};", "node_modules/babel-runtime/helpers/instanceof.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/instanceof.js");
    }
}
