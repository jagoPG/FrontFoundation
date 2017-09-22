<?php

/* node_modules/async/retryable.js */
class __TwigTemplate_10b1cfd945c339ff407c82b48460c4afdbcda2636cba47ca09310b0ceb98c3f6 extends Twig_Template
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
        $__internal_64067931538048e9cc978663ad0483c0f941890b7481d08bf5e16c4f5587a1b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64067931538048e9cc978663ad0483c0f941890b7481d08bf5e16c4f5587a1b1->enter($__internal_64067931538048e9cc978663ad0483c0f941890b7481d08bf5e16c4f5587a1b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/retryable.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
    value: true
});

exports.default = function (opts, task) {
    if (!task) {
        task = opts;
        opts = null;
    }
    var _task = (0, _wrapAsync2.default)(task);
    return (0, _initialParams2.default)(function (args, callback) {
        function taskFn(cb) {
            _task.apply(null, args.concat(cb));
        }

        if (opts) (0, _retry2.default)(opts, taskFn, callback);else (0, _retry2.default)(taskFn, callback);
    });
};

var _retry = require('./retry');

var _retry2 = _interopRequireDefault(_retry);

var _initialParams = require('./internal/initialParams');

var _initialParams2 = _interopRequireDefault(_initialParams);

var _wrapAsync = require('./internal/wrapAsync');

var _wrapAsync2 = _interopRequireDefault(_wrapAsync);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

module.exports = exports['default'];

/**
 * A close relative of [`retry`]{@link module:ControlFlow.retry}.  This method
 * wraps a task and makes it retryable, rather than immediately calling it
 * with retries.
 *
 * @name retryable
 * @static
 * @memberOf module:ControlFlow
 * @method
 * @see [async.retry]{@link module:ControlFlow.retry}
 * @category Control Flow
 * @param {Object|number} [opts = {times: 5, interval: 0}| 5] - optional
 * options, exactly the same as from `retry`
 * @param {AsyncFunction} task - the asynchronous function to wrap.
 * This function will be passed any arguments passed to the returned wrapper.
 * Invoked with (...args, callback).
 * @returns {AsyncFunction} The wrapped function, which when invoked, will
 * retry on an error, based on the parameters specified in `opts`.
 * This function will accept the same parameters as `task`.
 * @example
 *
 * async.auto({
 *     dep1: async.retryable(3, getFromFlakyService),
 *     process: [\"dep1\", async.retryable(3, function (results, cb) {
 *         maybeProcessData(results.dep1, cb);
 *     })]
 * }, callback);
 */";
        
        $__internal_64067931538048e9cc978663ad0483c0f941890b7481d08bf5e16c4f5587a1b1->leave($__internal_64067931538048e9cc978663ad0483c0f941890b7481d08bf5e16c4f5587a1b1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/retryable.js";
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

exports.default = function (opts, task) {
    if (!task) {
        task = opts;
        opts = null;
    }
    var _task = (0, _wrapAsync2.default)(task);
    return (0, _initialParams2.default)(function (args, callback) {
        function taskFn(cb) {
            _task.apply(null, args.concat(cb));
        }

        if (opts) (0, _retry2.default)(opts, taskFn, callback);else (0, _retry2.default)(taskFn, callback);
    });
};

var _retry = require('./retry');

var _retry2 = _interopRequireDefault(_retry);

var _initialParams = require('./internal/initialParams');

var _initialParams2 = _interopRequireDefault(_initialParams);

var _wrapAsync = require('./internal/wrapAsync');

var _wrapAsync2 = _interopRequireDefault(_wrapAsync);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

module.exports = exports['default'];

/**
 * A close relative of [`retry`]{@link module:ControlFlow.retry}.  This method
 * wraps a task and makes it retryable, rather than immediately calling it
 * with retries.
 *
 * @name retryable
 * @static
 * @memberOf module:ControlFlow
 * @method
 * @see [async.retry]{@link module:ControlFlow.retry}
 * @category Control Flow
 * @param {Object|number} [opts = {times: 5, interval: 0}| 5] - optional
 * options, exactly the same as from `retry`
 * @param {AsyncFunction} task - the asynchronous function to wrap.
 * This function will be passed any arguments passed to the returned wrapper.
 * Invoked with (...args, callback).
 * @returns {AsyncFunction} The wrapped function, which when invoked, will
 * retry on an error, based on the parameters specified in `opts`.
 * This function will accept the same parameters as `task`.
 * @example
 *
 * async.auto({
 *     dep1: async.retryable(3, getFromFlakyService),
 *     process: [\"dep1\", async.retryable(3, function (results, cb) {
 *         maybeProcessData(results.dep1, cb);
 *     })]
 * }, callback);
 */", "node_modules/async/retryable.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/retryable.js");
    }
}
