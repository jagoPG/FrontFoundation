<?php

/* node_modules/babel-runtime/helpers/define-property.js */
class __TwigTemplate_bb88aab66ed8c2cb6305de9afef19c50b944afc328dcf56cc1643b72213667b0 extends Twig_Template
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
        $__internal_a41628b59267181490d9ff8547c26689accc6ba68fee0c8c4938df53684e40b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a41628b59267181490d9ff8547c26689accc6ba68fee0c8c4938df53684e40b8->enter($__internal_a41628b59267181490d9ff8547c26689accc6ba68fee0c8c4938df53684e40b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/define-property.js"));

        // line 1
        echo "module.exports = require(\"./defineProperty.js\");";
        
        $__internal_a41628b59267181490d9ff8547c26689accc6ba68fee0c8c4938df53684e40b8->leave($__internal_a41628b59267181490d9ff8547c26689accc6ba68fee0c8c4938df53684e40b8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/define-property.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require(\"./defineProperty.js\");", "node_modules/babel-runtime/helpers/define-property.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/define-property.js");
    }
}
