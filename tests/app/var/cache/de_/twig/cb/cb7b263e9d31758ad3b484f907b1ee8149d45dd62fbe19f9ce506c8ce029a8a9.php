<?php

/* node_modules/lodash/fp/functions.js */
class __TwigTemplate_ef1d264f76beb53fd0d8871c3b663058681b31ea868f068ca798def1b2cee2c2 extends Twig_Template
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
        $__internal_b0d11b59544f905cbcf6a8fa83b9ebd19523d672309f94a8e08fd2bfc3095b11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0d11b59544f905cbcf6a8fa83b9ebd19523d672309f94a8e08fd2bfc3095b11->enter($__internal_b0d11b59544f905cbcf6a8fa83b9ebd19523d672309f94a8e08fd2bfc3095b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/functions.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('functions', require('../functions'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_b0d11b59544f905cbcf6a8fa83b9ebd19523d672309f94a8e08fd2bfc3095b11->leave($__internal_b0d11b59544f905cbcf6a8fa83b9ebd19523d672309f94a8e08fd2bfc3095b11_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/functions.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('functions', require('../functions'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/functions.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/functions.js");
    }
}
