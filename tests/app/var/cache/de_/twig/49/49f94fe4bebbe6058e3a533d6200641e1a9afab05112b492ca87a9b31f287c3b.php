<?php

/* node_modules/babel-runtime/helpers/async-generator-delegate.js */
class __TwigTemplate_6f15d1d9fb1da110d48502e374fca94fd62da27b03c4bd9fc8e89584deee048f extends Twig_Template
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
        $__internal_40726a5f1e4fb9fe0c512a69d15bac7cba38a4a15a03eb23a36a5451603d0692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40726a5f1e4fb9fe0c512a69d15bac7cba38a4a15a03eb23a36a5451603d0692->enter($__internal_40726a5f1e4fb9fe0c512a69d15bac7cba38a4a15a03eb23a36a5451603d0692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/async-generator-delegate.js"));

        // line 1
        echo "module.exports = require(\"./asyncGeneratorDelegate.js\");";
        
        $__internal_40726a5f1e4fb9fe0c512a69d15bac7cba38a4a15a03eb23a36a5451603d0692->leave($__internal_40726a5f1e4fb9fe0c512a69d15bac7cba38a4a15a03eb23a36a5451603d0692_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/async-generator-delegate.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require(\"./asyncGeneratorDelegate.js\");", "node_modules/babel-runtime/helpers/async-generator-delegate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/async-generator-delegate.js");
    }
}
