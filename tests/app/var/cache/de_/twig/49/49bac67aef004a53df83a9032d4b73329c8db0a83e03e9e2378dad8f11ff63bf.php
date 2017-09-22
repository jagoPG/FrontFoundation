<?php

/* node_modules/async/internal/consoleFunc.js */
class __TwigTemplate_69e0461c8dced0d5a9a4928be16ece7c1548ea722de7395074ebc3bddb55215a extends Twig_Template
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
        $__internal_ee00e25f67428ff41503e9596fb2cc0382b406f109e1462456b95a7adaaed181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee00e25f67428ff41503e9596fb2cc0382b406f109e1462456b95a7adaaed181->enter($__internal_ee00e25f67428ff41503e9596fb2cc0382b406f109e1462456b95a7adaaed181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/internal/consoleFunc.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
    value: true
});
exports.default = consoleFunc;

var _arrayEach = require('lodash/_arrayEach');

var _arrayEach2 = _interopRequireDefault(_arrayEach);

var _slice = require('./slice');

var _slice2 = _interopRequireDefault(_slice);

var _wrapAsync = require('./wrapAsync');

var _wrapAsync2 = _interopRequireDefault(_wrapAsync);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function consoleFunc(name) {
    return function (fn /*, ...args*/) {
        var args = (0, _slice2.default)(arguments, 1);
        args.push(function (err /*, ...args*/) {
            var args = (0, _slice2.default)(arguments, 1);
            if (typeof console === 'object') {
                if (err) {
                    if (console.error) {
                        console.error(err);
                    }
                } else if (console[name]) {
                    (0, _arrayEach2.default)(args, function (x) {
                        console[name](x);
                    });
                }
            }
        });
        (0, _wrapAsync2.default)(fn).apply(null, args);
    };
}
module.exports = exports['default'];";
        
        $__internal_ee00e25f67428ff41503e9596fb2cc0382b406f109e1462456b95a7adaaed181->leave($__internal_ee00e25f67428ff41503e9596fb2cc0382b406f109e1462456b95a7adaaed181_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/internal/consoleFunc.js";
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
exports.default = consoleFunc;

var _arrayEach = require('lodash/_arrayEach');

var _arrayEach2 = _interopRequireDefault(_arrayEach);

var _slice = require('./slice');

var _slice2 = _interopRequireDefault(_slice);

var _wrapAsync = require('./wrapAsync');

var _wrapAsync2 = _interopRequireDefault(_wrapAsync);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function consoleFunc(name) {
    return function (fn /*, ...args*/) {
        var args = (0, _slice2.default)(arguments, 1);
        args.push(function (err /*, ...args*/) {
            var args = (0, _slice2.default)(arguments, 1);
            if (typeof console === 'object') {
                if (err) {
                    if (console.error) {
                        console.error(err);
                    }
                } else if (console[name]) {
                    (0, _arrayEach2.default)(args, function (x) {
                        console[name](x);
                    });
                }
            }
        });
        (0, _wrapAsync2.default)(fn).apply(null, args);
    };
}
module.exports = exports['default'];", "node_modules/async/internal/consoleFunc.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/internal/consoleFunc.js");
    }
}
