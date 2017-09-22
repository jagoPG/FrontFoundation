<?php

/* node_modules/lodash/fp/wrapperLodash.js */
class __TwigTemplate_153a33d9af8696c701f7f63ff4f9c2a4353da5b147b816a3393b5577999905da extends Twig_Template
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
        $__internal_b83561aee97335d16deb48e42427fdc788dfa6b89fbc97b6e5886f4906c97896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b83561aee97335d16deb48e42427fdc788dfa6b89fbc97b6e5886f4906c97896->enter($__internal_b83561aee97335d16deb48e42427fdc788dfa6b89fbc97b6e5886f4906c97896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/wrapperLodash.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('wrapperLodash', require('../wrapperLodash'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_b83561aee97335d16deb48e42427fdc788dfa6b89fbc97b6e5886f4906c97896->leave($__internal_b83561aee97335d16deb48e42427fdc788dfa6b89fbc97b6e5886f4906c97896_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/wrapperLodash.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('wrapperLodash', require('../wrapperLodash'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/wrapperLodash.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/wrapperLodash.js");
    }
}
