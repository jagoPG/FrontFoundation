<?php

/* node_modules/har-validator/node_modules/ajv/lib/compile/validation_error.js */
class __TwigTemplate_627fe86976ab83a4e4942a6d6cfb23cc0081200508d34765d5a0aaebe66e93f1 extends Twig_Template
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
        $__internal_8a8df0327d0cd6560ce4d825c69fc9410eef9199cf45205f9f547e3254085818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a8df0327d0cd6560ce4d825c69fc9410eef9199cf45205f9f547e3254085818->enter($__internal_8a8df0327d0cd6560ce4d825c69fc9410eef9199cf45205f9f547e3254085818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/har-validator/node_modules/ajv/lib/compile/validation_error.js"));

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
        
        $__internal_8a8df0327d0cd6560ce4d825c69fc9410eef9199cf45205f9f547e3254085818->leave($__internal_8a8df0327d0cd6560ce4d825c69fc9410eef9199cf45205f9f547e3254085818_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/har-validator/node_modules/ajv/lib/compile/validation_error.js";
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
", "node_modules/har-validator/node_modules/ajv/lib/compile/validation_error.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/har-validator/node_modules/ajv/lib/compile/validation_error.js");
    }
}
