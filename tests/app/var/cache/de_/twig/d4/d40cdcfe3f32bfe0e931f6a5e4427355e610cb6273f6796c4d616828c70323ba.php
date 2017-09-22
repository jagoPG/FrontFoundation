<?php

/* node_modules/babel-traverse/lib/cache.js */
class __TwigTemplate_e4df762d7b8a9346d26e8ae928530bf54dd30ce0c2eba1bc8218925e200626fb extends Twig_Template
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
        $__internal_1cb224cb638d3ae1be45ac7ae8189dde1078b1ffc1aa59cf532c45c1e20b81fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cb224cb638d3ae1be45ac7ae8189dde1078b1ffc1aa59cf532c45c1e20b81fd->enter($__internal_1cb224cb638d3ae1be45ac7ae8189dde1078b1ffc1aa59cf532c45c1e20b81fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-traverse/lib/cache.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;
exports.scope = exports.path = undefined;

var _weakMap = require(\"babel-runtime/core-js/weak-map\");

var _weakMap2 = _interopRequireDefault(_weakMap);

exports.clear = clear;
exports.clearPath = clearPath;
exports.clearScope = clearScope;

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var path = exports.path = new _weakMap2.default();
var scope = exports.scope = new _weakMap2.default();

function clear() {
  clearPath();
  clearScope();
}

function clearPath() {
  exports.path = path = new _weakMap2.default();
}

function clearScope() {
  exports.scope = scope = new _weakMap2.default();
}";
        
        $__internal_1cb224cb638d3ae1be45ac7ae8189dde1078b1ffc1aa59cf532c45c1e20b81fd->leave($__internal_1cb224cb638d3ae1be45ac7ae8189dde1078b1ffc1aa59cf532c45c1e20b81fd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-traverse/lib/cache.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;
exports.scope = exports.path = undefined;

var _weakMap = require(\"babel-runtime/core-js/weak-map\");

var _weakMap2 = _interopRequireDefault(_weakMap);

exports.clear = clear;
exports.clearPath = clearPath;
exports.clearScope = clearScope;

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var path = exports.path = new _weakMap2.default();
var scope = exports.scope = new _weakMap2.default();

function clear() {
  clearPath();
  clearScope();
}

function clearPath() {
  exports.path = path = new _weakMap2.default();
}

function clearScope() {
  exports.scope = scope = new _weakMap2.default();
}", "node_modules/babel-traverse/lib/cache.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-traverse/lib/cache.js");
    }
}
