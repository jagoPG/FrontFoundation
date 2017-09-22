<?php

/* node_modules/lodash/fp/isEmpty.js */
class __TwigTemplate_d4ab02c561cbf1bb4559010a3a0005fe85b4fab16b74040d15f0c0842461a918 extends Twig_Template
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
        $__internal_50b28a2aa09f5abda3bc05c9c32470bd6cd5d23e7e22e06e25910a0d0804859e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50b28a2aa09f5abda3bc05c9c32470bd6cd5d23e7e22e06e25910a0d0804859e->enter($__internal_50b28a2aa09f5abda3bc05c9c32470bd6cd5d23e7e22e06e25910a0d0804859e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/isEmpty.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('isEmpty', require('../isEmpty'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_50b28a2aa09f5abda3bc05c9c32470bd6cd5d23e7e22e06e25910a0d0804859e->leave($__internal_50b28a2aa09f5abda3bc05c9c32470bd6cd5d23e7e22e06e25910a0d0804859e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/isEmpty.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('isEmpty', require('../isEmpty'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/isEmpty.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/isEmpty.js");
    }
}
