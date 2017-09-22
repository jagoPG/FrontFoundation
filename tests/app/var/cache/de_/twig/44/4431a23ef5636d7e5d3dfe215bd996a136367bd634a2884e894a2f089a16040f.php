<?php

/* node_modules/core-js/library/fn/reflect/prevent-extensions.js */
class __TwigTemplate_723de393c352d90b339d580fc4536789ce2685e96cd62c85fad0ef2b5716866b extends Twig_Template
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
        $__internal_742925b15b6039a59911b7042c82288a1e4e052a5bbaadf9abe19d61603fb658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_742925b15b6039a59911b7042c82288a1e4e052a5bbaadf9abe19d61603fb658->enter($__internal_742925b15b6039a59911b7042c82288a1e4e052a5bbaadf9abe19d61603fb658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/reflect/prevent-extensions.js"));

        // line 1
        echo "require('../../modules/es6.reflect.prevent-extensions');
module.exports = require('../../modules/_core').Reflect.preventExtensions;
";
        
        $__internal_742925b15b6039a59911b7042c82288a1e4e052a5bbaadf9abe19d61603fb658->leave($__internal_742925b15b6039a59911b7042c82288a1e4e052a5bbaadf9abe19d61603fb658_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/reflect/prevent-extensions.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.reflect.prevent-extensions');
module.exports = require('../../modules/_core').Reflect.preventExtensions;
", "node_modules/core-js/library/fn/reflect/prevent-extensions.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/reflect/prevent-extensions.js");
    }
}
