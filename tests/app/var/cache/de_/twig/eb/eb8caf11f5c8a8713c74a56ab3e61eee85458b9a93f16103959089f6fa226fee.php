<?php

/* node_modules/lodash/fp/lowerCase.js */
class __TwigTemplate_80e73bb02e3f4cb4a1dbd7b98daa39db6fed43f8a77a0ed849632024aba2b8a4 extends Twig_Template
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
        $__internal_71a1d0f40f6c57d52bd201a7196629d63e890f35cce65b6ea6734d4a2beb44a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71a1d0f40f6c57d52bd201a7196629d63e890f35cce65b6ea6734d4a2beb44a9->enter($__internal_71a1d0f40f6c57d52bd201a7196629d63e890f35cce65b6ea6734d4a2beb44a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/lowerCase.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('lowerCase', require('../lowerCase'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_71a1d0f40f6c57d52bd201a7196629d63e890f35cce65b6ea6734d4a2beb44a9->leave($__internal_71a1d0f40f6c57d52bd201a7196629d63e890f35cce65b6ea6734d4a2beb44a9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/lowerCase.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('lowerCase', require('../lowerCase'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/lowerCase.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/lowerCase.js");
    }
}
