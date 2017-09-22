<?php

/* node_modules/json-schema/draft-03/links */
class __TwigTemplate_7ff407b1c45176e1120bf86608cd9b175555346c9c7671c16bba959a3317cc29 extends Twig_Template
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
        $__internal_58b8572b65d2151661f6463792c453efbcdaf1919a193ad3bfa55e5b0f4bd912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58b8572b65d2151661f6463792c453efbcdaf1919a193ad3bfa55e5b0f4bd912->enter($__internal_58b8572b65d2151661f6463792c453efbcdaf1919a193ad3bfa55e5b0f4bd912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/json-schema/draft-03/links"));

        // line 1
        echo "{
\t\"\$schema\" : \"http://json-schema.org/draft-03/hyper-schema#\",
\t\"id\" : \"http://json-schema.org/draft-03/links#\",
\t\"type\" : \"object\",
\t
\t\"properties\" : {
\t\t\"href\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"required\" : true,
\t\t\t\"format\" : \"link-description-object-template\"
\t\t},
\t\t
\t\t\"rel\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"required\" : true
\t\t},
\t\t
\t\t\"targetSchema\" : {\"\$ref\" : \"http://json-schema.org/draft-03/hyper-schema#\"},
\t\t
\t\t\"method\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"default\" : \"GET\"
\t\t},
\t\t
\t\t\"enctype\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"requires\" : \"method\"
\t\t},
\t\t
\t\t\"properties\" : {
\t\t\t\"type\" : \"object\",
\t\t\t\"additionalProperties\" : {\"\$ref\" : \"http://json-schema.org/draft-03/hyper-schema#\"}
\t\t}
\t}
}";
        
        $__internal_58b8572b65d2151661f6463792c453efbcdaf1919a193ad3bfa55e5b0f4bd912->leave($__internal_58b8572b65d2151661f6463792c453efbcdaf1919a193ad3bfa55e5b0f4bd912_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/json-schema/draft-03/links";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
\t\"\$schema\" : \"http://json-schema.org/draft-03/hyper-schema#\",
\t\"id\" : \"http://json-schema.org/draft-03/links#\",
\t\"type\" : \"object\",
\t
\t\"properties\" : {
\t\t\"href\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"required\" : true,
\t\t\t\"format\" : \"link-description-object-template\"
\t\t},
\t\t
\t\t\"rel\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"required\" : true
\t\t},
\t\t
\t\t\"targetSchema\" : {\"\$ref\" : \"http://json-schema.org/draft-03/hyper-schema#\"},
\t\t
\t\t\"method\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"default\" : \"GET\"
\t\t},
\t\t
\t\t\"enctype\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"requires\" : \"method\"
\t\t},
\t\t
\t\t\"properties\" : {
\t\t\t\"type\" : \"object\",
\t\t\t\"additionalProperties\" : {\"\$ref\" : \"http://json-schema.org/draft-03/hyper-schema#\"}
\t\t}
\t}
}", "node_modules/json-schema/draft-03/links", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/json-schema/draft-03/links");
    }
}
