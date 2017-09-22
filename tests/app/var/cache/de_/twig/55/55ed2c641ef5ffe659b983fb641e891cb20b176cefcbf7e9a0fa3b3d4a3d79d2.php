<?php

/* node_modules/fsevents/node_modules/json-schema/draft-03/examples/geo */
class __TwigTemplate_054849d62449cbc2de988a69b33066fa42e9a8119a40576465b5d99bd30eb064 extends Twig_Template
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
        $__internal_e05b476b055014d048f4decdeffef6fc126b1f10fdde503b97319390649a0591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e05b476b055014d048f4decdeffef6fc126b1f10fdde503b97319390649a0591->enter($__internal_e05b476b055014d048f4decdeffef6fc126b1f10fdde503b97319390649a0591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/json-schema/draft-03/examples/geo"));

        // line 1
        echo "{
\t\"description\" : \"A geographical coordinate\",
\t\"type\" : \"object\",
\t\"properties\" : {
\t\t\"latitude\" : { \"type\" : \"number\" },
\t\t\"longitude\" : { \"type\" : \"number\" }
\t}
}";
        
        $__internal_e05b476b055014d048f4decdeffef6fc126b1f10fdde503b97319390649a0591->leave($__internal_e05b476b055014d048f4decdeffef6fc126b1f10fdde503b97319390649a0591_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/json-schema/draft-03/examples/geo";
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
}", "node_modules/fsevents/node_modules/json-schema/draft-03/examples/geo", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/json-schema/draft-03/examples/geo");
    }
}
