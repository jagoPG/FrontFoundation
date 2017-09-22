<?php

/* node_modules/lodash/fp/ceil.js */
class __TwigTemplate_dff142e9fc141445ad5422c6019657fd6df9ce7ce76f8e439f062f0a7065819e extends Twig_Template
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
        $__internal_672972663a41ad9d41bf9a27c65115e8d56de8814baeb238c307fd5fa0f1f5d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_672972663a41ad9d41bf9a27c65115e8d56de8814baeb238c307fd5fa0f1f5d5->enter($__internal_672972663a41ad9d41bf9a27c65115e8d56de8814baeb238c307fd5fa0f1f5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/ceil.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('ceil', require('../ceil'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_672972663a41ad9d41bf9a27c65115e8d56de8814baeb238c307fd5fa0f1f5d5->leave($__internal_672972663a41ad9d41bf9a27c65115e8d56de8814baeb238c307fd5fa0f1f5d5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/ceil.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('ceil', require('../ceil'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/ceil.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/ceil.js");
    }
}
