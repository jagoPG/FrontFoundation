<?php

/* node_modules/lodash/fp/stubArray.js */
class __TwigTemplate_a352b0080ef61cc66a19b11b7bb62e479c16fa449751abaadd416b4cbb417ce2 extends Twig_Template
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
        $__internal_e4d4b23cc68dacd166de951264a8a90819ef0ead283b1cddfb2f0c91843f353e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4d4b23cc68dacd166de951264a8a90819ef0ead283b1cddfb2f0c91843f353e->enter($__internal_e4d4b23cc68dacd166de951264a8a90819ef0ead283b1cddfb2f0c91843f353e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/stubArray.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('stubArray', require('../stubArray'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_e4d4b23cc68dacd166de951264a8a90819ef0ead283b1cddfb2f0c91843f353e->leave($__internal_e4d4b23cc68dacd166de951264a8a90819ef0ead283b1cddfb2f0c91843f353e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/stubArray.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('stubArray', require('../stubArray'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/stubArray.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/stubArray.js");
    }
}
