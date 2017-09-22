<?php

/* node_modules/async/concatSeries.js */
class __TwigTemplate_7881bafa3d72e2b9ad9303dd80a5afbf20616a34fd8915439caa2725d7c44b50 extends Twig_Template
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
        $__internal_dd9dbbd69e86e6e9c2d6fa0231fd21937e0ab0c13d5b4748facdefa5ad0e3b2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd9dbbd69e86e6e9c2d6fa0231fd21937e0ab0c13d5b4748facdefa5ad0e3b2b->enter($__internal_dd9dbbd69e86e6e9c2d6fa0231fd21937e0ab0c13d5b4748facdefa5ad0e3b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/concatSeries.js"));

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
 * The same as [`concat`]{@link module:Collections.concat} but runs only a single async operation at a time.
 *
 * @name concatSeries
 * @static
 * @memberOf module:Collections
 * @method
 * @see [async.concat]{@link module:Collections.concat}
 * @category Collection
 * @param {Array|Iterable|Object} coll - A collection to iterate over.
 * @param {AsyncFunction} iteratee - A function to apply to each item in `coll`.
 * The iteratee should complete with an array an array of results.
 * Invoked with (item, callback).
 * @param {Function} [callback(err)] - A callback which is called after all the
 * `iteratee` functions have finished, or an error occurs. Results is an array
 * containing the concatenated results of the `iteratee` function. Invoked with
 * (err, results).
 */
exports.default = (0, _doLimit2.default)(_concatLimit2.default, 1);
module.exports = exports['default'];";
        
        $__internal_dd9dbbd69e86e6e9c2d6fa0231fd21937e0ab0c13d5b4748facdefa5ad0e3b2b->leave($__internal_dd9dbbd69e86e6e9c2d6fa0231fd21937e0ab0c13d5b4748facdefa5ad0e3b2b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/concatSeries.js";
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
 * The same as [`concat`]{@link module:Collections.concat} but runs only a single async operation at a time.
 *
 * @name concatSeries
 * @static
 * @memberOf module:Collections
 * @method
 * @see [async.concat]{@link module:Collections.concat}
 * @category Collection
 * @param {Array|Iterable|Object} coll - A collection to iterate over.
 * @param {AsyncFunction} iteratee - A function to apply to each item in `coll`.
 * The iteratee should complete with an array an array of results.
 * Invoked with (item, callback).
 * @param {Function} [callback(err)] - A callback which is called after all the
 * `iteratee` functions have finished, or an error occurs. Results is an array
 * containing the concatenated results of the `iteratee` function. Invoked with
 * (err, results).
 */
exports.default = (0, _doLimit2.default)(_concatLimit2.default, 1);
module.exports = exports['default'];", "node_modules/async/concatSeries.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/concatSeries.js");
    }
}
