<?php

/* node_modules/fsevents/node_modules/har-validator/src/promise.js */
class __TwigTemplate_80dfa683e7fbfc525665c8882797b4ae01d482fb3a599dab475cbf0edd7b685c extends Twig_Template
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
        $__internal_96a301d16fd22a5a32c9b40989f31d68d31837b67a9f15204ac2a44416c0bd26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96a301d16fd22a5a32c9b40989f31d68d31837b67a9f15204ac2a44416c0bd26->enter($__internal_96a301d16fd22a5a32c9b40989f31d68d31837b67a9f15204ac2a44416c0bd26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/har-validator/src/promise.js"));

        // line 1
        echo "import * as schemas from 'har-schema'
import Ajv from 'ajv'
import HARError from './error'

let ajv

export function validate (name, data = {}) {
  // validator config
  ajv = ajv || new Ajv({
    allErrors: true,
    schemas: schemas
  })

  let validate = ajv.getSchema(name + '.json')

  return new Promise((resolve, reject) => {
    let valid = validate(data)

    !valid ? reject(new HARError(validate.errors)) : resolve(data)
  })
}

export function afterRequest (data) {
  return validate('afterRequest', data)
}

export function beforeRequest (data) {
  return validate('beforeRequest', data)
}

export function browser (data) {
  return validate('browser', data)
}

export function cache (data) {
  return validate('cache', data)
}

export function content (data) {
  return validate('content', data)
}

export function cookie (data) {
  return validate('cookie', data)
}

export function creator (data) {
  return validate('creator', data)
}

export function entry (data) {
  return validate('entry', data)
}

export function har (data) {
  return validate('har', data)
}

export function header (data) {
  return validate('header', data)
}

export function log (data) {
  return validate('log', data)
}

export function page (data) {
  return validate('page', data)
}

export function pageTimings (data) {
  return validate('pageTimings', data)
}

export function postData (data) {
  return validate('postData', data)
}

export function query (data) {
  return validate('query', data)
}

export function request (data) {
  return validate('request', data)
}

export function response (data) {
  return validate('response', data)
}

export function timings (data) {
  return validate('timings', data)
}
";
        
        $__internal_96a301d16fd22a5a32c9b40989f31d68d31837b67a9f15204ac2a44416c0bd26->leave($__internal_96a301d16fd22a5a32c9b40989f31d68d31837b67a9f15204ac2a44416c0bd26_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/har-validator/src/promise.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("import * as schemas from 'har-schema'
import Ajv from 'ajv'
import HARError from './error'

let ajv

export function validate (name, data = {}) {
  // validator config
  ajv = ajv || new Ajv({
    allErrors: true,
    schemas: schemas
  })

  let validate = ajv.getSchema(name + '.json')

  return new Promise((resolve, reject) => {
    let valid = validate(data)

    !valid ? reject(new HARError(validate.errors)) : resolve(data)
  })
}

export function afterRequest (data) {
  return validate('afterRequest', data)
}

export function beforeRequest (data) {
  return validate('beforeRequest', data)
}

export function browser (data) {
  return validate('browser', data)
}

export function cache (data) {
  return validate('cache', data)
}

export function content (data) {
  return validate('content', data)
}

export function cookie (data) {
  return validate('cookie', data)
}

export function creator (data) {
  return validate('creator', data)
}

export function entry (data) {
  return validate('entry', data)
}

export function har (data) {
  return validate('har', data)
}

export function header (data) {
  return validate('header', data)
}

export function log (data) {
  return validate('log', data)
}

export function page (data) {
  return validate('page', data)
}

export function pageTimings (data) {
  return validate('pageTimings', data)
}

export function postData (data) {
  return validate('postData', data)
}

export function query (data) {
  return validate('query', data)
}

export function request (data) {
  return validate('request', data)
}

export function response (data) {
  return validate('response', data)
}

export function timings (data) {
  return validate('timings', data)
}
", "node_modules/fsevents/node_modules/har-validator/src/promise.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/har-validator/src/promise.js");
    }
}
