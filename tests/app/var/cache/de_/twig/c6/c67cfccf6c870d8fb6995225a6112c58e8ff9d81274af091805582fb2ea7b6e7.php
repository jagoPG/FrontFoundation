<?php

/* node_modules/async/internal/createTester.js */
class __TwigTemplate_f6b089990537dfb7345b9883dcc4995adcd1fa71faaea1bf2a48b9c1a0860716 extends Twig_Template
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
        $__internal_1909332ef88bc360de224f0208a215adf12e8ef3de50adb2a14cb5d0158c76bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1909332ef88bc360de224f0208a215adf12e8ef3de50adb2a14cb5d0158c76bb->enter($__internal_1909332ef88bc360de224f0208a215adf12e8ef3de50adb2a14cb5d0158c76bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/internal/createTester.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
    value: true
});
exports.default = _createTester;

var _noop = require('lodash/noop');

var _noop2 = _interopRequireDefault(_noop);

var _breakLoop = require('./breakLoop');

var _breakLoop2 = _interopRequireDefault(_breakLoop);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _createTester(check, getResult) {
    return function (eachfn, arr, iteratee, cb) {
        cb = cb || _noop2.default;
        var testPassed = false;
        var testResult;
        eachfn(arr, function (value, _, callback) {
            iteratee(value, function (err, result) {
                if (err) {
                    callback(err);
                } else if (check(result) && !testResult) {
                    testPassed = true;
                    testResult = getResult(true, value);
                    callback(null, _breakLoop2.default);
                } else {
                    callback();
                }
            });
        }, function (err) {
            if (err) {
                cb(err);
            } else {
                cb(null, testPassed ? testResult : getResult(false));
            }
        });
    };
}
module.exports = exports['default'];";
        
        $__internal_1909332ef88bc360de224f0208a215adf12e8ef3de50adb2a14cb5d0158c76bb->leave($__internal_1909332ef88bc360de224f0208a215adf12e8ef3de50adb2a14cb5d0158c76bb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/internal/createTester.js";
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
exports.default = _createTester;

var _noop = require('lodash/noop');

var _noop2 = _interopRequireDefault(_noop);

var _breakLoop = require('./breakLoop');

var _breakLoop2 = _interopRequireDefault(_breakLoop);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _createTester(check, getResult) {
    return function (eachfn, arr, iteratee, cb) {
        cb = cb || _noop2.default;
        var testPassed = false;
        var testResult;
        eachfn(arr, function (value, _, callback) {
            iteratee(value, function (err, result) {
                if (err) {
                    callback(err);
                } else if (check(result) && !testResult) {
                    testPassed = true;
                    testResult = getResult(true, value);
                    callback(null, _breakLoop2.default);
                } else {
                    callback();
                }
            });
        }, function (err) {
            if (err) {
                cb(err);
            } else {
                cb(null, testPassed ? testResult : getResult(false));
            }
        });
    };
}
module.exports = exports['default'];", "node_modules/async/internal/createTester.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/internal/createTester.js");
    }
}
