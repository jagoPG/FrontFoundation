<?php

/* node_modules/lodash/fp/invokeArgsMap.js */
class __TwigTemplate_4f519e65551112459dc7d0634dfb4ad46a052b77a5358cd815ea7b1b94b94415 extends Twig_Template
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
        $__internal_492641d8294abd66a7b50b037f33b0ac26db7d4b4f75c701edcb3932e0b708ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_492641d8294abd66a7b50b037f33b0ac26db7d4b4f75c701edcb3932e0b708ef->enter($__internal_492641d8294abd66a7b50b037f33b0ac26db7d4b4f75c701edcb3932e0b708ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/invokeArgsMap.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('invokeArgsMap', require('../invokeMap'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_492641d8294abd66a7b50b037f33b0ac26db7d4b4f75c701edcb3932e0b708ef->leave($__internal_492641d8294abd66a7b50b037f33b0ac26db7d4b4f75c701edcb3932e0b708ef_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/invokeArgsMap.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('invokeArgsMap', require('../invokeMap'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/invokeArgsMap.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/invokeArgsMap.js");
    }
}
