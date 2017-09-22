<?php

/* node_modules/async/someSeries.js */
class __TwigTemplate_e4c22a8eb920bd34e5eeaf89330e22c88826ea8ffe6c1c74d88a67659f4a4554 extends Twig_Template
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
        $__internal_ed3c8073be888c79b9ffef011e03204a3e609ef5e9b8c29aeddbb782f5b860d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed3c8073be888c79b9ffef011e03204a3e609ef5e9b8c29aeddbb782f5b860d7->enter($__internal_ed3c8073be888c79b9ffef011e03204a3e609ef5e9b8c29aeddbb782f5b860d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/someSeries.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _someLimit = require('./someLimit');

var _someLimit2 = _interopRequireDefault(_someLimit);

var _doLimit = require('./internal/doLimit');

var _doLimit2 = _interopRequireDefault(_doLimit);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * The same as [`some`]{@link module:Collections.some} but runs only a single async operation at a time.
 *
 * @name someSeries
 * @static
 * @memberOf module:Collections
 * @method
 * @see [async.some]{@link module:Collections.some}
 * @alias anySeries
 * @category Collection
 * @param {Array|Iterable|Object} coll - A collection to iterate over.
 * @param {AsyncFunction} iteratee - An async truth test to apply to each item
 * in the collections in series.
 * The iteratee should complete with a boolean `result` value.
 * Invoked with (item, callback).
 * @param {Function} [callback] - A callback which is called as soon as any
 * iteratee returns `true`, or after all the iteratee functions have finished.
 * Result will be either `true` or `false` depending on the values of the async
 * tests. Invoked with (err, result).
 */
exports.default = (0, _doLimit2.default)(_someLimit2.default, 1);
module.exports = exports['default'];";
        
        $__internal_ed3c8073be888c79b9ffef011e03204a3e609ef5e9b8c29aeddbb782f5b860d7->leave($__internal_ed3c8073be888c79b9ffef011e03204a3e609ef5e9b8c29aeddbb782f5b860d7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/someSeries.js";
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

var _someLimit = require('./someLimit');

var _someLimit2 = _interopRequireDefault(_someLimit);

var _doLimit = require('./internal/doLimit');

var _doLimit2 = _interopRequireDefault(_doLimit);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * The same as [`some`]{@link module:Collections.some} but runs only a single async operation at a time.
 *
 * @name someSeries
 * @static
 * @memberOf module:Collections
 * @method
 * @see [async.some]{@link module:Collections.some}
 * @alias anySeries
 * @category Collection
 * @param {Array|Iterable|Object} coll - A collection to iterate over.
 * @param {AsyncFunction} iteratee - An async truth test to apply to each item
 * in the collections in series.
 * The iteratee should complete with a boolean `result` value.
 * Invoked with (item, callback).
 * @param {Function} [callback] - A callback which is called as soon as any
 * iteratee returns `true`, or after all the iteratee functions have finished.
 * Result will be either `true` or `false` depending on the values of the async
 * tests. Invoked with (err, result).
 */
exports.default = (0, _doLimit2.default)(_someLimit2.default, 1);
module.exports = exports['default'];", "node_modules/async/someSeries.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/someSeries.js");
    }
}
