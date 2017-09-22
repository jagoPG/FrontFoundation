<?php

/* node_modules/core-js/library/modules/es6.object.get-own-property-descriptor.js */
class __TwigTemplate_37888432d5b29d2c8bf2f8323a898c813743d2bbaa130d5ade9234f8a6fdcf67 extends Twig_Template
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
        $__internal_f3ca91012c778f46863ae4cc2b4cd46945a6e34755634bbfa69d6dc012cfd36f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3ca91012c778f46863ae4cc2b4cd46945a6e34755634bbfa69d6dc012cfd36f->enter($__internal_f3ca91012c778f46863ae4cc2b4cd46945a6e34755634bbfa69d6dc012cfd36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.object.get-own-property-descriptor.js"));

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
        
        $__internal_f3ca91012c778f46863ae4cc2b4cd46945a6e34755634bbfa69d6dc012cfd36f->leave($__internal_f3ca91012c778f46863ae4cc2b4cd46945a6e34755634bbfa69d6dc012cfd36f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.object.get-own-property-descriptor.js";
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
", "node_modules/core-js/library/modules/es6.object.get-own-property-descriptor.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.object.get-own-property-descriptor.js");
    }
}
