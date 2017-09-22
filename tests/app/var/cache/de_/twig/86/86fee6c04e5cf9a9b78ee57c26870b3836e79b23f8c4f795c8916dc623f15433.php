<?php

/* node_modules/async/filterSeries.js */
class __TwigTemplate_a55ba40b07ae6150c2e57e3173168178fc2b06faa12c66aaed151e70a0e64dad extends Twig_Template
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
        $__internal_033654b75cb49320e0d02ede34e3438808d7834aa481d8ba364d3b45c9674371 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_033654b75cb49320e0d02ede34e3438808d7834aa481d8ba364d3b45c9674371->enter($__internal_033654b75cb49320e0d02ede34e3438808d7834aa481d8ba364d3b45c9674371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/filterSeries.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _filterLimit = require('./filterLimit');

var _filterLimit2 = _interopRequireDefault(_filterLimit);

var _doLimit = require('./internal/doLimit');

var _doLimit2 = _interopRequireDefault(_doLimit);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * The same as [`filter`]{@link module:Collections.filter} but runs only a single async operation at a time.
 *
 * @name filterSeries
 * @static
 * @memberOf module:Collections
 * @method
 * @see [async.filter]{@link module:Collections.filter}
 * @alias selectSeries
 * @category Collection
 * @param {Array|Iterable|Object} coll - A collection to iterate over.
 * @param {Function} iteratee - A truth test to apply to each item in `coll`.
 * The `iteratee` is passed a `callback(err, truthValue)`, which must be called
 * with a boolean argument once it has completed. Invoked with (item, callback).
 * @param {Function} [callback] - A callback which is called after all the
 * `iteratee` functions have finished. Invoked with (err, results)
 */
exports.default = (0, _doLimit2.default)(_filterLimit2.default, 1);
module.exports = exports['default'];";
        
        $__internal_033654b75cb49320e0d02ede34e3438808d7834aa481d8ba364d3b45c9674371->leave($__internal_033654b75cb49320e0d02ede34e3438808d7834aa481d8ba364d3b45c9674371_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/filterSeries.js";
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

var _filterLimit = require('./filterLimit');

var _filterLimit2 = _interopRequireDefault(_filterLimit);

var _doLimit = require('./internal/doLimit');

var _doLimit2 = _interopRequireDefault(_doLimit);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * The same as [`filter`]{@link module:Collections.filter} but runs only a single async operation at a time.
 *
 * @name filterSeries
 * @static
 * @memberOf module:Collections
 * @method
 * @see [async.filter]{@link module:Collections.filter}
 * @alias selectSeries
 * @category Collection
 * @param {Array|Iterable|Object} coll - A collection to iterate over.
 * @param {Function} iteratee - A truth test to apply to each item in `coll`.
 * The `iteratee` is passed a `callback(err, truthValue)`, which must be called
 * with a boolean argument once it has completed. Invoked with (item, callback).
 * @param {Function} [callback] - A callback which is called after all the
 * `iteratee` functions have finished. Invoked with (err, results)
 */
exports.default = (0, _doLimit2.default)(_filterLimit2.default, 1);
module.exports = exports['default'];", "node_modules/async/filterSeries.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/filterSeries.js");
    }
}
