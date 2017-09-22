<?php

/* node_modules/fsevents/node_modules/har-validator/lib/node7/error.js */
class __TwigTemplate_356a4b99d444fd5af9d6e3071927535c45b71a664c6feef58d80cdd53037937d extends Twig_Template
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
        $__internal_6b270b725f2ba5282907d185de746f103d6e8bb1b8a0bf29cc726955ea5c0486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b270b725f2ba5282907d185de746f103d6e8bb1b8a0bf29cc726955ea5c0486->enter($__internal_6b270b725f2ba5282907d185de746f103d6e8bb1b8a0bf29cc726955ea5c0486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/har-validator/lib/node7/error.js"));

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
        
        $__internal_6b270b725f2ba5282907d185de746f103d6e8bb1b8a0bf29cc726955ea5c0486->leave($__internal_6b270b725f2ba5282907d185de746f103d6e8bb1b8a0bf29cc726955ea5c0486_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/har-validator/lib/node7/error.js";
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
module.exports = exports['default'];", "node_modules/fsevents/node_modules/har-validator/lib/node7/error.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/har-validator/lib/node7/error.js");
    }
}
