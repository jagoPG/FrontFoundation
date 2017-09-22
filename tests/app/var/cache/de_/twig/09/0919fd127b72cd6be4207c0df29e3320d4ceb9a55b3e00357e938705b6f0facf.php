<?php

/* node_modules/async/internal/filter.js */
class __TwigTemplate_0acbd4c5a5d7132a3273777069048e32e5629a9e487550f48bcaad88a30da3f9 extends Twig_Template
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
        $__internal_2a8f48eb090c69ceda05efecfc22933ac1607aa91e75c3cc731fd572a6be2e35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a8f48eb090c69ceda05efecfc22933ac1607aa91e75c3cc731fd572a6be2e35->enter($__internal_2a8f48eb090c69ceda05efecfc22933ac1607aa91e75c3cc731fd572a6be2e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/internal/filter.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
    value: true
});
exports.default = _filter;

var _arrayMap = require('lodash/_arrayMap');

var _arrayMap2 = _interopRequireDefault(_arrayMap);

var _isArrayLike = require('lodash/isArrayLike');

var _isArrayLike2 = _interopRequireDefault(_isArrayLike);

var _baseProperty = require('lodash/_baseProperty');

var _baseProperty2 = _interopRequireDefault(_baseProperty);

var _noop = require('lodash/noop');

var _noop2 = _interopRequireDefault(_noop);

var _wrapAsync = require('./wrapAsync');

var _wrapAsync2 = _interopRequireDefault(_wrapAsync);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function filterArray(eachfn, arr, iteratee, callback) {
    var truthValues = new Array(arr.length);
    eachfn(arr, function (x, index, callback) {
        iteratee(x, function (err, v) {
            truthValues[index] = !!v;
            callback(err);
        });
    }, function (err) {
        if (err) return callback(err);
        var results = [];
        for (var i = 0; i < arr.length; i++) {
            if (truthValues[i]) results.push(arr[i]);
        }
        callback(null, results);
    });
}

function filterGeneric(eachfn, coll, iteratee, callback) {
    var results = [];
    eachfn(coll, function (x, index, callback) {
        iteratee(x, function (err, v) {
            if (err) {
                callback(err);
            } else {
                if (v) {
                    results.push({ index: index, value: x });
                }
                callback();
            }
        });
    }, function (err) {
        if (err) {
            callback(err);
        } else {
            callback(null, (0, _arrayMap2.default)(results.sort(function (a, b) {
                return a.index - b.index;
            }), (0, _baseProperty2.default)('value')));
        }
    });
}

function _filter(eachfn, coll, iteratee, callback) {
    var filter = (0, _isArrayLike2.default)(coll) ? filterArray : filterGeneric;
    filter(eachfn, coll, (0, _wrapAsync2.default)(iteratee), callback || _noop2.default);
}
module.exports = exports['default'];";
        
        $__internal_2a8f48eb090c69ceda05efecfc22933ac1607aa91e75c3cc731fd572a6be2e35->leave($__internal_2a8f48eb090c69ceda05efecfc22933ac1607aa91e75c3cc731fd572a6be2e35_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/internal/filter.js";
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
exports.default = _filter;

var _arrayMap = require('lodash/_arrayMap');

var _arrayMap2 = _interopRequireDefault(_arrayMap);

var _isArrayLike = require('lodash/isArrayLike');

var _isArrayLike2 = _interopRequireDefault(_isArrayLike);

var _baseProperty = require('lodash/_baseProperty');

var _baseProperty2 = _interopRequireDefault(_baseProperty);

var _noop = require('lodash/noop');

var _noop2 = _interopRequireDefault(_noop);

var _wrapAsync = require('./wrapAsync');

var _wrapAsync2 = _interopRequireDefault(_wrapAsync);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function filterArray(eachfn, arr, iteratee, callback) {
    var truthValues = new Array(arr.length);
    eachfn(arr, function (x, index, callback) {
        iteratee(x, function (err, v) {
            truthValues[index] = !!v;
            callback(err);
        });
    }, function (err) {
        if (err) return callback(err);
        var results = [];
        for (var i = 0; i < arr.length; i++) {
            if (truthValues[i]) results.push(arr[i]);
        }
        callback(null, results);
    });
}

function filterGeneric(eachfn, coll, iteratee, callback) {
    var results = [];
    eachfn(coll, function (x, index, callback) {
        iteratee(x, function (err, v) {
            if (err) {
                callback(err);
            } else {
                if (v) {
                    results.push({ index: index, value: x });
                }
                callback();
            }
        });
    }, function (err) {
        if (err) {
            callback(err);
        } else {
            callback(null, (0, _arrayMap2.default)(results.sort(function (a, b) {
                return a.index - b.index;
            }), (0, _baseProperty2.default)('value')));
        }
    });
}

function _filter(eachfn, coll, iteratee, callback) {
    var filter = (0, _isArrayLike2.default)(coll) ? filterArray : filterGeneric;
    filter(eachfn, coll, (0, _wrapAsync2.default)(iteratee), callback || _noop2.default);
}
module.exports = exports['default'];", "node_modules/async/internal/filter.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/internal/filter.js");
    }
}
