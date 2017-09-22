<?php

/* node_modules/lodash/fp/mergeAll.js */
class __TwigTemplate_125c967e682645b4d4c44b2cdcb69874e163ac219e37eecb9a53fb902550fe5f extends Twig_Template
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
        $__internal_aa99c6f64b07ab2f5c1283bc208864779208467ea9be317ddf71db118914a253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa99c6f64b07ab2f5c1283bc208864779208467ea9be317ddf71db118914a253->enter($__internal_aa99c6f64b07ab2f5c1283bc208864779208467ea9be317ddf71db118914a253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/mergeAll.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('mergeAll', require('../merge'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_aa99c6f64b07ab2f5c1283bc208864779208467ea9be317ddf71db118914a253->leave($__internal_aa99c6f64b07ab2f5c1283bc208864779208467ea9be317ddf71db118914a253_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/mergeAll.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('mergeAll', require('../merge'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/mergeAll.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/mergeAll.js");
    }
}
