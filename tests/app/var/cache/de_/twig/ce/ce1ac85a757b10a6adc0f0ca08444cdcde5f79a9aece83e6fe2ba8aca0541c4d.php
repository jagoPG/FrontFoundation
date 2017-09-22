<?php

/* node_modules/lodash/fp/forOwnRight.js */
class __TwigTemplate_2c60012680e7e699b152179a464a9c88848bf0ce48be72ad539cb8e750203bdd extends Twig_Template
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
        $__internal_46795c27308002faa8a2b08a7761ac141766ce1ae5ddfb178bb0cb3e3ecc789c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46795c27308002faa8a2b08a7761ac141766ce1ae5ddfb178bb0cb3e3ecc789c->enter($__internal_46795c27308002faa8a2b08a7761ac141766ce1ae5ddfb178bb0cb3e3ecc789c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/forOwnRight.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('forOwnRight', require('../forOwnRight'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_46795c27308002faa8a2b08a7761ac141766ce1ae5ddfb178bb0cb3e3ecc789c->leave($__internal_46795c27308002faa8a2b08a7761ac141766ce1ae5ddfb178bb0cb3e3ecc789c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/forOwnRight.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('forOwnRight', require('../forOwnRight'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/forOwnRight.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/forOwnRight.js");
    }
}
