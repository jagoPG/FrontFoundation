<?php

/* node_modules/lodash/fp/assignInAllWith.js */
class __TwigTemplate_7a0e77049c6aa0e12bee4eb1461c26a411f0de707bb3b4c800d4271d90f6432c extends Twig_Template
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
        $__internal_423c01cb38adfc0d5fa5978ffa516d3042f79e1db01f1707b09c0cb2ba968fe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_423c01cb38adfc0d5fa5978ffa516d3042f79e1db01f1707b09c0cb2ba968fe1->enter($__internal_423c01cb38adfc0d5fa5978ffa516d3042f79e1db01f1707b09c0cb2ba968fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/assignInAllWith.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('assignInAllWith', require('../assignInWith'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_423c01cb38adfc0d5fa5978ffa516d3042f79e1db01f1707b09c0cb2ba968fe1->leave($__internal_423c01cb38adfc0d5fa5978ffa516d3042f79e1db01f1707b09c0cb2ba968fe1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/assignInAllWith.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('assignInAllWith', require('../assignInWith'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/assignInAllWith.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/assignInAllWith.js");
    }
}
