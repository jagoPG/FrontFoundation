<?php

/* node_modules/async/filter.js */
class __TwigTemplate_e307f0b3aa70c7e48665f02b0169d313c2c2039d423d6dc054930df83f513a00 extends Twig_Template
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
        $__internal_9d5db9140b2a2914f80222bcfc864015765babd31693add50a1f4cc7c468674e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d5db9140b2a2914f80222bcfc864015765babd31693add50a1f4cc7c468674e->enter($__internal_9d5db9140b2a2914f80222bcfc864015765babd31693add50a1f4cc7c468674e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/filter.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _filter = require('./internal/filter');

var _filter2 = _interopRequireDefault(_filter);

var _doParallel = require('./internal/doParallel');

var _doParallel2 = _interopRequireDefault(_doParallel);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * Returns a new array of all the values in `coll` which pass an async truth
 * test. This operation is performed in parallel, but the results array will be
 * in the same order as the original.
 *
 * @name filter
 * @static
 * @memberOf module:Collections
 * @method
 * @alias select
 * @category Collection
 * @param {Array|Iterable|Object} coll - A collection to iterate over.
 * @param {Function} iteratee - A truth test to apply to each item in `coll`.
 * The `iteratee` is passed a `callback(err, truthValue)`, which must be called
 * with a boolean argument once it has completed. Invoked with (item, callback).
 * @param {Function} [callback] - A callback which is called after all the
 * `iteratee` functions have finished. Invoked with (err, results).
 * @example
 *
 * async.filter(['file1','file2','file3'], function(filePath, callback) {
 *     fs.access(filePath, function(err) {
 *         callback(null, !err)
 *     });
 * }, function(err, results) {
 *     // results now equals an array of the existing files
 * });
 */
exports.default = (0, _doParallel2.default)(_filter2.default);
module.exports = exports['default'];";
        
        $__internal_9d5db9140b2a2914f80222bcfc864015765babd31693add50a1f4cc7c468674e->leave($__internal_9d5db9140b2a2914f80222bcfc864015765babd31693add50a1f4cc7c468674e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/filter.js";
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

var _filter = require('./internal/filter');

var _filter2 = _interopRequireDefault(_filter);

var _doParallel = require('./internal/doParallel');

var _doParallel2 = _interopRequireDefault(_doParallel);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * Returns a new array of all the values in `coll` which pass an async truth
 * test. This operation is performed in parallel, but the results array will be
 * in the same order as the original.
 *
 * @name filter
 * @static
 * @memberOf module:Collections
 * @method
 * @alias select
 * @category Collection
 * @param {Array|Iterable|Object} coll - A collection to iterate over.
 * @param {Function} iteratee - A truth test to apply to each item in `coll`.
 * The `iteratee` is passed a `callback(err, truthValue)`, which must be called
 * with a boolean argument once it has completed. Invoked with (item, callback).
 * @param {Function} [callback] - A callback which is called after all the
 * `iteratee` functions have finished. Invoked with (err, results).
 * @example
 *
 * async.filter(['file1','file2','file3'], function(filePath, callback) {
 *     fs.access(filePath, function(err) {
 *         callback(null, !err)
 *     });
 * }, function(err, results) {
 *     // results now equals an array of the existing files
 * });
 */
exports.default = (0, _doParallel2.default)(_filter2.default);
module.exports = exports['default'];", "node_modules/async/filter.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/filter.js");
    }
}
