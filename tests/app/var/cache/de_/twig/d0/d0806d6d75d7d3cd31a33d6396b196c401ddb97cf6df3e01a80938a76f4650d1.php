<?php

/* node_modules/json-schema/draft-00/links */
class __TwigTemplate_f0a8a83e0a0ddcd976280098b7340e8fbbc9d53707134e7482f1a873dcc26477 extends Twig_Template
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
        $__internal_5b54dc6f1b2664107af61b70ad788f2fa5ee1adaf020aa946c76e4fcbdcf60c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b54dc6f1b2664107af61b70ad788f2fa5ee1adaf020aa946c76e4fcbdcf60c2->enter($__internal_5b54dc6f1b2664107af61b70ad788f2fa5ee1adaf020aa946c76e4fcbdcf60c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/json-schema/draft-00/links"));

        // line 1
        echo "{
\t\"\$schema\" : \"http://json-schema.org/draft-00/hyper-schema#\",
\t\"id\" : \"http://json-schema.org/draft-00/links#\",
\t\"type\" : \"object\",
\t
\t\"properties\" : {
\t\t\"href\" : {
\t\t\t\"type\" : \"string\"
\t\t},
\t\t
\t\t\"rel\" : {
\t\t\t\"type\" : \"string\"
\t\t},
\t\t
\t\t\"method\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"default\" : \"GET\",
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"enctype\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"requires\" : \"method\",
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"properties\" : {
\t\t\t\"type\" : \"object\",
\t\t\t\"additionalProperties\" : {\"\$ref\" : \"http://json-schema.org/draft-00/hyper-schema#\"},
\t\t\t\"optional\" : true
\t\t}
\t}
}";
        
        $__internal_5b54dc6f1b2664107af61b70ad788f2fa5ee1adaf020aa946c76e4fcbdcf60c2->leave($__internal_5b54dc6f1b2664107af61b70ad788f2fa5ee1adaf020aa946c76e4fcbdcf60c2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/json-schema/draft-00/links";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
\t\"\$schema\" : \"http://json-schema.org/draft-00/hyper-schema#\",
\t\"id\" : \"http://json-schema.org/draft-00/links#\",
\t\"type\" : \"object\",
\t
\t\"properties\" : {
\t\t\"href\" : {
\t\t\t\"type\" : \"string\"
\t\t},
\t\t
\t\t\"rel\" : {
\t\t\t\"type\" : \"string\"
\t\t},
\t\t
\t\t\"method\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"default\" : \"GET\",
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"enctype\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"requires\" : \"method\",
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"properties\" : {
\t\t\t\"type\" : \"object\",
\t\t\t\"additionalProperties\" : {\"\$ref\" : \"http://json-schema.org/draft-00/hyper-schema#\"},
\t\t\t\"optional\" : true
\t\t}
\t}
}", "node_modules/json-schema/draft-00/links", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/json-schema/draft-00/links");
    }
}