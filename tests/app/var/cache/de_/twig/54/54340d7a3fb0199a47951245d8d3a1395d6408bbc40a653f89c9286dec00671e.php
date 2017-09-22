<?php

/* node_modules/lodash/fp/tail.js */
class __TwigTemplate_f39d676e7555330632ef6de055a9593ccdd338a5c222fa50327b01179d8f6c03 extends Twig_Template
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
        $__internal_e90a34b1f2195a5039d4d08cb0affeb39617f68031fd700b98872224edb31392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e90a34b1f2195a5039d4d08cb0affeb39617f68031fd700b98872224edb31392->enter($__internal_e90a34b1f2195a5039d4d08cb0affeb39617f68031fd700b98872224edb31392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/tail.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('tail', require('../tail'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_e90a34b1f2195a5039d4d08cb0affeb39617f68031fd700b98872224edb31392->leave($__internal_e90a34b1f2195a5039d4d08cb0affeb39617f68031fd700b98872224edb31392_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/tail.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('tail', require('../tail'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/tail.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/tail.js");
    }
}
