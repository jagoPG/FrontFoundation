<?php

/* node_modules/har-validator/src/error.js */
class __TwigTemplate_dddf995fc8f7568cfd205e7470931f8cd8c0725a4f93a9e44952d05c6a4a7f8d extends Twig_Template
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
        $__internal_18b72c6d4a29db5f63e90d75cb5b83dcecc0f144842750dc79f9a5349d1ee9a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18b72c6d4a29db5f63e90d75cb5b83dcecc0f144842750dc79f9a5349d1ee9a5->enter($__internal_18b72c6d4a29db5f63e90d75cb5b83dcecc0f144842750dc79f9a5349d1ee9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/har-validator/src/error.js"));

        // line 1
        echo "export default function HARError (errors) {
  let message = 'validation failed'

  this.name = 'HARError'
  this.message = message
  this.errors = errors

  if (typeof Error.captureStackTrace === 'function') {
    Error.captureStackTrace(this, this.constructor)
  } else {
    this.stack = (new Error(message)).stack
  }
}

HARError.prototype = Error.prototype
";
        
        $__internal_18b72c6d4a29db5f63e90d75cb5b83dcecc0f144842750dc79f9a5349d1ee9a5->leave($__internal_18b72c6d4a29db5f63e90d75cb5b83dcecc0f144842750dc79f9a5349d1ee9a5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/har-validator/src/error.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("export default function HARError (errors) {
  let message = 'validation failed'

  this.name = 'HARError'
  this.message = message
  this.errors = errors

  if (typeof Error.captureStackTrace === 'function') {
    Error.captureStackTrace(this, this.constructor)
  } else {
    this.stack = (new Error(message)).stack
  }
}

HARError.prototype = Error.prototype
", "node_modules/har-validator/src/error.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/har-validator/src/error.js");
    }
}
