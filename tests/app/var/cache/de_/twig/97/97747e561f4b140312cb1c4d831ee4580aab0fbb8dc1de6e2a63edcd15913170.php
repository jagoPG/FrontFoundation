<?php

/* node_modules/lodash/fp/chunk.js */
class __TwigTemplate_27f88577f8825b09291fe7907b359346f333cdc65218c36789c35bb97a680df8 extends Twig_Template
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
        $__internal_09e8ebf8f2c0c061d3ba42866afb20ec60faf2dbb75715fad4ab7b18bec5e0ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09e8ebf8f2c0c061d3ba42866afb20ec60faf2dbb75715fad4ab7b18bec5e0ba->enter($__internal_09e8ebf8f2c0c061d3ba42866afb20ec60faf2dbb75715fad4ab7b18bec5e0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/chunk.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('chunk', require('../chunk'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_09e8ebf8f2c0c061d3ba42866afb20ec60faf2dbb75715fad4ab7b18bec5e0ba->leave($__internal_09e8ebf8f2c0c061d3ba42866afb20ec60faf2dbb75715fad4ab7b18bec5e0ba_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/chunk.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('chunk', require('../chunk'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/chunk.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/chunk.js");
    }
}
