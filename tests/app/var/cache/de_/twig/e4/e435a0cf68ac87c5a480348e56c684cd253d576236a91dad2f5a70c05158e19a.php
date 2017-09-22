<?php

/* node_modules/core-js/fn/object/get-own-property-symbols.js */
class __TwigTemplate_27b44885d876bb60de8931017e30cd8a5a32df044e82a7b597ed1feddcaa2f2a extends Twig_Template
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
        $__internal_51e1ed9d2ba0998fcc46080a6b98ef69c3de83410d02c609325698cedbbde5f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51e1ed9d2ba0998fcc46080a6b98ef69c3de83410d02c609325698cedbbde5f3->enter($__internal_51e1ed9d2ba0998fcc46080a6b98ef69c3de83410d02c609325698cedbbde5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/object/get-own-property-symbols.js"));

        // line 1
        echo "require('../../modules/es6.symbol');
module.exports = require('../../modules/_core').Object.getOwnPropertySymbols;
";
        
        $__internal_51e1ed9d2ba0998fcc46080a6b98ef69c3de83410d02c609325698cedbbde5f3->leave($__internal_51e1ed9d2ba0998fcc46080a6b98ef69c3de83410d02c609325698cedbbde5f3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/object/get-own-property-symbols.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.symbol');
module.exports = require('../../modules/_core').Object.getOwnPropertySymbols;
", "node_modules/core-js/fn/object/get-own-property-symbols.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/object/get-own-property-symbols.js");
    }
}
