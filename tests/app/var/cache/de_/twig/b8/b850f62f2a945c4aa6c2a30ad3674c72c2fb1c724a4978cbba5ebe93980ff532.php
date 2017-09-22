<?php

/* node_modules/fsevents/node_modules/har-validator/lib/browser/async.js */
class __TwigTemplate_f62b95410fbbffc6e8a689bb75bfaa1dc4fbb4a15952ff347928289671497498 extends Twig_Template
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
        $__internal_317d24cf53c305d7d9f0fbd02bc9ce4fb04e6199c1dc318c94b58522d48846da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_317d24cf53c305d7d9f0fbd02bc9ce4fb04e6199c1dc318c94b58522d48846da->enter($__internal_317d24cf53c305d7d9f0fbd02bc9ce4fb04e6199c1dc318c94b58522d48846da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/har-validator/lib/browser/async.js"));

        // line 1
        echo "import * as schemas from 'har-schema';
import Ajv from 'ajv';
import HARError from './error';

let ajv;

export function validate(name, data = {}, next) {
  // validator config
  ajv = ajv || new Ajv({
    allErrors: true,
    schemas: schemas
  });

  let validate = ajv.getSchema(name + '.json');

  let valid = validate(data);

  // callback?
  if (typeof next === 'function') {
    return next(!valid ? new HARError(validate.errors) : null, valid);
  }

  return valid;
}

export function afterRequest(data, next) {
  return validate('afterRequest', data, next);
}

export function beforeRequest(data, next) {
  return validate('beforeRequest', data, next);
}

export function browser(data, next) {
  return validate('browser', data, next);
}

export function cache(data, next) {
  return validate('cache', data, next);
}

export function content(data, next) {
  return validate('content', data, next);
}

export function cookie(data, next) {
  return validate('cookie', data, next);
}

export function creator(data, next) {
  return validate('creator', data, next);
}

export function entry(data, next) {
  return validate('entry', data, next);
}

export function har(data, next) {
  return validate('har', data, next);
}

export function header(data, next) {
  return validate('header', data, next);
}

export function log(data, next) {
  return validate('log', data, next);
}

export function page(data, next) {
  return validate('page', data, next);
}

export function pageTimings(data, next) {
  return validate('pageTimings', data, next);
}

export function postData(data, next) {
  return validate('postData', data, next);
}

export function query(data, next) {
  return validate('query', data, next);
}

export function request(data, next) {
  return validate('request', data, next);
}

export function response(data, next) {
  return validate('response', data, next);
}

export function timings(data, next) {
  return validate('timings', data, next);
}";
        
        $__internal_317d24cf53c305d7d9f0fbd02bc9ce4fb04e6199c1dc318c94b58522d48846da->leave($__internal_317d24cf53c305d7d9f0fbd02bc9ce4fb04e6199c1dc318c94b58522d48846da_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/har-validator/lib/browser/async.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("import * as schemas from 'har-schema';
import Ajv from 'ajv';
import HARError from './error';

let ajv;

export function validate(name, data = {}, next) {
  // validator config
  ajv = ajv || new Ajv({
    allErrors: true,
    schemas: schemas
  });

  let validate = ajv.getSchema(name + '.json');

  let valid = validate(data);

  // callback?
  if (typeof next === 'function') {
    return next(!valid ? new HARError(validate.errors) : null, valid);
  }

  return valid;
}

export function afterRequest(data, next) {
  return validate('afterRequest', data, next);
}

export function beforeRequest(data, next) {
  return validate('beforeRequest', data, next);
}

export function browser(data, next) {
  return validate('browser', data, next);
}

export function cache(data, next) {
  return validate('cache', data, next);
}

export function content(data, next) {
  return validate('content', data, next);
}

export function cookie(data, next) {
  return validate('cookie', data, next);
}

export function creator(data, next) {
  return validate('creator', data, next);
}

export function entry(data, next) {
  return validate('entry', data, next);
}

export function har(data, next) {
  return validate('har', data, next);
}

export function header(data, next) {
  return validate('header', data, next);
}

export function log(data, next) {
  return validate('log', data, next);
}

export function page(data, next) {
  return validate('page', data, next);
}

export function pageTimings(data, next) {
  return validate('pageTimings', data, next);
}

export function postData(data, next) {
  return validate('postData', data, next);
}

export function query(data, next) {
  return validate('query', data, next);
}

export function request(data, next) {
  return validate('request', data, next);
}

export function response(data, next) {
  return validate('response', data, next);
}

export function timings(data, next) {
  return validate('timings', data, next);
}", "node_modules/fsevents/node_modules/har-validator/lib/browser/async.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/har-validator/lib/browser/async.js");
    }
}
