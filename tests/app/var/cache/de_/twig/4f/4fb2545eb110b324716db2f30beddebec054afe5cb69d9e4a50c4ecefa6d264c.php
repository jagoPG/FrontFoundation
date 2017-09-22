<?php

/* node_modules/babel-runtime/helpers/_instanceof.js */
class __TwigTemplate_e451dfd4cf799d8c717890202f40fb80f84248a35029494bb40c5c92b3872968 extends Twig_Template
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
        $__internal_84d1ba675e5daf6e3aa68eb02a30587152d0f8e81ab2909a655161a7e8c2e145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84d1ba675e5daf6e3aa68eb02a30587152d0f8e81ab2909a655161a7e8c2e145->enter($__internal_84d1ba675e5daf6e3aa68eb02a30587152d0f8e81ab2909a655161a7e8c2e145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/_instanceof.js"));

        // line 1
        echo "module.exports = require(\"./instanceof.js\");";
        
        $__internal_84d1ba675e5daf6e3aa68eb02a30587152d0f8e81ab2909a655161a7e8c2e145->leave($__internal_84d1ba675e5daf6e3aa68eb02a30587152d0f8e81ab2909a655161a7e8c2e145_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/_instanceof.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require(\"./instanceof.js\");", "node_modules/babel-runtime/helpers/_instanceof.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/_instanceof.js");
    }
}
