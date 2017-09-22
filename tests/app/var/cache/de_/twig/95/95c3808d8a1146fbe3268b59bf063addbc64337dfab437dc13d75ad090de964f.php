<?php

/* node_modules/har-validator/lib/node4/error.js */
class __TwigTemplate_957723260e474f55e5a7ba376bba4ef318b91dd8c1c44779301ad6f8bfee1234 extends Twig_Template
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
        $__internal_d30fddd77e12f508289be1108b9924c0f7878519e91b7b6fe3f49290b374d0e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d30fddd77e12f508289be1108b9924c0f7878519e91b7b6fe3f49290b374d0e4->enter($__internal_d30fddd77e12f508289be1108b9924c0f7878519e91b7b6fe3f49290b374d0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/har-validator/lib/node4/error.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
  value: true
});
exports.default = HARError;
function HARError(errors) {
  var message = 'validation failed';

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
        
        $__internal_d30fddd77e12f508289be1108b9924c0f7878519e91b7b6fe3f49290b374d0e4->leave($__internal_d30fddd77e12f508289be1108b9924c0f7878519e91b7b6fe3f49290b374d0e4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/har-validator/lib/node4/error.js";
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
  var message = 'validation failed';

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
module.exports = exports['default'];", "node_modules/har-validator/lib/node4/error.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/har-validator/lib/node4/error.js");
    }
}
