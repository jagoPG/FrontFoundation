<?php

/* node_modules/acorn-dynamic-import/lib/index.js */
class __TwigTemplate_c63bf76f37f2d3f2b0c4eae89cbe408b97b29491748895857226f8af226a3fde extends Twig_Template
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
        $__internal_8f1c6a158f39dfa0c4b787bf6a42039b111e74b78416d7d2f528371ef498c464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f1c6a158f39dfa0c4b787bf6a42039b111e74b78416d7d2f528371ef498c464->enter($__internal_8f1c6a158f39dfa0c4b787bf6a42039b111e74b78416d7d2f528371ef498c464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/acorn-dynamic-import/lib/index.js"));

        // line 1
        echo "Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _acorn = require('acorn');

var acorn = _interopRequireWildcard(_acorn);

var _inject = require('./inject');

var _inject2 = _interopRequireDefault(_inject);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { 'default': obj }; }

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj['default'] = obj; return newObj; } }

exports['default'] = (0, _inject2['default'])(acorn);";
        
        $__internal_8f1c6a158f39dfa0c4b787bf6a42039b111e74b78416d7d2f528371ef498c464->leave($__internal_8f1c6a158f39dfa0c4b787bf6a42039b111e74b78416d7d2f528371ef498c464_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/acorn-dynamic-import/lib/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _acorn = require('acorn');

var acorn = _interopRequireWildcard(_acorn);

var _inject = require('./inject');

var _inject2 = _interopRequireDefault(_inject);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { 'default': obj }; }

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj['default'] = obj; return newObj; } }

exports['default'] = (0, _inject2['default'])(acorn);", "node_modules/acorn-dynamic-import/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/acorn-dynamic-import/lib/index.js");
    }
}
