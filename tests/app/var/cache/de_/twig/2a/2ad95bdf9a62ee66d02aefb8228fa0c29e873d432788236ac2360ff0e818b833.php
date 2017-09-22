<?php

/* node_modules/core-js/library/web/immediate.js */
class __TwigTemplate_657fbbe89e9a96cd58c75f603185bfe2e66943bb40b7264aebabc8f5d671651f extends Twig_Template
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
        $__internal_4a5347b9bb856b3c4a75eed8b1195f9cc4ab941e454c7645e70fef62a386d3e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a5347b9bb856b3c4a75eed8b1195f9cc4ab941e454c7645e70fef62a386d3e2->enter($__internal_4a5347b9bb856b3c4a75eed8b1195f9cc4ab941e454c7645e70fef62a386d3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/web/immediate.js"));

        // line 1
        echo "require('../modules/web.immediate');
module.exports = require('../modules/_core');
";
        
        $__internal_4a5347b9bb856b3c4a75eed8b1195f9cc4ab941e454c7645e70fef62a386d3e2->leave($__internal_4a5347b9bb856b3c4a75eed8b1195f9cc4ab941e454c7645e70fef62a386d3e2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/web/immediate.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/web.immediate');
module.exports = require('../modules/_core');
", "node_modules/core-js/library/web/immediate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/web/immediate.js");
    }
}
