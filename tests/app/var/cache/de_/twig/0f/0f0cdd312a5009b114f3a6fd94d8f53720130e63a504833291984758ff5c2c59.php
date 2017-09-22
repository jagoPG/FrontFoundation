<?php

/* node_modules/core-js/library/es7/symbol.js */
class __TwigTemplate_679f845016e3101d3b4e96a4cda09ff85bbcf360ec853b51eb640a50af60a0ee extends Twig_Template
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
        $__internal_ca9babb45eb8816b24015a8dc391b1372cbc27ff2580f44e473cffabf6851265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca9babb45eb8816b24015a8dc391b1372cbc27ff2580f44e473cffabf6851265->enter($__internal_ca9babb45eb8816b24015a8dc391b1372cbc27ff2580f44e473cffabf6851265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/es7/symbol.js"));

        // line 1
        echo "require('../modules/es7.symbol.async-iterator');
require('../modules/es7.symbol.observable');
module.exports = require('../modules/_core').Symbol;
";
        
        $__internal_ca9babb45eb8816b24015a8dc391b1372cbc27ff2580f44e473cffabf6851265->leave($__internal_ca9babb45eb8816b24015a8dc391b1372cbc27ff2580f44e473cffabf6851265_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/es7/symbol.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es7.symbol.async-iterator');
require('../modules/es7.symbol.observable');
module.exports = require('../modules/_core').Symbol;
", "node_modules/core-js/library/es7/symbol.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/es7/symbol.js");
    }
}
