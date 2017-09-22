<?php

/* node_modules/core-js/library/modules/_is-array.js */
class __TwigTemplate_7c045716e5344abb914b38db2274712c869cd5fe1f797ffee5a8f9346cd643ee extends Twig_Template
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
        $__internal_dc1b63d6de7325414a263a30bfd3995557404238d3f0d3ca7001b2a602c4653f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc1b63d6de7325414a263a30bfd3995557404238d3f0d3ca7001b2a602c4653f->enter($__internal_dc1b63d6de7325414a263a30bfd3995557404238d3f0d3ca7001b2a602c4653f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_is-array.js"));

        // line 1
        echo "// 7.2.2 IsArray(argument)
var cof = require('./_cof');
module.exports = Array.isArray || function isArray(arg) {
  return cof(arg) == 'Array';
};
";
        
        $__internal_dc1b63d6de7325414a263a30bfd3995557404238d3f0d3ca7001b2a602c4653f->leave($__internal_dc1b63d6de7325414a263a30bfd3995557404238d3f0d3ca7001b2a602c4653f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_is-array.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 7.2.2 IsArray(argument)
var cof = require('./_cof');
module.exports = Array.isArray || function isArray(arg) {
  return cof(arg) == 'Array';
};
", "node_modules/core-js/library/modules/_is-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_is-array.js");
    }
}
