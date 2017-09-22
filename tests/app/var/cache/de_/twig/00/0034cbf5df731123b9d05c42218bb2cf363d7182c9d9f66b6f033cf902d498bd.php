<?php

/* node_modules/fsevents/node_modules/json-schema/draft-00/links */
class __TwigTemplate_a4844d5f7b2ea1576a5f85b5e4451efdd4bbe9348c2d9afa82dc7a230e354c2b extends Twig_Template
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
        $__internal_023bc3968a92d3dc549ef6d35c590d67529ba570ec547a10fed7072224dc0b27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_023bc3968a92d3dc549ef6d35c590d67529ba570ec547a10fed7072224dc0b27->enter($__internal_023bc3968a92d3dc549ef6d35c590d67529ba570ec547a10fed7072224dc0b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/json-schema/draft-00/links"));

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
        
        $__internal_023bc3968a92d3dc549ef6d35c590d67529ba570ec547a10fed7072224dc0b27->leave($__internal_023bc3968a92d3dc549ef6d35c590d67529ba570ec547a10fed7072224dc0b27_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/json-schema/draft-00/links";
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
}", "node_modules/fsevents/node_modules/json-schema/draft-00/links", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/json-schema/draft-00/links");
    }
}
