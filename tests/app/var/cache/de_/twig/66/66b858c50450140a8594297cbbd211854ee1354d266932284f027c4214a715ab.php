<?php

/* node_modules/fsevents/node_modules/json-schema/draft-03/links */
class __TwigTemplate_7eb41021c3c997de0c619ac82d147a673af53188f458440d481868af23924352 extends Twig_Template
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
        $__internal_ba8ddd2a1bab6b5434ea0e78d70b36f955b9c3195a86a4889f21f9c3402a45fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba8ddd2a1bab6b5434ea0e78d70b36f955b9c3195a86a4889f21f9c3402a45fd->enter($__internal_ba8ddd2a1bab6b5434ea0e78d70b36f955b9c3195a86a4889f21f9c3402a45fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/json-schema/draft-03/links"));

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
        
        $__internal_ba8ddd2a1bab6b5434ea0e78d70b36f955b9c3195a86a4889f21f9c3402a45fd->leave($__internal_ba8ddd2a1bab6b5434ea0e78d70b36f955b9c3195a86a4889f21f9c3402a45fd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/json-schema/draft-03/links";
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
}", "node_modules/fsevents/node_modules/json-schema/draft-03/links", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/json-schema/draft-03/links");
    }
}
