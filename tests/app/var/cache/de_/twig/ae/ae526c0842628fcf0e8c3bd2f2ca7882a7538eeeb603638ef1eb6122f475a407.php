<?php

/* node_modules/hoek/test/modules/test1.js */
class __TwigTemplate_74b8d2b2ee6337e3bb248217524f6fcd198840a7fe72cc25106ec0338b487fc7 extends Twig_Template
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
        $__internal_b7438396094abb9b21f0f077c0f13961a10f0e771464a53676c775f556c7edf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7438396094abb9b21f0f077c0f13961a10f0e771464a53676c775f556c7edf8->enter($__internal_b7438396094abb9b21f0f077c0f13961a10f0e771464a53676c775f556c7edf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/hoek/test/modules/test1.js"));

        // line 1
        echo "exports.x = 1;
";
        
        $__internal_b7438396094abb9b21f0f077c0f13961a10f0e771464a53676c775f556c7edf8->leave($__internal_b7438396094abb9b21f0f077c0f13961a10f0e771464a53676c775f556c7edf8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/hoek/test/modules/test1.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("exports.x = 1;
", "node_modules/hoek/test/modules/test1.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/hoek/test/modules/test1.js");
    }
}
