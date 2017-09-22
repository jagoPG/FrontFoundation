<?php

/* node_modules/core-js/modules/es6.object.get-own-property-descriptor.js */
class __TwigTemplate_8ddb62c478e96756f0e886f1d036f04fecd1fd4d998305adcfc2589c5d09a13b extends Twig_Template
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
        $__internal_4e39555183a8d580d9d41e1b44442c0e1b579d86c0508ec04583b3a71d43c993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e39555183a8d580d9d41e1b44442c0e1b579d86c0508ec04583b3a71d43c993->enter($__internal_4e39555183a8d580d9d41e1b44442c0e1b579d86c0508ec04583b3a71d43c993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.object.get-own-property-descriptor.js"));

        // line 1
        echo "// 19.1.2.6 Object.getOwnPropertyDescriptor(O, P)
var toIObject = require('./_to-iobject');
var \$getOwnPropertyDescriptor = require('./_object-gopd').f;

require('./_object-sap')('getOwnPropertyDescriptor', function () {
  return function getOwnPropertyDescriptor(it, key) {
    return \$getOwnPropertyDescriptor(toIObject(it), key);
  };
});
";
        
        $__internal_4e39555183a8d580d9d41e1b44442c0e1b579d86c0508ec04583b3a71d43c993->leave($__internal_4e39555183a8d580d9d41e1b44442c0e1b579d86c0508ec04583b3a71d43c993_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.object.get-own-property-descriptor.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 19.1.2.6 Object.getOwnPropertyDescriptor(O, P)
var toIObject = require('./_to-iobject');
var \$getOwnPropertyDescriptor = require('./_object-gopd').f;

require('./_object-sap')('getOwnPropertyDescriptor', function () {
  return function getOwnPropertyDescriptor(it, key) {
    return \$getOwnPropertyDescriptor(toIObject(it), key);
  };
});
", "node_modules/core-js/modules/es6.object.get-own-property-descriptor.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.object.get-own-property-descriptor.js");
    }
}
