<?php

/* node_modules/async/internal/wrapAsync.js */
class __TwigTemplate_79cdb8386a7a50e93f055d215cdba60b29be219008115158e406ecc77b380635 extends Twig_Template
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
        $__internal_bab0c23c74eca16ebd28a8f721074b7f281908296ccc677d73cd817345d135b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bab0c23c74eca16ebd28a8f721074b7f281908296ccc677d73cd817345d135b9->enter($__internal_bab0c23c74eca16ebd28a8f721074b7f281908296ccc677d73cd817345d135b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/internal/wrapAsync.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
    value: true
});
exports.isAsync = undefined;

var _asyncify = require('../asyncify');

var _asyncify2 = _interopRequireDefault(_asyncify);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var supportsSymbol = typeof Symbol === 'function';

function isAsync(fn) {
    return supportsSymbol && fn[Symbol.toStringTag] === 'AsyncFunction';
}

function wrapAsync(asyncFn) {
    return isAsync(asyncFn) ? (0, _asyncify2.default)(asyncFn) : asyncFn;
}

exports.default = wrapAsync;
exports.isAsync = isAsync;";
        
        $__internal_bab0c23c74eca16ebd28a8f721074b7f281908296ccc677d73cd817345d135b9->leave($__internal_bab0c23c74eca16ebd28a8f721074b7f281908296ccc677d73cd817345d135b9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/internal/wrapAsync.js";
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
exports.isAsync = undefined;

var _asyncify = require('../asyncify');

var _asyncify2 = _interopRequireDefault(_asyncify);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var supportsSymbol = typeof Symbol === 'function';

function isAsync(fn) {
    return supportsSymbol && fn[Symbol.toStringTag] === 'AsyncFunction';
}

function wrapAsync(asyncFn) {
    return isAsync(asyncFn) ? (0, _asyncify2.default)(asyncFn) : asyncFn;
}

exports.default = wrapAsync;
exports.isAsync = isAsync;", "node_modules/async/internal/wrapAsync.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/internal/wrapAsync.js");
    }
}
