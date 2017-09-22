<?php

/* node_modules/lodash/fp/nthArg.js */
class __TwigTemplate_576a97314d728ecc2aa9915b8583231775eaddb8a0f0e040533dc3d8db7aa79b extends Twig_Template
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
        $__internal_dd489513b93514eeb3d161b5fd727fa367726f282f2d2a631ba949ca08606ada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd489513b93514eeb3d161b5fd727fa367726f282f2d2a631ba949ca08606ada->enter($__internal_dd489513b93514eeb3d161b5fd727fa367726f282f2d2a631ba949ca08606ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/nthArg.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('nthArg', require('../nthArg'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_dd489513b93514eeb3d161b5fd727fa367726f282f2d2a631ba949ca08606ada->leave($__internal_dd489513b93514eeb3d161b5fd727fa367726f282f2d2a631ba949ca08606ada_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/nthArg.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('nthArg', require('../nthArg'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/nthArg.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/nthArg.js");
    }
}
