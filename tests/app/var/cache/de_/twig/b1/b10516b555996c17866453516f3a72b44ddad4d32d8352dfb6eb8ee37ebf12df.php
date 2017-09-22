<?php

/* node_modules/async/rejectSeries.js */
class __TwigTemplate_c3fbdb7f1e71a560dec52bde2b141553518345ce97a4c4e81a10f789e5c5ccbe extends Twig_Template
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
        $__internal_ac058cf705911c6e8710d3fb4b7fc300d960cef53ced4447a13e9dd0c2a60a75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac058cf705911c6e8710d3fb4b7fc300d960cef53ced4447a13e9dd0c2a60a75->enter($__internal_ac058cf705911c6e8710d3fb4b7fc300d960cef53ced4447a13e9dd0c2a60a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/rejectSeries.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _rejectLimit = require('./rejectLimit');

var _rejectLimit2 = _interopRequireDefault(_rejectLimit);

var _doLimit = require('./internal/doLimit');

var _doLimit2 = _interopRequireDefault(_doLimit);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * The same as [`reject`]{@link module:Collections.reject} but runs only a single async operation at a time.
 *
 * @name rejectSeries
 * @static
 * @memberOf module:Collections
 * @method
 * @see [async.reject]{@link module:Collections.reject}
 * @category Collection
 * @param {Array|Iterable|Object} coll - A collection to iterate over.
 * @param {Function} iteratee - An async truth test to apply to each item in
 * `coll`.
 * The should complete with a boolean value as its `result`.
 * Invoked with (item, callback).
 * @param {Function} [callback] - A callback which is called after all the
 * `iteratee` functions have finished. Invoked with (err, results).
 */
exports.default = (0, _doLimit2.default)(_rejectLimit2.default, 1);
module.exports = exports['default'];";
        
        $__internal_ac058cf705911c6e8710d3fb4b7fc300d960cef53ced4447a13e9dd0c2a60a75->leave($__internal_ac058cf705911c6e8710d3fb4b7fc300d960cef53ced4447a13e9dd0c2a60a75_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/rejectSeries.js";
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

var _rejectLimit = require('./rejectLimit');

var _rejectLimit2 = _interopRequireDefault(_rejectLimit);

var _doLimit = require('./internal/doLimit');

var _doLimit2 = _interopRequireDefault(_doLimit);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * The same as [`reject`]{@link module:Collections.reject} but runs only a single async operation at a time.
 *
 * @name rejectSeries
 * @static
 * @memberOf module:Collections
 * @method
 * @see [async.reject]{@link module:Collections.reject}
 * @category Collection
 * @param {Array|Iterable|Object} coll - A collection to iterate over.
 * @param {Function} iteratee - An async truth test to apply to each item in
 * `coll`.
 * The should complete with a boolean value as its `result`.
 * Invoked with (item, callback).
 * @param {Function} [callback] - A callback which is called after all the
 * `iteratee` functions have finished. Invoked with (err, results).
 */
exports.default = (0, _doLimit2.default)(_rejectLimit2.default, 1);
module.exports = exports['default'];", "node_modules/async/rejectSeries.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/rejectSeries.js");
    }
}
