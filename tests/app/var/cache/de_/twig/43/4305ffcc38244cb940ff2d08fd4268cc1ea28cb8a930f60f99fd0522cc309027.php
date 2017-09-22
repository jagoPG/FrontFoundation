<?php

/* node_modules/core-js/library/modules/_shared.js */
class __TwigTemplate_4fa4d67bf48ddfb63a69100f339734e4faca5853bd4aaa81e4a35281b305302f extends Twig_Template
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
        $__internal_4db2d0ee7367b94e230a4186d3793b3a2fcd24a9b33436d2c2ca3cac1e934b96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4db2d0ee7367b94e230a4186d3793b3a2fcd24a9b33436d2c2ca3cac1e934b96->enter($__internal_4db2d0ee7367b94e230a4186d3793b3a2fcd24a9b33436d2c2ca3cac1e934b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_shared.js"));

        // line 1
        echo "var global = require('./_global');
var SHARED = '__core-js_shared__';
var store = global[SHARED] || (global[SHARED] = {});
module.exports = function (key) {
  return store[key] || (store[key] = {});
};
";
        
        $__internal_4db2d0ee7367b94e230a4186d3793b3a2fcd24a9b33436d2c2ca3cac1e934b96->leave($__internal_4db2d0ee7367b94e230a4186d3793b3a2fcd24a9b33436d2c2ca3cac1e934b96_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_shared.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var global = require('./_global');
var SHARED = '__core-js_shared__';
var store = global[SHARED] || (global[SHARED] = {});
module.exports = function (key) {
  return store[key] || (store[key] = {});
};
", "node_modules/core-js/library/modules/_shared.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_shared.js");
    }
}
