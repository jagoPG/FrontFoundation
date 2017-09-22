<?php

/* node_modules/lodash/fp/head.js */
class __TwigTemplate_eed7f6338b9246f1abb4a8591bc0b4a9d528c62c773e6414b278abd23ee79892 extends Twig_Template
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
        $__internal_54dad9f1c3b82fe2fe15cd20d4f13a475a2a149d3e967a78a2219c32ceaa6452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54dad9f1c3b82fe2fe15cd20d4f13a475a2a149d3e967a78a2219c32ceaa6452->enter($__internal_54dad9f1c3b82fe2fe15cd20d4f13a475a2a149d3e967a78a2219c32ceaa6452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/head.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('head', require('../head'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_54dad9f1c3b82fe2fe15cd20d4f13a475a2a149d3e967a78a2219c32ceaa6452->leave($__internal_54dad9f1c3b82fe2fe15cd20d4f13a475a2a149d3e967a78a2219c32ceaa6452_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/head.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('head', require('../head'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/head.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/head.js");
    }
}
