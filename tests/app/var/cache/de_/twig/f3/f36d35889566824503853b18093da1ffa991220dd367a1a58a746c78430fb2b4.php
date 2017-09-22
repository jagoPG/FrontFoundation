<?php

/* node_modules/async/internal/initialParams.js */
class __TwigTemplate_a7c6913027d3bbf30f2cc83e749fd3a52c44634d4aca0c6be4d29c5db5995262 extends Twig_Template
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
        $__internal_eef91192e49bafc2ece9c1c182de2cb9db588f77ae21e1d0798208e7a135b2ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eef91192e49bafc2ece9c1c182de2cb9db588f77ae21e1d0798208e7a135b2ae->enter($__internal_eef91192e49bafc2ece9c1c182de2cb9db588f77ae21e1d0798208e7a135b2ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/internal/initialParams.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
    value: true
});

exports.default = function (fn) {
    return function () /*...args, callback*/{
        var args = (0, _slice2.default)(arguments);
        var callback = args.pop();
        fn.call(this, args, callback);
    };
};

var _slice = require('./slice');

var _slice2 = _interopRequireDefault(_slice);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

module.exports = exports['default'];";
        
        $__internal_eef91192e49bafc2ece9c1c182de2cb9db588f77ae21e1d0798208e7a135b2ae->leave($__internal_eef91192e49bafc2ece9c1c182de2cb9db588f77ae21e1d0798208e7a135b2ae_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/internal/initialParams.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

Object.defineProperty(exports, \"__esModule\", {
    value: true
});

exports.default = function (fn) {
    return function () /*...args, callback*/{
        var args = (0, _slice2.default)(arguments);
        var callback = args.pop();
        fn.call(this, args, callback);
    };
};

var _slice = require('./slice');

var _slice2 = _interopRequireDefault(_slice);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

module.exports = exports['default'];", "node_modules/async/internal/initialParams.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/internal/initialParams.js");
    }
}
