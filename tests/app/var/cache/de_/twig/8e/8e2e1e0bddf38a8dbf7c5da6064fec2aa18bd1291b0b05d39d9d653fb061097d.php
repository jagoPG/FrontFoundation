<?php

/* node_modules/core-js/fn/string/ends-with.js */
class __TwigTemplate_cfba0138d6eae40faaf955a4024786c02246390e69aee5b61ff756813e579eb4 extends Twig_Template
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
        $__internal_21ca54a65dde57db46b6413f1aa892f9bfc740bb7ab43f5a19b9c6b042fa3992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21ca54a65dde57db46b6413f1aa892f9bfc740bb7ab43f5a19b9c6b042fa3992->enter($__internal_21ca54a65dde57db46b6413f1aa892f9bfc740bb7ab43f5a19b9c6b042fa3992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/ends-with.js"));

        // line 1
        echo "require('../../modules/es6.string.ends-with');
module.exports = require('../../modules/_core').String.endsWith;
";
        
        $__internal_21ca54a65dde57db46b6413f1aa892f9bfc740bb7ab43f5a19b9c6b042fa3992->leave($__internal_21ca54a65dde57db46b6413f1aa892f9bfc740bb7ab43f5a19b9c6b042fa3992_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/ends-with.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.string.ends-with');
module.exports = require('../../modules/_core').String.endsWith;
", "node_modules/core-js/fn/string/ends-with.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/ends-with.js");
    }
}
