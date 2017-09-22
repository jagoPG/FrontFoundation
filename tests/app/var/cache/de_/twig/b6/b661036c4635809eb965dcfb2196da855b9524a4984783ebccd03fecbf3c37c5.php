<?php

/* node_modules/fsevents/node_modules/json-schema/draft-04/links */
class __TwigTemplate_9e7df10c63615d097819c8ca656178f2451fce84c2e28690be6bbebc016aaa94 extends Twig_Template
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
        $__internal_edbdeda54ed375592cf3dbe634d89a7ea9a84106587627a7ee5d1bb5c162146b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edbdeda54ed375592cf3dbe634d89a7ea9a84106587627a7ee5d1bb5c162146b->enter($__internal_edbdeda54ed375592cf3dbe634d89a7ea9a84106587627a7ee5d1bb5c162146b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/json-schema/draft-04/links"));

        // line 1
        echo "{
\t\"\$schema\" : \"http://json-schema.org/draft-04/hyper-schema#\",
\t\"id\" : \"http://json-schema.org/draft-04/links#\",
\t\"type\" : \"object\",
\t
\t\"properties\" : {
\t\t\"rel\" : {
\t\t\t\"type\" : \"string\"
\t\t},

\t\t\"href\" : {
\t\t\t\"type\" : \"string\"
\t\t},

\t\t\"template\" : {
\t\t\t\"type\" : \"string\"
\t\t},
\t\t
\t\t\"targetSchema\" : {\"\$ref\" : \"http://json-schema.org/draft-04/hyper-schema#\"},
\t\t
\t\t\"method\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"default\" : \"GET\"
\t\t},
\t\t
\t\t\"enctype\" : {
\t\t\t\"type\" : \"string\"
\t\t},
\t\t
\t\t\"properties\" : {
\t\t\t\"type\" : \"object\",
\t\t\t\"additionalProperties\" : {\"\$ref\" : \"http://json-schema.org/draft-04/hyper-schema#\"}
\t\t}
\t},
\t
\t\"required\" : [\"rel\", \"href\"],
\t
\t\"dependencies\" : {
\t\t\"enctype\" : \"method\"
\t}
}";
        
        $__internal_edbdeda54ed375592cf3dbe634d89a7ea9a84106587627a7ee5d1bb5c162146b->leave($__internal_edbdeda54ed375592cf3dbe634d89a7ea9a84106587627a7ee5d1bb5c162146b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/json-schema/draft-04/links";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
\t\"\$schema\" : \"http://json-schema.org/draft-04/hyper-schema#\",
\t\"id\" : \"http://json-schema.org/draft-04/links#\",
\t\"type\" : \"object\",
\t
\t\"properties\" : {
\t\t\"rel\" : {
\t\t\t\"type\" : \"string\"
\t\t},

\t\t\"href\" : {
\t\t\t\"type\" : \"string\"
\t\t},

\t\t\"template\" : {
\t\t\t\"type\" : \"string\"
\t\t},
\t\t
\t\t\"targetSchema\" : {\"\$ref\" : \"http://json-schema.org/draft-04/hyper-schema#\"},
\t\t
\t\t\"method\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"default\" : \"GET\"
\t\t},
\t\t
\t\t\"enctype\" : {
\t\t\t\"type\" : \"string\"
\t\t},
\t\t
\t\t\"properties\" : {
\t\t\t\"type\" : \"object\",
\t\t\t\"additionalProperties\" : {\"\$ref\" : \"http://json-schema.org/draft-04/hyper-schema#\"}
\t\t}
\t},
\t
\t\"required\" : [\"rel\", \"href\"],
\t
\t\"dependencies\" : {
\t\t\"enctype\" : \"method\"
\t}
}", "node_modules/fsevents/node_modules/json-schema/draft-04/links", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/json-schema/draft-04/links");
    }
}
