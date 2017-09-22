<?php

/* node_modules/lodash/fp/partition.js */
class __TwigTemplate_ba1e88447d2ac7dd9ad497a13451ee161b6b0fa443e113b2ef102c965d3c63cd extends Twig_Template
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
        $__internal_37071bfbba93f9d197f9061528d328ee4f0f68a5207e572a8626146c393bfe29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37071bfbba93f9d197f9061528d328ee4f0f68a5207e572a8626146c393bfe29->enter($__internal_37071bfbba93f9d197f9061528d328ee4f0f68a5207e572a8626146c393bfe29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/partition.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('partition', require('../partition'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_37071bfbba93f9d197f9061528d328ee4f0f68a5207e572a8626146c393bfe29->leave($__internal_37071bfbba93f9d197f9061528d328ee4f0f68a5207e572a8626146c393bfe29_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/partition.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('partition', require('../partition'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/partition.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/partition.js");
    }
}
