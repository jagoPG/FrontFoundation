<?php

/* node_modules/core-js/library/fn/date/now.js */
class __TwigTemplate_d887e62459a16777a2a85de2b71bd0933def32f01c4e1906c5d893f6b1582873 extends Twig_Template
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
        $__internal_3450755eac1e8c7f690742c8eaae6e56502d56a05c8814568c02ea773bb1ff8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3450755eac1e8c7f690742c8eaae6e56502d56a05c8814568c02ea773bb1ff8b->enter($__internal_3450755eac1e8c7f690742c8eaae6e56502d56a05c8814568c02ea773bb1ff8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/date/now.js"));

        // line 1
        echo "require('../../modules/es6.date.now');
module.exports = require('../../modules/_core').Date.now;
";
        
        $__internal_3450755eac1e8c7f690742c8eaae6e56502d56a05c8814568c02ea773bb1ff8b->leave($__internal_3450755eac1e8c7f690742c8eaae6e56502d56a05c8814568c02ea773bb1ff8b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/date/now.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.date.now');
module.exports = require('../../modules/_core').Date.now;
", "node_modules/core-js/library/fn/date/now.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/date/now.js");
    }
}
