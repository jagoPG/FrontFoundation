<?php

/* node_modules/lodash/fp/drop.js */
class __TwigTemplate_d292cfe22e16ab2c8ec4b8840af14790ac23f5176e8c80331f068d9eefa323df extends Twig_Template
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
        $__internal_acf475bc2ce2b7ac69ce3142d80ae6c0f4372fa092210ca6e8827f67c0015917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acf475bc2ce2b7ac69ce3142d80ae6c0f4372fa092210ca6e8827f67c0015917->enter($__internal_acf475bc2ce2b7ac69ce3142d80ae6c0f4372fa092210ca6e8827f67c0015917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/drop.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('drop', require('../drop'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_acf475bc2ce2b7ac69ce3142d80ae6c0f4372fa092210ca6e8827f67c0015917->leave($__internal_acf475bc2ce2b7ac69ce3142d80ae6c0f4372fa092210ca6e8827f67c0015917_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/drop.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('drop', require('../drop'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/drop.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/drop.js");
    }
}
