<?php

/* node_modules/core-js/fn/symbol/index.js */
class __TwigTemplate_25ab4c5d13f9dcd97856fd926ff8155ae5431f868768b4d516518ccb98c95a17 extends Twig_Template
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
        $__internal_9a4701a9d0fb796170b83c3e8c053d89de17ccbd4170b56b698e32d5ef0f94ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a4701a9d0fb796170b83c3e8c053d89de17ccbd4170b56b698e32d5ef0f94ae->enter($__internal_9a4701a9d0fb796170b83c3e8c053d89de17ccbd4170b56b698e32d5ef0f94ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/symbol/index.js"));

        // line 1
        echo "require('../../modules/es6.symbol');
require('../../modules/es6.object.to-string');
require('../../modules/es7.symbol.async-iterator');
require('../../modules/es7.symbol.observable');
module.exports = require('../../modules/_core').Symbol;
";
        
        $__internal_9a4701a9d0fb796170b83c3e8c053d89de17ccbd4170b56b698e32d5ef0f94ae->leave($__internal_9a4701a9d0fb796170b83c3e8c053d89de17ccbd4170b56b698e32d5ef0f94ae_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/symbol/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.symbol');
require('../../modules/es6.object.to-string');
require('../../modules/es7.symbol.async-iterator');
require('../../modules/es7.symbol.observable');
module.exports = require('../../modules/_core').Symbol;
", "node_modules/core-js/fn/symbol/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/symbol/index.js");
    }
}
