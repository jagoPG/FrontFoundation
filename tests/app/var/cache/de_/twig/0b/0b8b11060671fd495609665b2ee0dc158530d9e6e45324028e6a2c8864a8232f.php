<?php

/* node_modules/har-validator/lib/node4/promise.js */
class __TwigTemplate_362926aace02be103d52780f0544585a052682bd33306b19dd7da1f56b687e35 extends Twig_Template
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
        $__internal_65fb7cf7a27dae766e6921acb55a0d6e5466005b03e8b0ed8fed8fc0a7790785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65fb7cf7a27dae766e6921acb55a0d6e5466005b03e8b0ed8fed8fc0a7790785->enter($__internal_65fb7cf7a27dae766e6921acb55a0d6e5466005b03e8b0ed8fed8fc0a7790785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/har-validator/lib/node4/promise.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
  value: true
});
exports.validate = validate;
exports.afterRequest = afterRequest;
exports.beforeRequest = beforeRequest;
exports.browser = browser;
exports.cache = cache;
exports.content = content;
exports.cookie = cookie;
exports.creator = creator;
exports.entry = entry;
exports.har = har;
exports.header = header;
exports.log = log;
exports.page = page;
exports.pageTimings = pageTimings;
exports.postData = postData;
exports.query = query;
exports.request = request;
exports.response = response;
exports.timings = timings;

var _harSchema = require('har-schema');

var schemas = _interopRequireWildcard(_harSchema);

var _ajv = require('ajv');

var _ajv2 = _interopRequireDefault(_ajv);

var _error = require('./error');

var _error2 = _interopRequireDefault(_error);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

var ajv = void 0;

function validate(name) {
  var data = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};

  // validator config
  ajv = ajv || new _ajv2.default({
    allErrors: true,
    schemas: schemas
  });

  var validate = ajv.getSchema(name + '.json');

  return new Promise(function (resolve, reject) {
    var valid = validate(data);

    !valid ? reject(new _error2.default(validate.errors)) : resolve(data);
  });
}

function afterRequest(data) {
  return validate('afterRequest', data);
}

function beforeRequest(data) {
  return validate('beforeRequest', data);
}

function browser(data) {
  return validate('browser', data);
}

function cache(data) {
  return validate('cache', data);
}

function content(data) {
  return validate('content', data);
}

function cookie(data) {
  return validate('cookie', data);
}

function creator(data) {
  return validate('creator', data);
}

function entry(data) {
  return validate('entry', data);
}

function har(data) {
  return validate('har', data);
}

function header(data) {
  return validate('header', data);
}

function log(data) {
  return validate('log', data);
}

function page(data) {
  return validate('page', data);
}

function pageTimings(data) {
  return validate('pageTimings', data);
}

function postData(data) {
  return validate('postData', data);
}

function query(data) {
  return validate('query', data);
}

function request(data) {
  return validate('request', data);
}

function response(data) {
  return validate('response', data);
}

function timings(data) {
  return validate('timings', data);
}";
        
        $__internal_65fb7cf7a27dae766e6921acb55a0d6e5466005b03e8b0ed8fed8fc0a7790785->leave($__internal_65fb7cf7a27dae766e6921acb55a0d6e5466005b03e8b0ed8fed8fc0a7790785_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/har-validator/lib/node4/promise.js";
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
exports.validate = validate;
exports.afterRequest = afterRequest;
exports.beforeRequest = beforeRequest;
exports.browser = browser;
exports.cache = cache;
exports.content = content;
exports.cookie = cookie;
exports.creator = creator;
exports.entry = entry;
exports.har = har;
exports.header = header;
exports.log = log;
exports.page = page;
exports.pageTimings = pageTimings;
exports.postData = postData;
exports.query = query;
exports.request = request;
exports.response = response;
exports.timings = timings;

var _harSchema = require('har-schema');

var schemas = _interopRequireWildcard(_harSchema);

var _ajv = require('ajv');

var _ajv2 = _interopRequireDefault(_ajv);

var _error = require('./error');

var _error2 = _interopRequireDefault(_error);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

var ajv = void 0;

function validate(name) {
  var data = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};

  // validator config
  ajv = ajv || new _ajv2.default({
    allErrors: true,
    schemas: schemas
  });

  var validate = ajv.getSchema(name + '.json');

  return new Promise(function (resolve, reject) {
    var valid = validate(data);

    !valid ? reject(new _error2.default(validate.errors)) : resolve(data);
  });
}

function afterRequest(data) {
  return validate('afterRequest', data);
}

function beforeRequest(data) {
  return validate('beforeRequest', data);
}

function browser(data) {
  return validate('browser', data);
}

function cache(data) {
  return validate('cache', data);
}

function content(data) {
  return validate('content', data);
}

function cookie(data) {
  return validate('cookie', data);
}

function creator(data) {
  return validate('creator', data);
}

function entry(data) {
  return validate('entry', data);
}

function har(data) {
  return validate('har', data);
}

function header(data) {
  return validate('header', data);
}

function log(data) {
  return validate('log', data);
}

function page(data) {
  return validate('page', data);
}

function pageTimings(data) {
  return validate('pageTimings', data);
}

function postData(data) {
  return validate('postData', data);
}

function query(data) {
  return validate('query', data);
}

function request(data) {
  return validate('request', data);
}

function response(data) {
  return validate('response', data);
}

function timings(data) {
  return validate('timings', data);
}", "node_modules/har-validator/lib/node4/promise.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/har-validator/lib/node4/promise.js");
    }
}
