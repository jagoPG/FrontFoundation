<?php

/* node_modules/core-js/fn/string/virtual/trim-left.js */
class __TwigTemplate_0d994bbf74d907bcd5464c7896a7ea63ea23c7932b68b5f1fc14e50d5d1705aa extends Twig_Template
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
        $__internal_1d059961f3da6ca126753ca8bfad6aecd41dbeda15c03759c42ac0ccea0e146b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d059961f3da6ca126753ca8bfad6aecd41dbeda15c03759c42ac0ccea0e146b->enter($__internal_1d059961f3da6ca126753ca8bfad6aecd41dbeda15c03759c42ac0ccea0e146b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/virtual/trim-left.js"));

        // line 1
        echo "require('../../../modules/es7.string.trim-left');
module.exports = require('../../../modules/_entry-virtual')('String').trimLeft;
";
        
        $__internal_1d059961f3da6ca126753ca8bfad6aecd41dbeda15c03759c42ac0ccea0e146b->leave($__internal_1d059961f3da6ca126753ca8bfad6aecd41dbeda15c03759c42ac0ccea0e146b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/virtual/trim-left.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es7.string.trim-left');
module.exports = require('../../../modules/_entry-virtual')('String').trimLeft;
", "node_modules/core-js/fn/string/virtual/trim-left.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/virtual/trim-left.js");
    }
}
