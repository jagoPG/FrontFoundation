<?php

/* node_modules/fsevents/node_modules/har-validator/lib/node6/error.js */
class __TwigTemplate_2c9a9468dcb4a7583c87e2150c5c630141a1f9c6b7bca0aa5e77e3d7c29a31e5 extends Twig_Template
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
        $__internal_75b8ef910d1b20612da9fcb044702ba096af2b82c6beaf335356a1d96baec3d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75b8ef910d1b20612da9fcb044702ba096af2b82c6beaf335356a1d96baec3d5->enter($__internal_75b8ef910d1b20612da9fcb044702ba096af2b82c6beaf335356a1d96baec3d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/har-validator/lib/node6/error.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
  value: true
});
exports.default = HARError;
function HARError(errors) {
  let message = 'validation failed';

  this.name = 'HARError';
  this.message = message;
  this.errors = errors;

  if (typeof Error.captureStackTrace === 'function') {
    Error.captureStackTrace(this, this.constructor);
  } else {
    this.stack = new Error(message).stack;
  }
}

HARError.prototype = Error.prototype;
module.exports = exports['default'];";
        
        $__internal_75b8ef910d1b20612da9fcb044702ba096af2b82c6beaf335356a1d96baec3d5->leave($__internal_75b8ef910d1b20612da9fcb044702ba096af2b82c6beaf335356a1d96baec3d5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/har-validator/lib/node6/error.js";
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
exports.default = HARError;
function HARError(errors) {
  let message = 'validation failed';

  this.name = 'HARError';
  this.message = message;
  this.errors = errors;

  if (typeof Error.captureStackTrace === 'function') {
    Error.captureStackTrace(this, this.constructor);
  } else {
    this.stack = new Error(message).stack;
  }
}

HARError.prototype = Error.prototype;
module.exports = exports['default'];", "node_modules/fsevents/node_modules/har-validator/lib/node6/error.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/har-validator/lib/node6/error.js");
    }
}
