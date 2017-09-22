<?php

/* node_modules/json-schema/draft-03/examples/geo */
class __TwigTemplate_111b802716b10d2cc58951c1cd6905503cadefb8a2835634088adcabf7ace3ea extends Twig_Template
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
        $__internal_b7b7012eab6e900d4b9a48604ac0d36a9529007129805416efa5f55058390063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7b7012eab6e900d4b9a48604ac0d36a9529007129805416efa5f55058390063->enter($__internal_b7b7012eab6e900d4b9a48604ac0d36a9529007129805416efa5f55058390063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/json-schema/draft-03/examples/geo"));

        // line 1
        echo "{
\t\"description\" : \"A geographical coordinate\",
\t\"type\" : \"object\",
\t\"properties\" : {
\t\t\"latitude\" : { \"type\" : \"number\" },
\t\t\"longitude\" : { \"type\" : \"number\" }
\t}
}";
        
        $__internal_b7b7012eab6e900d4b9a48604ac0d36a9529007129805416efa5f55058390063->leave($__internal_b7b7012eab6e900d4b9a48604ac0d36a9529007129805416efa5f55058390063_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/json-schema/draft-03/examples/geo";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
\t\"description\" : \"A geographical coordinate\",
\t\"type\" : \"object\",
\t\"properties\" : {
\t\t\"latitude\" : { \"type\" : \"number\" },
\t\t\"longitude\" : { \"type\" : \"number\" }
\t}
}", "node_modules/json-schema/draft-03/examples/geo", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/json-schema/draft-03/examples/geo");
    }
}
