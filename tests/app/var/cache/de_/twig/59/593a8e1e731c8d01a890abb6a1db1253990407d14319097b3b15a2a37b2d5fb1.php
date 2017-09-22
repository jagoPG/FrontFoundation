<?php

/* node_modules/resolve/test/resolver/same_names/foo.js */
class __TwigTemplate_a3ceba3c4d5c1aa3f8b3ceb478f8f44c8ae44ea518d4f859dee1686b52cced3e extends Twig_Template
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
        $__internal_8aa927d7acce38ed963a7451e90955984dc6b528b915502197c145543c618264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aa927d7acce38ed963a7451e90955984dc6b528b915502197c145543c618264->enter($__internal_8aa927d7acce38ed963a7451e90955984dc6b528b915502197c145543c618264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/test/resolver/same_names/foo.js"));

        // line 1
        echo "module.exports = 42;
";
        
        $__internal_8aa927d7acce38ed963a7451e90955984dc6b528b915502197c145543c618264->leave($__internal_8aa927d7acce38ed963a7451e90955984dc6b528b915502197c145543c618264_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/test/resolver/same_names/foo.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = 42;
", "node_modules/resolve/test/resolver/same_names/foo.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/test/resolver/same_names/foo.js");
    }
}
