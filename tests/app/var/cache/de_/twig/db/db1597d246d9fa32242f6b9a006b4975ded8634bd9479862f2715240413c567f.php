<?php

/* node_modules/json-schema/draft-00/hyper-schema */
class __TwigTemplate_ff40239b8849c4abc9d71b5829da8fcae5ca8ea9f3447777dffa67aa117ac17e extends Twig_Template
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
        $__internal_e1e31127f7e78455ae8876499ebf6de8406f11fd245acfebca92971fda9756b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1e31127f7e78455ae8876499ebf6de8406f11fd245acfebca92971fda9756b0->enter($__internal_e1e31127f7e78455ae8876499ebf6de8406f11fd245acfebca92971fda9756b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/json-schema/draft-00/hyper-schema"));

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
        
        $__internal_e1e31127f7e78455ae8876499ebf6de8406f11fd245acfebca92971fda9756b0->leave($__internal_e1e31127f7e78455ae8876499ebf6de8406f11fd245acfebca92971fda9756b0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/json-schema/draft-00/hyper-schema";
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
}", "node_modules/json-schema/draft-00/hyper-schema", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/json-schema/draft-00/hyper-schema");
    }
}
