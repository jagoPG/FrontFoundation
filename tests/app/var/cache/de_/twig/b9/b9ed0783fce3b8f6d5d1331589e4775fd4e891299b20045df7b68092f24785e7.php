<?php

/* node_modules/har-validator/lib/node6/error.js */
class __TwigTemplate_83dbe5ae79a3ed3b3e962016890de845f99e05eaa8f0ac38d103dad21f3f1b97 extends Twig_Template
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
        $__internal_697fac28eab5f2ef584c3018e32515ec1b56bc9a367b831f109dd8725000c8b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_697fac28eab5f2ef584c3018e32515ec1b56bc9a367b831f109dd8725000c8b1->enter($__internal_697fac28eab5f2ef584c3018e32515ec1b56bc9a367b831f109dd8725000c8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/har-validator/lib/node6/error.js"));

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
        
        $__internal_697fac28eab5f2ef584c3018e32515ec1b56bc9a367b831f109dd8725000c8b1->leave($__internal_697fac28eab5f2ef584c3018e32515ec1b56bc9a367b831f109dd8725000c8b1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/har-validator/lib/node6/error.js";
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
module.exports = exports['default'];", "node_modules/har-validator/lib/node6/error.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/har-validator/lib/node6/error.js");
    }
}
