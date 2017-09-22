<?php

/* node_modules/core-js/modules/es6.function.name.js */
class __TwigTemplate_7abf886d5c49585484e439e2959d6f5d1f8b35e4f0e57c87f9f52296df43dab5 extends Twig_Template
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
        $__internal_b12e9c4e8ea7afd9a07c77b2614ca54028d4b3dd2044833a60dd34230a747554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b12e9c4e8ea7afd9a07c77b2614ca54028d4b3dd2044833a60dd34230a747554->enter($__internal_b12e9c4e8ea7afd9a07c77b2614ca54028d4b3dd2044833a60dd34230a747554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.function.name.js"));

        // line 1
        echo "var dP = require('./_object-dp').f;
var FProto = Function.prototype;
var nameRE = /^\\s*function ([^ (]*)/;
var NAME = 'name';

// 19.2.4.2 name
NAME in FProto || require('./_descriptors') && dP(FProto, NAME, {
  configurable: true,
  get: function () {
    try {
      return ('' + this).match(nameRE)[1];
    } catch (e) {
      return '';
    }
  }
});
";
        
        $__internal_b12e9c4e8ea7afd9a07c77b2614ca54028d4b3dd2044833a60dd34230a747554->leave($__internal_b12e9c4e8ea7afd9a07c77b2614ca54028d4b3dd2044833a60dd34230a747554_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.function.name.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var dP = require('./_object-dp').f;
var FProto = Function.prototype;
var nameRE = /^\\s*function ([^ (]*)/;
var NAME = 'name';

// 19.2.4.2 name
NAME in FProto || require('./_descriptors') && dP(FProto, NAME, {
  configurable: true,
  get: function () {
    try {
      return ('' + this).match(nameRE)[1];
    } catch (e) {
      return '';
    }
  }
});
", "node_modules/core-js/modules/es6.function.name.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.function.name.js");
    }
}
