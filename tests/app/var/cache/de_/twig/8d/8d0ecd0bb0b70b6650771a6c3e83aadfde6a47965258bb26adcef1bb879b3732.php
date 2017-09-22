<?php

/* node_modules/core-js/fn/asap.js */
class __TwigTemplate_ac279af6869958bcdcc63c6914e995a851a58f1d7d07c3e07aaac7ad6b2a5e2f extends Twig_Template
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
        $__internal_dc651ef8f55a52e085ee976770bd1279960aca0c6a67000edac7954d625a8993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc651ef8f55a52e085ee976770bd1279960aca0c6a67000edac7954d625a8993->enter($__internal_dc651ef8f55a52e085ee976770bd1279960aca0c6a67000edac7954d625a8993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/asap.js"));

        // line 1
        echo "require('../modules/es7.asap');
module.exports = require('../modules/_core').asap;
";
        
        $__internal_dc651ef8f55a52e085ee976770bd1279960aca0c6a67000edac7954d625a8993->leave($__internal_dc651ef8f55a52e085ee976770bd1279960aca0c6a67000edac7954d625a8993_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/asap.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es7.asap');
module.exports = require('../modules/_core').asap;
", "node_modules/core-js/fn/asap.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/asap.js");
    }
}
