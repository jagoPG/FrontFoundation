<?php

/* node_modules/fsevents/node_modules/json-schema/draft-00/hyper-schema */
class __TwigTemplate_604e9507957290acfe7009f6b410452999a9a1dec1a97f62b28ace3854e99d59 extends Twig_Template
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
        $__internal_47cbf94f96c494f2979d7048024043ccd84fb6c57ff4d940f1f111f6cb56dd6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47cbf94f96c494f2979d7048024043ccd84fb6c57ff4d940f1f111f6cb56dd6b->enter($__internal_47cbf94f96c494f2979d7048024043ccd84fb6c57ff4d940f1f111f6cb56dd6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/json-schema/draft-00/hyper-schema"));

        // line 1
        echo "{
\t\"\$schema\" : \"http://json-schema.org/draft-00/hyper-schema#\",
\t\"id\" : \"http://json-schema.org/draft-00/hyper-schema#\",

\t\"properties\" : {
\t\t\"links\" : {
\t\t\t\"type\" : \"array\",
\t\t\t\"items\" : {\"\$ref\" : \"http://json-schema.org/draft-00/links#\"},
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"fragmentResolution\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"optional\" : true,
\t\t\t\"default\" : \"dot-delimited\"
\t\t},
\t\t
\t\t\"root\" : {
\t\t\t\"type\" : \"boolean\",
\t\t\t\"optional\" : true,
\t\t\t\"default\" : false
\t\t},
\t\t
\t\t\"readonly\" : {
\t\t\t\"type\" : \"boolean\",
\t\t\t\"optional\" : true,
\t\t\t\"default\" : false
\t\t},
\t\t
\t\t\"pathStart\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"optional\" : true,
\t\t\t\"format\" : \"uri\"
\t\t},
\t\t
\t\t\"mediaType\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"optional\" : true,
\t\t\t\"format\" : \"media-type\"
\t\t},
\t\t
\t\t\"alternate\" : {
\t\t\t\"type\" : \"array\",
\t\t\t\"items\" : {\"\$ref\" : \"#\"},
\t\t\t\"optional\" : true
\t\t}
\t},
\t
\t\"links\" : [
\t\t{
\t\t\t\"href\" : \"{\$ref}\",
\t\t\t\"rel\" : \"full\"
\t\t},
\t\t
\t\t{
\t\t\t\"href\" : \"{\$schema}\",
\t\t\t\"rel\" : \"describedby\"
\t\t},
\t\t
\t\t{
\t\t\t\"href\" : \"{id}\",
\t\t\t\"rel\" : \"self\"
\t\t}
\t],
\t
\t\"fragmentResolution\" : \"dot-delimited\",
\t\"extends\" : {\"\$ref\" : \"http://json-schema.org/draft-00/schema#\"}
}";
        
        $__internal_47cbf94f96c494f2979d7048024043ccd84fb6c57ff4d940f1f111f6cb56dd6b->leave($__internal_47cbf94f96c494f2979d7048024043ccd84fb6c57ff4d940f1f111f6cb56dd6b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/json-schema/draft-00/hyper-schema";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
\t\"\$schema\" : \"http://json-schema.org/draft-00/hyper-schema#\",
\t\"id\" : \"http://json-schema.org/draft-00/hyper-schema#\",

\t\"properties\" : {
\t\t\"links\" : {
\t\t\t\"type\" : \"array\",
\t\t\t\"items\" : {\"\$ref\" : \"http://json-schema.org/draft-00/links#\"},
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"fragmentResolution\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"optional\" : true,
\t\t\t\"default\" : \"dot-delimited\"
\t\t},
\t\t
\t\t\"root\" : {
\t\t\t\"type\" : \"boolean\",
\t\t\t\"optional\" : true,
\t\t\t\"default\" : false
\t\t},
\t\t
\t\t\"readonly\" : {
\t\t\t\"type\" : \"boolean\",
\t\t\t\"optional\" : true,
\t\t\t\"default\" : false
\t\t},
\t\t
\t\t\"pathStart\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"optional\" : true,
\t\t\t\"format\" : \"uri\"
\t\t},
\t\t
\t\t\"mediaType\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"optional\" : true,
\t\t\t\"format\" : \"media-type\"
\t\t},
\t\t
\t\t\"alternate\" : {
\t\t\t\"type\" : \"array\",
\t\t\t\"items\" : {\"\$ref\" : \"#\"},
\t\t\t\"optional\" : true
\t\t}
\t},
\t
\t\"links\" : [
\t\t{
\t\t\t\"href\" : \"{\$ref}\",
\t\t\t\"rel\" : \"full\"
\t\t},
\t\t
\t\t{
\t\t\t\"href\" : \"{\$schema}\",
\t\t\t\"rel\" : \"describedby\"
\t\t},
\t\t
\t\t{
\t\t\t\"href\" : \"{id}\",
\t\t\t\"rel\" : \"self\"
\t\t}
\t],
\t
\t\"fragmentResolution\" : \"dot-delimited\",
\t\"extends\" : {\"\$ref\" : \"http://json-schema.org/draft-00/schema#\"}
}", "node_modules/fsevents/node_modules/json-schema/draft-00/hyper-schema", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/json-schema/draft-00/hyper-schema");
    }
}
