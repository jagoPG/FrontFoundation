<?php

/* node_modules/async/rejectLimit.js */
class __TwigTemplate_515917451e4eba9c9ccab9e148a2c24b0feb28f99dfb9452c9d0f3f6aced161e extends Twig_Template
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
        $__internal_bd194fb203082d446947557196b9fd6457c9710c42e259f4ec6824c3d8b20fb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd194fb203082d446947557196b9fd6457c9710c42e259f4ec6824c3d8b20fb6->enter($__internal_bd194fb203082d446947557196b9fd6457c9710c42e259f4ec6824c3d8b20fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/rejectLimit.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _reject = require('./internal/reject');

var _reject2 = _interopRequireDefault(_reject);

var _doParallelLimit = require('./internal/doParallelLimit');

var _doParallelLimit2 = _interopRequireDefault(_doParallelLimit);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * The same as [`reject`]{@link module:Collections.reject} but runs a maximum of `limit` async operations at a
 * time.
 *
 * @name rejectLimit
 * @static
 * @memberOf module:Collections
 * @method
 * @see [async.reject]{@link module:Collections.reject}
 * @category Collection
 * @param {Array|Iterable|Object} coll - A collection to iterate over.
 * @param {number} limit - The maximum number of async operations at a time.
 * @param {Function} iteratee - An async truth test to apply to each item in
 * `coll`.
 * The should complete with a boolean value as its `result`.
 * Invoked with (item, callback).
 * @param {Function} [callback] - A callback which is called after all the
 * `iteratee` functions have finished. Invoked with (err, results).
 */
exports.default = (0, _doParallelLimit2.default)(_reject2.default);
module.exports = exports['default'];";
        
        $__internal_bd194fb203082d446947557196b9fd6457c9710c42e259f4ec6824c3d8b20fb6->leave($__internal_bd194fb203082d446947557196b9fd6457c9710c42e259f4ec6824c3d8b20fb6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/rejectLimit.js";
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

var _reject = require('./internal/reject');

var _reject2 = _interopRequireDefault(_reject);

var _doParallelLimit = require('./internal/doParallelLimit');

var _doParallelLimit2 = _interopRequireDefault(_doParallelLimit);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * The same as [`reject`]{@link module:Collections.reject} but runs a maximum of `limit` async operations at a
 * time.
 *
 * @name rejectLimit
 * @static
 * @memberOf module:Collections
 * @method
 * @see [async.reject]{@link module:Collections.reject}
 * @category Collection
 * @param {Array|Iterable|Object} coll - A collection to iterate over.
 * @param {number} limit - The maximum number of async operations at a time.
 * @param {Function} iteratee - An async truth test to apply to each item in
 * `coll`.
 * The should complete with a boolean value as its `result`.
 * Invoked with (item, callback).
 * @param {Function} [callback] - A callback which is called after all the
 * `iteratee` functions have finished. Invoked with (err, results).
 */
exports.default = (0, _doParallelLimit2.default)(_reject2.default);
module.exports = exports['default'];", "node_modules/async/rejectLimit.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/rejectLimit.js");
    }
}
