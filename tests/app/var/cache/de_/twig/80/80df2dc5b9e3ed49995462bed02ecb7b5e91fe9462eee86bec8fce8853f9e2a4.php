<?php

/* node_modules/delayed-stream/Makefile */
class __TwigTemplate_9f6e377bd7107c8cbfb7d0a67e861f46848ca059dd2f30ad32f1ccd9bca14023 extends Twig_Template
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
        $__internal_f774d66883801406c5fee82b9bf122af7a0a21ccb305a9d8462f29c79740495b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f774d66883801406c5fee82b9bf122af7a0a21ccb305a9d8462f29c79740495b->enter($__internal_f774d66883801406c5fee82b9bf122af7a0a21ccb305a9d8462f29c79740495b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/delayed-stream/Makefile"));

        // line 1
        echo "SHELL := /bin/bash

test:
\t@./test/run.js

.PHONY: test

";
        
        $__internal_f774d66883801406c5fee82b9bf122af7a0a21ccb305a9d8462f29c79740495b->leave($__internal_f774d66883801406c5fee82b9bf122af7a0a21ccb305a9d8462f29c79740495b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/delayed-stream/Makefile";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("SHELL := /bin/bash

test:
\t@./test/run.js

.PHONY: test

", "node_modules/delayed-stream/Makefile", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/delayed-stream/Makefile");
    }
}
