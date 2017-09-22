<?php

/* node_modules/hoek/test/modules/test3.js */
class __TwigTemplate_55c631bed5450022dc0c62c506e89824cd2a0e57f4b4a24583750c9ee82a419a extends Twig_Template
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
        $__internal_1a9f770b3ac37f51a21700319d1228a555cb3fed05a26fbe9941319fdcdc98ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a9f770b3ac37f51a21700319d1228a555cb3fed05a26fbe9941319fdcdc98ea->enter($__internal_1a9f770b3ac37f51a21700319d1228a555cb3fed05a26fbe9941319fdcdc98ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/hoek/test/modules/test3.js"));

        // line 1
        echo "exports.z = 3;
";
        
        $__internal_1a9f770b3ac37f51a21700319d1228a555cb3fed05a26fbe9941319fdcdc98ea->leave($__internal_1a9f770b3ac37f51a21700319d1228a555cb3fed05a26fbe9941319fdcdc98ea_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/hoek/test/modules/test3.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("exports.z = 3;
", "node_modules/hoek/test/modules/test3.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/hoek/test/modules/test3.js");
    }
}
