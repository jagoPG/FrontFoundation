<?php

/* node_modules/async/reflectAll.js */
class __TwigTemplate_203cfafbb614a5d954b388565f1c4dd97ca60aa74ccea9d337617ed82ba3320b extends Twig_Template
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
        $__internal_a3174c36c9fc51153f3d75899501a19dea200ae52cc49bb4d68ab9ed30cec800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3174c36c9fc51153f3d75899501a19dea200ae52cc49bb4d68ab9ed30cec800->enter($__internal_a3174c36c9fc51153f3d75899501a19dea200ae52cc49bb4d68ab9ed30cec800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/reflectAll.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
    value: true
});
exports.default = reflectAll;

var _reflect = require('./reflect');

var _reflect2 = _interopRequireDefault(_reflect);

var _isArray = require('lodash/isArray');

var _isArray2 = _interopRequireDefault(_isArray);

var _arrayMap2 = require('lodash/_arrayMap');

var _arrayMap3 = _interopRequireDefault(_arrayMap2);

var _baseForOwn = require('lodash/_baseForOwn');

var _baseForOwn2 = _interopRequireDefault(_baseForOwn);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * A helper function that wraps an array or an object of functions with `reflect`.
 *
 * @name reflectAll
 * @static
 * @memberOf module:Utils
 * @method
 * @see [async.reflect]{@link module:Utils.reflect}
 * @category Util
 * @param {Array|Object|Iterable} tasks - The collection of
 * [async functions]{@link AsyncFunction} to wrap in `async.reflect`.
 * @returns {Array} Returns an array of async functions, each wrapped in
 * `async.reflect`
 * @example
 *
 * let tasks = [
 *     function(callback) {
 *         setTimeout(function() {
 *             callback(null, 'one');
 *         }, 200);
 *     },
 *     function(callback) {
 *         // do some more stuff but error ...
 *         callback(new Error('bad stuff happened'));
 *     },
 *     function(callback) {
 *         setTimeout(function() {
 *             callback(null, 'two');
 *         }, 100);
 *     }
 * ];
 *
 * async.parallel(async.reflectAll(tasks),
 * // optional callback
 * function(err, results) {
 *     // values
 *     // results[0].value = 'one'
 *     // results[1].error = Error('bad stuff happened')
 *     // results[2].value = 'two'
 * });
 *
 * // an example using an object instead of an array
 * let tasks = {
 *     one: function(callback) {
 *         setTimeout(function() {
 *             callback(null, 'one');
 *         }, 200);
 *     },
 *     two: function(callback) {
 *         callback('two');
 *     },
 *     three: function(callback) {
 *         setTimeout(function() {
 *             callback(null, 'three');
 *         }, 100);
 *     }
 * };
 *
 * async.parallel(async.reflectAll(tasks),
 * // optional callback
 * function(err, results) {
 *     // values
 *     // results.one.value = 'one'
 *     // results.two.error = 'two'
 *     // results.three.value = 'three'
 * });
 */
function reflectAll(tasks) {
    var results;
    if ((0, _isArray2.default)(tasks)) {
        results = (0, _arrayMap3.default)(tasks, _reflect2.default);
    } else {
        results = {};
        (0, _baseForOwn2.default)(tasks, function (task, key) {
            results[key] = _reflect2.default.call(this, task);
        });
    }
    return results;
}
module.exports = exports['default'];";
        
        $__internal_a3174c36c9fc51153f3d75899501a19dea200ae52cc49bb4d68ab9ed30cec800->leave($__internal_a3174c36c9fc51153f3d75899501a19dea200ae52cc49bb4d68ab9ed30cec800_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/reflectAll.js";
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
exports.default = reflectAll;

var _reflect = require('./reflect');

var _reflect2 = _interopRequireDefault(_reflect);

var _isArray = require('lodash/isArray');

var _isArray2 = _interopRequireDefault(_isArray);

var _arrayMap2 = require('lodash/_arrayMap');

var _arrayMap3 = _interopRequireDefault(_arrayMap2);

var _baseForOwn = require('lodash/_baseForOwn');

var _baseForOwn2 = _interopRequireDefault(_baseForOwn);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * A helper function that wraps an array or an object of functions with `reflect`.
 *
 * @name reflectAll
 * @static
 * @memberOf module:Utils
 * @method
 * @see [async.reflect]{@link module:Utils.reflect}
 * @category Util
 * @param {Array|Object|Iterable} tasks - The collection of
 * [async functions]{@link AsyncFunction} to wrap in `async.reflect`.
 * @returns {Array} Returns an array of async functions, each wrapped in
 * `async.reflect`
 * @example
 *
 * let tasks = [
 *     function(callback) {
 *         setTimeout(function() {
 *             callback(null, 'one');
 *         }, 200);
 *     },
 *     function(callback) {
 *         // do some more stuff but error ...
 *         callback(new Error('bad stuff happened'));
 *     },
 *     function(callback) {
 *         setTimeout(function() {
 *             callback(null, 'two');
 *         }, 100);
 *     }
 * ];
 *
 * async.parallel(async.reflectAll(tasks),
 * // optional callback
 * function(err, results) {
 *     // values
 *     // results[0].value = 'one'
 *     // results[1].error = Error('bad stuff happened')
 *     // results[2].value = 'two'
 * });
 *
 * // an example using an object instead of an array
 * let tasks = {
 *     one: function(callback) {
 *         setTimeout(function() {
 *             callback(null, 'one');
 *         }, 200);
 *     },
 *     two: function(callback) {
 *         callback('two');
 *     },
 *     three: function(callback) {
 *         setTimeout(function() {
 *             callback(null, 'three');
 *         }, 100);
 *     }
 * };
 *
 * async.parallel(async.reflectAll(tasks),
 * // optional callback
 * function(err, results) {
 *     // values
 *     // results.one.value = 'one'
 *     // results.two.error = 'two'
 *     // results.three.value = 'three'
 * });
 */
function reflectAll(tasks) {
    var results;
    if ((0, _isArray2.default)(tasks)) {
        results = (0, _arrayMap3.default)(tasks, _reflect2.default);
    } else {
        results = {};
        (0, _baseForOwn2.default)(tasks, function (task, key) {
            results[key] = _reflect2.default.call(this, task);
        });
    }
    return results;
}
module.exports = exports['default'];", "node_modules/async/reflectAll.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/reflectAll.js");
    }
}
