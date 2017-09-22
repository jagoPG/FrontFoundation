<?php

/* node_modules/fsevents/node_modules/delayed-stream/Makefile */
class __TwigTemplate_e759e0f9302755b88e8edc7a4ffd6aab39de5e7832750fbaab05fd9538a69263 extends Twig_Template
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
        $__internal_4ec24ee4ba6c464562eb298a18519d487e8d858e3c34748bc5f5e9c93044f393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ec24ee4ba6c464562eb298a18519d487e8d858e3c34748bc5f5e9c93044f393->enter($__internal_4ec24ee4ba6c464562eb298a18519d487e8d858e3c34748bc5f5e9c93044f393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/delayed-stream/Makefile"));

        // line 1
        echo "SHELL := /bin/bash

test:
\t@./test/run.js

.PHONY: test

";
        
        $__internal_4ec24ee4ba6c464562eb298a18519d487e8d858e3c34748bc5f5e9c93044f393->leave($__internal_4ec24ee4ba6c464562eb298a18519d487e8d858e3c34748bc5f5e9c93044f393_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/delayed-stream/Makefile";
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

", "node_modules/fsevents/node_modules/delayed-stream/Makefile", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/delayed-stream/Makefile");
    }
}
