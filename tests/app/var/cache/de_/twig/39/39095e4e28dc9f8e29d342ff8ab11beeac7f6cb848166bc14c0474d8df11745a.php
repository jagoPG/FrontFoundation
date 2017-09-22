<?php

/* node_modules/core-js/library/fn/dict.js */
class __TwigTemplate_ad756a3b46b5e7f8e91cce6b13d53b8da66e23932a633bd5facbd4a1dfa44b56 extends Twig_Template
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
        $__internal_506f0e8e2413663f7708bb986b9d6ebe7c4e3fa85e537873e955885d952644d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_506f0e8e2413663f7708bb986b9d6ebe7c4e3fa85e537873e955885d952644d1->enter($__internal_506f0e8e2413663f7708bb986b9d6ebe7c4e3fa85e537873e955885d952644d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/dict.js"));

        // line 1
        echo "require('../modules/core.dict');
module.exports = require('../modules/_core').Dict;
";
        
        $__internal_506f0e8e2413663f7708bb986b9d6ebe7c4e3fa85e537873e955885d952644d1->leave($__internal_506f0e8e2413663f7708bb986b9d6ebe7c4e3fa85e537873e955885d952644d1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/dict.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/core.dict');
module.exports = require('../modules/_core').Dict;
", "node_modules/core-js/library/fn/dict.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/dict.js");
    }
}
