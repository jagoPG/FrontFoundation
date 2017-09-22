<?php

/* node_modules/core-js/library/es6/promise.js */
class __TwigTemplate_fa9abe8a21c749a361254483008fd12adec1a1a4a9d828cd2bfc8de4f1bfd74a extends Twig_Template
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
        $__internal_2e24eab3b2101f024fd24699a46421ade67cb0af6ee64104fca3a4364da94ed5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e24eab3b2101f024fd24699a46421ade67cb0af6ee64104fca3a4364da94ed5->enter($__internal_2e24eab3b2101f024fd24699a46421ade67cb0af6ee64104fca3a4364da94ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/es6/promise.js"));

        // line 1
        echo "require('../modules/es6.object.to-string');
require('../modules/es6.string.iterator');
require('../modules/web.dom.iterable');
require('../modules/es6.promise');
module.exports = require('../modules/_core').Promise;
";
        
        $__internal_2e24eab3b2101f024fd24699a46421ade67cb0af6ee64104fca3a4364da94ed5->leave($__internal_2e24eab3b2101f024fd24699a46421ade67cb0af6ee64104fca3a4364da94ed5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/es6/promise.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es6.object.to-string');
require('../modules/es6.string.iterator');
require('../modules/web.dom.iterable');
require('../modules/es6.promise');
module.exports = require('../modules/_core').Promise;
", "node_modules/core-js/library/es6/promise.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/es6/promise.js");
    }
}
