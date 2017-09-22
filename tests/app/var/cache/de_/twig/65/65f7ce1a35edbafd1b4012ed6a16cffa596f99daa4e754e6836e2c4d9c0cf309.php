<?php

/* node_modules/core-js/library/fn/string/virtual/trim-start.js */
class __TwigTemplate_9062a70315735b6a88b6e045df3adaeabdf7b635cc3b972e9932515e0f65415e extends Twig_Template
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
        $__internal_d69d408fe7544b91627dea53a3ab790f6b0c7084ab94e824b45d7c75296ce680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d69d408fe7544b91627dea53a3ab790f6b0c7084ab94e824b45d7c75296ce680->enter($__internal_d69d408fe7544b91627dea53a3ab790f6b0c7084ab94e824b45d7c75296ce680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/virtual/trim-start.js"));

        // line 1
        echo "require('../../../modules/es7.string.trim-left');
module.exports = require('../../../modules/_entry-virtual')('String').trimLeft;
";
        
        $__internal_d69d408fe7544b91627dea53a3ab790f6b0c7084ab94e824b45d7c75296ce680->leave($__internal_d69d408fe7544b91627dea53a3ab790f6b0c7084ab94e824b45d7c75296ce680_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/virtual/trim-start.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es7.string.trim-left');
module.exports = require('../../../modules/_entry-virtual')('String').trimLeft;
", "node_modules/core-js/library/fn/string/virtual/trim-start.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/virtual/trim-start.js");
    }
}
