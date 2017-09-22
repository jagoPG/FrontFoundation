<?php

/* node_modules/resolve/test/resolver/incorrect_main/package.json */
class __TwigTemplate_abb75ff890e64661cf0affc1af939db713bf9fd78bd422377f4a90ac104850e0 extends Twig_Template
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
        $__internal_a7d3095369ae737e65819801864585c2b8f42c55345f18dddea5924c65fc31bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7d3095369ae737e65819801864585c2b8f42c55345f18dddea5924c65fc31bd->enter($__internal_a7d3095369ae737e65819801864585c2b8f42c55345f18dddea5924c65fc31bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/test/resolver/incorrect_main/package.json"));

        // line 1
        echo "{
    \"main\": \"wrong.js\"
}
";
        
        $__internal_a7d3095369ae737e65819801864585c2b8f42c55345f18dddea5924c65fc31bd->leave($__internal_a7d3095369ae737e65819801864585c2b8f42c55345f18dddea5924c65fc31bd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/test/resolver/incorrect_main/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
    \"main\": \"wrong.js\"
}
", "node_modules/resolve/test/resolver/incorrect_main/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/test/resolver/incorrect_main/package.json");
    }
}
