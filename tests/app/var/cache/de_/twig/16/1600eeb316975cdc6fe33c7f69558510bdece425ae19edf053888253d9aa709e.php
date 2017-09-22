<?php

/* node_modules/core-js/modules/es6.reflect.get-own-property-descriptor.js */
class __TwigTemplate_5b369bfdba39f570c0c8de30b756e680e6244856b7c9a32a4bc9ba45fe2530bd extends Twig_Template
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
        $__internal_105b08fa78336334c2a059538210ce84940009313ab65cb704546f4e152752d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_105b08fa78336334c2a059538210ce84940009313ab65cb704546f4e152752d7->enter($__internal_105b08fa78336334c2a059538210ce84940009313ab65cb704546f4e152752d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.reflect.get-own-property-descriptor.js"));

        // line 1
        echo "// 26.1.7 Reflect.getOwnPropertyDescriptor(target, propertyKey)
var gOPD = require('./_object-gopd');
var \$export = require('./_export');
var anObject = require('./_an-object');

\$export(\$export.S, 'Reflect', {
  getOwnPropertyDescriptor: function getOwnPropertyDescriptor(target, propertyKey) {
    return gOPD.f(anObject(target), propertyKey);
  }
});
";
        
        $__internal_105b08fa78336334c2a059538210ce84940009313ab65cb704546f4e152752d7->leave($__internal_105b08fa78336334c2a059538210ce84940009313ab65cb704546f4e152752d7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.reflect.get-own-property-descriptor.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 26.1.7 Reflect.getOwnPropertyDescriptor(target, propertyKey)
var gOPD = require('./_object-gopd');
var \$export = require('./_export');
var anObject = require('./_an-object');

\$export(\$export.S, 'Reflect', {
  getOwnPropertyDescriptor: function getOwnPropertyDescriptor(target, propertyKey) {
    return gOPD.f(anObject(target), propertyKey);
  }
});
", "node_modules/core-js/modules/es6.reflect.get-own-property-descriptor.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.reflect.get-own-property-descriptor.js");
    }
}
