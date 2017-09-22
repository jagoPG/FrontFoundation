<?php

/* node_modules/lodash/fp/create.js */
class __TwigTemplate_cbc91d12cf7e641fe60f0583ba45e93063d2ef715453a262398f8393e1872b80 extends Twig_Template
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
        $__internal_0d831eeb740a63fa9751d57eb5b1e1cbbc997dddc2e5a78ed6b472cb124dbe89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d831eeb740a63fa9751d57eb5b1e1cbbc997dddc2e5a78ed6b472cb124dbe89->enter($__internal_0d831eeb740a63fa9751d57eb5b1e1cbbc997dddc2e5a78ed6b472cb124dbe89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/create.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('create', require('../create'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_0d831eeb740a63fa9751d57eb5b1e1cbbc997dddc2e5a78ed6b472cb124dbe89->leave($__internal_0d831eeb740a63fa9751d57eb5b1e1cbbc997dddc2e5a78ed6b472cb124dbe89_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/create.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('create', require('../create'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/create.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/create.js");
    }
}
