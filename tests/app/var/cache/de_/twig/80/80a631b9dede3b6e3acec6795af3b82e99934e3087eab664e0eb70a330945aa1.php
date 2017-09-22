<?php

/* node_modules/delegates/Makefile */
class __TwigTemplate_f2e0b61e0be4af6995cff9012e32a590f60059fb543acdbc63d37638b28ea138 extends Twig_Template
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
        $__internal_719a24d1c4cd800dceaabba218997b7d5b7a8695ae7dd3d982acf7848b6f5e84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_719a24d1c4cd800dceaabba218997b7d5b7a8695ae7dd3d982acf7848b6f5e84->enter($__internal_719a24d1c4cd800dceaabba218997b7d5b7a8695ae7dd3d982acf7848b6f5e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/delegates/Makefile"));

        // line 1
        echo "
test:
\t@./node_modules/.bin/mocha \\
\t\t--require should \\
\t\t--reporter spec \\
\t\t--bail

.PHONY: test";
        
        $__internal_719a24d1c4cd800dceaabba218997b7d5b7a8695ae7dd3d982acf7848b6f5e84->leave($__internal_719a24d1c4cd800dceaabba218997b7d5b7a8695ae7dd3d982acf7848b6f5e84_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/delegates/Makefile";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
test:
\t@./node_modules/.bin/mocha \\
\t\t--require should \\
\t\t--reporter spec \\
\t\t--bail

.PHONY: test", "node_modules/delegates/Makefile", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/delegates/Makefile");
    }
}
