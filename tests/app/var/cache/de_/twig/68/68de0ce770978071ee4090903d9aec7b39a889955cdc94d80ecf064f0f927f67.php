<?php

/* node_modules/fsevents/node_modules/delegates/Makefile */
class __TwigTemplate_7399b25de504811aa6898615edd3fc09b510a9e7194a95c29755505a7a88af39 extends Twig_Template
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
        $__internal_fd74740bf637a6638ebef2c2b0397357fad7225f639004c7cf78a27bf9293e2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd74740bf637a6638ebef2c2b0397357fad7225f639004c7cf78a27bf9293e2d->enter($__internal_fd74740bf637a6638ebef2c2b0397357fad7225f639004c7cf78a27bf9293e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/delegates/Makefile"));

        // line 1
        echo "
test:
\t@./node_modules/.bin/mocha \\
\t\t--require should \\
\t\t--reporter spec \\
\t\t--bail

.PHONY: test";
        
        $__internal_fd74740bf637a6638ebef2c2b0397357fad7225f639004c7cf78a27bf9293e2d->leave($__internal_fd74740bf637a6638ebef2c2b0397357fad7225f639004c7cf78a27bf9293e2d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/delegates/Makefile";
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

.PHONY: test", "node_modules/fsevents/node_modules/delegates/Makefile", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/delegates/Makefile");
    }
}
