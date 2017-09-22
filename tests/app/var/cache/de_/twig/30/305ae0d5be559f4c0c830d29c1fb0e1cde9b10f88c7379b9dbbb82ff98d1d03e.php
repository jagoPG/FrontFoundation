<?php

/* node_modules/lodash/fp/template.js */
class __TwigTemplate_320acb33011f002966ffc6c99f21e75d72fc90277b81ab5d24406e5a6bacc10a extends Twig_Template
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
        $__internal_7961b54cfb30c3bdc045048b330b9516d8f2ed6373c34c5609985483d1484994 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7961b54cfb30c3bdc045048b330b9516d8f2ed6373c34c5609985483d1484994->enter($__internal_7961b54cfb30c3bdc045048b330b9516d8f2ed6373c34c5609985483d1484994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/template.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('template', require('../template'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_7961b54cfb30c3bdc045048b330b9516d8f2ed6373c34c5609985483d1484994->leave($__internal_7961b54cfb30c3bdc045048b330b9516d8f2ed6373c34c5609985483d1484994_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/template.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('template', require('../template'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/template.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/template.js");
    }
}
