<?php

/* node_modules/lodash/fp/mean.js */
class __TwigTemplate_b8eabd43047092d99ca4fba9807a77195c745ba396cd877140dd5c8c01bdc317 extends Twig_Template
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
        $__internal_367fd12ed4ebf73cef6d12188512fce0d85e5a9eaed5ad83991b044f8c089034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_367fd12ed4ebf73cef6d12188512fce0d85e5a9eaed5ad83991b044f8c089034->enter($__internal_367fd12ed4ebf73cef6d12188512fce0d85e5a9eaed5ad83991b044f8c089034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/mean.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('mean', require('../mean'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_367fd12ed4ebf73cef6d12188512fce0d85e5a9eaed5ad83991b044f8c089034->leave($__internal_367fd12ed4ebf73cef6d12188512fce0d85e5a9eaed5ad83991b044f8c089034_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/mean.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('mean', require('../mean'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/mean.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/mean.js");
    }
}
