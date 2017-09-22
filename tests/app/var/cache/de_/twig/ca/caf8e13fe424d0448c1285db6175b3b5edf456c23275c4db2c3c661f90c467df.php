<?php

/* node_modules/async/internal/parallel.js */
class __TwigTemplate_bf052bbe9f4bd280e0ad367f18a8cb4e33d66fb44344595716f851b6c1c5d702 extends Twig_Template
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
        $__internal_bd41f235266110b2f10e4bd1865c4d83dc7c7ab2623ed914ffc9b6c2c5a62d6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd41f235266110b2f10e4bd1865c4d83dc7c7ab2623ed914ffc9b6c2c5a62d6b->enter($__internal_bd41f235266110b2f10e4bd1865c4d83dc7c7ab2623ed914ffc9b6c2c5a62d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/internal/parallel.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
    value: true
});
exports.default = _parallel;

var _noop = require('lodash/noop');

var _noop2 = _interopRequireDefault(_noop);

var _isArrayLike = require('lodash/isArrayLike');

var _isArrayLike2 = _interopRequireDefault(_isArrayLike);

var _slice = require('./slice');

var _slice2 = _interopRequireDefault(_slice);

var _wrapAsync = require('./wrapAsync');

var _wrapAsync2 = _interopRequireDefault(_wrapAsync);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _parallel(eachfn, tasks, callback) {
    callback = callback || _noop2.default;
    var results = (0, _isArrayLike2.default)(tasks) ? [] : {};

    eachfn(tasks, function (task, key, callback) {
        (0, _wrapAsync2.default)(task)(function (err, result) {
            if (arguments.length > 2) {
                result = (0, _slice2.default)(arguments, 1);
            }
            results[key] = result;
            callback(err);
        });
    }, function (err) {
        callback(err, results);
    });
}
module.exports = exports['default'];";
        
        $__internal_bd41f235266110b2f10e4bd1865c4d83dc7c7ab2623ed914ffc9b6c2c5a62d6b->leave($__internal_bd41f235266110b2f10e4bd1865c4d83dc7c7ab2623ed914ffc9b6c2c5a62d6b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/internal/parallel.js";
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
exports.default = _parallel;

var _noop = require('lodash/noop');

var _noop2 = _interopRequireDefault(_noop);

var _isArrayLike = require('lodash/isArrayLike');

var _isArrayLike2 = _interopRequireDefault(_isArrayLike);

var _slice = require('./slice');

var _slice2 = _interopRequireDefault(_slice);

var _wrapAsync = require('./wrapAsync');

var _wrapAsync2 = _interopRequireDefault(_wrapAsync);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _parallel(eachfn, tasks, callback) {
    callback = callback || _noop2.default;
    var results = (0, _isArrayLike2.default)(tasks) ? [] : {};

    eachfn(tasks, function (task, key, callback) {
        (0, _wrapAsync2.default)(task)(function (err, result) {
            if (arguments.length > 2) {
                result = (0, _slice2.default)(arguments, 1);
            }
            results[key] = result;
            callback(err);
        });
    }, function (err) {
        callback(err, results);
    });
}
module.exports = exports['default'];", "node_modules/async/internal/parallel.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/internal/parallel.js");
    }
}
