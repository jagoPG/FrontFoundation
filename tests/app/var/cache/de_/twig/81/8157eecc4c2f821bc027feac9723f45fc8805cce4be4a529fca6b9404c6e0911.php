<?php

/* node_modules/babel-runtime/helpers/_async-generator-delegate.js */
class __TwigTemplate_a635acecc452c90d6602a11814678872d93b9bf1678ebab6eb8295b8d1c48ff9 extends Twig_Template
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
        $__internal_71b765f89ee9b52529a83f79fac3d521b36a97384f5c2efc477e3dcebe140433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71b765f89ee9b52529a83f79fac3d521b36a97384f5c2efc477e3dcebe140433->enter($__internal_71b765f89ee9b52529a83f79fac3d521b36a97384f5c2efc477e3dcebe140433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/_async-generator-delegate.js"));

        // line 1
        echo "module.exports = require(\"./asyncGeneratorDelegate.js\");";
        
        $__internal_71b765f89ee9b52529a83f79fac3d521b36a97384f5c2efc477e3dcebe140433->leave($__internal_71b765f89ee9b52529a83f79fac3d521b36a97384f5c2efc477e3dcebe140433_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/_async-generator-delegate.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require(\"./asyncGeneratorDelegate.js\");", "node_modules/babel-runtime/helpers/_async-generator-delegate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/_async-generator-delegate.js");
    }
}
