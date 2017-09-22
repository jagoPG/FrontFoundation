<?php

/* node_modules/fsevents/node_modules/har-validator/src/error.js */
class __TwigTemplate_4dc7864639bd8c033e498084b40cb44f95b15400ca3c1c4f5db06e3f749e41de extends Twig_Template
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
        $__internal_58a85809d4b605fcc82229e708bf707b76d07ff597d1d045127841814784f8f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58a85809d4b605fcc82229e708bf707b76d07ff597d1d045127841814784f8f4->enter($__internal_58a85809d4b605fcc82229e708bf707b76d07ff597d1d045127841814784f8f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/har-validator/src/error.js"));

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
        
        $__internal_58a85809d4b605fcc82229e708bf707b76d07ff597d1d045127841814784f8f4->leave($__internal_58a85809d4b605fcc82229e708bf707b76d07ff597d1d045127841814784f8f4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/har-validator/src/error.js";
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
", "node_modules/fsevents/node_modules/har-validator/src/error.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/har-validator/src/error.js");
    }
}
