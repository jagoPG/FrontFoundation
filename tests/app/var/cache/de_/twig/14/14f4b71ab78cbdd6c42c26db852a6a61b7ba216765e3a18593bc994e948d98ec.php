<?php

/* node_modules/lodash/fp/kebabCase.js */
class __TwigTemplate_f91ce078ec2b08e05640358d6881f80bd7df8a82e8632f241a722342eb96da77 extends Twig_Template
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
        $__internal_ac3cd75f7f8ef1d7595ee8a4dc0d1f8220a1476ce073138c1ae6addc63f2cb5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac3cd75f7f8ef1d7595ee8a4dc0d1f8220a1476ce073138c1ae6addc63f2cb5e->enter($__internal_ac3cd75f7f8ef1d7595ee8a4dc0d1f8220a1476ce073138c1ae6addc63f2cb5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/kebabCase.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('kebabCase', require('../kebabCase'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_ac3cd75f7f8ef1d7595ee8a4dc0d1f8220a1476ce073138c1ae6addc63f2cb5e->leave($__internal_ac3cd75f7f8ef1d7595ee8a4dc0d1f8220a1476ce073138c1ae6addc63f2cb5e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/kebabCase.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('kebabCase', require('../kebabCase'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/kebabCase.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/kebabCase.js");
    }
}
