<?php

/* node_modules/core-js/es7/array.js */
class __TwigTemplate_dede216a9ed8d15bbcd37a6425f2455302a2f085ec08d38c617d16ccf3b13c08 extends Twig_Template
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
        $__internal_1161527424ff196801081f5349983c5c42fd98505c4257f00f8c23744432bf13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1161527424ff196801081f5349983c5c42fd98505c4257f00f8c23744432bf13->enter($__internal_1161527424ff196801081f5349983c5c42fd98505c4257f00f8c23744432bf13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/es7/array.js"));

        // line 1
        echo "require('../modules/es7.array.includes');
require('../modules/es7.array.flat-map');
require('../modules/es7.array.flatten');
module.exports = require('../modules/_core').Array;
";
        
        $__internal_1161527424ff196801081f5349983c5c42fd98505c4257f00f8c23744432bf13->leave($__internal_1161527424ff196801081f5349983c5c42fd98505c4257f00f8c23744432bf13_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/es7/array.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es7.array.includes');
require('../modules/es7.array.flat-map');
require('../modules/es7.array.flatten');
module.exports = require('../modules/_core').Array;
", "node_modules/core-js/es7/array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/es7/array.js");
    }
}
