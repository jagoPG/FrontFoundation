<?php

/* node_modules/es5-ext/function/#/not.js */
class __TwigTemplate_bd4cdbab937f6ea1562cf9248ece79e1ca7cabc4c78e1f9335ac98d1e5839058 extends Twig_Template
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
        $__internal_081eea5e0cb7f48dc2681e8549fe9482e02bc45725fefcace17434b85565729c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_081eea5e0cb7f48dc2681e8549fe9482e02bc45725fefcace17434b85565729c->enter($__internal_081eea5e0cb7f48dc2681e8549fe9482e02bc45725fefcace17434b85565729c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/function/#/not.js"));

        // line 1
        echo "\"use strict\";

var callable     = require(\"../../object/valid-callable\")
  , defineLength = require(\"../_define-length\")

  , apply = Function.prototype.apply;

module.exports = function () {
\tvar fn = callable(this);

\treturn defineLength(function () {
\t\treturn !apply.call(fn, this, arguments);
\t}, fn.length);
};
";
        
        $__internal_081eea5e0cb7f48dc2681e8549fe9482e02bc45725fefcace17434b85565729c->leave($__internal_081eea5e0cb7f48dc2681e8549fe9482e02bc45725fefcace17434b85565729c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/function/#/not.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var callable     = require(\"../../object/valid-callable\")
  , defineLength = require(\"../_define-length\")

  , apply = Function.prototype.apply;

module.exports = function () {
\tvar fn = callable(this);

\treturn defineLength(function () {
\t\treturn !apply.call(fn, this, arguments);
\t}, fn.length);
};
", "node_modules/es5-ext/function/#/not.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/function/#/not.js");
    }
}
