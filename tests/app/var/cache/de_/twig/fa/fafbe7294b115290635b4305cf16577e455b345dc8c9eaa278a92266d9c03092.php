<?php

/* node_modules/core-js/library/modules/es6.reflect.has.js */
class __TwigTemplate_8a7997c73292aeb441e55f31e6e7ade5db227947e616a0dc38e0c152d42ec5a2 extends Twig_Template
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
        $__internal_58591d2dfb7e14e6a13d373386236b45809942bb3168999c8f94ce8fff371e3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58591d2dfb7e14e6a13d373386236b45809942bb3168999c8f94ce8fff371e3b->enter($__internal_58591d2dfb7e14e6a13d373386236b45809942bb3168999c8f94ce8fff371e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.reflect.has.js"));

        // line 1
        echo "// 26.1.9 Reflect.has(target, propertyKey)
var \$export = require('./_export');

\$export(\$export.S, 'Reflect', {
  has: function has(target, propertyKey) {
    return propertyKey in target;
  }
});
";
        
        $__internal_58591d2dfb7e14e6a13d373386236b45809942bb3168999c8f94ce8fff371e3b->leave($__internal_58591d2dfb7e14e6a13d373386236b45809942bb3168999c8f94ce8fff371e3b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.reflect.has.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 26.1.9 Reflect.has(target, propertyKey)
var \$export = require('./_export');

\$export(\$export.S, 'Reflect', {
  has: function has(target, propertyKey) {
    return propertyKey in target;
  }
});
", "node_modules/core-js/library/modules/es6.reflect.has.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.reflect.has.js");
    }
}
