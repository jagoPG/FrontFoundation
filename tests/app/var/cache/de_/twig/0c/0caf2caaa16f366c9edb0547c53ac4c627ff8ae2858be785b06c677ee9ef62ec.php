<?php

/* node_modules/ajv/lib/compile/error_classes.js */
class __TwigTemplate_e87b91f31fb38e2949d51de2afa7e2d80b45e23f254fd7e905be0fea5cdd5ff1 extends Twig_Template
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
        $__internal_7f0ba6c4c8388b5793efc3a32e330519061dfd38c9f62afb7fce59c4b6991f7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f0ba6c4c8388b5793efc3a32e330519061dfd38c9f62afb7fce59c4b6991f7f->enter($__internal_7f0ba6c4c8388b5793efc3a32e330519061dfd38c9f62afb7fce59c4b6991f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ajv/lib/compile/error_classes.js"));

        // line 1
        echo "'use strict';

var resolve = require('./resolve');

module.exports = {
  Validation: errorSubclass(ValidationError),
  MissingRef: errorSubclass(MissingRefError)
};


function ValidationError(errors) {
  this.message = 'validation failed';
  this.errors = errors;
  this.ajv = this.validation = true;
}


MissingRefError.message = function (baseId, ref) {
  return 'can\\'t resolve reference ' + ref + ' from id ' + baseId;
};


function MissingRefError(baseId, ref, message) {
  this.message = message || MissingRefError.message(baseId, ref);
  this.missingRef = resolve.url(baseId, ref);
  this.missingSchema = resolve.normalizeId(resolve.fullPath(this.missingRef));
}


function errorSubclass(Subclass) {
  Subclass.prototype = Object.create(Error.prototype);
  Subclass.prototype.constructor = Subclass;
  return Subclass;
}
";
        
        $__internal_7f0ba6c4c8388b5793efc3a32e330519061dfd38c9f62afb7fce59c4b6991f7f->leave($__internal_7f0ba6c4c8388b5793efc3a32e330519061dfd38c9f62afb7fce59c4b6991f7f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ajv/lib/compile/error_classes.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var resolve = require('./resolve');

module.exports = {
  Validation: errorSubclass(ValidationError),
  MissingRef: errorSubclass(MissingRefError)
};


function ValidationError(errors) {
  this.message = 'validation failed';
  this.errors = errors;
  this.ajv = this.validation = true;
}


MissingRefError.message = function (baseId, ref) {
  return 'can\\'t resolve reference ' + ref + ' from id ' + baseId;
};


function MissingRefError(baseId, ref, message) {
  this.message = message || MissingRefError.message(baseId, ref);
  this.missingRef = resolve.url(baseId, ref);
  this.missingSchema = resolve.normalizeId(resolve.fullPath(this.missingRef));
}


function errorSubclass(Subclass) {
  Subclass.prototype = Object.create(Error.prototype);
  Subclass.prototype.constructor = Subclass;
  return Subclass;
}
", "node_modules/ajv/lib/compile/error_classes.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ajv/lib/compile/error_classes.js");
    }
}
