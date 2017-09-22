<?php

/* node_modules/lodash/fp/sortedIndexOf.js */
class __TwigTemplate_15dc9e1f48496d9612972495338e06764bf4bbcc9a89ca492961165e5ebad75b extends Twig_Template
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
        $__internal_5c2a8e5c8a8698743575fd003f82714f0aa705f7fb8a23dbdb9338865cfccb49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c2a8e5c8a8698743575fd003f82714f0aa705f7fb8a23dbdb9338865cfccb49->enter($__internal_5c2a8e5c8a8698743575fd003f82714f0aa705f7fb8a23dbdb9338865cfccb49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/sortedIndexOf.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('sortedIndexOf', require('../sortedIndexOf'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_5c2a8e5c8a8698743575fd003f82714f0aa705f7fb8a23dbdb9338865cfccb49->leave($__internal_5c2a8e5c8a8698743575fd003f82714f0aa705f7fb8a23dbdb9338865cfccb49_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/sortedIndexOf.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('sortedIndexOf', require('../sortedIndexOf'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/sortedIndexOf.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/sortedIndexOf.js");
    }
}
