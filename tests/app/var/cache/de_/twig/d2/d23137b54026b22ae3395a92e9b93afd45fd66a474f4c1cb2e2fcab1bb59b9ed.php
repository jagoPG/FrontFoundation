<?php

/* node_modules/core-js/library/fn/array/flatten.js */
class __TwigTemplate_cb914598cad895e649de57938fba5b04deb00ea5f22c3611fd323a645555a220 extends Twig_Template
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
        $__internal_c1b31cc90a9bec33442c05dcc409ef49fae5d81ddb8dbf2c95a9d61e717751de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1b31cc90a9bec33442c05dcc409ef49fae5d81ddb8dbf2c95a9d61e717751de->enter($__internal_c1b31cc90a9bec33442c05dcc409ef49fae5d81ddb8dbf2c95a9d61e717751de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/array/flatten.js"));

        // line 1
        echo "require('../../modules/es7.array.flatten');
module.exports = require('../../modules/_core').Array.flatten;
";
        
        $__internal_c1b31cc90a9bec33442c05dcc409ef49fae5d81ddb8dbf2c95a9d61e717751de->leave($__internal_c1b31cc90a9bec33442c05dcc409ef49fae5d81ddb8dbf2c95a9d61e717751de_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/array/flatten.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.array.flatten');
module.exports = require('../../modules/_core').Array.flatten;
", "node_modules/core-js/library/fn/array/flatten.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/array/flatten.js");
    }
}
