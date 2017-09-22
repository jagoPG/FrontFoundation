<?php

/* node_modules/async/seq.js */
class __TwigTemplate_96d34cf867c64d04378fc943611ceb2965be0f029aa07d1132b5814e9aafa5f8 extends Twig_Template
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
        $__internal_90ffa81613af6db36823d1fc83a8b0012d9b43e75fad5679e0d7ff79c492dbb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90ffa81613af6db36823d1fc83a8b0012d9b43e75fad5679e0d7ff79c492dbb2->enter($__internal_90ffa81613af6db36823d1fc83a8b0012d9b43e75fad5679e0d7ff79c492dbb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/seq.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
    value: true
});
exports.default = seq;

var _noop = require('lodash/noop');

var _noop2 = _interopRequireDefault(_noop);

var _slice = require('./internal/slice');

var _slice2 = _interopRequireDefault(_slice);

var _reduce = require('./reduce');

var _reduce2 = _interopRequireDefault(_reduce);

var _wrapAsync = require('./internal/wrapAsync');

var _wrapAsync2 = _interopRequireDefault(_wrapAsync);

var _arrayMap = require('lodash/_arrayMap');

var _arrayMap2 = _interopRequireDefault(_arrayMap);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * Version of the compose function that is more natural to read. Each function
 * consumes the return value of the previous function. It is the equivalent of
 * [compose]{@link module:ControlFlow.compose} with the arguments reversed.
 *
 * Each function is executed with the `this` binding of the composed function.
 *
 * @name seq
 * @static
 * @memberOf module:ControlFlow
 * @method
 * @see [async.compose]{@link module:ControlFlow.compose}
 * @category Control Flow
 * @param {...AsyncFunction} functions - the asynchronous functions to compose
 * @returns {Function} a function that composes the `functions` in order
 * @example
 *
 * // Requires lodash (or underscore), express3 and dresende's orm2.
 * // Part of an app, that fetches cats of the logged user.
 * // This example uses `seq` function to avoid overnesting and error
 * // handling clutter.
 * app.get('/cats', function(request, response) {
 *     var User = request.models.User;
 *     async.seq(
 *         _.bind(User.get, User),  // 'User.get' has signature (id, callback(err, data))
 *         function(user, fn) {
 *             user.getCats(fn);      // 'getCats' has signature (callback(err, data))
 *         }
 *     )(req.session.user_id, function (err, cats) {
 *         if (err) {
 *             console.error(err);
 *             response.json({ status: 'error', message: err.message });
 *         } else {
 *             response.json({ status: 'ok', message: 'Cats found', data: cats });
 *         }
 *     });
 * });
 */
function seq() /*...functions*/{
    var _functions = (0, _arrayMap2.default)(arguments, _wrapAsync2.default);
    return function () /*...args*/{
        var args = (0, _slice2.default)(arguments);
        var that = this;

        var cb = args[args.length - 1];
        if (typeof cb == 'function') {
            args.pop();
        } else {
            cb = _noop2.default;
        }

        (0, _reduce2.default)(_functions, args, function (newargs, fn, cb) {
            fn.apply(that, newargs.concat(function (err /*, ...nextargs*/) {
                var nextargs = (0, _slice2.default)(arguments, 1);
                cb(err, nextargs);
            }));
        }, function (err, results) {
            cb.apply(that, [err].concat(results));
        });
    };
}
module.exports = exports['default'];";
        
        $__internal_90ffa81613af6db36823d1fc83a8b0012d9b43e75fad5679e0d7ff79c492dbb2->leave($__internal_90ffa81613af6db36823d1fc83a8b0012d9b43e75fad5679e0d7ff79c492dbb2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/seq.js";
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
exports.default = seq;

var _noop = require('lodash/noop');

var _noop2 = _interopRequireDefault(_noop);

var _slice = require('./internal/slice');

var _slice2 = _interopRequireDefault(_slice);

var _reduce = require('./reduce');

var _reduce2 = _interopRequireDefault(_reduce);

var _wrapAsync = require('./internal/wrapAsync');

var _wrapAsync2 = _interopRequireDefault(_wrapAsync);

var _arrayMap = require('lodash/_arrayMap');

var _arrayMap2 = _interopRequireDefault(_arrayMap);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * Version of the compose function that is more natural to read. Each function
 * consumes the return value of the previous function. It is the equivalent of
 * [compose]{@link module:ControlFlow.compose} with the arguments reversed.
 *
 * Each function is executed with the `this` binding of the composed function.
 *
 * @name seq
 * @static
 * @memberOf module:ControlFlow
 * @method
 * @see [async.compose]{@link module:ControlFlow.compose}
 * @category Control Flow
 * @param {...AsyncFunction} functions - the asynchronous functions to compose
 * @returns {Function} a function that composes the `functions` in order
 * @example
 *
 * // Requires lodash (or underscore), express3 and dresende's orm2.
 * // Part of an app, that fetches cats of the logged user.
 * // This example uses `seq` function to avoid overnesting and error
 * // handling clutter.
 * app.get('/cats', function(request, response) {
 *     var User = request.models.User;
 *     async.seq(
 *         _.bind(User.get, User),  // 'User.get' has signature (id, callback(err, data))
 *         function(user, fn) {
 *             user.getCats(fn);      // 'getCats' has signature (callback(err, data))
 *         }
 *     )(req.session.user_id, function (err, cats) {
 *         if (err) {
 *             console.error(err);
 *             response.json({ status: 'error', message: err.message });
 *         } else {
 *             response.json({ status: 'ok', message: 'Cats found', data: cats });
 *         }
 *     });
 * });
 */
function seq() /*...functions*/{
    var _functions = (0, _arrayMap2.default)(arguments, _wrapAsync2.default);
    return function () /*...args*/{
        var args = (0, _slice2.default)(arguments);
        var that = this;

        var cb = args[args.length - 1];
        if (typeof cb == 'function') {
            args.pop();
        } else {
            cb = _noop2.default;
        }

        (0, _reduce2.default)(_functions, args, function (newargs, fn, cb) {
            fn.apply(that, newargs.concat(function (err /*, ...nextargs*/) {
                var nextargs = (0, _slice2.default)(arguments, 1);
                cb(err, nextargs);
            }));
        }, function (err, results) {
            cb.apply(that, [err].concat(results));
        });
    };
}
module.exports = exports['default'];", "node_modules/async/seq.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/seq.js");
    }
}
