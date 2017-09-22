<?php

/* node_modules/async/concat.js */
class __TwigTemplate_4afc8ef2b8ae2c272e44bcf2c4842675b5dd5be958315b5f1f7bdb924de9b2bd extends Twig_Template
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
        $__internal_6033789648a37bef141ff61c3823a231d552eebe0cba80312fce33521d735dfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6033789648a37bef141ff61c3823a231d552eebe0cba80312fce33521d735dfb->enter($__internal_6033789648a37bef141ff61c3823a231d552eebe0cba80312fce33521d735dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/concat.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _doLimit = require('./internal/doLimit');

var _doLimit2 = _interopRequireDefault(_doLimit);

var _concatLimit = require('./concatLimit');

var _concatLimit2 = _interopRequireDefault(_concatLimit);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * Applies `iteratee` to each item in `coll`, concatenating the results. Returns
 * the concatenated list. The `iteratee`s are called in parallel, and the
 * results are concatenated as they return. There is no guarantee that the
 * results array will be returned in the original order of `coll` passed to the
 * `iteratee` function.
 *
 * @name concat
 * @static
 * @memberOf module:Collections
 * @method
 * @category Collection
 * @param {Array|Iterable|Object} coll - A collection to iterate over.
 * @param {AsyncFunction} iteratee - A function to apply to each item in `coll`,
 * which should use an array as its result. Invoked with (item, callback).
 * @param {Function} [callback(err)] - A callback which is called after all the
 * `iteratee` functions have finished, or an error occurs. Results is an array
 * containing the concatenated results of the `iteratee` function. Invoked with
 * (err, results).
 * @example
 *
 * async.concat(['dir1','dir2','dir3'], fs.readdir, function(err, files) {
 *     // files is now a list of filenames that exist in the 3 directories
 * });
 */
exports.default = (0, _doLimit2.default)(_concatLimit2.default, Infinity);
module.exports = exports['default'];";
        
        $__internal_6033789648a37bef141ff61c3823a231d552eebe0cba80312fce33521d735dfb->leave($__internal_6033789648a37bef141ff61c3823a231d552eebe0cba80312fce33521d735dfb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/concat.js";
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

var _doLimit = require('./internal/doLimit');

var _doLimit2 = _interopRequireDefault(_doLimit);

var _concatLimit = require('./concatLimit');

var _concatLimit2 = _interopRequireDefault(_concatLimit);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * Applies `iteratee` to each item in `coll`, concatenating the results. Returns
 * the concatenated list. The `iteratee`s are called in parallel, and the
 * results are concatenated as they return. There is no guarantee that the
 * results array will be returned in the original order of `coll` passed to the
 * `iteratee` function.
 *
 * @name concat
 * @static
 * @memberOf module:Collections
 * @method
 * @category Collection
 * @param {Array|Iterable|Object} coll - A collection to iterate over.
 * @param {AsyncFunction} iteratee - A function to apply to each item in `coll`,
 * which should use an array as its result. Invoked with (item, callback).
 * @param {Function} [callback(err)] - A callback which is called after all the
 * `iteratee` functions have finished, or an error occurs. Results is an array
 * containing the concatenated results of the `iteratee` function. Invoked with
 * (err, results).
 * @example
 *
 * async.concat(['dir1','dir2','dir3'], fs.readdir, function(err, files) {
 *     // files is now a list of filenames that exist in the 3 directories
 * });
 */
exports.default = (0, _doLimit2.default)(_concatLimit2.default, Infinity);
module.exports = exports['default'];", "node_modules/async/concat.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/concat.js");
    }
}
