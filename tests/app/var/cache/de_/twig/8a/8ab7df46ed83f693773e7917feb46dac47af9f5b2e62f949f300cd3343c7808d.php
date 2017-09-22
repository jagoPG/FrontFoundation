<?php

/* node_modules/lodash/fp/overSome.js */
class __TwigTemplate_b0dfae0ccd02e2805109cbcad35ee5f616cb86d7ea5aea4dbfbf5281e744c331 extends Twig_Template
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
        $__internal_b7bdaca5b56f49f194dc03646fc09f2e9820b683146d5b81d1f8856f2c37de6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7bdaca5b56f49f194dc03646fc09f2e9820b683146d5b81d1f8856f2c37de6c->enter($__internal_b7bdaca5b56f49f194dc03646fc09f2e9820b683146d5b81d1f8856f2c37de6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/overSome.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('overSome', require('../overSome'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_b7bdaca5b56f49f194dc03646fc09f2e9820b683146d5b81d1f8856f2c37de6c->leave($__internal_b7bdaca5b56f49f194dc03646fc09f2e9820b683146d5b81d1f8856f2c37de6c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/overSome.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('overSome', require('../overSome'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/overSome.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/overSome.js");
    }
}
