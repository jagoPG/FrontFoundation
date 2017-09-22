<?php

/* node_modules/core-js/modules/es6.reflect.delete-property.js */
class __TwigTemplate_aa286e322cac5b83efdb590ce766e0859d79a00c3c99e586a80dbcf1822c955b extends Twig_Template
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
        $__internal_b758218dbe88ec53f62d53e405dae0c298a394cfda449b3c164be05179fb7f31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b758218dbe88ec53f62d53e405dae0c298a394cfda449b3c164be05179fb7f31->enter($__internal_b758218dbe88ec53f62d53e405dae0c298a394cfda449b3c164be05179fb7f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.reflect.delete-property.js"));

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
        
        $__internal_b758218dbe88ec53f62d53e405dae0c298a394cfda449b3c164be05179fb7f31->leave($__internal_b758218dbe88ec53f62d53e405dae0c298a394cfda449b3c164be05179fb7f31_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.reflect.delete-property.js";
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
", "node_modules/core-js/modules/es6.reflect.delete-property.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.reflect.delete-property.js");
    }
}
