<?php

/* node_modules/core-js/modules/_shared.js */
class __TwigTemplate_8d8a36c02bfa769f9ac1fec498a275f75f43a624f205fb0c23f982dd3f4a0865 extends Twig_Template
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
        $__internal_c68b3d5d29cf2d54a9141f748fab8d848733285b093b73319f259c8e3419f5cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c68b3d5d29cf2d54a9141f748fab8d848733285b093b73319f259c8e3419f5cc->enter($__internal_c68b3d5d29cf2d54a9141f748fab8d848733285b093b73319f259c8e3419f5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_shared.js"));

        // line 1
        echo "var global = require('./_global');
var SHARED = '__core-js_shared__';
var store = global[SHARED] || (global[SHARED] = {});
module.exports = function (key) {
  return store[key] || (store[key] = {});
};
";
        
        $__internal_c68b3d5d29cf2d54a9141f748fab8d848733285b093b73319f259c8e3419f5cc->leave($__internal_c68b3d5d29cf2d54a9141f748fab8d848733285b093b73319f259c8e3419f5cc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_shared.js";
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
", "node_modules/core-js/modules/_shared.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_shared.js");
    }
}
