<?php

/* node_modules/core-js/modules/es6.object.is-sealed.js */
class __TwigTemplate_b314dd4ae0447a640917d8bf3f95e364b1dcedbcb94498a8859b7e2a92a365ca extends Twig_Template
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
        $__internal_1d0dcaa5472c5b470297037aae004d204dbf28a14608274e2aa7cedcda47cb9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d0dcaa5472c5b470297037aae004d204dbf28a14608274e2aa7cedcda47cb9f->enter($__internal_1d0dcaa5472c5b470297037aae004d204dbf28a14608274e2aa7cedcda47cb9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.object.is-sealed.js"));

        // line 1
        echo "// 19.1.2.13 Object.isSealed(O)
var isObject = require('./_is-object');

require('./_object-sap')('isSealed', function (\$isSealed) {
  return function isSealed(it) {
    return isObject(it) ? \$isSealed ? \$isSealed(it) : false : true;
  };
});
";
        
        $__internal_1d0dcaa5472c5b470297037aae004d204dbf28a14608274e2aa7cedcda47cb9f->leave($__internal_1d0dcaa5472c5b470297037aae004d204dbf28a14608274e2aa7cedcda47cb9f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.object.is-sealed.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 19.1.2.13 Object.isSealed(O)
var isObject = require('./_is-object');

require('./_object-sap')('isSealed', function (\$isSealed) {
  return function isSealed(it) {
    return isObject(it) ? \$isSealed ? \$isSealed(it) : false : true;
  };
});
", "node_modules/core-js/modules/es6.object.is-sealed.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.object.is-sealed.js");
    }
}
