<?php

/* node_modules/core-js/library/fn/array/for-each.js */
class __TwigTemplate_c357d6e3615dcf2324f76274960a8150940b4d67c2d028d06c40baf262f8fed3 extends Twig_Template
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
        $__internal_e9e40131dc43240fa685e57388ae31c9e18978defab72664c1580344b40b189c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9e40131dc43240fa685e57388ae31c9e18978defab72664c1580344b40b189c->enter($__internal_e9e40131dc43240fa685e57388ae31c9e18978defab72664c1580344b40b189c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/array/for-each.js"));

        // line 1
        echo "require('../../modules/es6.array.for-each');
module.exports = require('../../modules/_core').Array.forEach;
";
        
        $__internal_e9e40131dc43240fa685e57388ae31c9e18978defab72664c1580344b40b189c->leave($__internal_e9e40131dc43240fa685e57388ae31c9e18978defab72664c1580344b40b189c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/array/for-each.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.array.for-each');
module.exports = require('../../modules/_core').Array.forEach;
", "node_modules/core-js/library/fn/array/for-each.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/array/for-each.js");
    }
}
