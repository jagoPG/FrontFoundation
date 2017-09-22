<?php

/* node_modules/lodash/fp/sortedLastIndex.js */
class __TwigTemplate_1b3c6564b3ccb47af8a0bf17ce13de1412448eb5ccef79c4d288cffda4698a12 extends Twig_Template
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
        $__internal_4c0a78fddbf73489d3adf1a71982bc3e91d4bc2c6c2c9dfddc3fef26f8f45faa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c0a78fddbf73489d3adf1a71982bc3e91d4bc2c6c2c9dfddc3fef26f8f45faa->enter($__internal_4c0a78fddbf73489d3adf1a71982bc3e91d4bc2c6c2c9dfddc3fef26f8f45faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/sortedLastIndex.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('sortedLastIndex', require('../sortedLastIndex'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_4c0a78fddbf73489d3adf1a71982bc3e91d4bc2c6c2c9dfddc3fef26f8f45faa->leave($__internal_4c0a78fddbf73489d3adf1a71982bc3e91d4bc2c6c2c9dfddc3fef26f8f45faa_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/sortedLastIndex.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('sortedLastIndex', require('../sortedLastIndex'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/sortedLastIndex.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/sortedLastIndex.js");
    }
}
