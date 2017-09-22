<?php

/* node_modules/core-js/library/modules/es6.reflect.get-own-property-descriptor.js */
class __TwigTemplate_ef540bce1f10e82b1bf7b2bbd0d779f4dc2e11cf95bd7050112dd2de230cfc2f extends Twig_Template
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
        $__internal_33578c7217567810d65fcfc150afda0096cab76096fe54fd156b7117e0329640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33578c7217567810d65fcfc150afda0096cab76096fe54fd156b7117e0329640->enter($__internal_33578c7217567810d65fcfc150afda0096cab76096fe54fd156b7117e0329640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.reflect.get-own-property-descriptor.js"));

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
        
        $__internal_33578c7217567810d65fcfc150afda0096cab76096fe54fd156b7117e0329640->leave($__internal_33578c7217567810d65fcfc150afda0096cab76096fe54fd156b7117e0329640_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.reflect.get-own-property-descriptor.js";
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
", "node_modules/core-js/library/modules/es6.reflect.get-own-property-descriptor.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.reflect.get-own-property-descriptor.js");
    }
}
