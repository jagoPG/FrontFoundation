<?php

/* node_modules/lodash/fp/valueOf.js */
class __TwigTemplate_a1f282b81b88f7f90c71e939099e3b2c85a73e29b9607d07d0485e5a57f7d6c6 extends Twig_Template
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
        $__internal_cb9a986a44d239ed6e618ebd9dafd78736fa1dfd8fb22d3509281823869f90bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb9a986a44d239ed6e618ebd9dafd78736fa1dfd8fb22d3509281823869f90bd->enter($__internal_cb9a986a44d239ed6e618ebd9dafd78736fa1dfd8fb22d3509281823869f90bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/valueOf.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('valueOf', require('../valueOf'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_cb9a986a44d239ed6e618ebd9dafd78736fa1dfd8fb22d3509281823869f90bd->leave($__internal_cb9a986a44d239ed6e618ebd9dafd78736fa1dfd8fb22d3509281823869f90bd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/valueOf.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('valueOf', require('../valueOf'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/valueOf.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/valueOf.js");
    }
}
