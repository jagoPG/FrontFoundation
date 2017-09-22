<?php

/* node_modules/async/everySeries.js */
class __TwigTemplate_2f5b8318fa8e7be58e25e03a50e15eb5ddccd2b3bae7981491364bb110da1079 extends Twig_Template
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
        $__internal_6090f78007ba14625027e6f3deb7ef85d7a16ba4b70249a3927e1c359d81af47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6090f78007ba14625027e6f3deb7ef85d7a16ba4b70249a3927e1c359d81af47->enter($__internal_6090f78007ba14625027e6f3deb7ef85d7a16ba4b70249a3927e1c359d81af47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/everySeries.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _everyLimit = require('./everyLimit');

var _everyLimit2 = _interopRequireDefault(_everyLimit);

var _doLimit = require('./internal/doLimit');

var _doLimit2 = _interopRequireDefault(_doLimit);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * The same as [`every`]{@link module:Collections.every} but runs only a single async operation at a time.
 *
 * @name everySeries
 * @static
 * @memberOf module:Collections
 * @method
 * @see [async.every]{@link module:Collections.every}
 * @alias allSeries
 * @category Collection
 * @param {Array|Iterable|Object} coll - A collection to iterate over.
 * @param {AsyncFunction} iteratee - An async truth test to apply to each item
 * in the collection in series.
 * The iteratee must complete with a boolean result value.
 * Invoked with (item, callback).
 * @param {Function} [callback] - A callback which is called after all the
 * `iteratee` functions have finished. Result will be either `true` or `false`
 * depending on the values of the async tests. Invoked with (err, result).
 */
exports.default = (0, _doLimit2.default)(_everyLimit2.default, 1);
module.exports = exports['default'];";
        
        $__internal_6090f78007ba14625027e6f3deb7ef85d7a16ba4b70249a3927e1c359d81af47->leave($__internal_6090f78007ba14625027e6f3deb7ef85d7a16ba4b70249a3927e1c359d81af47_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/everySeries.js";
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

var _everyLimit = require('./everyLimit');

var _everyLimit2 = _interopRequireDefault(_everyLimit);

var _doLimit = require('./internal/doLimit');

var _doLimit2 = _interopRequireDefault(_doLimit);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * The same as [`every`]{@link module:Collections.every} but runs only a single async operation at a time.
 *
 * @name everySeries
 * @static
 * @memberOf module:Collections
 * @method
 * @see [async.every]{@link module:Collections.every}
 * @alias allSeries
 * @category Collection
 * @param {Array|Iterable|Object} coll - A collection to iterate over.
 * @param {AsyncFunction} iteratee - An async truth test to apply to each item
 * in the collection in series.
 * The iteratee must complete with a boolean result value.
 * Invoked with (item, callback).
 * @param {Function} [callback] - A callback which is called after all the
 * `iteratee` functions have finished. Result will be either `true` or `false`
 * depending on the values of the async tests. Invoked with (err, result).
 */
exports.default = (0, _doLimit2.default)(_everyLimit2.default, 1);
module.exports = exports['default'];", "node_modules/async/everySeries.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/everySeries.js");
    }
}
