<?php

/* node_modules/fsevents/node_modules/json-schema/draft-01/hyper-schema */
class __TwigTemplate_3657df89a549d13964a753aa4b95eeacff7fbf94599b532750e4083409ba7f13 extends Twig_Template
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
        $__internal_43cce9f37548f488a86f1d8bedfa52f45ed70ddd597f2d32345fa095ef54d203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43cce9f37548f488a86f1d8bedfa52f45ed70ddd597f2d32345fa095ef54d203->enter($__internal_43cce9f37548f488a86f1d8bedfa52f45ed70ddd597f2d32345fa095ef54d203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/json-schema/draft-01/hyper-schema"));

        // line 1
        echo "{
\t\"\$schema\" : \"http://json-schema.org/draft-01/hyper-schema#\",
\t\"id\" : \"http://json-schema.org/draft-01/hyper-schema#\",

\t\"properties\" : {
\t\t\"links\" : {
\t\t\t\"type\" : \"array\",
\t\t\t\"items\" : {\"\$ref\" : \"http://json-schema.org/draft-01/links#\"},
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
\t\"extends\" : {\"\$ref\" : \"http://json-schema.org/draft-01/schema#\"}
}";
        
        $__internal_43cce9f37548f488a86f1d8bedfa52f45ed70ddd597f2d32345fa095ef54d203->leave($__internal_43cce9f37548f488a86f1d8bedfa52f45ed70ddd597f2d32345fa095ef54d203_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/json-schema/draft-01/hyper-schema";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
\t\"\$schema\" : \"http://json-schema.org/draft-01/hyper-schema#\",
\t\"id\" : \"http://json-schema.org/draft-01/hyper-schema#\",

\t\"properties\" : {
\t\t\"links\" : {
\t\t\t\"type\" : \"array\",
\t\t\t\"items\" : {\"\$ref\" : \"http://json-schema.org/draft-01/links#\"},
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
\t\"extends\" : {\"\$ref\" : \"http://json-schema.org/draft-01/schema#\"}
}", "node_modules/fsevents/node_modules/json-schema/draft-01/hyper-schema", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/json-schema/draft-01/hyper-schema");
    }
}
