<?php

/* node_modules/lodash/fp/includesFrom.js */
class __TwigTemplate_4b66c572a7315f94fe7cc87ec655450923db53d18d74253ae651e6c6174d18da extends Twig_Template
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
        $__internal_ab62d8635261a4004c41315be7139a7973ba8d6bab495c207c88e9d8294b38b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab62d8635261a4004c41315be7139a7973ba8d6bab495c207c88e9d8294b38b0->enter($__internal_ab62d8635261a4004c41315be7139a7973ba8d6bab495c207c88e9d8294b38b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/includesFrom.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('includesFrom', require('../includes'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_ab62d8635261a4004c41315be7139a7973ba8d6bab495c207c88e9d8294b38b0->leave($__internal_ab62d8635261a4004c41315be7139a7973ba8d6bab495c207c88e9d8294b38b0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/includesFrom.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('includesFrom', require('../includes'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/includesFrom.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/includesFrom.js");
    }
}
