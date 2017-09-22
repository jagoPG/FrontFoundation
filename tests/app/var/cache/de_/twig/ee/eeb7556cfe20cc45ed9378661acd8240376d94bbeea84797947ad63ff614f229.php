<?php

/* node_modules/core-js/fn/string/virtual/at.js */
class __TwigTemplate_6d04b3bea3a72ac23ace35eb5e1fa779e5903447135e8809851d94d191d8291c extends Twig_Template
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
        $__internal_cc403480efdc189c571814c74a8763610ea30185a8e4a9565113b57638007eed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc403480efdc189c571814c74a8763610ea30185a8e4a9565113b57638007eed->enter($__internal_cc403480efdc189c571814c74a8763610ea30185a8e4a9565113b57638007eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/virtual/at.js"));

        // line 1
        echo "require('../../../modules/es7.string.at');
module.exports = require('../../../modules/_entry-virtual')('String').at;
";
        
        $__internal_cc403480efdc189c571814c74a8763610ea30185a8e4a9565113b57638007eed->leave($__internal_cc403480efdc189c571814c74a8763610ea30185a8e4a9565113b57638007eed_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/virtual/at.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es7.string.at');
module.exports = require('../../../modules/_entry-virtual')('String').at;
", "node_modules/core-js/fn/string/virtual/at.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/virtual/at.js");
    }
}
