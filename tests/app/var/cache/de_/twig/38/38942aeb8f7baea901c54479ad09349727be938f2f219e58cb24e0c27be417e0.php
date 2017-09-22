<?php

/* node_modules/fsevents/node_modules/har-validator/lib/node7/async.js */
class __TwigTemplate_c1bee4e255b4270703bf90c128f0ef35ff6e9f6e332e247263828d269b846761 extends Twig_Template
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
        $__internal_4b5b81e7bb66602ab2b897e568014aa7521bdc6d103d714008fa9a750767cc0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b5b81e7bb66602ab2b897e568014aa7521bdc6d103d714008fa9a750767cc0c->enter($__internal_4b5b81e7bb66602ab2b897e568014aa7521bdc6d103d714008fa9a750767cc0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/har-validator/lib/node7/async.js"));

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

let ajv;

function validate(name, data = {}, next) {
  // validator config
  ajv = ajv || new _ajv2.default({
    allErrors: true,
    schemas: schemas
  });

  let validate = ajv.getSchema(name + '.json');

  let valid = validate(data);

  // callback?
  if (typeof next === 'function') {
    return next(!valid ? new _error2.default(validate.errors) : null, valid);
  }

  return valid;
}

function afterRequest(data, next) {
  return validate('afterRequest', data, next);
}

function beforeRequest(data, next) {
  return validate('beforeRequest', data, next);
}

function browser(data, next) {
  return validate('browser', data, next);
}

function cache(data, next) {
  return validate('cache', data, next);
}

function content(data, next) {
  return validate('content', data, next);
}

function cookie(data, next) {
  return validate('cookie', data, next);
}

function creator(data, next) {
  return validate('creator', data, next);
}

function entry(data, next) {
  return validate('entry', data, next);
}

function har(data, next) {
  return validate('har', data, next);
}

function header(data, next) {
  return validate('header', data, next);
}

function log(data, next) {
  return validate('log', data, next);
}

function page(data, next) {
  return validate('page', data, next);
}

function pageTimings(data, next) {
  return validate('pageTimings', data, next);
}

function postData(data, next) {
  return validate('postData', data, next);
}

function query(data, next) {
  return validate('query', data, next);
}

function request(data, next) {
  return validate('request', data, next);
}

function response(data, next) {
  return validate('response', data, next);
}

function timings(data, next) {
  return validate('timings', data, next);
}";
        
        $__internal_4b5b81e7bb66602ab2b897e568014aa7521bdc6d103d714008fa9a750767cc0c->leave($__internal_4b5b81e7bb66602ab2b897e568014aa7521bdc6d103d714008fa9a750767cc0c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/har-validator/lib/node7/async.js";
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

let ajv;

function validate(name, data = {}, next) {
  // validator config
  ajv = ajv || new _ajv2.default({
    allErrors: true,
    schemas: schemas
  });

  let validate = ajv.getSchema(name + '.json');

  let valid = validate(data);

  // callback?
  if (typeof next === 'function') {
    return next(!valid ? new _error2.default(validate.errors) : null, valid);
  }

  return valid;
}

function afterRequest(data, next) {
  return validate('afterRequest', data, next);
}

function beforeRequest(data, next) {
  return validate('beforeRequest', data, next);
}

function browser(data, next) {
  return validate('browser', data, next);
}

function cache(data, next) {
  return validate('cache', data, next);
}

function content(data, next) {
  return validate('content', data, next);
}

function cookie(data, next) {
  return validate('cookie', data, next);
}

function creator(data, next) {
  return validate('creator', data, next);
}

function entry(data, next) {
  return validate('entry', data, next);
}

function har(data, next) {
  return validate('har', data, next);
}

function header(data, next) {
  return validate('header', data, next);
}

function log(data, next) {
  return validate('log', data, next);
}

function page(data, next) {
  return validate('page', data, next);
}

function pageTimings(data, next) {
  return validate('pageTimings', data, next);
}

function postData(data, next) {
  return validate('postData', data, next);
}

function query(data, next) {
  return validate('query', data, next);
}

function request(data, next) {
  return validate('request', data, next);
}

function response(data, next) {
  return validate('response', data, next);
}

function timings(data, next) {
  return validate('timings', data, next);
}", "node_modules/fsevents/node_modules/har-validator/lib/node7/async.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/har-validator/lib/node7/async.js");
    }
}
