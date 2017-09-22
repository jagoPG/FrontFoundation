<?php

/* node_modules/fsevents/node_modules/har-validator/lib/browser/error.js */
class __TwigTemplate_486e069315dd2fd546e6c6724e00554952a9d05b71aaee0ca05c7f83cf0bd4df extends Twig_Template
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
        $__internal_3582d385fbcd6e7d222dcc52e05c76c495e44e2e24e84a40326decbac151d13e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3582d385fbcd6e7d222dcc52e05c76c495e44e2e24e84a40326decbac151d13e->enter($__internal_3582d385fbcd6e7d222dcc52e05c76c495e44e2e24e84a40326decbac151d13e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/har-validator/lib/browser/error.js"));

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
        
        $__internal_3582d385fbcd6e7d222dcc52e05c76c495e44e2e24e84a40326decbac151d13e->leave($__internal_3582d385fbcd6e7d222dcc52e05c76c495e44e2e24e84a40326decbac151d13e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/har-validator/lib/browser/error.js";
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

HARError.prototype = Error.prototype;", "node_modules/fsevents/node_modules/har-validator/lib/browser/error.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/har-validator/lib/browser/error.js");
    }
}
