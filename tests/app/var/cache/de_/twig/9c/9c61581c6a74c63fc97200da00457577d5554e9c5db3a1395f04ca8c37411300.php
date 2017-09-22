<?php

/* node_modules/core-js/library/fn/object/entries.js */
class __TwigTemplate_bc43421a3ebb3e5b6fe1e07c2e2ea60bde9bb1a0ff5ca4b81a5c5f7be3e71d42 extends Twig_Template
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
        $__internal_0380b542b5a2906f92c956b9cf63763c2b9c1a87f86d67e16b50abc360b7edd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0380b542b5a2906f92c956b9cf63763c2b9c1a87f86d67e16b50abc360b7edd9->enter($__internal_0380b542b5a2906f92c956b9cf63763c2b9c1a87f86d67e16b50abc360b7edd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/object/entries.js"));

        // line 1
        echo "require('../../modules/es7.object.entries');
module.exports = require('../../modules/_core').Object.entries;
";
        
        $__internal_0380b542b5a2906f92c956b9cf63763c2b9c1a87f86d67e16b50abc360b7edd9->leave($__internal_0380b542b5a2906f92c956b9cf63763c2b9c1a87f86d67e16b50abc360b7edd9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/object/entries.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.object.entries');
module.exports = require('../../modules/_core').Object.entries;
", "node_modules/core-js/library/fn/object/entries.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/object/entries.js");
    }
}
