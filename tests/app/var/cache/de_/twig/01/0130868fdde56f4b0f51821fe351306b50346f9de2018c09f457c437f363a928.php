<?php

/* node_modules/core-js/library/stage/2.js */
class __TwigTemplate_5d07ab43bba37918f687785025bca72a83ed870f694d0d59732b80a576973e98 extends Twig_Template
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
        $__internal_bd166d11b458986fdcc4abd48d666f811be66dd0e5e00877ea416d57776d4b96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd166d11b458986fdcc4abd48d666f811be66dd0e5e00877ea416d57776d4b96->enter($__internal_bd166d11b458986fdcc4abd48d666f811be66dd0e5e00877ea416d57776d4b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/stage/2.js"));

        // line 1
        echo "require('../modules/es7.symbol.async-iterator');
require('../modules/es7.string.trim-left');
require('../modules/es7.string.trim-right');
module.exports = require('./3');
";
        
        $__internal_bd166d11b458986fdcc4abd48d666f811be66dd0e5e00877ea416d57776d4b96->leave($__internal_bd166d11b458986fdcc4abd48d666f811be66dd0e5e00877ea416d57776d4b96_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/stage/2.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es7.symbol.async-iterator');
require('../modules/es7.string.trim-left');
require('../modules/es7.string.trim-right');
module.exports = require('./3');
", "node_modules/core-js/library/stage/2.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/stage/2.js");
    }
}
