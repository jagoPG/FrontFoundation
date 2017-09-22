<?php

/* node_modules/har-validator/lib/browser/error.js */
class __TwigTemplate_134891d509a4c27c279df06d428a6ef11d7eab203af6ea4e7bbd38ce9639e335 extends Twig_Template
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
        $__internal_b4a4df79a8cfd84b19ef195101e13e2f84a823ad3cfe0b1d8534cf06fd94fa62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4a4df79a8cfd84b19ef195101e13e2f84a823ad3cfe0b1d8534cf06fd94fa62->enter($__internal_b4a4df79a8cfd84b19ef195101e13e2f84a823ad3cfe0b1d8534cf06fd94fa62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/har-validator/lib/browser/error.js"));

        // line 1
        echo "export default function HARError(errors) {
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

HARError.prototype = Error.prototype;";
        
        $__internal_b4a4df79a8cfd84b19ef195101e13e2f84a823ad3cfe0b1d8534cf06fd94fa62->leave($__internal_b4a4df79a8cfd84b19ef195101e13e2f84a823ad3cfe0b1d8534cf06fd94fa62_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/har-validator/lib/browser/error.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("export default function HARError(errors) {
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

HARError.prototype = Error.prototype;", "node_modules/har-validator/lib/browser/error.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/har-validator/lib/browser/error.js");
    }
}
