<?php

/* node_modules/fsevents/node_modules/tar-pack/test/fixtures/packed-file.txt */
class __TwigTemplate_eb6d5cbaf9c80e44cb2344e31c468a110e91604d7704b31db0676db9a6403208 extends Twig_Template
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
        $__internal_04c5106675d58aa0552f7a29eac479491f2e929bd2cffe11c7504dd2ef1148ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04c5106675d58aa0552f7a29eac479491f2e929bd2cffe11c7504dd2ef1148ad->enter($__internal_04c5106675d58aa0552f7a29eac479491f2e929bd2cffe11c7504dd2ef1148ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/tar-pack/test/fixtures/packed-file.txt"));

        // line 1
        echo "bar";
        
        $__internal_04c5106675d58aa0552f7a29eac479491f2e929bd2cffe11c7504dd2ef1148ad->leave($__internal_04c5106675d58aa0552f7a29eac479491f2e929bd2cffe11c7504dd2ef1148ad_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/tar-pack/test/fixtures/packed-file.txt";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("bar", "node_modules/fsevents/node_modules/tar-pack/test/fixtures/packed-file.txt", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/tar-pack/test/fixtures/packed-file.txt");
    }
}
