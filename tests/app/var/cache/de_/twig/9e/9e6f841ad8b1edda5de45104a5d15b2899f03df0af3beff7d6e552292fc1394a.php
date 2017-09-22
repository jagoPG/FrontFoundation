<?php

/* node_modules/lodash/fp/toIterator.js */
class __TwigTemplate_5bca45884e936e32c45c68bcf6bdd310c2420d5e68eabe0885451eb96d8ee559 extends Twig_Template
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
        $__internal_b9208684ec0dee51f83f187b28d5c9e833c4c51c329f315975bf339145c2262c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9208684ec0dee51f83f187b28d5c9e833c4c51c329f315975bf339145c2262c->enter($__internal_b9208684ec0dee51f83f187b28d5c9e833c4c51c329f315975bf339145c2262c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/toIterator.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('toIterator', require('../toIterator'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_b9208684ec0dee51f83f187b28d5c9e833c4c51c329f315975bf339145c2262c->leave($__internal_b9208684ec0dee51f83f187b28d5c9e833c4c51c329f315975bf339145c2262c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/toIterator.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('toIterator', require('../toIterator'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/toIterator.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/toIterator.js");
    }
}
