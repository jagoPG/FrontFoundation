<?php

/* node_modules/lodash/fp/setWith.js */
class __TwigTemplate_deb5f7906f1a7aa16098e7c5b316eda88884ada759e8e4d7c9d869367f1a3467 extends Twig_Template
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
        $__internal_83916008ecfbf8699b9afcaec5dd9cc3a84193a4d31bb14e4dfb4d4586f832ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83916008ecfbf8699b9afcaec5dd9cc3a84193a4d31bb14e4dfb4d4586f832ef->enter($__internal_83916008ecfbf8699b9afcaec5dd9cc3a84193a4d31bb14e4dfb4d4586f832ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/setWith.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('setWith', require('../setWith'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_83916008ecfbf8699b9afcaec5dd9cc3a84193a4d31bb14e4dfb4d4586f832ef->leave($__internal_83916008ecfbf8699b9afcaec5dd9cc3a84193a4d31bb14e4dfb4d4586f832ef_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/setWith.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('setWith', require('../setWith'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/setWith.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/setWith.js");
    }
}
