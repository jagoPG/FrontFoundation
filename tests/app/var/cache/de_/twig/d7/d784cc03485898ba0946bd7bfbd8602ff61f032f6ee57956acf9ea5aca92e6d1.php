<?php

/* node_modules/lodash/fp/lowerFirst.js */
class __TwigTemplate_f74565254645e60e634356267ea4ee4979ab6fd6a530ee1dc2d123aea7227f2a extends Twig_Template
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
        $__internal_a57e055ebcb9cfdc6347db977feff55d9066d15fbdfeb0ba9752b9f4684a35b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a57e055ebcb9cfdc6347db977feff55d9066d15fbdfeb0ba9752b9f4684a35b9->enter($__internal_a57e055ebcb9cfdc6347db977feff55d9066d15fbdfeb0ba9752b9f4684a35b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/lowerFirst.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('lowerFirst', require('../lowerFirst'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_a57e055ebcb9cfdc6347db977feff55d9066d15fbdfeb0ba9752b9f4684a35b9->leave($__internal_a57e055ebcb9cfdc6347db977feff55d9066d15fbdfeb0ba9752b9f4684a35b9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/lowerFirst.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('lowerFirst', require('../lowerFirst'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/lowerFirst.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/lowerFirst.js");
    }
}
