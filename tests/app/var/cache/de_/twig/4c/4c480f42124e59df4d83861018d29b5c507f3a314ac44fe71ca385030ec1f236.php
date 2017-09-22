<?php

/* node_modules/core-js/fn/string/sup.js */
class __TwigTemplate_62a51313394282b3b31c219b34646c7319dab8b6c0c4e124420098be4df3649a extends Twig_Template
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
        $__internal_9e549fdb38f2374026cee47683447c7e2fd60d8400efb6d73212ed720743f777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e549fdb38f2374026cee47683447c7e2fd60d8400efb6d73212ed720743f777->enter($__internal_9e549fdb38f2374026cee47683447c7e2fd60d8400efb6d73212ed720743f777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/sup.js"));

        // line 1
        echo "require('../../modules/es6.string.sup');
module.exports = require('../../modules/_core').String.sup;
";
        
        $__internal_9e549fdb38f2374026cee47683447c7e2fd60d8400efb6d73212ed720743f777->leave($__internal_9e549fdb38f2374026cee47683447c7e2fd60d8400efb6d73212ed720743f777_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/sup.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.string.sup');
module.exports = require('../../modules/_core').String.sup;
", "node_modules/core-js/fn/string/sup.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/sup.js");
    }
}
