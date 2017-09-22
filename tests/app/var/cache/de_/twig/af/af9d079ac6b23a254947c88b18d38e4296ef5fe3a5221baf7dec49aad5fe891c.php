<?php

/* node_modules/core-js/modules/es6.reflect.prevent-extensions.js */
class __TwigTemplate_84375567f9e6aa82c2b5a41d65ca53c41b5cbdaa8e0d0290fcca5d775a0b2062 extends Twig_Template
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
        $__internal_ff7b4bd52fd8f581779763b21e1e5ef4e1fa1dd454e1113eebcc9b778d3ab687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff7b4bd52fd8f581779763b21e1e5ef4e1fa1dd454e1113eebcc9b778d3ab687->enter($__internal_ff7b4bd52fd8f581779763b21e1e5ef4e1fa1dd454e1113eebcc9b778d3ab687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.reflect.prevent-extensions.js"));

        // line 1
        echo "// 26.1.12 Reflect.preventExtensions(target)
var \$export = require('./_export');
var anObject = require('./_an-object');
var \$preventExtensions = Object.preventExtensions;

\$export(\$export.S, 'Reflect', {
  preventExtensions: function preventExtensions(target) {
    anObject(target);
    try {
      if (\$preventExtensions) \$preventExtensions(target);
      return true;
    } catch (e) {
      return false;
    }
  }
});
";
        
        $__internal_ff7b4bd52fd8f581779763b21e1e5ef4e1fa1dd454e1113eebcc9b778d3ab687->leave($__internal_ff7b4bd52fd8f581779763b21e1e5ef4e1fa1dd454e1113eebcc9b778d3ab687_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.reflect.prevent-extensions.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 26.1.12 Reflect.preventExtensions(target)
var \$export = require('./_export');
var anObject = require('./_an-object');
var \$preventExtensions = Object.preventExtensions;

\$export(\$export.S, 'Reflect', {
  preventExtensions: function preventExtensions(target) {
    anObject(target);
    try {
      if (\$preventExtensions) \$preventExtensions(target);
      return true;
    } catch (e) {
      return false;
    }
  }
});
", "node_modules/core-js/modules/es6.reflect.prevent-extensions.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.reflect.prevent-extensions.js");
    }
}
