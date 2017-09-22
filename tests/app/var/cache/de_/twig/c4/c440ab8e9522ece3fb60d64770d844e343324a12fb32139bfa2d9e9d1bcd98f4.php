<?php

/* node_modules/lodash/fp/functionsIn.js */
class __TwigTemplate_6663599347841712c0760585e4facae8de47ccb52f932bfb0207a14ff1cfdfb4 extends Twig_Template
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
        $__internal_5136c1d6c2c56a4c127c47105211d284a50e5ad7c91f8b52e91bac095d492b5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5136c1d6c2c56a4c127c47105211d284a50e5ad7c91f8b52e91bac095d492b5f->enter($__internal_5136c1d6c2c56a4c127c47105211d284a50e5ad7c91f8b52e91bac095d492b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/functionsIn.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('functionsIn', require('../functionsIn'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_5136c1d6c2c56a4c127c47105211d284a50e5ad7c91f8b52e91bac095d492b5f->leave($__internal_5136c1d6c2c56a4c127c47105211d284a50e5ad7c91f8b52e91bac095d492b5f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/functionsIn.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('functionsIn', require('../functionsIn'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/functionsIn.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/functionsIn.js");
    }
}
