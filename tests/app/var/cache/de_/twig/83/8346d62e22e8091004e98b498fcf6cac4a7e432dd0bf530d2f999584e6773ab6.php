<?php

/* node_modules/lodash/fp/capitalize.js */
class __TwigTemplate_ffff809868ab1daa344054c352e6822dd8ffde36d66132d8ae3c8a42e8e75ef0 extends Twig_Template
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
        $__internal_17f6ccec7790cd60b87e64ec4a153c5920bdfa12a77065d337ef533d4ac4ad20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17f6ccec7790cd60b87e64ec4a153c5920bdfa12a77065d337ef533d4ac4ad20->enter($__internal_17f6ccec7790cd60b87e64ec4a153c5920bdfa12a77065d337ef533d4ac4ad20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/capitalize.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('capitalize', require('../capitalize'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_17f6ccec7790cd60b87e64ec4a153c5920bdfa12a77065d337ef533d4ac4ad20->leave($__internal_17f6ccec7790cd60b87e64ec4a153c5920bdfa12a77065d337ef533d4ac4ad20_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/capitalize.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('capitalize', require('../capitalize'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/capitalize.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/capitalize.js");
    }
}
