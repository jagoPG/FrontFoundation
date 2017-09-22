<?php

/* node_modules/core-js/fn/string/virtual/anchor.js */
class __TwigTemplate_adfc76040b712e4e379dd4204efcb572766b6d6a69f80db5e67cab0e2c9ef789 extends Twig_Template
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
        $__internal_e99cb03f710fee70b0568bff016426d3117cf0d4de81bd3a951b7d322d6494ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e99cb03f710fee70b0568bff016426d3117cf0d4de81bd3a951b7d322d6494ac->enter($__internal_e99cb03f710fee70b0568bff016426d3117cf0d4de81bd3a951b7d322d6494ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/virtual/anchor.js"));

        // line 1
        echo "require('../../../modules/es6.string.anchor');
module.exports = require('../../../modules/_entry-virtual')('String').anchor;
";
        
        $__internal_e99cb03f710fee70b0568bff016426d3117cf0d4de81bd3a951b7d322d6494ac->leave($__internal_e99cb03f710fee70b0568bff016426d3117cf0d4de81bd3a951b7d322d6494ac_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/virtual/anchor.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.string.anchor');
module.exports = require('../../../modules/_entry-virtual')('String').anchor;
", "node_modules/core-js/fn/string/virtual/anchor.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/virtual/anchor.js");
    }
}
