<?php

/* node_modules/fsevents/node_modules/ajv/lib/compile/validation_error.js */
class __TwigTemplate_f7cf72dc3e7a8027c0fc781691aa4f57973f6adf3bc723a5d92298a8371ef060 extends Twig_Template
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
        $__internal_5476581b44f377abfba9c3e933d6f7a96df9634d3dc32b057efbc7b34a27ec8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5476581b44f377abfba9c3e933d6f7a96df9634d3dc32b057efbc7b34a27ec8c->enter($__internal_5476581b44f377abfba9c3e933d6f7a96df9634d3dc32b057efbc7b34a27ec8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/ajv/lib/compile/validation_error.js"));

        // line 1
        echo "'use strict';

module.exports = ValidationError;


function ValidationError(errors) {
  this.message = 'validation failed';
  this.errors = errors;
  this.ajv = this.validation = true;
}


ValidationError.prototype = Object.create(Error.prototype);
ValidationError.prototype.constructor = ValidationError;
";
        
        $__internal_5476581b44f377abfba9c3e933d6f7a96df9634d3dc32b057efbc7b34a27ec8c->leave($__internal_5476581b44f377abfba9c3e933d6f7a96df9634d3dc32b057efbc7b34a27ec8c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/ajv/lib/compile/validation_error.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

module.exports = ValidationError;


function ValidationError(errors) {
  this.message = 'validation failed';
  this.errors = errors;
  this.ajv = this.validation = true;
}


ValidationError.prototype = Object.create(Error.prototype);
ValidationError.prototype.constructor = ValidationError;
", "node_modules/fsevents/node_modules/ajv/lib/compile/validation_error.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/ajv/lib/compile/validation_error.js");
    }
}
