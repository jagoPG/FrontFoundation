<?php

/* node_modules/core-js/web/immediate.js */
class __TwigTemplate_b08c2ba506589b32d85f6e3907723dbf073486b4077a0482ce12f254dae1928b extends Twig_Template
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
        $__internal_dbe982f796755b86b8f93b71a57c2b8b2a7a6cf55bfcd730564aa9ef8b423300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbe982f796755b86b8f93b71a57c2b8b2a7a6cf55bfcd730564aa9ef8b423300->enter($__internal_dbe982f796755b86b8f93b71a57c2b8b2a7a6cf55bfcd730564aa9ef8b423300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/web/immediate.js"));

        // line 1
        echo "require('../modules/web.immediate');
module.exports = require('../modules/_core');
";
        
        $__internal_dbe982f796755b86b8f93b71a57c2b8b2a7a6cf55bfcd730564aa9ef8b423300->leave($__internal_dbe982f796755b86b8f93b71a57c2b8b2a7a6cf55bfcd730564aa9ef8b423300_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/web/immediate.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/web.immediate');
module.exports = require('../modules/_core');
", "node_modules/core-js/web/immediate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/web/immediate.js");
    }
}
