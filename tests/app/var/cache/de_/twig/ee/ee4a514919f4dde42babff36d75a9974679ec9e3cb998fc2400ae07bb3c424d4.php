<?php

/* node_modules/lodash/fp/slice.js */
class __TwigTemplate_f77084ad2ffa022677a137bafcf69e293fffff59cb9dea0fd5fa6d4435c2f904 extends Twig_Template
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
        $__internal_4510ee4945bf8e1e36827e3d040319866882760bc1ee664113ce26d523d3ef45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4510ee4945bf8e1e36827e3d040319866882760bc1ee664113ce26d523d3ef45->enter($__internal_4510ee4945bf8e1e36827e3d040319866882760bc1ee664113ce26d523d3ef45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/slice.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('slice', require('../slice'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_4510ee4945bf8e1e36827e3d040319866882760bc1ee664113ce26d523d3ef45->leave($__internal_4510ee4945bf8e1e36827e3d040319866882760bc1ee664113ce26d523d3ef45_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/slice.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('slice', require('../slice'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/slice.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/slice.js");
    }
}
