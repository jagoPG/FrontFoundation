<?php

/* node_modules/foreach/Makefile */
class __TwigTemplate_356dbd2c88f12240c75ecbd49b012c65199d5615c893ae026ea7c63ab2cd245c extends Twig_Template
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
        $__internal_005378c727832f958b282a54637d1555d2b66eaf916509e4427943ec5f4e9e16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_005378c727832f958b282a54637d1555d2b66eaf916509e4427943ec5f4e9e16->enter($__internal_005378c727832f958b282a54637d1555d2b66eaf916509e4427943ec5f4e9e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/foreach/Makefile"));

        // line 1
        echo "
build: components
\t@component build

components: component.json
\t@component install --dev

clean:
\trm -fr build components template.js

.PHONY: clean
";
        
        $__internal_005378c727832f958b282a54637d1555d2b66eaf916509e4427943ec5f4e9e16->leave($__internal_005378c727832f958b282a54637d1555d2b66eaf916509e4427943ec5f4e9e16_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/foreach/Makefile";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
build: components
\t@component build

components: component.json
\t@component install --dev

clean:
\trm -fr build components template.js

.PHONY: clean
", "node_modules/foreach/Makefile", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/foreach/Makefile");
    }
}
