<?php

/* node_modules/core-js/library/modules/es6.reflect.set-prototype-of.js */
class __TwigTemplate_08cc375e5dd77bedefaeb32398f0e8c17b997e8682110cc0172314d8f279b303 extends Twig_Template
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
        $__internal_51dee40e369182b92fb6deb1ae2c0c61a8b25eb818ffa9c3327e4b96082087bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51dee40e369182b92fb6deb1ae2c0c61a8b25eb818ffa9c3327e4b96082087bd->enter($__internal_51dee40e369182b92fb6deb1ae2c0c61a8b25eb818ffa9c3327e4b96082087bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.reflect.set-prototype-of.js"));

        // line 1
        echo "// 26.1.14 Reflect.setPrototypeOf(target, proto)
var \$export = require('./_export');
var setProto = require('./_set-proto');

if (setProto) \$export(\$export.S, 'Reflect', {
  setPrototypeOf: function setPrototypeOf(target, proto) {
    setProto.check(target, proto);
    try {
      setProto.set(target, proto);
      return true;
    } catch (e) {
      return false;
    }
  }
});
";
        
        $__internal_51dee40e369182b92fb6deb1ae2c0c61a8b25eb818ffa9c3327e4b96082087bd->leave($__internal_51dee40e369182b92fb6deb1ae2c0c61a8b25eb818ffa9c3327e4b96082087bd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.reflect.set-prototype-of.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 26.1.14 Reflect.setPrototypeOf(target, proto)
var \$export = require('./_export');
var setProto = require('./_set-proto');

if (setProto) \$export(\$export.S, 'Reflect', {
  setPrototypeOf: function setPrototypeOf(target, proto) {
    setProto.check(target, proto);
    try {
      setProto.set(target, proto);
      return true;
    } catch (e) {
      return false;
    }
  }
});
", "node_modules/core-js/library/modules/es6.reflect.set-prototype-of.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.reflect.set-prototype-of.js");
    }
}
