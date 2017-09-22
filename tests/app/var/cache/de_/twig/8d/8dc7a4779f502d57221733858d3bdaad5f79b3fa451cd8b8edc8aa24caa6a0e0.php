<?php

/* node_modules/core-js/library/fn/set-immediate.js */
class __TwigTemplate_1c862252a697592c0b52349fe36c941115c05bd259390405895e42a2fcbc3e40 extends Twig_Template
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
        $__internal_e8165a6edb4ce05bc1ddefb8bf01dddd57f2ed4b817a33f7fa3d4d5b6e833ddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8165a6edb4ce05bc1ddefb8bf01dddd57f2ed4b817a33f7fa3d4d5b6e833ddb->enter($__internal_e8165a6edb4ce05bc1ddefb8bf01dddd57f2ed4b817a33f7fa3d4d5b6e833ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/set-immediate.js"));

        // line 1
        echo "require('../modules/web.immediate');
module.exports = require('../modules/_core').setImmediate;
";
        
        $__internal_e8165a6edb4ce05bc1ddefb8bf01dddd57f2ed4b817a33f7fa3d4d5b6e833ddb->leave($__internal_e8165a6edb4ce05bc1ddefb8bf01dddd57f2ed4b817a33f7fa3d4d5b6e833ddb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/set-immediate.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/web.immediate');
module.exports = require('../modules/_core').setImmediate;
", "node_modules/core-js/library/fn/set-immediate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/set-immediate.js");
    }
}
