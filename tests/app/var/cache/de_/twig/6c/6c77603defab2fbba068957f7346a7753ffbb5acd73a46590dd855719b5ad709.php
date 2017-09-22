<?php

/* node_modules/fsevents/node_modules/json-schema/draft-02/hyper-schema */
class __TwigTemplate_447dbef342cdce24caf6d15bd6666c9b178393018a5216db988d480afd962c91 extends Twig_Template
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
        $__internal_9f554a0aef8d00fb8e322653a3be229f4c271fefb0a43c377d2cec457ae98ec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f554a0aef8d00fb8e322653a3be229f4c271fefb0a43c377d2cec457ae98ec5->enter($__internal_9f554a0aef8d00fb8e322653a3be229f4c271fefb0a43c377d2cec457ae98ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/json-schema/draft-02/hyper-schema"));

        // line 1
        echo "{
\t\"\$schema\" : \"http://json-schema.org/draft-02/hyper-schema#\",
\t\"id\" : \"http://json-schema.org/draft-02/hyper-schema#\",

\t\"properties\" : {
\t\t\"links\" : {
\t\t\t\"type\" : \"array\",
\t\t\t\"items\" : {\"\$ref\" : \"http://json-schema.org/draft-02/links#\"},
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"fragmentResolution\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"optional\" : true,
\t\t\t\"default\" : \"slash-delimited\"
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
\t\"fragmentResolution\" : \"slash-delimited\",
\t\"extends\" : {\"\$ref\" : \"http://json-schema.org/draft-02/schema#\"}
}";
        
        $__internal_9f554a0aef8d00fb8e322653a3be229f4c271fefb0a43c377d2cec457ae98ec5->leave($__internal_9f554a0aef8d00fb8e322653a3be229f4c271fefb0a43c377d2cec457ae98ec5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/json-schema/draft-02/hyper-schema";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
\t\"\$schema\" : \"http://json-schema.org/draft-02/hyper-schema#\",
\t\"id\" : \"http://json-schema.org/draft-02/hyper-schema#\",

\t\"properties\" : {
\t\t\"links\" : {
\t\t\t\"type\" : \"array\",
\t\t\t\"items\" : {\"\$ref\" : \"http://json-schema.org/draft-02/links#\"},
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"fragmentResolution\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"optional\" : true,
\t\t\t\"default\" : \"slash-delimited\"
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
\t\"fragmentResolution\" : \"slash-delimited\",
\t\"extends\" : {\"\$ref\" : \"http://json-schema.org/draft-02/schema#\"}
}", "node_modules/fsevents/node_modules/json-schema/draft-02/hyper-schema", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/json-schema/draft-02/hyper-schema");
    }
}
