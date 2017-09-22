<?php

/* node_modules/debug/node.js */
class __TwigTemplate_de266b8580de01e8832c00239ff8fae045de0de18043d41fc109ec04b595f91e extends Twig_Template
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
        $__internal_bc717acc0b4941b4b4eaa6a3984c2f7c8e7337cd1e633af9d81cf3ca27b8dc8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc717acc0b4941b4b4eaa6a3984c2f7c8e7337cd1e633af9d81cf3ca27b8dc8c->enter($__internal_bc717acc0b4941b4b4eaa6a3984c2f7c8e7337cd1e633af9d81cf3ca27b8dc8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/debug/node.js"));

        // line 1
        echo "module.exports = require('./src/node');
";
        
        $__internal_bc717acc0b4941b4b4eaa6a3984c2f7c8e7337cd1e633af9d81cf3ca27b8dc8c->leave($__internal_bc717acc0b4941b4b4eaa6a3984c2f7c8e7337cd1e633af9d81cf3ca27b8dc8c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/debug/node.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require('./src/node');
", "node_modules/debug/node.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/debug/node.js");
    }
}
