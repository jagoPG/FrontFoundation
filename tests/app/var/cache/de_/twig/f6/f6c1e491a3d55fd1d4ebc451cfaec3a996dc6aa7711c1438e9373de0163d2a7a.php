<?php

/* node_modules/har-validator/lib/node7/error.js */
class __TwigTemplate_4f2bdaabecc622e2d826652e6aeb848264f92a0fb2e22f5d157cd26452446ed7 extends Twig_Template
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
        $__internal_c2a26f8303201d7b62b297f5adf8634daafa8708328004b216a123f4c2fca3f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2a26f8303201d7b62b297f5adf8634daafa8708328004b216a123f4c2fca3f2->enter($__internal_c2a26f8303201d7b62b297f5adf8634daafa8708328004b216a123f4c2fca3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/har-validator/lib/node7/error.js"));

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
        
        $__internal_c2a26f8303201d7b62b297f5adf8634daafa8708328004b216a123f4c2fca3f2->leave($__internal_c2a26f8303201d7b62b297f5adf8634daafa8708328004b216a123f4c2fca3f2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/har-validator/lib/node7/error.js";
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
module.exports = exports['default'];", "node_modules/har-validator/lib/node7/error.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/har-validator/lib/node7/error.js");
    }
}