<?php

/* node_modules/async/tryEach.js */
class __TwigTemplate_12928b1c9c9947341c89eb41cf0c9588a9053a1d7680e15965961db21b01be1c extends Twig_Template
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
        $__internal_062f13b5bcecac47fd72932f4281561d09d1e42e8758259b85c750fb9b6b83f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_062f13b5bcecac47fd72932f4281561d09d1e42e8758259b85c750fb9b6b83f5->enter($__internal_062f13b5bcecac47fd72932f4281561d09d1e42e8758259b85c750fb9b6b83f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/tryEach.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
    value: true
});
exports.default = tryEach;

var _noop = require('lodash/noop');

var _noop2 = _interopRequireDefault(_noop);

var _eachSeries = require('./eachSeries');

var _eachSeries2 = _interopRequireDefault(_eachSeries);

var _wrapAsync = require('./internal/wrapAsync');

var _wrapAsync2 = _interopRequireDefault(_wrapAsync);

var _slice = require('./internal/slice');

var _slice2 = _interopRequireDefault(_slice);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * It runs each task in series but stops whenever any of the functions were
 * successful. If one of the tasks were successful, the `callback` will be
 * passed the result of the successful task. If all tasks fail, the callback
 * will be passed the error and result (if any) of the final attempt.
 *
 * @name tryEach
 * @static
 * @memberOf module:ControlFlow
 * @method
 * @category Control Flow
 * @param {Array|Iterable|Object} tasks - A collection containing functions to
 * run, each function is passed a `callback(err, result)` it must call on
 * completion with an error `err` (which can be `null`) and an optional `result`
 * value.
 * @param {Function} [callback] - An optional callback which is called when one
 * of the tasks has succeeded, or all have failed. It receives the `err` and
 * `result` arguments of the last attempt at completing the `task`. Invoked with
 * (err, results).
 * @example
 * async.try([
 *     function getDataFromFirstWebsite(callback) {
 *         // Try getting the data from the first website
 *         callback(err, data);
 *     },
 *     function getDataFromSecondWebsite(callback) {
 *         // First website failed,
 *         // Try getting the data from the backup website
 *         callback(err, data);
 *     }
 * ],
 * // optional callback
 * function(err, results) {
 *     Now do something with the data.
 * });
 *
 */
function tryEach(tasks, callback) {
    var error = null;
    var result;
    callback = callback || _noop2.default;
    (0, _eachSeries2.default)(tasks, function (task, callback) {
        (0, _wrapAsync2.default)(task)(function (err, res /*, ...args*/) {
            if (arguments.length > 2) {
                result = (0, _slice2.default)(arguments, 1);
            } else {
                result = res;
            }
            error = err;
            callback(!err);
        });
    }, function () {
        callback(error, result);
    });
}
module.exports = exports['default'];";
        
        $__internal_062f13b5bcecac47fd72932f4281561d09d1e42e8758259b85c750fb9b6b83f5->leave($__internal_062f13b5bcecac47fd72932f4281561d09d1e42e8758259b85c750fb9b6b83f5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/tryEach.js";
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
exports.default = tryEach;

var _noop = require('lodash/noop');

var _noop2 = _interopRequireDefault(_noop);

var _eachSeries = require('./eachSeries');

var _eachSeries2 = _interopRequireDefault(_eachSeries);

var _wrapAsync = require('./internal/wrapAsync');

var _wrapAsync2 = _interopRequireDefault(_wrapAsync);

var _slice = require('./internal/slice');

var _slice2 = _interopRequireDefault(_slice);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * It runs each task in series but stops whenever any of the functions were
 * successful. If one of the tasks were successful, the `callback` will be
 * passed the result of the successful task. If all tasks fail, the callback
 * will be passed the error and result (if any) of the final attempt.
 *
 * @name tryEach
 * @static
 * @memberOf module:ControlFlow
 * @method
 * @category Control Flow
 * @param {Array|Iterable|Object} tasks - A collection containing functions to
 * run, each function is passed a `callback(err, result)` it must call on
 * completion with an error `err` (which can be `null`) and an optional `result`
 * value.
 * @param {Function} [callback] - An optional callback which is called when one
 * of the tasks has succeeded, or all have failed. It receives the `err` and
 * `result` arguments of the last attempt at completing the `task`. Invoked with
 * (err, results).
 * @example
 * async.try([
 *     function getDataFromFirstWebsite(callback) {
 *         // Try getting the data from the first website
 *         callback(err, data);
 *     },
 *     function getDataFromSecondWebsite(callback) {
 *         // First website failed,
 *         // Try getting the data from the backup website
 *         callback(err, data);
 *     }
 * ],
 * // optional callback
 * function(err, results) {
 *     Now do something with the data.
 * });
 *
 */
function tryEach(tasks, callback) {
    var error = null;
    var result;
    callback = callback || _noop2.default;
    (0, _eachSeries2.default)(tasks, function (task, callback) {
        (0, _wrapAsync2.default)(task)(function (err, res /*, ...args*/) {
            if (arguments.length > 2) {
                result = (0, _slice2.default)(arguments, 1);
            } else {
                result = res;
            }
            error = err;
            callback(!err);
        });
    }, function () {
        callback(error, result);
    });
}
module.exports = exports['default'];", "node_modules/async/tryEach.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/tryEach.js");
    }
}
