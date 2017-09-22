<?php

/* node_modules/core-js/library/modules/es6.reflect.delete-property.js */
class __TwigTemplate_2516a4c68e2348c16b9f32ebf00a1955ab07c7d760d800306eb12aa295cd2c11 extends Twig_Template
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
        $__internal_1865a362eed2db981cf4a7f732a4532809453c26f096af8f0c72e073845f1be7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1865a362eed2db981cf4a7f732a4532809453c26f096af8f0c72e073845f1be7->enter($__internal_1865a362eed2db981cf4a7f732a4532809453c26f096af8f0c72e073845f1be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.reflect.delete-property.js"));

        // line 1
        echo "// 26.1.4 Reflect.deleteProperty(target, propertyKey)
var \$export = require('./_export');
var gOPD = require('./_object-gopd').f;
var anObject = require('./_an-object');

\$export(\$export.S, 'Reflect', {
  deleteProperty: function deleteProperty(target, propertyKey) {
    var desc = gOPD(anObject(target), propertyKey);
    return desc && !desc.configurable ? false : delete target[propertyKey];
  }
});
";
        
        $__internal_1865a362eed2db981cf4a7f732a4532809453c26f096af8f0c72e073845f1be7->leave($__internal_1865a362eed2db981cf4a7f732a4532809453c26f096af8f0c72e073845f1be7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.reflect.delete-property.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 26.1.4 Reflect.deleteProperty(target, propertyKey)
var \$export = require('./_export');
var gOPD = require('./_object-gopd').f;
var anObject = require('./_an-object');

\$export(\$export.S, 'Reflect', {
  deleteProperty: function deleteProperty(target, propertyKey) {
    var desc = gOPD(anObject(target), propertyKey);
    return desc && !desc.configurable ? false : delete target[propertyKey];
  }
});
", "node_modules/core-js/library/modules/es6.reflect.delete-property.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.reflect.delete-property.js");
    }
}
