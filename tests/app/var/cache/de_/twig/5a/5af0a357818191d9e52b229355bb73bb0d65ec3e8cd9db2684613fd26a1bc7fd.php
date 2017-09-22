<?php

/* node_modules/isarray/Makefile */
class __TwigTemplate_14d735cb6f21c0685b23bf23a19a6c755bd2cb6cdb50f409fced215c5a8b72a2 extends Twig_Template
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
        $__internal_304db9d6fc41395d78bd7cc14fff9627b6f81f9422b0360389555c50a3c7dc1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_304db9d6fc41395d78bd7cc14fff9627b6f81f9422b0360389555c50a3c7dc1a->enter($__internal_304db9d6fc41395d78bd7cc14fff9627b6f81f9422b0360389555c50a3c7dc1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/isarray/Makefile"));

        // line 1
        echo "
test:
\t@node_modules/.bin/tape test.js

.PHONY: test

";
        
        $__internal_304db9d6fc41395d78bd7cc14fff9627b6f81f9422b0360389555c50a3c7dc1a->leave($__internal_304db9d6fc41395d78bd7cc14fff9627b6f81f9422b0360389555c50a3c7dc1a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/isarray/Makefile";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
test:
\t@node_modules/.bin/tape test.js

.PHONY: test

", "node_modules/isarray/Makefile", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/isarray/Makefile");
    }
}
