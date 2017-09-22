<?php

/* node_modules/core-js/library/fn/string/sup.js */
class __TwigTemplate_597e77c1a940f9e577b610ea9a12846edcfad7068f72714fa3afb541ecf79d70 extends Twig_Template
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
        $__internal_a6b716cfa85de592ebb8213d383287241292108915d27f92c0d8ec9160081c56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6b716cfa85de592ebb8213d383287241292108915d27f92c0d8ec9160081c56->enter($__internal_a6b716cfa85de592ebb8213d383287241292108915d27f92c0d8ec9160081c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/sup.js"));

        // line 1
        echo "require('../../modules/es6.string.sup');
module.exports = require('../../modules/_core').String.sup;
";
        
        $__internal_a6b716cfa85de592ebb8213d383287241292108915d27f92c0d8ec9160081c56->leave($__internal_a6b716cfa85de592ebb8213d383287241292108915d27f92c0d8ec9160081c56_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/sup.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.string.sup');
module.exports = require('../../modules/_core').String.sup;
", "node_modules/core-js/library/fn/string/sup.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/sup.js");
    }
}
