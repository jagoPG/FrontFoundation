<?php

/* node_modules/lodash/fp/forEach.js */
class __TwigTemplate_abbf5a3b406d0f773e4374e66ef8b4cb6e179bf966842aa7730266bdad57d2b0 extends Twig_Template
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
        $__internal_d6005496fde7db8c015f0460fc5df77f2455ca5396a3aa56c17db831ea334425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6005496fde7db8c015f0460fc5df77f2455ca5396a3aa56c17db831ea334425->enter($__internal_d6005496fde7db8c015f0460fc5df77f2455ca5396a3aa56c17db831ea334425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/forEach.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('forEach', require('../forEach'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_d6005496fde7db8c015f0460fc5df77f2455ca5396a3aa56c17db831ea334425->leave($__internal_d6005496fde7db8c015f0460fc5df77f2455ca5396a3aa56c17db831ea334425_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/forEach.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('forEach', require('../forEach'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/forEach.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/forEach.js");
    }
}
