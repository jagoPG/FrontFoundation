<?php

/* node_modules/fsevents/node_modules/isarray/Makefile */
class __TwigTemplate_cd107e970503d39748a04463a3cab6ba2f0f88c14ecc9424e5128b6834f893c3 extends Twig_Template
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
        $__internal_03d9de320349f5e2b93fc46ab5292ab0cc6c4bcd3a1b451996e922799a9c7124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03d9de320349f5e2b93fc46ab5292ab0cc6c4bcd3a1b451996e922799a9c7124->enter($__internal_03d9de320349f5e2b93fc46ab5292ab0cc6c4bcd3a1b451996e922799a9c7124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/isarray/Makefile"));

        // line 1
        echo "
test:
\t@node_modules/.bin/tape test.js

.PHONY: test

";
        
        $__internal_03d9de320349f5e2b93fc46ab5292ab0cc6c4bcd3a1b451996e922799a9c7124->leave($__internal_03d9de320349f5e2b93fc46ab5292ab0cc6c4bcd3a1b451996e922799a9c7124_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/isarray/Makefile";
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

", "node_modules/fsevents/node_modules/isarray/Makefile", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/isarray/Makefile");
    }
}
