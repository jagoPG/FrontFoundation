<?php

/* node_modules/core-js/modules/_uid.js */
class __TwigTemplate_da65f71d4ae60d13495f87b7f8caff12bf10118fa99f0c557bc19997edb4a628 extends Twig_Template
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
        $__internal_ab078059e366a5905870797c2249473c20a7df4855427b2182f8f882ef270b02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab078059e366a5905870797c2249473c20a7df4855427b2182f8f882ef270b02->enter($__internal_ab078059e366a5905870797c2249473c20a7df4855427b2182f8f882ef270b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_uid.js"));

        // line 1
        echo "var id = 0;
var px = Math.random();
module.exports = function (key) {
  return 'Symbol('.concat(key === undefined ? '' : key, ')_', (++id + px).toString(36));
};
";
        
        $__internal_ab078059e366a5905870797c2249473c20a7df4855427b2182f8f882ef270b02->leave($__internal_ab078059e366a5905870797c2249473c20a7df4855427b2182f8f882ef270b02_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_uid.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var id = 0;
var px = Math.random();
module.exports = function (key) {
  return 'Symbol('.concat(key === undefined ? '' : key, ')_', (++id + px).toString(36));
};
", "node_modules/core-js/modules/_uid.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_uid.js");
    }
}
