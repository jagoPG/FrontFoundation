<?php

/* node_modules/core-js/modules/es6.reflect.set-prototype-of.js */
class __TwigTemplate_83b3d2a7a8ee1ce83009585b3bc801a1f7495a794fea07bf4a1b2949464394a5 extends Twig_Template
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
        $__internal_d6e65cf2260e73e00068a6e939885cd68ae8bad31fdb3a165c26972959434b5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6e65cf2260e73e00068a6e939885cd68ae8bad31fdb3a165c26972959434b5f->enter($__internal_d6e65cf2260e73e00068a6e939885cd68ae8bad31fdb3a165c26972959434b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.reflect.set-prototype-of.js"));

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
        
        $__internal_d6e65cf2260e73e00068a6e939885cd68ae8bad31fdb3a165c26972959434b5f->leave($__internal_d6e65cf2260e73e00068a6e939885cd68ae8bad31fdb3a165c26972959434b5f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.reflect.set-prototype-of.js";
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
", "node_modules/core-js/modules/es6.reflect.set-prototype-of.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.reflect.set-prototype-of.js");
    }
}
