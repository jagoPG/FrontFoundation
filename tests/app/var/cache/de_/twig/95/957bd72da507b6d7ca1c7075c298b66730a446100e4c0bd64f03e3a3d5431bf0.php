<?php

/* node_modules/core-js/library/fn/error/is-error.js */
class __TwigTemplate_6d2520718ee1b4eae54accb275d87549ce680e8014030292b07b859b867400fb extends Twig_Template
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
        $__internal_3990478f8cf91dafd53d1620dbe37dca12d0ffaf30f6e50cf9a8f7041fad64f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3990478f8cf91dafd53d1620dbe37dca12d0ffaf30f6e50cf9a8f7041fad64f8->enter($__internal_3990478f8cf91dafd53d1620dbe37dca12d0ffaf30f6e50cf9a8f7041fad64f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/error/is-error.js"));

        // line 1
        echo "require('../../modules/es7.error.is-error');
module.exports = require('../../modules/_core').Error.isError;
";
        
        $__internal_3990478f8cf91dafd53d1620dbe37dca12d0ffaf30f6e50cf9a8f7041fad64f8->leave($__internal_3990478f8cf91dafd53d1620dbe37dca12d0ffaf30f6e50cf9a8f7041fad64f8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/error/is-error.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.error.is-error');
module.exports = require('../../modules/_core').Error.isError;
", "node_modules/core-js/library/fn/error/is-error.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/error/is-error.js");
    }
}
