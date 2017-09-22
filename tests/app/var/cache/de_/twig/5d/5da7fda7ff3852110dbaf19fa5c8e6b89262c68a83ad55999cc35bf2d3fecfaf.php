<?php

/* node_modules/lodash/fp/defer.js */
class __TwigTemplate_a197b2dc4840c69ada6d2dcb5b42875fd575217a6db761b12cdf7677698763ea extends Twig_Template
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
        $__internal_6642c7fc968405d1c8f4359c69b5d35f799c703d0c0c7a13e801f9e9dc897777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6642c7fc968405d1c8f4359c69b5d35f799c703d0c0c7a13e801f9e9dc897777->enter($__internal_6642c7fc968405d1c8f4359c69b5d35f799c703d0c0c7a13e801f9e9dc897777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/defer.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('defer', require('../defer'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_6642c7fc968405d1c8f4359c69b5d35f799c703d0c0c7a13e801f9e9dc897777->leave($__internal_6642c7fc968405d1c8f4359c69b5d35f799c703d0c0c7a13e801f9e9dc897777_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/defer.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('defer', require('../defer'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/defer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/defer.js");
    }
}
