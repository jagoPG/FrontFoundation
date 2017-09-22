<?php

/* node_modules/core-js/fn/string/virtual/match-all.js */
class __TwigTemplate_6cdd3f48538abe58578392eb1d3e05ada9db16b5299325cb01306ebdfe7a09fb extends Twig_Template
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
        $__internal_4a1e62073cc0a6f05095700ea30e368192de73ee306aa7e7068c5315ac0883cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a1e62073cc0a6f05095700ea30e368192de73ee306aa7e7068c5315ac0883cc->enter($__internal_4a1e62073cc0a6f05095700ea30e368192de73ee306aa7e7068c5315ac0883cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/virtual/match-all.js"));

        // line 1
        echo "require('../../../modules/es7.string.match-all');
module.exports = require('../../../modules/_entry-virtual')('String').matchAll;
";
        
        $__internal_4a1e62073cc0a6f05095700ea30e368192de73ee306aa7e7068c5315ac0883cc->leave($__internal_4a1e62073cc0a6f05095700ea30e368192de73ee306aa7e7068c5315ac0883cc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/virtual/match-all.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es7.string.match-all');
module.exports = require('../../../modules/_entry-virtual')('String').matchAll;
", "node_modules/core-js/fn/string/virtual/match-all.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/virtual/match-all.js");
    }
}
