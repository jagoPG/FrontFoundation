<?php

/* node_modules/core-js/fn/typed/uint16-array.js */
class __TwigTemplate_c9b9c8bfb6d9546c7ac63bf5b4ae22796fbba436fe9ffe6981bfe30ad973542c extends Twig_Template
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
        $__internal_d937f2934022d73150b8489974f10fa264dd0f3f7739a4fbb345d460d4b346ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d937f2934022d73150b8489974f10fa264dd0f3f7739a4fbb345d460d4b346ac->enter($__internal_d937f2934022d73150b8489974f10fa264dd0f3f7739a4fbb345d460d4b346ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/typed/uint16-array.js"));

        // line 1
        echo "require('../../modules/es6.typed.uint16-array');
module.exports = require('../../modules/_core').Uint16Array;
";
        
        $__internal_d937f2934022d73150b8489974f10fa264dd0f3f7739a4fbb345d460d4b346ac->leave($__internal_d937f2934022d73150b8489974f10fa264dd0f3f7739a4fbb345d460d4b346ac_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/typed/uint16-array.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.typed.uint16-array');
module.exports = require('../../modules/_core').Uint16Array;
", "node_modules/core-js/fn/typed/uint16-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/typed/uint16-array.js");
    }
}
