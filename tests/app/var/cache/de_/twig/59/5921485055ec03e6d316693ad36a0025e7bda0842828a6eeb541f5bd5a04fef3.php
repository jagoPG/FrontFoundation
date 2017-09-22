<?php

/* node_modules/async/internal/applyEach.js */
class __TwigTemplate_a9fbfcc28eebbb387331d872365981649441870138ce5e857308ef8521d8948a extends Twig_Template
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
        $__internal_a75832e8e0282e7c0a150a9279fbd70aa2503e43f1352ecaba486dc4a2a1e404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a75832e8e0282e7c0a150a9279fbd70aa2503e43f1352ecaba486dc4a2a1e404->enter($__internal_a75832e8e0282e7c0a150a9279fbd70aa2503e43f1352ecaba486dc4a2a1e404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/internal/applyEach.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
    value: true
});
exports.default = applyEach;

var _slice = require('./slice');

var _slice2 = _interopRequireDefault(_slice);

var _initialParams = require('./initialParams');

var _initialParams2 = _interopRequireDefault(_initialParams);

var _wrapAsync = require('./wrapAsync');

var _wrapAsync2 = _interopRequireDefault(_wrapAsync);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function applyEach(eachfn) {
    return function (fns /*, ...args*/) {
        var args = (0, _slice2.default)(arguments, 1);
        var go = (0, _initialParams2.default)(function (args, callback) {
            var that = this;
            return eachfn(fns, function (fn, cb) {
                (0, _wrapAsync2.default)(fn).apply(that, args.concat(cb));
            }, callback);
        });
        if (args.length) {
            return go.apply(this, args);
        } else {
            return go;
        }
    };
}
module.exports = exports['default'];";
        
        $__internal_a75832e8e0282e7c0a150a9279fbd70aa2503e43f1352ecaba486dc4a2a1e404->leave($__internal_a75832e8e0282e7c0a150a9279fbd70aa2503e43f1352ecaba486dc4a2a1e404_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/internal/applyEach.js";
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
exports.default = applyEach;

var _slice = require('./slice');

var _slice2 = _interopRequireDefault(_slice);

var _initialParams = require('./initialParams');

var _initialParams2 = _interopRequireDefault(_initialParams);

var _wrapAsync = require('./wrapAsync');

var _wrapAsync2 = _interopRequireDefault(_wrapAsync);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function applyEach(eachfn) {
    return function (fns /*, ...args*/) {
        var args = (0, _slice2.default)(arguments, 1);
        var go = (0, _initialParams2.default)(function (args, callback) {
            var that = this;
            return eachfn(fns, function (fn, cb) {
                (0, _wrapAsync2.default)(fn).apply(that, args.concat(cb));
            }, callback);
        });
        if (args.length) {
            return go.apply(this, args);
        } else {
            return go;
        }
    };
}
module.exports = exports['default'];", "node_modules/async/internal/applyEach.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/internal/applyEach.js");
    }
}
