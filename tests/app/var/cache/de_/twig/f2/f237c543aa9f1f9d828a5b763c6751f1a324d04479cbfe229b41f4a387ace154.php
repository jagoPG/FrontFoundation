<?php

/* node_modules/lodash/fp/toString.js */
class __TwigTemplate_00e26ea5859a7f46763083dd3c68e1f84ee728820c2f43b70496fb6654ee507b extends Twig_Template
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
        $__internal_c9791067d0822a9d14a607208ac8782c23e56799c27f1af52891cdd73676345f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9791067d0822a9d14a607208ac8782c23e56799c27f1af52891cdd73676345f->enter($__internal_c9791067d0822a9d14a607208ac8782c23e56799c27f1af52891cdd73676345f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/toString.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('toString', require('../toString'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_c9791067d0822a9d14a607208ac8782c23e56799c27f1af52891cdd73676345f->leave($__internal_c9791067d0822a9d14a607208ac8782c23e56799c27f1af52891cdd73676345f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/toString.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('toString', require('../toString'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/toString.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/toString.js");
    }
}
