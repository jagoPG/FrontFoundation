<?php

/* node_modules/core-js/library/modules/es6.object.is-sealed.js */
class __TwigTemplate_5a04e92a6858c68221c1f0979725168ac4fbc2c7197a3d37744335e9a2b3e7c1 extends Twig_Template
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
        $__internal_d05041106966de07eaa1da61088adb9b1426065bc69170e09ebb87dccb51816c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d05041106966de07eaa1da61088adb9b1426065bc69170e09ebb87dccb51816c->enter($__internal_d05041106966de07eaa1da61088adb9b1426065bc69170e09ebb87dccb51816c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.object.is-sealed.js"));

        // line 1
        echo "// 19.1.2.13 Object.isSealed(O)
var isObject = require('./_is-object');

require('./_object-sap')('isSealed', function (\$isSealed) {
  return function isSealed(it) {
    return isObject(it) ? \$isSealed ? \$isSealed(it) : false : true;
  };
});
";
        
        $__internal_d05041106966de07eaa1da61088adb9b1426065bc69170e09ebb87dccb51816c->leave($__internal_d05041106966de07eaa1da61088adb9b1426065bc69170e09ebb87dccb51816c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.object.is-sealed.js";
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
", "node_modules/core-js/library/modules/es6.object.is-sealed.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.object.is-sealed.js");
    }
}
