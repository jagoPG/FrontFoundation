<?php

/* node_modules/async/internal/setImmediate.js */
class __TwigTemplate_83464fd701ecbc5960555153b13d3ea505373fa62acb75c5511d86769383f061 extends Twig_Template
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
        $__internal_e5a7a86598f80dfa2a816508cc8e8984a3acf907e6db3324157060fc77b3a6e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5a7a86598f80dfa2a816508cc8e8984a3acf907e6db3324157060fc77b3a6e5->enter($__internal_e5a7a86598f80dfa2a816508cc8e8984a3acf907e6db3324157060fc77b3a6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/internal/setImmediate.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
    value: true
});
exports.hasNextTick = exports.hasSetImmediate = undefined;
exports.fallback = fallback;
exports.wrap = wrap;

var _slice = require('./slice');

var _slice2 = _interopRequireDefault(_slice);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var hasSetImmediate = exports.hasSetImmediate = typeof setImmediate === 'function' && setImmediate;
var hasNextTick = exports.hasNextTick = typeof process === 'object' && typeof process.nextTick === 'function';

function fallback(fn) {
    setTimeout(fn, 0);
}

function wrap(defer) {
    return function (fn /*, ...args*/) {
        var args = (0, _slice2.default)(arguments, 1);
        defer(function () {
            fn.apply(null, args);
        });
    };
}

var _defer;

if (hasSetImmediate) {
    _defer = setImmediate;
} else if (hasNextTick) {
    _defer = process.nextTick;
} else {
    _defer = fallback;
}

exports.default = wrap(_defer);";
        
        $__internal_e5a7a86598f80dfa2a816508cc8e8984a3acf907e6db3324157060fc77b3a6e5->leave($__internal_e5a7a86598f80dfa2a816508cc8e8984a3acf907e6db3324157060fc77b3a6e5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/internal/setImmediate.js";
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
exports.hasNextTick = exports.hasSetImmediate = undefined;
exports.fallback = fallback;
exports.wrap = wrap;

var _slice = require('./slice');

var _slice2 = _interopRequireDefault(_slice);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var hasSetImmediate = exports.hasSetImmediate = typeof setImmediate === 'function' && setImmediate;
var hasNextTick = exports.hasNextTick = typeof process === 'object' && typeof process.nextTick === 'function';

function fallback(fn) {
    setTimeout(fn, 0);
}

function wrap(defer) {
    return function (fn /*, ...args*/) {
        var args = (0, _slice2.default)(arguments, 1);
        defer(function () {
            fn.apply(null, args);
        });
    };
}

var _defer;

if (hasSetImmediate) {
    _defer = setImmediate;
} else if (hasNextTick) {
    _defer = process.nextTick;
} else {
    _defer = fallback;
}

exports.default = wrap(_defer);", "node_modules/async/internal/setImmediate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/internal/setImmediate.js");
    }
}
