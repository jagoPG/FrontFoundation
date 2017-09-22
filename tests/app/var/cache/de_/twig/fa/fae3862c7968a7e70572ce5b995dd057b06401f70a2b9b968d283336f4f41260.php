<?php

/* node_modules/async/apply.js */
class __TwigTemplate_45323281789c13d795851100c3e1342c2bcc83b5c0c95d1ce43c0d7d5140d706 extends Twig_Template
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
        $__internal_bd03cf7947afbd5b89e2a618d944bb6888a517714d2ddc79d0906686c63fca3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd03cf7947afbd5b89e2a618d944bb6888a517714d2ddc79d0906686c63fca3a->enter($__internal_bd03cf7947afbd5b89e2a618d944bb6888a517714d2ddc79d0906686c63fca3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/apply.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
    value: true
});

exports.default = function (fn /*, ...args*/) {
    var args = (0, _slice2.default)(arguments, 1);
    return function () /*callArgs*/{
        var callArgs = (0, _slice2.default)(arguments);
        return fn.apply(null, args.concat(callArgs));
    };
};

var _slice = require('./internal/slice');

var _slice2 = _interopRequireDefault(_slice);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

;

/**
 * Creates a continuation function with some arguments already applied.
 *
 * Useful as a shorthand when combined with other control flow functions. Any
 * arguments passed to the returned function are added to the arguments
 * originally passed to apply.
 *
 * @name apply
 * @static
 * @memberOf module:Utils
 * @method
 * @category Util
 * @param {Function} fn - The function you want to eventually apply all
 * arguments to. Invokes with (arguments...).
 * @param {...*} arguments... - Any number of arguments to automatically apply
 * when the continuation is called.
 * @returns {Function} the partially-applied function
 * @example
 *
 * // using apply
 * async.parallel([
 *     async.apply(fs.writeFile, 'testfile1', 'test1'),
 *     async.apply(fs.writeFile, 'testfile2', 'test2')
 * ]);
 *
 *
 * // the same process without using apply
 * async.parallel([
 *     function(callback) {
 *         fs.writeFile('testfile1', 'test1', callback);
 *     },
 *     function(callback) {
 *         fs.writeFile('testfile2', 'test2', callback);
 *     }
 * ]);
 *
 * // It's possible to pass any number of additional arguments when calling the
 * // continuation:
 *
 * node> var fn = async.apply(sys.puts, 'one');
 * node> fn('two', 'three');
 * one
 * two
 * three
 */
module.exports = exports['default'];";
        
        $__internal_bd03cf7947afbd5b89e2a618d944bb6888a517714d2ddc79d0906686c63fca3a->leave($__internal_bd03cf7947afbd5b89e2a618d944bb6888a517714d2ddc79d0906686c63fca3a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/apply.js";
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

exports.default = function (fn /*, ...args*/) {
    var args = (0, _slice2.default)(arguments, 1);
    return function () /*callArgs*/{
        var callArgs = (0, _slice2.default)(arguments);
        return fn.apply(null, args.concat(callArgs));
    };
};

var _slice = require('./internal/slice');

var _slice2 = _interopRequireDefault(_slice);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

;

/**
 * Creates a continuation function with some arguments already applied.
 *
 * Useful as a shorthand when combined with other control flow functions. Any
 * arguments passed to the returned function are added to the arguments
 * originally passed to apply.
 *
 * @name apply
 * @static
 * @memberOf module:Utils
 * @method
 * @category Util
 * @param {Function} fn - The function you want to eventually apply all
 * arguments to. Invokes with (arguments...).
 * @param {...*} arguments... - Any number of arguments to automatically apply
 * when the continuation is called.
 * @returns {Function} the partially-applied function
 * @example
 *
 * // using apply
 * async.parallel([
 *     async.apply(fs.writeFile, 'testfile1', 'test1'),
 *     async.apply(fs.writeFile, 'testfile2', 'test2')
 * ]);
 *
 *
 * // the same process without using apply
 * async.parallel([
 *     function(callback) {
 *         fs.writeFile('testfile1', 'test1', callback);
 *     },
 *     function(callback) {
 *         fs.writeFile('testfile2', 'test2', callback);
 *     }
 * ]);
 *
 * // It's possible to pass any number of additional arguments when calling the
 * // continuation:
 *
 * node> var fn = async.apply(sys.puts, 'one');
 * node> fn('two', 'three');
 * one
 * two
 * three
 */
module.exports = exports['default'];", "node_modules/async/apply.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/apply.js");
    }
}
