<?php

/* node_modules/lodash/extendWith.js */
class __TwigTemplate_cefe3132d72efd277202a87d9eb4da21f852f146b58022088b8a0302b712803e extends Twig_Template
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
        $__internal_880664096a7dbe684404685816988ac35dade5c5097acb972b589c241832194f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_880664096a7dbe684404685816988ac35dade5c5097acb972b589c241832194f->enter($__internal_880664096a7dbe684404685816988ac35dade5c5097acb972b589c241832194f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/extendWith.js"));

        // line 1
        echo "module.exports = require('./assignInWith');
";
        
        $__internal_880664096a7dbe684404685816988ac35dade5c5097acb972b589c241832194f->leave($__internal_880664096a7dbe684404685816988ac35dade5c5097acb972b589c241832194f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/extendWith.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require('./assignInWith');
", "node_modules/lodash/extendWith.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/extendWith.js");
    }
}
