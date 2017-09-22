<?php

/* node_modules/core-js/fn/string/virtual/pad-end.js */
class __TwigTemplate_b3701ab9380ad1303d2dd5e46cfa0d35d6587ea9332f96f9ff0fd8aa72e84d6c extends Twig_Template
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
        $__internal_2ef5d4186e904f9ce7c40d38d708c4ff0632a82ca7b655d242f98695d226efe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef5d4186e904f9ce7c40d38d708c4ff0632a82ca7b655d242f98695d226efe9->enter($__internal_2ef5d4186e904f9ce7c40d38d708c4ff0632a82ca7b655d242f98695d226efe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/virtual/pad-end.js"));

        // line 1
        echo "require('../../../modules/es7.string.pad-end');
module.exports = require('../../../modules/_entry-virtual')('String').padEnd;
";
        
        $__internal_2ef5d4186e904f9ce7c40d38d708c4ff0632a82ca7b655d242f98695d226efe9->leave($__internal_2ef5d4186e904f9ce7c40d38d708c4ff0632a82ca7b655d242f98695d226efe9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/virtual/pad-end.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es7.string.pad-end');
module.exports = require('../../../modules/_entry-virtual')('String').padEnd;
", "node_modules/core-js/fn/string/virtual/pad-end.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/virtual/pad-end.js");
    }
}
