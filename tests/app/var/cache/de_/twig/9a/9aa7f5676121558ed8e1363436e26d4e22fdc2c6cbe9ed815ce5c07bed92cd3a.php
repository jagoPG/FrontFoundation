<?php

/* node_modules/lodash/fp/at.js */
class __TwigTemplate_42f23f05bf8e3485c3a75d18c5d7cc6c372f818787101bb9388e02d381ce2ae2 extends Twig_Template
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
        $__internal_cff327b452fa00a7ea99e88cd67b7badec03ddca65e3710cdb2507cff7ebba5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cff327b452fa00a7ea99e88cd67b7badec03ddca65e3710cdb2507cff7ebba5d->enter($__internal_cff327b452fa00a7ea99e88cd67b7badec03ddca65e3710cdb2507cff7ebba5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/at.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('at', require('../at'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_cff327b452fa00a7ea99e88cd67b7badec03ddca65e3710cdb2507cff7ebba5d->leave($__internal_cff327b452fa00a7ea99e88cd67b7badec03ddca65e3710cdb2507cff7ebba5d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/at.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('at', require('../at'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/at.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/at.js");
    }
}
