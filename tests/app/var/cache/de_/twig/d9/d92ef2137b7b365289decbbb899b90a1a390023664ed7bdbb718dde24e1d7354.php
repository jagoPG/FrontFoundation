<?php

/* node_modules/lodash/fp/identity.js */
class __TwigTemplate_55f16230a646db27cc79ae1b2423604080ad7a72ad6247bb8df39ee40f603133 extends Twig_Template
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
        $__internal_2c16ca3cf22204454e724692dd31b143aa9953a964efcc67c4b674aa75f2cef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c16ca3cf22204454e724692dd31b143aa9953a964efcc67c4b674aa75f2cef4->enter($__internal_2c16ca3cf22204454e724692dd31b143aa9953a964efcc67c4b674aa75f2cef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/identity.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('identity', require('../identity'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_2c16ca3cf22204454e724692dd31b143aa9953a964efcc67c4b674aa75f2cef4->leave($__internal_2c16ca3cf22204454e724692dd31b143aa9953a964efcc67c4b674aa75f2cef4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/identity.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('identity', require('../identity'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/identity.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/identity.js");
    }
}
