<?php

/* node_modules/lodash/fp/isArray.js */
class __TwigTemplate_9f58a9e16490e05da899684ab863afb70a7389f904acb460e30640764dd2b665 extends Twig_Template
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
        $__internal_db93ad5eafe7625b0ef57dc4bf4def3510ff9f3a2fdcf7481db418db24bfab48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db93ad5eafe7625b0ef57dc4bf4def3510ff9f3a2fdcf7481db418db24bfab48->enter($__internal_db93ad5eafe7625b0ef57dc4bf4def3510ff9f3a2fdcf7481db418db24bfab48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/isArray.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('isArray', require('../isArray'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_db93ad5eafe7625b0ef57dc4bf4def3510ff9f3a2fdcf7481db418db24bfab48->leave($__internal_db93ad5eafe7625b0ef57dc4bf4def3510ff9f3a2fdcf7481db418db24bfab48_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/isArray.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('isArray', require('../isArray'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/isArray.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/isArray.js");
    }
}
