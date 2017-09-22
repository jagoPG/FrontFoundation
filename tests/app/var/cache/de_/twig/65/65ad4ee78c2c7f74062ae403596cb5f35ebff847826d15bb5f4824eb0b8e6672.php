<?php

/* node_modules/lodash/fp/findLastFrom.js */
class __TwigTemplate_be657fd0930b798ce67f329e3d83fef156e5037330ba2f28beec5e6d62a8509f extends Twig_Template
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
        $__internal_d2b4dee4a4e1d03eeaea357c1632c34ccbadaeeef59c2643504b72af2648d603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2b4dee4a4e1d03eeaea357c1632c34ccbadaeeef59c2643504b72af2648d603->enter($__internal_d2b4dee4a4e1d03eeaea357c1632c34ccbadaeeef59c2643504b72af2648d603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/findLastFrom.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('findLastFrom', require('../findLast'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_d2b4dee4a4e1d03eeaea357c1632c34ccbadaeeef59c2643504b72af2648d603->leave($__internal_d2b4dee4a4e1d03eeaea357c1632c34ccbadaeeef59c2643504b72af2648d603_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/findLastFrom.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('findLastFrom', require('../findLast'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/findLastFrom.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/findLastFrom.js");
    }
}
