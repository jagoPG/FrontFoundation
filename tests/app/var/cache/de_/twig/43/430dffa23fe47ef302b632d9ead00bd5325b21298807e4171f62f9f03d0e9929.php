<?php

/* node_modules/resolve/test/dotdot/abc/index.js */
class __TwigTemplate_97581f2a2f2e4ab2ba38bf0c9f2ddf0cfd0020fcbe7d3da9458af770d1af9841 extends Twig_Template
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
        $__internal_73061d781e1c7c9559f03ce696a375d78fd439eac949f449993062842800527b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73061d781e1c7c9559f03ce696a375d78fd439eac949f449993062842800527b->enter($__internal_73061d781e1c7c9559f03ce696a375d78fd439eac949f449993062842800527b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/test/dotdot/abc/index.js"));

        // line 1
        echo "var x = require('..');
console.log(x);
";
        
        $__internal_73061d781e1c7c9559f03ce696a375d78fd439eac949f449993062842800527b->leave($__internal_73061d781e1c7c9559f03ce696a375d78fd439eac949f449993062842800527b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/test/dotdot/abc/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var x = require('..');
console.log(x);
", "node_modules/resolve/test/dotdot/abc/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/test/dotdot/abc/index.js");
    }
}
