<?php

/* node_modules/babel-runtime/helpers/typeof.js */
class __TwigTemplate_dc08b122d0265f9f6ddd35839deb8e3cbeaa7d7e7420a511710d469fe7a37066 extends Twig_Template
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
        $__internal_51652d5af5cd41444d4d3e4442e41cc2355eb6d779858d323680bb0486dcc2b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51652d5af5cd41444d4d3e4442e41cc2355eb6d779858d323680bb0486dcc2b6->enter($__internal_51652d5af5cd41444d4d3e4442e41cc2355eb6d779858d323680bb0486dcc2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/typeof.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

var _iterator = require(\"../core-js/symbol/iterator\");

var _iterator2 = _interopRequireDefault(_iterator);

var _symbol = require(\"../core-js/symbol\");

var _symbol2 = _interopRequireDefault(_symbol);

var _typeof = typeof _symbol2.default === \"function\" && typeof _iterator2.default === \"symbol\" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof _symbol2.default === \"function\" && obj.constructor === _symbol2.default && obj !== _symbol2.default.prototype ? \"symbol\" : typeof obj; };

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = typeof _symbol2.default === \"function\" && _typeof(_iterator2.default) === \"symbol\" ? function (obj) {
  return typeof obj === \"undefined\" ? \"undefined\" : _typeof(obj);
} : function (obj) {
  return obj && typeof _symbol2.default === \"function\" && obj.constructor === _symbol2.default && obj !== _symbol2.default.prototype ? \"symbol\" : typeof obj === \"undefined\" ? \"undefined\" : _typeof(obj);
};";
        
        $__internal_51652d5af5cd41444d4d3e4442e41cc2355eb6d779858d323680bb0486dcc2b6->leave($__internal_51652d5af5cd41444d4d3e4442e41cc2355eb6d779858d323680bb0486dcc2b6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/typeof.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;

var _iterator = require(\"../core-js/symbol/iterator\");

var _iterator2 = _interopRequireDefault(_iterator);

var _symbol = require(\"../core-js/symbol\");

var _symbol2 = _interopRequireDefault(_symbol);

var _typeof = typeof _symbol2.default === \"function\" && typeof _iterator2.default === \"symbol\" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof _symbol2.default === \"function\" && obj.constructor === _symbol2.default && obj !== _symbol2.default.prototype ? \"symbol\" : typeof obj; };

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = typeof _symbol2.default === \"function\" && _typeof(_iterator2.default) === \"symbol\" ? function (obj) {
  return typeof obj === \"undefined\" ? \"undefined\" : _typeof(obj);
} : function (obj) {
  return obj && typeof _symbol2.default === \"function\" && obj.constructor === _symbol2.default && obj !== _symbol2.default.prototype ? \"symbol\" : typeof obj === \"undefined\" ? \"undefined\" : _typeof(obj);
};", "node_modules/babel-runtime/helpers/typeof.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/typeof.js");
    }
}
