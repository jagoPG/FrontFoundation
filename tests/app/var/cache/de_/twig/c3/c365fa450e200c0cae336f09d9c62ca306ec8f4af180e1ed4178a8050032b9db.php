<?php

/* node_modules/async/constant.js */
class __TwigTemplate_09b26d4dcdc6a5549645f117b63af8c1c0d673b4cbb1c2aae447c1e684625bf1 extends Twig_Template
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
        $__internal_c1b98597d6631c9274cbc3a86554c03aaabdae2d7723e63712f914d9034f6e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1b98597d6631c9274cbc3a86554c03aaabdae2d7723e63712f914d9034f6e1f->enter($__internal_c1b98597d6631c9274cbc3a86554c03aaabdae2d7723e63712f914d9034f6e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/constant.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
    value: true
});

exports.default = function () /*...values*/{
    var values = (0, _slice2.default)(arguments);
    var args = [null].concat(values);
    return function () /*...ignoredArgs, callback*/{
        var callback = arguments[arguments.length - 1];
        return callback.apply(this, args);
    };
};

var _slice = require('./internal/slice');

var _slice2 = _interopRequireDefault(_slice);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

;

/**
 * Returns a function that when called, calls-back with the values provided.
 * Useful as the first function in a [`waterfall`]{@link module:ControlFlow.waterfall}, or for plugging values in to
 * [`auto`]{@link module:ControlFlow.auto}.
 *
 * @name constant
 * @static
 * @memberOf module:Utils
 * @method
 * @category Util
 * @param {...*} arguments... - Any number of arguments to automatically invoke
 * callback with.
 * @returns {AsyncFunction} Returns a function that when invoked, automatically
 * invokes the callback with the previous given arguments.
 * @example
 *
 * async.waterfall([
 *     async.constant(42),
 *     function (value, next) {
 *         // value === 42
 *     },
 *     //...
 * ], callback);
 *
 * async.waterfall([
 *     async.constant(filename, \"utf8\"),
 *     fs.readFile,
 *     function (fileData, next) {
 *         //...
 *     }
 *     //...
 * ], callback);
 *
 * async.auto({
 *     hostname: async.constant(\"https://server.net/\"),
 *     port: findFreePort,
 *     launchServer: [\"hostname\", \"port\", function (options, cb) {
 *         startServer(options, cb);
 *     }],
 *     //...
 * }, callback);
 */
module.exports = exports['default'];";
        
        $__internal_c1b98597d6631c9274cbc3a86554c03aaabdae2d7723e63712f914d9034f6e1f->leave($__internal_c1b98597d6631c9274cbc3a86554c03aaabdae2d7723e63712f914d9034f6e1f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/constant.js";
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

exports.default = function () /*...values*/{
    var values = (0, _slice2.default)(arguments);
    var args = [null].concat(values);
    return function () /*...ignoredArgs, callback*/{
        var callback = arguments[arguments.length - 1];
        return callback.apply(this, args);
    };
};

var _slice = require('./internal/slice');

var _slice2 = _interopRequireDefault(_slice);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

;

/**
 * Returns a function that when called, calls-back with the values provided.
 * Useful as the first function in a [`waterfall`]{@link module:ControlFlow.waterfall}, or for plugging values in to
 * [`auto`]{@link module:ControlFlow.auto}.
 *
 * @name constant
 * @static
 * @memberOf module:Utils
 * @method
 * @category Util
 * @param {...*} arguments... - Any number of arguments to automatically invoke
 * callback with.
 * @returns {AsyncFunction} Returns a function that when invoked, automatically
 * invokes the callback with the previous given arguments.
 * @example
 *
 * async.waterfall([
 *     async.constant(42),
 *     function (value, next) {
 *         // value === 42
 *     },
 *     //...
 * ], callback);
 *
 * async.waterfall([
 *     async.constant(filename, \"utf8\"),
 *     fs.readFile,
 *     function (fileData, next) {
 *         //...
 *     }
 *     //...
 * ], callback);
 *
 * async.auto({
 *     hostname: async.constant(\"https://server.net/\"),
 *     port: findFreePort,
 *     launchServer: [\"hostname\", \"port\", function (options, cb) {
 *         startServer(options, cb);
 *     }],
 *     //...
 * }, callback);
 */
module.exports = exports['default'];", "node_modules/async/constant.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/constant.js");
    }
}
